<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="/favicon.ico">
	<title>All Thhings Sustainable</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
	<script src="https://amkwebsolutions.com/shopify-app/foodorder_manager/jquery-1.12.4.js"></script>
	<link href="https://amkwebsolutions.com/shopify-app/wedding/resources/css/dashboard.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
	<script>
	window.upload_path = '{{url("uploadPreview")}}?shop={{$shop}}';
	window.vedor_list = "{{url('/vendor_list')}}?shop={{$shop}}";
	window.savepath = "{{url('/SaveVendorDetails2')}}?shop={{$shop}}";
	window.removepath = '{{url("removeImage")}}';
	</script>
</head>
<body>
	<style>
	.product-loading {
		display: none;
		width: 100vw;
		height: 100vh;
		position: fixed;
		top: 0px;
		z-index: 1111111;
		left: 0px;
		background-color: rgba(255,255,255,0.6);
		pointer-events: none;
		background-image: url("//cdn.shopify.com/s/files/1/2412/8291/t/26/assets/loader.gif?v=1022643024506058392");
		background-position: center center;
		background-repeat: no-repeat;
		font-size: 2em;
		text-align: center;
		line-height: calc(100vh + 150px);
		font-family: 'proxima-nova-extra-condensed';
		text-transform: uppercase;
		color: #15234c;
		font-weight: bold;
	}
	.NewSelector {
			line-height: 2.4rem;
			text-transform: none;
			letter-spacing: normal;
			position: relative;
			z-index: 20;
			display: block;
			flex: 1 1;
			width: 100%;
			min-width: 0;
			min-height: 3.6rem;
			margin: 0;
			padding: .5rem 1.2rem;
			background: none;
			border: .1rem solid #c4cdd5;
			font-size: inherit;
			font-weight: inherit;
			-moz-appearance: none;
			border-radius: 3px;
	}
	.form_cover {
	display: flex;
	}
	.form_1 {
		width: 50%;
		box-shadow: var(--p-card-shadow,0 0 0 1px rgba(63,63,68,.05),0 1px 3px 0 rgba(63,63,68,.15));
		outline: .1rem solid transparent;
		padding: 0 10px;
		border-radius: var(--p-border-radius-wide,3px);
		margin-right: 5px;
		padding-bottom: 10px;
	}
	.form_2 {
			width: 50%;
			padding-left: 10px;
			box-shadow: var(--p-card-shadow,0 0 0 1px rgba(63,63,68,.05),0 1px 3px 0 rgba(63,63,68,.15));
			outline: .1rem solid transparent;
			padding: 0 10px;
			border-radius: var(--p-border-radius-wide,3px);
			margin-left: 5px;
			padding-bottom: 10px;
	}

	.form_upload {
		min-height: 325px;
	}
	.text_c {
		text-align: center;
		border-bottom: 1px solid #f7f7f7;
		padding-bottom: 11px;
	}


	@media screen and (min-width: 1500px) {
		.form_upload {
			min-height: 450px;
		}
	}
	</style>
	<div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
  <div class="product-loading">Please wait saving data...</div>
   <div class="Polaris-Card">
      <div>
         <div class="Polaris-Tabs__Wrapper">
            <ul role="tablist" class="Polaris-Tabs">

							 <li  class="Polaris-Tabs__TabContainer">
								 <a href="{{url('/vendor_list')}}?shop={{$shop}}">
									 <button type="button" class="Polaris-Tabs__Tab {{($page =='vendor_list') ? 'Polaris-Tabs__Tab--selected' : ''}}" >
										 <span class="Polaris-Tabs__Title">Vendors List</span>
									 </button>
								</a>
							 </li>
               <li  class="Polaris-Tabs__TabContainer">
                 <a href="{{url('/vendors')}}?shop={{$shop}}">
                   <button type="button" class="Polaris-Tabs__Tab {{($page =='vendor') ? 'Polaris-Tabs__Tab--selected' : '' }}" >
                     <span class="Polaris-Tabs__Title">Add Vendors</span>
                   </button>
                </a>
               </li>
							 <li  class="Polaris-Tabs__TabContainer">
								 <a href="{{url('/influencer_list')}}?shop={{$shop}}">
									 <button type="button" class="Polaris-Tabs__Tab {{($page =='influencers') ? 'Polaris-Tabs__Tab--selected' : ''}}" >
										 <span class="Polaris-Tabs__Title">Influencers List</span>
									 </button>
								 </a>
							 </li>
               <li  class="Polaris-Tabs__TabContainer">
                 <a href="{{url('/add_influencer')}}?shop={{$shop}}">
                   <button type="button" class="Polaris-Tabs__Tab {{($page =='influencer') ? 'Polaris-Tabs__Tab--selected' : '' }}" >
                     <span class="Polaris-Tabs__Title">Add Influencer</span>
                   </button>
                </a>
               </li>


							 @if($page == 'edit_vendor')
								 <li  class="Polaris-Tabs__TabContainer">
									 <button  type="button" tabindex="-1" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected">
										 <span class="Polaris-Tabs__Title">Edit Vendor</span>
									 </button>
								 </li>
							 @endif
							 @if($page == 'edit_influencer')
								 <li  class="Polaris-Tabs__TabContainer">
									 <button  type="button" tabindex="-1" class="Polaris-Tabs__Tab Polaris-Tabs__Tab--selected">
										 <span class="Polaris-Tabs__Title">Edit Influencer</span>
									 </button>
								 </li>
							 @endif

            </ul>
         </div>
				 <style>
				 .sticky {
				 	position: -webkit-sticky;
				 	position: sticky;
				 	top: 0;
				 	font-size: 20px;
				 	z-index: 9999;
				 	height: 74px;
				 	background: #f6f6f7;
				 	margin-left: 0;
				 }
				.sticky .Polaris-PageActions {
					border-top: unset;
				}
				 </style>
				  @if($page == 'edit_vendor' || $page == 'vendor')
					 <div class="Polaris-Layout__Section sticky">
							<div class="Polaris-PageActions">
								 <div class="Polaris-Stack Polaris-Stack--spacingTight Polaris-Stack--distributionEqualSpacing">
									 <div style="margin-left:2%;" class="Polaris-Stack__Item">
											<a href="{{url('/vendor_list')}}?shop={{$shop}}" class="Polaris-Button">
													<span class="Polaris-Button__Content">
														<span class="Polaris-Button__Text">Back</span>
													</span>
											</a>
									 </div>
										<div class="Polaris-Stack__Item">
											 <button id="update-vendor-btn" type="button"  class="Polaris-Button Polaris-Button--primary">
													 <span class="Polaris-Button__Content">
														 <span class="Polaris-Button__Text">{{$page == 'vendor' ? "Save" : "Update"}}</span>
													 </span>
											 </button>
										</div>

								 </div>
							</div>
					 </div>
				 @endif


		@yield('content')
	</div>
</div>
</body>

</html>
