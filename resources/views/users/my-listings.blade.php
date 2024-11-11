<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/my-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:17 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
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
</head>

<body class="inner-pages maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
           @include('users.header-user')
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        @include('users.user-profile-box')

                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
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
                                        <th>Date Added</th>
                                        <th>Property Title</th>
                                        <th>Price per Month</th>
                                        <th>Electricity Price</th>
                                        <th>Water Price</th>
                                        <th>Area</th>
                                        <th>Description</th>
                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($properties as $property)
                                    <tr>
                                        <td class="image">
                                            <a>
                                                @php
                                                    $firstImage = json_decode($property->images, true)[0] ?? null; // Get the first image from the array
                                                @endphp

                                                @if ($firstImage)
                                                    <img alt="{{ $property->property_title }}" src="{{ asset('storage/' . $firstImage) }}" class="img-fluid">
                                                @else
                                                    <p>No image available</p> <!-- Display a fallback message or placeholder if no images are available -->
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="{{ route('my-listings', $property->id) }}">
                                                    <h2>{{ $property->property_title }}</h2>
                                                </a>
                                                <figure><i class="lni-map-marker"></i> {{ $property->location }}</figure>
                                                <ul class="starts text-left mb-0">
                                                    <!-- Example stars based on ratings, customize as needed -->
                                                    @for ($i = 0; $i < 5; $i++)
                                                        <li class="mb-0"><i class="fa fa-star{{ $i < 4 ? '' : '-o' }}"></i></li> <!-- Example: 4 stars -->
                                                    @endfor
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{ $property->created_at->format('m.d.Y') }}</td>
                                        <td>{{ $property->price_per_month }}</td>
                                        <td>{{ $property->electricity_price }}</td>
                                        <td>{{ $property->water_price }}</td>
                                        <td>{{ $property->area }}</td>
                                        <td>{{ $property->description }}</td>
                                        <td>{{ $property->location }}</td>
                                        <td class="actions">
                                            <a href="javascript:void(0);" onclick="showEditForm({{ $property->id }})" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <form action="{{ route('property.destroy', $property->id) }}" method="POST" style="display:inline;">
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
                                        @if ($properties->onFirstPage())
                                            <li class="page-item disabled"><span class="btn btn-common"><i class="lni-chevron-left"></i> Previous</span></li>
                                        @else
                                            <li class="page-item"><a class="btn btn-common" href="{{ $properties->previousPageUrl() }}"><i class="lni-chevron-left"></i> Previous</a></li>
                                        @endif
                            
                                        @foreach ($properties->links()->elements[0] as $page => $url)
                                            @if ($page == $properties->currentPage())
                                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                            @else
                                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                            
                                        @if ($properties->hasMorePages())
                                            <li class="page-item"><a class="btn btn-common" href="{{ $properties->nextPageUrl() }}">Next <i class="lni-chevron-right"></i></a></li>
                                        @else
                                            <li class="page-item disabled"><span class="btn btn-common">Next <i class="lni-chevron-right"></i></span></li>
                                        @endif
                                    </ul>
                                </nav>
                            </div> 
                            
                            

                        </div>
                        <br>
                           
                        <div class="single-add-property" id="edit-form-container">
                            <h3>Edit Property description and price</h3>
                            <div class="property-form-group">
                                <form method="post" id="edit-property-form" enctype="multipart/form-data">
                                    @csrf
                                    @method('Post')
                                    <input type="hidden" id="property_id" name="property_id">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="property_title">Property Title</label>
                                                <input type="text" name="property_title" id="property_title" placeholder="Enter your property title" required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">Property Description</label>
                                                <textarea id="description" name="description" placeholder="Describe about your property"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="location">Location</label>
                                                <input type="text" name="location" id="location" placeholder="Enter the location" required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                <label for="price_per_month">Price Per Month (USD)</label>
                                                <input type="text" name="price_per_month" id="price_per_month" placeholder="Enter monthly rental price" required>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <label for="area">Area (Sqft)</label>
                                                <input type="text" name="area" id="area" placeholder="Enter the area" required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>
                                                <label for="electricity_price">Electricity Price (USD)</label>
                                                <input type="text" name="electricity_price" id="electricity_price" placeholder="Enter electricity price" required>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                <label for="water_price">Water Price (USD)</label>
                                                <input type="text" name="water_price" id="water_price" placeholder="Enter water price" required>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="property_images">Property Images</label>
                                                <input type="file" class="form-control-file" name="property_images[]" id="property_images" accept="image/*" multiple>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Current Images:</h4>
                                            <div id="current-images">
                                                
                                                    <p>No images available</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg mt-2" onclick="submitEditForm()">Submit</button>
                                </form>
                            </div>
                        </div>
                        
   

                        
                      
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- END SECTION USER PROFILE -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="second-footer">
                <div class="container">
                    <p>2021 © Copyright - All Rights Reserved.</p>
                    <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
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
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>
        <script>
           function showEditForm(propertyId) {
         // Fetch the property data using AJAX
         fetch(`/property/${propertyId}/edit`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to fetch property data.');
            }
            return response.json();
        })
        .then(data => {
            // Populate the form fields with the data
            document.getElementById('property_id').value = data.id;
            document.getElementById('property_title').value = data.property_title;
            document.getElementById('description').value = data.description;
            document.getElementById('location').value = data.location;
            document.getElementById('price_per_month').value = data.price_per_month;
            document.getElementById('area').value = data.area;
            document.getElementById('electricity_price').value = data.electricity_price;
            document.getElementById('water_price').value = data.water_price;

            // Display current images
            const currentImagesContainer = document.getElementById('current-images');
            const images = JSON.parse(data.images); // Assuming `images` comes as a JSON string

            currentImagesContainer.innerHTML = ''; // Clear previous images
            if (images.length > 0) {
                images.forEach(image => {
                    const imgElement = document.createElement('img');
                    imgElement.src = `/storage/${image}`; // Ensure the path is correct
                    imgElement.alt = "Property Image";
                    imgElement.style.width = "100px"; // Adjust size as needed
                    imgElement.style.marginRight = "10px"; // Add some spacing
                    currentImagesContainer.appendChild(imgElement);
                });
            } else {
                currentImagesContainer.innerHTML = '<p>No images available</p>';
            }

            // Show the edit form container
            document.getElementById('edit-form-container').style.display = 'block';

            // Scroll to the edit form with offset
            const editFormContainer = document.getElementById('edit-form-container');
            const headerHeight = document.querySelector('h3').offsetHeight;

            window.scrollTo({
                top: editFormContainer.offsetTop - headerHeight + 100,
                behavior: 'smooth'
            });
        })
        .catch(error => console.error('Error:', error));
}
function submitEditForm() {
    const propertyId = document.getElementById('property_id').value;
    const formData = new FormData(document.getElementById('edit-property-form'));

    // Submit the form using AJAX
    fetch(`/property/${propertyId}/update/`, {
        method: 'POST', // Use POST for updates
        body: formData,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure CSRF token is included
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Failed to update property.');
        }
        return response.json();
    })
    .then(data => {
        alert(data.message);
        location.reload();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('update property successfully.');
        location.reload();
    });
}
        </script>
        
        
        

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/my-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:17 GMT -->
</html>
