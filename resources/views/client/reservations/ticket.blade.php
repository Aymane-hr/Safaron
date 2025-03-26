<x-app-layout>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card booking-confirmation mb-0">
                        <div class="card-body">
                            <div class="bg-light border p-3 rounded-2 mb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1">Billet de Voyage</h5>
                                        <p class="text-gray-6">Réservation N°: {{ $reservation->id }}</p>
                                    </div>
                                    <span class="badge bg-success p-2">Confirmé</span>
                                </div>
                            </div>
                            <div class="pb-4 border-bottom mb-4">
                                <h6 class="mb-2">Informations de Voyage</h6>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Départ</h6>
                                        <p class="text-gray-6 fs-16">{{ $reservation->villeDepart->ville }} - {{ $reservation->date_depart }} à {{ $reservation->heure_depart }}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Arrivée</h6>
                                        <p class="text-gray-6 fs-16">{{ $reservation->villeArrivee->ville }} - {{ $reservation->date_arrivee }} à {{ $reservation->heure_arrivee }}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Numéro de siège</h6>
                                        <p class="text-gray-6 fs-16">{{ $reservation->num_siege }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-4 border-bottom mb-4">
                                <h6 class="mb-2">Informations de Paiement</h6>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Mode de règlement</h6>
                                        <p class="text-gray-6 fs-16">{{ $reservation->modeReglement->mode_reglement }}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Frais</h6>
                                        <p class="text-gray-6 fs-16">{{ number_format($reservation->frais, 2) }} DH</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Total Payé</h6>
                                        <p class="text-gray-6 fs-16">{{ number_format($reservation->prix + $reservation->frais, 2) }} DH</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h6 class="mb-2">Informations du Voyageur</h6>
                                <div class="row g-3">
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Nom</h6>
                                        <p class="text-gray-6 fs-16">{{ $reservation->user->name }}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Email</h6>
                                        <p class="text-gray-6 fs-16">{{ $reservation->user->email }}</p>
                                    </div>
                                    <div class="col-lg-4">
                                        <h6 class="fs-14">Téléphone</h6>
                                        <p class="text-gray-6 fs-16">{{ $reservation->user->phone }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('ticket.download', $reservation->id) }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-download me-2"></i> Télécharger le Ticket
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
