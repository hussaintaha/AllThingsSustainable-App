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
   .gallery-item,.cause-item {
     border: 1px solid #dfe3e8;
     margin-left: 2%;
     margin-bottom: 3%;
     padding-right: 3%;
   }
   .gallery-item .desc-text,.cause-item .desc-text{
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
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<div class="Polaris-Page">
   <div class="Polaris-Page__Content">
      <form class="vendorform" action="{{url('/SaveVendorDetails2')}}?shop={{$shop}}">
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
                                    @include('admin.forminputs.textfields', array('label_name' => 'Vendor name','extraclass'=>'required','input_name'=>'vendor_name'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'Vendor Email','input_name'=>'email'))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Mobile no.','input_name'=>'mobile'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'Cause Slider Name','input_name'=>'cause_name'))
                                 </div>
                              </div>
                              <div role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    <div class="Polaris-FormLayout__Item">
                                       <div class="">
                                          <div class="Polaris-Labelled__LabelWrapper">
                                             <div class="Polaris-Label">
                                                <label id="vendorDescription" for="vendor-description-text" class="Polaris-Label__Text">
                                                  Vendor Description
                                                </label>
                                             </div>
                                          </div>
                                          <div class="Polaris-Connected">
                                             <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                                <div class="Polaris-TextField">
                                                   <textarea name="description" id="vendor-description-text" placeholder="Description" class="Polaris-TextField__Input"  ></textarea>
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
                                    @include('admin.forminputs.textfields', array('label_name' => 'City','input_name'=>'city'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'Website','input_name'=>'contact'))
                                 </div>
                              </div>
                              <div  role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Twitter URL','input_name'=>'twitter'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'Facebook URL','input_name'=>'facebook'))
                                 </div>
                              </div>
                              <div  role="group" class="Polaris-FormLayout--grouped">
                                 <div class="Polaris-FormLayout__Items">
                                    @include('admin.forminputs.textfields', array('label_name' => 'Instagram','input_name'=>'instagram'))
                                    @include('admin.forminputs.textfields', array('label_name' => 'YouTube Channel URL','input_name'=>'youtube'))
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
                        <h2 class="Polaris-Heading">Vendor Logo</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Vendor Logo</p>
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
                                        'field_id' => 'logo',
                                        'field_name' => 'logo',
                                        'field_title' => 'Vendor Logo',
                                        'field_desc'=>'Vendor Logo',
                                    ])
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
                        <h2 class="Polaris-Heading">Vendor Story</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Vendor Story</p>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Layout__AnnotationContent">
                     <div class="cards-container" style="position: relative; z-index: 1;">
                        <div class="Polaris-Card">
                           <div class="Polaris-Card__Section">
                             <div class="Polaris-Card__SectionHeader">
                               <div class="Polaris-Labelled__LabelWrapper">
                                     <div class="Polaris-Label">
                                        <label for="vendor-story-text" class="Polaris-Label__Text">
                                            Vendor Story
                                        </label>
                                     </div>
                                  </div>
                             </div>
                              <div class="Polaris-FormLayout">
                                 <div role="group" class="Polaris-FormLayout--grouped">
                                   <div class="Polaris-Connected" style="margin-left: 2%;margin-top: 2%;">
                                      <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                         <div class="Polaris-TextField">
                                            <textarea name="vendor_story" id="vendor-story-text" placeholder="Vendor Story" class="Polaris-TextField__Input"  ></textarea>
                                            <div class="Polaris-TextField__Backdrop"></div>
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
                        <h2 class="Polaris-Heading">Vendor Story </h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                           <p>Vendor Story</p>
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

                                   @include('admin.forminputs.mediasettings')

                                   @include('admin.forminputs.textfields',[
                                       'label_name' => 'Story Video URL',
                                       'input_name'=>'story_video'
                                     ]
                                   )
                                    @include('admin.forminputs.image_picker', [
                                      'field_id' => 'story_banner',
                                      'field_name' => 'story_banner',
                                      'field_title' => 'Story Banner',
                                      'field_desc'=>'Add Vendor Story Bannner',
                                    ])
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @include('admin.forminputs.policies',[
                'form_title' => 'Add Vendor Policies',
                'form_details'=>'Add Policies Data',
                'field_id'=>'vendor-policies'
            ])

         @include('admin.forminputs.banner',[
             'form_title' => 'Add Banner Details',
             'form_details'=>'Add Contents for  the Banner',
             'field_id'=>'gallary-details'
         ])

         @include('admin.forminputs.banner',[
             'form_title' => 'Add Cause Slide Data',
             'form_details'=>'Add Cause Slide Data',
             'field_id'=>'cause-details'
         ])
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
@include('admin.forminputs.jsfunctions2')
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
   #gallary-details .Polaris-Connected{
     width:100%;
   }
</style>
<script>
   $(document).ready(function() {
          $("#gallary-details").append(ReturnGalleryItem());
          $("#vendor-policies").append(CreateFaqs());
          $("#cause-details").append(ReturnSingleCause());
          ShowHideGalleryItems();
          ShowHideCauseItems();
          ShowHideFaq();
    });
</script>
@endsection
