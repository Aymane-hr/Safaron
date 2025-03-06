<x-app-layout>
 <!-- Breadcrumb -->
 <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title mb-2">Flight Booking</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="isax isax-home5"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Flight Booking</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Wrapper -->
<div class="content content-two">
    <div class="container">
        <!-- Cart -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card checkout-card">
                    <div class="card-header">
                        <h5>Secure Checkout</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="checkout-title">
                                <h6 class="mb-2">Contact Info</h6>
                            </div>
                            <div class="checkout-details pb-2 border-bottom mb-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="checkout-title">
                                <h6 class="mb-2">Traveler info</h6>
                            </div>
                            <div class="checkout-details">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Age</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>27</option>
                                                <option>25</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Country</label>
                                            <select class="select">
                                                <option>Select</option>
                                                <option>Barcelona</option>
                                                <option>London</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address line 1</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Address line 2</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">State</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Zip Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-0">
                                            <label class="form-label">Additional Info</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card coupoun">
                    <div class="card-header">
                        <h5>Coupon</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <input type="text" class="form-control me-2" placeholder="Coupon Code">
                                <a href="javascript:void(0);" class="btn btn-primary flex-shrink-0">Apply Coupon</a>
                            </div>
                            <div>
                                <div class="coupoun-list mb-3">
                                    <p class="text-center">Coupon Code <span class="text-gray-9"> Dreams25 ($50) </span> has been applied successfully <a href="javascript:void(0);" class=" ms-2 text-primary text-decoration-underline">Remove</a> </p>
                                </div>
                                <div class="coupoun-list-two">
                                    <p class="text-center">Code Invalid <a href="javascript:void(0);" class=" ms-2 text-primary text-decoration-underline">Close</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card payment-details">
                    <div class="card-header">
                        <h5>Payment Details</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
                            <div class="d-flex align-items-center flex-wrap payment-form">
                                <div class="form-check d-flex align-items-center me-3 mb-2">
                                    <input class="form-check-input mt-0" type="radio" name="Radio" id="credit-card" value="credit-card" checked>
                                    <label class="form-check-label fs-14 ms-2" for="credit-card">
                                        Credit / Debit Card
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center me-3 mb-2">
                                    <input class="form-check-input mt-0" type="radio" name="Radio" id="paypal" value="paypal">
                                    <label class="form-check-label fs-14 ms-2" for="paypal">
                                        Paypal
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center me-3 mb-2">
                                    <input class="form-check-input mt-0" type="radio" name="Radio" id="stripe" value="stripe">
                                    <label class="form-check-label fs-14 ms-2" for="stripe">
                                        Stripe
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Credit Card -->
                        <div class="credit-card-details">
                            <div class="mb-3">
                                <h6 class="fs-16 ">Payment With Credit Card</h6>
                            </div>
                            <div class="card-detials mb-3">
                                <div class="row g-3">
                                    <div class="col-lg-4 d-flex">
                                        <div class="card-content flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div>
                                                    <img src="{{asset('assets/img/icons/visa.svg')}}" alt="image" class="img-fluid mb-2">
                                                    <p class="fs-16 fw-medium text-gray-6">**** **** **** 2547</p>
                                                </div>
                                                <div class="card-edit-icon">
                                                    <a href="javascript:void(0);" class="rounded-circle"> <span class=" d-flex align-items-center justify-content-center fs-14"><i class="isax isax-edit-2"></i></span></a>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 mb-1">Expiry</h6>
                                                <span class="fs-14 fw-normal text-gray-6">May 2026</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-flex">
                                        <div class="card-content flex-fill">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div>
                                                    <img src="{{asset('assets/img/icons/visa-2.svg')}}" alt="image" class="img-fluid mb-2">
                                                    <p class="fs-16 fw-medium text-gray-6">**** **** **** 2547</p>
                                                </div>
                                                <div class="card-edit-icon">
                                                    <a href="javascript:void(0);" class="rounded-circle"> <span class=" d-flex align-items-center justify-content-center fs-14"><i class="isax isax-edit-2"></i></span></a>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fs-14 mb-1">Expiry</h6>
                                                <span class="fs-14 fw-normal text-gray-6">May 2026</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-flex">
                                        <div class="card-add flex-fill d-flex align-items-center justify-content-center">
                                            <div class="add-option d-flex align-items-center justify-content-center">
                                                <a href="javascript:void(0);" id="open-folder" class="rounded-circle d-flex align-items-center justify-content-center">
                                                    <span class="d-flex align-items-center justify-content-center">
                                                    <i class="isax isax-add"></i>
                                                  </span>
                                                </a>
                                                <input type="file" id="folder-input" class="file-input">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Card Holder Name</label>
                                            <div class="user-icon">
                                                <span class="input-icon fs-14"><i class="isax isax-user"></i></span>
                                                <input type="text" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Card Number</label>
                                            <div class="user-icon">
                                                <span class="input-icon fs-14"><i class="isax isax-card-tick"></i></span>
                                                <input type="text" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Expire Date</label>
                                            <div class="user-icon">
                                                <span class="input-icon fs-14"><i class="isax isax-calendar-2"></i></span>
                                                <input type="text" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">CVV</label>
                                            <div class="user-icon">
                                                <span class="input-icon fs-14"><i class="isax isax-check"></i></span>
                                                <input type="text" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Credit Card -->

                        <!-- Paypal -->
                        <div class="paypal-details">
                            <div class="mb-3">
                                <h6 class="fs-16 ">Payment With Paypal</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="user-icon">
                                            <span class="input-icon fs-14"><i class="isax isax-sms"></i></span>
                                            <input type="email" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="user-icon">
                                            <span class="input-icon fs-14"><i class="isax isax-lock"></i></span>
                                            <input type="password" class="form-control pass-input">
                                            <span class="input-icon toggle-password fs-14"><i class="isax isax-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Paypal -->

                        <!-- Stripe -->
                        <div class="stripe-details">
                            <div class="mb-3">
                                <h6 class="fs-16">Payment With Stripe</h6>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="user-icon">
                                            <span class="input-icon fs-14"><i class="isax isax-sms"></i></span>
                                            <input type="email" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="user-icon">
                                            <span class="input-icon fs-14"><i class="isax isax-lock"></i></span>
                                            <input type="password" class="form-control pass-input">
                                            <span class="input-icon toggle-password fs-14"><i class="isax isax-eye-slash"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Stripe -->

                        <div class="d-flex align-items-center justify-content-end flex-wrap gap-2">
                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#booking-success">Confirm & Pay $9569 </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review Order Details -->
            <div class="col-lg-4 theiaStickySidebar">
                <div class="card order-details">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between header-content">
                            <h5>Review Order Details</h5>
                            <a href="flight-details.html" class="rounded-circle p-2 btn btn-light d-flex align-items-center justify-content-center"><span class="fs-16 d-flex align-items-center justify-content-center"><i class="isax isax-edit-2"></i></span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="pb-3 border-bottom">
                            <div class="mb-3 review-img">
                                <img src="{{asset('assets/img/flight/flight-large-01.jpg')}}" alt="Img" class="img-fluid">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h6 class="mb-2">Antonov An-32- Economy Class</h6>
                                    <p class="fs-14 "><span class="badge badge-warning text-gray-9 fs-13 fw-medium me-2">5.0</span>(400 Reviews)</p>
                                </div>
                                <h6 class="fs-14 fw-normal text-gray-9">$200</h6>
                            </div>
                        </div>
                        <div class="mt-3 pb-3 border-bottom">
                            <h6 class="text-primary mb-3">Order Info</h6>
                            <div class="d-flex align-items-center details-info">
                                <h6 class="fs-16">Departure</h6>
                                <p class="fs-16">15 Sep 2025 at 10:10 AM</p>
                            </div>
                            <div class="d-flex align-items-center details-info">
                                <h6 class="fs-16">Arrival</h6>
                                <p class="fs-16">16 Sep 2025 at 09:15 AM</p>
                            </div>
                            <div class="d-flex align-items-center  details-info">
                                <h6 class="fs-16">Travel Time</h6>
                                <p class="fs-16">2hrs 30min</p>
                            </div>
                            <div class="d-flex align-items-center  details-info">
                                <h6 class="fs-16">Adults</h6>
                                <p class="fs-16">2</p>
                            </div>
                            <div class="d-flex align-items-center  details-info">
                                <h6 class="fs-16">Children</h6>
                                <p class="fs-16">2</p>
                            </div>
                            <div class="d-flex align-items-center details-info">
                                <h6 class="fs-16">No of Seats</h6>
                                <p class="fs-16">4</p>
                            </div>
                            <div class="d-flex align-items-center details-info">
                                <h6 class="fs-16">Preferred Class</h6>
                                <p class="fs-16">Economy</p>
                            </div>
                        </div>
                        <div class="mt-3 border-bottom">
                            <h6 class="text-primary mb-3">Payment Info</h6>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h6 class="fs-16">Sub Total</h6>
                                <p class="fs-16">$8565</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h6 class="fs-16">Tax <span class="text-gray-6"> (10%)</span></h6>
                                <p class="fs-16">$85</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h6 class="fs-16">Booking Fees</h6>
                                <p class="fs-16">$89</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h6 class="fs-16">Discount <span class="text-gray-6"> (10%)</span></h6>
                                <p class="fs-16">-$20</p>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6>Amount to Pay</h6>
                                <h6 class="text-primary">$9569</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Review Order Details -->

        </div>

        <!-- / Cart -->
    </div>
</div>
<!-- /Page Wrapper -->

<!-- Booking Success -->
<div class="modal fade" id="booking-success" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content booking-success-modal">
            <div class="modal-body">
                <div>
                    <div class="booking-icon text-center mb-3">
                        <img src="{{asset('assets/img/icons/tick-circle.svg')}}" alt="icon" class="img-fluid">
                    </div>
                    <h5 class="text-center mb-3">Payment Successful</h5>
                    <div class="text-center mb-4">
                        <p>Booking on <strong>"Econnomy Class"</strong> has been successful with Reference Number <span class="text-primary"> #12559845</span></p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center ">
                        <a href="flight-booking-confirmation.html" class="btn btn-primary d-flex flex-shrink-0">View Booking Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BookingSuccess -->
</x-app-layout>