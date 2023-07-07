<div class="col-xl-3 col-md-4">
    <div class="mb-4">
        <div class="d-sm-flex flex-row flex-wrap text-center text-sm-start align-items-center">
            <img alt="profile image" src="<?= auth()->user()->image ?>" class="avatar-lg rounded-circle">
            <div class="ms-sm-3 ms-md-0 ms-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <p class="text-muted mb-0">Member Since Apr 2020</p>
            </div>
        </div>
    </div>
    <div class="widget settings-menu">
        <ul role="tablist" class="nav nav-tabs">
            <li class="nav-item current">
                <a href="{{ route('customer.dashboard') }}" class="nav-link active">
                    <i class="fas fa-chart-line"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item current">
                <a href="{{ route('customer.profile') }}" class="nav-link">
                    <i class="fas fa-user"></i> <span>Profile</span>
                </a>
            </li>
            <li class="nav-item current">
                <a href="{{ route('lawyer.list') }}" class="nav-link">
                    <i class="fas fa-user"></i> <span>Lawyers</span>
                </a>
            </li>
            <li class="nav-item current">
                <a href="{{ route('order.index') }}" class="nav-link">
                    <i class="fas fa-user"></i> <span>Orders</span>
                </a>
            </li>
            {{-- <li class="nav-item current">
                <a href="favourites.html" class="nav-link">
                    <i class="fas fa-heart"></i> <span>Favourites</span>
                </a>
            </li>
            <li class="nav-item current">
                <a href="user-bookings.html" class="nav-link">
                    <i class="far fa-calendar-check"></i> <span>My Bookings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="user-settings.html" class="nav-link">
                    <i class="far fa-user"></i> <span>Profile Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="user-wallet.html" class="nav-link">
                    <i class="far fa-money-bill-alt"></i> <span>Wallet</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="user-reviews.html" class="nav-link">
                    <i class="far fa-star"></i> <span>Reviews</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="user-payment.html" class="nav-link">
                    <i class="fas fa-hashtag"></i> <span>Payment</span>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
