<?php
namespace App\Http\Controllers;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use DB;
use App\User;
use App\Vendor;
use App\Review;
use App\Category;
use URL;
use Mail;

class StoreFrontController extends Controller
{

  public function VendorsByState(Request $request) {
    $state = request()->segment(2);
    $cssPath = URL::to('/')."/resources/css/storefront.css";
    $current_page   = 1;
    $items_per_page = 8;
    $vendors_query  = Vendor::where(['state'=>$state]);
    $MainCatData  = DB::select("SELECT * FROM  tbl_category WHERE id IN (SELECT DISTINCT sub_cat FROM vendors WHERE  state = '".$state."')");

    $vendors_count  = $vendors_query->count();
    $total_pages    = ceil($vendors_count/$items_per_page);
    $vendors_query->limit($items_per_page)->offset(0);
    $vendors = $vendors_query->get();
    $sumResult = DB::select("SELECT SUM(rating) as rating,count(*) as total_rows,vendor_id from  tbl_vendor_reviews group by vendor_id");
    $CountResult = DB::select("SELECT count(*) as rating,vendor_id from  tbl_vendor_reviews group by vendor_id");
    $ratingAndCountArray=[];
    foreach ($sumResult as $rc=>$svr) {
      if(!isset($ratingAndCountArray[$svr->vendor_id])){
        $ratingAndCountArray[$svr->vendor_id]=[];
      }
      $ratingAndCountArray[$svr->vendor_id]['ratings']=  $svr->rating;
      $ratingAndCountArray[$svr->vendor_id]['rows']=  $svr->total_rows;
    }

    $vendorFeatures = [];
    foreach ($vendors as $vrs){
      $features = explode(',', $vrs->features);
      foreach ($features as $ft) {
       if(!in_array($ft, $vendorFeatures)){
         $vendorFeatures[] = $ft;
       }
      }
    }

    $vendorTags=[];
    foreach ($vendors as $vrs) {
      $tags = explode(',',$vrs->tags);
      foreach ($tags as $tg) {
       if(!in_array($tg,$vendorTags) && !empty($tg)){
         $vendorTags[]=$tg;
       }
      }
    }
    $AppUrl = URL::to('/')."/";

    // $ctgry = Category::where(['id' => $mainCat])->first();
    // $extra_filters_headings = $ctgry->extra_filters_headings;

    $data = array(
      'cssPath'              => $cssPath,
      // 'mainCat'              => $mainCat,
      'MainCatData'          => $MainCatData,
      'vendorFeatures'       => $vendorFeatures,
      'vendorTags'           => $vendorTags,
      'vendors'              => $vendors,
      'total_pages'          => $total_pages,
      'current_page'         => $current_page,
      'ratingAndCountArray'  => $ratingAndCountArray,
      'AppUrl'               => $AppUrl,
      'state'               => $state,
    );

    $html = view('storefront.ShowVendorsByState', $data)->render();
    return response($html)->withHeaders(['Content-Type' => 'application/liquid']);
  }


  public function CatData(Request $request) {
    // dd($request->all());
    $mainCat = request()->segment(2);
    $subCategories = [];
    $MainCatData= DB::table('tbl_category')->where(['main_cat'=>$mainCat])->get();

    foreach ($MainCatData as $key => $singleSubCat) {
      $subCategories[] = $singleSubCat->id;
    }
    $cssPath = URL::to('/')."/resources/css/storefront.css";

    // Vendors
    $current_page   = 1;
    $items_per_page = 8;
    $vendors_query  = Vendor::whereIn('sub_cat', $subCategories);
    if(isset($request->state)){
      $state = $request->state;
      $vendors_query  = Vendor::where(['state'=>$state])->whereIn('sub_cat', $subCategories);
    }
    $vendors_count  = $vendors_query->count();
    $total_pages    = ceil($vendors_count/$items_per_page);

    $vendors_query->limit($items_per_page)->offset(0);
    $vendors = $vendors_query->get();
    // Vendors END

    $sumResult = DB::select("SELECT SUM(rating) as rating,count(*) as total_rows,vendor_id from  tbl_vendor_reviews group by vendor_id");
    $CountResult = DB::select("SELECT count(*) as rating,vendor_id from  tbl_vendor_reviews group by vendor_id");
    $ratingAndCountArray=[];
    foreach ($sumResult as $rc=>$svr) {
      if(!isset($ratingAndCountArray[$svr->vendor_id])){
        $ratingAndCountArray[$svr->vendor_id]=[];
      }
      $ratingAndCountArray[$svr->vendor_id]['ratings']=  $svr->rating;
      $ratingAndCountArray[$svr->vendor_id]['rows']=  $svr->total_rows;
    }

    $vendorFeatures = [];
    foreach ($vendors as $vrs) {
      $features = explode(',', $vrs->features);
      foreach ($features as $ft) {
       if(!in_array($ft, $vendorFeatures)){
         $vendorFeatures[] = $ft;
       }
      }
    }

    $vendorTags=[];
    foreach ($vendors as $vrs) {
      $tags = explode(',',$vrs->tags);
      foreach ($tags as $tg) {
       if(!in_array($tg,$vendorTags) && !empty($tg)){
         $vendorTags[]=$tg;
       }
      }
    }
    $AppUrl = URL::to('/')."/";

    $ctgry = Category::where(['id' => $mainCat])->first();
    $extra_filters_headings = $ctgry->extra_filters_headings;

    $data = array(
      'cssPath'              => $cssPath,
      'mainCat'              => $mainCat,
      'MainCatData'          => $MainCatData,
      'vendorFeatures'       => $vendorFeatures,
      'vendorTags'           => $vendorTags,
      'vendors'              => $vendors,
      'total_pages'          => $total_pages,
      'current_page'         => $current_page,
      'ratingAndCountArray'  => $ratingAndCountArray,
      'AppUrl'               => $AppUrl
    );
    if(isset($request->state)){
      $data['state'] =  $request->state;
    }
    if(!is_null($extra_filters_headings)){
      $data['extra_filters'] =  json_decode($extra_filters_headings);
    }
    $html = view('storefront.category_data', $data)->render();
    return response($html)->withHeaders(['Content-Type' => 'application/liquid']);
  }

