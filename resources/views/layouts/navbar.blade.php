
<div class="main-header main-header-four">
    <!-- Header Topbar-->
    <!-- /Header Topbar-->

    <!-- Header -->
    <header class="header-four">
        <div class="container">
            <div class="offcanvas-info">
                <div class="offcanvas-wrap">
                    <div class="offcanvas-detail">
                        <div class="offcanvas-head">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a href="index-2.html" class="black-logo-responsive">
                                    <img src="assets/img/logo-dark.svg" alt="logo-img">
                                </a>
                                <a href="index-2.html" class="white-logo-responsive">
                                    <img src="assets/img/logo.svg" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="wishlist.html" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu fix mb-3"></div>
                        <div class="offcanvas__contact">
                            <div class="mt-4">
                                <div class="header-dropdown d-flex flex-fill">
                                    <div class="w-100">
                                        <div class="dropdown flag-dropdown mb-2">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="assets/img/flags/us-flag.svg" class="me-2" alt="flag">ENG
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="assets/img/flags/us-flag.svg" class="me-2" alt="flag">ENG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="assets/img/flags/arab-flag.svg" class="me-2" alt="flag">ARA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="assets/img/flags/france-flag.svg" class="me-2" alt="flag">FRA
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle bg-white border d-block" data-bs-toggle="dropdown" aria-expanded="false">
                                                USD
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">USD</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">YEN</a></li>
                                                <li><a class="dropdown-item rounded" href="javascript:void(0);">EURO</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn btn-dark w-100 mb-3"><a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#login-modal">Sign In</a> / <a href="javascript:void(0);" class="text-white" data-bs-toggle="modal" data-bs-target="#register-modal">Sign Up</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-overlay"></div>
            <div class="header-nav">
                <div class="main-menu-wrapper">
                    <div class="navbar-logo">
                        <a class="logo-white header-logo" href="index-2.html">
                            {{-- <img src="{{asset('assets/img/logo.svg')}}" class="logo" alt="Logo"> --}}
                            <img src="{{ asset('assets/img/admin/logo.png') }}" style="width: 100px" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="index-2.html">
                            <img src="{{ asset('assets/img/admin/logo-dark.png') }}" style="width: 100px" class="logo" alt="Logo">
                        </a>
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <nav id="mobile-menu">
                                <ul class="main-nav">
                                    <li class="has-submenu megamenu active">
                                        <a href="{{route('voyages.list')}}">Voyage</a>
                                        {{-- <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <div class="d-none d-lg-flex align-items-center justify-content-between flex-wrap">
                                                        <h6 class="mb-3">Home Pages</h6>
                                                        <a href="javascript:void(0);" class="btn btn-dark btn-md mb-3 text-white d-inline-block w-auto">Purchase Template</a>
                                                    </div>
                                                    <div class="row g-lg-4">
                                                        <div class="col-lg-2">
                                                            <div class="single-demo">
                                                                <div class="demo-img">
                                                                    <a href="index-2.html"><img src="assets/img/menu/home-01.jpg" class="img-fluid" alt="img"></a>
                                                                </div>
                                                                <div class="demo-info">
                                                                    <a href="index-2.html">All Bookings</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="single-demo">
                                                                <div class="demo-img">
                                                                    <a href="index-3.html"><img src="assets/img/menu/home-02.jpg" class="img-fluid" alt="img"></a>
                                                                </div>
                                                                <div class="demo-info">
                                                                    <a href="index-3.html">Hotels</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="single-demo">
                                                                <div class="demo-img">
                                                                    <a href="index-4.html"><img src="assets/img/menu/home-03.jpg" class="img-fluid" alt="img"></a>
                                                                </div>
                                                                <div class="demo-info">
                                                                    <a href="index-4.html">Cars</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="single-demo active">
                                                                <div class="demo-img">
                                                                    <a href="index-5.html"><img src="assets/img/menu/home-04.jpg" class="img-fluid" alt="img"></a>
                                                                </div>
                                                                <div class="demo-info">
                                                                    <a href="index-5.html">Flight</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="single-demo">
                                                                <div class="demo-img">
                                                                    <a href="index-6.html"><img src="assets/img/menu/home-05.jpg" class="img-fluid" alt="img"></a>
                                                                </div>
                                                                <div class="demo-info">
                                                                    <a href="index-6.html">Cruise</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="single-demo">
                                                                <div class="demo-img">
                                                                    <a href="index-7.html"><img src="assets/img/menu/home-06.jpg" class="img-fluid" alt="img"></a>
                                                                </div>
                                                                <div class="demo-info">
                                                                    <a href="index-7.html">Tours</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li class="has-submenu mega-innermenu">
                                        <a href="javascript:void(0);">Flight<i class="fa-solid fa-angle-down"></i></a>
                                        <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h6>Flight Bookings</h6>
                                                            <ul>
                                                                <li><a href="flight-grid.html">Flight Grid</a></li>
                                                                <li><a href="flight-list.html">Flight List</a></li>
                                                                <li><a href="flight-details.html">Flight Details</a></li>
                                                                <li><a href="flight-booking-confirmation.html">Flight Booking</a></li>
                                                                <li><a href="add-flight.html">Add Flight</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="menu-img">
                                                                <img src="assets/img/menu/flight.jpg" alt="img" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu mega-innermenu">
                                        <a href="javascript:void(0);">Hotel<i class="fa-solid fa-angle-down"></i></a>
                                        <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h6>Hotel Bookings</h6>
                                                            <ul>
                                                                <li><a href="hotel-grid.html">Hotel Grid</a></li>
                                                                <li><a href="hotel-list.html">Hotel List</a></li>
                                                                <li><a href="hotel-map.html">Hotel Map</a></li>
                                                                <li><a href="hotel-details.html">Hotel Details</a></li>
                                                                <li><a href="booking-confirmation.html">Hotel Booking</a></li>
                                                                <li><a href="add-hotel.html">Add Hotel</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="menu-img">
                                                                <img src="assets/img/menu/hotel.jpg" alt="img" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu mega-innermenu">
                                        <a href="javascript:void(0);">Car<i class="fa-solid fa-angle-down"></i></a>
                                        <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h6>Car Bookings</h6>
                                                            <ul>
                                                                <li><a href="car-grid.html">Car Grid</a></li>
                                                                <li><a href="car-list.html">Car List</a></li>
                                                                <li><a href="car-map.html">Car Map</a></li>
                                                                <li><a href="car-details.html">Car Details</a></li>
                                                                <li><a href="car-booking-confirmation.html">Car Booking</a></li>
                                                                <li><a href="add-car.html">Add Car</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="menu-img">
                                                                <img src="assets/img/menu/car.jpg" alt="img" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu mega-innermenu">
                                        <a href="javascript:void(0);">Cruise<i class="fa-solid fa-angle-down"></i></a>
                                        <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h6>Cruise Bookings</h6>
                                                            <ul>
                                                                <li><a href="cruise-grid.html">Cruise Grid</a></li>
                                                                <li><a href="cruise-list.html">Cruise List</a></li>
                                                                <li><a href="cruise-map.html">Cruise Map</a></li>
                                                                <li><a href="cruise-details.html">Cruise Details</a></li>
                                                                <li><a href="cruise-booking-confirmation.html">Cruise Booking</a></li>
                                                                <li><a href="add-cruise.html">Add Cruise</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="menu-img">
                                                                <img src="assets/img/menu/cruise.jpg" alt="img" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu mega-innermenu">
                                        <a href="javascript:void(0);">Tour<i class="fa-solid fa-angle-down"></i></a>
                                        <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h6>Tour Bookings</h6>
                                                            <ul>
                                                                <li><a href="tour-grid.html">Tour Grid</a></li>
                                                                <li><a href="tour-list.html">Tour List</a></li>
                                                                <li><a href="tour-map.html">Tour Map</a></li>
                                                                <li><a href="tour-details.html">Tour Details</a></li>
                                                                <li><a href="tour-booking-confirmation.html">Tour Booking</a></li>
                                                                <li><a href="add-tour.html">Add Tour</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="menu-img">
                                                                <img src="assets/img/menu/tour.jpg" alt="img" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu mega-innermenu">
                                        <a href="javascript:void(0);">Pages<i class="fa-solid fa-angle-down"></i></a>
                                        <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <h6>Pages</h6>
                                                    <div class="row g-lg-4">
                                                        <div class="col-lg-6">
                                                            <ul>
                                                                <li><a href="about-us.html">About</a></li>
                                                                <li><a href="gallery.html">Gallery</a></li>
                                                                <li><a href="testimonial.html">Testimonials</a></li>
                                                                <li><a href="faq.html">Faq</a></li>
                                                                <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                                                <li><a href="team.html">Teams</a></li>
                                                                <li><a href="invoices.html">Invoice</a></li>
                                                                <li><a href="blog-grid.html">Blogs Grid</a></li>
                                                                <li><a href="blog-list.html">Blogs List</a></li>
                                                                <li><a href="blog-details.html">Blogs Details</a></li>
                                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                                <li><a href="booking-confirmation.html">Booking Confirmation</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <ul>
                                                                <li><a href="destination.html">Destination</a></li>
                                                                <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                                <li><a href="login.html">Login</a></li>
                                                                <li><a href="register.html">Register</a></li>
                                                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                                                <li><a href="change-password.html">Change Password</a></li>
                                                                <li><a href="error-404.html">404 Error</a></li>
                                                                <li><a href="error-500.html">500 Error</a></li>
                                                                <li><a href="under-maintenance.html">Under Maintenance</a></li>
                                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                                <li><a href="index-rtl.html">RTL</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu mega-innermenu">
                                        <a href="javascript:void(0);">Dashboard<i class="fa-solid fa-plus"></i></a>
                                        <ul class="submenu mega-submenu">
                                            <li>
                                                <div class="megamenu-wrapper">
                                                    <div class="row g-lg-4">
                                                        <div class="col-lg-6">
                                                            <h6>User Dashboard</h6>
                                                            <ul>
                                                                <li><a href="dashboard.html">Dashboard</a></li>
                                                                <li><a href="customer-flight-booking.html">My Bookings</a></li>
                                                                <li><a href="review.html">Reviews</a></li>
                                                                <li><a href="chat.html">Message</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="wallet.html">Wallet</a></li>
                                                                <li><a href="payment.html">Payments</a></li>
                                                                <li><a href="profile-settings.html">Profile Settings</a></li>
                                                                <li><a href="notification-settings.html">Notifications</a></li>
                                                                <li><a href="my-profile.html">My Profile</a></li>
                                                                <li><a href="security-settings.html">Settings</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h6>Agent Dashboard</h6>
                                                            <ul>
                                                                <li><a href="agent-dashboard.html">Dashboard</a></li>
                                                                <li><a href="agent-listings.html">Listings</a></li>
                                                                <li><a href="agent-hotel-booking.html">Bookings</a></li>
                                                                <li><a href="agent-enquirers.html">Enquiries</a></li>
                                                                <li><a href="agent-earnings.html">Earnings</a></li>
                                                                <li><a href="agent-review.html">Reviews</a></li>
                                                                <li><a href="agent-settings.html">Settings</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </nav>
                            {{-- ========= Profile ========= --}}
                            <div class="header-btn d-flex align-items-center">
                                <div class="me-3">
                                    <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                        <i class="isax isax-moon"></i>
                                    </a>
                                    <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                        <i class="isax isax-sun-1"></i>
                                    </a>
                                </div>
                                <div class="dropdown profile-dropdown">
                                    <a href="javascript:void(0);" class="d-flex align-items-center" data-bs-toggle="dropdown">
                                        <span class="avatar avatar-md">
                                        <img src="{{ Storage::url('profile_images/' . basename(auth()->user()->image)) }}"
                                         alt="image"  class="img-fluid rounded-circle border border-white border-4">
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="{{route('client.profile.dashboard.index')}}" class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="dashboard.html">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="{{route('client.profile.reservations.index')}}" class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="customer-hotel-booking.html">Mes reservations</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('client.profile.monprofile.index') }}" class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="my-profile.html">Mon profil</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider my-2">
                                        </li>
                                        <li>
                                            <a href="{{ route('client.profile.parametres.index') }}" class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="profile-settings.html">Paramètres</a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="login.html">Déconnexion</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="header-btn d-flex align-items-center">
                                <div class="me-3">
                                    <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                        <i class="isax isax-moon"></i>
                                    </a>
                                    <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                        <i class="isax isax-sun-1"></i>
                                    </a>
                                </div>
                                <div class="fav-dropdown me-3">
                                    <a href="wishlist.html" class="position-relative">
                                        <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9">0</span>
                                    </a>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark d-inline-flex align-items-center me-3"><i class="isax isax-lock me-2"></i>Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-dark d-inline-flex align-items-center me-0"><i class="isax isax-lock me-2"></i>Register</a>
                                @endif
                        @endauth
                                <div class="header__hamburger d-xl-none my-auto">
                                    <div class="sidebar-menu">
                                        <i class="isax isax-menu5"></i>
                                    </div>
                                </div>
                            </div>
                    @endif
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->
</div>
