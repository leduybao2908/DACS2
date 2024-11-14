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
   <!-- STAR HEADER SEARCH -->
   <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
    <div class="hero-main">
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="h1">Find Your Dream
                            <br class="d-md-none">
                            <span class="typed border-bottom"></span>
                        </h1>
                            <p class="mt-4">We Have Over Million Properties For You.</p>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="col-12">
                            <div class="banner-search-wrap">
                               
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="tabs_1">
                                        <div class="rld-main-search">
                                            <div class="row">
                                                <div class="rld-single-input">
                                                    <input type="text" placeholder="Enter Keyword...">
                                                </div>
                                                <div class="rld-single-select ml-22">
                                                    <select class="select single-select">
                                                        <option value="1">Property Type</option>
                                                        <option value="2">Family House</option>
                                                        <option value="3">Apartment</option>
                                                        <option value="3">Condo</option>
                                                    </select>
                                                </div>
                                                <div class="custom-select">
                                                    <div class="select-box">
                                                        <span class="selected-option">Select City</span>
                                                        <div class="options">
                                                            <div class="option">Hà Nội</div>
                                                                    <div class="option">Hồ Chí Minh</div>
                                                                    <div class="option">Hải Phòng</div>
                                                                    <div class="option">Đà Nẵng</div>
                                                                    <div class="option">Cần Thơ</div>
                                                                    <div class="option">An Giang</div>
                                                                    <div class="option">Bà Rịa–Vũng Tàu</div>
                                                                    <div class="option">Bạc Liêu</div>
                                                                    <div class="option">Bắc Giang</div>
                                                                    <div class="option">Bắc Kạn</div>
                                                                    <div class="option">Bắc Ninh</div>
                                                                    <div class="option">Bến Tre</div>
                                                                    <div class="option">Bình Dương</div>
                                                                    <div class="option">Bình Phước</div>
                                                                    <div class="option">Bình Thuận</div>
                                                                    <div class="option">Cà Mau</div>
                                                                    <div class="option">Cao Bằng</div>
                                                                    <div class="option">Đắk Lắk</div>
                                                                    <div class="option">Đắk Nông</div>
                                                                    <div class="option">Điện Biên</div>
                                                                    <div class="option">Đồng Nai</div>
                                                                    <div class="option">Đồng Tháp</div>
                                                                    <div class="option">Gia Lai</div>
                                                                    <div class="option">Hà Giang</div>
                                                                    <div class="option">Hà Nam</div>
                                                                    <div class="option">Hà Tĩnh</div>
                                                                    <div class="option">Hải Dương</div>
                                                                    <div class="option">Hậu Giang</div>
                                                                    <div class="option">Hòa Bình</div>
                                                                    <div class="option">Hưng Yên</div>
                                                                    <div class="option">Khánh Hòa</div>
                                                                    <div class="option">Kiên Giang</div>
                                                                    <div class="option">Kon Tum</div>
                                                                    <div class="option">Lai Châu</div>
                                                                    <div class="option">Lâm Đồng</div>
                                                                    <div class="option">Lạng Sơn</div>
                                                                    <div class="option">Lào Cai</div>
                                                                    <div class="option">Long An</div>
                                                                    <div class="option">Nam Định</div>
                                                                    <div class="option">Nghệ An</div>
                                                                    <div class="option">Ninh Bình</div>
                                                                    <div class="option">Ninh Thuận</div>
                                                                    <div class="option">Phú Thọ</div>
                                                                    <div class="option">Phú Yên</div>
                                                                    <div class="option">Quảng Bình</div>
                                                                    <div class="option">Quảng Nam</div>
                                                                    <div class="option">Quảng Ngãi</div>
                                                                    <div class="option">Quảng Ninh</div>
                                                                    <div class="option">Quảng Trị</div>
                                                                    <div class="option">Sóc Trăng</div>
                                                                    <div class="option">Sơn La</div>
                                                                    <div class="option">Tây Ninh</div>
                                                                    <div class="option">Thái Bình</div>
                                                                    <div class="option">Thái Nguyên</div>
                                                                    <div class="option">Thanh Hóa</div>
                                                                    <div class="option">Thừa Thiên Huế</div>
                                                                    <div class="option">Tiền Giang</div>
                                                                    <div class="option">Trà Vinh</div>
                                                                    <div class="option">Tuyên Quang</div>
                                                                    <div class="option">Vĩnh Long</div>
                                                                    <div class="option">Vĩnh Phúc</div>
                                                                    <div class="option">Yên Bái</div>

                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <style>
                                                .custom-select {
                                                    position: relative;
                                                    width: 100%;  /* Cho phép custom select có chiều rộng tự động phù hợp với phần tử cha */
                                                    max-width: 150px;  /* Giới hạn chiều rộng tối đa của select box */
                                                    height: 48px;
                                                    box-sizing: border-box; /* Bao gồm padding và border vào trong tính toán chiều cao */

                                                }
                                                
                                                .select-box {
                                                    display: flex;
                                                    align-items: center;  /* Căn giữa văn bản theo chiều dọc */
                                                    height: 48px;  /* Chiều cao cố định của select box */
                                                    padding: 0 10px;  /* Padding cho phần tử select box */
                                                    border: 1px solid #ebebeb;
                                                    border-top: none;  /* Bỏ viền phía trên */
                                                    background-color: #fff;
                                                    cursor: pointer;
                                                    font-size: 14px;
                                                    border-radius: 4px;
                                                    width: 100%;  /* Đảm bảo chiều rộng của select box khớp với phần tử cha */
                                                }   
                                                
                                                .selected-option {
                                                    color: #333;
                                                }
                                                
                                                .options {
                                                    display: none;  /* Ẩn danh sách mặc định */
                                                    max-height: 180px; /* Giới hạn chiều cao */
                                                    overflow-y: auto; /* Cho phép thanh cuộn xuất hiện khi cần */
                                                    position: absolute;
                                                    top: 100%;
                                                    left: 0;
                                                    right: 0;
                                                    background-color: #fff;
                                                    border: 1px solid #ddd;
                                                    border-radius: 4px;
                                                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                                    z-index: 999;
                                                    width: 100%;  /* Chiều rộng của options khớp với select box */
                                                }
                                                
                                                .option {
                                                    padding: 10px;
                                                    cursor: pointer;
                                                }
                                                
                                                .option:hover {
                                                    background-color: #f0f0f0;
                                                }
                                                
                                                .custom-select.open .options {
                                                    display: block; /* Hiển thị danh sách khi mở */
                                                }
                                                </style>
                                                
                                                <script>
                                                    const selectBox = document.querySelector('.select-box');
                                                    const options = document.querySelector('.options');
                                                    const customSelect = document.querySelector('.custom-select');
                                                
                                                    // Mở/đóng dropdown khi click vào select box
                                                    selectBox.addEventListener('click', function(event) {
                                                        customSelect.classList.toggle('open');
                                                        event.stopPropagation();  // Ngừng sự kiện để tránh tắt dropdown khi click vào nó
                                                    });
                                                
                                                    // Thêm sự kiện để thay đổi lựa chọn khi nhấp vào option
                                                    const optionElements = document.querySelectorAll('.option');
                                                    optionElements.forEach(option => {
                                                        option.addEventListener('click', function() {
                                                            selectBox.querySelector('.selected-option').textContent = option.textContent;
                                                            customSelect.classList.remove('open');  // Ẩn danh sách sau khi chọn
                                                        });
                                                    });
                                                
                                                    // Đóng dropdown khi click ra ngoài
                                                    document.addEventListener('click', function(event) {
                                                        if (!customSelect.contains(event.target)) {
                                                            customSelect.classList.remove('open');
                                                        }
                                                    });
                                                </script>
                                                
                                                
                                            <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                                </div>
                                                <div class="explore__form-checkbox-list full-filter" style="display: flex; justify-content: center; align-items: center; width: 90%; max-width: 1000px; min-width: 350px; padding: 30px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;">
                                                    <div class="row justify-content-center" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                                                        <div class="col-lg-5 col-md-12 col-sm-12" style="flex: 1; max-width: 100%; margin-right: 15px;">
                                                            <!-- Area Range -->
                                                            <div class="range-slider">
                                                                <label>Area Size</label>
                                                                <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <br>
                                                            <!-- Price Range -->
                                                            <div class="range-slider">
                                                                <label>Price Range</label>
                                                                <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END HEADER SEARCH -->



  <!-- START SECTION POPULAR PLACES -->
  <section class="feature-categories bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Popular </span>Places</h2>
            <p>Properties In Most Popular Places.</p>
        </div>
        <div class="row">
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-1">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/12.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">New York</a></h4>
                        <span>203 Properties</span>
                    </div>
                </div>
            </div>
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-2">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/13.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Los Angeles</a></h4>
                        <span>307 Properties</span>
                    </div>
                </div>
            </div>
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-3">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/14.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">San Francisco</a></h4>
                        <span>409 Properties</span>
                    </div>
                </div>
            </div>
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-3">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/9.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Atlanta</a></h4>
                        <span>409 Properties</span>
                    </div>
                </div>
            </div>
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="small-category-2 mob-mt">
                    <div class="small-category-2-thumb img-8">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/15.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Miami</a></h4>
                        <span>145 Properties</span>
                    </div>
                </div>
            </div>
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                <div class="small-category-2">
                    <div class="small-category-2-thumb img-10">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/10.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Chicago</a></h4>
                        <span>112 Properties</span>
                    </div>
                </div>
            </div>
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                <div class="small-category-2 si-mt">
                    <div class="small-category-2-thumb img-11">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/5.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Houston</a></h4>
                        <span>254 Properties</span>
                    </div>
                </div>
            </div>
            <!-- Single category -->
            <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                <div class="small-category-2 no-mb si-mt">
                    <div class="small-category-2-thumb img-11">
                        <a href="properties-full-grid-1.html"><img src="images/popular-places/6.jpg" alt=""></a>
                    </div>
                    <div class="sc-2-detail">
                        <h4 class="sc-jb-title"><a href="properties-full-grid-1.html">Orlando</a></h4>
                        <span>254 Properties</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
