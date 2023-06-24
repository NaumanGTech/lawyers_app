<div class="col-xl-3 col-md-4 theiaStickySidebar">
    <div class="mb-4">
        <div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
            <img alt="profile image" src="{{ asset('front') }}/assets/img/provider/provider-01.jpg"
                class="avatar-lg rounded-circle">
            <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                <h6 class="mb-0">Thomas Herzberg</h6>
                <p class="text-muted mb-0">Member Since Apr 2020</p>
            </div>
        </div>
    </div>
    <div class="widget settings-menu">
        <ul>
            <li class="nav-item">
                <a href="{{ route('lawyer.dashboard') }}" class="nav-link active">
                    <i class="fas fa-chart-line"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lawyer.profile.setting') }}" class="nav-link">
                    <i class="far fa-user"></i> <span>Profile Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="my-services.html" class="nav-link">
                    <i class="far fa-address-book"></i> <span>My Services</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="provider-bookings.html" class="nav-link">
                    <i class="far fa-calendar-check"></i> <span>Booking List</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="provider-wallet.html" class="nav-link">
                    <i class="far fa-money-bill-alt"></i> <span>Wallet</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="provider-subscription.html" class="nav-link">
                    <i class="far fa-calendar-alt"></i> <span>Subscription</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="provider-availability.html" class="nav-link">
                    <i class="far fa-clock"></i> <span>Availability</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="provider-reviews.html" class="nav-link">
                    <i class="far fa-star"></i> <span>Reviews</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="provider-payment.html" class="nav-link">
                    <i class="fas fa-hashtag"></i> <span>Payment</span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
