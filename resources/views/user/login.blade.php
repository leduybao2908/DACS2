@extends('layouts.app')
@section('title', 'Login')
@section('body-class', 'inner-pages hd-white')
@push('styles')
<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">


@section('content')
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Login</h1>
            <h2><a href="index.html">Home </a> &nbsp;/&nbsp; login</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->
<x-guest-layout>

    
    <div id="login">
        <div class="login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Social Login Links -->
                <div class="access_social">
                    <a href="{{ route('facebook.login') }}" class="social_bt facebook">Login with Facebook</a>
                    
                </div>
                
                <!-- Divider -->
                <div class="divider"><span>Or</span></div>
                
                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus>
                    <i class="icon_mail_alt"></i>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                    <i class="icon_lock_alt"></i>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="fl-wrap filter-tags clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        <div class="filter-tags-wrap">
                            <input id="check-b" type="checkbox" name="remember">
                            <label for="check-b">Remember me</label>
                        </div>
                    </div>
                    <div class="float-right mt-1">
                        @if (Route::has('password.request'))
                            <a id="forgot" href="{{ route('password.request') }}">Forgot Password?</a>
                        @endif
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn_1 rounded full-width">Login to Find Houses</button>

                <!-- Register Link -->
                <div class="text-center add_top_10">
                    New to Find Houses? <strong><a href="{{ route('register') }}">Sign up!</a></strong>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
@endsection

@endpush
@push('scripts')
<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">
    
@endpush