<div role="group" class="Polaris-FormLayout--grouped">
   <div class="Polaris-FormLayout__Items">
      <div class="Polaris-FormLayout__Item">
         <div class="">
            <div class="Polaris-Labelled__LabelWrapper">
               <div class="Polaris-Label">
                  <label for="PolarisCheckbox2" class="Polaris-Label__Text">
                      {{$setting_name}}
                  </label>
               </div>
            </div>
            <div class="Polaris-Connected">
               <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                 @foreach($settings as $sk=>$set)
                  <label class="Polaris-Choice" for="{{$input_name}}{{$sk}}">
                        <span class="Polaris-Choice__Control">
                            <span class="Polaris-Checkbox">
                              <input  {{isset($values[$input_name]) && in_array($set, $values[$input_name]) ? "checked" : ""}}  id="{{$input_name}}{{$sk}}"   type="checkbox"   name="{{$input_name}}[]"  value="{{$set}}"   class="Polaris-Checkbox__Input"  aria-invalid="false" role="checkbox"    aria-checked="false" >
                              <span class="Polaris-Checkbox__Backdrop"></span>
                                <span class="Polaris-Checkbox__Icon">
                                    <span class="Polaris-Icon">
                                      <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                                      <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                      </svg>
                                    </span>
                                </span>
                              </span>
                        </span>
                        <span class="Polaris-Choice__Label">{{$set}}</span>
                  </label>
                @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
