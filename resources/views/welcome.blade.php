<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
      <meta charset="utf-8" />
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <title>Laravel</title>
      
        <link rel="canonical" href="https://keenthemes.com/metronic" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="{{asset('assets/control_panel/local/css/all.min.css')}}" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        
        <!--begin::Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
        <!--end::Fonts-->
        
        <!--begin::Page Vendors Styles(used by this page)-->
        <link href="{{asset('assets/control_panel/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Page Vendors Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{asset('assets/control_panel/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/control_panel/plugins/custom/prismjs/prismjs.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/control_panel/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <link href="{{asset('assets/control_panel/css/themes/layout/header/base/light.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/control_panel/css/themes/layout/header/menu/light.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/control_panel/css/themes/layout/brand/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/control_panel/css/themes/layout/aside/dark.rtl.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Layout Themes-->
         
    
        <link href="{{asset('assets/control_panel/css/app.css')}}" rel="stylesheet" type="text/css" />
    
    
        <!-- Start Select All Buttons cdn -->
        <link href="{{asset('assets/control_panel/js/select2_1.min.css')}}" rel="stylesheet">
        <script src="{{asset('assets/control_panel/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/control_panel/js/pages/crud/forms/widgets/select2.js')}}"></script>
        <link href="{{asset('assets/control_panel/js/select2.min.css')}}" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Styles -->
        <style>
          #load{
            width:100%;
            height:100%;
            position:fixed;
            z-index:9999;
            background: url("/loader.gif") no-repeat center center white;
          }
          #print_msg_zip{
                word-break: break-all;
            }
          .toast .toast-message {
            padding-right: 40px;
          }
        </style>
        <script>
          document.onreadystatechange = function () {
          var state = document.readyState;
          if (state == 'interactive') {
             document.getElementById('contents').style.visibility="hidden";
          } else if (state == 'complete') {
            setTimeout(function(){
               document.getElementById('interactive');
               document.getElementById('load').style.visibility="hidden";
               document.getElementById('contents').style.visibility="visible";
            },10);
          }
          }
        </script>
          
    </head>
    <body class="">
        <div class="main">
            <form id="store_form" action="{{route('store')}}" method="post">
                @csrf
                <div class="elem-group" style="margin-top: 20px;">
                  <label for="name">الاسم</label>
                  <input type="text" id="name" name="name" placeholder="الاسم"  required>
                </div>
               

                <div class="elem-group" style="margin-top: 20px;">
                  <label for="phone">رقم الهاتف</label>
                  <input type="tel" id="phone" name="phone" placeholder="056 123 4567"  required>
                </div>

              
             
                <div class="elem-group" style="margin-top: 20px;">
                    <label for="room-selection">طريقة الدفع</label>
                    <select id="room-selection" name="payment_type" required>
                        <option value=""> اختار طريقة دفع </option>
                        <option value="كاش">كاش</option>
                        <option value=" عن طريق البنك " >عن طريق البنك</option>
                    </select>
                  </div>             

                
                  <div class="elem-group center">
                    <button style="text-align: center" type="button" onclick="send('store_form')" class="btn btn-primary btn-lg book-btn">حجز</button>
                  </div>
              </form>
        </div>



            
 

      

    </body>
    <script>
      var KTAppSettings = { 
          "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 },
          "colors": { 
              "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" },
              "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } },
               "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } },
           "font-family": "Poppins" };</script>
  <!--end::Global Config-->
  <!--begin::Global Theme Bundle(used by all pages)-->
  <script src="{{asset('assets/control_panel/local/jquery.js')}}"></script>
  <script src="{{asset('assets/control_panel/plugins/global/plugins.bundle.js')}}"></script>
  <script src="{{asset('assets/control_panel/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
  <script src="{{asset('assets/control_panel/js/scripts.bundle.js')}}"></script>
  <!--end::Global Theme Bundle-->
  <!--begin::Page Vendors(used by this page)-->
  <script src="{{asset('assets/control_panel/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
  <!--end::Page Vendors-->
  <!--begin::Page Scripts(used by this page)-->
  <script src="{{asset('assets/control_panel/js/pages/widgets.js')}}"></script>
  
  <!--end::Page Scripts-->
  <script src="{{asset('assets/control_panel/local/jquery.validate.js')}}"></script>
  <script src="{{asset('assets/control_panel/local/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('assets/control_panel/local/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/control_panel/local/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/control_panel/local/index.js')}}"></script>

  

  <!-- Sweet Alert -->
  <script src="{{asset('assets/control_panel/local/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
        
     

     
      function send(form_id){
          let form = document.getElementById(form_id);
          let formData = new FormData(form);
          $.ajax({
              url: form.action,
              processData: false,
              contentType: false,
              type: 'post',
              data:formData,
              beforeSend: function() {
                  toastr.info("جاري الحفظ ..");
              },
              success: function (data){
                  toastr.clear();
                  if(data.errors){
                      data.errors.forEach(error => {
                          toastr.error(error);
                      });
                  }else{
                      toastr.success('تم');
                      form.reset();
                    
                  }
              }
          });
      }

     

  </script>
</html>
