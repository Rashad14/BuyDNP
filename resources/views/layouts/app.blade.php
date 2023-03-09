<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quarter - Real Estate HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="{{asset('panel/img/favicon.png')}}" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="{{asset('panel/css/font-icons.css')}}">
    <!-- plugins css -->
    <link rel="stylesheet" href="{{asset('panel/css/plugins.css')}}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('panel/css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('panel/css/responsive.css')}}">

    @yield('css')
</head>

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">
    <!-- HEADER AREA START (header-3) -->
    @include('layouts.partials.header')
    <!-- HEADER AREA END -->

    <!-- MOBILE MENU START -->
    @include('layouts.partials.mobile_menu')
    <!-- MOBILE MENU END -->

    <!-- Utilize Cart Menu Start -->
    @include('layouts.partials.utilize_card_menu')
    <!-- Utilize Cart Menu End -->

    <!-- Utilize Mobile Menu Start -->
    @include('layouts.partials.utilize_mobile_menu')
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

    @yield('content')

    <!-- CALL TO ACTION START (call-to-action-6) -->
    @include('layouts.partials.call_to_action')
    <!-- CALL TO ACTION END -->

    <!-- FOOTER AREA START -->
    @include('layouts.partials.footer')
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Quick View Modal) -->
    @include('layouts.partials.modal_quick_view')
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    @include('layouts.partials.modal_add_to_card')
    <!-- MODAL AREA END -->

    <!-- MODAL AREA START (Wishlist Modal) -->
    @include('layouts.partials.modal_wishlist')
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- All JS Plugins -->
<script src="{{asset('panel/js/plugins.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('panel/js/main.js')}}"></script>

@yield('js')

</body>

</html>
