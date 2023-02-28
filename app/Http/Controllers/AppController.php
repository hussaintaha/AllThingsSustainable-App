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
use Illuminate\Support\Facades\File;
use DB;
use App\User;
use App\Category;
use App\Vendor;
use App\Country;
use App\State;
use App\City;
use URL;
class AppController extends Controller {

  public function Dashboard(Request $request) {
    $shop = $request->shop;
    $ShopifyApiClient =User::where('name',$request->shop)->first();
    $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
    $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
    return View::make('admin.vendors_list',[
      'appURL'=>URL::to('/'),
      'shop'=>$request->shop,
      'meta'=>$meta,
      'page'=>'vendor_list',
      'vendors'=> DB::table('vendors')->get()
    ]);
  }
  public function VendorsList(Request $request)
  {
    $shop = $request->shop;
    $ShopifyApiClient =User::where('name',$request->shop)->first();
    $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
    $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
    return View::make('admin.vendors_list',[
      'appURL'=>URL::to('/'),
      'shop'=>$request->shop,
      'meta'=>$meta,
      'page'=>'vendor_list',
      'vendors'=> DB::table('vendors')->get()
    ]);
  }


  public function index(Request $request) {
    return redirect()->route('dashboard', ['shop'=>$request->shop]);
  }



  public function Delete2(Request $request) {
    $ShopifyApiClient =User::where('name',$request->shop)->first();
    $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
    $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
    $handle = $request->del_id;
    unset($meta[$handle]);
    $json_encode=json_encode($meta);
    $update = ["metafield"=> ["id" => 18834554224778,"value" => $json_encode,"value_type" => "json_string"]];
    $put = $ShopifyApiClient->api()->request('PUT', '/admin/api/'.getYear().'/metafields/18834554224778.json',$update);
    if($put) {
      echo json_encode(['code'=>200,'msg'=>'Data Deleted Successfully']);
    } else {
      echo json_encode(['code'=>100,'msg'=>'Something went Wrong Please Try After Sometime']);
    }
  }


  public function removeImage(Request $request)
  {
    $value = $request->file;
    $this->unlinkImage($value);
  }

  private function unlinkImage($value)
  {
      $filePath = URL::to('/');
      $getImagePath = str_replace($filePath,'',$value);
      $file_path = app_path($getImagePath);
      $getImagePath1 = str_replace('app//','',$file_path);
      if(File::exists($getImagePath1)){
        File::delete($getImagePath1);
      }
  }

  public function Vendors(Request $request){
    $addVendorPage = 'admin.meta_add_vendors';
    return View::make($addVendorPage,[
      'appURL' => URL::to('/'),
      'shop'   => $request->shop,
      'page'   => 'vendor',
    ]);
  }
  public function add_influencer(Request $request){
    $addVendorPage = 'admin.add_influencer';
    return View::make($addVendorPage,[
      'appURL' => URL::to('/'),
      'shop'   => $request->shop,
      'page'   => 'influencer',
    ]);
  }
  public function influencer_list(Request $request){
    $ShopifyApiClient =User::where('name',$request->shop)->first();
    $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
    $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
    $addVendorPage = 'admin.influencer_list';
    return View::make($addVendorPage,[
      'appURL' => URL::to('/'),
      'shop'   => $request->shop,
      'meta'=>$meta,
      'page'   => 'influencers',
    ]);
  }


  public function EditVendor2(Request $request) {
      $shop = $request->shop;
      $ShopifyApiClient =User::where('name',$request->shop)->first();
      $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
      $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
      return View::make('admin.update_meta_vendor',[
        'appURL'=>URL::to('/'),
        'shop'=>$request->shop,
        'page'=>'edit_vendor',
        'details'=> $meta[$request->vendor],
      ]);
  }
  public function edit_influencer(Request $request) {
      $shop = $request->shop;
      $ShopifyApiClient =User::where('name',$request->shop)->first();
      $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
      $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
      return View::make('admin.edit_influencer',[
        'appURL'=>URL::to('/'),
        'shop'=>$request->shop,
        'page'=>'edit_influencer',
        'details'=> $meta[$request->vendor],
      ]);
  }

