@extends('user.dashboard.layout.user_app')
@section('title', 'Favourite Properties')
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
@include('layouts.navbar')
@php
    $bodyClass = 'inner-pages maxw1600 m0a dashboard-bd';
@endphp

@section('content')
<section class="user-page section-padding pt-5">
    <div class="container-fluid d-flex justify-content-center align-items-center flex-column">
        <div class="row w-100">
            @include('user.dashboard.layout.menu')
            <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                <div class="white-box">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <h3 class="text-center">Your Favourite Properties</h3>

                    @if ($favouriteProperties->isEmpty())
                        <p class="text-center">No favourite properties found.</p>
                    @else
                        <div class="notification-list">
                            @foreach ($favouriteProperties as $favourite)
                                <div class="notification-item">
                                    <div class="notification-header d-flex justify-content-between align-items-center">
                                        <div>
                                            <strong>Property:</strong> {{ $favourite->room->name }}
                                            <span class="notification-date">{{ \Carbon\Carbon::parse($favourite->created_at)->format('d M, Y') }}</span>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p><strong>Location:</strong> {{ $favourite->room->location }}</p>
                                        <p><strong>Price:</strong> ₫{{ number_format($favourite->room->price, 2) }}</p>
                                    </div>
                                    <div class="btn-container">
                                        <!-- Nút Delete -->
                                        <form action="{{ route('favourites.destroy', $favourite->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to remove this property?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete btn-sm">Remove</button>
                                        </form>
                                         <!-- Nút Thanh Toán -->
                                         <form action="{{ route('payments.create') }}" method="GET">
                                            @csrf
                                            <input type="hidden" name="property_id" value="{{ $favourite->room->room_id }}">
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <button type="submit" class="btn btn-success btn-sm">Pay Now</button>
                                        </form>
                                    </div>
                                </div>
                                
                            @endforeach
                            @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        </div>
                    @endif
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