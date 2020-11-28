<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title','admin')</title>
        <meta name="description" content="">
        <meta name="_token" content="{{csrf_token()}}">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="{{ asset('favicon.ico')}}" type="image/x-icon" />
        
        <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap/dist/css/bootstrap.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/icon-kit/dist/css/iconkit.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/ionicons/dist/css/ionicons.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }} ">
        {{-- <link rel="stylesheet" href="{{ asset('backend/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }} "> --}}
        <link rel="stylesheet" href="{{ asset('backend/plugins/jvectormap/jquery-jvectormap.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/weather-icons/css/weather-icons.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/c3/c3.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/owl.carousel/dist/assets/owl.carousel.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/dist/css/theme.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/dist/css/toastr.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/dist/css/toastr.css') }} ">
        <link rel="stylesheet" href="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }} ">
        {{-- <script src="{{ asset('backend/src/js/vendor/modernizr-2.8.3.min.js') }} "></script> --}}
        @stack('CSS_PUST')
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            @include('backend.include.header')
            <div class="page-wrap">
               @include('backend.include.sidebar')
                <div class="main-content">
                    @yield('content')
                    
                </div>
                @include('backend.include.footer')
            </div>
        </div>
        <script src="{{ asset('backend/src/js/vendor/jquery-3.3.1.min.js')}} "></script>
        {{-- <script>window.jQuery || document.write('<script src="{{ asset('backend/src/js/vendor/jquery-3.3.1.min.js') }} "><\/script>')</script> --}}
        <script src="{{ asset('backend/js/vue.js')}} "></script>
        <script src="{{ asset('backend/plugins/popper.js/dist/umd/popper.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/bootstrap/dist/js/bootstrap.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/screenfull/dist/screenfull.js')}} "></script>
        <script src="{{ asset('backend/plugins/datatables.net/js/jquery.dataTables.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}} "></script>
        {{-- <script src="{{ asset('backend/plugins/jvectormap/jquery-jvectormap.min.js') }} "></script> --}}
        {{-- <script src="{{ asset('backend/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js') }} "></script> --}}
        <script src="{{ asset('backend/plugins/moment/moment.js')}} "></script>
        <script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/d3/dist/d3.min.js')}} "></script>
        <script src="{{ asset('backend/plugins/c3/c3.min.js')}} "></script>
        <script src="{{ asset('backend/js/tables.js') }} "></script>
        {{-- <script src="{{ asset('backend/js/widgets.js') }} "></script> --}}
        <script src="{{ asset('backend/js/charts.js')}} "></script>
        <script src="{{ asset('/js/core.js') }} "></script>
        <script src="{{ asset('/js/custom.js') }} "></script>
        <script src="{{ asset('backend/js/form-advanced.js')}}"></script>
        {{-- init plugin --}}
        @stack('JS_PLUGIN_REGION')
        

        {{-- init custome js --}}
        @yield('JS_REGION')


        <script src="{{ asset('backend/dist/js/theme.min.js') }} "></script>
        <script src="{{ asset('backend/plugins/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
        @yield('script')
    </body>
</html>
