@props(['name'])
<!-- Barre lat
    Sidebar -->
<div class="col-xl-3 col-lg-4 theiaStickySidebar">
    <div class="card user-sidebar mb-4 mb-lg-0">
        <div class="card-header user-sidebar-header">
            <div class="profile-content rounded-pill">
                <div class="d-flex align-items-center justify-content-between">
                    <div class=" d-flex align-items-center justify-content-center">
                        <img src="{{ Storage::url('profile_images/' . basename(auth()->user()->image)) }}"
                         alt="image" class="img-fluid avatar avatar-lg rounded-circle me-1">
                        <div>
                            <h6 class="fs-16">{{ $name }}</h6>
                            <span class="fs-14 text-gray-6">Depuis le {{ auth()->user()->created_at->format('d M Y') }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="{{ route('client.profile.parametres.index') }}" class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body user-sidebar-body">
            <ul>
                <li>
                    <span class="fs-14 text-gray-3 fw-medium mb-2">Principal</span>
                </li>
                <li>
                    <a href="{{ route('client.profile.dashboard.index') }}" class="d-flex align-items-center @if(request()->routeIs('client.profile.dashboard.*')) active @endif">
                        <i class="isax isax-grid-55"></i> Tableau de bord
                    </a>
                </li>
                <li class="submenu">
                    <a href="{{ route('client.profile.reservations.index') }}" class="d-block subdrop @if(request()->routeIs('client.profile.reservations.*')) active @endif" class="d-flex align-items-center" onclick="toggleSubMenu(this)">
                        <i class="isax isax-calendar-tick5"></i>
                        <span>Mes reservations</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="review.html" class="d-flex align-items-center">
                        <i class="isax isax-magic-star5"></i> Mes Avis
                    </a>
                </li>
                <li>
                    <div class="message-content">
                        <a href="chat.html" class="d-flex align-items-center">
                            <i class="isax isax-message-square5"></i> Messages
                        </a>
                        <span class="msg-count rounded-circle">02</span>
                    </div>
                </li>
                <li class="mb-2">
                    <a href="wishlist.html" class="d-flex align-items-center">
                        <i class="isax isax-heart5"></i> Mes Favoris
                    </a>
                </li>
                <li>
                    <span class="fs-14 text-gray-3 fw-medium mb-2">Finances</span>
                </li>
                <li class="mb-2">
                    <a href="payment.html" class="d-flex align-items-center">
                        <i class="isax isax-money-recive5"></i> Paiements
                    </a>
                </li> --}}
                <li>
                    <span class="fs-14 text-gray-3 fw-medium mb-2">Compte</span>
                </li>
                <li>
                    <a href="{{ route('client.profile.monprofile.index') }}" class="d-flex align-items-center @if(request()->routeIs('client.profile.monprofile.*')) active @endif">
                        <i class="isax isax-profile-tick5"></i> Mon Profile
                    </a>
                </li>
                {{-- <li>
                    <div class="message-content">
                        <a href="notification.html" class="d-flex align-items-center">
                            <i class="isax isax-notification-bing5"></i> Notifications
                        </a>
                        <span class="msg-count bg-purple rounded-circle">05</span>
                    </div>
                </li> --}}
                <li>
                    <a href="{{ route('client.profile.parametres.index') }}" class="d-flex align-items-center @if(request()->routeIs('client.profile.parametres.*')) active @endif">
                        <i class="isax isax-setting-25"></i> Paramètres
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="d-flex align-items-center pb-0">
                        <i class="isax isax-logout-15"></i> Déconnexion
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Barre lat
    Sidebar -->

