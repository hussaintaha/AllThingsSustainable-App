@extends('admin.sadmin')
@section('content')
<div class="Polaris-Tabs__Panel" id="all-customers-content" role="tabpanel" aria-labelledby="all-customers" tabindex="-1">
   <div class="Polaris-Card__Section">
      <div class="form_cover">
         <div class="form_1">
            <div class="form_upload" style="margin-right: 5%;margin-bottom:16%">
               <form class="catform">
                 <input type="hidden"  value="TRUE" name="main">
                  <h2 style="margin-top: 5%;text-align: center;"  class="Polaris-Heading">Add New Category </h2>
                  <div class="Polaris-Labelled__LabelWrapper" style="margin-top: 6%;">
                     <div class="Polaris-Label">
                        <label id="PolarisTextField12Label" for="PolarisTextField12" class="Polaris-Label__Text">
                          Category Name
                        </label>
                     </div>
                  </div>
                  <div class="Polaris-Connected">
                     <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                        <div class="Polaris-TextField Polaris-TextField--hasValue">
                           <input id="PolarisTextField12" name="cat_name" class="Polaris-TextField__Input cat_name" placeholder="Enter Category Name" required>
                           <div class="Polaris-TextField__Backdrop"></div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Labelled__LabelWrapper" style="margin-top: 6%;">
                     <div class="Polaris-Label">
                        <label id="flaglabel" for="PolarisTextField13" class="Polaris-Label__Text">
                          Category Image
                        </label>
                     </div>
                  </div>
                  <div class="file-wrapper">
                     <input class="flaginput" accept="image/*" name="cat_image" type="file">
                  </div>


                  <!-- Add Custom Filter -->
                  <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;margin-top: 24px;">
                    <button type="button" class="Polaris-Button add-filter-item">
                      <span class="Polaris-Button__Content">
                        <span class="Polaris-Button__Text">Add Extra Filter</span>
                      </span>
                    </button>
                  </div>

                  <div id="filters-div" style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;margin-top: 16px;">
                  </div>
                  <!-- Add Custom Filter END -->


                  <div style="margin-top:7%" class="submit-button">
                     <button type="submit" class="Polaris-Button Polaris-Button--primary">
                         <span class="Polaris-Button__Content">
                         <span class="Polaris-Button__Text">Save</span>
                         </span>
                     </button>
                  </div>
               </form>
            </div>
            <h4 class="Polaris-Heading text_c">Categories List</h4>
            <div class="table_">
               <table class="Polaris-DataTable__Table" id="leaguesList">
                  <thead>
                     <tr role="row">
                        <th  class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header sorting_asc" colspan="1" rowspan="1" style="width: 101px;" tabindex="0">
                           Category Name
                        </th>
                        <th  class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header sorting_asc" colspan="1" rowspan="1" style="width: 101px;" tabindex="0">
                           Sub Category Count
                        </th>
                        <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric sorting" colspan="1" rowspan="1" style="width: 81px;" tabindex="0">
                           Action
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                    @php
                      $catArray=[];
                    @endphp
                   @foreach ($cat as $key => $cats)
                     @if($cats->cat_type == 0)
                       @php
                         if(is_null($cats->extra_filters_headings)){
                           $empty = new stdClass();
                           $catArray[$cats->id]['filters'] = $empty;
                         }else{
                           $catArray[$cats->id]['filters'] = json_decode($cats->extra_filters_headings);
                         }
                          $catArray[$cats->id]['cat_data'] = json_decode($cats);
                       @endphp

                       <tr class="Polaris-DataTable__TableRow">
                           <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                             {{$cats->cat_name}}
                           </td>
                           <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                             {{ReturnSubCategoryCount($cats->id)}}
                           </td>
                           <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                               <button  data-id="{{$cats->id}}"  type="button" class="Polaris-Button {{((ReturnSubCategoryCount($cats->id) > 0) ? 'Polaris-Button--disabled' : 'deleteFlag')}} " >
                                 <svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                   <path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>
                                 </svg>
                               </button>
                            <button
                              data-id="{{$cats->id}}"
                              type="button" class="Polaris-Button edit-main-cat">
                              <svg style="height: 20px;width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill="#637381" d="M18.878 1.085c-1.445-1.446-3.967-1.446-5.414 0l-11.17 11.17a.976.976 0 0 0-.228.368c-.003.009-.012.015-.015.024l-2 6a.999.999 0 0 0 1.265 1.265l6-2c.01-.003.015-.012.024-.015a.976.976 0 0 0 .367-.227L18.878 6.499A3.805 3.805 0 0 0 20 3.792a3.803 3.803 0 0 0-1.122-2.707zm-1.414 4L17 5.549l-2.586-2.586.464-.464c.691-.691 1.895-.691 2.586 0 .346.346.536.805.536 1.293 0 .488-.19.947-.536 1.293zM3.437 14.814l1.712 1.712-2.568.856.856-2.568zM7   15.549l-2.586-2.586L13 4.377l2.586 2.586L7 15.549z"></path>
                              </svg>
                            </button>

                           </td>
                           </tr>
                      @endif
                   @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="form_2">
            <div class="form_upload" style="margin-right: 5%;margin-bottom: 6%;">
               <form class="catform">
                  <h2  style="margin-top: 5%;text-align: center;"  class="Polaris-Heading">Add New SubCategory </h2>
                  <div class="Polaris-Labelled__LabelWrapper" style="margin-top: 6%;">
                     <div class="Polaris-Label">
                        <label id="PolarisTextField12Label" for="PolarisTextField12" class="Polaris-Label__Text">
                          Sub Category Name
                        </label>
                     </div>
                  </div>

                  <div class="Polaris-Connected">
                     <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                        <div class="Polaris-TextField Polaris-TextField--hasValue">
                           <input id="PolarisTextField12" name="cat_name" class="Polaris-TextField__Input" placeholder="Enter SubCategory Name" required>
                           <div class="Polaris-TextField__Backdrop"></div>
                        </div>
                     </div>
                  </div>
                  <div class="Polaris-Labelled__LabelWrapper" style="margin-top: 6%;">
                     <div class="Polaris-Label">
                        <label id="PolarisSelect10Label" for="PolarisSelect10" class="Polaris-Label__Text">Select Category</label>
                     </div>
                  </div>
                  <div class="Polaris-Connected">
                     <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                        <div class="Polaris-TextField Polaris-TextField--hasValue">
                           <select  name="main_cat" class="NewSelector">
                              <option value="">Please Select</option>
                                @foreach ($cat as $key => $cats)
                                  @if($cats->cat_type == 0)
                                    <option value="{{$cats->id}}">{{$cats->cat_name}}</option>
                                  @endif
                                @endforeach
                           </select>
                        </div>
                     </div>
                  </div>




                  <div style="margin-top:7%" class="submit-button">
                     <button type="submit" class="Polaris-Button Polaris-Button--primary">
                         <span class="Polaris-Button__Content">
                         <span class="Polaris-Button__Text">Save</span>
                         </span>
                     </button>
                  </div>
               </form>
            </div>
            <h4 class="Polaris-Heading text_c">Sub Category List</h4>
            <div class="table_">
               <table class="Polaris-DataTable__Table" id="clubsList" >
                  <thead>
                     <tr role="row">
                        <th  class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header sorting_asc" colspan="1" rowspan="1" style="width: 101px;" tabindex="0">
                           Sub category Name
                        </th>
                        <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric sorting" colspan="1" rowspan="1" style="text-align: center; width: 302px;" tabindex="0">
                           Category Name
                        </th>
                        <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric sorting" colspan="1" rowspan="1" style="width: 81px;" tabindex="0">
                           Action
                        </th>
                     </tr>
                  </thead>
                  <tbody>
                    @foreach ($cat as $key => $cats)
                      @if($cats->cat_type == 1)
                        <tr class="Polaris-DataTable__TableRow">
                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                              {{$cats->cat_name}}
                            </td>
                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                              {{ReturnMainCatName($cats->main_cat)}}
                            </td>
                            <td style="text-align: center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">
                                <button data-id="{{$cats->id}}" type="button" class="Polaris-Button deleteFlag" >
                                  <svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>
                                  </svg>
                                </button>
                            </td>
                            </tr>
                       @endif
                    @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<div>
   <div style="display:none"  id="deleteModal" class="Polaris-Modal-Dialog__Container undefined" data-polaris-layer="true" data-polaris-overlay="true">
      <div>
         <div role="dialog" aria-labelledby="modal-header6" tabindex="-1" class="Polaris-Modal-Dialog">
            <div class="Polaris-Modal-Dialog__Modal">
               <div class="Polaris-Modal-Header">
                  <div id="modal-header6" class="Polaris-Modal-Header__Title">
                     <h2 class="Polaris-DisplayText Polaris-DisplayText--sizeSmall">
                        Delete the Category
                     </h2>
                  </div>
                  <button class="Polaris-Modal-CloseButton cancell" aria-label="Close">
                     <span class="Polaris-Icon Polaris-Icon--colorInkLighter Polaris-Icon--isColored">
                        <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                           <path d="M11.414 10l6.293-6.293a.999.999 0 1 0-1.414-1.414L10 8.586 3.707 2.293a.999.999 0 1 0-1.414 1.414L8.586 10l-6.293 6.293a.999.999 0 1 0 1.414 1.414L10 11.414l6.293 6.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z" fill-rule="evenodd"></path>
                        </svg>
                     </span>
                  </button>
               </div>
               <div class="Polaris-Modal__BodyWrapper">
                  <div class="Polaris-Modal__Body Polaris-Scrollable Polaris-Scrollable--vertical" data-polaris-scrollable="true">
                     <section class="Polaris-Modal-Section">
                        <div class="Polaris-TextContainer">
                           <p>Are you sure to delete this Data. Wont avialble on the Storefront</p>
                        </div>
                     </section>
                  </div>
               </div>
               <div class="Polaris-Modal-Footer">
                  <div class="Polaris-Modal-Footer__FooterContent">
                     <div class="Polaris-Stack Polaris-Stack--alignmentCenter">
                        <div class="Polaris-Stack__Item Polaris-Stack__Item--fill"></div>
                        <div class="Polaris-Stack__Item">
                           <div class="Polaris-ButtonGroup">
                              <div class="Polaris-ButtonGroup__Item">
                                 <button type="button" class="Polaris-Button cancell">
                                 <span class="Polaris-Button__Content">
                                 <span class="Polaris-Button__Text">Cancel</span></span>
                                 </button>
                              </div>
                              <div class="Polaris-ButtonGroup__Item">
                                 <button type="button" class="Polaris-Button Polaris-Button--destructive Delete">
                                     <span class="Polaris-Button__Content">
                                     <span class="Polaris-Button__Text">Delete</span>
                                     </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div style="display:none" class="Polaris-Backdrop"></div>

