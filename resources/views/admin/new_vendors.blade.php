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
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 3px;
  background-color: #4CAF50;
}

.myBarbulk{
  width: 1%;
  height: 3px;
  background-color: #4CAF50;
}
.myBarbulk1{
  width: 1%;
  height: 3px;
  background-color: #4CAF50;
  display: none;
}

.myBarbulk{
  display: none;
}
</style>

<?php
  $catArray=[];
  foreach ($cat as $key=>$singlemaincat) {
    if(is_null($singlemaincat->parent->extra_filters_headings)){
      $empty = new stdClass();
      $catArray[$singlemaincat->parent->id]['filters'] = $empty;
    }else{
      $catArray[$singlemaincat->parent->id]['filters'] = json_decode($singlemaincat->parent->extra_filters_headings);
    }
  }
?>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
                                    @include('admin.forminputs.textfields', array('label_name' => 'Company name','input_name'=>'company_name'))
                                    @include('admin.forminputs.select', array('label_name' => 'SubCategory','input_name'=>'sub_cat'))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Establishment Year','input_name'=>'est_year'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'Address line 1','input_name'=>'address1'))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Address line 2','input_name'=>'address2'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'City','input_name'=>'city'))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">


                                   <div class="Polaris-FormLayout__Item">
                                      <div class="">
                                         <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                               <label id="CountryLabel" for="country" class="Polaris-Label__Text">
                                                 Select Country
                                               </label>
                                            </div>
                                         </div>
                                         <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                               <div class="Polaris-TextField">
                                                  <select  name="country" id="country" required class="NewSelector">
                                                     <option value="">Please Select</option>
                                                     @foreach ($countries as $country)
                                                       <option value="{{$country->name}}"  data-country_id="{{$country->id}}">{{$country->name}}</option>
                                                     @endforeach
                                                  </select>
                                                  <div class="Polaris-TextField__Backdrop"></div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>

                                   <div class="Polaris-FormLayout__Item">
                                      <div class="">
                                         <div class="Polaris-Labelled__LabelWrapper">
                                            <div class="Polaris-Label">
                                               <label id="StateLabel" for="state" class="Polaris-Label__Text">
                                                 State
                                               </label>
                                            </div>
                                         </div>
                                         <div class="Polaris-Connected">
                                            <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                               <div class="Polaris-TextField">
                                                  <select  name="state" id="state" class="NewSelector">
                                                     <option value="">Please Select</option>
                                                  </select>
                                                  <div class="Polaris-TextField__Backdrop"></div>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>

                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Zip Code','input_name'=>'zip_code'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'USP Number 1','input_name'=>'usp_number_1'))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'USP Number 2','input_name'=>'usp_number_2'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'USP Number 2','input_name'=>'usp_number_3'))
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
                                       @include('admin.forminputs.textfields', array('label_name' => 'Email','input_name'=>'email'))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Contact No.','input_name'=>'contact_no'))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Website Address','input_name'=>'web_address'))
                                    </div>
                                 </div>
                                 <div style="display:none" role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Pinterest URL','input_name'=>'pin_url'))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Twitter URL','input_name'=>'twitter_url'))
                                    </div>
                                 </div>
                                 <div style="display:none" role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'LinkedIn URL','input_name'=>'linkedin_url'))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Facebook URL','input_name'=>'facebook_url'))
                                    </div>
                                 </div>
                                 <div style="display:none" role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Google Plus','input_name'=>'google_plus_url'))
                                       @include('admin.forminputs.textfields', array('label_name' => 'YouTube Channel URL','input_name'=>'youtube_channel_url'))
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
                                   @include('admin.forminputs.image_picker', [
                                     'field_id' => 'avtar_image',
                                     'field_name' => 'avtar_image',
                                     'field_title' => 'Avtar Image',
                                     'field_desc'=>'Viewable on Landing Page',
                                   ])

                                  @include('admin.forminputs.image_picker', [
                                    'field_id' => 'feature_image1',
                                    'field_name' => 'feature_image1',
                                    'field_title' => 'Featured Image 1',
                                    'field_desc'=>'Viewable on Landing Page',
                                  ])

                                  </div>

                                 <div role="group" class="Polaris-FormLayout--grouped">
                                   @include('admin.forminputs.image_picker', [
                                     'field_id' => 'feature_image2',
                                     'field_name' => 'feature_image2',
                                     'field_title' => 'Featured Image 2',
                                     'field_desc'=>'Viewable on Landing Page',
                                   ])

                                </div>
                                <div role="group" class="Polaris-FormLayout--grouped">
                                   @include('admin.forminputs.image_picker', [
                                     'field_id' => 'feature_image3',
                                     'field_name' => 'feature_image3',
                                     'field_title' => 'Featured Image 3',
                                     'field_desc'=>'Viewable on Landing Page',
                                   ])
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


            @include('admin.forminputs.gallery2',[
              'form_title' => 'Main Gallery and Thumbnail Gallery',
              'form_details'=>'Add Contents for Vendor Gallery Viewable on vendor details page',
              'field_id'=>'gallary-details'
            ])
            @include('admin.forminputs.gallery2', [
              'form_title' => 'Footer Gallery On the Vendor Details Page',
              'form_details'=>'Add Contents for Vendor Thumbnail Gallery viewable on vendor profile page',
              'field_id'=>'footer-gallery'
            ])

            @include('admin.forminputs.vendor_faq')
            @include('admin.forminputs.vendor_features')
            @include('admin.forminputs.vendor_tags')
            @include('admin.forminputs.filters')

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
                        @include('admin.forminputs.editor',[
                          'label_name' => 'About',
                          'editor_id'=>'about',
                          'field_name'=>'about_details_tab'
                        ])
                      </div>

                      <div  style="width:50%">
                        @include('admin.forminputs.editor',[
                        'label_name' => 'Details',
                        'editor_id'=>'details',
                        'field_name'=>'details_tab'
                        ])
                      </div>
                  </div>

            <div class="about-auto" >
                <div style="width:50%">
                  @include('admin.forminputs.editor',[
                    'label_name' => 'Deals',
                    'editor_id'=>'deals',
                    'field_name'=>'deals_tab'
                  ])
                </div>

                <div  style="width:50%">
                  @include('admin.forminputs.editor',[
                    'label_name' => 'Pricing',
                    'editor_id'=>'pricing',
                    'field_name'=>'pricing_tab'
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



<script>

  $(document).ready(function() {
    function toTitleCase(str) {
        return str.replace(/\w\S*/g, function(txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
    }
    $('#country').on('change', function() {
      $countryId = $(this).find('option:selected').data('country_id');
      // $countryId = $(this).val();
      $.ajax({
        url: '{{url("getStates")}}',
        data: {country_id:$countryId},
        type: 'GET',
        dataType:'html',
        success:function(response){
          $("#state").html(response);
        }
      });

    })

    $cats = <?=json_encode($catArray)?>;
    $('#sub_cat').on('change', function() {
      $parentCat = $(this).find('option:selected').data('parent-cat-id');
      if($cats[$parentCat]){
        $filters = $cats[$parentCat].filters;
        $filterHtml=""
        for ($fk in $filters) {
          $filterData =$filters[$fk];
          $SingleFTitle = $fk.toLowerCase().replace(/ /g,'-');
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
              $filterHtml+='<label class="Polaris-Choice" for="'+$SingleFTitle+$m+'">\
                 <span class="Polaris-Choice__Control">\
                    <span class="Polaris-Checkbox">\
                       <input id="'+$SingleFTitle+$m+'" type="checkbox" name="'+$SingleFTitle+'[]" class="Polaris-Checkbox__Input" aria-invalid="false" role="checkbox" aria-checked="false" value="'+$singleFilterVal+'">\
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
      // console.log($filterHtml);

      }
    });
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
    quill.format('font', 'sans-serif');
  }
   $("#footer-gallery").append(ReturnThumbGalleryItem());
   $("#gallary-details").append(ReturnGalleryItem());
   $("#vendor-services").append(CreateServiceItem());
   $("#vendor-fqs").append(CreateFaqs());
   $("#features-div").append(CreateSingleFeature());

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
    // $('.thumb-gallery-item:last').remove()
    $parent = $(this).closest('div.Polaris-FormLayout--grouped').parent('.thumb-gallery-item');
    $children = $parent.find('img');
    if ($children[0].src != '') {
      removeFile($children[0].src);
    }
    $parent.remove()
     ShowHidethumb();
   })
   function removeFile(file) {
     $.ajax({
       url: '{{url("removeImage")}}',
       data: {file:file},
       type: 'GET',
       dataType:'json',
       contentType: false,
       success:function(response){
       }
     });

   }
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
     });
 });
</script>
@endsection
