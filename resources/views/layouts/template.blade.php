<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.styles')
    @stack ('after-style')
</head>
<body>
  <div class="container-scroller">
    
    @include('includes.navbar')
    <div class="container-fluid page-body-wrapper">
        @include('includes.menu')
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        @include('includes.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @include('includes.scripts')
  @stack('after-script')
  <!-- End custom js for this page-->
</body>

</html>

