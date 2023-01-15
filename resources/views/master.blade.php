<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Spring Field</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <meta name="description" content="Koncrete Construction is the most complete constructon and building website template">--}}
    <meta name="keywords" content="Spring Field,Spring, Field">
    <meta name="author" content="Spring Field">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->


    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/color.css" type="text/css" id="colors">
    @yield('style')
</head>

<body id="homepage" class="one-page">

<div id="wrapper">

    <!-- header begin -->
    <header>
        @include('layouts.contact')
        @include('layouts.menu')

    </header>
    <!-- header close -->

    <!-- content begin -->
    <div id="content" class="no-bottom no-top">
        <!-- section begin -->
        @yield('content')


    </div>
</div>


<!-- footer begin -->
@include('layouts.footer')

<!-- footer close -->
<a href="#" id="back-to-top"></a>
</div>


<!-- Javascript Files
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/jpreLoader.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/easing.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/validation.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/enquire.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/designesia.js"></script>
<script>
    function truncateText(obj) {
        // console.log(obj);
        if ($(obj).parent().find('p').css('height') == '50px') {
            $(obj).parent().find('p').css('max-height', '245px');
            $(obj).parent().find('p').css('height', '245px');
            $(obj).text('load less');
        } else {
            $(obj).parent().find('p').css('max-height', '50px');
            $(obj).parent().find('p').css('overflow', 'hidden');
            $(obj).text('load more');

        }
    }
</script>
</body>
</html>
