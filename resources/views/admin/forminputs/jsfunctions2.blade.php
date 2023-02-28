<script>

function CreateFaqs(data={}) {
    $serviceIndex = $('.single-faq').length;
    $service = "";
    $service += '<div class="single-faq">';
    $service += '<div role="group" class="Polaris-FormLayout--grouped">';
    $service += '<div class="Polaris-FormLayout__Items">';
    $service += '<div class="Polaris-FormLayout__Item">';
    $service += '<div class="">';
    $service += '<div class="Polaris-Labelled__LabelWrapper">';
    $service += '<div class="Polaris-Label service-label">';
    $service += '<label id="PolarisTextFieldfaq' + $serviceIndex + 'Label" for="faq_name' + $serviceIndex + '" class="Polaris-Label__Text">Policy Name';
    $service += '<button type="button" class="Polaris-Button add-faq-item">';
    $service += '<svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $service += '<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">';
    $service += '</path>';
    $service += '</svg>';
    $service += '</button>';
    $service += '<button type="button" class="Polaris-Button delete-faq-item">';
    $service += '<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
    $service += '<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
    $service += '</svg>';
    $service += '</button>';
    $service += '</label>';
    $service += '</div>';
    $service += '</div>';
    $service += '<div class="Polaris-Connected" style="margin-right: 3%;">';
    $service += '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $service += '<div class="Polaris-TextField">';
    $service += '<input name="policy[]" value="'+(data.policy ? data.policy : "")+'" id="policy_name' + $serviceIndex + '" placeholder="Policy" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextFieldservice' + $serviceIndex + 'Label" aria-invalid="false" aria-multiline="false" >';
    $service += '<div class="Polaris-TextField__Backdrop"></div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '<div role="group" class="Polaris-FormLayout--grouped" style="margin-bottom: 3%;">';
    $service += '<div class="Polaris-FormLayout__Items">';
    $service += '<div class="Polaris-FormLayout__Item">';
    $service += '<div class="">';
    $service += '<div class="Polaris-Labelled__LabelWrapper">';
    $service += '<div class="Polaris-Label">';
    $service += '<label id="PolarisTextField' + $serviceIndex + 'Label" for="PolarisTextField' + $serviceIndex + '" class="Polaris-Label__Text">Policy\'s Description</label>';
    $service += '</div>';
    $service += '</div>';
    $service += '<div class="Polaris-Connected">';
    $service += '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $service += '<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">';
    $service += '<textarea name="policy_answer[]" id="PolarisTextField' + $serviceIndex + '" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField' + $serviceIndex + 'Label" aria-invalid="false" aria-multiline="true" style="height: 108px;">'+(data.policy_answer ? data.policy_answer : "")+'</textarea>';
    $service += '<div class="Polaris-TextField__Backdrop"></div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    return $service;
}


