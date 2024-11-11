<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/shop-checkout')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:16 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Shop Checkout</title>
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
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages checkout hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('layouts.header')
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PAYMENT-METHOD -->
        <section class="payment-method notfound">
            <div class="container">
                <section class="headings-2 pt-0 hee">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p><a href="{{url('/index')}}">Home </a> &nbsp;/&nbsp; <span>Checkout</span></p>
                                </div>
                                <h3>Checkout</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-6">
                        <div class="tr-single-box">
                            <div class="tr-single-body">
                                <div class="tr-single-header">
                                    <h4><i class="far fa-address-card pr-2"></i>Billing Information</h4>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>State</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Country</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Address</label>
                                        <input type="text" class="form-control address mb-0">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Zip</label>
                                        <input type="text" class="form-control mb-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xl-6">
                        <div class="tr-single-box">
                            <div class="tr-single-body">
                                <div class="tr-single-header">
                                    <h4><i class="far fa-credit-card pr-2"></i>Payment Method</h4>
                                </div>
                                <!-- Paypal Option -->
                                <div class="payment-card">
                                    <header class="payment-card-header cursor-pointer" data-toggle="collapse" data-target="#paypal" aria-expanded="true">
                                        <div class="payment-card-title flexbox">
                                            <h4>PayPal</h4>
                                        </div>
                                        <div class="pull-right">
                                            <img src="images/paypal.png" class="img-responsive" alt="">
                                        </div>
                                    </header>
                                    <div class="collapse" id="paypal" role="tablist" aria-expanded="false">
                                        <div class="payment-card-body">
                                            <div class="row mrg-bot-20">
                                                <div class="col-sm-6">
                                                    <span class="custom-checkbox d-block font-12 mb-2">
													<input type="checkbox" id="promo1">
													<label for="promo1"></label>
													Have a promo code?
												</span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-6 padd-top-10 text-right">
                                                    <label>Total Order</label>
                                                    <h2 class="mrg-0"><span class="theme-cl">$</span>950</h2>
                                                </div>
                                                <div class="col-sm-12 bt-1 padd-top-15 pt-3">
                                                    <span class="custom-checkbox d-block font-12 mb-3">
													<input type="checkbox" id="privacy">
													<label for="privacy"></label>
													By ordering you are agreeing to our <a href="#" class="theme-cl">Privacy policy</a>.
												</span>
                                                    <button type="submit" class="btn btn-m btn-success">Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Debit card option -->
                                <div class="payment-card mb-0">
                                    <header class="payment-card-header cursor-pointer" data-toggle="collapse" data-target="#debit-credit" aria-expanded="true">
                                        <div class="payment-card-title flexbox">
                                            <h4>Credit / Debit Card</h4>
                                        </div>
                                        <div class="pull-right">
                                            <img src="images/credit.png" class="img-responsive" alt="">
                                        </div>
                                    </header>
                                    <div class="collapse" id="debit-credit" role="tablist" aria-expanded="false">
                                        <div class="payment-card-body">
                                            <div class="row mrg-bot-20">
                                                <div class="col-sm-6">
                                                    <label>Card Holder Name</label>
                                                    <input type="text" class="form-control" placeholder="Chris Seail">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Card No.</label>
                                                    <input type="email" class="form-control" placeholder="1800 5785 6758 2458">
                                                </div>
                                            </div>
                                            <div class="row mrg-bot-20">
                                                <div class="col-sm-4 col-md-4">
                                                    <label>Expire Month</label>
                                                    <input type="text" class="form-control" placeholder="09">
                                                </div>
                                                <div class="col-sm-4 col-md-4">
                                                    <label>Expire Year</label>
                                                    <input type="email" class="form-control" placeholder="2022">
                                                </div>
                                                <div class="col-sm-4 col-md-4">
                                                    <label>CCV Code</label>
                                                    <input type="email" class="form-control" placeholder="258">
                                                </div>
                                            </div>
                                            <div class="row mrg-bot-20">
                                                <div class="col-sm-7">
                                                    <span class="custom-checkbox d-block font-12 mb-2">
													<input type="checkbox" id="promo">
													<label for="promo"></label>
													Have a promo code?
												</span>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-sm-5 padd-top-10 text-right">
                                                    <label>Total Order</label>
                                                    <h2 class="mrg-0"><span class="theme-cl">$</span>987</h2>
                                                </div>
                                                <div class="col-sm-12 bt-1 padd-top-15 pt-3">
                                                    <span class="custom-checkbox d-block font-12 mb-3">
													<input type="checkbox" id="privacy1">
													<label for="privacy1"></label>
													By ordering you are agreeing to our <a href="#" class="theme-cl">Privacy policy</a>.
													</span>
                                                    <button type="submit" class="btn btn-m btn-success">Checkout</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="tr-single-box mb-0">
                            <div class="tr-single-body">
                                <div class="tr-single-header">
                                    <h4><i class="fa fa-star-o"></i>Booking Summary</h4>
                                </div>
                                <div class="booking-price-detail side-list no-border mb-3">
                                    <h5>Reservation Details</h5>
                                    <ul>
                                        <li>Date<strong class="pull-right">18 Jun 2018</strong></li>
                                        <li>Time<strong class="pull-right">9pm 10pm</strong></li>
                                        <li>From<strong class="pull-right">10 jan 2019</strong></li>
                                    </ul>
                                </div>
                                <div class="booking-price-detail side-list no-border">
                                    <h5>Pricing Details</h5>
                                    <ul>
                                        <li>Dining<strong class="pull-right">$150</strong></li>
                                        <li>Reservation<strong class="pull-right">$60</strong></li>
                                        <li>Tax<strong class="pull-right">$53</strong></li>
                                        <li class="red pb-0">Total Cost<strong class="pull-right">$263</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION PAYMENT-METHOD -->

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
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/color-switcher.js"></script>
        <script src="js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/shop-checkout')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:16 GMT -->
</html>
