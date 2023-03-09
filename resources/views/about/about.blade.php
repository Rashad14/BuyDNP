@extends('layouts.app')

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{asset('panel/img/bg/14.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">About Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-25--- pb-120 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{asset('panel/img/others/9.png')}}" alt="About Us Image">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-30">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color d-none">About Us</h6>
                            <h1 class="section-title">Your faithful partners Medical Goods</h1>
                            <p>Houzez allow you to design unlimited panels and real estate custom
                                forms to capture leads and keep record of all information</p>
                        </div>
                        <ul class="ltn__list-item-1 ltn__list-item-1-before--- clearfix">
                            <li><i class="fas fa-check-square"></i> Better security for patient privacy and information.</li>
                            <li><i class="fas fa-check-square"></i> More products at lower prices.</li>
                            <li><i class="fas fa-check-square"></i> connect customers with the power of eCommerce at all.</li>
                        </ul>
                        <div class="about-author-info-2 border-top mt-30 pt-20">
                            <ul>
                                <li>
                                    <div class="about-author-info-2-brief  d-flex">
                                        <div class="author-img">
                                            <img src="{{asset('panel/img/blog/author.jpg')}}" alt="#">
                                        </div>
                                        <div class="author-name-designation">
                                            <h4 class="mb-0">Jerry Henson</h4>
                                            <small>Medical Specialist</small>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-author-info-2-contact  d-flex">
                                        <div class="about-contact-icon d-flex align-self-center mr-10">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="about-author-info-2-contact-info">
                                            <small>Get Support</small>
                                            <h6 class="mb-0">123-456-789-10</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area pt-90 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h1 class="section-title">Core Features</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-apartment"></i></span> -->
                            <img src="{{asset('panel/img/icons/icon-img/24.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html">Free Delivery</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center active">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-park"></i></span> -->
                            <img src="{{asset('panel/img/icons/icon-img/25.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html">100% Cash Back</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-maps-and-location"></i></span> -->
                            <img src="{{asset('panel/img/icons/icon-img/26.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html">Quality Product</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center">
                        <div class="ltn__feature-icon">
                            <!-- <span><i class="flaticon-excavator"></i></span> -->
                            <img src="{{asset('panel/img/icons/icon-img/27.png')}}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4><a href="service-details.html">24/7 Support</a></h4>
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

    <!-- PROGRESS BAR AREA START -->
    <div class="ltn__progress-bar-area section-bg-1 pt-120 pb-10 mb-120 d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__progress-bar-wrap">
                        <div class="ltn__progress-bar-inner">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="ltn__progress-bar-item-2 text-center">
                                        <div class="progress" data-value='78'>
                                            <span class="progress-left">
                                                <span class="progress-bar border-primary"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-primary"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div class="progress-count">78<sup class="small">%</sup></div>
                                            </div>
                                        </div>
                                        <div class="ltn__progress-info">
                                            <h3>Project Done</h3>
                                            <p>Construction Simulator</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="ltn__progress-bar-item-2 text-center">
                                        <div class="progress" data-value='62'>
                                            <span class="progress-left">
                                                <span class="progress-bar border-danger"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-danger"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div class="progress-count">62<sup class="small">%</sup></div>
                                            </div>
                                        </div>
                                        <div class="ltn__progress-info">
                                            <h3>Country Cover</h3>
                                            <p>Construction Simulator</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="ltn__progress-bar-item-2 text-center">
                                        <div class="progress" data-value='50'>
                                            <span class="progress-left">
                                                <span class="progress-bar border-success"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-success"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div class="progress-count">50<sup class="small">%</sup></div>
                                            </div>
                                        </div>
                                        <div class="ltn__progress-info">
                                            <h3>Completed Co.</h3>
                                            <p>Construction Simulator</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <div class="ltn__progress-bar-item-2 text-center">
                                        <div class="progress" data-value='90'>
                                            <span class="progress-left">
                                                <span class="progress-bar border-warning"></span>
                                            </span>
                                            <span class="progress-right">
                                                <span class="progress-bar border-warning"></span>
                                            </span>
                                            <div class="progress-value">
                                                <div class="progress-count">90<sup class="small">%</sup></div>
                                            </div>
                                        </div>
                                        <div class="ltn__progress-info">
                                            <h3>Happy Clients</h3>
                                            <p>Construction Simulator</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PROGRESS BAR AREA END -->

    <!-- COUNTER UP AREA START -->
    <div class="ltn__counterup-area section-bg-1 bg-image bg-overlay-theme-black-80--- pt-115 pb-70" data-bs-bg="{{asset('panel/img/bg/30.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-center">
                        <div class="counter-icon">
                            <!-- <img src="img/icons/icon-img/2.png" alt="#">  -->
                            <i class="flaticon-add-user-1"></i>
                        </div>
                        <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Active Clients</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-center">
                        <div class="counter-icon">
                            <!-- <img src="img/icons/icon-img/3.png" alt="#">  -->
                            <i class="flaticon-dining-table-with-chairs"></i>
                        </div>
                        <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Cup Of Coffee</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-center">
                        <div class="counter-icon">
                            <!-- <img src="img/icons/icon-img/3.png" alt="#">  -->
                            <i class="flaticon-package"></i>
                        </div>
                        <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Get Rewards</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item text-center">
                        <div class="counter-icon">
                            <!-- <img src="img/icons/icon-img/3.png" alt="#">  -->
                            <i class="flaticon-maps-and-location"></i>
                        </div>
                        <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Country Cover</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COUNTER UP AREA END -->


    <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
    <div class="ltn__faq-area pt-115 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Some Questions</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="accordion_2">
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                    How to buy a product?
                                </h6>
                                <div id="faq-item-2-1" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true">
                                    How can i make refund from your website?
                                </h6>
                                <div id="faq-item-2-2" class="collapse show" data-bs-parent="#accordion_2">
                                    <div class="card-body">
                                        <div class="ltn__video-img alignleft">
                                            <img src="{{asset('panel/img/bg/17.jpg')}}" alt="video popup bg image">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----" href="https://www.youtube.com/embed/Cr4LFOgRGeo?autoplay=1&amp;showinfo=0"  data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque </p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                                    I am a new user. How should I start?
                                </h6>
                                <div id="faq-item-2-3" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-4" aria-expanded="false">
                                    Returns and refunds
                                </h6>
                                <div id="faq-item-2-4" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-5" aria-expanded="false">
                                    Are my details secured?
                                </h6>
                                <div id="faq-item-2-5" class="collapse" data-bs-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eleifend donec pretium vulputate sapien nec sagittis. Proin libero nunc consequat interdum. Condimentum lacinia quis vel eros donec ac.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <aside class="about-us-img-wrap about-img-right">
                        <img src="{{asset('panel/img/others/100.jpg')}}" alt="Banner Image">
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ AREA START -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">//  features  //</h6>
                        <h1 class="section-title">Why Choose Us<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <!-- <span><img src="img/icons/icon-img/21.png" alt="#"></span> -->
                                <span><i class="fas fa-hand-holding-medical"></i> </span>
                            </div>
                            <h3><a href="service-details.html">All Kind Brand</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <!-- <span><img src="img/icons/icon-img/22.png" alt="#"></span> -->
                                <span><i class="fas fa-microscope"></i> </span>
                            </div>
                            <h3><a href="service-details.html">Curated Products</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <!-- <span><img src="img/icons/icon-img/23.png" alt="#"></span> -->
                                <span><i class="fas fa-stethoscope"></i> </span>
                            </div>
                            <h3><a href="service-details.html">Pesticide Free Goods</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Lorem ipsum dolor sit ame it, consectetur adipisicing elit, sed do eiusmod te mp or incididunt ut labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->

@endsection
