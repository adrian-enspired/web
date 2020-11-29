<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <link href="/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
        <link href="/assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
        <link href="/dist/css/style.css" rel="stylesheet">
        <link href="/dist/css/pages/dashboard1.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="skin-default card-no-border">
        <div class="preloader" style="display: none;">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">WMA Label</p>
            </div>
        </div>
        <section id="wrapper" class="wma-bg">
            {{ $slot }}
        </section>
    </body>
</html>