function ReturnGalleryItem(data={}) {

    $index = $('.gallery-item').length;
    $deletebtn = '<button  type="button" class="Polaris-Button DeleteBtn gallary-btns" >';
    $deletebtn += '<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
    $deletebtn += '<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
    $deletebtn += '</svg>';
    $deletebtn += '</button>';
    $addBtn = '<button type="button" class="Polaris-Button AddBtn gallary-btns" >';
    $addBtn += '<svg style="height: 20px;width: 20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $addBtn += '<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381"/>';
    $addBtn += '</svg>';
    $addBtn += '</button>';
    $item = "";


    $item += '<div class="gallery-item">';

    $item += '<div role="group" class="Polaris-FormLayout--grouped">';
    $item += '<div class="Polaris-FormLayout__Items">';
    $item += '<div class="Polaris-FormLayout__Item">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapperthumbGallaryPath">';
    $item += '<div class="Polaris-Label" style="width:100%;">';
    $item += '<label id="banner-heading'+($index+1)+'Label" for="banner-heading'+($index+1)+'" class="Polaris-Label__Text">';
    $item += 'Banner Heading'+ $deletebtn + $addBtn;
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $item += '<div class="Polaris-TextField">';
    $item += '<input name="banner_heading[]" value="'+(data.heading ? data.heading : '')+'"  id="banner-heading'+($index+1)+'"  placeholder="Banner Heading'+($index+1)+'" class="Polaris-TextField__Input" type="text"   >';
    $item += '<div class="Polaris-TextField__Backdrop"></div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';



    $item += '<div role="group" class="Polaris-FormLayout--grouped">';
    $item += '<div class="Polaris-FormLayout__Items">';
    $item += '<div class="Polaris-FormLayout__Item">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapper">';
    $item += '<div class="Polaris-Label" style="width:100%;">';
    $item += '<label id="banner-para'+$index+'Label" for="banner-para'+($index+1)+'" class="Polaris-Label__Text">';
    $item += 'Banner Description';
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $item += '<div class="Polaris-TextField">';

    $item += '<textarea name="banner_para[]"  id="banner-para'+$index+'"  placeholder="Banner para'+($index+1)+'" class="Polaris-TextField__Input"  aria-invalid="false" aria-multiline="true" >'+(data.para ? data.para : '')+'</textarea>';

    $item += '<div class="Polaris-TextField__Backdrop"></div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';

    $item += '<div role="group" class="Polaris-FormLayout--grouped">';
    $item += '<div class="Polaris-FormLayout__Items">';
    $item += '<div class="Polaris-FormLayout__Item" style="margin-bottom:2%">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapper">';
    $item += '<div class="Polaris-Label" style="width:100%">';
    $item += '<label  for="gallery_file' + $index + '" class="Polaris-Label__Text">';
    $item += 'Gallery file <span class="info-img">Image files accepted of 1443X450 px</span>';
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<input  class="main-gallery gal" data-file-name="thumb_gallery_file" data-field-name="gallery' + $index + '" accept="image/x-png,image/gif,image/jpeg" id="gallery_file' + $index + '"  type="file"  >';
    $item += '</div>';
    $item += '</div>';
    $item += '<img class="upload-preview '+(data.slider_image ? 'display-block' : '')+'" style="float: right;margin-top: -28px;" src="'+(data.slider_image ? data.slider_image : '')+'">';
    $item += '</div>';
    $item += '<input type="hidden" name="banner_images[]" value="'+(data.slider_image ? data.slider_image : '')+'" class="imggallery_file' + $index + '" >';
    $item += '</div>';
    $item += '</div>';




    $item += '</div>';
    return $item;
}
function ReturnSingleCause(data={}) {
  // console.log(data);
    $index = $('.cause-item').length;
    $deletebtn = '<button  type="button" class="Polaris-Button DeleteBtn gallary-btns" >';
    $deletebtn += '<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
    $deletebtn += '<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
    $deletebtn += '</svg>';
    $deletebtn += '</button>';
    $addBtn = '<button type="button" class="Polaris-Button AddBtn gallary-btns" >';
    $addBtn += '<svg style="height: 20px;width: 20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $addBtn += '<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381"/>';
    $addBtn += '</svg>';
    $addBtn += '</button>';


    $item = "";


    $item += '<div class="cause-item">';

    $item += '<div role="group" class="Polaris-FormLayout--grouped">';
    $item += '<div class="Polaris-FormLayout__Items">';
    $item += '<div class="Polaris-FormLayout__Item">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapper">';
    $item += '<div class="Polaris-Label" style="width:100%;">';
    $item += '<label id="cause-heading'+($index+1)+'Label" for="cause-heading'+($index+1)+'" class="Polaris-Label__Text">';
    $item += 'cause Heading'+ $deletebtn + $addBtn;
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $item += '<div class="Polaris-TextField">';
    $item += '<input value="'+(data.heading ? data.heading : '')+'" name="cause_heading[]"  id="cause-heading'+($index+1)+'"  placeholder="cause Heading'+($index+1)+'" class="Polaris-TextField__Input" type="text"   >';
    $item += '<div class="Polaris-TextField__Backdrop"></div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';



    $item += '<div role="group" class="Polaris-FormLayout--grouped">';
    $item += '<div class="Polaris-FormLayout__Items">';
    $item += '<div class="Polaris-FormLayout__Item">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapper">';
    $item += '<div class="Polaris-Label" style="width:100%;">';
    $item += '<label id="cause-para'+$index+'Label" for="cause-para'+($index+1)+'" class="Polaris-Label__Text">';
    $item += 'cause Description';
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $item += '<div class="Polaris-TextField">';

    $item += '<textarea name="cause_para[]"  id="cause-para'+$index+'"  placeholder="cause para'+($index+1)+'" class="Polaris-TextField__Input"   aria-invalid="false" aria-multiline="true" >'+(data.para ? data.para : '')+'</textarea>';

    $item += '<div class="Polaris-TextField__Backdrop"></div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';

    $item += '<div role="group" class="Polaris-FormLayout--grouped">';
    $item += '<div class="Polaris-FormLayout__Items">';
    $item += '<div class="Polaris-FormLayout__Item" style="margin-bottom:2%">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapper">';
    $item += '<div class="Polaris-Label" style="width:100%">';
    $item += '<label  for="cause_file' + $index + '" class="Polaris-Label__Text">';
    $item += 'cause file <span class="info-img">Image files accepted of 500X500px</span>';
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<input  class="main-cause" data-file-name="thumb_cause_file" data-field-name="cause' + $index + '" accept="image/x-png,image/gif,image/jpeg" id="cause_file' + $index + '"  type="file"  >';
    $item += '</div>';
    $item += '</div>';
    $item += '<img class="upload-preview '+(data.image ? 'display-block' : '')+'" src="'+(data.image ? data.image : '')+'" style="float: right;margin-top: -28px;" src="">';
    $item += '</div>';

    $item += '<input value="'+(data.image ? data.image : '')+'" type="hidden" name="causeimages[]" class="imgcause_file' + $index + '" >';
    $item += '</div>';
    $item += '</div>';


    $item += '</div>';
    return $item;
}


