<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Spring Field</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    <meta name="description"--}}
{{--          content="Koncrete Construction is the most complete constructon and building website template">--}}
{{--    <meta name="keywords" content="construction,multipurpose,onepage,responsive,minimal,bootstrap,theme">--}}
    <meta name="author" content="Spring Field">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!--[if lt IE 9]>
    <script src="{{asset('js/html5shiv.js')}}"></script>
    <![endif]-->

    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jpreloader.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <!-- custom background -->
    <link rel="stylesheet" href="{{asset('css/bg.css')}}" type="text/css">
    <!-- color scheme -->
    <link rel="stylesheet" href="{{asset('css/color.css')}}" type="text/css" id="colors">
  @yield('style')
</head>

<body id="homepage" class="one-page">

<div id="wrapper">

    <!-- header begin -->
    <header class="transparent de_header_2 clone smaller">
        @include('layouts/contact')
        @include('layouts/menu')

    </header>
    <!-- header close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">

        <!-- section begin -->
        @yield('content')

        <!-- footer begin -->
        @include('layouts.footer')
        <!-- footer close -->
        <a href="#" id="back-to-top"></a>
    </div>
</div>

<!-- Javascript Files
================================================== -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jpreLoader.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/easing.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery.countTo.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/enquire.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/designesia.js')}}"></script>
@yield('js')

{{--<script src="js/jquery.min.js"></script>--}}
{{--<script src="js/jpreLoader.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/jquery.isotope.min.js"></script>--}}
{{--<script src="js/easing.js"></script>--}}
{{--<script src="js/owl.carousel.js"></script>--}}
{{--<script src="js/jquery.countTo.js"></script>--}}
{{--<script src="js/validation.js"></script>--}}
{{--<script src="js/wow.min.js"></script>--}}
{{--<script src="js/jquery.magnific-popup.min.js"></script>--}}
{{--<script src="js/enquire.min.js"></script>--}}
{{--<script src="js/jquery.stellar.min.js"></script>--}}
{{--<script src="js/designesia.js"></script>--}}
</body>
</html>