</section>
<!-- END SECTION POPULAR PLACES -->

 <!-- START SECTION FEATURED PROPERTIES -->
 <section class="featured portfolio bg-white-2 rec-pro full-l">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Featured </span>Properties</h2>
            <p>These are our featured properties</p>
        </div>
        <div class="row portfolio-items">
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                <div class="project-single" data-aos="fade-right">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Rent</div>
                                <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                             <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people rent">
                <div class="project-single" data-aos="fade-left">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button sale rent">For Rent</div>
                                <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                             <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people landscapes sale">
                <div class="project-single" data-aos="fade-right">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt sale">For Sale</div>
                                <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                             <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people landscapes rent no-pb">
                <div class="project-single no-mb" data-aos="fade-left">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button sale rent">For Rent</div>
                                <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="properties-details.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                             <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people sale no-pb">
                <div class="project-single no-mb" data-aos="fade-right">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button alt featured">Featured</div>
                                <div class="homes-tag button alt sale">For Sale</div>
                                <img src="images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                             <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 it2 web rent no-pb">
                <div class="project-single no-mb last" data-aos="fade-left">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button sale rent">For Rent</div>
                                <img src="images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                    <!-- homes content -->
                    <div class="homes-content">
                        <!-- homes address -->
                        <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                        <p class="homes-address mb-3">
                            <a href="single-property-1.html">
                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                            </a>
                        </p>
                        <!-- homes List -->
                        <ul class="homes-list clearfix pb-3">
                            <li class="the-icons">
                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                <span>6 Bedrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                <span>3 Bathrooms</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                <span>720 sq ft</span>
                            </li>
                            <li class="the-icons">
                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                <span>2 Garages</span>
                            </li>
                        </ul>
                        <div class="price-properties footer pt-3 pb-0">
                            <h3 class="title mt-3">
                             <a href="single-property-1.html">$ 150,000</a>
                            </h3>
                            <div class="compare">
                                <a href="#" title="Compare">
                                    <i class="flaticon-compare"></i>
                                </a>
                                <a href="#" title="Share">
                                    <i class="flaticon-share"></i>
                                </a>
                                <a href="#" title="Favorites">
                                    <i class="flaticon-heart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
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
                        <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->        

