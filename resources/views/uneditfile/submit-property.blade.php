<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/submit-property')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:23 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Submit Property</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/fontawesome-5-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('layouts.header')
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Submit Property</h1>
                    <h2><a href="{{url('/index')}}">Home </a> &nbsp;/&nbsp; Submit Property</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION SUBMIT PROPERTY -->
        <section class="royal-add-property-area section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="single-add-property">
                            <h3>Property description and price</h3>
                            <div class="property-form-group">
                                <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="title">Property Title</label>
                                                <input type="text" name="title" id="title" placeholder="Enter your property title">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">Property Description</label>
                                                <textarea id="description" name="pro-dexc" placeholder="Describe about your property"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="dropdownmissdcall">Status</label>
                                                <button class="pro-status dropdown-toggle" type="button" id="dropdownmissdcall" data-toggle="dropdown" aria-haspopup="true">
                                                    Select status
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu faq-drop-open" aria-labelledby="dropdownmissdcall">
                                                    <li>rent</li>
                                                    <li>sale</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="dropdowntype">type</label>
                                                <button class="pro-type dropdown-toggle" type="button" id="dropdowntype" data-toggle="dropdown" aria-haspopup="true">
                                                    Select Type
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu faq-drop-open" aria-labelledby="dropdowntype">
                                                    <li>house</li>
                                                    <li>commercial</li>
                                                    <li>apartment</li>
                                                    <li>lot</li>
                                                    <li>garage</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="dropdown faq-drop">
                                                <label for="rooms">rooms</label>
                                                <button class="pro-room dropdown-toggle" type="button" id="rooms" data-toggle="dropdown" aria-haspopup="true">
                                                    Select Type
                                                    <i class="fa fa-angle-down"></i>
                                                </button>
                                                <ul class="dropdown-menu faq-drop-open" aria-labelledby="rooms">
                                                    <li>1</li>
                                                    <li>2</li>
                                                    <li>3</li>
                                                    <li>4</li>
                                                    <li>5</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">Price</label>
                                                <input type="text" name="price" placeholder="USD" id="price">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="area">Area</label>
                                                <input type="text" name="area" placeholder="Sqft" id="area">
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Media</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="https://code-theme.com/file-upload" class="dropzone"></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Location</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="address">Address</label>
                                            <input type="text" name="address" placeholder="Enter Your Address" id="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" name="city" placeholder="Enter Your City" id="city">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="state">State</label>
                                            <input type="text" name="state" placeholder="Enter Your State" id="state">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="country">Country</label>
                                            <input type="text" name="country" placeholder="Enter Your Country" id="country">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb first">
                                            <label for="latitude">Google Maps latitude</label>
                                            <input type="text" name="latitude" placeholder="Google Maps latitude" id="latitude">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb last">
                                            <label for="longitude">Google Maps longitude</label>
                                            <input type="text" name="longitude" placeholder="Google Maps longitude" id="longitude">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Extra Information</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb">
                                            <label for="age">Building Age <span>(optional)</span></label>
                                            <button class="pro-age dropdown-toggle" type="button" id="age" data-toggle="dropdown" aria-haspopup="true">
                                                Select Age
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu faq-drop-open" aria-labelledby="age">
                                                <li>0-1 years</li>
                                                <li>0-5 years</li>
                                                <li>0-10 years</li>
                                                <li>0-15 years</li>
                                                <li>0-20 years</li>
                                                <li>0-50 years</li>
                                                <li>50+ years</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb">
                                            <label for="bed">Bedrooms <span>(optional)</span></label>
                                            <button class="pro-bed dropdown-toggle" type="button" id="bed" data-toggle="dropdown" aria-haspopup="true">
                                                Select Bedrooms
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu faq-drop-open" aria-labelledby="bed">
                                                <li>1</li>
                                                <li>2</li>
                                                <li>3</li>
                                                <li>4</li>
                                                <li>5</li>
                                                <li>6</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="dropdown faq-drop no-mb last">
                                            <label for="bath">Bathrooms <span>(optional)</span></label>
                                            <button class="pro-bath dropdown-toggle" type="button" id="bath" data-toggle="dropdown" aria-haspopup="true">
                                                Select Bathrooms
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu faq-drop-open" aria-labelledby="bath">
                                                <li>1</li>
                                                <li>2</li>
                                                <li>3</li>
                                                <li>4</li>
                                                <li>5</li>
                                                <li>6</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Property Features</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="pro-feature-add pl-0">
                                            <li class="checkboxes one-in-row margin-bottom-10">
                                                <input id="check-2" type="checkbox" name="check">
                                                <label for="check-2">Air Conditioning</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10">
                                                <input id="check-3" type="checkbox" name="check">
                                                <label for="check-3">Swimming Pool</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10">
                                                <input id="check-4" type="checkbox" name="check">
                                                <label for="check-4">Central Heating</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10">
                                                <input id="check-5" type="checkbox" name="check">
                                                <label for="check-5">Laundry Room</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10">
                                                <input id="check-6" type="checkbox" name="check">
                                                <label for="check-6">Gym</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10">
                                                <input id="check-7" type="checkbox" name="check">
                                                <label for="check-7">Alarm</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10">
                                                <input id="check-8" type="checkbox" name="check">
                                                <label for="check-8">Window Covering</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10 no-mb">
                                                <input id="check-9" type="checkbox" name="check">
                                                <label for="check-9">Refrigerator</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10 no-mb">
                                                <input id="check-10" type="checkbox" name="check">
                                                <label for="check-10">TV Cable &amp; WIFI</label>
                                            </li>
                                            <li class="checkboxes one-in-row margin-bottom-10 no-mb last">
                                                <input id="check-11" type="checkbox" name="check">
                                                <label for="check-11">Microwave</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Contact Information</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="con-name">Name</label>
                                            <input type="text" placeholder="Enter Your Name" id="con-name" name="con-name">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="con-user">Username</label>
                                            <input type="text" placeholder="Enter Your Username" id="con-user" name="con-user">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb first">
                                            <label for="con-email">Email</label>
                                            <input type="email" placeholder="Enter Your Email" id="con-email" name="con-email">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb last">
                                            <label for="con-phn">Phone</label>
                                            <input type="text" placeholder="Enter Your Phone Number" id="con-phn" name="con-phn">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-property-button">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="prperty-submit-button">
                                        <button type="submit">Submit Property</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION SUBMIT PROPERTY -->

        <!-- START FOOTER -->
      @include('layouts.footer')

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

        <!-- ARCHIVES JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/dropzone.js"></script>
        <script src="js/color-switcher.js"></script>
        <script src="js/inner.js"></script>

        <script>
            $(".dropzone").dropzone({
                dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
            });

        </script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/submit-property')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:23 GMT -->
</html>
