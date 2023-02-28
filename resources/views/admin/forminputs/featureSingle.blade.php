<div class="single-feature">
    <div role="group" class="Polaris-FormLayout--grouped">
    <div class="Polaris-FormLayout__Items">
    <div class="Polaris-FormLayout__Item">
    <div class="">
    <div class="Polaris-Labelled__LabelWrapper">
    <div class="Polaris-Label service-label">
    <label id="PolarisTextFieldfeature{{ $serviceIndex }}Label" for="feature_name{{ $serviceIndex }}" class="Polaris-Label__Text">Feature Title
    <button type="button" class="Polaris-Button add-feture-item">
    <svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
    <path d="M2 0H1a1 1 0 0 0-1 1v1a1 1 0 0 0 2 0 1 1 0 0 0 0-2zm4 2h2a1 1 0 0 0 0-2H6a1 1 0 0 0 0 2zm8-2h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zM8 18H6a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm6 0h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 0-2zm5-18h-1a1 1 0 0 0 0 2 1 1 0 0 0 2 0V1a1 1 0 0 0-1-1zm0 17a1 1 0 0 0-1 1 1 1 0 0 0 0 2h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 18a1 1 0 0 0-2 0v1a1 1 0 0 0 1 1h1a1 1 0 0 0 0-2zm-1-3a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm0-6a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zm18 2a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zm0-6a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0V6a1 1 0 0 0-1-1zm-5 4h-3V6a1 1 0 0 0-2 0v3H6a1 1 0 0 0 0 2h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2z" fill="#637381">
    </path>
    </svg>
    </button>
    <button type="button" class="Polaris-Button delete-feture-item">
    <svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>
    </svg>
    </button>
    </label>
    </div>
    </div>
    <div class="Polaris-Connected" style="margin-right: 3%;">
    <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
    <div class="Polaris-TextField">
    <input name="features[]" id="feature{{ $serviceIndex }}" placeholder="Feature Title" class="Polaris-TextField__Input" type="text"  aria-labelledby="PolarisTextFieldservice{{ $serviceIndex }}Label" aria-invalid="false" aria-multiline="false" value="{{ $feature_value }}" >
    <div class="Polaris-TextField__Backdrop"></div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
