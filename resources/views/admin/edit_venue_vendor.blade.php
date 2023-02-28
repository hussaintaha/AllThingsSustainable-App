@extends('admin.sadmin')
@section('content')
<style>
   #textarea{
   width: 100%;
   line-height: 2.4em;
   }
   #about-auto {
   height: auto;
   margin-bottom: 16%;
   }
   .info-img {
   color: red;
   font-size: 12px;
   margin-left: 5px;
   }
   .Gallery-btns {
   float: right;
   display: flex;
   margin-right: 2%;
   }
   .gallery-item {
   border: 1px solid #dfe3e8;
   margin-left: 2%;
   margin-bottom: 3%;
   }
   .gallery-item .desc-text{
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
   .service-label .Polaris-Button{
   float: right;
   }
   .service-name-container{
   width: 70%;
   margin-right: 2%;
   }
   .Polaris-Choice{
     width: 32%;
   }
</style>
<div class="Polaris-Page">
   <div class="Polaris-Page__Content">
      <form class="vendorform">
        <input type="hidden" value="{{$details->id}}" name="vendor_id">
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
                                    @include('admin.forminputs.textfields', array('label_name' => 'Company name','input_name'=>'company_name','value'=>$details->company_name))
                                    @include('admin.forminputs.select', array('label_name' => 'SubCategory','input_name'=>'sub_cat','value'=>$details->sub_cat))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Establishment Year','input_name'=>'est_year','value'=>$details->est_year))
                                    @include('admin.forminputs.textfields', array('label_name' => 'Address line 1','input_name'=>'address1','value'=>$details->address1))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Address line 2','input_name'=>'address3','value'=>$details->address3))
                                    @include('admin.forminputs.textfields', array('label_name' => 'City','input_name'=>'city','value'=>$details->city))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Country','input_name'=>'country','value'=>$details->country))
                                    @include('admin.forminputs.textfields', array('label_name' => 'State','input_name'=>'state','value'=>$details->state))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Zip Code','input_name'=>'zip_code','value'=>$details->zip_code))
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
                                       @include('admin.forminputs.textfields', array('label_name' => 'Email','input_name'=>'email','value'=>$details->email))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Contact No.','input_name'=>'contact_no','value'=>$details->contact_no))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Website Address','input_name'=>'web_address','value'=>$details->web_address))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Instagram URL','input_name'=>'insta_url','value'=>$details->insta_url))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'Pinterest URL','input_name'=>'pin_url','value'=>$details->pin_url))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Twitter URL','input_name'=>'twitter_url','value'=>$details->twitter_url))
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       @include('admin.forminputs.textfields', array('label_name' => 'LinkedIn URL','input_name'=>'linkedin_url','value'=>$details->linkedin_url))
                                       @include('admin.forminputs.textfields', array('label_name' => 'Facebook URL','input_name'=>'facebook_url','value'=>$details->facebook_url))
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <style>
            .media-div p{
              font-size: 15px;
              font-weight: 600;
              margin-top: 7%;
            }
            .media-div{
              width: 30%;
              margin-left: 2%;
            }
            </style>
            <div class="Polaris-Layout__AnnotatedSection">
               <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                     <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Vendor Images</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Vendor Images to be viewable on Storefront</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                     <div class="cards-container" d style="position: relative; z-index: 1;">
                        <div class="Polaris-Card">
                           <div class="Polaris-Card__Section">
                              <div role="group" class="Polaris-FormLayout--grouped" style="display:flex">
                                 @include('admin.forminputs.media', array('path' =>$details->card_image,'image_title'=>'Featutred Image'))
                                 @include('admin.forminputs.media', array('path' =>$details->avtar_image,'image_title'=>'Avtar Image'))
                                 @include('admin.forminputs.media', array('path' =>$details->background_image,'image_title'=>'Cover Image'))
                              </div>
                           </div>
                        </div>
                        <div class="Polaris-Card">
                           <div class="Polaris-Card__Section">
                              <div class="Polaris-Card__SectionHeader">
                              </div>
                              <div class="Polaris-FormLayout">
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       <div class="Polaris-FormLayout__Item">
                                          <div class="">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                   <label  for="card_image" class="Polaris-Label__Text">
                                                   Featured Image <span class="info-img">Viewable on vendor Listing page</span>
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="Polaris-Connected">
                                                <input name="card_image" id="card_image"  type="file"  >
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="Polaris-FormLayout__Items">
                                       <div class="Polaris-FormLayout__Item">
                                          <div class="">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                   <label  for="avtar_image" class="Polaris-Label__Text">
                                                   Avtar Image <span class="info-img">Viewable on vendor profile page</span>
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="Polaris-Connected">
                                                <input name="avtar_image" id="avtar_image"  type="file"  >
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                    <div class="Polaris-FormLayout__Items">
                                       <div class="Polaris-FormLayout__Item">
                                          <div class="">
                                             <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                   <label  for="background_image" class="Polaris-Label__Text">
                                                   Cover Photo <span class="info-img">Viewable on vendor profile page</span>
                                                   </label>
                                                </div>
                                             </div>
                                             <div class="Polaris-Connected">
                                                <input name="background_image" id="background_image"  type="file"  >
                                             </div>
                                          </div>
                                       </div>
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
                        <h2 class="Polaris-Heading">Vendor Services</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Add Vendor Services Along With their Service Names</p>
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
                                 <div id="vendor-services">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @php
               $set = "Historic Venue,Garden,Ballroom,Estate,Barn,Hotel,Backyard,Tented,Industrial/Warehouse,Vineyard/Winery,Mountain,Forest,Restaurant,Beach,Park,Museum,Rooftop,Loft,Country Club,Desert,Religious Setting,Library,Brewery/Distillery,Castle,City Hall,HistoricVenue";
               $settings = explode(',',$set);
               $caps = explode(',',"101-200,201-300,51-100,0-50,300+");
               $prices =  explode(',',"$,$$,$$$,$$$$,$$$$$,No Site Fee");
               $amenities =  explode(',',"Wifi,Bar,Service Staff,Outside Vendors Allowed,Food/Catering,Planning Service,Rentals,Pet Friendly,Accommodations,Transportation");
            @endphp
            <div class="Polaris-Layout__AnnotatedSection">
               <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                     <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Extra Features</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Venue  Fetaures</p>
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
                                @php
                                   $features = json_decode($details->features,true);
                                @endphp
                                 @include('admin.forminputs.features', array('settings' => $settings,'setting_name'=>'Settings','input_name'=>'settings','values'=>$features))
                                 @include('admin.forminputs.features', array('settings' => $caps,'setting_name'=>'Capacity','input_name'=>'capacity','values'=>$features))
                                 @include('admin.forminputs.features', array('settings' => $prices,'setting_name'=>'Pricing','input_name'=>'prices','values'=>$features))
                                 @include('admin.forminputs.features', array('settings' => $amenities,'setting_name'=>'Amenities','input_name'=>'amenities','values'=>$features))
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
                        <h2 class="Polaris-Heading">Vendor Gallery</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Add Contents for Vendor Gallery viewble on vendor profile page</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                     <div class="cards-container" d style="position: relative; z-index: 1;">
                       <div class="Polaris-Card">
                          <div class="Polaris-Card__Section">
                             <div role="group" class="Polaris-FormLayout--grouped" style="display:flex">
                                @foreach($gallery as $k=>$gal)
                                  @include('admin.forminputs.media', array('path' =>$gal->gallery_file,'image_title'=>$gal->gallery_file_text,'width'=>'50'))
                                      @if(($k+1) % 2 == 0)
                                        </div>
                                        <div role="group" class="Polaris-FormLayout--grouped" style="display:flex;">
                                      @endif
                                @endforeach
                             </div>
                          </div>
                       </div>
                        <div class="Polaris-Card">
                           <div class="Polaris-Card__Section">
                              <div class="Polaris-Card__SectionHeader">
                              </div>
                              <div class="Polaris-FormLayout" id="Gallery-details">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="Polaris-Layout__AnnotatedSection" id="about-auto">
               <div class="Polaris-Layout__AnnotationWrapper">
                  <div class="Polaris-Layout__Annotation">
                     <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">About Details</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>About Details</p>
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
                                 <div class="Polaris-FormLayout__Item">
                                    <div class="">
                                       <div class="Polaris-Labelled__LabelWrapper">
                                          <div class="Polaris-Label">
                                             <label  for="textarea" class="Polaris-Label__Text">
                                             About Details
                                             </label>
                                          </div>
                                       </div>
                                       <div  id="editor"></div>
                                       <textarea  style="display:none;" id="about_details" name="about_details"></textarea>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="Polaris-Layout__Section">
               <div class="Polaris-PageActions">
                  <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
                     <div class="Polaris-Stack__Item">
                        <button type="submit" class="Polaris-Button Polaris-Button--primary">
                        <span class="Polaris-Button__Content">
                        <span class="Polaris-Button__Text">Update</span>
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
<script>
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
           ]
   var quill = new Quill('#editor', {
       theme: 'snow',
       modules:{
         toolbar:toolbar
       }
   })
   quill.format('font', 'sans-serif');
   quill.clipboard.dangerouslyPasteHTML(0,'{{$details->about_details}}');

   function ShowHideDivs() {
     $('.DeleteBtn').show();
     $('.AddBtn').hide();
     $('.gallery-item:first .AddBtn').show();
     $('.gallery-item:first .DeleteBtn').hide();
   }
   function ReturnGalleryItem() {
    $index = $('.gallery-item').length;
    $deletebtn = '<button  type="button" class="Polaris-Button DeleteBtn Gallery-btns" >';
    $deletebtn+='<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
    $deletebtn+='<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
    $deletebtn+='</svg>';
    $deletebtn+='</button>';

    $addBtn = '<button type="button" class="Polaris-Button AddBtn Gallery-btns" >';
    $addBtn+='<svg style="height: 20px;width: 20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $addBtn+='<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381"/>';
    $addBtn+='</svg>';
    $addBtn+='</button>';

      $item ="";
      $item+='<div class="gallery-item">';
      $item+='<div role="group" class="Polaris-FormLayout--grouped">';
      $item+='<div class="Polaris-FormLayout__Items">';
      $item+='<div class="Polaris-FormLayout__Item">';
      $item+='<div class="">';
      $item+='<div class="Polaris-Labelled__LabelWrapper">';
      $item+='<div class="Polaris-Label" style="width:100%">';
      $item+='<label  for="gallery_file'+$index+'" class="Polaris-Label__Text">';
      $item+='Gallery file <span class="info-img">video and image files accepted</span>'+$deletebtn+$addBtn;
      $item+='</label>';
      $item+='</div>';
      $item+='</div>';
      $item+='<div class="Polaris-Connected">';
      $item+='<input name="gallery_file[]" id="gallery_file'+$index+'"  type="file"  >';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='<div role="group" class="Polaris-FormLayout--grouped">';
      $item+='<div class="Polaris-FormLayout__Items">';
      $item+='<div class="Polaris-FormLayout__Item">';
      $item+='<div class="">';
      $item+='<div class="Polaris-Labelled__LabelWrapper">';
      $item+='<div class="Polaris-Label">';
      $item+='<label  for="item_description'+$index+'" class="Polaris-Label__Text">';
      $item+='Gallery Item Description';
      $item+='</label>';
      $item+='</div>';
      $item+='</div>';
      $item+='<div class="Polaris-Connected desc-text">';
      $item+='<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
      $item+='<div class="Polaris-TextField">';
      $item+='<input name="item_description[]" id="item_description'+$index+'" placeholder="Gallery Description Text"  class="Polaris-TextField__Input" type="text"  aria-invalid="false" aria-multiline="false" >';
      $item+='<div class="Polaris-TextField__Backdrop"></div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      $item+='</div>';
      return $item;
   }

   function CreateServiceItem() {
      $serviceIndex = $('.single-service').length;
      $service="";
      $service+='<div class="single-service">';
      $service+='<div role="group" class="Polaris-FormLayout--grouped">';
      $service+='<div class="Polaris-FormLayout__Items">';
      $service+='<div class="Polaris-FormLayout__Item">';
      $service+='<div class="">';
      $service+='<div class="Polaris-Labelled__LabelWrapper">';
      $service+='<div class="Polaris-Label service-label">';
      $service+='<label id="PolarisTextFieldservice'+$serviceIndex+'Label" for="service_name'+$serviceIndex+'" class="Polaris-Label__Text">Service name';
      $service+='<button type="button" class="Polaris-Button add-service-item">';
      $service+='<svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
      $service+='<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">';
      $service+='</path>';
      $service+='</svg>';
      $service+='</button>';
      $service+='<button type="button" class="Polaris-Button delete-service-item">';
      $service+='<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
      $service+='<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
      $service+='</svg>';
      $service+='</button>';
      $service+='</label>';
      $service+='</div>';
      $service+='</div>';
      $service+='<div class="Polaris-Connected" style="margin-right: 3%;">';
      $service+='<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
      $service+='<div class="Polaris-TextField">';
      $service+='<input name="service_name[]" id="service_name'+$serviceIndex+'" placeholder="Service Name" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextFieldservice'+$serviceIndex+'Label" aria-invalid="false" aria-multiline="false" >';
      $service+='<div class="Polaris-TextField__Backdrop"></div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='<div role="group" class="Polaris-FormLayout--grouped" style="margin-bottom: 3%;">';
      $service+='<div class="Polaris-FormLayout__Items">';
      $service+='<div class="Polaris-FormLayout__Item">';
      $service+='<div class="">';
      $service+='<div class="Polaris-Labelled__LabelWrapper">';
      $service+='<div class="Polaris-Label">';
      $service+='<label id="PolarisTextField1Label" for="service" class="Polaris-Label__Text">Service</label>';
      $service+='</div>';
      $service+='</div>';
      $service+='<div class="sub-items">';
      $service+='<div class="Polaris-Connected single-sub-items">';
      $service+='<div  style="display:flex" class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
      $service+='<div class="Polaris-TextField service-name-container">';
      $service+='<input name="service'+$serviceIndex+'[]" id="service" required placeholder="Service" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false" >';
      $service+='<div class="Polaris-TextField__Backdrop"></div>';
      $service+='</div>';
      $service+='<button type="button" data-index="'+$serviceIndex+'" class="Polaris-Button add-service">';
      $service+='<svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
      $service+='<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">';
      $service+='</path>';
      $service+='</svg>';
      $service+='</button>';
      $service+='<button type="button" class="Polaris-Button delete-service">';
      $service+='<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
      $service+='<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
      $service+='</svg>';
      $service+='</button>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      $service+='</div>';
      return $service;
   }
   function ReturnSubItem($serviceIndex) {
    $service = "";
    $service+='<div class="Polaris-Connected single-sub-items" style="margin-top:3%">';
    $service+='<div style="display:flex" class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $service+='<div class="Polaris-TextField service-name-container">';
    $service+='<input required name="service'+$serviceIndex+'[]" id="service" placeholder="Service" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false" >';
    $service+='<div class="Polaris-TextField__Backdrop"></div>';
    $service+='</div>';
    $service+='<button type="button" class="Polaris-Button add-service">';
    $service+='<svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $service+='<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">';
    $service+='</path>';
    $service+='</svg>';
    $service+='</button>';
    $service+='<button type="button" class="Polaris-Button delete-service">';
    $service+='<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
    $service+='<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
    $service+='</svg>';
    $service+='</button>';
    $service+='</div>';
    $service+='</div>';
    return $service;
   }
   function ShowVendorservices(){
    $('.single-service').each(function(ind,service){
      if(ind == 0){
        $(service).find('.delete-service-item').hide();
        $(service).find('.add-service-item').show();
      }else{
        $(service).find('.delete-service-item').show();
        $(service).find('.add-service-item').hide();
      }
      $(service).find('.single-sub-items').each(function(index,subservice){
          if(index == 0){
            $(subservice).find('.delete-service').hide();
            $(subservice).find('.add-service').show();
          }else{
            $(subservice).find('.delete-service').show();
            $(subservice).find('.add-service').hide();
          }
      })
    })
   }
   $("#Gallery-details").append(ReturnGalleryItem());
   ShowHideDivs();



