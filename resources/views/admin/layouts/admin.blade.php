<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('PTTKTT/icon/Untitled-1.jpg')}}">

    <link rel="stylesheet" href="{{asset('main_template/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main_template/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('main_template/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('main_template/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('main_template/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('main_template/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('main_template/assets/css/style.css')}}">
    @yield('css')
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    @include('admin.layouts.sidenav')

    <!-- Right Panel -->

    @yield('content')



    <script src="{{asset('main_template/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('main_template/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('main_template/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('main_template/assets/js/main.js')}}"></script>


    <script src="{{asset('main_template/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('main_template/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('main_template/assets/js/widgets.js')}}"></script>
    <script src="{{asset('main_template/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('main_template/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('main_template/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
    @yield('js')
</body>

</html>