  public function FilterVendorByState(Request $request) {
    $state = $request->state;

    // Sub Categories
    $subCategories = [];
    if (isset($request->sub_categories)) {
      $subCategories = $request->sub_categories;
    } else {
      $MainCatData= DB::table('vendors')->distinct()->select('sub_cat')->where(['state' => $state])->get();
      foreach ($MainCatData as $key => $singleSubCat) {
        $subCategories[] = $singleSubCat->sub_cat;
      }
    }
    // Sub Categories END


    // Vendors
    $current_page   = $request->page;
    $items_per_page = 8;
    $vendors_query  = Vendor::withCount('reviews')->where(['state' => $state])->whereIn('sub_cat', $subCategories);
    // Amenities/Features
    $tag_featureQuery = "";
    if (isset($request->features)) {
      $tag_featureQuery .= "(";
      foreach ($request->features as $key => $feature) {
        if ($key === 0) {
          $tag_featureQuery .= "(FIND_IN_SET('".$feature."',features)";
        } else {
          $tag_featureQuery .= " OR FIND_IN_SET('".$feature."',features)";
        }
      }
      $tag_featureQuery .= ")";
    }
    // Amenities/Features END

    // Tags
    if (isset($request->tags)){
      if ($tag_featureQuery !== "") {
        $tag_featureQuery .= " AND ";
      } else {
        $tag_featureQuery .= "(";
      }
      foreach ($request->tags as $key => $tag) {
        if ($key === 0) {
          $tag_featureQuery .= "(FIND_IN_SET('".$tag."',tags)";
        } else {
          $tag_featureQuery .= " OR FIND_IN_SET('".$tag."',tags)";
        }
      }
      $tag_featureQuery .= ")";
    }

      if (isset($request->filters)) {
        if ($tag_featureQuery !== "") {
          $tag_featureQuery .= " AND ";
        } else {
          $tag_featureQuery .= "(";
        }

        foreach ($request->filters as $fk => $fval) {
          if ($fk === 0) {
            $tag_featureQuery .= "(FIND_IN_SET('".$fval."',filters)";
          } else {
            $tag_featureQuery .= " OR FIND_IN_SET('".$fval."',filters)";
          }
        }
        $tag_featureQuery .= ")";
      }

    if ($tag_featureQuery !== "") {
      $tag_featureQuery .= ")";
      $vendors_query->whereRaw($tag_featureQuery);
    }
    // Tags END


    // Sort By
    switch ($request->sort) {
      case 'new':
        $vendors_query->orderBy('created_at', 'DESC');
        break;
      case 'title-asc':
        $vendors_query->orderBy('company_name');
        break;
      case 'title-desc':
        $vendors_query->orderBy('company_name', 'DESC');
        break;
      case 'review-asc':
        $vendors_query->orderBy('reviews_count');
        break;
      case 'review-desc':
        $vendors_query->orderBy('reviews_count', 'DESC');
        break;
      default:
        $vendors_query->orderBy('created_at', 'DESC');
        break;
    }
    // Sort By END


    $vendors_count  = $vendors_query->count();
    $total_pages    = ceil($vendors_count/$items_per_page);

    // Page Number
    if (isset($request->page)) {
      if ($request->page) {
        $offset       = ($request->page - 1) * $items_per_page;
        $vendors_query->limit($items_per_page)->offset($offset);
      } else {
        $vendors_query->limit($items_per_page)->offset(0);
      }
    }
    // Page Number END

    $vendors = $vendors_query->get();
    // Vendors END


    // Reviews
    $sumResult = DB::select("SELECT SUM(rating) as rating,count(*) as total_rows, vendor_id from  tbl_vendor_reviews group by vendor_id");
    $ratingAndCountArray=[];
    foreach ($sumResult as $rc=>$svr) {
      if(!isset($ratingAndCountArray[$svr->vendor_id])) {
        $ratingAndCountArray[$svr->vendor_id]=[];
      }
      $ratingAndCountArray[$svr->vendor_id]['ratings']  =  $svr->rating;
      $ratingAndCountArray[$svr->vendor_id]['rows']     =  $svr->total_rows;
    }
    // Reviews END

    $data = array(
      'vendors'              => $vendors,
      'ratingAndCountArray'  => $ratingAndCountArray,
    );
    $cardsHtml = view('storefront.vendor_card', $data)->render();

    // Pagination
    $paginationHTML = '';
    for ($i = 1; $i <= $total_pages; $i++) {
      if ($i == $current_page) {
        $paginationHTML .= '<li class="active">' . $i . '</li> ';
      } else {
        $paginationHTML .= '<li>' . $i . '</li> ';
      }
    }
    // Pagination END

    echo json_encode(['code'=>200, 'cards' => $cardsHtml, 'pagination' => $paginationHTML]);
  }


