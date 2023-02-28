<div class="Polaris-Layout__AnnotatedSection">
   <div class="Polaris-Layout__AnnotationWrapper">
      <div class="Polaris-Layout__Annotation">
         <div class="Polaris-TextContainer">
            <h2 class="Polaris-Heading">{{$form_title}}</h2>
            <div class="Polaris-Layout__AnnotationDescription">
               <p>{{$form_details}}</p>
            </div>
         </div>
      </div>
      <div class="Polaris-Layout__AnnotationContent">
         <div class="cards-container" style="position: relative; z-index: 1;">
            <div class="Polaris-Card">
               <div class="Polaris-Card__Section">
                  <div class="Polaris-Card__SectionHeader" style="margin-bottom:2%">
                    @include('admin.forminputs.progress')
                  </div>
                  <div class="Polaris-FormLayout" id="{{$field_id}}">
                    @if(isset($saved_images))
                      @foreach($saved_images as $img_key=>$single_image)
                          @include('admin.forminputs.single_gallery',[
                            'parent_id'=>$single_id,
                            'path'=>$single_image,
                            'file_id'=>$file_id.$img_key,
                            'data_field_name'=>$field_name.$img_key,
                            'data_file_name'=> $file_name,
                            'data_txb_name'=> $txb_name,
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
