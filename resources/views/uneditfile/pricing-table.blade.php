<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/pricing-table')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Pricing Table</title>
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
                    <h1>Pricing Table</h1>
                    <h2><a href="{{url('/index')}}">Home </a> &nbsp;/&nbsp; Pricing Table</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PRICING -->
        <section class="pricing-table bg-white-2">
            <div class="container">
                <div class="section-title">
                    <h3>Pricing</h3>
                    <h2>Packages</h2>
                </div>
                <div class="row">
                    <!-- plan start -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="plan text-center">
                            <span class="plan-name">Basic <small>Monthly plan</small></span>
                            <p class="plan-price"><sup class="currency">$</sup><strong>49</strong><sub>.99</sub></p>
                            <ul class="list-unstyled">
                                <li>100GB Monthly Bandwidth</li>
                                <li>$100 Google AdWords</li>
                                <li>100 Domain Hosting</li>
                                <li>SSL Shopping Cart</li>
                                <li>24/7 Live Support</li>
                            </ul>
                            <a class="btn btn-primary" href="#.">Sign Up</a>
                        </div>
                    </div>
                    <!-- plan end -->
                    <!-- plan start -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="plan text-center">
                            <span class="plan-name">Standard <small>Monthly plan</small></span>
                            <p class="plan-price"><sup class="currency">$</sup><strong>99</strong><sub>.99</sub></p>
                            <ul class="list-unstyled">
                                <li>100GB Monthly Bandwidth</li>
                                <li>$100 Google AdWords</li>
                                <li>100 Domain Hosting</li>
                                <li>SSL Shopping Cart</li>
                                <li>24/7 Live Support</li>
                            </ul>
                            <a class="btn btn-primary" href="#.">Sign Up</a>
                        </div>
                    </div>
                    <!-- plan end -->
                    <!-- plan start -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="plan text-center featured no-mgb yes-mgb">
                            <span class="plan-name">Professional <small>Monthly plan</small></span>
                            <p class="plan-price"><sup class="currency">$</sup><strong>149</strong><sub>.99</sub></p>
                            <ul class="list-unstyled">
                                <li>100GB Monthly Bandwidth</li>
                                <li>$100 Google AdWords</li>
                                <li>100 Domain Hosting</li>
                                <li>SSL Shopping Cart</li>
                                <li>24/7 Live Support</li>
                            </ul>
                            <a class="btn btn-primary" href="#.">Sign Up</a>
                        </div>
                    </div>
                    <!-- plan end -->
                    <!-- plan start -->
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="plan text-center no-mgb">
                            <span class="plan-name">Premium <small>Monthly plan</small></span>
                            <p class="plan-price"><sup class="currency">$</sup><strong>399</strong><sub>.99</sub></p>
                            <ul class="list-unstyled">
                                <li>100GB Monthly Bandwidth</li>
                                <li>$100 Google AdWords</li>
                                <li>100 Domain Hosting</li>
                                <li>SSL Shopping Cart</li>
                                <li>24/7 Live Support</li>
                            </ul>
                            <a class="btn btn-primary" href="#.">Sign Up</a>
                        </div>
                    </div>
                    <!-- plan end -->
                </div>
            </div>
        </section>
        <!-- END SECTION PRICING -->

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
        <script src="js/color-switcher.js"></script>
        <script src="js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/pricing-table')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:19 GMT -->
</html>
