 <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="index.html"><img src="images/logo.svg" alt=""></a>
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
                                <li><a href="#">Home</a>
                                    
                                    </li>
                                    <li><a href="#">Listing</a>
                                        
                                    </li>
                                    
                                    
                                    <li><a href="#">Blog</a>
                                        
                                    </li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / --> 
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : 'images/testimonials/ts-1.jpg' }}"></span>Hi, {{ Auth::user()->name }}
                            </div>
                            <ul>
                                <li><a href="{{ route('user-profile') }}"> Edit profile</a></li>
                                <li><a href="{{ route('add-property') }}"> Add Property</a></li>
                                <li><a href="{{ route('payment-method') }}"> Payments</a></li>
                                <li><a href="{{ route('change-password') }}"> Change Password</a></li>
                                <li>
                                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                                    <!-- Logout Form (Hidden) -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Right Side Content / End -->
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->