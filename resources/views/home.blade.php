@extends('layouts.app')
@section('title', 'Home Page')
@section('body-class', 'homepage-9 hp-6 homepage-1 mh')

@push('styles')
<link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{ asset('css/search.css') }}">
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
<link rel="stylesheet" href="{{ asset('css/aos2.css') }}">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">
<link rel="stylesheet" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/maps.css') }}">
<link rel="stylesheet" id="color" href="{{ asset('css/colors/pink.css') }}">
@endpush


@section('content')
@include('layouts.searchbar')



  <!-- START SECTION POPULAR PLACES -->
  <section class="feature-categories bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Popular </span>Places</h2>
            <p>Properties In Most Popular Places.</p>
        </div>
        <div class="row">

            @foreach ($featuredCities as $city)
            @if (!empty($city->city))  <!-- Kiểm tra xem thành phố có tồn tại không -->
                <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="small-category-2">
                        <div class="small-category-2-thumb">
                            <a href="{{ route('RoomCity',['city' => $city->city]) }}">
                               <img src="images/popular-places/{{ $city->city }}.jpg" alt="{{ $city->city }}"> 
                            </a>
                        </div>
                        <div class="sc-2-detail">
                            <h4 class="sc-jb-title">
                                <a href="{{ route('RoomCity',['city' => $city->city]) }}">{{ $city->city }}</a>
                            </h4>
                            <span>{{ $city->total_rooms }} Properties</span>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        
        </div> 
        <!-- /row -->
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->

 <!-- START SECTION FEATURED PROPERTIES -->
<!-- home.blade.php -->
<section class="featured portfolio bg-white-2 rec-pro full-l">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Featured </span>Properties</h2>
            <p>These are our featured properties</p>
        </div>
        <div class="row portfolio-items">
            @foreach($featuredRooms as $room)
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                <div class="project-single" data-aos="fade-right">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <a href="{{ route('rooms.show', $room->room_id) }}" class="homes-img">
                                <div class="homes-tag button alt sale">For Rent</div>
                                @if ($room->images)
                                    <img src="data:image/png;base64,{{$room->first_image}}" alt="home-1" class="img-responsive">
                                @else
                                    <img src="default-image.jpg" alt="default" class="img-responsive">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="homes-content">
                        <h3><a href="{{ route('rooms.show', $room->room_id) }}">{{ $room->title }}</a></h3>
                        <p class="homes-address mb-3">
                            <a href="{{ route('rooms.show', $room->room_id) }}">
                                <i class="fa fa-map-marker"></i><span>{{ $room->location }}</span>
                            </a>
                            <br>
                            <a href=""><i class="fa fa-arrows-alt"></i><span>{{ $room->area }} m²</span></a>
                            <br>
                            <a href=""><i class="fa fa-home"></i><span>{{ $room->type }}</span></a>
                            <br>
                            <a href=""><i class="fas fa-city"></i><span>{{ $room->city }}</span></a>
                        </p>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                                <a href="{{ route('rooms.show', $room->room_id) }}">₫{{ number_format($room->price) }}</a>
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star"></i> {{ number_format($room->avg_rating, 1) }} ({{ $room->reviews_count }} reviews)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="bg-all">
            <a href="{{ route('all-rooms') }}" class="btn btn-outline-light">View More</a>
        </div>
    </div>
</section>


<!-- END SECTION FEATURED PROPERTIES -->

 <!-- START SECTION WHY CHOOSE US -->
 <section class="how-it-works bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Why </span>Choose Us</h2>
            <p>We provide full service at every step.</p>
        </div>
        <div class="row service-1">
            <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                <div class="serv-flex">
                    <div class="art-1 img-13">
                        <img src="images/icons/icon-4.svg" alt="">
                        <h3>Wide Renge Of Properties</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">We are supporting transactions throughout Vietnam.

                        </p>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <img src="images/icons/icon-5.svg" alt="">
                        <h3>Trusted by thousands</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">With many future cooperation strategies.

                        </p>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                <div class="serv-flex arrow">
                    <div class="art-1 img-15">
                        <img src="images/icons/icon-6.svg" alt="">
                        <h3>Financing made easy</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">Can pay online quickly.

                        </p>
                    </div>
                </div>
            </article>
            <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                <div class="serv-flex">
                    <div class="art-1 img-14">
                        <img src="images/icons/icon-15.svg" alt="">
                        <h3>We are here near you</h3>
                    </div>
                    <div class="service-text-p">
                        <p class="text-center">470 Đ. Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, Đà Nẵng, Việt Nam</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->        



