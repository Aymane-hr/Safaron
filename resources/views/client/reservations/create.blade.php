<x-app-layout>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Voyage Booking</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Voyage Booking</li>
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
                    <form action={{ route('client.store') }} method="POST">
                        @csrf
                        <div class="container mt-5">
                            <div class="card shadow-lg">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0"> Secure Checkout</h5>
                                </div>
                                <div class="card-body">
                                    <input type="date" class="form-control" name="date_reservation"
                                        value="{{ date('Y-m-d') }}" hidden>



                                    <input type="number" class="form-control" name="user_id"
                                        value="{{ auth()->user()->id }}" hidden>



                                    <!-- Contact Info -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Contact Info</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control"
                                                    value="{{ auth()->user()->email }}" readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control"
                                                    value="{{ auth()->user()->name }}" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Traveler Info -->
                                    {{-- <div class="mb-4">
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
                                    </div> --}}

                                    <!-- Travel Details -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Travel Details</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Departure City</label>
                                                {{-- <select class="form-select" name="ville_depart_id" required>
                                                    @foreach ($villes as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                                    @endforeach
                                                </select> --}}
                                                <h1><input type="number" name="ville_depart_id"
                                                        value="{{ $v_d->id }}" hidden>{{ $v_d->ville }} =====>
                                                </h1>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Arrival City</label>
                                                {{-- <select class="form-select" name="ville_arrivee_id" required>
                                                    @foreach ($villes as $ville)
                                                        <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                                    @endforeach
                                                </select> --}}
                                                <h1><input type="number" name="ville_arrivee_id"
                                                        value="{{ $v_a->id }}" hidden>=====> {{ $v_a->ville }}
                                                </h1>

                                            </div>
                                            <div class="mb-3">
                                                <input type="number" id="Frais1" class="form-control" name="frais"
                                                    hidden value="0">
                                            </div>
                                            <div class="mb-3">
                                                {{-- <h1 >Price:{{$SelectedVoyage->prix}}Dh</h1> --}}
                                                <input type="number" name="prix" id="prix"
                                                    value="{{ $SelectedVoyage->prix }}" hidden>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Date & Time -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Date & Time</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Departure Date</label>
                                                <input type="date" class="form-control" name="date_depart"
                                                    id="date_depart" value="{{ $SelectedVoyage->date_depart }}"
                                                    readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Arrival Date</label>
                                                <input type="date" class="form-control" name="date_arrivee"
                                                    id="date_arrivee" value="{{ $SelectedVoyage->date_arrivee }}"
                                                    readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Departure Time</label>
                                                <input type="time" class="form-control" name="heure_depart"
                                                    id="heure_depart" value="{{ $SelectedVoyage->heure_depart }}"
                                                    readonly>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Arrival Time</label>
                                                <input type="time" class="form-control" name="heure_arrivee"
                                                    id="heure_arrivee" value="{{ $SelectedVoyage->heure_arrivee }}"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Additional Options -->
                                    <div class="mb-4">
                                        <h6 class="text-primary"> Other Details</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="form-label">Number of Seats</label>
                                                <input type="number" id="N_Seat1" class="form-control"
                                                    name="num_siege">
                                                @error('num_siege')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Travel Type</label>
                                                <select class="form-select" name="type_voyage_id" required
                                                    id="Travel_Type">
                                                    <option value="0">---select Type---</option>
                                                    @foreach ($type_voyages as $type)
                                                        <option value="{{ $type->id }}">{{ $type->type_voyage }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Autocar</label><br>
                                                <img src="{{ asset('storage/' . $autocar->image) }}" alt=""
                                                    width="50" height="50">
                                                {{-- <select class="form-select" name="autocar_id" required>
                                                    @foreach ($autocars as $autocar)
                                                        <option value="{{ $autocar->id }}">{{ $autocar->matricule }}</option>
                                                    @endforeach
                                                </select> --}}
                                                <input type="number" name="autocar_id" value="{{ $autocar->id }}"
                                                    hidden>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Payment Method</label>
                                                <select class="form-select" name="mode_reglement_id" required>
                                                    @foreach ($mode_reglements as $mode)
                                                        <option value="{{ $mode->id }}">
                                                            {{ $mode->mode_reglement }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                    </div>


                                    <!-- Payment Details -->
                                    <div class="card payment-details">
                                        <div class="card-header bg-primary text-white">
                                            <h5>Payment Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- Payment Method Selection -->
                                            <div
                                                class="d-flex align-items-center justify-content-between flex-wrap mb-4">
                                                <div class="d-flex align-items-center flex-wrap payment-form">
                                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                                        <input class="form-check-input mt-0" type="radio"
                                                            name="Radio" id="credit-card" value="credit-card"
                                                            checked>
                                                        <label class="form-check-label fs-14 ms-2" for="credit-card">
                                                            Credit / Debit Card
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                                        <input class="form-check-input mt-0" type="radio"
                                                            name="Radio" id="paypal" value="paypal">
                                                        <label class="form-check-label fs-14 ms-2" for="paypal">
                                                            PayPal
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center me-3 mb-2">
                                                        <input class="form-check-input mt-0" type="radio"
                                                            name="Radio" id="stripe" value="stripe">
                                                        <label class="form-check-label fs-14 ms-2" for="stripe">
                                                            Stripe
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Credit Card Details -->
                                            <div class="credit-card-details">
                                                <div class="mb-3">
                                                    <h6 class="fs-16 fw-bold">Payment With Credit Card</h6>
                                                </div>
                                                <div class="card-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Card Holder Name</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i
                                                                            class="isax isax-user"></i></span>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Enter your name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Card Number</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i
                                                                            class="isax isax-card-tick"></i></span>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Card Number">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Expire Date</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i
                                                                            class="isax isax-calendar-2"></i></span>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="MM/YY">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">CVV</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-text"><i
                                                                            class="isax isax-check"></i></span>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="CVV">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Credit Card -->

                                            <!-- PayPal Details -->
                                            <div class="paypal-details">
                                                <div class="mb-3">
                                                    <h6 class="fs-16 fw-bold">Payment With PayPal</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email Address</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class="isax isax-sms"></i></span>
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Password</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class="isax isax-lock"></i></span>
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <span class="input-group-text toggle-password fs-14"><i
                                                                        class="isax isax-eye-slash"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /PayPal -->

                                            <!-- Stripe Details -->
                                            <div class="stripe-details">
                                                <div class="mb-3">
                                                    <h6 class="fs-16 fw-bold">Payment With Stripe</h6>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Email Address</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class="isax isax-sms"></i></span>
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Password</label>
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i
                                                                        class="isax isax-lock"></i></span>
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                                <span class="input-group-text toggle-password fs-14"><i
                                                                        class="isax isax-eye-slash"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Stripe -->

                                            <!-- Confirm and Pay Button -->
                                            {{-- <div class="d-flex align-items-center justify-content-end flex-wrap gap-2 mt-4">
                                <button type="submit" class="btn btn-primary btn-lg">Confirm & Pay</button>
                            </div> --}}
                                        </div>
                                    </div>
                                    <!-- Submit Button -->
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary px-4 py-2">
                                            Confirm & Pay
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>




                </div>

                <!-- Review Order Details -->
                <div class="col-lg-4 theiaStickySidebar">
                    <div class="card order-details">
                        <div class="card-header bg-primary text-white">
                            <div class="d-flex align-items-center justify-content-between header-content">
                                <h5 class="mb-0">Review Order Details</h5>
                                <a href="flight-details.html"
                                    class="rounded-circle p-2 btn btn-light d-flex align-items-center justify-content-center">
                                    <span class="fs-16 d-flex align-items-center justify-content-center">
                                        <i class="isax isax-edit-2"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Flight Info Section -->
                            <div class="pb-3 border-bottom">
                                <div class="mb-3 review-img">
                                    <img src="{{ asset('storage/' . $autocar->image) }}" alt="Img"
                                        class="img-fluid rounded-3">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        {{-- <h6 class="mb-2">Antonov An-32 - Economy Class</h6> --}}
                                        <p class="fs-14">
                                            <span class="badge badge-warning text-dark fs-13 fw-medium me-2">5.0</span>
                                            (600 Reviews)
                                        </p>
                                    </div>
                                    <h6 class="fs-14 fw-normal text-gray-9">{{ $SelectedVoyage->prix }}Dh</h6>
                                </div>
                            </div>

                            <!-- Order Info Section -->
                            <div class="mt-3 pb-3 border-bottom">
                                <h6 class="text-primary mb-3">Order Info</h6>
                                <div class="d-flex align-items-center details-info">
                                    <h6 class="fs-16">Departure</h6>
                                    <p class="fs-16" id="date_depart1"></p>
                                </div>
                                <div class="d-flex align-items-center details-info">
                                    <h6 class="fs-16">Arrival</h6>
                                    <p class="fs-16" id="date_arrivee1"></p>
                                </div>
                                {{-- <div class="d-flex align-items-center details-info">
                                    <h6 class="fs-16">Travel Time</h6>
                                    <p class="fs-16">2hrs 30min</p>
                                </div> --}}
                                {{-- <div class="d-flex align-items-center details-info">
                                    <h6 class="fs-16">Adults</h6>
                                    <p class="fs-16">2</p>
                                </div>
                                <div class="d-flex align-items-center details-info">
                                    <h6 class="fs-16">Children</h6>
                                    <p class="fs-16">2</p>
                                </div> --}}
                                <div class="d-flex align-items-center details-info">
                                    <h6 class="fs-16">Number of Seats</h6>
                                    <p class="fs-16" id="N_Seat"></p>
                                </div>
                                <div class="d-flex align-items-center details-info">
                                    <h6 class="fs-16">Travel Type</h6>
                                    <p class="fs-16" id="Type_v"></p>
                                </div>
                            </div>

                            <!-- Payment Info Section -->
                            <div class="mt-3 border-bottom">
                                <h6 class="text-primary mb-3">Payment Info</h6>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6 class="fs-16">Sub Total</h6>
                                    <p class="fs-16">{{ $SelectedVoyage->prix }}Dh</p>
                                </div>
                                {{-- <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6 class="fs-16">Tax <span class="text-gray-6">(10%)</span></h6>
                                    <p class="fs-16">$85</p>
                                </div> --}}
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6 class="fs-16">Frais</h6>
                                    <p class="fs-16" id="Frais">0Dh</p>
                                </div>
                                {{-- <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h6 class="fs-16">Discount <span class="text-gray-6">(10%)</span></h6>
                                    <p class="fs-16">-$20</p>
                                </div> --}}
                            </div>

                            <!-- Amount to Pay Section -->
                            <div class="mt-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-bold">Amount to Pay</h6>
                                    <h6 class="text-primary fw-bold" id="Amount">{{ $SelectedVoyage->prix }}Dh
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Review Order Details -->
            </div>
        </div>
    </div>
</x-app-layout>
