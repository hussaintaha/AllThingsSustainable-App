<div class="Polaris-FormLayout__Item">
   <div class="">
      <div class="Polaris-Labelled__LabelWrapper">
         <div class="Polaris-Label">
             <label  for="textarea" class="Polaris-Label__Text">
               {{$label_name}}
            </label>
         </div>
      </div>
      <div  id="{{$editor_id}}"></div>
      <textarea  style="display:none;" id="{{$field_name}}" name="{{$field_name}}" value="{{ htmlspecialchars($field_value) }}"> </textarea>
   </div>
</div>
