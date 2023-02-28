<div class="Polaris-FormLayout__Items" style="margin-top:2%">
   <div class="Polaris-FormLayout__Item">
      <div class="">
         <div class="Polaris-Labelled__LabelWrapper">
            <div class="Polaris-Label">
               <label  for="{{$field_id}}" class="Polaris-Label__Text">
                 {{$field_title}} <span class="info-img">{{$field_desc}}</span>
               </label>
            </div>
         </div>
         <div class="Polaris-Connected">
            <input class="input-files" id="{{$field_id}}" data-file-name="{{$field_name}}"  type="file"  >
         </div>
      </div>
   </div>
   @if(isset($saved_image) && !empty($saved_image))
     <img class="upload-preview" src="{{$saved_image}}" style="display:block" >
     <input type="hidden" name="{{$field_name}}" value="{{$saved_image}}" class="img{{$field_name}}">
   @else
     <img class="upload-preview" >
     <input type="hidden" name="{{$field_name}}" class="img{{$field_name}}">
   @endif
</div>
