<header id="header-container">
    <!-- Header -->
    <div id="header">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="/"><img src="images/logo-red.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a href="/">Home</a>

                        </li>
                        <li><a href="{{ route('all-rooms') }}">Listing</a>

                        </li>

                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop-with-sidebar.html">Product Sidebar</a></li>
                                        <li><a href="shop-full-page.html">Product Fullpage</a></li>
                                        <li><a href="shop-single.html">Product Single</a></li>
                                        <li><a href="shop-checkout.html">Checkout Page</a></li>
                                        <li><a href="shop-order.html">Order Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">User Panel</a>
                                    <ul>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="my-listings.html">My Properties</a></li>
                                        <li><a href="favorited-listings.html">Favorited Properties</a></li>
                                        <li><a href="add-property.html">Add Property</a></li>
                                        <li><a href="payment-method.html">Payment Method</a></li>
                                        <li><a href="invoice.html">Invoice</a></li>
                                        <li><a href="change-password.html">Change Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="pricing-table.html">Pricing Tables</a></li>
                                <li><a href="404.html">Page 404</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="under-construction.html">Under Construction</a></li>
                                <li><a href="ui-element.html">UI Elements</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog</a>
                            <ul>
                                <li><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="blog-full-grid.html">Full Grid</a></li>
                                        <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="blog-full-list.html">Full List</a></li>
                                        <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{ Auth::check() ? route('my-listings') : route('login') }}" class="button border">
                        Add Listing<i class="fas fa-laptop-house ml-2"></i>
                    </a>
                </div>
                <!-- Header Widget / End -->
            </div>

            <!-- Right Side Content / End -->

            <!-- Right Side Content / End -->


            @if (Auth::check())
            <div class="header-user-menu user-menu add" id="user-menu">
                <div class="header-user-name" style="color: black;">
                    <span>
                        <img src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : asset('images/testimonials/ts-1.jpg') }}" alt="">
                    </span> 
                    Hi, {{ Auth::user()->name }}
                </div>
                <ul>
                    <li><a href="{{ route('user-profile') }}">Edit profile</a></li>
                    <li><a href="{{ route('add-property') }}">Add Property</a></li>
                    <li><a href="{{ route('payment-method') }}">Payments</a></li>
                    <li><a href="{{ route('change-password') }}">Change Password</a></li>
                    <li><a href="{{ route('logout') }}" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a></li>
                </ul>
            
                <!-- Logout Form -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            @else
                <!-- Displayed if not logged in -->
                <div id="sign-in-menu">
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            
                                <a href="{{ route('login') }} ">Sign In</a>
                          
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                </div>
            @endif
            <!-- lang-wrap-->
            <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                <div class="lang-wrap">
                    <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i
                            class="fa fa-caret-down arrlan"></i></div>
                    <ul class="lang-tooltip lang-action no-list-style">
                        <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                        <li><a href="#" data-lantext="Fr">Francais</a></li>
                        <li><a href="#" data-lantext="Es">Espanol</a></li>
                        <li><a href="#" data-lantext="De">Deutsch</a></li>
                    </ul>
                </div>
            </div>
            <!-- lang-wrap end-->

        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
