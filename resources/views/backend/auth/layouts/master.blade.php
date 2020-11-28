<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title_login','Login')</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href=" {{ asset('backend/plugins/bootstrap/dist/css/bootstrap.min.css') }} ">
        <link rel="stylesheet" href=" {{ asset('backend/plugins/fontawesome-free/css/all.min.css') }} ">
        <link rel="stylesheet" href=" {{ asset('backend/plugins/ionicons/dist/css/ionicons.min.css') }} ">
        <link rel="stylesheet" href=" {{ asset('backend/plugins/icon-kit/dist/css/iconkit.min.css') }} ">
        <link rel="stylesheet" href=" {{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }} ">
        <link rel="stylesheet" href=" {{ asset('backend/dist/css/theme.min.css') }} ">
        <script src=" {{ asset('backend/src/js/vendor/modernizr-2.8.3.min.js') }} "></script>
        <link rel="stylesheet" href="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }} ">

        @stack('CSS_PUST')
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="auth-wrapper">
            @yield('login')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>window.jQuery || document.write('<script src=" {{ asset('backend/src/js/vendor/jquery-3.3.1.min.js') }} "><\/script>')</script>
        <script src=" {{ asset('backend/plugins/popper.js/dist/umd/popper.min.js') }} "></script>
        <script src=" {{ asset('backend/plugins/bootstrap/dist/js/bootstrap.min.js') }} "></script>
        <script src=" {{ asset('backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }} "></script>
        <script src=" {{ asset('backend/plugins/screenfull/dist/screenfull.js') }} "></script>
        <script src=" {{ asset('backend/dist/js/theme.js') }} "></script>
        <script src="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    @stack('JS_PLUGIN_REGION')

    @yield('JS_REGION')
    </body>
</html>
