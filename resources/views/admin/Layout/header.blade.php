<nav class="app-header navbar navbar-expand bg-body">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ auth()->user()->profile_image_path }}" class="user-image rounded-circle shadow"
                        alt="User Image" />
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end shadow-lg border-0">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary d-flex flex-column align-items-center justify-content-center py-4">
                        <img src="{{ auth()->user()->profile_image_path }}" class="rounded-circle shadow-sm border border-3 border-white mb-2" style="width: 80px; height: 80px; object-fit: cover;"
                            alt="User Image" />
                        <div class="text-center">
                            <h6 class="fw-bold mb-0 text-white">{{ Auth::user()->name }}</h6>
                            <small class="opacity-75">{{ Auth::user()->email }}</small>
                        </div>
                    </li>
                    <!--end::User Image-->
                    <!--begin::Menu Body-->
                    <li class="user-body p-2">
                        <a href="{{ route('home') }}" class="dropdown-item rounded d-flex align-items-center py-2">
                            <div class="bg-light rounded p-2 me-3"><i class="bi bi-house text-primary"></i></div>
                            <span class="fw-medium">Agence</span>
                        </a>
                        <a href="{{ route('admin.users.index') }}" class="dropdown-item rounded d-flex align-items-center py-2">
                            <div class="bg-light rounded p-2 me-3"><i class="bi bi-people text-primary"></i></div>
                            <span class="fw-medium">Gestion Utilisateurs</span>
                        </a>
                    </li>
                    <!--end::Menu Body-->
                    <li class="border-top my-1"></li>
                    <!--begin::Menu Footer-->
                    <li class="user-footer p-2">
                        <a href="{{ route('profile.edit') }}" class="dropdown-item rounded d-flex align-items-center py-2 mb-1">
                            <div class="bg-light rounded p-2 me-3"><i class="bi bi-person text-secondary"></i></div>
                            <span class="fw-medium">Profile</span>
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="d-block">
                            @csrf
                            <button type="submit" class="dropdown-item rounded d-flex align-items-center py-2 text-danger">
                                <div class="bg-danger bg-opacity-10 rounded p-2 me-3"><i class="bi bi-box-arrow-right"></i></div>
                                <span class="fw-medium">Log out</span>
                            </button>
                        </form>
                    </li>
                    <!--end::Menu Footer-->
                </ul>
            </li>
            <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
