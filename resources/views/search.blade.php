<!-- resources/views/property/search.blade.php -->

@extends('layouts.app')

@section('content')
    <!-- Tìm kiếm bất động sản -->
    <form action="{{ route('property.search') }}" method="GET">
        <div class="col-12">
            <div class="banner-search-wrap">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs_1">
                        <div class="rld-main-search">
                            <div class="row">
                                <!-- Title -->
                                <div class="rld-single-input">
                                    <input type="text" name="title" placeholder="Enter Title...">
                                </div>

                                <!-- Area -->
                                <div class="range-slider">
                                    <label>Area Size</label>
                                    <input type="number" name="min_area" placeholder="Min Area">
                                    <input type="number" name="max_area" placeholder="Max Area">
                                </div>

                                <!-- Location -->
                                <div class="custom-select">
                                    <div class="select-box">
                                        <span class="selected-option">Select City</span>
                                        <div class="options">
                                            <div class="option" onclick="selectCity('Hà Nội')">Hà Nội</div>
                                            <div class="option" onclick="selectCity('Hồ Chí Minh')">Hồ Chí Minh</div>
                                            <div class="option" onclick="selectCity('Hải Phòng')">Hải Phòng</div>
                                            <div class="option" onclick="selectCity('Đà Nẵng')">Đà Nẵng</div>
                                            <!-- Các tỉnh thành khác -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="location" id="selected-city">
                                </div>

                                <!-- Price Range -->
                                <div class="range-slider">
                                    <label>Price Range</label>
                                    <input type="number" name="min_price" placeholder="Min Price">
                                    <input type="number" name="max_price" placeholder="Max Price">
                                </div>

                                <button type="submit" class="btn btn-yellow">Search Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Hiển thị kết quả tìm kiếm -->
    <div class="search-results">
        <h3>Found {{ $properties->count() }} properties</h3>
        <ul>
            @foreach ($properties as $property)
                <li>
                    <h4>{{ $property->title }}</h4>
                    <p>Location: {{ $property->location }}</p>
                    <p>Area: {{ $property->area }} m²</p>
                    <p>Price: ${{ number_format($property->price, 2) }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
