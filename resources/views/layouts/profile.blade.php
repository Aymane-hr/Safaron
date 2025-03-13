  <!-- Breadcrumb -->
  <div class="breadcrumb-bar breadcrumb-bg-04 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Mon Compte</h2>
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
