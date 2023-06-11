<header class="header">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="index.html" class="navbar-brand logo">
                <img src="{{asset('front')}}/assets/img/logo.png" class="img-fluid" alt="Logo">
            </a>
            <a href="index.html" class="navbar-brand logo-small">
                <img src="{{asset('front')}}/assets/img/logo-icon.png" class="img-fluid" alt="Logo">
            </a>
        </div>

        <ul class="nav header-navbar-rht">
            <li class="nav-item desc-list wallet-menu">
                <a href="user-wallet.html" class="nav-link header-login">
                    <img src="{{asset('front')}}/assets/img/wallet.png" alt="" class="me-2 wallet-img"><span>Wallet:</span> $1875
                </a>
            </li>

            <!-- Notifications -->
            <li class="nav-item dropdown logged-item">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">1</span>
                </a>
                <div class="dropdown-menu notify-blk dropdown-menu-end notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti">Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{asset('front')}}/assets/img/customer/user-01.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"> <span class="noti-title">Jeffrey Akridge has
                                                    booked your service</span></p>
                                            <p class="noti-time"><span class="notification-time">Today 10:04 PM</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{asset('front')}}/assets/img/customer/user-02.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"> <span class="noti-title">Nancy Olson has booked
                                                    your service</span></p>
                                            <p class="noti-time"><span class="notification-time">Today 9:45 PM</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{asset('front')}}/assets/img/customer/user-03.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"> <span class="noti-title">Ramona Kingsley has
                                                    booked your service</span></p>
                                            <p class="noti-time"><span class="notification-time">Yesterday 8:17
                                                    AM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{asset('front')}}/assets/img/customer/user-04.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"> <span class="noti-title">Ricardo Lung has booked
                                                    your service</span></p>
                                            <p class="noti-time"><span class="notification-time">Yesterday 6:20
                                                    AM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="notifications.html">
                                    <div class="media d-flex">
                                        <span class="avatar avatar-sm flex-shrink-0">
                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                src="{{asset('front')}}/assets/img/customer/user-05.jpg">
                                        </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"> <span class="noti-title">Annette Silva has booked
                                                    your service</span></p>
                                            <p class="noti-time"><span class="notification-time">17 Sep 2020 10:04
                                                    PM</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="notifications.html">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- chat -->
            <li class="nav-item logged-item">
                <a href="chat.html" class="nav-link">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                </a>
            </li>
            <!-- /chat -->

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow logged-item">
                <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="user-img">
                        <img class="rounded-circle" src="{{asset('front')}}/assets/img/customer/user-01.jpg" alt="">
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img class="avatar-img rounded-circle" src="{{asset('front')}}/assets/img/customer/user-01.jpg"
                                alt="">
                        </div>
                        <div class="user-text">
                            <h6>Jeffrey Akridge</h6>
                            <p class="text-muted mb-0">User</p>
                        </div>
                    </div>
                    {{-- <a class="dropdown-item" href="user-dashboard.html">Dashboard</a>
                    <a class="dropdown-item" href="favourites.html">Favourites</a>
                    <a class="dropdown-item" href="user-bookings.html">My Bookings</a>
                    <a class="dropdown-item" href="user-settings.html">Profile Settings</a>
                    <a class="dropdown-item" href="all-services.html">Book Services</a>
                    <a class="dropdown-item" href="chat.html">Chat</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
    </nav>
</header>