function ReturnSubItem($serviceIndex) {
    $service = "";
    $service += '<div class="Polaris-Connected single-sub-items" style="margin-top:3%">';
    $service += '<div style="display:flex" class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $service += '<div class="Polaris-TextField service-name-container">';
    $service += '<input required name="service' + $serviceIndex + '[]" id="service" placeholder="Service" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false" >';
    $service += '<div class="Polaris-TextField__Backdrop"></div>';
    $service += '</div>';
    $service += '<button type="button" class="Polaris-Button add-service">';
    $service += '<svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $service += '<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">';
    $service += '</path>';
    $service += '</svg>';
    $service += '</button>';
    $service += '<button type="button" class="Polaris-Button delete-service">';
    $service += '<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
    $service += '<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
    $service += '</svg>';
    $service += '</button>';
    $service += '</div>';
    $service += '</div>';
    return $service;
}

function ShowHideFaq() {
    $('.single-faq').each(function(ind, service) {
        if (ind == 0) {
            $(service).find('.delete-faq-item').hide();
            $(service).find('.add-faq-item').show();
        } else {
            $(service).find('.delete-faq-item').show();
            $(service).find('.add-faq-item').hide();
        }
    })
}

function ShowHidefeatures() {
    $('.single-feature').each(function(ind, service) {
        if (ind == 0) {
            $(service).find('.delete-feture-item').hide();
            $(service).find('.add-feture-item').show();
        } else {
            $(service).find('.delete-feture-item').show();
            $(service).find('.add-feture-item').hide();
        }
    })
}
function ShowHidethumb() {
    $('.thumb-gallery-item').each(function(ind, service) {
        if (ind == 0) {
            $(service).find('.DeleteBtn').hide();
            $(service).find('.AddBtn').show();
        }else{
            $(service).find('.DeleteBtn').show();
            $(service).find('.AddBtn').hide();
        }
    })
}

