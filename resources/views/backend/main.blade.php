<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets1/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets1/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets1/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets1/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>
    <body data-sidebar="dark">

            <!-- Begin page -->
            <div id="layout-wrapper">

        <!-- Begin page -->

            @include('backend.layouts.navbar')
            @include('backend.layouts.sidebar')

            <div class="main-content">
            @yield('content')
            </div>
            @include('backend.layouts.footer')


            </div>



    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets1/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets1/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets1/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets1/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets1/libs/node-waves/waves.min.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{asset('assets1/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{asset('assets1/js/pages/dashboard.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets1/js/app.js')}}"></script>
</body>

</html>

