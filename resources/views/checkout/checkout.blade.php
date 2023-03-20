@extends('layouts.app')

@section('content')
    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <form action="{{route('order.place')}}" method="POST">
                @csrf
                <div class="row">

                    @include('checkout.partials.billing_details')

                    @include('checkout.partials.payment_method')

                    @include('checkout.partials.cart_totals')

                </div>
            </form>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
@endsection