  public function NewVendorForm(Request $request)
  {
    $addVendorPage = 'admin.nw_vendor';
    return View::make($addVendorPage,[
      'appURL'=>URL::to('/'),
      'shop'=>$request->shop,
      'page'=>'vendor',
      'cat'=> DB::table('tbl_category')->where(['cat_type'=>1])->orderBy('cat_name', 'ASC')->get()
    ]);
  }




  public function uploadPreview(Request $request)
  {

      if ($request->file('story_banner')){
          $cd       = $request->file('story_banner');
          $cname    = "story_banner-" . time();
          $cardfile = $cname . '.' . $cd->getClientOriginalExtension();
          if ($cd->move(public_path('uploads'), $cardfile)) {
              echo json_encode(['result' => 1, 'path' => URL::to('/') . "/public/uploads/" . $cardfile]);
          } else {
              echo json_encode(['result' => 0, 'path' => '']);
          }
      }
      if ($request->file('logo')){
          $cd       = $request->file('logo');
          $cname    = "logo-" . time();
          $cardfile = $cname . '.' . $cd->getClientOriginalExtension();
          if ($cd->move(public_path('uploads'), $cardfile)) {
              echo json_encode(['result' => 1, 'path' => URL::to('/') . "/public/uploads/" . $cardfile]);
          } else {
              echo json_encode(['result' => 0, 'path' => '']);
          }
      }
      if ($request->file('thumb_cause_file')){
          $cd       = $request->file('thumb_cause_file');
          $cname    = "thumb_cause_file-" . time();
          $cardfile = $cname . '.' . $cd->getClientOriginalExtension();
          if ($cd->move(public_path('uploads'), $cardfile)) {
              echo json_encode(['result' => 1, 'path' => URL::to('/') . "/public/uploads/" . $cardfile]);
          } else {
              echo json_encode(['result' => 0, 'path' => '']);
          }
      }
      if ($request->file('feature_image1')) {
          $cd       = $request->file('feature_image1');
          $cname    = "feature_image1-" . time();
          $cardfile = $cname . '.' . $cd->getClientOriginalExtension();
          if ($cd->move(public_path('uploads'), $cardfile)) {
              echo json_encode(['result' => 1, 'path' => URL::to('/') . "/public/uploads/" . $cardfile]);
          } else {
              echo json_encode(['result' => 0, 'path' => '']);
          }
      }
      if ($request->file('feature_image2')) {
          $cd       = $request->file('feature_image2');
          $cname    = "feature_image2-" . time();
          $cardfile = $cname . '.' . $cd->getClientOriginalExtension();
          if ($cd->move(public_path('uploads'), $cardfile)) {
              echo json_encode(['result' => 1, 'path' =>  URL::to('/') . "/public/uploads/" . $cardfile]);
          } else {
              echo json_encode(['result' => 0, 'path' => '']);
          }
      }

      if ($request->file('feature_image3')) {
          $cd       = $request->file('feature_image3');
          $cname    = "feature_image3-" . time();
          $cardfile = $cname . '.' . $cd->getClientOriginalExtension();
          if ($cd->move(public_path('uploads'), $cardfile)) {
              echo json_encode(['result' => 1, 'path' => URL::to('/') . "/public/uploads/" . $cardfile]);
          } else {
              echo json_encode(['result' => 0, 'path' => '']);
          }
      }

      if ($request->file('thumb_gallery_file')) {
          $cd       = $request->file('thumb_gallery_file');
          $cname    = "thumb_gallery_file-" . time();
          $cardfile = $cname . '.' . $cd->getClientOriginalExtension();
          if ($cd->move(public_path('uploads'), $cardfile)) {
              echo json_encode(['result' => 1, 'path' => URL::to('/') . "/public/uploads/" . $cardfile]);
          } else {
              echo json_encode(['result' => 0, 'path' => '']);
          }
      }
  }


