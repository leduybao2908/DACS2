@extends('user.dashboard.layout.user_app')
@section('title', 'Payment Method')
@push('styles')
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/dashbord-mobile-menu.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
@endpush
@php
    $bodyClass = 'inner-pages maxw1600 m0a dashboard-bd';
@endphp
@include('layouts.navbar')  
@section('content')
    <!-- START SECTION USER PROFILE -->

    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row">
                @include('user.dashboard.layout.menu')
                <div class="col-lg-9 col-md-12 col-xs-12 py-0 pl-0 user-dash2">
                    <div class="col-lg-12 mobile-dashbord dashbord">
                        <div class="dashboard_navigationbar dashxl">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i>
                                    Dashboard Navigation</button>
                                <ul id="myDropdown" class="dropdown-content">
                                    <li>
                                        <a href="dashboard.html">
                                            <i class="fa fa-map-marker mr-3"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="fa fa-user mr-3"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="my-listings.html">
                                            <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favorited-listings.html">
                                            <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-property.html">
                                            <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="payment-method.html">
                                            <i class="fas fa-credit-card mr-3"></i>Payments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html">
                                            <i class="fas fa-paste mr-3"></i>Invoices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.html">
                                            <i class="fa fa-lock mr-3"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- START SECTION PAYMENT-METHOD -->
                    <section class="payment-method section-padding" style="background-color: #f9f9f9; padding: 40px 0;">
                        <div class="container">
                            <h2 class="text-center" style="margin-bottom: 30px; font-size: 28px; color: #333;">Payment Method</h2>
                            
                            <div class="row" style="display: flex; justify-content: space-between; align-items: center;">
                                <!-- User Details -->
                                <div class="col-md-3" style="margin-right: 10px; margin-bottom: 10px;">
                                    <div style="background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        <h4 style="color: #444; margin-bottom: 10px;">User Information</h4>
                                        <p><strong>Name:</strong> {{ $user->name }}</p>
                                        <p><strong>Email:</strong> {{ $user->email }}</p>
                                        <p><strong>Phone:</strong> {{ $user->phone_number }}</p>
                                    </div>
                                </div>
                                
                                <!-- Room Details -->
                                <div class="col-md-3" style="margin-right: 10px; margin-bottom: 10px;">
                                    <div style="background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        <h4 style="color: #444; margin-bottom: 10px;">Room Information</h4>
                                        <p><strong>Room Name:</strong> {{ $property->title }}</p>
                                        <p><strong>Location:</strong> {{ $property->location }}</p>
                                        <p><strong>Price:</strong> ₫{{ number_format($property->price, 2) }}</p>
                                    </div>
                                </div>
                    
                                <!-- Owner Details -->
                                <div class="col-md-3" style="margin-bottom: 10px;">
                                    <div style="background: #fff; padding: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        <h4 style="color: #444; margin-bottom: 10px;">Owner Information</h4>
                                        <p><strong>Name:</strong> {{ $owner->name }}</p>
                                        <p><strong>Email:</strong> {{ $owner->email }}</p>
                                        <p><strong>Phone:</strong> {{ $owner->phone_number }}</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Payment Form -->
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                        <h4 class="text-center" style="margin-bottom: 20px; color: #444;">Make Payment</h4>
                                        
                                        @if($qrLink)
                                            <div class="text-center" style="margin-bottom: 20px;">
                                                <img src="<?=$qrLink->link;?>" alt="QR Code" style="max-width: 200px; border: 1px solid #ddd; padding: 10px; border-radius: 8px;">
                                                <p style="margin-top: 10px; color: #666;">Scan the QR code to complete your payment.</p>
                                            </div>
                                        @else
                                            <p class="text-center" style="color: red;">Failed to generate QR Code. Please try again.</p>
                                        @endif
                            
                                        <form action="" method="POST">
                                            @csrf
                                            <input type="hidden" name="property_id" value="{{ $property->id }}">
                                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            <input type="hidden" name="owner_id" value="{{ $owner->id }}">
                                            <button type="submit" class="btn btn-success btn-lg btn-block" 
                                                style="background-color: #28a745; border: none; font-size: 18px; padding: 12px 0; border-radius: 5px;">Pay Now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
    <!-- END SECTION USER PROFILE -->

    <style>
.payment-method {
    background-color: #f9f9f9;
    padding: 40px 0;
}

.payment-method h2 {
    margin-bottom: 30px;
    font-size: 28px;
    color: #333;
}

.payment-method .row {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.payment-method .col-md-3 {
    margin-bottom: 20px;
}

.payment-method .col-md-3 > div {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.payment-method h4 {
    color: #444;
    margin-bottom: 15px;
}

.payment-method .btn {
    background-color: #28a745;
    border: none;
    font-size: 18px;
    padding: 12px 0;
    border-radius: 5px;
}

    </style>
@endsection





@push('scripts')
    <!-- ARCHIVES JS -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mmenu.min.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/slick2.js"></script>
    <script src="js/fitvids.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/search.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/ajaxchimp.min.js"></script>
    <script src="js/newsletter.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/searched.js"></script>
    <script src="js/dashbord-mobile-menu.js"></script>
    <script src="js/forms-2.js"></script>
    <script src="js/color-switcher.js"></script>
    <script src="js/dropzone.js"></script>

    <!-- MAIN JS -->
    <script src="js/script.js"></script>

    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });
    </script>
@endpush
