@extends('layouts.app')
@section('title', 'Rooms')
@section('body-class', 'inner-pages agents hp-6 full hd-white')

@push('styles')
    <link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">
@endpush

@section('content')
    <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-list full featured portfolio blog">
        <div class="container">
            <section class="headings-2 pt-0 pb-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p><a href="/">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                            </div>
                            <h3>List View</h3>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-12">
                <div class="banner-search-wrap">

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs_1">
                            <div class="rld-main-search">

                                <form action="{{ route('property.search') }}" method="GET">

                                    <div class="row">
                                        <div class="rld-single-input">
                                            <input name="title" type="text" placeholder="Enter Keyword...">
                                        </div>
                                        <div class="rld-single-select ml-22">
                                            <select class="select single-select" name="type">
                                                <option value="house">House</option>
                                                <option value="apartment">Apartment</option>
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
                                        <input type="hidden" name="city" id="selected-city">
                                        <style>
                                            .custom-select {
                                                position: relative;
                                                width: 100%;
                                                /* Cho phép custom select có chiều rộng tự động phù hợp với phần tử cha */
                                                max-width: 150px;
                                                /* Giới hạn chiều rộng tối đa của select box */
                                                height: 48px;
                                                box-sizing: border-box;
                                                /* Bao gồm padding và border vào trong tính toán chiều cao */

                                            }

                                            .select-box {
                                                display: flex;
                                                align-items: center;
                                                /* Căn giữa văn bản theo chiều dọc */
                                                height: 48px;
                                                /* Chiều cao cố định của select box */
                                                padding: 0 10px;
                                                /* Padding cho phần tử select box */
                                                border: 1px solid #ebebeb;
                                                border-top: none;
                                                /* Bỏ viền phía trên */
                                                background-color: #fff;
                                                cursor: pointer;
                                                font-size: 14px;
                                                border-radius: 4px;
                                                width: 100%;
                                                /* Đảm bảo chiều rộng của select box khớp với phần tử cha */
                                            }

                                            .selected-option {
                                                color: #333;
                                            }

                                            .options {
                                                display: none;
                                                /* Ẩn danh sách mặc định */
                                                max-height: 180px;
                                                /* Giới hạn chiều cao */
                                                overflow-y: auto;
                                                /* Cho phép thanh cuộn xuất hiện khi cần */
                                                position: absolute;
                                                top: 100%;
                                                left: 0;
                                                right: 0;
                                                background-color: #fff;
                                                border: 1px solid #ddd;
                                                border-radius: 4px;
                                                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                                                z-index: 999;
                                                width: 100%;
                                                /* Chiều rộng của options khớp với select box */
                                            }

                                            .option {
                                                padding: 10px;
                                                cursor: pointer;
                                            }

                                            .option:hover {
                                                background-color: #f0f0f0;
                                            }

                                            .custom-select.open .options {
                                                display: block;
                                                /* Hiển thị danh sách khi mở */
                                            }
                                        </style>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                // Xử lý Custom Select cho City
                                                const selectBoxCity = document.querySelector('.custom-select .select-box');
                                                const optionsCity = document.querySelector('.custom-select .options');
                                                const customSelectCity = document.querySelector('.custom-select');
                                                const selectedCityInput = document.querySelector('#selected-city'); // Trường input ẩn để lưu city

                                                // Mở/đóng dropdown khi click vào select box của thành phố
                                                selectBoxCity.addEventListener('click', function(event) {
                                                    customSelectCity.classList.toggle('open');
                                                    event.stopPropagation(); // Ngừng sự kiện để tránh tắt dropdown khi click vào nó
                                                });

                                                // Thêm sự kiện để thay đổi lựa chọn khi nhấp vào option (thành phố)
                                                const optionElementsCity = document.querySelectorAll('.custom-select .option');
                                                optionElementsCity.forEach(option => {
                                                    option.addEventListener('click', function() {
                                                        // Cập nhật giá trị hiển thị trong select box
                                                        selectBoxCity.querySelector('.selected-option').textContent = option
                                                            .textContent;

                                                        // Gán giá trị của thành phố vào input ẩn
                                                        selectedCityInput.value = option.textContent;

                                                        // Đóng dropdown sau khi chọn
                                                        customSelectCity.classList.remove('open');
                                                    });
                                                });

                                                // Đóng dropdown khi click ra ngoài
                                                document.addEventListener('click', function(event) {
                                                    if (!customSelectCity.contains(event.target)) {
                                                        customSelectCity.classList.remove('open');
                                                    }
                                                });

                                                // Xử lý Select chuẩn cho loại bất động sản (House/Apartment)
                                                const propertySelect = document.querySelector('.rld-single-select select'); // Chọn <select> chuẩn
                                                const selectedTypeInput = propertySelect;

                                                propertySelect.addEventListener('change', function() {
                                                    // Bạn có thể xử lý khi người dùng thay đổi lựa chọn ở đây
                                                    // Giá trị đã thay đổi trong select, bạn có thể lấy giá trị qua propertySelect.value
                                                    console.log('Selected Property Type:', propertySelect.value);
                                                });
                                            });
                                        </script>


                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                            <button type="submit" class="btn btn-yellow">Search
                                                Now</button>
                                        </div>
                                        <div class="explore__form-checkbox-list full-filter"
                                            style="display: flex; justify-content: center; align-items: center; width: 90%; max-width: 1000px; min-width: 350px; padding: 30px; background-color: #f9f9f9; border-radius: 8px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); margin: 0 auto;">
                                            <div class="row justify-content-center"
                                                style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
                                                <div class="col-lg-5 col-md-12 col-sm-12"
                                                    style="flex: 1; max-width: 100%; margin-right: 15px;">
                                                    <!-- Area Range -->
                                                    <div class="range-slider">
                                                        <label>Area Size</label>
                                                        <div id="area-range" data-min="0" data-max="100"
                                                            data-unit="sq ft"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <br>
                                                    <!-- Price Range -->
                                                    <div class="range-slider">
                                                        <label>Price Range</label>
                                                        <div id="price-range" data-min="0" data-max="10000000"
                                                            data-unit="VND"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/ End Search Form -->
            <section class="headings-2 pt-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p class="font-weight-bold mb-0 mt-3">{{ $rooms->total() }} Search results</p>
                            </div>
                        </div>
                    </div>
                    <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                        <div class="input-group border rounded input-group-lg w-auto mr-4">
                            <form method="GET" action="{{ route('property.search') }}">
                                <label
                                    class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                    for="inputGroupSelect01">
                                    <i class="fas fa-align-left fs-16 pr-2"></i>Sortby:
                                </label>
                                <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                    name="sortby" onchange="this.form.submit()">
                                    <option value="most_viewed"
                                        {{ request('sortby') == 'most_viewed' ? 'selected' : '' }}>Most Viewed</option>
                                    <option value="price_asc" {{ request('sortby') == 'price_asc' ? 'selected' : '' }}>
                                        Price (low to high)</option>
                                    <option value="price_desc" {{ request('sortby') == 'price_desc' ? 'selected' : '' }}>
                                        Price (high to low)</option>
                                    <option value="title_asc" {{ request('sortby') == 'title_asc' ? 'selected' : '' }}>
                                        Title (A to Z)</option>
                                    <option value="title_desc" {{ request('sortby') == 'title_desc' ? 'selected' : '' }}>
                                        Title (Z to A)</option>
                                </select>

                                <!-- Truyền tất cả các tham số vào form -->
                                @foreach (request()->except('sortby', '_token') as $key => $value)
                                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                                @endforeach
                            </form>
                        </div>


                    </div>
                </div>
            </section>
            <div class="row featured portfolio-items">
                @foreach ($rooms as $room)
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale pr-0 pb-3" data-aos="fade-up">
                        <div class="project-single mb-0 bb-0">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="{{ route('rooms.show', $room->room_id) }}">View Property</a></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{ route('rooms.show', $room->room_id) }}" class="homes-img">
                                        <div class="homes-tag button alt rent">For Rent</div>
                                        <div class="homes-price">₫{{ number_format($room->price) }}</div>
                                        <img src="data:image/png;base64,{{ $room->first_image }}"
                                            alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>
                    <!-- homes content -->
                    <div class="col-lg-8 col-md-12 homes-content pb-0 mb-4" data-aos="fade-up">
                        <!-- homes address -->
                        <h3><a href="{{ route('rooms.show', $room->room_id) }}">{{ $room->title }}</a></h3>
                        <p class="homes-address mb-3">
                            <a href="{{ route('rooms.show', $room->room_id) }}">
                                <i class="fa fa-map-marker"></i><span>{{ $room->location }}</span>
                            </a>
                        </p>
                        <p class="homes-area">
                            <i class="fa fa-expand"></i> <span>{{ $room->area }}m²</span>
                        </p>
                        <p class="homes-location">
                            <i class="fas fa-location-arrow"></i> <span>{{ $room->location }}</span>
                        </p>

                        <p class="homes-city">
                            <i class="fa fa-building"></i> <span>{{ $room->city }}</span>
                        </p>

                        <p class="homes-type">
                            <i class="fa fa-home"></i> <span>{{ $room->type }}</span>
                        </p>

                        <p class="homes-description">
                            {!! \Illuminate\Support\Str::limit(strip_tags($room->description), 60, '...') !!}
                        </p>

                        <style>
                            .homes-address,
                            .homes-area,
                            .homes-location,
                            .homes-city,
                            .homes-type,
                            .homes-description {
                                overflow: hidden;
                                /* Ensure no content spills out */
                                text-overflow: ellipsis;
                                /* Truncate text with ellipsis when overflow occurs */
                                white-space: nowrap;
                                /* Prevent text from wrapping to the next line */
                            }

                            .project-single {
                                overflow: visible;
                                /* Allow the entire project to overflow */
                                display: flex;
                                /* Use flex to align items */
                                justify-content: flex-start;
                                /* Align content to the left */
                            }

