@extends('user.dashboard.layout.user_app')
@section('title', 'My Listing')
@push('styles')
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $room)
                                    <tr>
                                        <td class="image myelist">
                                            <a href="#">
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
                                        <td>{{ substr($room->description, 0, 30) . (strlen($room->description) > 50 ? '...' : '') }}</td>

                                        <td>{{ $room->created_at }}</td>
                                        <td>{{ $room->views }}</td>
                                        <td class="actions">
                                            <a href="#" class="edit" data-room-id="{{ $room->room_id }}" data-room="{{ json_encode($room) }}">
                                                <i class="lni-pencil"></i>Edit
                                            </a>
                                            

                                            <form action="{{ route('room.destroy', $room->room_id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="border: none; background: none; color: inherit; padding: 0; cursor: pointer;">
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
                                            <li class="page-item active"><span class="page-link">{{ $page }}</span>
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
                                            <input type="text" name="title" id="title" placeholder="Enter your property title" required>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="description">Property Description</label>
                                            <textarea id="description" name="description" placeholder="Describe your property" required></textarea>
                                        </p>
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
                                            <input type="text" name="area" placeholder="Sqft" id="area" required>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="location">Location</label>
                                            <input type="text" name="location" id="location" placeholder="Enter location" required>
                                        </p>
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
        document.getElementById('description').value = roomData.description;
        document.getElementById('price').value = roomData.price;
        document.getElementById('area').value = roomData.area;
        document.getElementById('location').value = roomData.location;
        
        // Cập nhật room_id vào input ẩn
        document.getElementById('room_id').value = roomId;

        // Cập nhật action của form với room_id hiện tại
        document.getElementById('editRoomForm').action = `/my-listings/${roomId}`;
        
        console.log('Updated form action:', document.getElementById('editRoomForm').action);
    });
});


    </script>
    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });
    </script>
@endpush
