<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/favorited-listings')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:17 GMT -->
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

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            @include('layouts.header')
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png"> </div>
                            <div class="header clearfix">
                                <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2>Mary Smith</h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a href="{{url('/dashboard')}}">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/user-profile')}}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/my-listings')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="{{url('/favorited-listings')}}">
                                            <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/add-property')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/payment-method')}}">
                                            <i class="fas fa-credit-card"></i>Payments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/invoice')}}">
                                            <i class="fas fa-paste"></i>Invoices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/change-password')}}">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/index')}}">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="{{url('/dashboard')}}">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/user-profile')}}">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/my-listings')}}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="{{url('/favorited-listings')}}">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/add-property')}}">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/payment-method')}}">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/invoice')}}">
                                                <i class="fas fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/change-password')}}">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/index')}}">
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
                                        <th class="pl-2">Top Property</th>
                                        <th class="p-0"></th>
                                        <th>Date Added</th>
                                        <th>Views</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="image myelist">
                                            <a href="{{url('/single-property-1')}}"><img alt="my-properties-3" src="images/feature-properties/fp-1.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="{{url('/single-property-1')}}"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>163</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="{{url('/single-property-1')}}"><img alt="my-properties-3" src="images/feature-properties/fp-2.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="{{url('/single-property-1')}}"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>202</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="{{url('/single-property-1')}}"><img alt="my-properties-3" src="images/feature-properties/fp-3.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="{{url('/single-property-1')}}"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>412</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="{{url('/single-property-1')}}"><img alt="my-properties-3" src="images/feature-properties/fp-4.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="{{url('/single-property-1')}}"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>675</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="{{url('/single-property-1')}}"><img alt="my-properties-3" src="images/feature-properties/fp-5.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="{{url('/single-property-1')}}"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>325</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="image">
                                            <a href="{{url('/single-property-1')}}"><img alt="my-properties-3" src="images/feature-properties/fp-6.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="{{url('/single-property-1')}}"><h2>Luxury Villa House</h2></a>
                                                <figure><i class="lni-map-marker"></i> Est St, 77 - Central Park South, NYC</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star-o"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>08.14.2020</td>
                                        <td>247</td>
                                        <td class="actions">
                                            <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a>
                                            <a href="#"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination-container">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION USER PROFILE -->

        <!-- START FOOTER -->
        @include('layouts.footer')

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

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/favorited-listings')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:17 GMT -->
</html>
