<x-app-layout>
    <x-profile-layout>

                <!-- Profile Settings -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card settings mb-0">
                        <div class="card-header">
                            <h6>Settings</h6>
                        </div>
                        <div class="card-body pb-3">
                            <!-- Settings Content -->
                            <div class="settings-content mb-3">
                                <h6 class="fs-16 mb-3">Basic Information</h6>
                                <div class="row gy-2">
                                    <div class="col-lg-12">
                                        <div class="d-flex align-items-center">
                                            <img src="{{asset('assets/img/users/user-01.jpg')}}" alt="image" class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">
                                            <div>
                                                <p class="fs-14 text-gray-6 fw-normal mb-2">Recommended dimensions are typically 400 x 400 pixels.</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="me-2">
                                                        <label class="upload-btn" for="fileUpload">Upload</label>
                                                        <input type="file" id="fileUpload" style="display: none;">
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-light btn-md">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Phone</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="settings-content">
                                <h6 class="fs-16 mb-3">Address Information</h6>
                                <div class="row gy-2">
                                    <div class="col-lg-12">
                                        <div>
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Country</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">State</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>California</option>
                                                <option>Texas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">City</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>New York</option>
                                                <option>Tokyo </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <label class="form-label">Postal Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Settings Content-->

                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="javascript:void(0);" class="btn btn-light me-2">Cancel</a>
                                <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Profile Settings -->
    </x-profile-layout>
</x-app-layout>
