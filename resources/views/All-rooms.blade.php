@extends('layouts.app')
@section('title', 'Rooms')
@section('body-class', 'inner-pages agents hp-6 full hd-white')

@push('styles')
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
    </head>
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
                                <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                            </div>
                            <h3>List View</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Search Form -->
            <div class="col-12 px-0 parallax-searchs">
                <div class="banner-search-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs_1">
                            <div class="rld-main-search">
                                <div class="row">
                                    <div class="rld-single-input">
                                        <input type="text" placeholder="Enter Keyword...">
                                    </div>
                                    <div class="rld-single-select ml-22">
                                        <select class="select single-select" style="display: none;">
                                            <option value="1">Property Type</option>
                                            <option value="2">Family House</option>
                                            <option value="3">Apartment</option>
                                            <option value="3">Condo</option>
                                        </select>
                                        <div class="nice-select select single-select" tabindex="0"><span
                                                class="current">Property Type</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">Property Type</li>
                                                <li data-value="2" class="option">Family House</li>
                                                <li data-value="3" class="option">Apartment</li>
                                                <li data-value="3" class="option">Condo</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rld-single-select">
                                        <select class="select single-select mr-0" style="display: none;">
                                            <option value="1">Location</option>
                                            <option value="2">Los Angeles</option>
                                            <option value="3">Chicago</option>
                                            <option value="3">Philadelphia</option>
                                            <option value="3">San Francisco</option>
                                            <option value="3">Miami</option>
                                            <option value="3">Houston</option>
                                        </select>
                                        <div class="nice-select select single-select mr-0" tabindex="0"><span
                                                class="current">Location</span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">Location</li>
                                                <li data-value="2" class="option">Los Angeles</li>
                                                <li data-value="3" class="option">Chicago</li>
                                                <li data-value="3" class="option">Philadelphia</li>
                                                <li data-value="3" class="option">San Francisco</li>
                                                <li data-value="3" class="option">Miami</li>
                                                <li data-value="3" class="option">Houston</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown-filter"><span>Advanced Search</span></div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                        <a class="btn btn-yellow" href="#">Search Now</a>
                                    </div>
                                    <div class="explore__form-checkbox-list full-filter">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                <!-- Form Property Status -->
                                                <div class="form-group categories">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-home"></i>Property
                                                            Status</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected ">For Sale</li>
                                                            <li data-value="2" class="option">For Rent</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Property Status -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                <!-- Form Bedrooms -->
                                                <div class="form-group beds">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-bed" aria-hidden="true"></i>
                                                            Bedrooms</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bedrooms -->
                                            </div>
                                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                <!-- Form Bathrooms -->
                                                <div class="form-group bath">
                                                    <div class="nice-select form-control wide" tabindex="0"><span
                                                            class="current"><i class="fa fa-bath" aria-hidden="true"></i>
                                                            Bathrooms</span>
                                                        <ul class="list">
                                                            <li data-value="1" class="option selected">1</li>
                                                            <li data-value="2" class="option">2</li>
                                                            <li data-value="3" class="option">3</li>
                                                            <li data-value="3" class="option">4</li>
                                                            <li data-value="3" class="option">5</li>
                                                            <li data-value="3" class="option">6</li>
                                                            <li data-value="3" class="option">7</li>
                                                            <li data-value="3" class="option">8</li>
                                                            <li data-value="3" class="option">9</li>
                                                            <li data-value="3" class="option">10</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!--/ End Form Bathrooms -->
                                            </div>
                                            <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                <!-- Price Fields -->
                                                <div class="main-search-field-2">
                                                    <!-- Area Range -->
                                                    <div class="range-slider">
                                                        <label>Area Size</label>
                                                        <div id="area-range" data-min="0" data-max="1300"
                                                            data-unit="sq ft"
                                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                            <input type="text" class="first-slider-value"
                                                                disabled=""><input type="text"
                                                                class="second-slider-value" disabled="">
                                                            <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                style="left: 0%; width: 100%;"></div><a
                                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                                href="#" style="left: 0%;"></a><a
                                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                                href="#" style="left: 100%;"></a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <br>
                                                    <!-- Price Range -->
                                                    <div class="range-slider">
                                                        <label>Price Range</label>
                                                        <div id="price-range" data-min="0" data-max="600000"
                                                            data-unit="$"
                                                            class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                            <input type="text" class="first-slider-value"
                                                                disabled=""><input type="text"
                                                                class="second-slider-value" disabled="">
                                                            <div class="ui-slider-range ui-widget-header ui-corner-all"
                                                                style="left: 0%; width: 100%;"></div><a
                                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                                href="#" style="left: 0%;"></a><a
                                                                class="ui-slider-handle ui-state-default ui-corner-all"
                                                                href="#" style="left: 100%;"></a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                    <input id="check-2" type="checkbox" name="check">
                                                    <label for="check-2">Air Conditioning</label>
                                                    <input id="check-3" type="checkbox" name="check">
                                                    <label for="check-3">Swimming Pool</label>
                                                    <input id="check-4" type="checkbox" name="check">
                                                    <label for="check-4">Central Heating</label>
                                                    <input id="check-5" type="checkbox" name="check">
                                                    <label for="check-5">Laundry Room</label>
                                                    <input id="check-6" type="checkbox" name="check">
                                                    <label for="check-6">Gym</label>
                                                    <input id="check-7" type="checkbox" name="check">
                                                    <label for="check-7">Alarm</label>
                                                    <input id="check-8" type="checkbox" name="check">
                                                    <label for="check-8">Window Covering</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                    <input id="check-9" type="checkbox" name="check">
                                                    <label for="check-9">WiFi</label>
                                                    <input id="check-10" type="checkbox" name="check">
                                                    <label for="check-10">TV Cable</label>
                                                    <input id="check-11" type="checkbox" name="check">
                                                    <label for="check-11">Dryer</label>
                                                    <input id="check-12" type="checkbox" name="check">
                                                    <label for="check-12">Microwave</label>
                                                    <input id="check-13" type="checkbox" name="check">
                                                    <label for="check-13">Washer</label>
                                                    <input id="check-14" type="checkbox" name="check">
                                                    <label for="check-14">Refrigerator</label>
                                                    <input id="check-15" type="checkbox" name="check">
                                                    <label for="check-15">Outdoor Shower</label>
                                                </div>
                                                <!-- Checkboxes / End -->
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
            <section class="headings-2 pt-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p class="font-weight-bold mb-0 mt-3">6 Search results</p>
                            </div>
                        </div>
                    </div>
                    <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                        <div class="input-group border rounded input-group-lg w-auto mr-4">
                            <label
                                class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                            <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                id="inputGroupSelect01" name="sortby">
                                <option selected>Top Selling</option>
                                <option value="1">Most Viewed</option>
                                <option value="2">Price(low to high)</option>
                                <option value="3">Price(high to low)</option>
                            </select>
                        </div>
                        <div class="sorting-options">
                            <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                            <a href="properties-full-grid-1.html" class="change-view-btn lde"><i
                                    class="fa fa-th-large"></i></a>
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
                                        <div class="homes-price">${{ number_format($room->price, 2) }}</div>
                                        <img src="{{ asset('storage/' . json_decode($room->images)[0] ?? 'images/default.jpg') }}"
                                            alt="home-1" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <p class="homes-description">
                            {{ \Illuminate\Support\Str::limit($room->description, 60, '...') }}
                        </p>

                        <!-- Price -->
                        <div class="price-properties">
                            <h3 class="title mt-3">
                                <a href="{{ route('rooms.show', $room->room_id) }}">${{ number_format($room->price, 2) }}</a>
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
                            <a class="page-link" href="{{ $rooms->previousPageUrl() }}" tabindex="-1">Previous</a>
                        </li>
                    @endif

                    <!-- Page Number Links -->
                    @foreach ($rooms->getUrlRange(1, $rooms->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $rooms->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    <!-- Next Page Link -->
                    @if ($rooms->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $rooms->nextPageUrl() }}">Next</a>
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