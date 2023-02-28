<script>

function CreateFaqs() {
    $serviceIndex = $('.single-faq').length;
    $service = "";
    $service += '<div class="single-faq">';
    $service += '<div role="group" class="Polaris-FormLayout--grouped">';
    $service += '<div class="Polaris-FormLayout__Items">';
    $service += '<div class="Polaris-FormLayout__Item">';
    $service += '<div class="">';
    $service += '<div class="Polaris-Labelled__LabelWrapper">';
    $service += '<div class="Polaris-Label service-label">';
    $service += '<label id="PolarisTextFieldfaq' + $serviceIndex + 'Label" for="faq_name' + $serviceIndex + '" class="Polaris-Label__Text">FAQ';
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
    $service += '<input name="faq_question[]" id="faq_question_name' + $serviceIndex + '" placeholder="FAQ" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextFieldservice' + $serviceIndex + 'Label" aria-invalid="false" aria-multiline="false" >';
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
    $service += '<label id="PolarisTextField' + $serviceIndex + 'Label" for="PolarisTextField' + $serviceIndex + '" class="Polaris-Label__Text">FAQ\'s Answer</label>';
    $service += '</div>';
    $service += '</div>';
    $service += '<div class="Polaris-Connected">';
    $service += '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $service += '<div class="Polaris-TextField Polaris-TextField--hasValue Polaris-TextField--multiline">';
    $service += '<textarea name="faq_answer[]" id="PolarisTextField' + $serviceIndex + '" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField' + $serviceIndex + 'Label" aria-invalid="false" aria-multiline="true" style="height: 108px;">Loenean ut eros et nisl sagittis vestibulum. Nullam vel sem. Nam commodo suscipit quam. Ut non enim eleifend felis pretium feugiat. Donec interdum, metus et hendrerit aliquet, dolor</textarea>';
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

function CreateSingleFeature() {
    $serviceIndex = $('.single-feature').length;
    $service = "";
    $service += '<div class="single-feature">';
    $service += '<div role="group" class="Polaris-FormLayout--grouped">';
    $service += '<div class="Polaris-FormLayout__Items">';
    $service += '<div class="Polaris-FormLayout__Item">';
    $service += '<div class="">';
    $service += '<div class="Polaris-Labelled__LabelWrapper">';
    $service += '<div class="Polaris-Label service-label">';
    $service += '<label id="PolarisTextFieldfeature' + $serviceIndex + 'Label" for="feature_name' + $serviceIndex + '" class="Polaris-Label__Text">Feature Title';
    $service += '<button type="button" class="Polaris-Button add-feture-item">';
    $service += '<svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $service += '<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">';
    $service += '</path>';
    $service += '</svg>';
    $service += '</button>';
    $service += '<button type="button" class="Polaris-Button delete-feture-item">';
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
    $service += '<input name="features[]" id="feature' + $serviceIndex + '" placeholder="Feature Title" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextFieldservice' + $serviceIndex + 'Label" aria-invalid="false" aria-multiline="false" >';
    $service += '<div class="Polaris-TextField__Backdrop"></div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    return $service;
}



function ReturnGalleryItem() {
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
    $item += '<div class="Polaris-FormLayout__Item" style="margin-bottom:2%">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapper">';
    $item += '<div class="Polaris-Label" style="width:100%">';
    $item += '<label  for="gallery_file' + $index + '" class="Polaris-Label__Text">';
    $item += 'Gallery file <span class="info-img">Image files accepted</span>' + $deletebtn + $addBtn;
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<input  class="main-gallery gal" data-file-name="thumb_gallery_file" data-field-name="gallery' + $index + '" accept="image/x-png,image/gif,image/jpeg" id="gallery_file' + $index + '"  type="file"  >';
    $item += '</div>';
    $item += '</div>';
    $item += '<img class="upload-preview" style="float: right;margin-top: -28px;" src="https://amkwebsolutions.com/shopify-app/wedding/public/uploads/thumb_gallery_file-1603706777.png">';
    $item += '</div>';
    $item += '<input type="hidden" name="thumbGallaryPath[]" class="imggallery' + $index + '" >';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    return $item;
}

function ReturnThumbGalleryItem() {
    $index = $('.thumb-gallery-item').length;
    $deletebtn = '<button  type="button" class="Polaris-Button DeleteBtn footer-gallery-btns" >';
    $deletebtn += '<svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">';
    $deletebtn += '<path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>';
    $deletebtn += '</svg>';
    $deletebtn += '</button>';
    $addBtn = '<button type="button" class="Polaris-Button AddBtn footer-gallery-btns" >';
    $addBtn += '<svg style="height: 20px;width: 20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $addBtn += '<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381"/>';
    $addBtn += '</svg>';
    $addBtn += '</button>';
    $item = "";
    $item += '<div class="thumb-gallery-item">';
    $item += '<div role="group" class="Polaris-FormLayout--grouped">';
    $item += '<div class="Polaris-FormLayout__Items">';
    $item += '<div class="Polaris-FormLayout__Item" style="margin-bottom:2%">';
    $item += '<div class="">';
    $item += '<div class="Polaris-Labelled__LabelWrapper">';
    $item += '<div class="Polaris-Label" style="width:100%">';
    $item += '<label  for="gallery_file' + $index + '" class="Polaris-Label__Text">';
    $item += 'Gallery file <span class="info-img">Image files accepted</span>' + $deletebtn + $addBtn;
    $item += '</label>';
    $item += '</div>';
    $item += '</div>';
    $item += '<div class="Polaris-Connected">';
    $item += '<input   class="main-gallery gal" data-file-name="thumb_gallery_file" data-field-name="footer-gallery' + $index + '"  accept="image/x-png,image/gif,image/jpeg" id="gallery_file_snd' + $index + '"  type="file"  >';
    $item += '</div>';
    $item += '</div>';
    $item += '<img class="upload-preview" style="float: right;margin-top: -28px;">';
    $item += '<input type="hidden" name="GallaryPath[]" class="imgfooter-gallery' + $index + '" id="GallaryPath' + $index + '">';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    $item += '</div>';
    return $item;
}

function CreateServiceItem() {
    $serviceIndex = $('.single-service').length;
    $service = "";
    $service += '<div class="single-service">';
    $service += '<div role="group" class="Polaris-FormLayout--grouped">';
    $service += '<div class="Polaris-FormLayout__Items">';
    $service += '<div class="Polaris-FormLayout__Item">';
    $service += '<div class="">';
    $service += '<div class="Polaris-Labelled__LabelWrapper">';
    $service += '<div class="Polaris-Label service-label">';
    $service += '<label id="PolarisTextFieldservice' + $serviceIndex + 'Label" for="service_name' + $serviceIndex + '" class="Polaris-Label__Text">Service name';
    $service += '<button type="button" class="Polaris-Button add-service-item">';
    $service += '<svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">';
    $service += '<path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">';
    $service += '</path>';
    $service += '</svg>';
    $service += '</button>';
    $service += '<button type="button" class="Polaris-Button delete-service-item">';
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
    $service += '<input name="service_name[]" id="service_name' + $serviceIndex + '" placeholder="Service Name" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextFieldservice' + $serviceIndex + 'Label" aria-invalid="false" aria-multiline="false" >';
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
    $service += '<label id="PolarisTextField1Label" for="service" class="Polaris-Label__Text">Service</label>';
    $service += '</div>';
    $service += '</div>';
    $service += '<div class="sub-items">';
    $service += '<div class="Polaris-Connected single-sub-items">';
    $service += '<div  style="display:flex" class="Polaris-Connected__Item Polaris-Connected__Item--primary">';
    $service += '<div class="Polaris-TextField service-name-container">';
    $service += '<input name="service' + $serviceIndex + '[]" id="service" required placeholder="Service" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false" >';
    $service += '<div class="Polaris-TextField__Backdrop"></div>';
    $service += '</div>';
    $service += '<button type="button" data-index="' + $serviceIndex + '" class="Polaris-Button add-service">';
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
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    $service += '</div>';
    return $service;
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
</script>
