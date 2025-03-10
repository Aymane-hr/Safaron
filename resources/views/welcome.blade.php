<x-app-layout>
 <!-- Hero Section -->
 <section class="hero-section-four">
    <div class="container">
        <div class="hero-content">
            <div class="row align-items-center">
                <div class="col-lg-10 col-md-12 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="banner-content text-center mx-auto">
                        <h1 class="text-white display-4 mb-2">Découvrez de nouveaux horizons, un <span class="flight-icon"><img src="{{asset('./assets/img/clients/images/car-front.png')}}" style="width: 140px" alt="icon"></span> trajet à la fois avec DreamsTour !</h1>
                        <p class="text-white mx-auto">Votre plateforme idéale pour organiser et vivre des voyages inoubliables.</p>
                        {{-- <a class="video-btn video-effect" data-fancybox="" href="https://youtu.be/NSAOrGb9orM"><i class="isax isax-play5"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Hero Section -->

<!-- Banner Search -->
<section class="banner-search-four">
    <div class="container">
        <div class="banner-form card mb-0">
            {{-- <div class="card-header">
                <ul class="nav">
                    <li>
                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#flight">
                            <i class="isax isax-airplane5 me-2"></i>Flights
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Hotels">
                            <i class="isax isax-buildings5 me-2"></i>Hotels
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cars">
                            <i class="isax isax-car5 me-2"></i>Cars
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Cruise">
                            <i class="isax isax-ship5 me-2"></i>Cruise
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#Tour">
                            <i class="isax isax-camera5 me-2"></i>Tour
                        </a>
                    </li>
                </ul>
            </div> --}}
            <div class="card-body">
                <div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="flight">
                            <form action="https://dreamstour.dreamstechnologies.com/html/flight-grid.html">
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="Radio" id="oneway" value="oneway" checked>
                                            <label class="form-check-label fs-14 ms-2" for="oneway">
                                                Oneway
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="Radio" id="roundtrip" value="roundtrip">
                                            <label class="form-check-label fs-14 ms-2" for="roundtrip">
                                                Round Trip
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="Radio" id="multiway" value="multiway">
                                            <label class="form-check-label fs-14 ms-2" for="multiway">
                                                Multi Trip
                                            </label>
                                        </div>
                                    </div>
                                    <h6 class="fw-medium fs-16 mb-2">Millions of cheap flights. One simple search</h6>
                                </div>
                                <div class="normal-trip">
                                    <div class="d-lg-flex">
                                        <div class="d-flex  form-info">
                                            <div class="form-item dropdown">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">From</label>
                                                    <input type="text" class="form-control" value="Newyork">
                                                    <p class="fs-12 mb-0">Ken International Airport</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Newyork</h6>
                                                                <p>Ken International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Boston</h6>
                                                                <p>Boston Logan International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                                <p>Dulles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                                <p>Los Angeles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Orlando</h6>
                                                                <p>Orlando International Airport</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-item dropdown ps-2 ps-sm-3">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">To</label>
                                                    <h5>Las Vegas</h5>
                                                    <p class="fs-12 mb-0">Martini International Airport</p>
                                                    <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                    </span>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Newyork</h6>
                                                                <p>Ken International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Boston</h6>
                                                                <p>Boston Logan International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                                <p>Dulles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                                <p>Los Angeles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Orlando</h6>
                                                                <p>Orlando International Airport</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-item">
                                                <label class="form-label fs-14 text-default mb-1">Departure</label>
                                                <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                                <p class="fs-12 mb-0">Monday</p>
                                            </div>
                                            <div class="form-item round-drip">
                                                <label class="form-label fs-14 text-default mb-1">Return</label>
                                                <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                                <p class="fs-12 mb-0">Wednesday</p>
                                            </div>
                                            <div class="form-item dropdown">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">Travellers and cabin class</label>
                                                    <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                    <p class="fs-12 mb-0">1 Adult, Economy</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                    <h5 class="mb-3">Select Travelers &  Class</h5>
                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                        <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-gray-9 mb-2">Adults <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                    <div class="custom-increment">
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn float-start">
                                                                                <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                                <span><i class="isax isax-minus"></i></span>
                                                                            </button>
                                                                            </span>
                                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                                            <span class="input-group-btn float-end">
                                                                                <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                    <span><i class="isax isax-add"></i></span>
                                                                            </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-gray-9 mb-2">Childrens <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                                    <div class="custom-increment">
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn float-start">
                                                                                <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                                <span><i class="isax isax-minus"></i></span>
                                                                            </button>
                                                                            </span>
                                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                                            <span class="input-group-btn float-end">
                                                                                <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                    <span><i class="isax isax-add"></i></span>
                                                                            </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label class="form-label text-gray-9 mb-2">Infants<span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                                    <div class="custom-increment">
                                                                        <div class="input-group">
                                                                            <span class="input-group-btn float-start">
                                                                                <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                                <span><i class="isax isax-minus"></i></span>
                                                                            </button>
                                                                            </span>
                                                                            <input type="text" name="quantity" class=" input-number" value="01">
                                                                            <span class="input-group-btn float-end">
                                                                                <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                    <span><i class="isax isax-add"></i></span>
                                                                            </button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 border br-10 info-item pb-1">
                                                        <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <div class="form-check me-3 mb-3">
                                                                <input class="form-check-input" type="radio" value="Economy" name="cabin-class" id="economy" checked>
                                                                <label class="form-check-label" for="economy">
                                                                    Economy
                                                                </label>
                                                            </div>
                                                            <div class="form-check me-3 mb-3">
                                                                <input class="form-check-input" type="radio" value="Economy" name="cabin-class" id="premium-economy">
                                                                <label class="form-check-label" for="premium-economy">
                                                                    Premium Economy
                                                                </label>
                                                            </div>
                                                            <div class="form-check me-3 mb-3">
                                                                <input class="form-check-input" type="radio" value="Business" name="cabin-class" id="business">
                                                                <label class="form-check-label" for="business">
                                                                    Business
                                                                </label>
                                                            </div>
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="radio" value="First Class" name="cabin-class" id="first-class">
                                                                <label class="form-check-label" for="first-class">
                                                                    First Class
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                                        <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                    </div>
                                </div>
                                <div class="multi-trip">
                                    <div class="d-lg-flex">
                                        <div class="d-flex  form-info">
                                            <div class="form-item dropdown">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">From</label>
                                                    <input type="text" class="form-control" value="Newyork">
                                                    <p class="fs-12 mb-0">Ken International Airport</p>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Newyork</h6>
                                                                <p>Ken International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Boston</h6>
                                                                <p>Boston Logan International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                                <p>Dulles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                                <p>Los Angeles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Orlando</h6>
                                                                <p>Orlando International Airport</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-item dropdown ps-2 ps-sm-3">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">To</label>
                                                    <h5>Las Vegas</h5>
                                                    <p class="fs-12 mb-0">Martini International Airport</p>
                                                    <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                        <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                    </span>
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Search Location">
                                                            <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Newyork</h6>
                                                                <p>Ken International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Boston</h6>
                                                                <p>Boston Logan International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                                <p>Dulles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                                <p>Los Angeles International Airport</p>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <h6 class="fs-16 fw-medium">Orlando</h6>
                                                                <p>Orlando International Airport</p>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-item">
                                                <label class="form-label fs-14 text-default mb-1">Departure</label>
                                                <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                                <p class="fs-12 mb-0">Monday</p>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="Hotels">
                            <form action="https://dreamstour.dreamstechnologies.com/html/hotel-grid.html">
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                    <h6 class="fw-medium fs-16 mb-2">Book Hotel - Villas, Apartments & more.</h6>
                                </div>
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">City, Property name or Location</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">USA</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search for City, Property name or Location">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                            <p>2000 Properties</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                            <p>3000 Properties</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                            <p>8000 Properties</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                            <p>8000 Properties</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                            <p>2000 Properties</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Check In</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Guests</label>
                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                <p class="fs-12 mb-0">4 Adult, 2 Rooms</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <h5 class="mb-3">Select Travelers &  Class</h5>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <label class="form-label text-gray-9 mb-2">Rooms</label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <label class="form-label text-gray-9 mb-2">Adults</label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <label class="form-label text-gray-9 mb-2">Children <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="room" id="room1" checked>
                                                            <label class="form-check-label" for="room1">
                                                                Single
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="room" id="room2">
                                                            <label class="form-check-label" for="room2">
                                                                Double
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="room" id="room3">
                                                            <label class="form-check-label" for="room3">
                                                                Delux
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio" name="room" id="room4">
                                                            <label class="form-check-label" for="room4">
                                                                Suite
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Property Type</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="property" id="property1" checked>
                                                            <label class="form-check-label" for="property1">
                                                                Villa
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="property" id="property2">
                                                            <label class="form-check-label" for="property2">
                                                                Condo
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="property" id="property3">
                                                            <label class="form-check-label" for="property3">
                                                                Cabin
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio" name="property" id="property4">
                                                            <label class="form-check-label" for="property4">
                                                                Apartments
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Price per Night</label>
                                                <input type="text" class="form-control" value="$1000 - $15000">
                                                <p class="fs-12 mb-0">20 Offers Available</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">$500 - $2000</h6>
                                                            <p>Upto 65% offers</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Upto 65% offers</h6>
                                                            <p>Upto 40% offers</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">$5000 - $8000</h6>
                                                            <p>Upto 35% offers</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">$9000 - $11000</h6>
                                                            <p>Upto 20% offers</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">$11000 - $15000</h6>
                                                            <p>Upto 10% offers</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="Cars">
                            <form action="https://dreamstour.dreamstechnologies.com/html/car-grid.html">
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="drop" id="same-drop" value="same-drop" checked>
                                            <label class="form-check-label fs-14 ms-2" for="same-drop">
                                                Same drop-off
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="drop" id="different-drop" value="different-drop">
                                            <label class="form-check-label fs-14 ms-2" for="different-drop">
                                                Different Drop off
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="drop" id="airport" value="airport">
                                            <label class="form-check-label fs-14 ms-2" for="airport">
                                                Airport
                                            </label>
                                        </div>
                                        <div class="form-check d-flex align-items-center me-3 mb-2">
                                            <input class="form-check-input mt-0" type="radio" name="drop" id="hourly-drop" value="hourly-drop">
                                            <label class="form-check-label fs-14 ms-2" for="hourly-drop">
                                                Hourly Package
                                            </label>
                                        </div>
                                    </div>
                                    <h6 class="fw-medium fs-16 mb-2">Book Car for rental</h6>
                                </div>
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown from-location">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">USA</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search for Cars">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                            <p>2000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                            <p>3000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                            <p>8000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                            <p>8000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                            <p>6000 Cars</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown pickup-airport">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">From</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">Ken International Airport</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search for Airport">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Hartsfield-Jackson Atlanta International</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Dallas/Fort Worth International</h6>
                                                            <p>USA</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">London Heathrow</h6>
                                                            <p>UK</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Seoul Incheon</h6>
                                                            <p>South Korea</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Singapore Changi International</h6>
                                                            <p>Singapore</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item dropdown to-location ps-2 ps-sm-3">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">To</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">USA</p>
                                                <span class="way-icon badge badge-primary rounded-pill translate-middle">
                                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                                </span>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search for Cars">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                            <p>2000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                            <p>3000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                            <p>8000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                            <p>8000 Cars</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                            <p>6000 Cars</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Departure</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2024">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item return-drop">
                                            <label class="form-label fs-14 text-default mb-1">Return</label>
                                            <input type="text" class="form-control datetimepicker" value="23-10-2024">
                                            <p class="fs-12 mb-0">Wednesday</p>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Pickup Time</label>
                                            <input type="text" class="form-control timepicker" value="11:45 PM">
                                        </div>
                                        <div class="form-item dropoff-time">
                                            <label class="form-label fs-14 text-default mb-1">Dropoff Time</label>
                                            <input type="text" class="form-control timepicker" value="11:45 PM">
                                        </div>
                                        <div class="form-item hourly-time">
                                            <label class="form-label fs-14 text-default mb-1">Hours</label>
                                            <h5>02 Hrs 10 Kms</h5>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="Cruise">
                            <form action="https://dreamstour.dreamstechnologies.com/html/cruise-grid.html">
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                    <h6 class="fw-medium fs-16 mb-2">Search For Cruise</h6>
                                </div>
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Destination</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">USA</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search Location">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Newyork</h6>
                                                            <p>Ken International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Boston</h6>
                                                            <p>Boston Logan International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Northern Virginia</h6>
                                                            <p>Dulles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Los Angeles</h6>
                                                            <p>Los Angeles International Airport</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Orlando</h6>
                                                            <p>Orlando International Airport</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Start Date</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">End Date</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Travellers & Cabin </label>
                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                <p class="fs-12 mb-0">4 Adult, 2 Rooms</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <h5 class="mb-3">Select Travelers &  Class</h5>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Travellers</h6>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Adults <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Childrens <span class="text-default fw-normal">( 2-12 Yrs )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="mb-3">
                                                                <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 0-12 Yrs )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <h6 class="fs-16 fw-medium mb-2">Select Cabin</h6>
                                                    <div class="d-flex align-items-center flex-wrap">
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="cabin" id="cabin1" checked>
                                                            <label class="form-check-label" for="cabin1">
                                                                Solo cabins
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" name="cabin" id="cabin2">
                                                            <label class="form-check-label" for="cabin2">
                                                                Balcony
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-3 mb-3">
                                                            <input class="form-check-input" type="radio" value="Business" name="cabin" id="cabin3">
                                                            <label class="form-check-label" for="cabin3">
                                                                Oceanview
                                                            </label>
                                                        </div>
                                                        <div class="form-check mb-3">
                                                            <input class="form-check-input" type="radio" name="cabin" id="cabin4">
                                                            <label class="form-check-label" for="cabin4">
                                                                Balcony rooms
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="Tour">
                            <form action="https://dreamstour.dreamstechnologies.com/html/tour-grid.html">
                                <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                    <h6 class="fw-medium fs-16 mb-2">Search holiday packages & trips</h6>
                                </div>
                                <div class="d-lg-flex">
                                    <div class="d-flex  form-info">
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Where would like to go?</label>
                                                <input type="text" class="form-control" value="Newyork">
                                                <p class="fs-12 mb-0">USA</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-md p-0">
                                                <div class="input-search p-3 border-bottom">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" placeholder="Search for City, Property name or Location">
                                                        <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">USA</h6>
                                                            <p>200 Places</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Japan</h6>
                                                            <p>300 Places</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Singapore</h6>
                                                            <p>80 Places</p>
                                                        </a>
                                                    </li>
                                                    <li class="border-bottom">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Russia</h6>
                                                            <p>500 Places</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <h6 class="fs-16 fw-medium">Germany</h6>
                                                            <p>150 Places</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Dates</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                            <p class="fs-12 mb-0">Monday</p>
                                        </div>
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Check Out</label>
                                            <input type="text" class="form-control datetimepicker" value="21-10-2025">
                                            <p class="fs-12 mb-0">Wednesday</p>
                                        </div>
                                        <div class="form-item dropdown">
                                            <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                <label class="form-label fs-14 text-default mb-1">Travellers</label>
                                                <h5>4 <span class="fw-normal fs-14">Persons</span></h5>
                                                <p class="fs-12 mb-0">2 Adult</p>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-xl">
                                                <h5 class="mb-3">Select Travelers</h5>
                                                <div class="mb-3 border br-10 info-item pb-1">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <label class="form-label text-gray-9 mb-2">Adult</label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <label class="form-label text-gray-9 mb-2">Childrens <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3 d-flex align-items-center justify-content-between">
                                                                <label class="form-label text-gray-9 mb-2">Infants <span class="text-default fw-normal">( 12+ Yrs )</span></label>
                                                                <div class="custom-increment">
                                                                    <div class="input-group">
                                                                        <span class="input-group-btn float-start">
                                                                            <button type="button" class="quantity-left-minus btn btn-light btn-number"  data-type="minus" data-field="">
                                                                            <span><i class="isax isax-minus"></i></span>
                                                                        </button>
                                                                        </span>
                                                                        <input type="text" name="quantity" class=" input-number" value="01">
                                                                        <span class="input-group-btn float-end">
                                                                            <button type="button" class="quantity-right-plus btn btn-light btn-number" data-type="plus" data-field="">
                                                                                <span><i class="isax isax-add"></i></span>
                                                                        </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Cancel</a>
                                                    <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary search-btn rounded">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner Search -->

<!-- Destination Section -->
<section class="section destination-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header section-header-four text-center">
                    <h2 class="mb-2"><span>Popular</span> Locations</h2>
                    <p class="sub-title">Connecting Needs with Offers for the Professional Flight Services, Book your next flight appointment with ease.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center g-4">

            <!-- Destination Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="location-wrap wow fadeInDown">
                    <img src="assets/img/destination/destination-15.jpg" alt="img">
                    <span class="loc-name bg-white">Denmark</span>
                    <a href="flight-grid.html" class="loc-view"><i class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <!-- /Destination Item-->

            <!-- Destination Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="location-wrap wow fadeInDown">
                    <img src="assets/img/destination/destination-16.jpg" alt="img">
                    <span class="loc-name bg-white">Belgium</span>
                    <a href="flight-grid.html" class="loc-view"><i class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <!-- /Destination Item-->

            <!-- Destination Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="location-wrap wow fadeInDown">
                    <img src="assets/img/destination/destination-17.jpg" alt="img">
                    <span class="loc-name bg-white">Barcelona</span>
                    <a href="flight-grid.html" class="loc-view"><i class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <!-- /Destination Item-->

            <!-- Destination Item-->
            <div class="col-lg-3 col-sm-6">
                <div class="location-wrap wow fadeInDown">
                    <img src="assets/img/destination/destination-18.jpg" alt="img">
                    <span class="loc-name bg-white">Mexico</span>
                    <a href="flight-grid.html" class="loc-view"><i class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <!-- /Destination Item-->

            <!-- Destination Item-->
            <div class="col-lg-4 col-sm-6">
                <div class="location-wrap wow fadeInDown">
                    <img src="assets/img/destination/destination-19.jpg" alt="img">
                    <span class="loc-name bg-white">Indonesia</span>
                    <a href="flight-grid.html" class="loc-view"><i class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <!-- /Destination Item-->

            <!-- Destination Item-->
            <div class="col-lg-4 col-sm-6">
                <div class="location-wrap wow fadeInDown">
                    <img src="assets/img/destination/destination-20.jpg" alt="img">
                    <span class="loc-name bg-white">Romania</span>
                    <a href="flight-grid.html" class="loc-view"><i class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <!-- /Destination Item-->

            <!-- Destination Item-->
            <div class="col-lg-4 col-sm-6">
                <div class="location-wrap wow fadeInDown">
                    <img src="assets/img/destination/destination-21.jpg" alt="img">
                    <span class="loc-name bg-white">India</span>
                    <a href="flight-grid.html" class="loc-view"><i class="isax isax-arrow-right-1"></i></a>
                </div>
            </div>
            <!-- /Destination Item-->

        </div>
    </div>
</section>
<!-- /Destination Section -->

<!-- Client Section -->
<section class="section client-section-four wow zoomIn" data-wow-delay="0.2s">
    @php
        $societes = App\Models\Societe::all();
    @endphp
    <div class="container">
        <div class="client-sec">
            <div class="section-header text-center  wow fadeInDown">
                <h6 class="text-white">Et AR travaille avec plus de 50 clients</h6>
            </div>
            <div class="owl-carousel client-slider">
                @foreach ($societes as $societe)
                    <a href="{{ route('client.societes.showVoyageSociete.index', ['societe' => $societe->id]) }}">
                        <div class="client-img">
                            <img src="{{ asset('storage/' . $societe->logo) }}" alt="Client Logo">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- /Client Section -->

<!-- Place Section -->
<section class="section place-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-10 text-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header section-header-four mb-4 text-center">
                    <h2 class="mb-2"><span>Focusing</span> on Unique Experiences.</h2>
                    <p class="sub-title">Connecting Needs with Offers for the Professional Flight Services, Book your next flight appointment with ease.</p>
                </div>
            </div>
        </div>
        <div class="owl-carousel place-slider nav-center">

            <!-- Flight Item-->
            <div class="place-item mb-4">
                <div class="place-img">
                    <a href="flight-details.html">
                        <img src="assets/img/flight/flight-01.jpg" class="img-fluid" alt="img">
                    </a>
                    <div class="fav-item">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="fav-icon me-2">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-indigo">Cheapest</span>
                        </div>
                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.3</span>
                    </div>
                </div>
                <div class="place-content">
                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-45 me-2"></i>Toronto</span>
                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-135 me-2"></i>Bangkok</span>
                    </div>
                    <h5 class="text-truncate mb-1"><a href="flight-details.html">AstraFlight 215</a></h5>
                    <div class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-sm me-2">
                            <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                        </span>
                        <p class="fs-14 mb-0">Indigo</p>
                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at Frankfurt</p>
                    </div>
                    <div class="date-info p-2 mb-3">
                        <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Sep 04, 2024 - Sep 07, 2024</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$300</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-outline-success fs-10 fw-medium me-2">22 Seats Left</span>
                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                <img src="assets/img/users/user-11.jpg" class="rounded-circle" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Flight Item-->

            <!-- Flight Item-->
            <div class="place-item mb-4">
                <div class="place-img">
                    <div class="img-slider image-slide owl-carousel nav-center">
                        <div class="slide-images">
                            <a href="flight-details.html">
                                <img src="assets/img/flight/flight-02.jpg" class="img-fluid" alt="img">
                            </a>
                        </div>
                        <div class="slide-images">
                            <a href="flight-details.html">
                                <img src="assets/img/flight/flight-06.jpg" class="img-fluid" alt="img">
                            </a>
                        </div>
                        <div class="slide-images">
                            <a href="flight-details.html">
                                <img src="assets/img/flight/flight-07.jpg" class="img-fluid" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="fav-icon me-2">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-indigo">Cheapest</span>
                        </div>
                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.7</span>
                    </div>
                </div>
                <div class="place-content">
                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-45 me-2"></i>Chicago</span>
                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-135 me-2"></i>Melbourne</span>
                    </div>
                    <h5 class="text-truncate mb-1"><a href="flight-details.html">Cloudrider 789</a></h5>
                    <div class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-sm me-2">
                            <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                        </span>
                        <p class="fs-14 mb-0">Indigo</p>
                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at Dallas</p>
                    </div>
                    <div class="date-info p-2 mb-3">
                        <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Sep 11, 2024 - Sep 13, 2024</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$550</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-outline-success fs-10 fw-medium me-2">14 Seats Left</span>
                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                <img src="assets/img/users/user-12.jpg" class="rounded-circle" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Flight Item-->

            <!-- Flight Item-->
            <div class="place-item mb-4">
                <div class="place-img">
                    <a href="flight-details.html">
                        <img src="assets/img/flight/flight-03.jpg" class="img-fluid" alt="img">
                    </a>
                    <div class="fav-item">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="fav-icon me-2">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-indigo">Cheapest</span>
                        </div>
                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.5</span>
                    </div>
                </div>
                <div class="place-content">
                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-45 me-2"></i>Miami</span>
                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-135 me-2"></i>Tokyo</span>
                    </div>
                    <h5 class="text-truncate mb-1"><a href="flight-details.html">Aether Express 901</a></h5>
                    <div class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-sm me-2">
                            <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                        </span>
                        <p class="fs-14 mb-0">Indigo</p>
                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at Seoul</p>
                    </div>
                    <div class="date-info p-2 mb-3">
                        <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Sep 22, 2024 - Sep 24, 2024</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$450</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-outline-success fs-10 fw-medium me-2">12 Seats Left</span>
                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                <img src="assets/img/users/user-13.jpg" class="rounded-circle" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Flight Item-->

            <!-- Flight Item-->
            <div class="place-item mb-4">
                <div class="place-img">
                    <div class="img-slider image-slide owl-carousel nav-center">
                        <div class="slide-images">
                            <a href="flight-details.html">
                                <img src="assets/img/flight/flight-04.jpg" class="img-fluid" alt="img">
                            </a>
                        </div>
                        <div class="slide-images">
                            <a href="flight-details.html">
                                <img src="assets/img/flight/flight-08.jpg" class="img-fluid" alt="img">
                            </a>
                        </div>
                        <div class="slide-images">
                            <a href="flight-details.html">
                                <img src="assets/img/flight/flight-10.jpg" class="img-fluid" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="fav-item">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="fav-icon selected me-2">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-indigo">Cheapest</span>
                        </div>
                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.3</span>
                    </div>
                </div>
                <div class="place-content">
                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-45 me-2"></i>Boston</span>
                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-135 me-2"></i>Singapore</span>
                    </div>
                    <h5 class="text-truncate mb-1"><a href="flight-details.html">Silverwing 505</a></h5>
                    <div class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-sm me-2">
                            <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                        </span>
                        <p class="fs-14 mb-0">Indigo</p>
                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at London</p>
                    </div>
                    <div class="date-info p-2 mb-3">
                        <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Oct 17, 2024 - Oct 19, 2024</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$700</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-outline-success fs-10 fw-medium me-2">18 Seats Left</span>
                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                <img src="assets/img/users/user-15.jpg" class="rounded-circle" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Flight Item-->

            <!-- Flight Item-->
            <div class="place-item mb-4">
                <div class="place-img">
                    <a href="flight-details.html">
                        <img src="assets/img/flight/flight-10.jpg" class="img-fluid" alt="img">
                    </a>
                    <div class="fav-item">
                        <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class="fav-icon me-2">
                                <i class="isax isax-heart5"></i>
                            </a>
                            <span class="badge bg-indigo">Cheapest</span>
                        </div>
                        <span class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">4.6</span>
                    </div>
                </div>
                <div class="place-content">
                    <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-45 me-2"></i>Paris</span>
                        <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                        <span class="loc-name d-inline-flex align-items-center"><i class="isax isax-airplane rotate-135 me-2"></i>Cape Town</span>
                    </div>
                    <h5 class="text-truncate mb-1"><a href="flight-details.html">Nimbus 345</a></h5>
                    <div class="d-flex align-items-center mb-2">
                        <span class="avatar avatar-sm me-2">
                            <img src="assets/img/icons/airindia.svg" class="rounded-circle" alt="icon">
                        </span>
                        <p class="fs-14 mb-0">Indigo</p>
                        <p class="fs-14 d-inline-flex align-items-center mb-0"><i class="fa-solid fa-circle fs-6 text-primary mx-2"></i>1-stop at Doha</p>
                    </div>
                    <div class="date-info p-2 mb-3">
                        <p class="d-flex align-items-center"><i class="isax isax-calendar-2 me-2"></i>Aug 26, 2024 - Aug 27, 2024</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between border-top pt-3">
                        <h6 class="text-primary"><span class="fs-14 fw-normal text-default">From </span>$300</h6>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-outline-success fs-10 fw-medium me-2">27 Seats Left</span>
                            <a href="javascript:void(0);" class="avatar avatar-sm">
                                <img src="assets/img/users/user-10.jpg" class="rounded-circle" alt="img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Flight Item-->

        </div>
        <div class="text-center view-all wow fadeInUp">
            <a href="flight-grid.html" class="btn btn-dark">View All Flights<i class="isax isax-arrow-right-3 ms-2"></i></a>
        </div>
    </div>
</section>
<!-- /Place Section -->

</x-app-layout>
