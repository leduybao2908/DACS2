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
        <section class="user-page section-padding pt-55">
            <div class="container-fluid">
                <div class="row">
                   @include('user.dashboard.layout.menu')
                    <div class="col-lg-7 col-md-6 col-xs-6 pl-3 offset-lg-1 offset-md-3">
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
                                            <a href="payment-method.html">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">
                                                <i class="fas fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="change-password.html">
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
                        <div class="my-address">
                            <h3 class="heading pt-0">Change Password</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group name">
                                            <label>Current Password</label>
                                            <input type="password" name="current-password" class="form-control" placeholder="Current Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group email">
                                            <label>New Password</label>
                                            <input type="password" name="new-password" class="form-control" placeholder="New Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group subject">
                                            <label>Confirm New Password</label>
                                            <input type="password" name="confirm-new-password" class="form-control" placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="send-btn mt-2">
                                            <button type="submit" class="btn btn-common">Send Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