function ShowHideGalleryItems() {

    $('.gallery-item .DeleteBtn').show();
    $('.gallery-item .AddBtn').hide();
    $('.gallery-item:first .AddBtn').show();
    $('.gallery-item:first .DeleteBtn').hide();

}
function ShowHideCauseItems() {
    $('.cause-item .DeleteBtn').show();
    $('.cause-item .AddBtn').hide();
    $('.cause-item:first .AddBtn').show();
    $('.cause-item:first .DeleteBtn').hide();
}

function ShowVendorservices() {
    $('.single-service').each(function(ind, service) {
        if (ind == 0) {
            $(service).find('.delete-service-item').hide();
            $(service).find('.add-service-item').show();
        } else {
            $(service).find('.delete-service-item').show();
            $(service).find('.add-service-item').hide();
        }
        $(service).find('.single-sub-items').each(function(index, subservice) {
            if (index == 0) {
                $(subservice).find('.delete-service').hide();
                $(subservice).find('.add-service').show();
            } else {
                $(subservice).find('.delete-service').show();
                $(subservice).find('.add-service').hide();
            }
        })
    })
}
var filterObject = {
    thumb_gallery_file: {
      width:1443,
      height:450
    },
    story_banner: {
      width:1443,
      height:450
    },
    thumb_cause_file: {
      width:500,
      height:500
    },
};
function performFileUpload($elm){
  var file = $($elm)[0].files[0];
  var formData = new FormData();
  $fielaName = $($elm).data('file-name');
  formData.append($fielaName, file);
  $($elm).parents('.Polaris-Card__Section').find('.progress-bar').show();
  $elmId = $($elm).attr('id');
  $.ajax({
      xhr: function(){
          var xhr = new window.XMLHttpRequest();
          xhr.upload.addEventListener("progress", function(evt) {
              if (evt.lengthComputable) {
                  var percentComplete = evt.loaded / evt.total;
                  percentComplete = parseInt(percentComplete) * 100;
                  $css = percentComplete+"%"
                  $($elm).parents('.Polaris-Card__Section').find('.Polaris-ProgressBar__Indicator').css('width',$css);
                  $($elm).parents('.Polaris-Card__Section').find('.progressCount').html($css);
                  if(percentComplete == 100){
                    setTimeout(function() {
                        $($elm).parents('.Polaris-Card__Section').find('.progress-bar').fadeOut(1000)
                    }, 1000);
                  }
              }
          }, false);
          return xhr;
      },
      url: window.upload_path,
      data: formData,
      type: 'POST',
      dataType: 'json',
      processData: false,
      contentType: false,
      success: function(response) {
          if (response.result == 1) {
            $($elm).parents('.Polaris-FormLayout__Items').find('.upload-preview').show().attr('src',response.path);
            $(".img"+$elmId).val(response.path);
            // console.log($(".img"+$elmId));
            $($elm).val('')
          }
      }
  });
}
$(document).on('change', '.input-files,.main-gallery,.main-cause', function() {
  var file = $(this)[0].files[0];
  $elm = this;
  var fileUpload = $(this)[0];
  var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png)$");
  if (regex.test(fileUpload.value.toLowerCase())) {
      if (typeof (fileUpload.files) != "undefined") {
          var reader = new FileReader();
          reader.readAsDataURL(fileUpload.files[0]);
          reader.onload = function (e) {
              var image = new Image();
              image.src = e.target.result;
              image.onload = function (img) {
                  var height = img.srcElement.height;
                  var width = img.srcElement.width;
                  var FileType = $($elm).data('file-name');
                  if(filterObject[FileType]){
                    var _checkObject = filterObject[FileType];
                    if (height != _checkObject.height && width != _checkObject.width) {
                        $($elm).parents('.Polaris-FormLayout__Items').find('.info-img').html('Height and Width must not exceed '+_checkObject.width+'X'+_checkObject.height+' PX');
                        $($elm).val('');
                        return false;
                    }else{
                        performFileUpload($elm);
                    }
                  }else{
                      performFileUpload($elm);
                  }
              };
          }
      }else{
          $($elm).parents('.Polaris-FormLayout__Items').find('.info-img').html("This browser does not support HTML5.");
          return false;
      }
  }else{
      $($elm).parents('.Polaris-FormLayout__Items').find('.info-img').html("JPG and PNG Images Accepted Only");
      return false;
  }
  });

  window.handleize = function (str) {
      str = str.toLowerCase();
      var toReplace = ['"', "'", "\\", "(", ")", "[", "]"];
      for (var i = 0; i < toReplace.length; ++i) {
          str = str.replace(toReplace[i], "");
      }
      str = str.replace(/\W+/g, "-");
      if (str.charAt(str.length - 1) == "-") {
          str = str.replace(/-+\z/, "");
      }
      if (str.charAt(0) == "-") {
          str = str.replace(/\A-+/, "");
      }
      return str
  };

  function removeFile(file) {
    $.ajax({
      url: window.removepath,
      data: {file:file},
      type: 'GET',
      dataType:'json',
      contentType: false,
      success:function(response){
      }
    });
  }
  function toTitleCase(str) {
      return str.replace(/\w\S*/g, function(txt) {
          return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      });
  }

  $(".vendorform").on('submit',function(evt){
      evt.preventDefault();
      var submit = true;
      $(this).find('.Polaris-TextField__Input.required').each(function(ind,field){
        if($(field).val() == ''){
          submit = false;
          $(field).css({
            'border':'1px solid red',
          })
        }else{
          $(field).css({
            'border':'1px solid #c4cdd5',
          })
        }
      });
      if(submit){
          var formData = new FormData($(this)[0]);
          var vendor_name = $("[name='vendor_name']").val();
          var vendorHandle = window.handleize(vendor_name.replace("&", "amp")).replace('.','');
          var last =  vendorHandle.charAt(vendorHandle.length-1);
          if(last == '-'){
            var str2 = vendorHandle.slice(0, -1);
            vendorHandle = str2;
          }
          var url = $(this).attr('action');

          formData.append('vendorHandle', vendorHandle);
          $('.product-loading').fadeIn(100);
          $.ajax({
            url: url,
            data: formData,
            type: 'POST',
            dataType:'json',
            processData: false,
            contentType: false,
            success:function(response){
              if(response.code == 200){
                alert(response.msg);
              }else{
                alert(response.msg);
              }
              $('.product-loading').fadeIn(100);
               location.reload();
              // window.location.href = window.vedor_list;
            }
          });
    }else{
      $('html, body').animate({
          scrollTop: parseInt($(".vendorform").offset().top)
        }, 2000);
    }
  });

  $(document).on('click','#update-vendor-btn',function(){
    $(".vendorform").submit();
  })
  $(document).on('click','.add-faq-item',function(){
    $("#vendor-policies").append(CreateFaqs());
    ShowHideFaq();
  })
  $(document).on('click','.delete-faq-item',function(){
     $('.single-faq:last').remove();
      ShowHideFaq();
  })
  $(document).on('click','.gallery-item .AddBtn',function(){
    $("#gallary-details").append(ReturnGalleryItem());
    ShowHideGalleryItems();
  });

  $(document).on('click','.gallery-item .DeleteBtn',function(){
    $children = $(this).closest('.gallery-item').find('img');
    if ($children[0].src != '') {
      // removeFile($children[0].src);
    }
    $(this).parents('.gallery-item').remove();
    ShowHideGalleryItems();
 });


  $(document).on('click','.cause-item .AddBtn',function(){
    $("#cause-details").append(ReturnSingleCause());
    ShowHideCauseItems();
  });

  $(document).on('click','.cause-item .DeleteBtn',function(){
    $children = $(this).closest('.cause-item').find('img');
    if ($children[0].src != '') {
      // removeFile($children[0].src);
    }
    $(this).parents('.cause-item').remove();
    // $('.cause-item:last').remove()
    ShowHideCauseItems();
 });
</script>
