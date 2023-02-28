<div class="Polaris-Layout__AnnotatedSection">
   <div class="Polaris-Layout__AnnotationWrapper">
      <div class="Polaris-Layout__Annotation">
         <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Vendor Feature's/Amenities</h2>
            <div class="Polaris-Layout__AnnotationDescription">
               <p>Add Features/Amenities For Vendors visible on vendor Details Page </p>
            </div>
         </div>
      </div>
      <div class="Polaris-Layout__AnnotationContent">
         <div class="cards-container"  style="position: relative; z-index: 1;">
            <div class="Polaris-Card">
               <div class="Polaris-Card__Section">
                  <div class="Polaris-Card__SectionHeader">
                  </div>
                  <div class="Polaris-FormLayout">
                     <div id="features-div">

                     @if(isset($saved_feature))
                      @foreach($saved_feature as $img_key=>$single_image)
                          @include('admin.forminputs.featureSingle',[
                            'serviceIndex' => $loop->index,
                            'feature_value' => $single_image
                          ])
                      @endforeach
                    @endif

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
