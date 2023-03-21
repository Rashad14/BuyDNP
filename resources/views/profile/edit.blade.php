@extends('layouts.app')

@section('css')
    <style>
        .error{
            color: green;
            margin-top: 20px;
        }
    </style>
@endsection

@section('content')

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_1_1">Dashboard <i class="fas fa-home"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_1_2">Orders <i class="fas fa-file-alt"></i></a>
{{--                                            <a data-bs-toggle="tab" href="#liton_tab_1_3">Downloads <i class="fas fa-arrow-down"></i></a>--}}
                                            <a data-bs-toggle="tab" href="#liton_tab_1_4">Address <i class="fas fa-map-marker-alt"></i></a>
                                            <a data-bs-toggle="tab" href="#liton_tab_1_5">Account Details <i class="fas fa-user"></i></a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{route('logout')}}"
                                                   onclick="event.preventDefault();
                                                                         this.closest('form').submit();">
                                                    {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_1_1">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong>{{$user->name}}</strong> </p>

                                                <p>From your account dashboard you can view your <span>recent orders</span>, manage your <span>shipping and billing addresses</span>, and <span>edit your password and account details</span>.</p>
                                            </div>
                                        </div>

                                        @include('profile.partials.orders')

                                        @include('profile.partials.downloads')

                                        @include('profile.partials.addresses')

                                        <div class="tab-pane fade" id="liton_tab_1_5">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>The following addresses will be used on the checkout page by default.</p>
                                                <div class="ltn__form-box">

                                                    @include('profile.partials.update-profile-information-form')

                                                    @include('profile.partials.update-password-form')

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->
@endsection
