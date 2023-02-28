<div class="cause-item">
   <div role="group" class="Polaris-FormLayout--grouped">
      <div class="Polaris-FormLayout__Items">
         <div class="Polaris-FormLayout__Item">
            <div class="">
               <div class="Polaris-Labelled__LabelWrapper">
                  <div class="Polaris-Label" style="width:100%;">
                     <label id="cause-heading1Label" for="cause-heading1" class="Polaris-Label__Text">
                        cause Heading
                        <button type="button" class="Polaris-Button DeleteBtn gallary-btns" style="display: none;">
                           <svg style="height: 20px;width: 20px;" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"></path>
                           </svg>
                        </button>
                        <button type="button" class="Polaris-Button AddBtn gallary-btns" style="display: flex;">
                           <svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381"></path>
                           </svg>
                        </button>
                     </label>
                  </div>
               </div>
               <div class="Polaris-Connected">
                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                     <div class="Polaris-TextField">
                        <input value="{{$cause['heading']}}" name="cause_heading[]" id="cause-heading{{$ckk+1}}" placeholder="cause Heading{{$ckk+1}}" class="Polaris-TextField__Input" type="text">
                        <div class="Polaris-TextField__Backdrop"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div role="group" class="Polaris-FormLayout--grouped">
      <div class="Polaris-FormLayout__Items">
         <div class="Polaris-FormLayout__Item">
            <div class="">
               <div class="Polaris-Labelled__LabelWrapper">
                  <div class="Polaris-Label" style="width:100%;">
                    <label id="cause-para{{$ckk}}Label" for="cause-para{{$ckk+1}}" class="Polaris-Label__Text">cause Description</label>
                  </div>
               </div>
               <div class="Polaris-Connected">
                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                     <div class="Polaris-TextField">
                        <textarea name="cause_para[]" id="cause-para{{$ckk}}" placeholder="cause para{{$ckk+1}}" class="Polaris-TextField__Input" aria-invalid="false" aria-multiline="true">{{$cause['para']}}</textarea>
                        <div class="Polaris-TextField__Backdrop"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div role="group" class="Polaris-FormLayout--grouped">
      <div class="Polaris-FormLayout__Items">
         <div class="Polaris-FormLayout__Item" style="margin-bottom:2%">
            <div class="">
               <div class="Polaris-Labelled__LabelWrapper">
                  <div class="Polaris-Label" style="width:100%">
                    <label for="cause_file{{$ckk}}" class="Polaris-Label__Text">
                      cause file
                      <span class="info-img">Image files accepted of 500X500px</span>
                    </label>
                  </div>
               </div>
               <div class="Polaris-Connected">
                 <input class="main-cause" data-file-name="thumb_cause_file" data-field-name="cause{{$ckk}}" accept="image/x-png,image/gif,image/jpeg" id="cause_file{{$ckk}}" type="file">
               </div>
            </div>
            <img class="upload-preview display-block" src="{{$cause['image']}}" style="float: right;margin-top: -28px;">
         </div>
         <input value="{{$cause['image']}}" type="hidden" name="causeimages[]" class="imgcause_file{{$ckk}}">
      </div>
   </div>
</div>