  public function changestatus(Request $request) {

      $handle = $request->vendor;
      // echo $handle;
      // echo "<br>";
      $shop = $request->shop;
      $ShopifyApiClient =User::where('name',$shop)->first();
      $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
      $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
      $meta[$handle]['display_status'] = $request->status;
      // dd($meta);
      $json_encode=json_encode($meta);
      $update = ["metafield"=> ["id" => 18834554224778,"value" => $json_encode,"value_type" => "json_string"]];
      $put = $ShopifyApiClient->api()->request('PUT', '/admin/api/'.getYear().'/metafields/18834554224778.json',$update);
      if($put) {
        echo json_encode(['code'=>200,'msg'=>'Status Changed']);
      } else {
        echo json_encode(['code'=>100,'msg'=>'Something went Wrong Please Try After Sometime']);
      }
  }
  public function SaveVendorDetails2(Request $request) {
      $shop = $request->shop;
      $ShopifyApiClient =User::where('name',$shop)->first();
      $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
      $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
      $handle = $request->vendorHandle;
      $myarray=[];
      $causeArray=[];
      $policy_array=[];
      $banner=[];
      foreach ($request->cause_heading as $ck => $cv) {
          $causeArray[]=["image" =>$request->causeimages[$ck],"heading" =>$cv,"para" =>$request->cause_para[$ck]];
      }
      foreach ($request->policy as $p => $pv) {
          $policy_array[]=["policy" =>$request->policy[$p],"policy_answer" =>$request->policy_answer[$p],];
      }
      foreach ($request->banner_heading as $bk => $bn) {
          $banner[]=["fixed_trans_img" =>$request->banner_images[$bk],"slider_image" =>$request->banner_images[$bk],"heading" =>$bn,"para" =>$request->banner_para[$bk]];
      }

      $story = [
        "vendor_story"=>$request->vendor_story,
        "story_banner"=>$request->story_banner,
        "story_video"=>$request->story_video,
        "policy"=>$policy_array
    ];
      if(!empty($request->story_banner_type)){
        $story['story_banner_type']=$request->story_banner_type;
      }
      if(!empty($request->story_video)){
          $story['video_type']=pathinfo($request->story_video, PATHINFO_EXTENSION);
      }
      $myarray = [
          "basic_details"=>[
            "logo" => $request->logo,
            "email" => $request->email,
            "mobile" => $request->mobile,
            "type" => 'vendor',
            "city" => $request->city,
            "description" => $request->description,
            "contact" => $request->contact,
            "cause_heading" => $request->cause_name,
            "vendor_name" => $request->vendor_name,
            "social"=>["twitter"=>$request->twitter,"facebook"=>$request->facebook,"instagram"=>$request->instagram,"youtube"=>$request->youtube]
          ],
          "banner"=>$banner,
          "vendor_story"=>$story,
          "cause_slides"=>$causeArray,
      ];
      $meta[$handle] = $myarray;
      // echo "<pre>";
      // print_r($myarray);
      // echo "</pre>";
      // exit;
      $json_encode=json_encode($meta);
      $update = ["metafield"=> ["id" => 18834554224778,"value" => $json_encode,"value_type" => "json_string"]];
      $put = $ShopifyApiClient->api()->request('PUT', '/admin/api/'.getYear().'/metafields/18834554224778.json',$update);
      if($put) {
        echo json_encode(['code'=>200,'msg'=>'Data Saved Succeefully']);
      } else {
        echo json_encode(['code'=>100,'msg'=>'Something went Wrong Please Try After Sometime']);
      }

    }