  public function getVendors(Request $request) {
    $mainCat = $request->category_id;

    // Sub Categories
    $subCategories = [];
    if (isset($request->sub_categories)) {
      $subCategories = $request->sub_categories;
    } else {
      $MainCatData= DB::table('tbl_category')->where(['main_cat' => $mainCat])->get();
      foreach ($MainCatData as $key => $singleSubCat) {
        $subCategories[] = $singleSubCat->id;
      }
    }

    // Sub Categories END


    // Vendors
    $current_page   = $request->page;
    $items_per_page = 8;
    $vendors_query  = Vendor::withCount('reviews')->whereIn('sub_cat', $subCategories);
    if(isset($request->state)){
      $vendors_query  = Vendor::withCount('reviews')->where(['state' => $request->state])->whereIn('sub_cat', $subCategories);
    }

    // Amenities/Features
    $tag_featureQuery = "";
    if (isset($request->features)) {
      $tag_featureQuery .= "(";
      foreach ($request->features as $key => $feature) {
        if ($key === 0) {
          $tag_featureQuery .= "(FIND_IN_SET('".$feature."',features)";
        } else {
          $tag_featureQuery .= " OR FIND_IN_SET('".$feature."',features)";
        }
      }
      $tag_featureQuery .= ")";
    }
    // Amenities/Features END

    // Tags
    if (isset($request->tags)){
      if ($tag_featureQuery !== "") {
        $tag_featureQuery .= " AND ";
      } else {
        $tag_featureQuery .= "(";
      }
      foreach ($request->tags as $key => $tag) {
        if ($key === 0) {
          $tag_featureQuery .= "(FIND_IN_SET('".$tag."',tags)";
        } else {
          $tag_featureQuery .= " OR FIND_IN_SET('".$tag."',tags)";
        }
      }
      $tag_featureQuery .= ")";
    }

      if (isset($request->filters)) {
        if ($tag_featureQuery !== "") {
          $tag_featureQuery .= " AND ";
        } else {
          $tag_featureQuery .= "(";
        }

        foreach ($request->filters as $fk => $fval) {
          if ($fk === 0) {
            $tag_featureQuery .= "(FIND_IN_SET('".$fval."',filters)";
          } else {
            $tag_featureQuery .= " OR FIND_IN_SET('".$fval."',filters)";
          }
        }
        $tag_featureQuery .= ")";
      }

    if ($tag_featureQuery !== "") {
      $tag_featureQuery .= ")";
      $vendors_query->whereRaw($tag_featureQuery);
    }
    // Tags END


    // Sort By
    switch ($request->sort) {
      case 'new':
        $vendors_query->orderBy('created_at', 'DESC');
        break;
      case 'title-asc':
        $vendors_query->orderBy('company_name');
        break;
      case 'title-desc':
        $vendors_query->orderBy('company_name', 'DESC');
        break;
      case 'review-asc':
        $vendors_query->orderBy('reviews_count');
        break;
      case 'review-desc':
        $vendors_query->orderBy('reviews_count', 'DESC');
        break;
      default:
        $vendors_query->orderBy('created_at', 'DESC');
        break;
    }
    // Sort By END


    $vendors_count  = $vendors_query->count();
    $total_pages    = ceil($vendors_count/$items_per_page);

    // Page Number
    if (isset($request->page)) {
      if ($request->page) {
        $offset       = ($request->page - 1) * $items_per_page;
        $vendors_query->limit($items_per_page)->offset($offset);
      } else {
        $vendors_query->limit($items_per_page)->offset(0);
      }
    }
    // Page Number END

    $vendors = $vendors_query->get();
    // Vendors END


    // Reviews
    $sumResult = DB::select("SELECT SUM(rating) as rating,count(*) as total_rows, vendor_id from  tbl_vendor_reviews group by vendor_id");
    $ratingAndCountArray=[];
    foreach ($sumResult as $rc=>$svr) {
      if(!isset($ratingAndCountArray[$svr->vendor_id])) {
        $ratingAndCountArray[$svr->vendor_id]=[];
      }
      $ratingAndCountArray[$svr->vendor_id]['ratings']  =  $svr->rating;
      $ratingAndCountArray[$svr->vendor_id]['rows']     =  $svr->total_rows;
    }
    // Reviews END

    $data = ['vendors'=> $vendors,'ratingAndCountArray'=> $ratingAndCountArray];
    $cardsHtml = view('storefront.vendor_card', $data)->render();
    $paginationHTML = '';
    for ($i = 1; $i <= $total_pages; $i++) {
      if ($i == $current_page) {
        $paginationHTML .= '<li class="active">' . $i . '</li> ';
      } else {
        $paginationHTML .= '<li>' . $i . '</li> ';
      }
    }
    echo json_encode(['code'=>200, 'cards' => $cardsHtml, 'pagination' => $paginationHTML]);
  }

