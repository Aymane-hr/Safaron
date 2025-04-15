<x-app-layout>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card booking-confirmation mb-0 border-0 shadow-sm">
                        <div class="card-body p-4">
                            <!-- Header with logo and status -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <img src="{{ asset('assets/img/admin/logo.png') }}" alt="Company Logo" style="height: 50px;">
                                <div class="text-end">
                                    <span class="badge bg-success p-2 rounded-pill">Confirmé</span>
                                    <p class="text-muted mb-0 mt-1">Réservation N°: {{ $reservation->id }}</p>
                                </div>
                            </div>

                            <!-- Main ticket title -->
                            <div class="text-center mb-4">
                                <h3 class="fw-bold text-primary">Billet de Voyage</h3>
                                <div class="divider mx-auto bg-primary" style="height: 3px; width: 80px;"></div>
                            </div>

                            <!-- Travel information -->
                            <div class="ticket-section mb-4">
                                <h5 class="section-title text-primary mb-3">
                                    <i class="fas fa-route me-2"></i>Informations de Voyage
                                </h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Départ</h6>
                                            <p class="info-value fw-bold">{{ $reservation->villeDepart->ville }}</p>
                                            <p class="info-detail text-muted">
                                                {{ $reservation->date_depart }} à {{ $reservation->heure_depart }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Arrivée</h6>
                                            <p class="info-value fw-bold">{{ $reservation->villeArrivee->ville }}</p>
                                            <p class="info-detail text-muted">
                                                {{ $reservation->date_arrivee }} à {{ $reservation->heure_arrivee }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Siège</h6>
                                            <p class="info-value fw-bold">{{ $reservation->num_siege }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Passenger information -->
                            <div class="ticket-section mb-4">
                                <h5 class="section-title text-primary mb-3">
                                    <i class="fas fa-user me-2"></i>Informations du Voyageur
                                </h5>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Nom</h6>
                                            <p class="info-value fw-bold">{{ $reservation->user->name }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Email</h6>
                                            <p class="info-value fw-bold">{{ $reservation->user->email }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Téléphone</h6>
                                            <p class="info-value fw-bold">{{ $reservation->user->telephone }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment information -->
                            <div class="ticket-section mb-4">
                                <h5 class="section-title text-primary mb-3">
                                    <i class="fas fa-credit-card me-2"></i>Informations de Paiement
                                </h5>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Mode de paiement</h6>
                                            <p class="info-value fw-bold">{{ $reservation->modeReglement->mode_reglement }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Frais</h6>
                                            <p class="info-value fw-bold">{{ number_format($reservation->frais, 2) }} DH</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="info-card bg-light p-3 rounded">
                                            <h6 class="info-label text-muted">Total Payé</h6>
                                            <p class="info-value fw-bold">{{ number_format($reservation->prix + $reservation->frais, 2) }} DH</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Download button -->
                            <div class="text-center mt-4">
                                <a href="{{ route('ticket.download', $reservation->id) }}" class="btn btn-primary btn-lg px-4 py-2">
                                    <i class="fas fa-download me-2"></i> Télécharger le Ticket
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .ticket-section {
            border-bottom: 1px dashed #dee2e6;
            padding-bottom: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .section-title {
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }
        .info-label {
            font-size: 0.85rem;
            margin-bottom: 0.25rem;
        }
        .info-value {
            font-size: 1.1rem;
            margin-bottom: 0;
        }
        .info-detail {
            font-size: 0.9rem;
            margin-bottom: 0;
        }
        .info-card {
            transition: all 0.3s ease;
            height: 100%;
        }
        .info-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .divider {
            background: linear-gradient(90deg, rgba(0,0,0,0) 0%, #0d6efd 50%, rgba(0,0,0,0) 100%);
        }
    </style>
</x-app-layout>