@extends('user.dashboard.layout.user_app')
@section('title','Payment Method')
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
                            <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
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
                <section class="payment-method notfound">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="tr-single-box">
                                <div class="tr-single-body">
                                    <div class="tr-single-header">
                                        <h4><i class="far fa-address-card pr-2"></i>Billing Information</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>State</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Address</label>
                                            <input type="text" class="form-control address mb-0">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Zip</label>
                                            <input type="text" class="form-control mb-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="tr-single-box">
                                <div class="tr-single-body">
                                    <div class="tr-single-header">
                                        <h4><i class="far fa-credit-card pr-2"></i>Payment Method</h4>
                                    </div>
                                    <!-- Paypal Option -->
                                    <div class="payment-card">
                                        <header class="payment-card-header cursor-pointer" data-toggle="collapse" data-target="#paypal" aria-expanded="true">
                                            <div class="payment-card-title flexbox">
                                                <h4>PayPal</h4>
                                            </div>
                                            <div class="pull-right">
                                                <img src="images/paypal.png" class="img-responsive" alt="">
                                            </div>
                                        </header>
                                        <div class="collapse" id="paypal" role="tablist" aria-expanded="false">
                                            <div class="payment-card-body">
                                                <div class="row mrg-bot-20">
                                                    <div class="col-sm-6">
                                                        <span class="custom-checkbox d-block font-12 mb-2">
                                                        <input type="checkbox" id="promo1">
                                                        <label for="promo1"></label>
                                                        Have a promo code?
                                                        </span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-6 padd-top-10 text-right">
                                                        <label>Total Order</label>
                                                        <h2 class="mrg-0"><span class="theme-cl">$</span>950</h2>
                                                    </div>
                                                    <div class="col-sm-12 bt-1 padd-top-15 pt-3">
                                                        <span class="custom-checkbox d-block font-12 mb-3">
                                                        <input type="checkbox" id="privacy">
                                                        <label for="privacy"></label>
                                                        By ordering you are agreeing to our <a href="#" class="theme-cl">Privacy policy</a>.
                                                        </span>
                                                        <button type="submit" class="btn btn-m btn-success">Checkout</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Debit card option -->
                                    <div class="payment-card mb-0">
                                        <header class="payment-card-header cursor-pointer" data-toggle="collapse" data-target="#debit-credit" aria-expanded="true">
                                            <div class="payment-card-title flexbox">
                                                <h4>Credit / Debit Card</h4>
                                            </div>
                                            <div class="pull-right">
                                                <img src="images/credit.png" class="img-responsive" alt="">
                                            </div>
                                        </header>
                                        <div class="collapse" id="debit-credit" role="tablist" aria-expanded="false">
                                            <div class="payment-card-body">
                                                <div class="row mrg-bot-20">
                                                    <div class="col-sm-6">
                                                        <label>Card Holder Name</label>
                                                        <input type="text" class="form-control" placeholder="Chris Seail">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label>Card No.</label>
                                                        <input type="email" class="form-control" placeholder="1800 5785 6758 2458">
                                                    </div>
                                                </div>
                                                <div class="row mrg-bot-20">
                                                    <div class="col-sm-4 col-md-4">
                                                        <label>Expire Month</label>
                                                        <input type="text" class="form-control" placeholder="09">
                                                    </div>
                                                    <div class="col-sm-4 col-md-4">
                                                        <label>Expire Year</label>
                                                        <input type="email" class="form-control" placeholder="2022">
                                                    </div>
                                                    <div class="col-sm-4 col-md-4">
                                                        <label>CCV Code</label>
                                                        <input type="email" class="form-control" placeholder="258">
                                                    </div>
                                                </div>
                                                <div class="row mrg-bot-20">
                                                    <div class="col-sm-7">
                                                        <span class="custom-checkbox d-block font-12 mb-2">
                                                        <input type="checkbox" id="promo">
                                                        <label for="promo"></label>
                                                        Have a promo code?
                                                        </span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-sm-5 padd-top-10 text-right">
                                                        <label>Total Order</label>
                                                        <h2 class="mrg-0"><span class="theme-cl">$</span>987</h2>
                                                    </div>
                                                    <div class="col-sm-12 bt-1 padd-top-15 pt-3">
                                                        <span class="custom-checkbox d-block font-12 mb-3">
                                                        <input type="checkbox" id="privacy1">
                                                        <label for="privacy1"></label>
                                                        By ordering you are agreeing to our <a href="#" class="theme-cl">Privacy policy</a>.
                                                        </span>
                                                        <button type="submit" class="btn btn-m btn-success">Checkout</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tr-single-box mb-0">
                            <div class="tr-single-body">
                                <div class="tr-single-header">
                                    <h4><i class="fa fa-star-o"></i>Booking Summary</h4>
                                </div>
                                <div class="booking-price-detail side-list no-border mb-3">
                                    <h5>Reservation Details</h5>
                                    <ul>
                                        <li>Date<strong class="pull-right">18 Jun 2018</strong></li>
                                        <li>Time<strong class="pull-right">9pm 10pm</strong></li>
                                        <li>From<strong class="pull-right">10 jan 2019</strong></li>
                                    </ul>
                                </div>
                                <div class="booking-price-detail side-list no-border">
                                    <h5>Pricing Details</h5>
                                    <ul>
                                        <li>Dining<strong class="pull-right">$150</strong></li>
                                        <li>Reservation<strong class="pull-right">$60</strong></li>
                                        <li>Tax<strong class="pull-right">$53</strong></li>
                                        <li class="red pb-0">Total Cost<strong class="pull-right">$263</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END SECTION PAYMENT-METHOD -->
            </div>
        </div>
    </div>
</section>
<!-- END SECTION USER PROFILE -->
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