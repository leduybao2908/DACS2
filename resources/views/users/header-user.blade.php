<header id="header-container" class="db-top-header">
    <!-- Header -->
    <div id="header">
        <div class="container-fluid">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="index.blade.php"><img src="images/logo.svg" alt=""></a>
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
                        <li><a href="#">Listing</a>
                           
                        </li>
                        <li><a href="#">Property</a>
                            <ul>
                                <li><a href="single-property-1.blade.php">Single Property 1</a></li>
                                <li><a href="single-property-2.blade.php">Single Property 2</a></li>
                                <li><a href="single-property-3.blade.php">Single Property 3</a></li>
                                <li><a href="single-property-4.blade.php">Single Property 4</a></li>
                                <li><a href="single-property-5.blade.php">Single Property 5</a></li>
                                <li><a href="single-property-6.blade.php">Single Property 6</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#">Blog</a>
                            <ul>
                                <li><a href="#">Grid Layout</a>
                                    <ul>
                                        <li><a href="blog-full-grid.blade.php">Full Grid</a></li>
                                        <li><a href="blog-grid-sidebar.blade.php">With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">List Layout</a>
                                    <ul>
                                        <li><a href="blog-full-list.blade.php">Full List</a></li>
                                        <li><a href="blog-list-sidebar.blade.php">With Sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-details.blade.php">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.blade.php">Contact</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="login.blade.php">Login</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.blade.php">Register</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.blade.php" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            <!-- Right Side Content / -->
            <div class="header-user-menu user-menu">
                <div class="header-user-name">
                    <span><img src="images/testimonials/ts-1-dark.svg" alt=""></span>Hi,{{ Auth::user()->name }}!
                </div>
                <ul>
                    <li><a href="user-profile.blade.php"> Edit profile</a></li>
                    <li><a href="add-property.blade.php"> Add Property</a></li>
                    <li><a href="payment-method.blade.php">  Payments</a></li>
                    <li><a href="change-password.blade.php"> Change Password</a></li>
                    <li><form method="POST" action="{{ route('logout') }}" style="display: none;" id="logout-form">
                        @csrf
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Log Out
                    </a></li>
                </ul>
            </div>
            <!-- Right Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->
</header>