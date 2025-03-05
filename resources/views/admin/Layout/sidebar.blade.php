<aside class="app-sidebar shadow" data-bs-theme="dark" >
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset('assets/img/admin/logo.png') }}"
              alt="AdminLTE Logo"
              class="brand-image "
            />
            <br>
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-dark" style="color: #193557;">Admin Safar</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper" style="background-color: #193557;">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Ville</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>type voyages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>mode reglements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Reservations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Voyages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('societes.index') }}" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Societes</p>
                </a>
              </li>
              <li class="nav-item">
                <a  href="{{route('autocars.index')}}"  class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>AutoCars</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Equipements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>AutoCar_Equipements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="nav-icon bi bi-circle"></i>
                  <p>Autocar_Options</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
