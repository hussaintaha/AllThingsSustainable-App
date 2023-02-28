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
         <div class="cards-container" style="position: relative; z-index: 1;">
            <div class="Polaris-Card">
               <div class="Polaris-Card__Section">
                  <div class="Polaris-Card__SectionHeader">
                  </div>
                  <div class="Polaris-FormLayout">
                     <div id="vendor-services">

                        <div class="single-service">
                           <div role="group" class="Polaris-FormLayout--grouped">

                             @include('admin.forminputs.editor',[
                             'label_name' => 'About',
                             'editor_id'=>'about'
                             ])

                             @include('admin.forminputs.editor',[
                               'label_name' => 'Details',
                               'editor_id'=>'details'
                             ])
                             @include('admin.forminputs.editor',[
                               'label_name' => 'Deals',
                               'editor_id'=>'deals'
                             ])
                             @include('admin.forminputs.editor',[
                               'label_name' => 'Pricing',
                               'editor_id'=>'pricing'
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
</div>
