<!doctype html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content>
  <meta name="description" content>
  <title>Premat - Product Landing Page</title>

  {{-- modified added app.css --}}
  {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!--favicon-->
  <link rel="shortcut icon" type="image/png" href="/frontend/images/favicon.png">
  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">
  <!--owl carousel css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/owl.carousel.min.css">
  <!--magnific popup css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/magnific-popup.css">
  <!--icomoon css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/icomoon.css">
  <!--icofont css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/icofont.min.css">
  <!--animate css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/animate.css">
  <!--main css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
  <!--responsive css-->
  <link rel="stylesheet" type="text/css" href="/frontend/css/responsive.css">

</head>

<body>
  <div id="app">

    <!--Start Preloader-->
    <div class="preloader">
      <div class="d-table">
        <div class="d-table-cell align-middle">
          <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
          </div>
        </div>
      </div>
    </div>
    <test></test>
    <!--End Preloader-->
    <!--start header-->
    @include('layouts.frontend.header')
    <!--end header-->
    <!--start home area-->
    @yield('main')
    <!--end contact area-->
    <!--start footer-->
    @include('layouts.frontend.footer')
    <!--end footer-->

    {{-- Modified added app.js --}}
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--jQuery js-->
    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="/frontend/js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="/frontend/js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="/frontend/js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="/frontend/js/validator.min.js"></script>
    <!--contact js-->
    <script src="/frontend/js/contact.js"></script>
    <!--main js-->
    <script src="/frontend/js/custom.js"></script>
  </div>
</body>

</html>
