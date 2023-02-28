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
               <select  name="{{$input_name}}" id="{{$input_name}}" class="NewSelector">
                  <option value="">Please Select</option>
                  @foreach ($cat as $key => $cats)
                    <option value="{{$cats->id}}" data-parent-cat-id="{{$cats->main_cat}}" {{(isset($value) && $value ==$cats->id ) ? "selected" : ""}}>{{$cats->cat_name}}</option>
                  @endforeach
               </select>
               <div class="Polaris-TextField__Backdrop"></div>
            </div>
         </div>
      </div>
   </div>
</div>
