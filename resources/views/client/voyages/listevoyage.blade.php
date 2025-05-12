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
                        <div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="flight">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                        
                                        <h6 class="fw-medium fs-16 mb-2">Trouvez votre voyage idéal</h6>
                                    </div>
                                    <div class="normal-trip">
                                    <form id="search-form">
                                    <div class="d-lg-flex">
                                        <div class="d-flex form-info">
                                            <div class="form-item dropdown">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">From</label>
                                                    <input type="text" class="form-control" placeholder="Ville de départ">
                                                    <input type="hidden" id="ville_depart_id" name="ville_depart_id">
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control search-ville" data-target="depart" placeholder="Rechercher une ville...">
                                                            <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        @foreach($villes as $ville)
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item select-ville-depart" href="javascript:void(0);" data-ville-id="{{ $ville->id }}" data-ville-nom="{{ $ville->ville }}">
                                                                <h6 class="fs-16 fw-medium">{{ $ville->ville }}</h6>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                             <span class="d-flex align-items-center justify-content-center">
                                                 <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                            </span>
                                            <div class="form-item dropdown ps-2 ps-sm-3">
                                                <div data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" role="menu">
                                                    <label class="form-label fs-14 text-default mb-1">To</label>
                                                    <input type="text" class="form-control" placeholder="Ville d'arrivée">
                                                    <input type="hidden" id="ville_arrivee_id" name="ville_arrivee_id">
                                                   
                                                </div>
                                                <div class="dropdown-menu dropdown-md p-0">
                                                    <div class="input-search p-3 border-bottom">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control search-ville" data-target="arrivee" placeholder="Rechercher une ville...">
                                                            <span class="input-group-text px-2 border-start-0"><i class="isax isax-search-normal"></i></span>
                                                        </div>
                                                    </div>
                                                    <ul>
                                                        @foreach($villes as $ville)
                                                        <li class="border-bottom">
                                                            <a class="dropdown-item select-ville-arrivee" href="javascript:void(0);" data-ville-id="{{ $ville->id }}" data-ville-nom="{{ $ville->ville }}">
                                                                <h6 class="fs-16 fw-medium">{{ $ville->ville }}</h6>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="form-item">
                                                <label class="form-label fs-14 text-default mb-1">Date de depart</label>
                                                <input type="date" class="form-control datetimepicker" id="date_depart" name="date_depart">
                                              
                                            </div>
                                            
                                        </div>
                                        <button type="button" id="rechercher" class="btn btn-primary search-btn rounded">Search</button>
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
                                                    <i class="isax isax-setting-2 me-2 text-primary"></i> 
                                                    Options
                                                </div>
                                            </div>
                                            <div id="accordion-flight" class="accordion-collapse collapse show">
                                                @php
                                                    $options = App\Models\Option::all();
                                                @endphp

                                                <div class="accordion-body">
                                                    <div class="more-content">
                                                        @foreach ($options as $option)
                                                            <div
                                                                class="form-check d-flex align-items-center ps-0 mb-2">
                                                                <input data-id="{{ $option->id }}" class="form-check-input ms-0 mt-0 options"
                                                                    name="option_{{ $option->id }}" type="checkbox" id="option_{{ $option->id }}">
                                                                <label class="form-check-label ms-2" for="option_{{ $option->id }}">
                                                                    {{ $option->option }}
                                                                </label>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                  
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
            // Gestion de la sélection des villes de départ
            $('.select-ville-depart').click(function() {
                let villeId = $(this).data('ville-id');
                let villeNom = $(this).data('ville-nom');
                $('#ville_depart_id').val(villeId);
                $(this).closest('.dropdown').find('input.form-control').val(villeNom);
            });

            // Gestion de la sélection des villes d'arrivée
            $('.select-ville-arrivee').click(function() {
                let villeId = $(this).data('ville-id');
                let villeNom = $(this).data('ville-nom');
                $('#ville_arrivee_id').val(villeId);
                $(this).closest('.dropdown').find('input.form-control').val(villeNom);
            });

            // Fonction de filtrage des villes
            function filterVilles(searchText, target) {
                const searchLower = searchText.toLowerCase();
                $(`li .select-ville-${target}`).each(function() {
                    const villeNom = $(this).find('h6').text().toLowerCase();
                    const listItem = $(this).closest('li');
                    if (villeNom.includes(searchLower)) {
                        listItem.show();
                    } else {
                        listItem.hide();
                    }
                });
            }

            // Gestionnaire de recherche pour les villes
            $('.search-ville').on('input', function() {
                const searchText = $(this).val();
                const target = $(this).data('target');
                filterVilles(searchText, target);
            });

            // Gestionnaire d'événements pour les options
            $('.options').on('change', function() {
                let selectedOptions = [];
                $('.options:checked').each(function() {
                    selectedOptions.push($(this).data('id'));
                });

                console.log('Options sélectionnées:', selectedOptions); // Debug

                $.ajax({
                    url: "{{ route('voyages.filter') }}",
                    type: "GET",
                    data: {
                        options: selectedOptions,
                        ville_depart: $('#ville_depart_id').val(),
                        ville_arrivee: $('#ville_arrivee_id').val(),
                        date_depart: $('#date_depart').val()
                    },
                    success: function(response) {
                        $('#voyages').html(response.voyages);
                        console.log('Réponse reçue:', response); // Debug
                    },
                    error: function(xhr, status, error) {
                        console.error('Erreur lors du filtrage:', error);
                        console.log('Détails de l\'erreur:', xhr.responseText); // Debug
                    }
                });
            });

            // Empêcher la soumission normale du formulaire
            $('#search-form').on('submit', function(e) {
                e.preventDefault();
            });

            $('#rechercher').click(function () {
                let ville_depart = $('#ville_depart_id').val();
                let ville_arrivee = $('#ville_arrivee_id').val();
                let date_depart = $('#date_depart').val();

                if (!ville_depart || !ville_arrivee) {
                    alert('Veuillez sélectionner les villes de départ et d\'arrivée');
                    return;
                }

                if (!date_depart) {
                    alert('Veuillez sélectionner une date de départ');
                    return;
                }

                $.ajax({
                    url: "{{ route('voyages.filter') }}",
                    type: "GET",
                    data: {
                        ville_depart: ville_depart,
                        ville_arrivee: ville_arrivee,
                        date_depart: date_depart
                    },
                    success: function (response) {
                        $('#voyages').html(response.voyages);
                    },
                    error: function(xhr, status, error) {
                        console.error('Erreur lors de la recherche:', error);
                        alert('Une erreur est survenue lors de la recherche');
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
