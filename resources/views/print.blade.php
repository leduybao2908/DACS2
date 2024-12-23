@extends('layouts.app')
@section('title', 'Room Details')
@section('body-class', 'inner-pages sin-1 homepage-4 hd-white')
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.min.css">

    <!-- Quill.js Styles -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet-gesture-handling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.markercluster.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.markercluster.default.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/timedropper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datedropper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">
@endpush

{{-- @extends('layouts.master') --}}

@section('content')
<section class="single-proper blog details container-fluid">
    <a href="#" onclick="printInvoice()" class="print-button" >Print this invoice</a>
<br> <br> <br>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="width: 100%;" id="invoice">
        <!-- Nội dung của bạn -->
        <div class="row" style="width: 100%;"> <!-- Chiếm toàn bộ chiều rộng -->
            <div class="col-12"> <!-- Chiếm toàn bộ chiều rộng -->
                <div class="row" style="width: 100%;">
                    <div class="col-12"> <!-- Chiếm toàn bộ chiều rộng -->
                        <section class="headings-2 pt-0">
                            <div class="pro-wrapper">
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <h3>{{ $room->title }} 
                                            <span class="mrg-l-5 category-tag">{{ $room->status }}</span>
                                        </h3>
                                        <div class="mt-0">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{ $room->location }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Section Giá cả và diện tích -->
                                <div class="single detail-wrapper mr-2">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <p><strong>Price:</strong> This is the total price for the room.</p>

                                            <h4>${{ number_format($room->price, 2) }}</h4>
                                            <div class="mt-0">
                                                <a href="#listing-location" class="listing-address">
                                                    <p><strong>Area:</strong> The total area of the room in square feet (sqft).</p>

                                                    <p>{{ $room->area }} sqft</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <!-- Customer Information -->
                                <div class="print-container container-fluid">
                                    <h3 class="text-center mb-3">Customer information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><strong>Name:</strong> {{ $notification->name_request }}</p>
                                            <p><strong>Email:</strong> {{ $notification->mail_request }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><strong>Phone Number:</strong> {{ $notification->phone_number }}</p>
                                            <p><strong>Message:</strong> {!! nl2br(e($notification->message)) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        

                        <!-- Gallery -->
                         <!-- Gallery -->
                         <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                            <h5 class="mb-4">Gallery</h5>
                            <div class="carousel-inner">
                                @foreach (json_decode($room->images) as $index => $image)
                                    <div class="item carousel-item {{ $index === 0 ? 'active' : '' }}"
                                        data-slide-number="{{ $index }}">
                                        <img src="data:image/png;base64,{{$image}}" class="img-fluid"
                                            alt="slider-listing">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                                    class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                                    class="fa fa-angle-right"></i></a>

                            <!-- main slider carousel nav controls -->
                            <ul class="carousel-indicators smail-listing list-inline">
                                @php
                                    // Decode the JSON string into an array
                                    $images = json_decode($room->images);
                                @endphp

                                @foreach ($images as $index => $image)
                                    <li class="list-inline-item {{ $index === 0 ? 'active' : '' }}">
                                        <a id="carousel-selector-{{ $index }}"
                                            data-slide-to="{{ $index }}" data-target="#listingDetailsSlider">
                                            <img src="data:image/png;base64,{{$image}}" class="img-fluid"
                                                alt="listing-small">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
>>>>>>> Stashed changes
                        </div>
                        
                        <!-- Description Section -->
                        <div class="blog-info details mb-30">
                            <h5 class="mb-4">Description</h5>
                            <p class="mb-3">{!! $room->description !!}</p>
                        </div>

                        <!-- Property Details -->
                        <div class="single homes-content details mb-30">
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property ID:</span>
                                    <span class="det">{{ $room->room_id }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det">Room</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det">{{ $room->status }}</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Price:</span>
                                    <span class="det">${{ number_format($room->price, 2) }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Reviews Section -->
                        <section class="reviews comments">
                            <h3 class="mb-5">{{ $room->reviews->count() }} Reviews</h3>
                            <div class="row mb-5">
                                <ul class="col-12 commented pl-0">
                                    @foreach($room->reviews as $review)
                                        <li class="comm-inf">
                                            <div class="col-md-2">
                                                <img src="{{ $review->user->image_url ? asset('storage/' . $review->user->image_url) : 'images/default-profile.jpg' }}" class="img-fluid" alt="User Profile">
                                            </div>

                                            <div class="col-md-10 comments-info">
                                                <div class="conra">
                                                    <h5 class="mb-2">{{ $review->user->name }}</h5>
                                                    <div class="rating-box">
                                                        <div class="detail-list-rating mr-0">
                                                            @for($i = 1; $i <= 5; $i++)
                                                            <i class="fa fa-star {{ $i <= $review->rating ? '' : 'fa-star-o' }}"></i>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-4">{{ \Carbon\Carbon::parse($review->date)->format('M d, Y H:i:s') }}</p>
                                                <p>{!! nl2br(e($review->comment)) !!}</p>
                                                @if($review->images_url && is_array(json_decode($review->images_url)))
                                                    <div class="resti">
                                                        @foreach(json_decode($review->images_url) as $image)
                                                            <div class="rest">
                                                                <img src="{{ asset('storage/' . $image) }}" class="img-fluid" alt="Review Image">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </section>

                        <!-- Notification Section -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function printInvoice() {
        const printContent = document.getElementById('invoice').innerHTML;
        const newWindow = window.open('', '_blank');
        newWindow.document.write(`
            <html>
            <head>
                <title>Print Invoice</title>
                <style>
                    /* Cải thiện căn chỉnh tổng thể */
.pro-wrapper, .detail-wrapper-body {
    padding: 15px;
}

/* Cải thiện khoảng cách và kích thước */
.listing-title-bar h3 {
    font-size: 24px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.category-tag {
    font-size: 14px;
    color: #007bff;
    padding: 2px 8px;
    background-color: #e0f4ff;
    border-radius: 3px;
}

.listing-title-bar p, .listing-title-bar a {
    font-size: 14px;
    color: #555;
    margin-top: 5px;
}

/* Section giá và diện tích */
.single .detail-wrapper-body {
    margin-bottom: 20px;
}

.single .listing-title-bar h4 {
    font-size: 18px;
    color: #007bff;
    margin-top: 10px;
}

.single .listing-title-bar p {
    font-size: 13px;
    color: #555;
}

/* Bố cục cho thông tin khách hàng */
.print-container .row {
    margin-top: 15px;
}

.print-container .col-md-6 {
    padding: 10px;
    margin-bottom: 10px;
}

.print-container .col-md-6 p {
    font-size: 14px;
    color: #333;
}

/* Cải thiện các phần tử hình ảnh, văn bản, khoảng cách */
.container-fluid {
    width: 100%;
    padding: 0;
}

@media print {
    /* Cải thiện bố cục khi in */
    body {
        font-family: Arial, sans-serif;
        background-color: #fff;
        color: #000;
        margin: 0;
        padding: 0;
    }

    /* In ẩn các phần không cần thiết */
    .print-button {
        display: none !important;
    }

    .pro-wrapper, .detail-wrapper-body {
        width: 100%;
        padding: 10px !important;
    }

    .listing-title-bar {
        border-bottom: 2px solid #007bff;
        padding-bottom: 15px;
    }

    .listing-title-bar h3 {
        font-size: 22px;
    }

    .listing-title-bar h4 {
        font-size: 18px;
    }

    .listing-title-bar p {
        margin-top: 5px;
        font-size: 14px;
    }

    /* Cải thiện khoảng cách giữa các cột thông tin khách hàng */
    .print-container .col-md-6 {
        width: 50%;
        padding: 15px;
        box-sizing: border-box;
    }
}

                </style>
            </head>
            <body>
                ${printContent}
            </body>
            </html>
        `);
        newWindow.document.close();
        newWindow.print();
    }
</script>
</section>

<style>

.print-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #ffffff;
    background-color: #007bff; /* Màu nền xanh */
    border: none;
    border-radius: 5px;
    text-decoration: none; /* Loại bỏ gạch chân */
    text-align: center;
    transition: background-color 0.3s, transform 0.2s;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.print-button:hover {
    background-color: #0056b3; /* Đậm hơn khi hover */
    transform: translateY(-2px); /* Nổi lên một chút */
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.print-button:active {
    transform: translateY(0); /* Hiệu ứng nhấn xuống */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Đảm bảo mở rộng chiều rộng */
.single-proper.blog.details {
    width: 100%;
    padding: 0;
    margin: 0;
}
.container-fluid {
    max-width: 100%;
}
</style>
@endsection


@push('scripts')
    <!-- Quill.js Script -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <!-- ARCHIVES JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/range-slider.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/slick4.js') }}"></script>
    <script src="{{ asset('js/fitvids.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/popup.js') }}"></script>
    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/timedropper.js') }}"></script>
    <script src="{{ asset('js/datedropper.js') }}"></script>
    <script src="{{ asset('js/jqueryadd-count.js') }}"></script>
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/leaflet-gesture-handling.min.js') }}"></script>
    <script src="{{ asset('js/leaflet-providers.js') }}"></script>
    <script src="{{ asset('js/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('js/map-single.js') }}"></script>
    <script src="{{ asset('js/color-switcher.js') }}"></script>
    <script src="{{ asset('js/inner.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/print-js/1.6.0/print.min.js"></script>


    <!-- Date Dropper Script-->
    <script>
        $('#reservation-date').dateDropper();
    </script>
    <!-- Time Dropper Script-->
    <script>
        this.$('#reservation-time').timeDropper({
            setCurrentTime: false,
            meridians: true,
            primaryColor: "#e8212a",
            borderColor: "#e8212a",
            minutesInterval: '15'
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
    </script>

    <script>
        $('.slick-carousel').each(function() {
            var slider = $(this);
            $(this).slick({
                infinite: true,
                dots: false,
                arrows: false,
                centerMode: true,
                centerPadding: '0'
            });

            $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                slider.slick('slickPrev');
            });
            $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                slider.slick('slickNext');
            });
        });
    </script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lắng nghe sự kiện thay đổi (change) cho các radio button
    const ratingRadios = document.querySelectorAll('input[name="rating"]');
    
    ratingRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            // Lấy giá trị rating đã chọn
            const ratingValue = this.value;
            console.log("Selected Rating:", ratingValue);  // In ra giá trị rating đã chọn

            // Bạn có thể thực hiện các hành động khác với ratingValue, ví dụ gửi dữ liệu qua AJAX, hoặc hiển thị cho người dùng
        });
    });
});
</script>
<!-- Thêm TinyMCE từ CDN -->
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    // Initialize Quill editor
    var quill = new Quill('#editor', {
        theme: 'snow', // You can use 'snow' or 'bubble' theme
        modules: {
            toolbar: [
                [{ 'header': '1' }, { 'header': '2' }, { 'font': [] }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['bold', 'italic', 'underline'],
                ['link', 'blockquote', 'code-block'],
                [{ 'align': [] }],
                ['image', 'video']
            ]
        },
        placeholder: 'Write your review here...',
        readOnly: false,
    });

    // On form submission, capture the content of the editor
    document.querySelector('form').onsubmit = function() {
        var reviewContent = quill.root.innerHTML;
        console.log(reviewContent); // You can send this to the server
    };
</script>

@endpush
