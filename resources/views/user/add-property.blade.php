@extends('user.dashboard.layout.user_app')
@section('title', 'Add Property')
@push('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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
                                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i>
                                    Dashboard Navigation</button>
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
                                            <input type="text" name="title" id="title"
                                                placeholder="Enter your property title" required>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="description">Property Description</label>
                                        <!-- Container for Quill Editor -->
                                        <div id="description-editor" style="height: 150px; background: #fff;"></div>
                                        <input type="hidden" name="description" id="description">
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
                                            <input type="text" name="area" placeholder="Sqft" id="area"
                                                required>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="location">Location</label>
                                            <input type="text" name="location" id="location"
                                                placeholder="Enter location" required>
                                        </p>
                                    </div>
                                </div>

                                <!-- New fields for City and Type -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <br>
                                            <div class="custom-select">
                                                <div class="select-box">
                                                    <span class="selected-option">Chọn thành phố</span>

                                                    <div class="options">
                                                            <option value="Hà Nội">Hà Nội</option>
                                                            <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                                            <option value="Hải Phòng">Hải Phòng</option>
                                                            <option value="Cần Thơ">Cần Thơ</option>
                                                            <option value="Nghệ An">Nghệ An</option>
                                                            <option value="Bình Dương">Bình Dương</option>
                                                            <option value="Đồng Nai">Đồng Nai</option>
                                                            <option value="Bình Phước">Bình Phước</option>
                                                            <option value="Vĩnh Long">Vĩnh Long</option>
                                                            <option value="Thanh Hóa">Thanh Hóa</option>
                                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                                            <option value="An Giang">An Giang</option>
                                                            <option value="Bắc Giang">Bắc Giang</option>
                                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                                            <option value="Bạc Liêu">Bạc Liêu</option>
                                                            <option value="Bình Định">Bình Định</option>
                                                            <option value="Bình Thuận">Bình Thuận</option>
                                                            <option value="Cà Mau">Cà Mau</option>
                                                            <option value="Cao Bằng">Cao Bằng</option>
                                                            <option value="Gia Lai">Gia Lai</option>
                                                            <option value="Hà Giang">Hà Giang</option>
                                                            <option value="Hà Nam">Hà Nam</option>
                                                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                            <option value="Hậu Giang">Hậu Giang</option>
                                                            <option value="Hòa Bình">Hòa Bình</option>
                                                            <option value="Hưng Yên">Hưng Yên</option>
                                                            <option value="Khánh Hòa">Khánh Hòa</option>
                                                            <option value="Kiên Giang">Kiên Giang</option>
                                                            <option value="Kon Tum">Kon Tum</option>
                                                            <option value="Lai Châu">Lai Châu</option>
                                                            <option value="Lâm Đồng">Lâm Đồng</option>
                                                            <option value="Lạng Sơn">Lạng Sơn</option>
                                                            <option value="Lào Cai">Lào Cai</option>
                                                            <option value="Long An">Long An</option>
                                                            <option value="Nam Định">Nam Định</option>
                                                            <option value="Ninh Bình">Ninh Bình</option>
                                                            <option value="Phú Thọ">Phú Thọ</option>
                                                            <option value="Quảng Bình">Quảng Bình</option>
                                                            <option value="Quảng Nam">Quảng Nam</option>
                                                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                            <option value="Quảng Trị">Quảng Trị</option>
                                                            <option value="Sóc Trăng">Sóc Trăng</option>
                                                            <option value="Sơn La">Sơn La</option>
                                                            <option value="Tây Ninh">Tây Ninh</option>
                                                            <option value="Thái Bình">Thái Bình</option>
                                                            <option value="Thái Nguyên">Thái Nguyên</option>
                                                            <option value="Tiền Giang">Tiền Giang</option>
                                                            <option value="Trà Vinh">Trà Vinh</option>
                                                            <option value="Tuyên Quang">Tuyên Quang</option>
                                                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                            <option value="Yên Bái">Yên Bái</option>

                                         </div>
                                    </div>
                                    <input type="hidden" name="city" id="city" required> <!-- Trường ẩn để lưu giá trị -->

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
                                        </p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">

                                        <label for="type">Property Type</label>
                                        <br>
                                        <select name="type" id="type" required>
                                            <option value="apartment">Apartment</option>
                                            <option value="house">House</option>
                                        </select>

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
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <!-- MAIN JS -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Quill
            var quill = new Quill('#description-editor', {
                theme: 'snow',
                placeholder: 'Describe your property...',
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline'],
                        [{
                            'list': 'ordered'
                        }, {
                            'list': 'bullet'
                        }],
                        ['emoji'] // Add emoji picker plugin here if using
                    ]
                }
            });

            // Sync Quill content with hidden input field for form submission
            quill.on('text-change', function() {
                document.getElementById('description').value = quill.root.innerHTML;
            });
        });
    </script>
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

        <
        /scrip>
    @endpush
