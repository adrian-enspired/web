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

    <link href="/assets/node_modules/dropify/dist/css/dropify.min.css" rel="stylesheet" />
    <link href="/assets/node_modules/dropzone-master/dist/dropzone.css" rel="stylesheet" />
    <link href="/dist/js/jPlayer/jplayer.flat.css" rel="stylesheet" />
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
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">WMALabel</p>
            </div>
        </div>
        <div id="main-wrapper">
            @livewire('app.topbar');
            @livewire('app.sidebar', ['page' => $page]);
            <div class="page-wrapper">
                {{ $slot }}
            </div>
            @livewire('footer')
        </div>
        <script src="/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <script src="/assets/node_modules/popper/popper.min.js"></script>
        <script src="/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/dist/app/js/perfect-scrollbar.jquery.min.js"></script>
        <script src="/dist/app/js/waves.js"></script>
        <script src="/dist/app/js/sidebarmenu.js"></script>
        <script src="/dist/app/js/sortable.min.js"></script>
        <script type="text/javascript" src="/dist/app/js/jPlayer/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="/dist/app/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
        <script type="text/javascript" src="/dist/app/js/jPlayer/init.js"></script>
        <script src="/dist/app/js/custom.min.js"></script>
        <script src="/assets/node_modules/peity/jquery.peity.min.js"></script>
        <script src="/assets/node_modules/dropify/dist/js/dropify.min.js"></script>
        <script src="/assets/node_modules/dropzone-master/dist/dropzone.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer=""></script>
        @livewireScripts
    </body>
</html>
