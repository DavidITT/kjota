<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <title>Kjota Admin</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('css/admin/admin-vendors.css')}}">
    <!-- Compile CSS -->
    <link rel="stylesheet" href="{{asset('css/admin/main.css')}}">
</head>

<body>

<div id="admin-app">
    <div class="screen-overlay"></div>
    @include('admin.template.components.side-menu')
    <div class="main-wrap">
        @include('admin.template.components.navbar')
        <section class="content-main">
            @yield('content')
        </section>
        @include('admin.template.components.footer')
    </div>
</div>

<script src="{{ asset('js/admin.js') }}"></script>

<!-- Vendor JS-->

<script src="{{ asset('assets/admin/js/vendors/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendors/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/client/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendors/select2.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendors/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendors/jquery.fullscreen.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/vendors/chart.js') }}"></script>

<!-- Main Script -->

<script src="{{ asset('assets/admin/js/main.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/js/custom-chart.js') }}" type="text/javascript"></script>

</body>

</html>
