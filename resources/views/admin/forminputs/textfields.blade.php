<div class="Polaris-FormLayout__Item">
   <div class="">
      <div class="Polaris-Labelled__LabelWrapper">
         <div class="Polaris-Label">
            <label id="{{$input_name}}Label" for="{{$input_name}}" class="Polaris-Label__Text">
              {{$label_name}}
            </label>
         </div>
      </div>
      <div class="Polaris-Connected">
         <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
            <div class="Polaris-TextField">
               <input name="{{$input_name}}" value="{{isset($value) ? $value : ""}}" id="PolarisTextField1"  placeholder="{{$label_name}}" class="Polaris-TextField__Input {{isset($extraclass) ? $extraclass : ''}}" type="text" aria-labelledby="{{$input_name}}Label" aria-invalid="false" aria-multiline="false" >
               <div class="Polaris-TextField__Backdrop"></div>
            </div>
         </div>
      </div>
   </div>
</div>
