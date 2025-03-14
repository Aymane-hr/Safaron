@extends('admin.Layout.app')

@section('title', 'Détails de la Réservation')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Détails de la Réservation</h4>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Date de la Réservation</dt>
                        <dd class="col-sm-8">{{ \Carbon\Carbon::parse($reservation->date_reservation)->format('d M Y') }}</dd>

                        <dt class="col-sm-4">Numéro de Siège</dt>
                        <dd class="col-sm-8">{{ $reservation->num_siege }}</dd>

                        <dt class="col-sm-4">Prix</dt>
                        <dd class="col-sm-8">{{ number_format($reservation->prix, 2) }} DH</dd>

                        <dt class="col-sm-4">Frais</dt>
                        <dd class="col-sm-8">{{ number_format($reservation->frais, 2) }} DH</dd>

                        <dt class="col-sm-4">Date de Départ</dt>
                        <dd class="col-sm-8">{{ \Carbon\Carbon::parse($reservation->date_depart)->format('d M Y') }}</dd>

                        <dt class="col-sm-4">Heure de Départ</dt>
                        <dd class="col-sm-8">{{ \Carbon\Carbon::parse($reservation->heure_depart)->format('H:i') }}</dd>

                        <dt class="col-sm-4">Date d'Arrivée</dt>
                        <dd class="col-sm-8">{{ \Carbon\Carbon::parse($reservation->date_arrivee)->format('d M Y') }}</dd>

                        <dt class="col-sm-4">Heure d'Arrivée</dt>
                        <dd class="col-sm-8">{{ \Carbon\Carbon::parse($reservation->heure_arrivee)->format('H:i') }}</dd>

                        <dt class="col-sm-4">Utilisateur</dt>
                        <dd class="col-sm-8">{{ $reservation->user->name }}</dd>

                        <dt class="col-sm-4">Ville de Départ</dt>
                        <dd class="col-sm-8">{{ $reservation->villeDepart->ville }}</dd>

                        <dt class="col-sm-4">Ville d'Arrivée</dt>
                        <dd class="col-sm-8">{{ $reservation->villeArrivee->ville }}</dd>

                        <dt class="col-sm-4">Mode de Règlement</dt>
                        <dd class="col-sm-8">{{ $reservation->modeReglement->mode_reglement }}</dd>

                        <dt class="col-sm-4">Société</dt>
                        <dd class="col-sm-8">{{ $reservation->voyage->autocar->societe->raison_social }}</dd>
                    </dl>

                    <a href="{{ route('reservation.admin.index') }}" class="btn btn-secondary mt-3">
                        <i class="bi bi-arrow-left-circle"></i> Retour aux Réservations
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

