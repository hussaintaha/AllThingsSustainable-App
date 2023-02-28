@extends('admin.sadmin')
@section('content')
<style>
   .table-container {
     margin-left: 2%;
     margin-right: 2%;
     margin-top: 3%;
   }
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2196F3;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
</style>
<div class="table-container">
   <div class="Polaris-DataTable">
      <div class="Polaris-DataTable__ScrollContainer">
         <table id="vendor-list" class="Polaris-DataTable__Table">
            <thead>
               <tr>
                  <th style="text-align:center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col">
                     Vendor Name
                  </th>
                  <th style="text-align:center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col">
                     Logo
                  </th>
                  <th   style="text-align:center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn Polaris-DataTable__Cell--header" scope="col">
                     City
                  </th>
                  <th  style="text-align:center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">
                     Contact
                  </th>
                  <th   style="text-align:center;" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">
                     Action
                  </th>
               </tr>
            </thead>

            <tbody>
               <?php
                // echo json_encode($meta);
               foreach ($meta as $vk=>$smt):
                  $dt = (object)$smt;
                  if(isset($dt->basic_details['type']) && $dt->basic_details['type'] == 'vendor'){

                    // echo "<pre>";
                    // print_r($dt);
                    // echo "</pre>";
                   ?>
                   <tr class="Polaris-DataTable__TableRow">
                  <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn" scope="row">
                     <?=$dt->basic_details['vendor_name']?>
                  </th>
                  <td style="text-align:center;" class="Polaris-DataTable__Cell " scope="row">
                     <img src="<?=$dt->basic_details['logo']?>">
                  </td>
                  <td class="Polaris-DataTable__Cell " scope="row">
                     <?=$dt->basic_details['city']?>
                  </td>
                  <td class="Polaris-DataTable__Cell " scope="row">
                     <?=$dt->basic_details['contact']?>
                  </td>


                  <td class="Polaris-DataTable__Cell " scope="row">
                    <a style="text-decoration: none;" target="_blank" href="https://{{$shop}}/collections/vendors?q=<?=str_replace("&","%26",$dt->basic_details['vendor_name'])?>">
                      <button  type="button" class="Polaris-Button" >
                        <svg  style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill="#5C5F62" fill-rule="evenodd" d="M19.928 9.629C17.791 4.286 13.681 1.85 9.573 2.064c-4.06.21-7.892 3.002-9.516 7.603L-.061 10l.118.333c1.624 4.601 5.455 7.393 9.516 7.603 4.108.213 8.218-2.222 10.355-7.565l.149-.371-.149-.371zM10 15a5 5 0 100-10 5 5 0 000 10z"/><circle fill="#5C5F62" cx="10" cy="10" r="3"/></svg>
                      </button>
                    </a>
                     <a style="text-decoration: none;" href="{{url('edit-vendor2?')}}shop={{$shop}}&vendor={{$vk}}">
                        <button type="button" class="Polaris-Button" >
                           <svg style="height: 20px;width: 20px;"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path fill="#637381" d="M18.878 1.085c-1.445-1.446-3.967-1.446-5.414 0l-11.17 11.17a.976.976 0 0 0-.228.368c-.003.009-.012.015-.015.024l-2 6a.999.999 0 0 0 1.265 1.265l6-2c.01-.003.015-.012.024-.015a.976.976 0 0 0 .367-.227L18.878 6.499A3.805 3.805 0 0 0 20 3.792a3.803 3.803 0 0 0-1.122-2.707zm-1.414 4L17 5.549l-2.586-2.586.464-.464c.691-.691 1.895-.691 2.586 0 .346.346.536.805.536 1.293 0 .488-.19.947-.536 1.293zM3.437 14.814l1.712 1.712-2.568.856.856-2.568zM7 15.549l-2.586-2.586L13 4.377l2.586 2.586L7 15.549z"/>
                           </svg>
                        </button>
                     </a>

                     <button type="button" data-vendor="{{$vk}}" class="Polaris-Button deleteFlag" >
                        <svg style="height: 20px;width: 20px;"  viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M16 6H4a1 1 0 1 0 0 2h1v9a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V8h1a1 1 0 1 0 0-2zM9 4a1 1 0 1 1 0-2h2a1 1 0 1 1 0 2H9zm2 12h2V8h-2v8zm-4 0h2V8H7v8z" fill="#212B36" fill-rule="evenodd"/>
                        </svg>
                     </button>

                     <label class="switch">
                       <input data-vendor="{{$vk}}" type="checkbox" {{$dt->display_status == 1 ? "checked" : ""}} class="status-btn">
                       <span class="slider round"></span>
                     </label>

                  </td>
               </tr>
                <?php } ?>
               <?php endforeach; ?>
            </tbody>
         </table>
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
                        Delete the Vendor from the system
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
                           <p>Are you sure to delete this Data. Won't be available on the Storefront</p>
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
<style>
   .Polaris-DataTable__TableRow img {
   	width: 50px;
   }
</style>
<script>
   $(document).ready(function() {
   	$('#vendor-list').DataTable();
   });
   $(document).on('click','.cancell',function(){
     $('.Polaris-Modal-Dialog__Container,.Polaris-Backdrop').hide();
     $('.vendor-details').html("");
   });

   $(document).on('change','.status-btn',function(){
     var status = $(this).prop('checked') == true  ? 1 : 0;
     var data={
       vendor:$(this).data('vendor'),
       status:status,
       shop:'{{$shop}}'
     }
      if (confirm("Change status Of Vendor?")){
        $.ajax({
          url: "{{url('/changestatus')}}",
          data: data,
          type: 'get',
          dataType:'json',
          success:function(response){
            if(response.code == 200){
              alert(response.msg);
            }else{
              alert(response.msg);
            }
            window.location.href = "{{url('/vendor_list')}}?shop={{$shop}}";
          }
        })
      }
     // console.log(data);
   })
   $(document).on('click','.deleteFlag',function(){
     window.delete_id = $(this).data('vendor');
     $('.Polaris-Backdrop,#deleteModal').show();
   });

   $(document).on('click','.Delete',function(){
       $.ajax({
         url: "{{url('/Delete2')}}",
         data: {del_id:window.delete_id,shop:'{{$shop}}'},
         type: 'POST',
         dataType:'json',
         success:function(response){
           $('.cancell').click();
           if(response.code == 200){
             alert(response.msg);
           }else{
             alert(response.msg);
           }
           window.location.href = "{{url('/vendor_list')}}?shop={{$shop}}";
         }
       })
   })
   $(document).on('click','.cancell',function(){
     window.delete_id = null;
     $('.Polaris-Backdrop,#deleteModal').hide();
   });
</script>
@endsection