function SingleService(name,data,number){
  $service = "";
  $service+='<div class="single-service">\
   <div role="group" class="Polaris-FormLayout--grouped">\
      <div class="Polaris-FormLayout__Items">\
         <div class="Polaris-FormLayout__Item">\
            <div class="">\
               <div class="Polaris-Labelled__LabelWrapper">\
                  <div class="Polaris-Label service-label">\
                     <label id="PolarisTextFieldservice'+number+'Label" for="service_name'+number+'" class="Polaris-Label__Text">\
                        Service name\
                        <button type="button" class="Polaris-Button add-service-item">\
                           <svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">\
                              <path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381"></path>\
                           </svg>\
                        </button>\
                        <button type="button" class="Polaris-Button delete-service-item">\
                           <svg style="height: 20px;width: 20px;" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">\
                              <path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"></path>\
                           </svg>\
                        </button>\
                     </label>\
                  </div>\
               </div>\
               <div class="Polaris-Connected" style="margin-right: 3%;">\
                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">\
                     <div class="Polaris-TextField">\
                        <input name="service_name[]" value="'+name+'" id="service_name'+number+'" placeholder="Service Name" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextFieldservice'+number+'Label" aria-invalid="false" aria-multiline="false">\
                        <div class="Polaris-TextField__Backdrop"></div>\
                     </div>\
                  </div>\
               </div>\
            </div>\
         </div>\
      </div>\
   </div>\
   <div role="group" class="Polaris-FormLayout--grouped" style="margin-bottom: 3%;">\
      <div class="Polaris-FormLayout__Items">\
         <div class="Polaris-FormLayout__Item">\
            <div class="">\
               <div class="Polaris-Labelled__LabelWrapper">\
                  <div class="Polaris-Label"><label id="PolarisTextField1Label" for="service" class="Polaris-Label__Text">Service</label></div>\
               </div>\
               <div class="sub-items">';
               for ($num = 0; $num < data.length; $num++) {
                  $service+='<div class="Polaris-Connected single-sub-items" style="margin-top:3%">\
                     <div style="display:flex" class="Polaris-Connected__Item Polaris-Connected__Item--primary">\
                        <div class="Polaris-TextField service-name-container">\
                           <input name="service'+number+'[]" value="'+ data[$num]+'" id="service" required="" placeholder="Service" class="Polaris-TextField__Input" type="text" aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false">\
                           <div class="Polaris-TextField__Backdrop"></div>\
                        </div>\
                        <button type="button" data-index="'+number+'" class="Polaris-Button add-service">\
                           <svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">\
                              <path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381"></path>\
                           </svg>\
                        </button>\
                        <button type="button" class="Polaris-Button delete-service">\
                           <svg style="height: 20px;width: 20px;" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">\
                              <path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"></path>\
                           </svg>\
                        </button>\
                     </div>\
                  </div>';
                }

               $service+='</div>\
            </div>\
         </div>\
      </div>\
   </div>\
</div>';
  return $service;
  }
   $services = JSON.parse('<?=$details->services?>');
   if(Object.keys($services).length >0){
     $si=0;
     for(service in $services){
       $("#vendor-services").append(SingleService(service,$services[service],$si));
       $si++;
     }
     ShowVendorservices();
   }else{
     $("#vendor-services").append(CreateServiceItem());
     ShowVendorservices();
   }


   $(document).on('click','.delete-service',function(){
     $(this).parents('.single-sub-items').remove();
     ShowVendorservices();
   })
   $(document).on('click','.add-service',function(){
     $(this).parents('.sub-items').append(ReturnSubItem($(this).data('index')));
     ShowVendorservices();
   });

   $(document).on('click','.add-service-item',function(){
     $("#vendor-services").append(CreateServiceItem());
     ShowVendorservices();
   });
   $(document).on('click','.delete-service-item',function(){
     $('.single-service:last').remove();
     ShowVendorservices();
   })


   $(document).on('click','.AddBtn',function(){
     $("#Gallery-details").append(ReturnGalleryItem());
     ShowHideDivs();
   })
   $(document).on('click','.DeleteBtn',function(){
    $('.gallery-item:last').remove()
    ShowHideDivs();
   })


   $(".vendorform").on('submit',function(evt){
       evt.preventDefault();
       var myEditor = document.querySelector('#editor');
       $("#about_details").val(myEditor.children[0].innerHTML);
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
       })
   })
</script>
@endsection
