<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="Construct - Construction Template" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/images/favicon.png')}}" />

    <!-- PAGE TITLE HERE -->
    <title>Construct - Construction Template</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/plugins.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/themify/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.min.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('frontend/css/skin/skin-1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/templete.min.css') }}">

    <!-- Google Font -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900');
    </style>

    <!-- Revolution Slider Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/plugins/revolution/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/plugins/revolution/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('frontend/plugins/revolution/revolution/css/navigation.css') }}">

</head>

<body id="bg">
    <div class="page-wraper">
        @include('partials.header')
        <div class="page-content">
            @yield('content')
        </div>
        @include('partials.footer')
        <button class="scroltop fa fa-arrow-up"></button>
    </div>
    <script type="text/javascript" src="{{asset('frontend/js/combining.js')}}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('frontend/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('frontend/js/rev.slider.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            'use strict';
            dz_rev_slider_1();
        }); /*ready*/
    </script>
    <div id="loading-area"></div>
    <script type="text/javascript" src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js')}}">
    </script>
    <script type="text/javascript"
        src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('frontend/plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js')}}">
    </script>
</body>
</html>