<!-- START SECTION AGENTS -->
<section class="team bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Meet Our </span>Agents</h2>
            <p>Our Agents are here to help you</p>
        </div>
        <div class="row team-all" style="display: flex; justify-content: center; align-items: center;">
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-6.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="https://www.facebook.com/le.quangchinh.589" class="facebook"><i class="fa fa-facebook"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Quang Chính</a></h3>
                        <div class="designation">Member</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="350">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-7.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="https://www.facebook.com/profile.php?id=100037310812731" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Duy Bảo</a></h3>
                        <div class="designation">Leader</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END SECTION AGENTS -->

<!-- STAR SECTION PARTNERS -->
<div class="partners bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Our </span>Partners</h2>
            <p>The Companies That Represent Us.</p>
        </div>
        <div class="owl-carousel style2">
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
            <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
        </div>
    </div>
</div>
<!-- END SECTION PARTNERS -->

<!--register form -->
<div class="login-and-register-form modal">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
            <div class="soc-log fl-wrap">
                <p>Login</p>
                <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
            </div>
            <div class="log-separator fl-wrap"><span>Or</span></div>
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1">Login</a></li>
                    <li><a href="#tab-2">Register</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-contents">
                        <div class="custom-form">
                            <form method="post" name="registerform">
                                <label>Username or Email Address * </label>
                                <input name="email" type="text" onClick="this.select()" value="">
                                <label>Password * </label>
                                <input name="password" type="password" onClick="this.select()" value="">
                                <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                    <label>First Name * </label>
                                    <input name="name" type="text" onClick="this.select()" value="">
                                    <label>Second Name *</label>
                                    <input name="name2" type="text" onClick="this.select()" value="">
                                    <label>Email Address *</label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password *</label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->

<!-- START PRELOADER -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>
<!-- END PRELOADER -->
@endsection
@push('scripts')
    <!-- ARCHIVES JS -->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/rangeSlider.js') }}"></script>
<script src="{{ asset('js/tether.min.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/mmenu.min.js') }}"></script>
<script src="{{ asset('js/mmenu.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/aos2.js') }}"></script>
<script src="{{ asset('js/animate.js') }}"></script>
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/fitvids.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/typed.min.js') }}"></script>
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
<script src="{{ asset('js/forms-2.js') }}"></script>
<script src="{{ asset('js/map-style2.js') }}"></script>
<script src="{{ asset('js/range.js') }}"></script>
<script src="{{ asset('js/color-switcher.js') }}"></script>
<script>
    $(window).on('scroll load', function() {
        $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
    });
</script>

<!-- Slider Revolution scripts -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

<script>
    var typed = new Typed('.typed', {
        strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
        smartBackspace: false,
        loop: true,
        showCursor: true,
        cursorChar: "|",
        typeSpeed: 50,
        backSpeed: 30,
        startDelay: 800
    });
</script>

<script>
    $('.slick-lancers').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        adaptiveHeight: true,
        responsive: [{
            breakpoint: 1292,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 993,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true,
                arrows: false
            }
        }, {
            breakpoint: 769,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: false
            }
        }]
    });
</script>

<script>
    $('.job_clientSlide').owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        autoplay: false,
        nav: true,
        smartSpeed: 1000,
        slideSpeed: 1000,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        dots: false,
        responsive: {
            0: { items: 1 },
            991: { items: 3 }
        }
    });
</script>

<script>
    $('.style2').owlCarousel({
        loop: true,
        margin: 0,
        dots: false,
        autoWidth: false,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive: {
            0: { items: 2, margin: 20 },
            400: { items: 2, margin: 20 },
            500: { items: 3, margin: 20 },
            768: { items: 4, margin: 20 },
            992: { items: 5, margin: 20 },
            1000: { items: 7, margin: 20 }
        }
    });
</script>

<script>
    $(".dropdown-filter").on('click', function() {
        $(".explore__form-checkbox-list").toggleClass("filter-block");
    });
</script>

<!-- MAIN JS -->
<script src="{{ asset('js/script.js') }}"></script>

{{-- <script type="text/javascript"
src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>

<script type="text/javascript">
(function(){
emailjs.init({
publicKey: "5J8K-0qHhTOuFlMs4",
});
})();
</script> --}}
@endpush