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
                      

                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <h6 class="fw-medium fs-16 mb-2">Rechercher un voyage</h6>
                            </div>
                            <div class="normal-trip">
                                <div class="d-lg-flex align-items-end">
                                    <div class="d-flex form-info flex-wrap gap-3">
                                        <!-- Ville de départ -->
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">De</label>
                                            <select class="form-control select2" id="ville_depart_id" name="ville_depart_id" style="width: 100%;">
                                                <option value="" disabled selected>Choisir une ville</option>
                                                @foreach (App\Models\Ville::all() as $ville)
                                                    <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Ville d’arrivée -->
                                        <div class="form-item">
                                            <label class="form-label fs-14 text-default mb-1">À</label>
                                            <select class="form-control select2" id="ville_arrivee_id" name="ville_arrivee_id" style="width: 100%;">
                                                <option value="" disabled selected>Choisir une ville</option>
                                                @foreach (App\Models\Ville::all() as $ville)
                                                    <option value="{{ $ville->id }}">{{ $ville->ville }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- Date de départ -->
                                        <div class="form-item">
                                            <label for="date_depart" class="form-label fs-14 text-default mb-1">Départ</label>
                                            <input type="date" class="form-control" id="date_depart" name="date_depart">
                                        </div>

                                        <!-- Date d’arrivée -->
                                        <div class="form-item">
                                            <label for="date_arrivee" class="form-label fs-14 text-default mb-1">Retour</label>
                                            <input type="date" class="form-control" id="date_arrivee" name="date_arrivee">
                                        </div>
                                    </div>

                                    <!-- Bouton Rechercher -->
                                    <div class="form-item ms-lg-3 mt-3 mt-lg-0">
                                        <button type="submit" id="rechercher" class="btn btn-primary search-btn rounded px-4">Rechercher</button>
                                    </div>
                                </div>
                            </div>

                          
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
                            {{-- <div class="list-item d-flex align-items-center mb-3">
                                <a href="flight-grid.html" class="list-icon me-2"><i
                                        class="isax isax-grid-1"></i></a>
                                <a href="flight-list.html" class="list-icon active me-2"><i
                                        class="isax isax-firstline"></i></a>
                            </div> --}}
                            {{-- <div class="dropdown mb-3">
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
                            </div> --}}
                        </div>
                    </div>
                    <div class="hotel-list">
                        <div class="row justify-content-center">
                            <div  id="voyages" class="col-md-12">
                                <!-- Flight List -->
                            @include('client.voyages.partials.list-voyage', ['voyages' => $voyages])
                                <!-- /Flight List -->
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <nav class="pagination-nav">
                        <ul class="pagination justify-content-center">
                            {{-- <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                                </a>
                            </li> --}}
                         
                            {{ $voyages->links() }}
                            {{-- <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                                </a>
                            </li> --}}
                        </ul>
                    </nav>
                    <!-- /Pagination -->

                </div>

                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-3 theiaStickySidebar">
                    <div class="card filter-sidebar mb-4 mb-lg-0">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5>Filtrer</h5>
                          
                        </div>
                        <div class="card-body p-0">
                            <form action="https://dreamstour.dreamstechnologies.com/html/search.html">
                                <div class="p-3 border-bottom">
                                    <label class="form-label fs-16">Rechercher par nom de societe</label>
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <i class="isax isax-search-normal"></i>
                                        </span>
                                        <input  oninput="search(this)"  type="text" class="form-control"
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
                                                    <i class="isax isax-airplane4 me-2 text-primary"></i> Nom des
                                                    societes
                                                </div>
                                            </div>
                                            <div id="accordion-flight" class="accordion-collapse collapse show">
                                                @php
                                                    $societes = App\Models\Societe::all();
                                                @endphp

                                                <div class="accordion-body">
                                                    <div class="more-content">
                                                        @foreach ($societes as $societe)
                                                            <div
                                                                class="form-check d-flex align-items-center ps-0 mb-2">
                                                                <input onchange="filter()"   data-id="{{ $societe->id }}" class="form-check-input ms-0 mt-0 societes"
                                                                    name="flight1" type="checkbox" id="flight1">
                                                                <label class="form-check-label ms-2" for="flight1">
                                                                    {{ $societe->raison_social }}
                                                                </label>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="more-view fw-medium fs-14">Regardez plus
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
                                                        @php
                                                            $equipements = App\Models\Equipement::all();
                                                        @endphp

                                                        @foreach ($equipements as $equipement)
                                                            <div
                                                                class="form-check d-flex align-items-center ps-0 mb-2">
                                                                <input onchange="filter()"  data-id="{{ $equipement->id }}" class="form-check-input ms-0 mt-0 equipements"
                                                                    name="cabin1" type="checkbox" id="cabin1">
                                                                <label class="form-check-label ms-2" for="cabin1">
                                                                    {{ $equipement->equipement }}
                                                                </label>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="more-view fw-medium fs-14">...
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
                                                        @php
                                                            $typesDesVoyages = App\Models\TypeVoyage::all();
                                                        @endphp
                                                        @foreach ($typesDesVoyages as $typeDesVoyage)
                                                            <div
                                                                class="form-check d-flex align-items-center ps-0 mb-2">
                                                                <input onchange="filter()"  data-id="{{ $typeDesVoyage->id }}" class="form-check-input ms-0 mt-0 type-voyages"
                                                                    name="cabin1" type="checkbox" id="cabin1">
                                                                <label class="form-check-label ms-2" for="cabin1">
                                                                    {{ $typeDesVoyage->type_voyage }}
                                                                </label>
                                                            </div>
                                                        @endforeach


                                                    </div>
                                                    <a href="javascript:void(0);"
                                                        class="more-view fw-medium fs-14">...
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="accordion-item border-bottom p-3">
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
                                    </div> --}}
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Sidebar -->



            </div>
        </div>
    </div>


    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#rechercher').click(function () {
                let ville_depart = $('#ville_depart_id').val();
                let ville_arrivee = $('#ville_arrivee_id').val();
                let date_depart = $('#date_depart').val();
                let date_arrivee = $('#date_arrivee').val();

                $.ajax({
                    url: "{{ route('voyages.filter') }}",
                    type: "GET",
                    data: {
                        ville_depart: ville_depart,
                        ville_arrivee: ville_arrivee,
                        date_depart: date_depart,
                        date_arrivee: date_arrivee
                    },
                    success: function (response) {
                        $('#voyages').html(response.voyages);
                    }
                });
            });


            window.filter = function() {
                societes = [];
                equipements = [];
                type_voyages = [];
                $('.societes').each(function(){
                    if(this.checked){
                        societes.push($(this).data('id'));
                    }
                });
                $('.equipements').each(function(){
                    if(this.checked){
                        equipements.push($(this).data('id'));
                    }
                });
                $('.type-voyages').each(function(){
                    if(this.checked){
                        type_voyages.push($(this).data('id'));
                    }
                });
                $.ajax({
                    url: "{{ route('voyages.filtermultiple') }}",
                    type: "GET",
                    data: {
                        societes: societes,
                        equipements: equipements,
                        type_voyages: type_voyages
                    },
                    success: function(response) {
                        $('#voyages').html(response.voyages);
                    }
                });
            }

            window.search = function(elem) {
                societes = $(elem).val();
                $.ajax({
                    url: "{{ route('voyages.search') }}",
                    type: "GET",
                    data: {
                        societes: societes,
                    },
                    success: function(response) {
                        $('#voyages').html(response.voyages);
                    }
                });
            }
        });
   
    </script>
</x-app-layout>
