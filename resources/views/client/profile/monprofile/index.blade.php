<x-app-layout>
    <x-profile-layout>
         <!-- My Profile -->
         <div class="col-xl-9 col-lg-8">
            <div class="card shadow-none mb-0">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6>My Profile</h6>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{ route('client.profile.parametres.index') }}" class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center"><i class="isax isax-edit-2 fs-14"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="fs-16 mb-3">Basic Information</h6>
                    <div class="d-flex align-items-center mb-3">
                        <span class="avatar avatar-xl flex-shrink-0 me-3 ">
                            <img src="{{ asset('assets/img/users/user-01.jpg')}}" alt="Img" class="img-fluid rounded">
                        </span>
                        <div class="profile-upload">
                            <div class="mb-2">
                                <p class="fs-12">Recommended image size is 40px x 40px</p>
                            </div>
                            <div class="profile-uploader d-flex align-items-center">
                                <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                    Upload
                                    <input type="file" class="form-control image-sign" multiple="">
                                </div>
                                <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                            </div>
                        </div>
                    </div>
                    <div class="row border-bottom pb-2 mb-3">
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="fs-14">First Name</h6>
                                <p>Jeffrey </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="fs-14">Last Name</h6>
                                <p>Wilson</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="fs-14">Email</h6>
                                <p><a href="https://dreamstour.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cdaea5bfaba2fffef8fb8da8b5aca0bda1a8e3aea2a0">[email&#160;protected]</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="fs-14">Phone</h6>
                                <p>+1 12656 26654</p>
                            </div>
                        </div>
                    </div>
                    <h6 class="fs-16 mb-3">Address Information</h6>
                    <div class="row g-2">
                        <div class="col-md-12">
                            <div>
                                <h6 class="fs-14">Address</h6>
                                <p>4530 Clousson Road, Houston </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">Country</h6>
                                <p>United States Of America</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">State</h6>
                                <p>California</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">City</h6>
                                <p>San Francisco</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">Postal Code</h6>
                                <p>94105</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /My Profile -->

    </x-profile-layout>
</x-app-layout>
