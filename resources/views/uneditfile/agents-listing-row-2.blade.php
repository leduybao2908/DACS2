<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/agents-listing-row-2')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Agents Listing Row</title>
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
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages agents hd-white">
    <!-- START SECTION HEADINGS -->
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('layouts.header')
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION AGENTS -->
        <section class="team blog pt-5">
            <div class="container">
               <section class="headings-2 pt-0 pb-55">
                    <div class="pro-wrapper">
                        <div class="detail-wrapper-body">
                            <div class="listing-title-bar">
                                <div class="text-heading text-left">
                                    <p class="pb-2"><a href="{{url('/index')}}">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                                </div>
                                <h3>All Agents</h3>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-12 agent-mb">
                       <section class="headings-2 pt-0">
                            <div class="pro-wrapper">
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <div class="text-heading text-left">
                                            <p class="font-weight-bold mb-0 mt-3">4 Search results</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center grid">
                                    <div class="input-group border rounded input-group-lg w-auto mr-4">
                                        <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                        <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                            <option selected>Alphabet</option>
                                            <option value="1">Random</option>
                                            <option value="1">Rating</option>
                                            <option value="1">Number of property</option>
                                        </select>
                                    </div>
                                    <div class="sorting-options">
                                        <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                        <a href="{{url('/agents-listing-grid')}}" class="change-view-btn lde"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="agent agent-row shadow-hover">
                            <a href="{{url('/agent-details')}}" class="agent-img">
                                <div class="img-fade"></div>
                                <div class="button alt agent-tag">60 Properties</div>
                                <img src="images/team/t-1.jpg" alt="" />
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="{{url('/agent-details')}}">CARLS JHONS</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Selling Agent</p>
                                    <p><i class="fa fa-envelope icon"></i>carls@realhome.com</p>
                                    <p><i class="fa fa-phone icon"></i>(234) 200-7813</p>
                                </div>
                                <div class="agent-text">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="agent-footer center">
                                    <ul class="netsocials">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 agent-mb">
                        <div class="agent agent-row shadow-hover">
                            <a href="{{url('/agent-details')}}" class="agent-img">
                                <div class="img-fade"></div>
                                <div class="button alt agent-tag">60 Properties</div>
                                <img src="images/team/t-2.jpg" alt="" />
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="{{url('/agent-details')}}">ARLING TRACY</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Selling Agent</p>
                                    <p><i class="fa fa-envelope icon"></i>arling@realhome.com</p>
                                    <p><i class="fa fa-phone icon"></i>(234) 200-7813</p>
                                </div>
                                <div class="agent-text">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="agent-footer center">
                                    <ul class="netsocials">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 agent-mb">
                        <div class="agent agent-row shadow-hover">
                            <a href="{{url('/agent-details')}}" class="agent-img">
                                <div class="img-fade"></div>
                                <div class="button alt agent-tag">60 Properties</div>
                                <img src="images/team/t-3.jpg" alt="" />
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="{{url('/agent-details')}}">MARK WEB</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Selling Agent</p>
                                    <p><i class="fa fa-envelope icon"></i>mark@realhome.com</p>
                                    <p><i class="fa fa-phone icon"></i>(234) 200-7813</p>
                                </div>
                                <div class="agent-text">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="agent-footer center">
                                    <ul class="netsocials">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 agent-mb">
                        <div class="agent agent-row shadow-hover">
                            <a href="{{url('/agent-details')}}" class="agent-img">
                                <div class="img-fade"></div>
                                <div class="button alt agent-tag">60 Properties</div>
                                <img src="images/team/t-4.jpg" alt="" />
                            </a>
                            <div class="agent-content">
                                <div class="agent-details">
                                    <h4><a href="{{url('/agent-details')}}">KATY GRACE</a></h4>
                                    <p><i class="fa fa-tag icon"></i>Selling Agent</p>
                                    <p><i class="fa fa-envelope icon"></i>katy@realhome.com</p>
                                    <p><i class="fa fa-phone icon"></i>(234) 200-7813</p>
                                </div>
                                <div class="agent-text">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet...</p>
                                </div>
                                <div class="agent-footer center">
                                    <ul class="netsocials">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <nav aria-label="..." class="pt-0">
                    <ul class="pagination mt-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <!-- END SECTION AGENTS -->

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
        <script src="js/search.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/color-switcher.js"></script>
        <script src="js/inner.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/agents-listing-row-2')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Oct 2024 14:28:04 GMT -->
</html>
