@extends('user.dashboard.layout.user_app')
@section('title','Add Property')
@push('styles')
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <!-- ARCHIVES CSS -->
  <link rel="stylesheet" href="{{ asset('css/search.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dashbord-mobile-menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">
@endpush

@php
    $bodyClass = 'inner-pages maxw1600 m0a dashboard-bd';
@endphp


@section('content')
<section class="user-page section-padding pt-5">
    <div class="container-fluid">
        <div class="row">
           @include('user.dashboard.layout.menu')
            <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
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
                                    <a class="active" href="add-property.html">
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
                <div class="single-add-property">
                    <h3>Property Description and Price</h3>
                    <div class="property-form-group">
                        <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="title">Property Title</label>
                                        <input type="text" name="title" id="title" placeholder="Enter your property title" required>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="description">Property Description</label>
                                        <textarea id="description" name="description" placeholder="Describe your property" required></textarea>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" placeholder="USD" id="price" required>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <p class="no-mb last">
                                        <label for="area">Area</label>
                                        <input type="text" name="area" placeholder="Sqft" id="area" required>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        <label for="location">Location</label>
                                        <input type="text" name="location" id="location" placeholder="Enter location" required>
                                    </p>
                                </div>
                            </div>
                
                            <div class="single-add-property">
                                <h3>Property Media</h3>
                                <div class="property-form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="file" name="images[]" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="submit-button">
                                <button type="submit" class="btn btn-primary">Add Room</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                
        </div>
    </div>
</section>
<!-- END SECTION USER PROFILE -->
@endsection





@push('scripts')
<!-- ARCHIVES JS -->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mmenu.min.js') }}"></script>
<script src="{{ asset('js/mmenu.js') }}"></script>
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/slick2.js') }}"></script>
<script src="{{ asset('js/fitvids.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
<script src="{{ asset('js/lightcase.js') }}"></script>
<script src="{{ asset('js/search.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/newsletter.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/searched.js') }}"></script>
<script src="{{ asset('js/dashbord-mobile-menu.js') }}"></script>
<script src="{{ asset('js/forms-2.js') }}"></script>
<script src="{{ asset('js/color-switcher.js') }}"></script>
<script src="{{ asset('js/dropzone.js') }}"></script>

<!-- MAIN JS -->
<script src="{{ asset('js/script.js') }}"></script>
<script>
    $(".dropzone").dropzone({
        dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
    });

</script>
<script>
    $(".header-user-name").on("click", function() {
        $(".header-user-menu ul").toggleClass("hu-menu-vis");
        $(this).toggleClass("hu-menu-visdec");
    });

</script>
@endpush