@extends('admin.sadmin')
@section('content')
<style>
.about-auto {
    height: auto;
    margin-bottom: 16%;
    display: flex;
    margin-top: 3%;
}
.info-img {
    color: red;
    font-size: 12px;
    margin-left: 5px;
}
.gallary-btns, .footer-gallery-btns {
    float: right;
    display: flex;
    margin-right: 2%;
}
.gallery-item {
    border: 1px solid #dfe3e8;
    margin-left: 2%;
    margin-bottom: 3%;
}
.gallery-item .desc-text {
    margin-bottom: 2%;
    margin-right: 2%;
}
.single-service {
    border: 1px solid #dfe3e8;
    margin-left: 2%;
    margin-bottom: 3%;
}
.service-label {
    width: 100%;
    margin-right: 2%;
}
.service-label .Polaris-Button {
    float: right;
}
.service-name-container {
    width: 70%;
    margin-right: 2%;
}
.Polaris-Choice {
    width: 32%;
}
</style>

<?php
  $catArray=[];

?>
<!-- < ?php print_r($details);?>  -->
<div class="Polaris-Page">
   <div class="Polaris-Page__Content">
      <form class="vendorform">
         <div class="Polaris-Layout">
            <div class="Polaris-Layout__AnnotatedSection">
               <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                     <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Vendor Basic details</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>This vendor's name and address</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                     <div class="Polaris-Card">
                        <div style="padding: 2rem;">
                           <div class="Polaris-FormLayout">
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                   <input type="hidden" name="vendor_id" value="Hello">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Company name','input_name'=>'company_name','value'=> $details->company_name ))
                                    @include('admin.forminputs.select', array('label_name' => 'SubCategory','input_name'=>'sub_cat','value'=> $details->sub_cat))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Establishment Year','input_name'=>'est_year','value'=> $details->est_year))
                                    @include('admin.forminputs.textfields', array('label_name' => 'Address line 1','input_name'=>'address1','value'=> $details->address1))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Address line 2','input_name'=>'address2','value'=> $details->address2))
                                    @include('admin.forminputs.textfields', array('label_name' => 'City','input_name'=>'city','value'=> $details->city))
                                 </div>
                              </div>

                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Zip Code','input_name'=>'zip_code','value'=> $details->zip_code))
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="Polaris-Layout__AnnotatedSection">
               <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                     <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Contact Details</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Vendor Contact Details</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                     <div class="cards-container" d style="position: relative; z-index: 1;">
                        <div class="Polaris-Card">
                           <div class="Polaris-Card__Section">
                              <div class="Polaris-Card__SectionHeader">
                              </div>
                              <div class="Polaris-FormLayout">
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Email','input_name'=>'email','value'=> $details->email))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Contact No.','input_name'=>'contact_no','value'=> $details->contact_no))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Website Address','input_name'=>'web_address','value'=> $details->web_address))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Instagram URL','input_name'=>'insta_url','value'=> $details->insta_url))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Pinterest URL','input_name'=>'pin_url','value'=> $details->pin_url))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Twitter URL','input_name'=>'twitter_url','value'=> $details->twitter_url))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'LinkedIn URL','input_name'=>'linkedin_url','value'=> $details->linkedin_url))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Facebook URL','input_name'=>'facebook_url','value'=> $details->facebook_url))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Google Plus','input_name'=>'google_plus_url','value'=> $details->google_plus_url))
                                       @include('admin.forminputs.textfields', array('label_name' => 'YouTube Channel URL','input_name'=>'youtube_channel_url','value'=> $details->youtube_channel_url))
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            <div class="Polaris-Layout__AnnotatedSection">
               <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                     <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Vendor Images</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Vendor Images to be viweble on Category Page</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                     <div class="cards-container" style="position: relative; z-index: 1;">
                        <div class="Polaris-Card">
                           <div class="Polaris-Card__Section">
                              <div class="Polaris-Card__SectionHeader">
                                  @include('admin.forminputs.progress')
                              </div>
                              <div class="Polaris-FormLayout">
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                   @php
                                      $images=json_decode($details->vendor_images);
                                   @endphp
                                   @include('admin.forminputs.image_picker', [
                                     'field_id' => 'avtar_image',
                                     'field_name' => 'avtar_image',
                                     'field_title' => 'Avtar Image',
                                     'field_desc'=>'Viewable on Landing Page',
                                     'saved_image'=>(isset($images->avtar_image) ? $images->avtar_image : NULL)
                                   ])
                                   @include('admin.forminputs.image_picker', [
                                     'field_id' => 'feature_image1',
                                     'field_name' => 'feature_image1',
                                     'field_title' => 'Featured Image 1',
                                     'field_desc'=>'Viewable on Landing Page',
                                     'saved_image'=>(isset($images->feature_image1) ? $images->feature_image1 : NULL)
                                   ])
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                   @include('admin.forminputs.image_picker', [
                                      'field_id' => 'feature_image2',
                                      'field_name' => 'feature_image2',
                                      'field_title' => 'Featured Image 2',
                                      'field_desc'=>'Viewable on Landing Page',
                                      'saved_image'=>(isset($images->feature_image2) ? $images->feature_image2 : NULL)
                                   ])
                                   @include('admin.forminputs.image_picker', [
                                     'field_id' => 'feature_image3',
                                     'field_name' => 'feature_image3',
                                     'field_title' => 'Featured Image 3',
                                     'field_desc'=>'Viewable on Landing Page',
                                     'saved_image'=>(isset($images->feature_image3) ? $images->feature_image3 : NULL)
                                   ])
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            @include('admin.forminputs.gallery',[
              'form_title' =>'Main Gallery and Thumbnail Gallery',
              'form_details'=>'Add Contents for Vendor Gallery Viewable on vendor details page',
              'field_id'=> 'gallary-details',
              'single_id'=> 'gallery-item',
              'saved_images'=>json_decode($details->gallery_thumb_images),
              'file_id'=>'gallery_file',
              'field_name'=>'gallery',
              'file_name'=>'thumb_gallery_file',
              'txb_name'=>'thumbGallaryPath',
            ])

            @include('admin.forminputs.gallery', [
              'form_title' => 'Footer Gallery On the Vendor Details Page',
              'form_details'=>'Add Contents for Vendor Thumbnail Gallery viewable on vendor profile page',
              'field_id'=>'footer-gallery',
              'single_id'=> 'thumb-gallery-item',
              'saved_images'=>json_decode($details->footer_images),
              'file_id'=>'gallery_file_snd',
              'field_name'=>'footer-gallery',
              'file_name'=>'thumb_gallery_file',
              'txb_name'=>'GallaryPath',
            ])

            @include('admin.forminputs.vendor_faq',[
              'saved_faq'=>json_decode($details->faq_s),
              'file_id'=>'gallery_file_snd'
            ])

            @include('admin.forminputs.vendor_features',[
              'saved_feature'=>explode(',',$details->features),
              'file_id'=>'gallery_file_snd'
            ])
            @include('admin.forminputs.vendor_tagsEdid',[
             'save_tags' => $details->tags
            ])

            <div class="Polaris-Layout__AnnotatedSection updateDisplayFilter" >
              <div class="Polaris-Layout__AnnotationWrapper">
                <div class="Polaris-Layout__Annotation">
                  <div class="Polaris-TextContainer">
                     <h2 class="Polaris-Heading">Filter's</h2>
                     <div class="Polaris-Layout__AnnotationDescription">
                        <p>Filter's Aquired From main category On category Page </p>
                     </div>
                  </div>
               </div>
               <div class="Polaris-Layout__AnnotationContent">
                 <div class="cards-container" style="position: relative; z-index: 1;">
                    <div class="Polaris-Card">
                       <div class="Polaris-Card__Section">
                          <div class="Polaris-Card__SectionHeader">
                          </div>
                          <div class="Polaris-FormLayout">
                             <div class="filter-html" style="margin-left: 3%;"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="Polaris-Layout__AnnotationWrapper">
               <div class="Polaris-Layout__Annotation">
                  <div class="Polaris-TextContainer">
                     <h2 class="Polaris-Heading">Vendor Page Tabs Info</h2>
                     <div class="Polaris-Layout__AnnotationDescription">
                     </div>
                  </div>
               </div>
                  <div class="about-auto" >
                      <div style="width:50%">
                        @include('admin.forminputs.editorUpdate',[
                          'label_name' => 'About',
                          'editor_id'=>'about',
                          'field_name'=>'about_details_tab',
                          'field_value' => $details->about_tab
                        ])
                      </div>

                      <div  style="width:50%">
                        @include('admin.forminputs.editorUpdate',[
                        'label_name' => 'Details',
                        'editor_id'=>'details',
                        'field_name'=>'details_tab',
                        'field_value' => $details->details_tab
                        ])
                      </div>
                  </div>

            <div class="about-auto" >
                <div style="width:50%">
                  @include('admin.forminputs.editorUpdate',[
                    'label_name' => 'Deals',
                    'editor_id'=>'deals',
                    'field_name'=>'deals_tab',
                    'field_value' => $details->deals_tab
                  ])
                </div>
                <div  style="width:50%">
                  @include('admin.forminputs.editorUpdate',[
                    'label_name' => 'Pricing',
                    'editor_id'=>'pricing',
                    'field_name'=>'pricing_tab',
                    'field_value' => $details->pricing_tab
                  ])
                </div>
            </div>
          </div>


            <div class="Polaris-Layout__Section">
               <div class="Polaris-PageActions">
                  <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                     <div class="Polaris-Stack__Item">
                        <button type="submit" class="Polaris-Button Polaris-Button--primary">
                        <span class="Polaris-Button__Content">
                        <span class="Polaris-Button__Text">Save</span>
                        </span>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<script src="https://cdn.quilljs.com/1.2.4/quill.min.js"></script>
