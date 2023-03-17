@extends('layouts.app')

@section('content')

    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('shop.partials.shop_options')

                    <div class="tab-content">

                        @include('shop.partials.product_grid')

                        @include('shop.partials.product_list')

                    </div>

                    @include('shop.partials.pagination_area')

                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
@endsection
