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
            <h1>Register</h1>
            <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Register</h2>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->
<x-guest-layout>

    <div id="login">
        <div class="login">
            <form method="POST" action="{{ route('register') }}" autocomplete="off">
                @csrf
                <!-- Name -->
                <div class="form-group">
                    <label>Your Name</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
                    <i class="ti-user"></i>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
    
                <!-- Email -->
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                    <i class="icon_mail_alt"></i>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
    
                <!-- Password -->
                <div class="form-group">
                    <label>Your Password</label>
                    <input class="form-control" type="password" name="password" id="password1" required>
                    <i class="icon_lock_alt"></i>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
    
                <!-- Confirm Password -->
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input class="form-control" type="password" name="password_confirmation" id="password2" required>
                    <i class="icon_lock_alt"></i>
                </div>
    
                <!-- Role Selection -->
                <div class="form-group wide-select">
                    <label>Select Your Role</label>
                    <select class="form-control" name="role" required>
                        <option value="" disabled selected>Select Role</option>
                        <option value="tenant">Tenant</option>
                        <option value="landlord">Landlord</option>
                        
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
                </div>
    
                <div id="pass-info" class="clearfix"></div>
    
                <!-- Submit Button -->
                <button type="submit" class="btn_1 rounded full-width add_top_30">Register Now!</button>
    
                <!-- Login Link -->
                <div class="text-center add_top_10">
                    Already have an account? <strong><a href="{{ route('login') }}">Sign In</a></strong>
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