<!-- START SECTION RECENTLY PROPERTIES -->
<section class="featured portfolio rec-pro disc">
    <div class="container-fluid">
        <div class="sec-title discover">
            <h2><span>Discover </span>Popular Properties</h2>
            <p>We provide full service at every step.</p>
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-lancers">
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 350,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                    <div class="people">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                    <div class="people landscapes no-pb pbp-3">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 350,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up" data-aos-delay="450">
                    <div class="landscapes">
                        <div class="project-single no-mb">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people">
                        <div class="project-single no-mb">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <img src="images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 350,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people landscapes no-pb pbp-3">
                        <div class="project-single no-mb last">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 350,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="agents-grid" data-aos="fade-up">
                    <div class="people">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button sale rent">For Rent</div>
                                        <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                <p class="homes-address mb-3">
                                    <a href="single-property-1.html">
                                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                    </a>
                                </p>
                                <!-- homes List -->
                                <ul class="homes-list clearfix pb-3">
                                    <li class="the-icons">
                                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                        <span>6 Bedrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                        <span>3 Bathrooms</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li class="the-icons">
                                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                        <span>2 Garages</span>
                                    </li>
                                </ul>
                                <div class="price-properties footer pt-3 pb-0">
                                    <h3 class="title mt-3">
                                        <a href="single-property-1.html">$ 150,000</a>
                                    </h3>
                                    <div class="compare">
                                        <a href="#" title="Compare">
                                            <i class="flaticon-compare"></i>
                                        </a>
                                        <a href="#" title="Share">
                                            <i class="flaticon-share"></i>
                                        </a>
                                        <a href="#" title="Favorites">
                                            <i class="flaticon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION RECENTLY PROPERTIES -->

