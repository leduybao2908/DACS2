<div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
    <div class="user-profile-box mb-0">
        <div class="sidebar-header"><img src="{{ asset('images/logo-blue.svg') }}" alt="header-logo2.png"> </div>
        <div class="header clearfix">
            <img src="{{ Auth::user()->image_url ? asset('storage/' . Auth::user()->image_url) : 'images/testimonials/ts-1.jpg' }}" alt="avatar" class="img-fluid profile-img">
        </div>
        <div class="active-user">
            <h2>{{ Auth::user()->name }}</h2>
        </div>
        <div class="detail clearfix">
            <ul class="mb-0">
                <li>
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="fa fa-map-marker"></i> Dashboard
                    </a>
                </li>

                @if (Auth::user()->role !== 'tenant')
                    <li>
                        <a href="{{ route('user.notifications') }}" class="{{ request()->routeIs('Notification') ? 'active' : '' }}">
                            <i class="fas fa-envelope-square"></i> Notification
                            @php
                                $unreadCount = DB::table('notification')
                                    ->where('owner_id', Auth::id())
                                    ->where('is_read', 0)
                                    ->count();
                            @endphp
                            @if($unreadCount > 0)
                                <span class="badge badge-danger">{{ $unreadCount }}</span>
                            @endif
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('my-listings') }}" class="{{ request()->routeIs('my-listings') ? 'active' : '' }}">
                            <i class="fa fa-list" aria-hidden="true"></i> My Properties
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('add-property') }}" class="{{ request()->routeIs('add-property') ? 'active' : '' }}">
                            <i class="fa fa-list" aria-hidden="true"></i> Add Property
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('favourites.index') }}" class="{{ request()->routeIs('favourite-properties') ? 'active' : '' }}">
                            <i class="fa fa-heart" aria-hidden="true"></i> Favourite Property
                        </a>
                    </li>
                @endif

                <li>
                    <a href="{{ route('user-profile') }}" class="{{ request()->routeIs('user-profile') ? 'active' : '' }}">
                        <i class="fa fa-user"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="{{ route('payment-method') }}" class="{{ request()->routeIs('payment-method') ? 'active' : '' }}">
                        <i class="fas fa-credit-card"></i> Payments
                    </a>
                </li>
                
                <li>
                    <!-- Logout Link -->
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Log Out
                    </a>
                </li>
            </ul>
        </div>
        
        <!-- Logout Form (Hidden) -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</div>
