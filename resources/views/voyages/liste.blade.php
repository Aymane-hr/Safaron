@extends('client.voyages.index')

@section('content')
<div class="container">
    <h2 class="mb-4">Rechercher un voyage</h2>
    <form action="{{ route('voyages.index') }}" method="GET">
        <div class="row">
            <div class="col-md-3">
                <label>Date de départ :</label>
                <input type="date" name="date_depart" class="form-control" value="{{ request('date_depart') }}">
            </div>
            <div class="col-md-3">
                <label>Date d'arrivée :</label>
                <input type="date" name="date_arrivee" class="form-control" value="{{ request('date_arrivee') }}">
            </div>
            <div class="col-md-3">
                <label>Ville de départ :</label>
                <select name="ville_depart_id" class="form-control">
                    <option value="">Toutes</option>
                    @foreach($villes as $ville)
                        <option value="{{ $ville->id }}" {{ request('ville_depart_id') == $ville->id ? 'selected' : '' }}>{{ $ville->ville }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label>Ville d'arrivée :</label>
                <select name="ville_arrivee_id" class="form-control">
                    <option value="">Toutes</option>
                    @foreach($villes as $ville)
                        <option value="{{ $ville->id }}" {{ request('ville_arrivee_id') == $ville->id ? 'selected' : '' }}>{{ $ville->ville }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Type de voyage :</label>
                <select name="type_voyage_id" class="form-control">
                    <option value="">Tous</option>
                    @foreach($typesVoyage as $type)
                        <option value="{{ $type->id }}" {{ request('type_voyage_id') == $type->id ? 'selected' : '' }}>{{ $type->type_voyage }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label>Raison sociale :</label>
                <select name="societe_id" class="form-control">
                    <option value="">Toutes</option>
                    @foreach($societes as $societe)
                        <option value="{{ $societe->id }}" {{ request('societe_id') == $societe->id ? 'selected' : '' }}>{{ $societe->raison_social }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <label>&nbsp;</label>
                <button type="submit" class="btn btn-primary btn-block">Rechercher</button>
            </div>
        </div>
    </form>

    <h3 class="mt-4">Liste des voyages</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Trajet</th>
                <th>Départ</th>
                <th>Arrivée</th>
                <th>Type</th>
                <th>Prix</th>
                <th>Raison Sociale</th>
                <th>Durée</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voyages as $voyage)
                <tr>
                    <td><img src="{{ asset($voyage->autocar->image) }}" width="100"></td>
                    <td>{{ $voyage->villeDepart->ville }} → {{ $voyage->villeArrivee->ville }}</td>
                    <td>{{ $voyage->date_depart }} à {{ $voyage->heure_depart }}</td>
                    <td>{{ $voyage->date_arrivee }} à {{ $voyage->heure_arrivee }}</td>
                    <td>{{ $voyage->typeVoyage->type_voyage }}</td>
                    <td>{{ $voyage->prix }} MAD</td>
                    <td>{{ $voyage->autocar->societe->raison_social }}</td>
                    <td>
                        @php
                            $depart = \Carbon\Carbon::parse($voyage->date_depart . ' ' . $voyage->heure_depart);
                            $arrivee = \Carbon\Carbon::parse($voyage->date_arrivee . ' ' . $voyage->heure_arrivee);
                            $duree = $depart->diff($arrivee);
                        @endphp
                        {{ $duree->h }}h {{ $duree->i }}min
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
