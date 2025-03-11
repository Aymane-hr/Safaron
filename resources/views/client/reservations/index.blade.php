<x-app-layout>
    <style>
        .seat {
            width: 40px;
            height: 40px;
            background-color: #28a745;
            /* Bootstrap green */
            color: #fff;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Optional spacing so icon & text fit well */
            padding: 2px;
        }

        .seat-selected {
            background-color: #fd7e14;
            /* Bootstrap orange */
        }

        /* Optional: smaller icon & text size if you want it more compact */
        .seat i {
            font-size: 0.9rem;
        }

        .seat small {
            font-size: 0.75rem;
        }
    </style>
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar breadcrumb-bg-05 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title mb-2">Détails de voyage</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-0">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="isax isax-home5"></i></a></li>
                            <li class="breadcrumb-item">Voyage</li>
                            <li class="breadcrumb-item active" aria-current="page">Détails de l'voyage</li>
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

            <div class="row">
                <div class="col-xl-8">
                    <!-- Slider -->
                    <div>
                        <div class="service-wrap slider-wrap-five mb-4">
                            <div class="d-flex align-items-center justify-content-between flex-wrap mb-2">
                                <div class="mb-2">
                                    <h4 class="mb-1 d-flex align-items-center flex-wrap">
                                        {{ $voyage->autocar->societe->raison_social }}
                                    </h4>
                                    <div class="d-flex align-items-center flex-wrap">
                                        <p class="fs-14 mb-2 me-3 pe-3 border-end d-flex align-items-center">
                                            <img src="{{ asset('storage/' . $voyage->autocar->image) }}" class="me-2"
                                                alt="Img">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Slider -->

                    <div class="card shadow-none bg-light-200">
                        <div class="card-body pb-1">
                            <h5 class="d-flex align-items-center fs-18 mb-3">
                                <span class="avatar avatar-md rounded-circle bg-primary me-2"><i
                                        class="isax isax-bus5"></i></span>
                                Informations de voyage
                            </h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Date de départ</h6>
                                        <p>{{ $voyage->date_depart }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Date d'arrivée</h6>
                                        <p>{{ $voyage->date_arrivee }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Heure de départ</h6>
                                        <p>{{ $voyage->heure_depart }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Heure d'arrivée</h6>
                                        <p>{{ $voyage->heure_arrivee }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Ville de départ</h6>
                                        <p>{{ $voyage->villeDepart->ville }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Ville d'arrivée</h6>
                                        <p>{{ $voyage->villeArrivee->ville }}</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Autocar</h6>
                                        <p>ID: {{ $voyage->autocar_id }}</p>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Type de voyage</h6>
                                        <p>{{ $voyage->type_voyage }}</p>
                                    </div>
                                </div> --}}
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="mb-3">
                                        <h6 class="mb-1">Prix</h6>
                                        <p>{{ $voyage->prix }} DH</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="accordion custom-accordion accordion-shadow-none">
                        <div class="accordion-item mb-0 border-0 pb-1">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordion_collapse_three" aria-expanded="true">
                                    Équipements
                                </button>
                            </div>
                            <div id="accordion_collapse_three" class="accordion-collapse collapse show">
                                <div class="accordion-body pt-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="mb-3">
                                                @foreach($equipements as $equipement)
                                                    <div class="d-flex align-items-center mb-2">
                                                        <i class="isax isax-verify text-primary me-2 fs-16"></i>
                                                        <p>{{ $equipement->equipement }}</p>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
                <div class="col-xl-4 theiaStickySidebar">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <span class="btn btn-outline-light flex-fill"><span class="icon-rotate-up me-2"><i
                                            class="isax isax-airplane"></i></span>{{ $voyage->villeDepart->ville }}</span>
                                <a href="javascript:void(0);" class="way-icon badge badge-primary rounded-pill mx-2">
                                    <i class="fa-solid fa-arrow-right-arrow-left"></i>
                                </a>
                                <span class="btn btn-outline-light flex-fill"><span class="icon-rotate-down me-2"><i
                                            class="isax isax-airplane"></i></span>{{ $voyage->villeArrivee->ville }}</span>
                            </div>
                            <h5 class="fs-18 mb-3">Vérifier la disponibilité</h5>
                            <div class="banner-form">
                                <form action="{{ route('client.reservations.store') }}" method="POST"
                                    class="form-info border-0">
                                    @csrf
                                    <input type="text" name="voyage_id" value="{{ $voyage->id }}" hidden>


                                    <!-- From -->
                                    <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                        <label class="form-label fs-14 text-default mb-1">From</label>
                                        <h5>{{ $voyage->villeDepart->ville }}</h5>
                                    </div>

                                    <!-- To -->
                                    <div class="form-item dropdown border rounded p-3 mb-3 w-100">
                                        <label class="form-label fs-14 text-default mb-1">To</label>
                                        <h5>{{ $voyage->villeArrivee->ville }}</h5>
                                    </div>

                                    <!-- Departure -->
                                    <div class="form-item border rounded p-3 mb-3 w-100">
                                        <label class="form-label fs-14 text-default mb-1">Departure</label>
                                        <input type="text" class="form-control datetimepicker"
                                            value="{{ $voyage->date_depart }}" />
                                    </div>

                                    <!-- Preferred Class -->
                                    {{-- <div class="mb-3">
                                  <label class="form-label fs-14 text-default mb-1">Preferred Class</label>
                                  <select class="form-select" name="classe_id">
                                    @foreach (App\Models\TypeVoyage::all() as $typevoyage)
                                      <option value="{{ $typevoyage->id }}">{{ $typevoyage->type_voyage }}</option>
                                    @endforeach
                                  </select>
                                </div> --}}

                                    <!-- Mode règlement -->
                                    <div class="mb-3">
                                        <label class="form-label fs-14 text-default mb-1">Mode règlement</label>
                                        <select name="mode_reglement_id" class="form-select">
                                            @foreach (App\Models\ModeReglement::all() as $moderegelement)
                                                <option value="{{ $moderegelement->id }}">
                                                    {{ $moderegelement->mode_reglement }}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <!-- Seat Selection -->
                                    <div class="card shadow-none mb-3">
                                        <div class="card-body p-3 pb-0">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 onclick="resetCheckboxes()">Sélection de siège</h6>
                                            </div>
                                            <div class="row">
                                                @php
                                                    $reservedSeats = App\Models\Reservation::where(
                                                        'voyage_id',
                                                        $voyage->id,
                                                    )
                                                        ->pluck('num_siege')
                                                        ->toArray();
                                                    $nbr_siege = $voyage->autocar->nbr_siege;
                                                @endphp

                                                @for ($i = 1; $i <= $nbr_siege; $i++)
                                                    <div class="col-2 mb-2">
                                                        <div
                                                            class="seat @if (in_array($i, $reservedSeats)) seat-selected @endif">
                                                            <label for="seat-{{ $i }}"
                                                                class="seat-label d-flex align-items-center justify-content-center">
                                                                <input type="checkbox" name="seats[]"
                                                                    id="seat-{{ $i }}"
                                                                    @if (in_array($i, $reservedSeats)) disabled @endif
                                                                    class="d-none" value="{{ $i }}"
                                                                    onclick="toggleCheckboxes(this);"

                                                                    >
                                                                <i class="fa fa-bus-alt"></i>
                                                                <small class="ms-1">{{ $i }}</small>
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endfor

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit"
                                        class="btn btn-primary btn-lg search-btn ms-0 w-100 mb-3 fs-14">
                                        Réserver Maintenant
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Wrapper -->
    <script>
        function toggleCheckboxes(selectedCheckbox) {
            // resetCheckboxes();
            reservedSeats=@json($reservedSeats);
            selectedCheckbox.parentElement.parentElement.classList.toggle('seat-selected');
            console.log(selectedCheckbox.checked);

            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                const seatNumber = Number(checkbox.id.split('-')[1]);
                if (checkbox !== selectedCheckbox && !reservedSeats.includes(seatNumber) ) {
                    checkbox.parentElement.parentElement.classList.remove('seat-selected')
                    checkbox.checked = false;
                }
            });
        }

        function resetCheckboxes() {
        reservedSeats=@json($reservedSeats);
        nbr_siege=@json($nbr_siege);
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
           for(let i=1;i<=nbr_siege;i++){
            if(reservedSeats.includes(i)){
                continue;
            }
            const checkbox = document.getElementById(`seat-${i}`);
            checkbox.disabled = false;
            checkbox.checked = false;
            checkbox.parentElement.parentElement.classList.remove('seat-selected');
           }

        }
    </script>
</x-app-layout>
