
        </div>
    </div>
  </div>
  <!-- END: Content-->


  <!-- BEGIN: Customizer-->
  <div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner" data-feather="settings"></i></a><div class="customizer-content">
<!-- Customizer header -->
<div class="customizer-header px-2 pt-1 pb-0 position-relative">
  <h4 class="mb-0">Theme Customizer</h4>
  <p class="m-0">Customize & Preview in Real Time</p>

  <a class="customizer-close" href="#"><i data-feather="x"></i></a>
</div>

<hr />

<!-- Styling & Text Direction -->
<div class="customizer-styling-direction px-2">
  <p class="fw-bold">Skin</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input
        type="radio"
        id="skinlight"
        name="skinradio"
        class="form-check-input layout-name"
        checked
        data-layout=""
      />
      <label class="form-check-label" for="skinlight">Light</label>
    </div>
    <div class="form-check me-1">
      <input
        type="radio"
        id="skinbordered"
        name="skinradio"
        class="form-check-input layout-name"
        data-layout="bordered-layout"
      />
      <label class="form-check-label" for="skinbordered">Bordered</label>
    </div>
    <div class="form-check me-1">
      <input
        type="radio"
        id="skindark"
        name="skinradio"
        class="form-check-input layout-name"
        data-layout="dark-layout"
      />
      <label class="form-check-label" for="skindark">Dark</label>
    </div>
    <div class="form-check">
      <input
        type="radio"
        id="skinsemidark"
        name="skinradio"
        class="form-check-input layout-name"
        data-layout="semi-dark-layout"
      />
      <label class="form-check-label" for="skinsemidark">Semi Dark</label>
    </div>
  </div>
</div>

<hr />

<!-- Menu -->
<div class="customizer-menu px-2">
  <div id="customizer-menu-collapsible" class="d-flex">
    <p class="fw-bold me-auto m-0">Menu Collapsed</p>
    <div class="form-check form-check-primary form-switch">
      <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
      <label class="form-check-label" for="collapse-sidebar-switch"></label>
    </div>
  </div>
</div>
<hr />

<!-- Layout Width -->
<div class="customizer-footer px-2">
  <p class="fw-bold">Layout Width</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked />
      <label class="form-check-label" for="layout-width-full">Full Width</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
      <label class="form-check-label" for="layout-width-boxed">Boxed</label>
    </div>
  </div>
</div>
<hr />

<!-- Navbar -->
<div class="customizer-navbar px-2">
  <div id="customizer-navbar-colors">
    <p class="fw-bold">Navbar Color</p>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-white border selected" data-navbar-default=""></li>
      <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
      <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
      <li class="color-box bg-success" data-navbar-color="bg-success"></li>
      <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
      <li class="color-box bg-info" data-navbar-color="bg-info"></li>
      <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
      <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
    </ul>
  </div>

  <p class="navbar-type-text fw-bold">Navbar Type</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
      <label class="form-check-label" for="nav-type-floating">Floating</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
      <label class="form-check-label" for="nav-type-sticky">Sticky</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
      <label class="form-check-label" for="nav-type-static">Static</label>
    </div>
    <div class="form-check">
      <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
      <label class="form-check-label" for="nav-type-hidden">Hidden</label>
    </div>
  </div>
</div>
<hr />

<!-- Footer -->
<div class="customizer-footer px-2">
  <p class="fw-bold">Footer Type</p>
  <div class="d-flex">
    <div class="form-check me-1">
      <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
      <label class="form-check-label" for="footer-type-sticky">Sticky</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked />
      <label class="form-check-label" for="footer-type-static">Static</label>
    </div>
    <div class="form-check me-1">
      <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
      <label class="form-check-label" for="footer-type-hidden">Hidden</label>
    </div>
  </div>
</div>
</div>

  </div>
  <!-- End: Customizer-->


  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

  <!-- BEGIN: Footer-->
  <footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; <?= date('Y'); ?><a class="ms-25" href="https://amazingweb.design" target="_blank">AmazingWeb.Design</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
  </footer>
  <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
  <!-- END: Footer-->


  <!-- BEGIN: Vendor JS-->
  <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="{{asset('app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>

  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="{{asset('app-assets/js/core/app-menu.min.js')}}"></script>
  <script src="{{asset('app-assets/js/core/app.min.js')}}"></script>
  {{-- <script src="{{asset('app-assets/js/scripts/customizer.min.js')}}"></script> --}}
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  @if(Session::has('flash_message_success'))
  {{-- $message=session('flash_message_success'); --}}
  {{ $message=session('flash_message_success')}}
  {{-- {{$message}} --}}
  
  <script>
      var data=@json($message);
    
      window.onload=
      function myFunction() {
        toastr.success(data);
      }
  </script> 
  
    
  @endif
  
  
  @if(Session::has('flash_message_error'))
 <?= $error=session('flash_message_error')?>
  
  <script>

        var data3=@json($error);
    
      window.onload=
    function myFunction() {
      toastr.error(data3);
    }
  </script> 
  
    
  @endif
  <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}"></script>
  {{-- <script src="{{asset('assets/toastr.min.js')}}"></script> --}}
  {{-- <script>
    $(window).on('load',  function(){
      if (feather) {
        feather.replace({ width: 14, height: 14 });
      }
    })
  </script> --}}
</body>
<!-- END: Body-->

</html>