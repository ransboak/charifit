<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Sympatho</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets1/images/favicon.ico">
        <!-- Summernote css -->
        <link href="{{asset('assets1/libs/summernote/summernote-bs4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="{{asset('assets1/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets1/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets1/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <link href="{{asset('assets1/libs/admin-resources/rwd-table/rwd-table.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="{{asset('assets1/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets1/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{asset('assets1/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


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

    <!-- Responsive Table js -->
    <script src="{{asset('assets1/libs/admin-resources/rwd-table/rwd-table.min.js')}}"></script>

     <!-- Required datatable js -->
     <script src="{{asset('assets1/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('assets1/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
     <!-- Buttons examples -->
     <script src="{{asset('assets1/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
     <script src="{{asset('assets1/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
     <script src="{{asset('assets1/libs/jszip/jszip.min.js')}}"></script>
     <script src="{{asset('assets1/libs/pdfmake/build/pdfmake.min.js')}}"></script>
     <script src="{{asset('assets1/libs/pdfmake/build/vfs_fonts.js')}}"></script>
     <script src="{{asset('assets1/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
     <script src="{{asset('assets1/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
     <script src="{{asset('assets1/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>

     <!-- Responsive examples -->
     <script src="{{asset('assets1/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
     <script src="{{asset('assets1/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

     <!-- Datatable init js -->
     <script src="{{asset('assets1/js/pages/datatables.init.js')}}"></script>

    <!-- Init js -->
    <script src="{{asset('assets1/js/pages/table-responsive.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets1/js/app.js')}}"></script>
</body>

</html>

