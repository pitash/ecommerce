<!doctype html>
<html class="no-js" lang="en">  
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-commerce</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.ico') }}">

    <!-- CSS
	============================================ -->
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <!-- Pe-icon-7-stroke CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/pe-icon-7-stroke.css') }}">
    <!-- Font-awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/font-awesome.min.css') }}">
    <!-- Slick slider css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animate.css') }}">
    <!-- Nice Select css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/nice-select.css') }}">
    <!-- jquery UI css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/jqueryui.min.css') }}">
    <!-- main style css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

</head>

<body>
    <!-- Start Header Area -->
    <header class="header-area header-wide">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            @yield('topbar')
            <!-- header top end -->

            <!-- header middle area start -->
            @yield('header')
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            @yield('mob-top')
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->

        <!-- offcanvas mobile menu start -->
        <!-- off-canvas menu start -->
        @yield('m-header')
        <!-- off-canvas menu end -->
        <!-- offcanvas mobile menu end -->
    </header>
    <!-- end Header Area -->

    <main>
        <!-- hero slider area start -->
        @yield('slider')
        <!-- hero slider area end -->

        <!-- hero breadcrumb area start -->
        @yield('breadcrumb')
        <!-- hero breadcrumb area end -->
        
        <!-- wishlist main wrapper start -->
        @yield('wishlist')
        <!-- wishlist main wrapper end -->

        <!-- page main wrapper start -->
        @yield('product_detail')
        <!-- page main wrapper end -->

        <!-- related products area start -->
        @yield('related_product')
        <!-- related products area end -->

        <!-- sidebar area start -->
        {{-- @yield('left') --}}
        <!-- sidebar area end -->

        <!-- page main wrapper start -->
        @yield('container')
        <!-- page main wrapper end -->

        <!-- service policy area start -->
        @yield('service')
        <!-- service policy area end -->

        <!-- banner statistics area start -->
        @yield('up-card')
        <!-- banner statistics area end -->

        <!-- product area start -->
        @yield('our-product')
        <!-- product area end -->

        <!-- product banner statistics area start -->
        @yield('middle_card')
        <!-- product banner statistics area end -->

        <!-- featured product area start -->
        @yield('featcher_prod')
        <!-- featured product area end -->

        <!-- testimonial area start -->
        @yield('testimonial')
        <!-- testimonial area end -->

        <!-- group product start -->
        @yield('group_product')
        <!-- group product end -->

        <!-- contact area start -->
        @yield('contact')
        <!-- contact area end -->
    </main>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->

    <!-- footer area start -->
    @yield('footer')
    <!-- footer area end -->

    <!-- offcanvas mini cart start -->
    @yield('cart')
    <!-- offcanvas mini cart end -->

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('frontend/assets/js/vendor/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js') }}"></script>
    <!-- slick Slider JS -->
    <script src="{{ asset('frontend/assets/js/plugins/slick.min.js') }}"></script>
    <!-- Countdown JS -->
    <script src="{{ asset('frontend/assets/js/plugins/countdown.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('frontend/assets/js/plugins/nice-select.min.js') }}"></script>
    <!-- jquery UI JS -->
    <script src="{{ asset('frontend/assets/js/plugins/jqueryui.min.js') }}"></script>
    <!-- Image zoom JS -->
    <script src="{{ asset('frontend/assets/js/plugins/image-zoom.min.js') }}"></script>
    <!-- Imagesloaded JS -->
    <script src="{{ asset('frontend/assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Instagram feed JS -->
    <script src="{{ asset('frontend/assets/js/plugins/instagramfeed.min.js') }}"></script>
    <!-- mailchimp active js -->
    <script src="{{ asset('frontend/assets/js/plugins/ajaxchimp.js') }}"></script>
    <!-- contact form dynamic js -->
    <script src="{{ asset('frontend/assets/js/plugins/ajax-mail.js') }}"></script>
    <!-- google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>
    <!-- google map active js -->
    <script src="{{ asset('frontend/assets/js/plugins/google-map.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>