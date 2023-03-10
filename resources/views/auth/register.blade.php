@extends('layouts.app')

@section('css')
    <style>
        .error{
            color: red;
            font-size: 12px;
        }
    </style>
@endsection

@section('content')

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="{{asset('panel/img/bg/14.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Account</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- LOGIN AREA START (Register) -->
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h1 class="section-title">Register <br>Your Account</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br>
                            Sit aliquid,  Non distinctio vel iste.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form class="ltn__form-box contact-form-box" method="POST" action="{{ route('register') }}">
                            @csrf

                            <small class="error">{!! implode('', $errors->get('name')) !!}</small>
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Name*" required autofocus autocomplete="name" />
                            <small class="error">{!! implode('', $errors->get('email')) !!}</small>
                            <input type="email" name="email" value="{{old('email')}}" placeholder="Email*" required autocomplete="username" />
                            <small class="error">{!! implode('', $errors->get('password')) !!}</small>
                            <input        type="password"
                                          name="password"
                                          placeholder="Password*"
                                          required autocomplete="new-password" />

                            <small class="error">{!! implode('', $errors->get('password_confirmation')) !!}</small>
                            <input        type="password"
                                          placeholder="Password Confirmation*"
                                          name="password_confirmation" required autocomplete="new-password" />

                            <label class="checkbox-inline">
                                <input type="checkbox" value="">
                                I consent to Herboil processing my personal data in order to send personalized marketing material in accordance with the consent form and the privacy policy.
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="">
                                By clicking "create account", I consent to the privacy policy.
                            </label>
                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">CREATE ACCOUNT</button>
                            </div>
                        </form>
                        <div class="by-agree text-center">
                            <p>By creating an account, you agree to our:</p>
                            <p><a href="#">TERMS OF CONDITIONS  &nbsp; &nbsp; | &nbsp; &nbsp;  PRIVACY POLICY</a></p>
                            <div class="go-to-btn mt-50">
                                <a href="{{route('login')}}">ALREADY HAVE AN ACCOUNT ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGIN AREA END -->
@endsection