  public function AddInfluencerPost(Request $request) {
      $shop = $request->shop;
      $ShopifyApiClient =User::where('name',$shop)->first();
      $shopdetails = (object)$ShopifyApiClient->api()->request('GET', '/admin/api/'.getYear().'/metafields/18834554224778.json');
      $meta = json_decode($shopdetails->body->container['metafield']['value'],true);
      $handle = $request->vendorHandle;
      $myarray = [
          "basic_details"=>[
            "logo" => $request->logo,
            "type" => 'influencer',
            "vendor_name" => $request->vendor_name,
            "social"=>[
              "twitter"=>$request->twitter,
              "facebook"=>$request->facebook,
              "instagram"=>$request->instagram,
              "youtube"=>$request->youtube
            ]
          ],
      ];
      $meta[$handle] = $myarray;
      $json_encode=json_encode($meta);
      $update = ["metafield"=> ["id" => 18834554224778,"value" => $json_encode,"value_type" => "json_string"]];
      $put = $ShopifyApiClient->api()->request('PUT', '/admin/api/'.getYear().'/metafields/18834554224778.json',$update);
      if($put) {
        echo json_encode(['code'=>200,'msg'=>'Data Saved Succeefully']);
      } else {
        echo json_encode(['code'=>100,'msg'=>'Something went Wrong Please Try After Sometime']);
      }

    }
    public function getServerSide(Request $request)
    {
        $app_url = URL::to('/');
        $columns = array(
            0 =>'company_name',
            1 =>'state',
            2 =>'country',
            3 =>'sub_cat',
            4=> 'contact_details',
            5=> 'view',
            6=> 'action',
        );

        $totalData = Vendor::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');

        if(empty($request->input('search.value')))
        {
            $posts = Vendor::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value');
            $posts =  DB::table('vendors AS v')
                        ->leftJoin('tbl_category AS c', 'v.sub_cat', '=', 'c.id')
                        ->select('v.id','v.state','v.country','v.company_name', 'v.email','v.web_address','v.contact_no', 'v.sub_cat', 'c.cat_name')
                        ->where(function ($q) use ($request) {
                        $q->orWhere('v.company_name', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.email', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.state', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.country', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.web_address', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.contact_no', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('c.cat_name', 'like', '%' . $request['search']['value'] . '%');
                        })
                        ->offset($start)
                        ->take($limit)
                        ->orderBy($order,$dir)
                        ->get();
          $totalFiltered =  DB::table('vendors AS v')
                          ->leftJoin('tbl_category AS c', 'v.sub_cat', '=', 'c.id')
                          ->select('v.id','v.state','v.country','v.company_name', 'v.email','v.web_address','v.contact_no', 'v.sub_cat', 'c.cat_name')
                          ->where(function ($q) use ($request) {
                          $q->orWhere('v.company_name', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.email', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.state', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.country', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.web_address', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('v.contact_no', 'like', '%' . $request['search']['value'] . '%')
                            ->orWhere('c.cat_name', 'like', '%' . $request['search']['value'] . '%');
                          })
                          ->count();

        }

        $data = array();
        if(!empty($posts))
        {
            foreach ($posts as $post)
            {
              $email = '<p style="font-size: 12px;text-align: left;">
                  <svg style="height: 15px;width: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill="#637381" d="M2 16V5.414l7.293 7.293a.997.997 0 0 0 1.414 0L18 5.414V16H2zM16.586 4L10 10.586 3.414 4h13.172zM19 2H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                  </svg>
                  :
                  <span>'.$post->email.'</span>
                </p>';
                $contact_no = '<p style="font-size: 12px;text-align: left;margin-right: 56%;">
                  <svg style="height: 15px;width: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill="#637381" d="M19.196 11.996l-4.997-.998a1 1 0 0 0-1.089.53l-.662 1.31C8.887 11.916 7.58 8.907 7.16 7.524l1.284-.642c.403-.2.62-.646.534-1.087l-.99-4.99A.999.999 0 0 0 7.006 0H1.01a.999.999 0 0 0-.998.945c-.02.363-.403 8.936 5.178 14.51C8.213 18.476 12.375 20 17.577 20c.483 0 .975-.013 1.476-.039a1 1 0 0 0 .947-.997v-5.989a.999.999 0 0 0-.804-.979zm-6.202-4.011a.997.997 0 0 0 .707-.293l4.29-4.285V4.99a.998.998 0 0 0 2 0V.998a.998.998 0 0 0-1-.998h-3.998a.998.998 0 1 0 0 1.996h1.585l-4.29 4.285a.996.996 0 0 0 .706 1.704M18.001 18c-4.858.105-8.677-1.244-11.388-3.947-3.94-3.925-4.527-9.785-4.601-12.057h4.174l.683 3.44-1.318.658a1 1 0 0 0-.54 1.057c.388 2.314 2.519 6.924 7.819 7.807.427.068.86-.145 1.056-.535l.667-1.318 3.448.688V18z"/>
                  </svg>
                  :
                  <span>'.$post->contact_no.'</span>
                </p>';
                $web_address = '<p style="font-size: 12px;text-align: left;">
                  <svg style="height: 15px;width: 15px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M19.993 16.19c-.054.444-.396.8-.839.869l-2.168.338-.715 1.947a.999.999 0 0 1-.938.656l-.046-.001a1 1 0 0 1-.92-.742l-1.333-5a.999.999 0 1 1 1.349-1.181l5 2.071c.414.172.663.598.61 1.043zM8.424 6c.464-2.033 1.178-3.358 1.564-3.964.388.606 1.107 1.931 1.573 3.964H8.424zm-2.342 6H2.263A7.959 7.959 0 0 1 2 10c0-.692.097-1.36.263-2h3.82a21.39 21.39 0 0 0-.096 2.004c0 .706.037 1.367.095 1.996zm1.437 5.601A8.031 8.031 0 0 1 3.082 14h3.289a16.294 16.294 0 0 0 1.148 3.601zm.004-15.204c-.415.9-.849 2.102-1.15 3.603H3.082a8.03 8.03 0 0 1 4.441-3.603zM16.917 6h-3.305a16.127 16.127 0 0 0-1.16-3.612A8.029 8.029 0 0 1 16.917 6zM14 10c0-.708-.037-1.371-.097-2h3.834c.165.64.263 1.308.263 2 0 .3-.031.592-.066.883a1.001 1.001 0 0 0 1.987.233c.043-.367.079-.737.079-1.116 0-5.515-4.486-10-10-10S0 4.485 0 10c0 5.514 4.486 10 10 10 0 0 .979.004 1.073-.003a1 1 0 0 0 .924-1.07 1.008 1.008 0 0 0-1.07-.925c-.137.011-.926-.002-.926-.002-.383-.59-1.116-1.92-1.585-4H10a1 1 0 0 0 0-2H8.088a19.424 19.424 0 0 1 .004-4h3.803c.066.622.105 1.287.105 2a1 1 0 0 0 2 0z" fill="#637381" fill-rule="evenodd"/>
                  </svg>
                  :
                  <span>'.$post->web_address.'</span>
                </p>';
                $view = '<a target="_blank" href="https://'.$request->shop.'/apps/wedding-guide/vendor_details?vendor_id='.$post->id.'">
      							<button type="button" class="Polaris-Button" >
      	              <svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
      	                <path d="M19 11H1a1 1 0 1 1 0-2h18a1 1 0 1 1 0 2zm0-7H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0 14H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2z" fill="#637381"/>
      	              </svg>
      	            </button>
      					</a>';
                $action = '<a href="'.$app_url.'/edit-vendor?shop='.$request->shop.'&vendor_id='.$post->id.'">
   							<button data-id="'.$post->id.'" type="button" class="Polaris-Button" >
   								<svg style="height: 20px;width: 20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
   									<path fill="#637381" d="M18.878 1.085c-1.445-1.446-3.967-1.446-5.414 0l-11.17 11.17a.976.976 0 0 0-.228.368c-.003.009-.012.015-.015.024l-2 6a.999.999 0 0 0 1.265 1.265l6-2c.01-.003.015-.012.024-.015a.976.976 0 0 0 .367-.227L18.878 6.499A3.805 3.805 0 0 0 20 3.792a3.803 3.803 0 0 0-1.122-2.707zm-1.414 4L17 5.549l-2.586-2.586.464-.464c.691-.691 1.895-.691 2.586 0 .346.346.536.805.536 1.293 0 .488-.19.947-.536 1.293zM3.437 14.814l1.712 1.712-2.568.856.856-2.568zM7 15.549l-2.586-2.586L13 4.377l2.586 2.586L7 15.549z"/>
   								</svg>
   	            </button>
   						</a>
   						<button data-id="'.$post->id.'" type="button" class="Polaris-Button deleteFlag" >
   							<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   								<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>
   							</svg>
   						</button>';
                $nestedData['company_name'] = $post->company_name;
                $nestedData['state'] = $post->state;
                $nestedData['country'] = $post->country;
                $nestedData['sub_cat'] = ReturnMainCatName($post->sub_cat);
                $nestedData['contact_details'] = $email.$contact_no.$web_address;
                $nestedData['view'] = $view;
                $nestedData['action'] = $action;
                $data[] = $nestedData;
            }
        }

        $json_data = array(
                    "draw"            => intval($request->input('draw')),
                    "recordsTotal"    => intval($totalData),
                    "recordsFiltered" => intval($totalFiltered),
                    "data"            => $data
                    );

        echo json_encode($json_data);

    }

}