<link href="https://cdn.quilljs.com/1.2.4/quill.snow.css" rel="stylesheet">

@include('admin.forminputs.jsfunctions')
<style>
.upload-preview {
	border: none;
	height: 100px;
	width: 100px;
  display: none;
}
.progress-bar{
  display: none;
}
</style>


<span style="display:none;" class="about_tabs"><?php echo $details->about_tab; ?></span>
<span style="display:none;" class="details_tabs"><?php echo $details->details_tab; ?></span>
<span style="display:none;" class="deals_tabs"><?php echo $details->deals_tab; ?></span>
<span style="display:none;" class="pricing_tabs"><?php echo $details->pricing_tab; ?></span>
<script>
    $(document).ready(function() {

      function LoadStates($setSelected=null) {
        $countryId = $('#country').find('option:selected').data('country_id');
        var data = {country_id:$countryId};
        if($setSelected){
          data['state'] = $setSelected;
        }
        $.ajax({
          url: '{{url("getStates")}}',
          data: data,
          type: 'GET',
          dataType:'html',
          success:function(response){
            $("#state").html(response);
          }
        });
      }
      <?php if(!empty($details->state)){ ?>
        LoadStates('<?=$details->state?>');
      <?php }else{ ?>
        LoadStates();
      <?php } ?>
      $('#country').on('change', function() {
        LoadStates();
      })


      $cats = <?=json_encode($catArray)?>;
      $split_filter_data={};
      <?php if(!empty($details->filter_data)){ ?>
        $filter_data = '<?=$details->filter_data?>';
        $split_filter_data = JSON.parse($filter_data);
      <?php } ?>
      function toTitleCase(str) {
          return str.replace(/\w\S*/g, function(txt) {
              return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
          });
      }
      $parentCat = $('#sub_cat').find('option:selected').data('parent-cat-id');
      loadFilters($cats[$parentCat]);
      $('#sub_cat').on('change', function() {
        $parentCat = $(this).find('option:selected').data('parent-cat-id');
        loadFilters($cats[$parentCat])
      });
      function loadFilters($parentCat) {
        $filters = $parentCat.filters;
        $filterHtml="";
        for ($fk in $filters) {
          $filterData =$filters[$fk];
          $SingleFTitle = $fk.toLowerCase().replace(/ /g,'-');
          $productData=[];
            if($split_filter_data[$SingleFTitle]){
              $productData = $split_filter_data[$SingleFTitle].split(',');
            }
            $filterHtml+='<div class="Polaris-Labelled__LabelWrapper" style="margin-top:3%">\
               <div class="Polaris-Label">\
               <input type="hidden" name="filter_title[]" value="'+$SingleFTitle+'">\
               <input type="hidden" name="original_val[]" value="'+$fk+'">\
                  <label  class="Polaris-Label__Text">'+toTitleCase($fk)+'</label>\
               </div>\
            </div>\
            <div class="Polaris-Connected">\
               <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
                for ($m = 0; $m < $filterData.length; $m++) {
                    $singleFilterVal=$filterData[$m];
                      $checked="";
                      if (jQuery.inArray($singleFilterVal, $productData) !== -1 && $split_filter_data[$SingleFTitle]) {
                        $checked = "checked";
                      }
                      $filterHtml+='<label class="Polaris-Choice" for="'+$SingleFTitle+$m+'">\
                         <span class="Polaris-Choice__Control">\
                            <span class="Polaris-Checkbox">\
                               <input id="'+$SingleFTitle+$m+'" '+$checked+' type="checkbox" name="'+$SingleFTitle+'[]" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value="'+$singleFilterVal+'">\
                               <span class="Polaris-Checkbox__Backdrop"></span>\
                               <span class="Polaris-Checkbox__Icon">\
                                  <span class="Polaris-Icon">\
                                     <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">\
                                        <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.436.436 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>\
                                     </svg>\
                                  </span>\
                               </span>\
                            </span>\
                         </span>\
                         <span class="Polaris-Choice__Label">'+$singleFilterVal+'</span>\
                      </label>';
                }
               $filterHtml+='</div>\
            </div>';

      }
        $('.filter-html').html($filterHtml);
      }
    });
   var  Font = Quill.import('formats/font');
   Font.whitelist = ["Arial","Arial Black","Book Antiqua","Comic Sans MS","Courier New","Georgia","Impact","Tahoma","Times New Roman","Trebuchet MS","Verdana"];
   Quill.register(Font, true);
   var toolbar = [[{font: Font.whitelist},{size: [false, 'large']}],
               ['bold', 'italic', 'underline', 'strike'],
               [{color: []}, {background: []}],
               [{script: 'sub'}, {script: 'super'}],
               [{header: 1}, {header: 2}, 'blockquote', 'code-block'],
               [{list: 'ordered'}, {list: 'bullet'}, {indent: '-1'}, {indent: '+1'}],
               [{direction: 'rtl'}],
               [{'align': []}],
               ['link'],
               ['clean']
             ];
  $IDS=['about','details','deals','pricing'];
  for ($editor = 0; $editor < $IDS.length; $editor++) {
    $singleEditor = $IDS[$editor];
    var quill = new Quill('#'+$singleEditor, {theme: 'snow',modules:{toolbar:toolbar}});
    quill.clipboard.dangerouslyPasteHTML(0, $('.'+$singleEditor+'_tabs').html());
    quill.format('font', 'sans-serif');
  }
    if($('.thumb-gallery-item').length == 0){
      $("#footer-gallery").append(ReturnThumbGalleryItem());
    }
    if($('.gallery-item').length == 0){
      $("#gallary-details").append(ReturnGalleryItem());
    }
    if($('.single-faq').length == 0){
      $("#vendor-fqs").append(CreateFaqs());
    }
    if($('.single-feature').length == 0){
      $("#features-div").append(CreateSingleFeature());
    }
   ShowHideGalleryItems();
   ShowVendorservices();
   ShowHideFaq();
   ShowHidefeatures();
   ShowHidethumb();

   function Appendselectedtag($text) {
      $tag="";
      $tag+='<span class="Polaris-Tag Polaris-Tag--removable">';
      $tag+='<span title="Wholesale" class="Polaris-Tag__TagText">'+$text+'</span>';
      $tag+='<input type="hidden" name="tags[]" value="'+$text+'">';
      $tag+='<button type="button" aria-label="Remove Wholesale" class="Polaris-Tag__Button removeTag">';
      $tag+='<span class="Polaris-Icon">';
      $tag+='<svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">';
      $tag+='<path d="M11.414 10l4.293-4.293a.999.999 0 1 0-1.414-1.414L10 8.586 5.707 4.293a.999.999 0 1 0-1.414 1.414L8.586 10l-4.293 4.293a.999.999 0 1 0 1.414 1.414L10 11.414l4.293 4.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z"></path>';
      $tag+='</svg>';
      $tag+='</span>';
      $tag+='</button>';
      $tag+='</span>';
      $('.tags-field').append($tag);
   }
   $(document).on("click", '.removeTag', function (e) {
     $(this).parents('.Polaris-Tag--removable').remove();
   })
   $(document).on("keyup", '.tagsinput', function (e) {
       if (e.keyCode == 188) {
         $text = $(this).val().slice(0, -1);
         Appendselectedtag($text);
         $(this).val("")
       }
   });


   $(document).on('click','.delete-service',function(){
     $(this).parents('.single-sub-items').remove();
     ShowVendorservices();
   });

   $(document).on('click','.add-faq-item',function(){
     $("#vendor-fqs").append(CreateFaqs());
     ShowHideFaq();
   })
   $(document).on('click','.add-service',function(){
     $(this).parents('.sub-items').append(ReturnSubItem($(this).data('index')));
     ShowVendorservices();
   });

   $(document).on('click','.add-service-item',function(){
     $("#vendor-services").append(CreateServiceItem());
     ShowVendorservices();
   });
   $(document).on('click','.delete-faq-item',function(){
      $('.single-faq:last').remove();
       ShowHideFaq();
   })
   $(document).on('click','.delete-service-item',function(){
     $('.single-service:last').remove();
     ShowVendorservices();
   })


   $(document).on('click','.add-feture-item',function(){
     $("#features-div").append(CreateSingleFeature());
     ShowHidefeatures();
   });
   $(document).on('click','.delete-feture-item',function(){
    $('.single-feature:last').remove()
    ShowHidefeatures();
   })

   $(document).on('click','.thumb-gallery-item .DeleteBtn',function(){
    $('.thumb-gallery-item:last').remove()
     ShowHidethumb();
   })
   $(document).on('click','.thumb-gallery-item .AddBtn',function(){
    $("#footer-gallery").append(ReturnThumbGalleryItem());
     ShowHidethumb();
   })
   $(document).on('click','.gallery-item .AddBtn',function(){
     $("#gallary-details").append(ReturnGalleryItem());
     ShowHideGalleryItems();
   })
   $(document).on('click','.gallery-item .DeleteBtn',function(){
    $('.gallery-item:last').remove()
    ShowHideGalleryItems();
  });


   $(".vendorform").on('submit',function(evt){
       evt.preventDefault();
       $IDS=['about','details','deals','pricing'];
       $textFields=['about_details_tab','details_tab','deals_tab','pricing_tab'];
       for ($editor = 0; $editor < $IDS.length; $editor++) {
         $singleEditor = $IDS[$editor];
         var myEditor = document.querySelector('#'+$singleEditor);
         $("#"+$textFields[$editor]).val(myEditor.children[0].innerHTML);
       }
       $('.product-loading').fadeIn(100);
       var formData = new FormData($(this)[0]);
       $.ajax({
         url: '{{url("SaveVendorDetails")}}',
         data: formData,
         type: 'POST',
         dataType:'json',
         processData: false,
         contentType: false,
         success:function(response){
           if(response.code == 200){
             alert(response.msg);
           }else{
             alert(response.msg);
           }
           $('.product-loading').fadeIn(100);
           window.location.href = "{{url('/vendor_list')}}?shop={{$shop}}";
         }
       });

   });