.homes-location,
.homes-area,
.homes-city,
.homes-type {
    margin-right: 20px; /* Space between the elements */
    display: inline-block; /* Allow elements to stay on the same line */
}

.homes-img {
    aspect-ratio: 4 / 3; /* Tỷ lệ 4:3 hoặc thay bằng tỷ lệ bạn muốn */
    overflow: hidden;
}
.homes-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

                        </style>

                        <div class="room-rating">
                            @php
                                $avgRating = $room->avg_rating; // Assuming you have avg_rating in room model or calculate it
                                $reviewsCount = $room->reviews_count; // Assuming reviews_count is already stored in the room model
                            @endphp
                            <div class="rating-box">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fa fa-star {{ $i <= $avgRating ? '' : 'fa-star-o' }}"></i>
                                @endfor
                            </div>
                            <!-- Show reviews count -->
                            <p class="reviews-count">
                                ({{ $reviewsCount }} reviews)
                            </p>
                        </div>

                        <!-- Price -->
                        <div class="price-properties">
                            <h3 class="title mt-3">
                                <a
                                    href="{{ route('rooms.show', $room->room_id) }}">₫{{ number_format($room->price) }}</a>
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <nav aria-label="Room Pagination" class="pt-3">
                <ul class="pagination grid-3">
                    <!-- Previous Page Link -->
                    @if ($rooms->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link" tabindex="-1">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $rooms->previousPageUrl() . '&' . http_build_query(request()->except('page')) }}" tabindex="-1">Previous</a>
                        </li>
                    @endif
            
                    <!-- Page Number Links -->
                    @foreach ($rooms->getUrlRange(1, $rooms->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $rooms->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url . '&' . http_build_query(request()->except('page')) }}">{{ $page }}</a>
                        </li>
                    @endforeach
            
                    <!-- Next Page Link -->
                    @if ($rooms->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $rooms->nextPageUrl() . '&' . http_build_query(request()->except('page')) }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">Next</span>
                        </li>
                    @endif
                </ul>
            </nav>
            
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->
@endsection
@push('scripts')
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/rangeSlider.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/aos2.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/lightcase.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/light.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/popup.js') }}"></script>
    <script src="{{ asset('js/searched.js') }}"></script>
    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/inner.js') }}"></script>
    <script src="{{ asset('js/color-switcher.js') }}"></script>

    <script>
        $(".dropdown-filter").on('click', function() {

            $(".explore__form-checkbox-list").toggleClass("filter-block");

        });
    </script>

    </div>
    <!-- Wrapper / End -->
    </body>
@endpush
