@extends('layouts.app')

@section('content')
    <!-- SLIDER AREA START (slider-3) -->
    @include('home.partials.slider_area')
    <!-- SLIDER AREA END -->

    <!-- PRODUCT TAB AREA START (product-item-3) -->
    @include('home.partials.our_products')
    <!-- PRODUCT TAB AREA END -->

    <!-- FEATURE AREA START ( Feature - 3) -->
    @include('home.partials.features_area')
    <!-- FEATURE AREA END -->

    <!-- ABOUT US AREA START -->
    @include('home.partials.trending_products')
    <!-- ABOUT US AREA END -->

    <!-- SMALL PRODUCT LIST AREA START -->
    @include('home.partials.featured_products')
    <!-- SMALL PRODUCT LIST AREA END -->

@endsection
