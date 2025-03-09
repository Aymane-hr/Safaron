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
                    <form action={{ route('routeName', ['id'=>1]) }} method="POST">
                        @csrf
                        <div class="container mt-5">
                            <div class="card shadow-lg">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0"> Secure Checkout</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Contact Info -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Contact Info</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" value="{{ auth()->user()->name }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Traveler Info -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Traveler Info</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" value="{{ auth()->user()->first_name }}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" value="{{ auth()->user()->last_name }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Travel Details -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Travel Details</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Departure City</label>
                                                <select class="form-select" name="ville_depart_id" required>
                                                    @foreach($villes as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Arrival City</label>
                                                <select class="form-select" name="ville_arrivee_id" required>
                                                    @foreach($villes as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Date & Time -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Date & Time</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Departure Date</label>
                                                <input type="date" class="form-control" name="date_depart" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Arrival Date</label>
                                                <input type="date" class="form-control" name="date_arrivee" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Departure Time</label>
                                                <input type="time" class="form-control" name="heure_depart" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Arrival Time</label>
                                                <input type="time" class="form-control" name="heure_arrivee" required>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Additional Options -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Other Details</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Number of Seats</label>
                                                <input type="number" class="form-control" name="num_siege" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Travel Type</label>
                                                <select class="form-select" name="type_voyage_id" required>
                                                    @foreach($type_voyages as $type)
                                                        <option value="{{ $type->id }}">{{ $type->type_voyage }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Bus</label>
                                                <select class="form-select" name="autocar_id" required>
                                                    @foreach($autocars as $autocar)
                                                        <option value="{{ $autocar->id }}">{{ $autocar->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Payment Method</label>
                                                <select class="form-select" name="mode_reglement_id" required>
                                                    @foreach($mode_reglements as $mode)
                                                        <option value="{{ $mode->id }}">{{ $mode->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <!-- Submit Button -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary px-4 py-2">
                                            Confirm Booking
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    

                    <!-- Payment Details -->
                    {{-- <div class="card payment-details">
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
                                <div class="card-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Card Holder Name</label>
                                                <div class="user-icon">
                                                    <span class="input-icon fs-14"><i class="isax isax-user"></i></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Card Number</label>
                                                <div class="user-icon">
                                                    <span class="input-icon fs-14"><i class="isax isax-card-tick"></i></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Expire Date</label>
                                                <div class="user-icon">
                                                    <span class="input-icon fs-14"><i class="isax isax-calendar-2"></i></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">CVV</label>
                                                <div class="user-icon">
                                                    <span class="input-icon fs-14"><i class="isax isax-check"></i></span>
                                                    <input type="text" class="form-control">
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
                                                <input type="email" class="form-control">
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
                                                <input type="email" class="form-control">
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
                                <button type="submit" class="btn btn-primary">Confirm & Pay $9569</button>
                            </div>
                        </div>
                    </div> --}}
                </div>

                <!-- Review Order Details -->
                {{-- <div class="col-lg-4 theiaStickySidebar">
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
                                    <img src="{{ asset('assets/img/flight/flight-large-01.jpg') }}" alt="Img" class="img-fluid">
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
                </div> --}}
                <!-- /Review Order Details -->
            </div>
        </div>
    </div>
</x-app-layout>