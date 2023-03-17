<header class="ltn__header-area ltn__header-3 section-bg-6---">
    <!-- ltn__header-top-area start -->
    <div class="ltn__header-top-area border-bottom top-area-color-white---">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="ltn__top-bar-menu">
                        <ul>
                            <li><a href="mailto:buydnpUK@proton.me"><i class="icon-mail"></i>buydnpUK@proton.me</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="top-bar-right text-end">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li>
                                    <!-- ltn__language-menu -->
                                    <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                        <ul>
                                            <li><a href="javascript:void(0)" class="dropdown-toggle"><span class="active-currency">English</span></a>
                                                <ul class="d-none">
                                                    <li><a href="#">Arabic</a></li>
                                                    <li><a href="#">Bengali</a></li>
                                                    <li><a href="#">Chinese</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Hindi</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <!-- ltn__social-media -->
                                    <div class="ltn__social-media">
                                        <ul>
                                            <li><a href="javascript:void(0)" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="javascript:void(0)" title="Twitter"><i class="fab fa-twitter"></i></a></li>

                                            <li><a href="javascript:void(0)" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="javascript:void(0)" title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-top-area end -->
    <!-- ltn__header-middle-area start -->
    <div class="ltn__header-middle-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="site-logo">
                        <a href="{{route('home')}}"><img src="{{asset('panel/img/logo.png')}}" alt="Logo"></a>
                    </div>
                </div>
                <div class="col header-contact-serarch-column d-none d-xl-block">
                    <div class="header-contact-search">
                        <!-- header-feature-item -->
                        <div class="header-feature-item d-none">
                            <div class="header-feature-icon">
                                <i class="icon-phone"></i>
                            </div>
                            <div class="header-feature-info">
                                <h6>Phone</h6>
                                <p><a href="tel:0123456789">+0123-456-789</a></p>
                            </div>
                        </div>
                        <!-- header-search-2 -->
                        <div class="header-search-2">
                            <form id="#123" method="get"  action="#">
                                <input type="text" name="search" value="" placeholder="Search here..."/>
                                <button type="submit">
                                    <span><i class="icon-search"></i></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- header-options -->
                    <div class="ltn__header-options">
                        <ul>
                            <li class="d-none">
                                <!-- ltn__currency-menu -->
                                <div class="ltn__drop-menu ltn__currency-menu">
                                    <ul>
                                        <li><a href="#" class="dropdown-toggle"><span class="active-currency">USD</span></a>
                                            <ul>
                                                <li><a href="login.html">USD - US Dollar</a></li>
                                                <li><a href="wishlist.html">CAD - Canada Dollar</a></li>
                                                <li><a href="register.html">EUR - Euro</a></li>
                                                <li><a href="account.html">GBP - British Pound</a></li>
                                                <li><a href="wishlist.html">INR - Indian Rupee</a></li>
                                                <li><a href="wishlist.html">BDT - Bangladesh Taka</a></li>
                                                <li><a href="wishlist.html">JPY - Japan Yen</a></li>
                                                <li><a href="wishlist.html">AUD - Australian Dollar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="d-none--- ">
                                <!-- header-search-1 -->
                                <div class="header-search-wrap d-block d-xl-none">
                                    <div class="header-search-1">
                                        <div class="search-icon">
                                            <i class="icon-search  for-search-show"></i>
                                            <i class="icon-cancel  for-search-close"></i>
                                        </div>
                                    </div>
                                    <div class="header-search-1-form">
                                        <form id="#" method="get"  action="#">
                                            <input type="text" name="search" value="" placeholder="Search here..."/>
                                            <button type="submit">
                                                <span><i class="icon-search"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none---">
                                <!-- user-menu -->
                                @include('layouts.partials.user_menu')
                            </li>
                            <li>
                                <!-- mini-cart 2 -->
                                @include('layouts.partials.mini_cart')
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ltn__header-middle-area end -->

    <!-- MOBILE MENU START -->
    @include('layouts.partials.mobile_menu')
    <!-- MOBILE MENU END -->

    <!-- header-bottom-area start -->
    <div class="header-bottom-area ltn__border-top--- ltn__header-sticky  ltn__sticky-bg-white ltn__primary-bg---- menu-color-white---- d-none--- d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 align-self-center">
                    <!-- CATEGORY-MENU-LIST START -->
                    <div class="ltn__category-menu-wrap ltn__category-dropdown-hide ltn__category-menu-with-header-menu">
                        <div class="ltn__category-menu-title">
                            <h2 class="section-bg-1--- ltn__secondary-bg text-color-white">categories</h2>
                        </div>
                        <div class="ltn__category-menu-toggle ltn__one-line-active">
                            @include('home.partials.categories')
                        </div>
                    </div>
                    <!-- END CATEGORY-MENU-LIST -->
                </div>
                <div class="col-lg-7">
                    <div class="col--- header-menu-column justify-content-center---">
                        <div class="header-menu header-menu-2 text-start">
                            @include('layouts.partials.nav')
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 align-self-center d-none d-xl-block">
                    <div class="header-contact-info">
                        <a href="{{route('wishlist')}}" title="Wishlist" class="font-weight-6 ltn__primary-color font-size-16">
                            <utilize-wishlist></utilize-wishlist>
                            Wishlist
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom-area end -->
</header>