</script>

<script>

 $(document).on('change', '.input-files,.main-gallery', function() {
     var file = $(this)[0].files[0];
     var $imageUploadPath = '{{url("uploadPreview")}}';
     var formData = new FormData();
     $elm = this;
     $fielaName = $(this).data('field-name');
     if($(this).hasClass('gal')){
       formData.append($(this).data('file-name'), file);
     }else{
       formData.append($fielaName, file);
     }
     $($elm).parents('.Polaris-Card__Section').find('.progress-bar').show();
     $.ajax({
         xhr: function() {
             var xhr = new window.XMLHttpRequest();
             xhr.upload.addEventListener("progress", function(evt) {
                 if (evt.lengthComputable) {
                     var percentComplete = evt.loaded / evt.total;
                     percentComplete = parseInt(percentComplete) * 100;
                     $css = percentComplete+"%"
                     $($elm).parents('.Polaris-Card__Section').find('.Polaris-ProgressBar__Indicator').css('width',$css);
                     $($elm).parents('.Polaris-Card__Section').find('.progressCount').html($css);
                     if(percentComplete == 100){
                       setTimeout(function() {
                           $($elm).parents('.Polaris-Card__Section').find('.progress-bar').fadeOut(1000)
                       }, 1000);
                     }
                 }
             }, false);
             return xhr;
         },
         url: $imageUploadPath,
         data: formData,
         type: 'POST',
         dataType: 'json',
         processData: false,
         contentType: false,
         success: function(response) {
             if (response.result == 1) {
               $($elm).parents('.Polaris-FormLayout__Items').find('.upload-preview').show().attr('src',response.path);
               $(".img"+$fielaName).val(response.path);
               $($elm).val('')
             }
         }
     })
 })
</script>
@endsection
