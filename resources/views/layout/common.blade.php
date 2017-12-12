<!DOCTYPE html>
<html lang='zh-CN'>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
		
        <title>@yield('title' , '蔚蓝')</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="shortcut icon" href="{{ asset('assets/images/icon.jpg') }}" type="image/x-icon"/>
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
		<!-- CSS -->
		{{--  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">  --}}

        @section('style')
        <link href="{{ asset('assets/css/google_api.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
		<!-- carousel -->
		<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
		<!--Light box-->
		<link href="{{ asset('assets/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css">
		<!-- Revolution Style-sheet -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/rs-slider/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rev-style.css') }}">
		<!--Main Style-->
		<link href="{{ asset('assets/css/navigation.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
        <!--Theme Color-->
        <link href="{{ asset('assets/css/theme-color/default.css') }}" rel="stylesheet" id="theme-color" type="text/css">
        @show

    </head>

    <body class="full-intro background--dark">
            @yield('content')
    
    </body>

    @section('script')
        <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
		<!-- masonry,isotope Effect Js -->
		<script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/masonry.pkgd.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.appear.js')}}" type="text/javascript"></script>
		<!-- bootstrap Js -->
		<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="{{asset('assets/js/plugin/owl.carousel.js')}}" type="text/javascript"></script>
		<!-- fancybox Js -->
		<script src="{{asset('assets/js/jquery.mousewheel-3.0.6.pack.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
		<!-- Navigation Js -->
		<script src="{{asset('assets/js/navigation.js')}}" type="text/javascript"></script>
		<!-- revolution Js -->
		<script type="text/javascript" src="{{asset('assets/rs-slider/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/rs-slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/js/revolution-custom.js')}}"></script>
		<!-- custom Js -->
		<script src="{{asset('assets/js/custom.js')}}" type="text/javascript"></script>
    @show

</html>