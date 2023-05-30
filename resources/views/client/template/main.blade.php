<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <title>Kjota</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/client/imgs/theme/favicon.ico') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/client/evara-font.css')}}">
    <link rel="stylesheet" href="{{asset('css/client/uicons-regular-straight.css')}}">
    <link rel="stylesheet" href="{{asset('css/client/client-vendors.css')}}">
    <link rel="stylesheet" href="{{asset('css/client/client-plugins.css')}}">
    <!-- Compile CSS -->
    <link rel="stylesheet" href="{{asset('css/client/main.css')}}">

</head>

<body>

<div id="app">
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('client.template.navbar')
    @yield('content')
    @include('client.template.footer')
</div>

<script src="{{ mix('js/app.js') }}"></script>
<!-- Vendor JS-->
<script src="{{ asset('assets/client/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/client/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/client/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/client/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/client/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('assets/client/js/main.js?v=3.4') }}"></script>
<script src="{{ asset('assets/client/js/shop.js?v=3.4') }}"></script>


</body>

</html>
