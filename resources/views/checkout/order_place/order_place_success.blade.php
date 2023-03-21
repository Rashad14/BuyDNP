@extends('layouts.app')

@section('content')
    <!-- LOGIN AREA START -->
    <div class="ltn__login-area mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="account-login-inner section-bg-1">
                        <form class="ltn__form-box contact-form-box">

                            @if (session('status') === 'order-placed')
                                <clear-cart></clear-cart>
                            @endif

                            <p class="text-center"> Thank you for your order! You can view your order details in the <a href="{{route('profile.edit')}}" class="text-green-600"><strong>Orders</strong></a> section of your profile.</p>
                            @if(session('order'))
                                <label>Order ID</label>
                                <input type="text" name="order_id" placeholder="Found in your order confirmation email." readonly value="#{{session('order')->uuid}}">
                            @endif
                            <div class="btn-wrapper mt-0 text-center">
                            <a class="btn theme-btn-1 btn-effect-1 text-uppercase" href="{{route('profile.edit')}}">View Order</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->
@endsection
