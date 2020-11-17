<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WMALabel</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">

    <link rel="stylesheet" href="/assets/node_modules/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" href="/dist/js/jPlayer/jplayer.flat.css" type="text/css" />
    <link href="/dist/app/css/pages/user-card.css" rel="stylesheet">
    <link href="/dist/app/css/style.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @livewireStyles
</head>

    <body class="skin-megna-dark fixed-layout">
            <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">WMALabel</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            @livewire('app.topbar');
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            @livewire('app.sidebar', ['page' => $page]);
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
                {{ $slot }}
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
            @livewire('footer')
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="/assets/node_modules/popper/popper.min.js"></script>
        <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="/dist/app/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="/dist/app/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="/dist/app/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script type="text/javascript" src="/dist/app/js/jPlayer/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="/dist/app/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
        <script type="text/javascript" src="/dist/app/js/jPlayer/init.js"></script>

        <script src="/dist/app/js/custom.min.js"></script>
        <script src="/assets/node_modules/peity/jquery.peity.min.js"></script>
        <script src="/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer=""></script>
        @livewireScripts
    </body>
</html>