  public function UserWishList(Request $request)
  {
    $response=[];
    $vendors = DB::table('tbl_wishlist')->where(['customer_id'=>$request->customer])->pluck('vendor_id')->toArray();
    if(count($vendors) >0){
      $response = $vendors;
    }
    return response($response)->header('Content-Type', 'application/json');
  }

  public function SaveWishList(Request $request)
  {
    $saveArray=['customer_id'=>$request->customer,'vendor_id'=>$request->vendor];
    $insert = DB::table('tbl_wishlist')->insert($saveArray);
    $response=['code'=>100,'msg'=>'Someting went wrong Please Try after sometime'];
    if($insert){
      $response=['code'=>200,'msg'=>'Vendor Added To wishlist'];
    }
    return response($response)->header('Content-Type', 'application/json');
  }

  public function VendorsList(Request $request)
  {
      $shop = $request->shop;
      $cssPath = URL::to('/')."/resources/css/storefront.css";
      $categories = DB::table('tbl_category')->where(['cat_type'=>0])->get();
      $state_counts = Vendor::select('state', DB::raw('count(*) as total'))->groupBy('state')->get();
      $state_count_arr = [];
      foreach ($state_counts as $key => $state_count) {
        $state_count_arr[$state_count->state] = $state_count->total;
      }
      ob_start();
      ?>
      <link href="<?=$cssPath?>" rel="stylesheet">
      <div class="Wedding-Landing-Page">
        <?php $banner = view('storefront.landing_page_banner')->render(); ?>
        <?php $search_content= view('storefront.wedding_search')->with(['appUrl' => URL::to('/')])->render(); ?>
        <?php $categories = view('storefront.categories')->with(['categories' => $categories, 'state_counts' => $state_count_arr])->render(); ?>
        <?php echo $banner?>
        <?php echo $search_content?>
        <?php echo $categories?>
      </div>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
      <script>
        $("img.lazy").lazyload({
          effect : "fadeIn"
        });
        $(document).on('click','.View-All-btn',function(evt){
          $('.single-cat:hidden').show();
        })
      </script>
      <?php
      $html = ob_get_clean();
      return response($html)->header('Content-Type', 'application/liquid');
  }


