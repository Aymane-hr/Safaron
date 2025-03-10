<x-app-layout>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">les voyages</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">les voyages</li>
                            <li class="breadcrumb-item active" aria-current="page">liste des voyages</li>
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

            <!-- Flight Search -->
            <div class="card">
                <div class="card-body">
                    <div class="banner-form">
                        <form method="GET" action="{{ route('voyages.rechercher') }}">
                            @csrf
                            
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <h6 class="fw-medium fs-16 mb-2">Rechercher un voyage</h6>
                            </div>
                            <div class="normal-trip">
                                <div class="d-lg-flex">
                                    <div class="d-flex form-info">
                                        <!-- Ville de départ -->
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">De</label>
                                            <select class="form-control" name="ville_depart_id">
                                                @foreach(App\Models\Ville::all() as $ville)
                                                    <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                                @endforeach
                                            </select>
                                        </div>
            
                                        <!-- Ville d’arrivée -->
                                        <div class="form-item ps-2 ps-sm-3">
                                            <label class="form-label fs-14 text-default mb-1">À</label>
                                            <select class="form-control" name="ville_arrivee_id">
                                                @foreach(App\Models\Ville::all() as $ville)
                                                <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                            @endforeach
                                            </select>
                                        </div>
            
                                        <!-- Date de départ -->
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Départ</label>
                                            <input type="date" class="form-control" name="date_depart">
                                        </div>
            
                                        <!-- Date d’arrivée -->
                                        <div class="form-item round-trip">
                                            <label class="form-label fs-14 text-default mb-1">Retour</label>
                                            <input type="date" class="form-control" name="date_arrivee">
                                        </div>
            
                                        {{-- <!-- Nombre de passagers -->
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">Passagers</label>
                                            <input type="number" class="form-control" name="nombre_personnes" min="1" value="1">
                                        </div> --}}
                                    </div>
            
                                    <!-- Bouton Rechercher -->
                                    <button type="submit" class="btn btn-primary search-btn rounded">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
            
                </div>
            </div>
            <!-- /Flight Search -->

            <!-- Flight Types -->

            <!-- /Flight Types -->

            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <h6 class="mb-3">Trouvez votre voyages</h6>
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="list-item d-flex align-items-center mb-3">
                                <a href="flight-grid.html" class="list-icon me-2"><i
                                        class="isax isax-grid-1"></i></a>
                                <a href="flight-list.html" class="list-icon active me-2"><i
                                        class="isax isax-firstline"></i></a>
                            </div>
                            {{--<div class="dropdown mb-3">
                                <a href="javascript:void(0);" class="dropdown-toggle py-2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="fw-medium text-gray-9">Filtrer par  : </span>Recommended
                                </a>
                                <div class="dropdown-menu dropdown-sm">
                                    <form action="https://dreamstour.dreamstechnologies.com/html/flight-grid.html">
                                        <h6 class="fw-medium fs-16 mb-3">Sort By</h6>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend"
                                                type="checkbox" id="recommend1" checked>
                                            <label class="form-check-label ms-2" for="recommend1">Recommended</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend"
                                                type="checkbox" id="recommend2">
                                            <label class="form-check-label ms-2" for="recommend2">Price: low to
                                                high</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend"
                                                type="checkbox" id="recommend3">
                                            <label class="form-check-label ms-2" for="recommend3">Price: high to
                                                low</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend"
                                                type="checkbox" id="recommend4">
                                            <label class="form-check-label ms-2" for="recommend4">Newest</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-2">
                                            <input class="form-check-input ms-0 mt-0" name="recommend"
                                                type="checkbox" id="recommend5">
                                            <label class="form-check-label ms-2" for="recommend5">Ratings</label>
                                        </div>
                                        <div class="form-check d-flex align-items-center ps-0 mb-0">
                                            <input class="form-check-input ms-0 mt-0" name="recommend"
                                                type="checkbox" id="recommend6">
                                            <label class="form-check-label ms-2" for="recommend6">Reviews</label>
                                        </div>
                                        <div
                                            class="d-flex align-items-center justify-content-end border-top pt-3 mt-3">
                                            <a href="javascript:void(0);" class="btn btn-light btn-sm me-2">Reset</a>
                                            <button type="submit" class="btn btn-primary btn-sm">Apply</button>
                                        </div>
                                    </form>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    <div class="hotel-list">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <!-- Flight List -->
                                @foreach ($voyages as $voyage)
                                    <div class="place-item mb-4">
                                        <div class="place-img">
                                            <div class=" nav-center">
                                                        <img src="{{ $voyage->autocar->image }}" class="img-fluid"
                                                            alt="img">
                                            </div>
                                            {{-- <div class="fav-item">
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="fav-icon me-2 selected">
                                                        <i class="isax isax-heart5"></i>
                                                    </a>
                                                    <span class="badge bg-indigo">Cheapest</span>
                                                </div>
                                                <span
                                                    class="badge badge-warning badge-xs text-gray-9 fs-13 fw-medium rounded">5.0</span>
                                            </div> --}}
                                        </div>
                                        <div class="place-content">
                                            <div
                                                class="d-flex justify-content-between align-items-center flex-wrap row-gap-2 mb-3">
                                                <div>
                                                    <h5 class="text-truncate mb-1"><a
                                                            href="flight-details.html">{{ $voyage->autocar->societe->raison_social }}</a></h5>
                                                    <div class="d-flex">
                                                        {{-- <span class="avatar avatar-sm me-2">
                                                            <img src="assets/img/icons/airindia.svg"
                                                                class="rounded-circle" alt="icon">
                                                        </span> --}}
                                                        <p class="fs-14 mb-0 me-2">{{ $voyage->autocar->societe->raison_social }}</p>
                                                    </div>
                                                </div>
                                                {{-- <div class="d-flex align-items-center">
                                                    <span class="badge bg-outline-success fs-10 fw-medium  me-2">20
                                                        Seats Left</span>
                                                    <a href="javascript:void(0);" class="avatar avatar-sm">
                                                        <img src="assets/img/users/user-08.jpg" class="rounded-circle"
                                                            alt="img">
                                                    </a>
                                                </div> --}}
                                            </div>
                                            {{-- <p class=" fs-14 mb-3">Experience top-notch service, in-flight amenities,
                                                and smooth takeoffs for a stress-free journey.</p> --}}
                                            <div
                                                class="flight-loc d-flex align-items-center justify-content-between mb-3">
                                                <span
                                                    class="loc-name d-inline-flex justify-content-center align-items-center w-100"><i
                                                        class="isax isax-airplane rotate-45 me-2"></i>{{ $voyage->villeDepart->ville }}</span>
                                                <a href="javascript:void(0);" class="arrow-icon flex-shrink-0 mx-2"><i
                                                        class="isax isax-arrow-2"></i></a>
                                                <span
                                                    class="loc-name d-inline-flex justify-content-center align-items-center w-100"><i
                                                        class="isax isax-airplane rotate-135 me-2"></i>{{ $voyage->villeArrivee->ville }}</span>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between border-top flex-wrap gap-2 pt-3">
                                                <div class="date-info p-2">
                                                    <p class="d-flex align-items-center"><i
                                                            class="isax isax-calendar-2 me-2"></i>{{ $voyage->date_depart }} - {{ $voyage->date_arrivee }}</p>
                                                </div>
                                                <h6 class="text-primary"><span
                                                        class="fs-14 fw-normal text-default">Prix </span>{{ number_format($voyage->prix , 2, ',', '')  }} DH</h6>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- /Flight List -->
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /Pagination -->

                </div>

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-3 theiaStickySidebar">
                    <div class="card filter-sidebar mb-4 mb-lg-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Filtrer</h5>
                            <a href="javascript:void(0);" class="fs-14 link-primary">Annuller</a>
                        </div>
                        <div class="card-body p-0">
                            <form action="https://dreamstour.dreamstechnologies.com/html/search.html">
                                <div class="p-3 border-bottom">
                                    <label class="form-label fs-16">Rechercher par nom de societe</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-search-normal"></i>
                                        </span>
                                        <input type="text" class="form-control"
                                            placeholder="Rechercher par nom de societe">
                                    </div>
                                </div>
                                <div class="accordion accordion-list">
                                    <div class="accordion-item border-bottom p-3">
            
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-flight" aria-expanded="true"
                                                aria-controls="accordion-flight" role="button">
                                                <i class="isax isax-airplane4 me-2 text-primary"></i> Nom des societes
                                            </div>
                                        </div>
                                        <div id="accordion-flight" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="flight1"
                                                            type="checkbox" id="flight1">
                                                        <label class="form-check-label ms-2" for="flight1">
                                                           Ghazala
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="flight2"
                                                            type="checkbox" id="flight2">
                                                        <label class="form-check-label ms-2" for="flight2">
                                                            CTM
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="flight3"
                                                            type="checkbox" id="flight3">
                                                        <label class="form-check-label ms-2" for="flight3">
                                                            Sahary
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="more-view fw-medium fs-14">Regardez plus
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-amenity" aria-expanded="true"
                                                aria-controls="accordion-amenity" role="button">
                                                <i class="isax isax-candle me-2 text-primary"></i>Equipements
                                            </div>
                                        </div>
                                        <div id="accordion-amenity" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity1"
                                                            type="checkbox" id="amenity1">
                                                        <label class="form-check-label ms-2" for="amenity1">
                                                             Wifi
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="amenity2"
                                                            type="checkbox" id="amenity2">
                                                        <label class="form-check-label ms-2" for="amenity2">
                                                           blassa hda serjem hahaha
                                                        </label>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="more-view fw-medium fs-14">...
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-cabin" aria-expanded="true"
                                                aria-controls="accordion-cabin" role="button">
                                                <i class="isax isax-home-2 me-2 text-primary"></i>Type des voyages
                                            </div>
                                        </div>
                                        <div id="accordion-cabin" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="more-content">
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="cabin1"
                                                            type="checkbox" id="cabin1">
                                                        <label class="form-check-label ms-2" for="cabin1">
                                                            comfort
                                                        </label>
                                                    </div>
                                                    <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                        <input class="form-check-input ms-0 mt-0" name="cabin2"
                                                            type="checkbox" id="cabin2">
                                                        <label class="form-check-label ms-2" for="cabin2">
                                                            Premium compfort
                                                        </label>
                                                    </div>
                                                   
                                                </div>
                                                <a href="javascript:void(0);" class="more-view fw-medium fs-14">...
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="accordion-item border-bottom p-3">
                                        <div class="accordion-header">
                                            <div class="accordion-button p-0" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-brand" aria-expanded="true"
                                                aria-controls="accordion-brand" role="button">
                                                <i class="isax isax-discount-shape me-2 text-primary"></i>Reviews
                                            </div>
                                        </div>
                                        <div id="accordion-brand" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review1"
                                                        type="checkbox" id="review1">
                                                    <label class="form-check-label ms-2" for="review1">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">5 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review2"
                                                        type="checkbox" id="review2">
                                                    <label class="form-check-label ms-2" for="review2">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">4 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review3"
                                                        type="checkbox" id="review3">
                                                    <label class="form-check-label ms-2" for="review3">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">3 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-2">
                                                    <input class="form-check-input ms-0 mt-0" name="review4"
                                                        type="checkbox" id="review4">
                                                    <label class="form-check-label ms-2" for="review4">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary me-1"></i>
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">2 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check d-flex align-items-center ps-0 mb-0">
                                                    <input class="form-check-input ms-0 mt-0" name="review5"
                                                        type="checkbox" id="review5">
                                                    <label class="form-check-label ms-2" for="review5">
                                                        <span class="rating d-flex align-items-center">
                                                            <i class="fas fa-star filled text-primary"></i>
                                                            <span class="ms-2">1 Star</span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->

                

            </div>
        </div>
    </div>
</x-app-layout>
