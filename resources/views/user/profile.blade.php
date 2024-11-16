@extends('user.dashboard.layout.user_app')
@section('title','User Profile')
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

@section('content')
 <!-- START SECTION USER PROFILE -->
 
 <section class="user-page section-padding pt-5">
    <div class="container-fluid">
        <div class="row">
            @include('user.dashboard.layout.menu')
            <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
               <div class="col-lg-12 mobile-dashbord dashbord">
                    
                </div>
                <div class="sidebar-widget author-widget2">
                    <div class="author-box clearfix">
                        <img  src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : 'images/testimonials/ts-1.jpg' }}" alt="author-image" class="author__img">

                        <h4 class="author__title">{{ Auth::user()->name }}</h4>
                        <p class="author__meta">{{ Auth::user()->role }}</p>
                    </div>
                    <ul class="author__contact">
                        
                        <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">{{ Auth::user()->phone_number }}</a></li>
                        <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">{{ Auth::user()->email }}</a></li>
                    </ul>
                    <div class="agent-contact-form-sidebar">
                        <h4>Update Profile</h4>
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" placeholder="Full Name" required />
                            
                            <input type="email" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" placeholder="Email Address" required />
                            
                            <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', Auth::user()->phone_number) }}" placeholder="Phone Number" />
                            
                            <!-- File input for image upload -->
                            <input type="file" id="image_url" name="image_url" accept="image/*" />
                            
                            <input type="submit" class="multiple-send-message" value="Update Profile" />
                        </form>
                        
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

    <!-- MAIN JS -->
    <script src="js/script.js"></script>

    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });

    </script>
@endpush