<div class="Polaris-Layout__AnnotatedSection">
   <div class="Polaris-Layout__AnnotationWrapper">
      <div class="Polaris-Layout__Annotation">
         <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">Vendor Page FAQ's</h2>
            <div class="Polaris-Layout__AnnotationDescription">
               <p>Add Vendor Services Along With their Service Names</p>
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
                     <div id="vendor-fqs">

                     @if(isset($saved_faq))
                      @foreach($saved_faq as $img_key => $single_image)
                          @include('admin.forminputs.faqSingle',[
                            'serviceIndex' => $loop->index,
                            'faq_name'     => $img_key,
                            'faq_value'    => $single_image
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
