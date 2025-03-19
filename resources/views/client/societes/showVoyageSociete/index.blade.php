<x-app-layout>
    <div class="container">
        <h1 class="showVoyageSociete">Voyages pour {{ $societe->raison_social }} Transport : </h1>
        <div class="row">
            @if ($voyages->isEmpty())
                <div >
                    <h4 >Aucun voyage trouvé.</h4>
                </div>



            @else
                @foreach ($voyages as $voyage)
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-12 mb-4">
                        <div class="card authentication-card">
                            <div class="card-body">
                                <div class="place-item mb-4">
                                    <div class="place-img">
                                            <img src="{{ asset('storage/' . $voyage->image) }}" class="img-fluid" alt="img">
                                    </div>
                                    <div class="place-content">
                                        <div class="flight-loc d-flex align-items-center justify-content-between mb-2">
                                            <span class="loc-name d-inline-flex align-items-center">
                                                <i class="isax isax-airplane rotate-45 me-2"></i>{{ $voyage->departure_city }}
                                            </span>
                                            <span class="arrow-icon"><i class="isax isax-arrow-2"></i></span>
                                            <span class="loc-name d-inline-flex align-items-center">
                                                <i class="isax isax-airplane rotate-135 me-2"></i>{{ $voyage->arrival_city }}
                                            </span>
                                        </div>

                                        <div class="d-flex align-items-center mb-2">

                                            <p class="fs-14 mb-0">matricule de bus : {{ $voyage->matricule }}</p>
                                            <p class="fs-14 d-inline-flex align-items-center mb-0">
                                                <i class="fa-solid fa-circle fs-6 text-primary mx-2"></i>
                                            </p>
                                        </div>
                                        <div class="date-info p-2 mb-3">
                                            <p class="d-flex align-items-center">
                                                <i class="isax isax-calendar-2 me-2"></i>{{ $voyage->date_depart }} - {{ $voyage->date_arrivee }}
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-top pt-3">
                                            <h6 class="text-primary">
                                                <span class="fs-14 fw-normal text-default">prix </span>{{ $voyage->prix }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-app-layout>
{{-- <x-app-list-voyages :voyages="$voyages" :societe="$societe" >
    @if ($voyages->isEmpty())
    <div >
        <h4 >Aucun voyage trouvé.</h4>
    </div>
    <div id="accordion-cabin" class="accordion-collapse collapse show">
        <div class="accordion-body">
            <div class="more-content">

                @foreach ($voyages as $voyage)                <div class="form-check d-flex align-items-center ps-0 mb-2">
                    <input class="form-check-input ms-0 mt-0" name="cabin1"
                        type="checkbox" id="cabin1">
                    <label class="form-check-label ms-2" for="cabin1">
                        {{$voyage->type_voyage}}
                    </label>
                </div>
                @endforeach


            </div>
            <a href="javascript:void(0);" class="more-view fw-medium fs-14">...
                </a>
        </div>
    </div>
</x-app-list-voyages> --}}
