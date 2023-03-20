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
                                <h2
                                    class="text-center"
                                >{{ __('Order Placed Successfully.') }}</h2>
                            @endif
                            <p class="text-center"> To track your order please enter your Order ID in the box below and press the "Track Order" button. This was given to you on your receipt and in the confirmation email you should have received. </p>
                            <label>Order ID</label>
                            <input type="text" name="email" placeholder="Found in your order confirmation email." readonly value="{{$order}}">
                            <label>Billing email</label>
                            <input type="text" name="email" placeholder="Email you used during checkout." readonly>
                            <div class="btn-wrapper mt-0 text-center">
                                <a class="btn theme-btn-1 btn-effect-1 text-uppercase">View Order</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->
@endsection
