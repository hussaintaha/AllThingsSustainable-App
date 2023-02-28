<style>
   group + group {
   margin-top: 20px;
   }
   .inline-radio div {
     position: relative;
     flex: 1;
     width: 50%;
   }
   .inline-radio input {
     width: 100%;
     height: 40px;
     opacity: 0;
   }
   .inline-radio {
     display: flex;
     border-radius: 3px;
     overflow: hidden;
     border: 1px solid #b6b6b6;
     width: 50%;
   }
   .inline-radio label {
     position: absolute;
     top: 0;
     left: 0;
     color: #b6b6b6;
     width: 100%;
     height: 100%;
     background: #fff;
     display: flex;
     align-items: center;
     justify-content: center;
     pointer-events: none;
     border-right: 1px solid #b6b6b6;
   }
   .inline-radio div:last-child label {
     border-right: 0;
   }
   .inline-radio input:checked + label {
     background: #5866c2;
     font-weight: 500;
     color: #fff;
   }
</style>
<div class="Polaris-FormLayout__Item">
   <div class="">
      <div class="Polaris-Labelled__LabelWrapper">
         <div class="Polaris-Label">
            <label id="vendorDescription" for="vendor-description-text" class="Polaris-Label__Text">
            Display Story Media
            </label>
         </div>
      </div>
      <div class="Polaris-Connected">
         <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
            <div class="Polaris-Stack__Item">
               <group class="inline-radio">
                  <div><input type="radio" {{isset($value) && $value == 'Banner' ? "checked" : "" }} value="Banner" name="story_banner_type"><label>Banner</label></div>
                  <div><input type="radio" {{isset($value) && $value == 'Video' ? "checked" : "" }} value="Video" name="story_banner_type"><label>Video</label></div>
               </group>
            </div>
         </div>
      </div>
   </div>
</div>
