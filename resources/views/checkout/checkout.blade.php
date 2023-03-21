@extends('layouts.app')

@section('content')
    <!-- WISHLIST AREA START -->
    <div class="ltn__checkout-area mb-105">
        <div class="container">
            <form action="{{route('order.place')}}" method="POST">
                @csrf
                <div class="row">

{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}

                    @auth()
                        @if($address)
                            <p class="alert-warning p-4">To make things easier for you, we have automatically filled in your address information from your last order.
                                <br>If this information is different from what you need for your current order, please feel free to update it.</p>
                        @endif
                    @else
                        <p class="alert-danger p-4">You will be asked to <a href="{{ route('login') }}"><strong>Log in</strong></a> before placing your order.</p>
                    @endif

                    @include('checkout.partials.billing_details')

                    @include('checkout.partials.payment_method')

                    @include('checkout.partials.cart_totals')

                </div>
            </form>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
@endsection
