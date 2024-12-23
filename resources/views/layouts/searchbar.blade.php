<!-- STAR HEADER SEARCH -->
<section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
    
        <div class="container" data-aos="zoom-in">
            <div class="row">
                <div class="col-12">
                    <div class="hero-inner">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="h1">Find Your Dream
                                <br class="d-md-none">
                                {{-- <span class="typed border-bottom"></span> --}}
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

                                            <form action="{{ route('property.search') }}" method="GET">

                                                <div class="row">
                                                    <div class="rld-single-input">
                                                        <input name="title" type="text"
                                                            placeholder="Enter Keyword...">
                                                    </div>
                                                    <div class="rld-single-select ml-22">
                                                        <select class="select single-select" name="type">
                                                            <option value="all">all</option>
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
                                                                <div class="range-slider">
                                                                    <label>Area Size</label>
                                                                    <div id="area-range" data-min="0"
                                                                        data-max="100" data-unit="m&#178;"></div>
                                                                    <input type="hidden" name="area_min"
                                                                        id="area-min">
                                                                    <input type="hidden" name="area_max"
                                                                        id="area-max">
                                                                </div>

                                                                <!-- Giá Range -->
                                                                <div class="range-slider">
                                                                    <label>Price Range</label>
                                                                    <div id="price-range" data-min="0"
                                                                        data-max="10000000" data-unit="VND"></div>
                                                                    <input type="hidden" name="price_min"
                                                                        id="price-min">
                                                                    <input type="hidden" name="price_max"
                                                                        id="price-max">
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
                    </div>
                </div>
            </div>
        </div>
    
</section>
<!-- END HEADER SEARCH -->
