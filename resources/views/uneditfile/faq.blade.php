<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:19 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>FAQ'S</title>
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

<body class="inner-pages ui-elements hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('layouts.navbar')
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>FAQ’S</h1>
                    <h2><a href="{{ route('home') }}">Home </a> &nbsp;/&nbsp; FAQ’S</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION FAQ -->
        <section class="faq service-details bg-white">
            <div class="container">
                <h3 class="mb-5">FREQUENTLY ASKED QUESTIONS</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h5 class="uppercase mb40">Questions about Selling</h5>
                        <ul class="accordion accordion-1 one-open">
                            <li class="active">
                                <div class="title">
                                    <span>What payment methods are available?</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Currently our available transaction method is VNPay.
                                     </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>How to schedule a viewing?</span>
                                </div>
                                <div class="content">
                                    <p>
                                        You can contact the poster by phone or email to schedule a viewing.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>What is the service fee when transacting through the site?  </span>
                                </div>
                                <div class="content">
                                    <p>
                                        Since we are new, our site does not currently charge any fees from consumers.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>Do I need to provide legal documents when posting an ad?</span>
                                </div>
                                <div class="content">
                                    <p>
                                        We currently do not require legal documents when posting, but to increase credibility you should have additional legal images for buyers to refer to.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>How to ensure safe transactions?</span>
                                </div>
                                <div class="content">
                                    <p>Check the legal documents of the property carefully.</p>
                                    <p>Transactions through banks instead of cash payments.</p>
                                    <p>Use standard sales or lease contracts certified by competent authorities.</p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>How long is the posts valid for?</span>
                                </div>
                                <div class="content">
                                    <p>
                                        Our site does not limit the duration of your posts. </p>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <span>Is the information on the site reliable?</span>
                                </div>
                                <div class="content">
                                    <p>
                                        To increase safety, you should carefully check the necessary steps before trading.
                                    </p>
                                </div>
                            </li>
                            
                        </ul>
                        <!--end of accordion-->
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION FAQ -->

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

        <script>
            $(".accordion li").click(function() {
                $(this).closest(".accordion").hasClass("one-open") ? ($(this).closest(".accordion").find("li").removeClass("active"), $(this).addClass("active")) : $(this).toggleClass("active"), "undefined" != typeof window.mr_parallax && setTimeout(mr_parallax.windowLoad, 500)
            });

        </script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:19 GMT -->
</html>
