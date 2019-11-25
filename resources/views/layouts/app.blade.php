<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Alagadi Turtle') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link href="{{url('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    @yield('css')
</head>
<body>
<div id="app">

    @yield('content')

</div>
<script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{url('css/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{url('css/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{url('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{url('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{url('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{url('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{url('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{url('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{url('plugins/easing/easing.js')}}"></script>
<script src="{{url('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{url('plugins/parallax-js-master/parallax.min.js')}}"></script>
@yield('js')
</body>
</html>
