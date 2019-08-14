<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('asset') }}/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- This page CSS -->
    <!-- This page CSS -->
    <link href="{{ asset('asset') }}/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('asset') }}/dist/css/style.min.css" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ asset('asset') }}/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="{{ asset('asset') }}/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('asset') }}/dist/css/pages/dashboard4.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-default-dark fixed-layout body">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Elite admin</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        @include('layouts.includes._header')
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        @include('layouts.includes._sidebar')
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        @yield('content')
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer">
        © 2019 Eliteadmin by themedesigner.in
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    <!-- Modal -->
        <!-- ============================================================== -->
        @include('layouts/includes/_modal')
        <!-- End Modal -->
        <!-- ============================================================== -->
</div>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('asset') }}/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ asset('asset') }}/assets/node_modules/popper/popper.min.js"></script>
<script src="{{ asset('asset') }}/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('asset') }}/dist/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="{{ asset('asset') }}/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{ asset('asset') }}/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{ asset('asset') }}/dist/js/custom.min.js"></script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--Sky Icons JavaScript -->
<script src="{{ asset('asset') }}/assets/node_modules/skycons/skycons.js"></script>
<!--morris JavaScript -->
<script src="{{ asset('asset') }}/assets/node_modules/raphael/raphael-min.js"></script>
<script src="{{ asset('asset') }}/assets/node_modules/morrisjs/morris.min.js"></script>
<script src="{{ asset('asset') }}/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Chart JS -->
<script src="{{ asset('asset') }}/dist/js/dashboard4.js"></script>
<!-- This is data table -->
<script src="{{ asset('asset') }}/assets/node_modules/datatables/datatables.min.js"></script>
<script src="{{ asset('asset') }}/assets/node_modules/sweetalert/sweetalert.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
@include('sweetalert::alert')
@stack('scripts')
</body>

</html>