<script>
$(document).ready( function () {
  $catFilters = <?=json_encode($catArray)?>;
  $(document).on('click','.edit-main-cat',function() {
    $catId = $(this).data('id');
    $filters = $catFilters[$catId].filters;
    $("#filters-div").html("");
    for ($fk in $filters) {
        $filterData =$filters[$fk];
        $innerHtml="";
      for ($m = 0; $m < $filterData.length; $m++) {
        $singleFilterVal=$filterData[$m];
        $innerHtml+=SingleFileterTextboxes($singleFilterVal);
      }
      $("#filters-div").append(CreateSingleFilter($innerHtml,$fk));
    }
    $catData = $catFilters[$catId].cat_data;
    if($catData.file_path != null){
      if($('.cat-image').length > 0){
          $('.cat-image').remove();
        }
        $image = '<div class="cat-image" style="display:flex;">\
        <div style="width: 50%;text-align: center;">\
        <p style="font-weight: bold;margin-top: 9%;">Category Image</p>\
        <input type="hidden" name="old_category" value="'+$catData.id+'" >\
        <input type="hidden" name="old_image" value="'+$catData.file_path+'" >\
        </div>\
        <div>\
        <span class="Polaris-Thumbnail Polaris-Thumbnail--sizeLarge">\
        <img src="'+$catData.file_path+'"  class="Polaris-Thumbnail__Image">\
        </span>\
        </div>\
        </div>';
        $('.file-wrapper').after($image);
    }else{
      $('.cat-image').remove();
    }
    $('.cat_name:first').val($catData.cat_name);

    $(".form_1 .Polaris-Heading").text("Update Category Details");
    $('html, body').animate({
      scrollTop: $(".form_cover").offset().top
    }, 1000);
  })
  $(document).on('click','.add-filter-item',function() {
    $("#filters-div").append(CreateSingleFilter());
  });
  $(document).on('click','.delete-filter-item',function() {
    $(this).closest('.single-filter').remove();
  });

  function CreateSingleFilter($append="",$filter_title="") {
      $service = "";
      $service +=   '<div class="single-filter" style="margin-bottom: 16px;">'+
                      '<div class="">'+
                        '<div class="Polaris-Labelled__LabelWrapper">'+
                          '<div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Filter Title</label></div>'+
                        '</div>'+
                        '<div class="Polaris-Connected">'+
                          '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">'+
                            '<div class="Polaris-TextField Polaris-TextField--hasValue">'+
                              '<input id="PolarisTextField2" value="'+$filter_title+'" class="Polaris-TextField__Input single-filter-input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" required>'+
                              '<div class="Polaris-TextField__Backdrop"></div>'+
                            '</div>'+
                          '</div>'+
                          '<button type="button" class="Polaris-Button add-filter-option">'+
                            '<span class="Polaris-Button__Content">'+
                              '<span class="Polaris-Button__Text">'+
                                '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="height: 16px;">'+
                                  '<path d="M17 9h-6V3a1 1 0 00-2 0v6H3a1 1 0 000 2h6v6a1 1 0 102 0v-6h6a1 1 0 000-2z" fill="#5C5F62"/>'+
                                '</svg>'+
                              '</span>'+
                            '</span>'+
                          '</button>'+
                          '<button type="button" class="Polaris-Button delete-filter-item">'+
                            '<span class="Polaris-Button__Content">'+
                              '<span class="Polaris-Button__Text">'+
                                '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="height: 16px;">'+
                                  '<path fill-rule="evenodd" d="M14 4h3a1 1 0 011 1v1H2V5a1 1 0 011-1h3V1.5A1.5 1.5 0 017.5 0h5A1.5 1.5 0 0114 1.5V4zM8 2v2h4V2H8zM3 8h14v10.5a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 18.5V8zm4 3H5v6h2v-6zm4 0H9v6h2v-6zm2 0h2v6h-2v-6z" fill="#5C5F62"/>'+
                                '</svg>'+
                              '</span>'+
                            '</span>'+
                          '</button>'+
                        '</div>'+
                      '</div>'+

                      '<div class="filter-options" style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;margin: auto 64px;">';
                      if($append == ""){
                        $service +='<div class="filter-option">'+
                          '<div class="Polaris-Labelled__LabelWrapper">'+
                            '<div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Filter Option</label></div>'+
                          '</div>'+
                          '<div class="Polaris-Connected">'+
                            '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">'+
                              '<div class="Polaris-TextField Polaris-TextField--hasValue">'+
                                '<input id="PolarisTextField2" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" required>'+
                                '<div class="Polaris-TextField__Backdrop"></div>'+
                              '</div>'+
                            '</div>'+
                            '<button type="button" class="Polaris-Button delete-filter-option" style="display:none;">'+
                              '<span class="Polaris-Button__Content">'+
                                '<span class="Polaris-Button__Text">'+
                                  '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="height: 16px;">'+
                                    '<path fill-rule="evenodd" d="M14 4h3a1 1 0 011 1v1H2V5a1 1 0 011-1h3V1.5A1.5 1.5 0 017.5 0h5A1.5 1.5 0 0114 1.5V4zM8 2v2h4V2H8zM3 8h14v10.5a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 18.5V8zm4 3H5v6h2v-6zm4 0H9v6h2v-6zm2 0h2v6h-2v-6z" fill="#5C5F62"/>'+
                                  '</svg>'+
                                '</span>'+
                              '</span>'+
                            '</button>'+
                          '</div>'+'</div>';
                        }else{
                            $service +=$append;
                        }
                      $service +='</div>';

                    $service +='</div>';
      return $service;
  }

  function SingleFileterTextboxes($text_val="") {
  var $option = '';
  $option += '<div class="filter-option">' +
                '<div class="Polaris-Labelled__LabelWrapper">' +
                  '<div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Filter Option</label></div>' +
                '</div>' +
                '<div class="Polaris-Connected">' +
                  '<div class="Polaris-Connected__Item Polaris-Connected__Item--primary">' +
                    '<div class="Polaris-TextField Polaris-TextField--hasValue">'+
                      '<input id="PolarisTextField2" class="Polaris-TextField__Input" value="'+$text_val+'" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false">' +
                      '<div class="Polaris-TextField__Backdrop"></div>' +
                    '</div>' +
                  '</div>' +
                  '<button type="button" class="Polaris-Button delete-filter-option">' +
                    '<span class="Polaris-Button__Content">' +
                      '<span class="Polaris-Button__Text">' +
                        '<svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="height: 16px;">' +
                          '<path fill-rule="evenodd" d="M14 4h3a1 1 0 011 1v1H2V5a1 1 0 011-1h3V1.5A1.5 1.5 0 017.5 0h5A1.5 1.5 0 0114 1.5V4zM8 2v2h4V2H8zM3 8h14v10.5a1.5 1.5 0 01-1.5 1.5h-11A1.5 1.5 0 013 18.5V8zm4 3H5v6h2v-6zm4 0H9v6h2v-6zm2 0h2v6h-2v-6z" fill="#5C5F62"/>' +
                        '</svg>' +
                      '</span>' +
                    '</span>' +
                  '</button>' +
                '</div>' +
              '</div>';
      return $option
  }

  $(document).on('click', '.add-filter-option', function() {
    $option = SingleFileterTextboxes();
    $(this).closest('.single-filter').find('.filter-options').append($option);
  });

  $(document).on('click', '.delete-filter-option', function() {
    $(this).closest('.filter-option').remove();
  });



  $('#leaguesList,#clubsList').DataTable( {
    "lengthChange": false
  });
});
// $(document).ready(function() {
// 	$('#leaguesList').DataTable({
// 		"processing": true,
//     "serverSide": true,
//     "ajax":{
//              "url": "{{ route('getCategoryList') }}?shop={{$shop}}&name=main",
//              "dataType": "json",
//              "type": "POST",
//              "data":{ _token: "{{csrf_token()}}"}
//            },
//     "columns": [
//         { "data": "cat_name" },
//         { "data": "sub_cat_count" },
//         { "data": "action" }
//     ]
// 	});
// 	$('#clubsList').DataTable({
// 		"processing": true,
//     "serverSide": true,
//     "ajax":{
//              "url": "{{ route('getCategoryList') }}?shop={{$shop}}&name=sub",
//              "dataType": "json",
//              "type": "POST",
//              "data":{ _token: "{{csrf_token()}}"}
//            },
//     "columns": [
//         { "data": "cat_name" },
//         { "data": "sub_cat_count" },
//         { "data": "action" }
//     ]
// 	});
// });
$(".catform").on('submit',function(evt) {
    evt.preventDefault();
    $('.product-loading').fadeIn(100);
    var formData = new FormData($(this)[0]);

    var $filters = $('.single-filter').find('.single-filter-input');
    var filters = {};
    if ($filters.length > 0) {
      $filters.each(function( index, element ) {
        var $filter_options = $(element).closest('.single-filter').find('.filter-options').find('input');
        var filter_options = [];
        $filter_options.each(function(i, e) {
          filter_options.push($(this).val());
        });
        var filter_val = $(this).val();
        filters[filter_val] = filter_options;
        // filters.push(filter_val);
      });
      formData.append('filters', JSON.stringify(filters));
    }

    $.ajax({
      url: '{{url("SaveCategory")}}',
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
        window.location.href = "{{url('/dashboard')}}?shop={{$shop}}";
      }
    });
})

$(document).on('click','.deleteFlag',function(){
  window.delete_id = $(this).data('id');
  $('.Polaris-Backdrop,#deleteModal').show()
});

$(document).on('click','.cancell',function(){
  window.delete_id = null;
  $('.Polaris-Backdrop,#deleteModal').hide()
})

$(document).on('click','.Delete',function(){
    $.ajax({
      url: "{{url('/Delete')}}",
      data: {del_id:window.delete_id,table:'tbl_category'},
      type: 'POST',
      dataType:'json',
      success:function(response){
        $('.cancell').click();
        if(response.code == 200){
          alert(response.msg);
        }else{
          alert(response.msg);
        }
        window.location.href = "{{url('/dashboard')}}?shop={{$shop}}";
      }
    })
})

</script>
@endsection
