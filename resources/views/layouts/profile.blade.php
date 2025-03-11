  <!-- Breadcrumb -->
  <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">My Bookings</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="isax isax-grid-55"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">My Bookings</li>
                        <li class="breadcrumb-item active" aria-current="page">Flights</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Wrapper -->
<div class="content">
    <div class="container">

        <div class="row">
            <x-profile-sidebar name="hamid"></x-profile-sidebar>
            {{ $slot }}
        </div>

    </div>
</div>
<!-- /Page Wrapper -->