<!-- START SECTION AGENTS -->
<section class="team bg-white rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Meet Our </span>Agents</h2>
            <p>Our Agents are here to help you</p>
        </div>
        <div class="row team-all">
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-5.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Carls Jhons</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-6.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Arling Tracy</a></h3>
                        <div class="designation">Real Estate Agent</div>
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
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Mark Web</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <!--Team Block-->
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="450">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/t-8.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Katy Grace</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="550">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/team-image-2.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Chris Melo</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
            <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="650">
                <div class="inner-box team-details">
                    <div class="image team-head">
                        <a href="agents-listing-grid.html"><img src="images/team/team-image-7.jpg" alt="" /></a>
                        <div class="team-hover">
                            <ul class="team-social">
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="lower-box">
                        <h3><a href="agents-listing-grid.html">Nina Thomas</a></h3>
                        <div class="designation">Real Estate Agent</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION AGENTS -->

<!-- START SECTION TESTIMONIALS -->
<section class="testimonials bg-white-2 rec-pro">
    <div class="container-fluid">
        <div class="sec-title">
            <h2><span>Clients </span>Testimonials</h2>
            <p>We collect reviews from our customers.</p>
        </div>
        <div class="owl-carousel job_clientSlide">
            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/ts-1.jpg" alt=""/></span>
                    <h5>Lisa Smith</h5>
                    <p>New York</p>
                </div>
            </div>
            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/ts-2.jpg" alt=""/></span>
                    <h5>Jhon Morris</h5>
                    <p>Los Angeles</p>
                </div>
            </div>
            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/ts-3.jpg" alt=""/></span>
                    <h5>Mary Deshaw</h5>
                    <p>Chicago</p>
                </div>
            </div>
            <div class="singleJobClinet">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/ts-4.jpg" alt=""/></span>
                    <h5>Gary Steven</h5>
                    <p>Philadelphia</p>
                </div>
            </div>
            <div class="singleJobClinet">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/ts-5.jpg" alt=""/></span>
                    <h5>Cristy Mayer</h5>
                    <p>San Francisco</p>
                </div>
            </div>
            <div class="singleJobClinet">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                </p>
                <div class="detailJC">
                    <span><img src="images/testimonials/ts-6.jpg" alt=""/></span>
                    <h5>Ichiro Tasaka</h5>
                    <p>Houston</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIALS -->

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

@endpush