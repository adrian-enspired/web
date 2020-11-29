<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WMALabel Admin</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <link href="/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="/dist/css/style.css" rel="stylesheet">
    <link href="/dist/css/pages/dashboard1.css" rel="stylesheet">
    <link href="dist/css/pages/inbox.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
    <link href="/assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="/assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="/css/app.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="skin-megna-dark fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">WMALabel</p>
        </div>
    </div>
    <div id="main-wrapper">
        @livewire('admin.topbar');
        @livewire('admin.sidebar', ['page' => $page]);
        <div class="page-wrapper">
            {{ $slot }}
        </div>
        @livewire('footer')
    </div>
    <script src="/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <script src="/assets/node_modules/popper/popper.min.js"></script>
    <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="/dist/js/waves.js"></script>
    <script src="/dist/js/sidebarmenu.js"></script>
    <script src="/dist/js/custom.min.js"></script>
    <script src="/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="/assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
    <script src="/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="/dist/js/dashboard1.js"></script>
    <script src="/assets/node_modules/toast-master/js/jquery.toast.js"></script>
    <script src="/assets/node_modules/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="/assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer=""></script>
    @livewireScripts
</body>

</html>
