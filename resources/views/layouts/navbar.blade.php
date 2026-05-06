
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
                                <a href="{{ route('home') }}" class="black-logo-responsive">
                                    <img src="{{ asset('assets/img/logo-dark.svg') }}" alt="logo-img">
                                </a>
                                <a href="{{ route('home') }}" class="white-logo-responsive">
                                    <img src="{{ asset('assets/img/logo.svg') }}" alt="logo-img">
                                </a>
                                <div class="offcanvas-close">
                                    <i class="ti ti-x"></i>
                                </div>
                            </div>
                            <div class="wishlist-info d-flex justify-content-between align-items-center">
                                <h6 class="fs-16 fw-medium">Wishlist</h6>
                                <div class="d-flex align-items-center">
                                    <div class="fav-dropdown">
                                        <a href="{{ route('wishlist') }}" class="position-relative">
                                            <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9 wishlist-count">{{ Auth::check() ? Auth::user()->wishlists()->count() : 0 }}</span>
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
                                                <img src="{{ asset('assets/img/flags/us-flag.svg') }}" class="me-2" alt="flag">ENG
                                            </a>
                                            <ul class="dropdown-menu p-2">
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{ asset('assets/img/flags/us-flag.svg') }}" class="me-2" alt="flag">ENG
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{ asset('assets/img/flags/arab-flag.svg') }}" class="me-2" alt="flag">ARA
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item rounded d-flex align-items-center" href="javascript:void(0);">
                                                        <img src="{{ asset('assets/img/flags/france-flag.svg') }}" class="me-2" alt="flag">FRA
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
                        <a class="logo-white header-logo" href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo.svg') }}" style="width: 150px" class="logo" alt="Logo">
                        </a>
                        <a class="logo-dark header-logo" href="{{ route('home') }}">
                            <img src="{{ asset('assets/img/logo-dark.svg') }}" style="width: 150px" class="logo" alt="Logo">
                        </a>
                    </div>
                    <nav id="mobile-menu">
                        <ul class="main-nav">
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ request()->routeIs('voyages.list') ? 'active' : '' }}">
                                <a href="{{ route('voyages.list') }}">Voyage</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <!-- <li class="{{ request()->routeIs('wishlist') ? 'active' : '' }}">
                                <a href="{{ route('wishlist') }}">Wishlist</a>
                            </li> -->
                        </ul>
                    </nav>
                    @if (Route::has('login'))
                        @auth
                            {{-- ========= Profile ========= --}}

                            <div class="header-btn d-flex align-items-center">
                                <div class="me-3 d-flex align-items-center">
                                    <a href="javascript:void(0);" id="dark-mode-toggle" class="theme-toggle">
                                        <i class="isax isax-moon"></i>
                                    </a>
                                    <a href="javascript:void(0);" id="light-mode-toggle" class="theme-toggle">
                                        <i class="isax isax-sun-1"></i>
                                    </a>
                                </div>
                                <div class="fav-dropdown me-3">
                                    <a href="{{ route('wishlist') }}" class="position-relative">
                                        <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9 wishlist-count">{{ Auth::check() ? Auth::user()->wishlists()->count() : 0 }}</span>
                                    </a>
                                </div>
                                <div class="dropdown profile-dropdown">
                                    <a href="javascript:void(0);" class="d-flex align-items-center" data-bs-toggle="dropdown">
                                        <span class="avatar avatar-md">
                                        <img src="{{ auth()->user()->profile_image_path }}"
                                         alt="image"  class="img-fluid rounded-circle border border-white border-4"
                                         onerror="this.src='{{ asset('assets/img/users/user-01.jpg') }}'">
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                        <li>
                                            <a href="{{route('client.profile.dashboard.index')}}" class="dropdown-item d-inline-flex align-items-center rounded fw-medium p-2" href="dashboard.html">Home</a>
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
                                    <a href="{{ route('wishlist') }}" class="position-relative">
                                        <i class="isax isax-heart"></i><span class="count-icon bg-secondary text-gray-9 wishlist-count">{{ Auth::check() ? Auth::user()->wishlists()->count() : 0 }}</span>
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