  public function VendorDetails(Request $request)
  {
    $shop = $request->shop;
    $vendor_id = $request->vendor_id;
    $details = DB::table('vendors')->where(['id'=>$vendor_id])->first();
    if($details){
    $cssPath = URL::to('/')."/resources/css/storefront.css";
    $paginateJs = URL::to('/')."/resources/js/paginate.js";
    $vendor_images = json_decode($details->gallery_thumb_images);
    $footer_images = json_decode($details->footer_images);
    $faqs = json_decode($details->faq_s);
    $features = explode(',',$details->features);
    date_default_timezone_set('America/Los_Angeles');
    $userReviews = DB::table('tbl_vendor_reviews')->where(['vendor_id'=>$vendor_id])->orderBy('rating', 'DESC')->get();
    $randomReviews=[['review_by'=> 'Sarah Albert','review_time'=>'30 Oct 2019','review_count'=>5,'review_image'=>'https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Reviews_Img_2.png','review'=>' It has survived not only five centuries, but also the leap into unchanged. It was popularised in the sheets If you are going to use a passage of Lorem Ipsum, you need to be containing lorem ipsum is simply free text. ',],['review_by'=> 'Sarah Albert','review_time'=>'30 Oct 2019','review_count'=>3,'review_image'=>'https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Reviews_Img_1.png','review'=>' It has survived not only five centuries, but also the leap into unchanged. It was popularised in the sheets If you are going to use a passage of Lorem Ipsum, you need to be containing lorem ipsum is simply free text. ',],];
    $AppUrl = URL::to('/')."/";
    $vendorAddress = $details->address1." ".$details->address2." ".$details->city." ".$details->state." ".$details->zip_code." ".$details->country;
    $avgReview = 4;
    $rcount = 2;
    if(count($userReviews)  > 0){
      $ratingCount = DB::table('tbl_vendor_reviews')->where(['vendor_id'=>$vendor_id])->sum('rating');
      $ratingRows = DB::table('tbl_vendor_reviews')->where(['vendor_id'=>$vendor_id])->count();
      $avgReview = round($ratingCount/$ratingRows);
      $rcount = count($userReviews);
    }
    ob_start();
    ?>
    <link href="<?=$cssPath?>" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">

      <div class="wedding--pages">
      <div class="vendor--images shopify-section index-section--flush index-section" style="padding-top:unset !important;">
          <div class="banner-slider">
          <?php foreach ($vendor_images as $image): ?>
          <div class="main--img">
          <img class="lazy" src="<?=$image?>">
          </div>
          <?php endforeach; ?>
          </div>
          <div class="img--thumbnails">
          <ul class="list--inline text-center" id="thumb-slider">
          <?php foreach ($vendor_images as $image):
          ?>
          <li>
          <a data-fancybox="vendorimages" href="<?=$image?>" >
          <img  class="lazy"  src="<?=$image?>">
          </a>
          </li>
          <?php endforeach; ?>
          </ul>
          </div>
      </div>

      <div class="page-width">
        <div class="grid shopify-section index-section" id="request-fom-field">
          <div class="grid__item one-whole medium-up--two-thirds">
            <div>
              <?php
              for ($nr=1; $nr <=5 ; $nr++) {
                 ?>
                <i style="color:<?=(($nr <= $avgReview) ? '#FF912C' : '' )?>" class="fa fa-star fa-fw"></i>
              <?php }
              ?>
              (<?=$rcount?> customer reviews)
            </div>
              <h1><?=$details->company_name?></h1>
            <div>
              <span>
                <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/ic_1.png"   style="max-width: 15px;max-height: 15px;margin-right: 5px;">
                <?=$details->email?>
              </span>
              &nbsp;&nbsp;
              <span>
                <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/ic_2.png"  style="max-width: 15px;max-height: 15px;margin-right: 5px;">
                <?=$details->contact_no?>
              </span>
            </div>
            <div style="margin-bottom: 20px;">
              <span>
                <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Layer_36.png" style="max-width: 15px;max-height: 15px;margin-right: 5px;">
                  <?=$vendorAddress?>
              </span>
            </div>
            <p>
              <?=$details->about_tab?>
            </p>
            <div class="grid">
              <div class="grid__item one-whole medium-up--one-third">
                  <p class="uspn">
                    <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Layer_44_copy_4.png">
                    <?=$details->usp_1?>
                  </p>
              </div>
              <div class="grid__item one-whole medium-up--one-third">
                  <p class="uspn">
                  <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Layer_44_copy_4.png">
                    <?=$details->usp_2?>
                  </p>
              </div>
              <div class="grid__item one-whole medium-up--one-third">
                  <p class="uspn">
                  <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Layer_44_copy_4.png">
                    <?=$details->usp_3?>
                  </p>
              </div>
            </div>
            <div class="pricing--btn">
              <button class="got-to-pricing" type="button">Request Pricing</button>
            </div>
          </div>
          <div class="grid__item one-whole medium-up--one-third text-center contact--frm" >
              <form class="request-form">
                <div class="text--fields">
                  <input type="text" class="inputs" name="name" placeholder="Name">
                  <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Layer_2.png">
                </div>
                <div class="text--fields">
                  <input type="email" class="inputs" name="email" placeholder="Email">
                  <input type="hidden" value="<?=$details->email?>" name="client_email" placeholder="Email">
                  <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Layer_3.png">
                </div>
                <div class="text--fields">
                  <input type="text" class="inputs" name="contact_no" placeholder="Phone Number">
                  <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Layer_4.png">
                </div>
                <div class="text--fields">
                  <textarea rows="5" class="inputs" name="message" placeholder="Your Message"></textarea>
                </div>
                <div class="btton--fields">
                  <button>Request Pricing</button>
                </div>
            </form>
          </div>
        </div>

                <div class="shopify-section index-section">
                  <div class="details-tabs">
                    <ul class="tabs list--inline tabs_align">
                      <li role="presentation" class="active li-tab">
                        <div class="custom-link" aria-controls="tabContent_1" role="tab" data-toggle="tab">
                          About
                        </div>
                      </li>
                      <li role="presentation" class="li-tab">
                        <div class="custom-link" aria-controls="tabContent_2" role="tab" data-toggle="tab">
                          Details
                        </div>
                      </li>
                      <!-- <li role="presentation" class="li-tab">
                        <div class="custom-link" aria-controls="tabContent_3" role="tab" data-toggle="tab">
                          Deals
                        </div>
                      </li> -->
                      <li role="presentation" class="li-tab">
                        <div class="custom-link" aria-controls="tabContent_4" role="tab" data-toggle="tab">
                          Pricing
                        </div>
                      </li>
                    </ul>
                    <div class="tabs-content">
                      <div id="tabContent_1" class="tab_content">
                        <?=$details->about_tab?>
                      </div>
                      <div id="tabContent_2" class="tab_content">
                        <?=$details->details_tab?>
                      </div>
                      <!-- <div id="tabContent_3" class="tab_content">
                        <?=$details->deals_tab?>
                      </div> -->
                      <div id="tabContent_4" class="tab_content">
                        <?=$details->pricing_tab?>
                      </div>
                    </div>
                  </div>
                </div>

        <div class="grid shopify-section index-section">
          <div class="grid__item one-whole medium-up--two-thirds">
            <div class="vendor--header">
              <div class="header--bullet">
                <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Bullet_Symbol.png">
              </div>
              <h2 class="header--text">FAQ's</h2>
            </div>
            <div class="accordian--div">
              <?php
              $findex=0;
              foreach ($faqs as $question => $answer) {
                  $active=($findex == 0 ? "active" : "");
                  $show=($findex == 0 ? "show" : "");
                 ?>
                 <div>
                    <div class="accordion <?=$active?>"><?=$question?></div>
                    <div class="panel <?=$show?>">
                      <p><?=$answer?></p>
                    </div>
                  </div>
              <?php $findex++;
                }?>
            </div>
          </div>
          <div class="grid__item one-whole medium-up--one-third">
            <div class="vendor--header">
              <div class="header--bullet">
                <img src="https://cdn.shopify.com/s/files/1/0084/8245/5603/files/Bullet_Symbol.png">
              </div>
              <h2 class="header--text">Best Known for</h2>
            </div>
            <div class="grid feature--list">
              <div class="grid__item one-half medium-up--one-half">
                <ul>
                  <?php
                    foreach ($features as $key => $feature) {
                      ?>
                      <?=($key == 9 ? '</ul></div><div class="grid__item one-half medium-up--one-half"><ul>' : ""); ?>
                      <li><?=$feature?></li>
                  <?php }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="grid shopify-section index-section">
          <div class="grid__item one-whole medium-up--three-fifths reviewsS">
            <h3 class="review--title"><?=$rcount?> Reviews for <?=$details->company_name?></h3>
            <div class="avl-table">
            <?php
            if(count($userReviews)  > 0){ ?>
              <?php foreach ($userReviews as $rew):
                 ?>
                <div class="grid review--content">
                  <div class="grid__item one-whole medium-up--one-quarter">
                    <?php if(!empty($rew->user_image)){ ?>
                      <img class="lazy" src="<?=$rew->user_image?>">
                    <?php }else{
                        $name = $rew->name;
                        $words = explode(' ', $name);
                        if (count($words) >= 2) {
                          $initials = mb_strtoupper(mb_substr($words[0], 0, 1));
                          $initials .= mb_strtoupper(mb_substr(end($words), 0, 1));
                        }else{
                          $initials = "JD";
                        }
                       ?>
                      <p class="empty-user" data-letters="<?=$initials?>"></p>
                    <?php } ?>
                  </div>
                  <div class="grid__item one-whole medium-up--three-quarters">
                    <p><strong><?=$rew->name?></strong> <?=date('d F Y',strtotime($rew->review_at))?></p>
                      <?php
                      for ($rc=1; $rc <=5 ; $rc++) {
                        $color=(($rc <= $rew->rating) ? "#FF912C" : "" );
                         ?>
                        <i style="color:<?=$color?>" class="fa fa-star fa-fw"></i>
                      <?php }
                      ?>
                      <p><?=$rew->review?></p>
                    </div>
                  </div>
              <?php endforeach; ?>
            <?php }else{ ?>
              <?php foreach ($randomReviews as $rew): ?>
                <div class="grid review--content">
                  <div class="grid__item one-whole medium-up--one-quarter">
                    <img class="lazy" src="<?=$rew['review_image']?>">
                  </div>
                  <div class="grid__item one-whole medium-up--three-quarters">
                    <p><strong><?=$rew['review_by']?></strong> <?=$rew['review_time']?></p>
                      <?php
                      for ($rc=1; $rc <=5 ; $rc++) {
                        $color=(($rc <= $rew['review_count']) ? "#FF912C" : "" );
                         ?>
                        <i style="color:<?=$color?>" class="fa fa-star fa-fw"></i>
                      <?php }
                      ?>
                      <p><?=$rew['review']?></p>
                    </div>
                  </div>
              <?php endforeach; ?>
            <?php }
            ?>
          </div>
          </div>
          <div class="grid__item one-whole medium-up--two-fifths">
            <h3 class="review--title">Leave a review</h3>
            <div class="leave--review">
              <form id="review-form">
                <span class="empty-review">Please Select Reviews</span>
                <div style="margin-bottom: 20px;display:flex;">
                  <p>Rate this Vendor ?</p>
                    <p><?=view('storefront.reviews')->render()?></p>
                </div>
                <input type="hidden" class="rev-inputs" name="review_count" id="review_count">
                <input type="hidden" name="vendor_id" value="<?=$vendor_id?>">
                <div>
                  <textarea rows="8" class="rev-inputs inputs"  name="message" placeholder="Write message"></textarea>
                </div>
                <div class="textt-inps">
                  <input type="text" class="rev-inputs inputs" value="{{customer.first_name}}" name="name" placeholder="Your name">
                  <input type="email" class="rev-inputs inputs"  value="{{customer.email}}" name="email" placeholder="Email Address">
                </div>
                <div class="review-file">
                    <label for="file-upload" class="custom-file-upload">
                      <i class="fa fa-cloud-upload"></i>Upload Your Image
                    </label>
                    <input id="file-upload" class="rev-inputs" style="display:none;" name="user_image" type="file"/>
                </div>
                <div>
                  <button>Submit review</button>
                </div>
            </form>
            </div>
          </div>
        </div>


        <div class="grid shopify-section index-section text-center hide">
          <?php foreach ($footer_images as $mk => $fimage) { ?>
              <div class="grid__item medium-up--one-fifth">
                <a data-fancybox="vendorimages" href="<?=$fimage?>">
                  <img class="lazy" src="<?=$fimage?>">
                </a>
              </div>
          <?php }?>
        </div>

        <div class="pricing--btn text-center">
            <button class="got-to-pricing" type="button">Request Pricing</button>
        </div>
      </div>
    </div>
      <?php
      if(count($vendor_images) < 8){ ?>
          <style>
            #thumb-slider {
              display: flex;
            }
          </style>
      <?php }
      ?>
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script type="text/javascript" src="<?=$paginateJs?>"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        $("img.lazy").lazyload({
          effect : "fadeIn"
        });
        $appUrl = '<?=$AppUrl;?>'
        $('.avl-table').paginate({
             perPage:2,
        });
        $('.accordian--div').paginate({
             perPage:4,
        });
        $bannerOptions ={dots: true};
        $imageCount = parseInt('<?=count($vendor_images)?>');
        if($imageCount >=8){
            $bannerOptions['asNavFor'] =  '#thumb-slider';
        }
        $('.banner-slider').slick($bannerOptions);
        $('.rev-inputs').val("");

        function ValidateForm(form){
          $valid=true;
          $(form).find('.inputs').each(function(index,input){
            if($(input).val() == ''){
              $(input).css('border','1px solid red');
              $valid = false;
            }else{
              $(input).css('border','none');
            }
          });
          return $valid;
        }


        $(document).on('click',".got-to-pricing",function(evt){
          $('html, body').animate({
            scrollTop: $("#request-fom-field").offset().top
          }, 1000);
          $(".request-form .inputs:first").focus();

        })
        $(document).on('submit',"#review-form",function(evt){
          evt.preventDefault();
          $submit=true;
          var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
          if(isNaN(ratingValue)){
            $('html, body').animate({
              scrollTop: $(".empty-review").offset().top
            }, 1000);
            $(".empty-review").html("Please Review First").fadeIn(3000).fadeOut(3000)
            return false;
          }
           $invalid = ValidateForm(this);
           if(!$valid){
             $('html, body').animate({
               scrollTop: $("#review-form").offset().top
             }, 1000);
             $(".empty-review").html("Fill All Fields").fadeIn(3000).fadeOut(3000)
             return false;
           }
          if($submit){
            var formData = new FormData($(this)[0]);
            $.ajax({
              url: $appUrl+'SaveReview',
              data: formData,
              type: 'POST',
              dataType:'json',
              processData: false,
              contentType: false,
              success:function(response){
                alert('Thank you for your review! Once it is verified, it will be posted.');
                window.location.href = '/apps/wedding-guide/vendor_details?vendor_id='+'<?=$vendor_id?>';
              }
            })
          }
        });
        $(document).on('submit',".request-form",function(evt){
          evt.preventDefault();
          $submit=true;
          $invalid = ValidateForm(this);
          if(!$valid){
            $('html, body').animate({
              scrollTop: $(".request-form").offset().top
            }, 1000);
            return false;
          }
            var formData = new FormData($(this)[0]);
            $.ajax({
              url: $appUrl+'SendEmail',
              data: formData,
              type: 'POST',
              dataType:'json',
              processData: false,
              contentType: false,
              success:function(response){
                alert(response.msg);
                window.location.href = '/apps/wedding-guide/vendor_details?vendor_id='+'<?=$vendor_id?>';
              }
            })
        })

        if($imageCount >=8){
          $('#thumb-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 8,
            slidesToScroll: 4,
            asNavFor: '.banner-slider',
            responsive: [{
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            }, {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            }, {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }]
          });
        }
        $(document).ready(function($) {
            $('.tab_content').hide();
            $('.tab_content:first').show();
            $('.tabs li:first').addClass('active');
            $('.tabs li').click(function(event) {
                $('.tabs li').removeClass('active');
                $(this).addClass('active');
                $('.tab_content').hide();
                var selectTab = $(this).find('div').attr("aria-controls");
                $('#' + selectTab).show();
            });
        });
        document.addEventListener("DOMContentLoaded", function(event) {
            var acc = document.getElementsByClassName("accordion");
            var panel = document.getElementsByClassName('panel');
            for (var i = 0; i < acc.length; i++) {
                acc[i].onclick = function() {
                    var setClasses = !this.classList.contains('active');
                    setClass(acc, 'active', 'remove');
                    setClass(panel, 'show', 'remove');
                    if (setClasses) {
                        this.classList.toggle("active");
                        this.nextElementSibling.classList.toggle("show");
                    }
                }
            }

            function setClass(els, className, fnName) {
                for (var i = 0; i < els.length; i++) {
                    els[i].classList[fnName](className);
                }
            }
        });
        $(document).ready(function() {
            $('#stars li').on('mouseover', function() {
                var onStar = parseInt($(this).data('value'), 10);
                $(this).parent().children('li.star').each(function(e) {
                    if (e < onStar) {
                        $(this).addClass('hover');
                    } else {
                        $(this).removeClass('hover');
                    }
                });
            }).on('mouseout', function() {
                $(this).parent().children('li.star').each(function(e) {
                    $(this).removeClass('hover');
                });
            });
            $('#stars li').on('click', function() {
                var onStar = parseInt($(this).data('value'), 10);
                var stars = $(this).parent().children('li.star');
                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }
                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                $("#review_count").val(ratingValue);

            });
        });
        </script>
    <?php
    $html = ob_get_clean();
  }else{
    $html = '<p>Vendor Details Not Found</p>';
  }
    return response($html)->header('Content-Type', 'application/liquid');

  }

  public function SaveReview(Request $request)
  {
    $user_image = "";
    if($request->file('user_image')){
        $cd = $request->file('user_image');
        $cname = "review-".time()."-".rand();
        $cardfile = $cname.'.'.$cd->getClientOriginalExtension();
        if($cd->move(public_path('uploads'), $cardfile)){
          $user_image = URL::to('/')."/public/uploads/".$cardfile;
        }
      }
      date_default_timezone_set('America/Los_Angeles');
      $saveArray = ['name'=>$request->name,'email'=>$request->email,'rating'=>$request->review_count,'vendor_id'=>$request->vendor_id,'user_image'=>$user_image,'review'=>$request->message,'review_at'=>date('Y-m-d H:i:s'),];
      $insert = DB::table('tbl_vendor_reviews')->insert($saveArray);
      if($insert){
        echo json_encode(['code'=>200,'msg'=>'Review Posted Successfully']);
      }else{
        echo json_encode(['code'=>100,'msg'=>'Something went Wrong Please Try After Sometime']);
      }
  }

    public function SendEmail(Request $request)
    {
      $to_name = "John Doe";
      $to_email = $request->client_email;
      $data=['name'=>$request->name,'email'=>$request->email,'contact_no'=>$request->contact_no,'user_message'=>$request->message,];
      Mail::send("request_email", $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)->subject("Request For Pricing");
        $message->from("info@mauveetblush.com","Mauve et Blush");
      });
      echo json_encode(['code'=>200,'msg'=>'Request has Submitted Successfully']);
    }
  public function TestEmail(Request $request)
  {
    echo "Hello";
    $to_name = "John Doe";
    $to_email = "vowelweb43@gmail.com";
    // $to_email = "big.app.tetsing@gmail.com";
    $data = [
      "name"=>"Ogbonna Vitalis(sender_name)",
      "body" => "A test mail"
    ];
    Mail::send("mail", $data, function($message) use ($to_name, $to_email) {
    // Mail::send("request_email", $data, function($message) use ($to_name, $to_email) {
      $message->to($to_email, $to_name)->subject("Laravel Test Mail");
      $message->from("big.app.tetsing@gmail.com","Test User");
    });
  }

}
