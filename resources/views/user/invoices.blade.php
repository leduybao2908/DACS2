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
    <link rel="stylesheet" href="css/invoice.css">
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
                                    <a href="payment-method.html">
                                        <i class="fas fa-credit-card mr-3"></i>Payments
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="invoice.html">
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
                <!-- Print Button -->
                <div class="print-button-container">
                    <a href="javascript:window.print()" class="print-button">Print this invoice</a>
                </div>
                <div class="invoice mb-0">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <div class="row p-5 the-five">
                                <div class="col-md-6">
                                    <img src="images/logo.svg" width="80" alt="Logo">
                                </div>

                                <div class="col-md-6 text-right">
                                    <p class="font-weight-bold mb-1">Invoice #550</p>
                                    <p class="text-muted">Due to: 4 Jan, 2020</p>
                                </div>
                            </div>

                            <hr class="my-5">

                            <div class="row pb-5 p-5 the-five">
                                <div class="col-md-6">
                                    <h3 class="font-weight-bold mb-4">Invoice To</h3>
                                    <p class="mb-0 font-weight-bold">Carls Jhons</p>
                                    <p class="mb-0">Acme Inc</p>
                                    <p class="mb-0">Est St, 77 - Central Park, NYC</p>
                                    <p class="mb-0">6781 45P</p>
                                </div>

                                <div class="col-md-6 text-right">
                                    <h3 class="font-weight-bold mb-4">Payment Details</h3>
                                    <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                                    <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                                    <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                                    <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                                </div>
                            </div>

                            <div class="row p-5 the-five">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">Price</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">VAT (10%)</th>
                                                <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Standard Plan</td>
                                                <td>$40</td>
                                                <td>$7.55</td>
                                                <td>$47.55</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                                <div class="py-3 px-5 text-left">
                                    <div class="mb-2">Grand Total</div>
                                    <div class="h2 font-weight-light">$42.79</div>
                                </div>

                                <div class="py-3 px-5 text-right">
                                    <div class="mb-2">Discount</div>
                                    <div class="h2 font-weight-light">10%</div>
                                </div>

                                <div class="py-3 px-5 text-left">
                                    <div class="mb-2">Sub - Total</div>
                                    <div class="h2 font-weight-light">$47.55</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
