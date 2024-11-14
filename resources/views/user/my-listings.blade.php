@extends('user.dashboard.layout.user_app')
@section('title', 'My Listing')
@push('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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
    <style>
        #city {
            max-height: 150px; /* Giới hạn chiều cao cho ô select */
            overflow-y: auto; /* Thêm dải cuộn khi chiều cao vượt quá giới hạn */
        }
    </style>
@endpush

@php
    $bodyClass = 'inner-pages maxw1600 m0a dashboard-bd';
@endphp
@section('content')
    <!-- START SECTION USER PROFILE -->
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">
            <div class="row">
                @include('user.dashboard.layout.menu')
                <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
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
                                        <a class="active" href="my-listings.html">
                                            <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favorited-listings.html">
                                            <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-property.html">
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
                    <div class="my-properties">
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th class="pl-2">My Properties</th>
                                    <th class="p-0"></th>
                                    <th>Room_id</th>
                                    <th>Area</th>
                                    <th>Location</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                    <th>Date Added</th>
                                    <th>Views</th>
                                    <th>City</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td class="image myelist">
                                            <a href="{{ route('rooms.show', $room->room_id) }}">
                                                <img alt="property-image" src="{{ asset('storage/' . $room->first_image) }}"
                                                    class="img-fluid">
                                            </a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <h2>{{ $room->title }}</h2>
                                                <figure><i class="lni-map-marker"></i> {{ $room->location }}</figure>
                                                <ul class="starts text-left mb-0">


                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{ $room->room_id }} </td>
                                        <td>{{ $room->area }} m²</td>
                                        <td>{{ $room->location }}</td>
                                        <td>${{ number_format($room->price, 2) }}</td>
                                        <td>
                                            <span
                                                class="{{ $room->status == 'available' ? 'text-success' : 'text-danger' }}">
                                                {{ ucfirst($room->status) }}
                                            </span>
                                        </td>
                                        <td>{{ substr($room->description, 0, 30) . (strlen($room->description) > 50 ? '...' : '') }}
                                        </td>

                                        <td>{{ $room->created_at }}</td>
                                        <td>{{ $room->views }}</td>
                                        <td>{{ $room->city }}</td>
                                        <td>{{ $room->type }}</td>
                                        <td class="actions">
                                            <a href="#" class="edit" data-room-id="{{ $room->room_id }}"
                                                data-room="{{ json_encode($room) }}">
                                                <i class="lni-pencil"></i>Edit
                                            </a>


                                            <form action="{{ route('room.destroy', $room->room_id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    style="border: none; background: none; color: inherit; padding: 0; cursor: pointer;">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>


                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-container">
                            <nav>
                                <ul class="pagination">
                                    @if ($rooms->onFirstPage())
                                        <li class="page-item disabled"><span class="btn btn-common"><i
                                                    class="lni-chevron-left"></i> Previous</span></li>
                                    @else
                                        <li class="page-item"><a class="btn btn-common"
                                                href="{{ $rooms->previousPageUrl() }}"><i class="lni-chevron-left"></i>
                                                Previous</a></li>
                                    @endif

                                    @foreach ($rooms->links()->elements[0] as $page => $url)
                                        @if ($page == $rooms->currentPage())
                                            <li class="page-item active"><span
                                                    class="page-link">{{ $page }}</span>
                                            </li>
                                        @else
                                            <li class="page-item"><a class="page-link"
                                                    href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    @if ($rooms->hasMorePages())
                                        <li class="page-item"><a class="btn btn-common"
                                                href="{{ $rooms->nextPageUrl() }}">Next <i
                                                    class="lni-chevron-right"></i></a></li>
                                    @else
                                        <li class="page-item disabled"><span class="btn btn-common">Next <i
                                                    class="lni-chevron-right"></i></span></li>
                                    @endif
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="single-add-property">
                        <h3>Property Description and Price</h3>
                        <div class="property-form-group">
                            <form method="POST" enctype="multipart/form-data" id="editRoomForm">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="room_id" id="room_id">
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
                                            <input type="number" name="price" placeholder="USD" id="price"
                                                required>
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
                                            <select name="city" id="city" required>
                                                <option value="">Chọn Thành phố</option>
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

                                            </select>
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
                                    <button type="submit" class="btn btn-primary">Update Room</button>
                                </div>
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <!-- MAIN JS -->
    <script src="js/script.js"></script>
    <script>
        document.querySelectorAll('.edit').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                const roomData = JSON.parse(this.getAttribute('data-room'));
                const roomId = this.getAttribute('data-room-id');

                // Điền dữ liệu vào form
                document.getElementById('title').value = roomData.title;

                document.getElementById('price').value = roomData.price;
                document.getElementById('area').value = roomData.area;
                document.getElementById('location').value = roomData.location;
               

              
                // Cập nhật nội dung vào Quill editor nếu đã có Quill sẵn
                if (window.quillEditor) {
                    window.quillEditor.root.innerHTML = roomData.description;
                }
                // Cập nhật room_id vào input ẩn
                document.getElementById('room_id').value = roomId;

                // Cập nhật action của form với room_id hiện tại
                document.getElementById('editRoomForm').action = `/my-listings/${roomId}`;

                console.log('Updated form action:', document.getElementById('editRoomForm').action);
            });
        });
    </script>


<script>
   document.addEventListener('DOMContentLoaded', function () {
        // Populate cities
        const citySelect = document.getElementById('city');
        cities.forEach(city => {
            const option = document.createElement('option');
            option.value = city.name;
            option.textContent = city.name;
            citySelect.appendChild(option);
        });

        // Populate property types
        const typeSelect = document.getElementById('type');
        propertyTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.name;
            option.textContent = type.name;
            typeSelect.appendChild(option);
        });
    });
</script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Quill Editor
            window.quillEditor = new Quill('#description-editor', {
                theme: 'snow',
                placeholder: 'Describe your property...',
            });

            // Sync Quill content with hidden input field for form submission
            window.quillEditor.on('text-change', function() {
                document.getElementById('description').value = window.quillEditor.root.innerHTML;
            });

            // When form is submitted, make sure description is updated with the latest content
            document.getElementById('editRoomForm').addEventListener('submit', function() {
                // Ensure description is updated before form submission
                document.getElementById('description').value = window.quillEditor.root.innerHTML;
            });
        });
    </script>

    <script>

document.querySelector('.nice-select').addEventListener('click', function() {
    const list = this.querySelector('.list');
    if (list.style.maxHeight === '200px') {
        list.style.maxHeight = 'none'; // Hoặc một chiều cao khác nếu cần
    } else {
        list.style.maxHeight = '200px';
    }
});
    </script>
@endpush
