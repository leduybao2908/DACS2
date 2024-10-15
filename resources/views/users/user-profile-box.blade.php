<div class="user-profile-box mb-0">
    <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png"> </div>
    <div class="header clearfix">
        <img src="images/testimonials/ts-1.svg" alt="avatar" class="img-fluid profile-img">
    </div>
    <div class="active-user">
        <h2>{{ Auth::user()->name }}</h2>
    </div>
    <div class="detail clearfix">
        <ul class="mb-0">
            <li>
                <a class="{{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="fa fa-map-marker"></i> Dashboard
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('user') ? 'active' : '' }}" href="{{ route('user') }}">
                    <i class="fa fa-user"></i>Profile
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('my-listings') ? 'active' : '' }}" href="{{ route('my-listings') }}">
                    <i class="fa fa-list" aria-hidden="true"></i>My Properties
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('favorited-listings') ? 'active' : '' }}" href="{{ route('favorited-listings') }}">
                    <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('add-property') ? 'active' : '' }}" href="{{ route('add-property') }}">
                    <i class="fa fa-list" aria-hidden="true"></i>Add Property
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('payment-method') ? 'active' : '' }}" href="{{ route('payment-method') }}">
                    <i class="fas fa-credit-card"></i>Payments
                </a>
            </li>
            <li>
                <a class="{{ request()->routeIs('invoice') ? 'active' : '' }}" href="{{ route('invoice') }}">
                    <i class="fas fa-paste"></i>Invoices
                </a>
            </li>
            <li>
                <a class="{{ request()->is('change-password') ? 'active' : '' }}" href="change-password.blade.php">
                    <i class="fa fa-lock"></i>Change Password
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>Log Out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
