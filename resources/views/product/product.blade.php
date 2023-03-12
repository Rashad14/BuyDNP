@extends('layouts.app')

@section('content')

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    @include('product.partials.shop_details')
                    <!-- Shop Tab Start -->
                    @include('product.partials.shop_details_tab_inner')
                    <!-- Shop Tab End -->
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                        <!-- Top Rated Product Widget -->
                        @include('product.partials.top_rated_product_widget')
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="{{asset('panel/img/banner/2.jpg')}}" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- PRODUCT SLIDER AREA START -->
    @include('product.partials.product_slider')
    <!-- PRODUCT SLIDER AREA END -->

@endsection
