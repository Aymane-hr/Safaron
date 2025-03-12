@extends('admin.Layout.app')
@section('title', 'Ajouter Voyage')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Ajouter Voyage</h1>

    @php
        $villes = App\Models\Ville::all();
        $autocars = App\Models\Autocar::all();
        $types_voyage = App\Models\TypeVoyage::all();
    @endphp

    <form action="{{ route('voyages.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf

        <!-- Ville de départ -->
        <div class="mb-3">
            <label for="ville_depart_id" class="form-label fw-bold">Ville de départ:</label>
            <select name="ville_depart_id" id="ville_depart_id" class="form-select" required>
                @foreach($villes as $ville)
                    <option value="{{ $ville->id }}">
                        {{ $ville->ville }} <!-- Assurez-vous d'utiliser le champ approprié -->
                    </option>
                @endforeach
            </select>
            <small class="text-danger">
                @error('ville_depart_id')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Ville d'arrivée -->
        <div class="mb-3">
            <label for="ville_arrivee_id" class="form-label fw-bold">Ville d'arrivée:</label>
            <select name="ville_arrivee_id" id="ville_arrivee_id" class="form-select" required>
                @foreach($villes as $ville)
                    <option value="{{ $ville->id }}">
                        {{ $ville->ville }} 
                    </option>
                @endforeach
            </select>
            <small class="text-danger">
                @error('ville_arrivee_id')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Autocar -->
        <div class="mb-3">
            <label for="autocar_id" class="form-label fw-bold">Autocar:</label>
            <select name="autocar_id" id="autocar_id" class="form-select" required>
                @foreach($autocars as $autocar)
                    <option value="{{ $autocar->id }}">
                        {{ $autocar->matricule }}  
                    </option>
                @endforeach
            </select>
            <small class="text-danger">
                @error('autocar_id')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Type de voyage -->
        <div class="mb-3">
            <label for="type_voyage_id" class="form-label fw-bold">Type de voyage:</label>
            <select name="type_voyage_id" id="type_voyage_id" class="form-select" required>
                @foreach($types_voyage as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->type_voyage }} 
                    </option>
                @endforeach
            </select>
            <small class="text-danger">
                @error('type_voyage_id')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Date de départ -->
        <div class="mb-3">
            <label for="date_depart" class="form-label fw-bold">Date de départ:</label>
            <input
                type="date"
                class="form-control"
                name="date_depart"
                id="date_depart"
                required>
            <small class="text-danger">
                @error('date_depart')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Date d'arrivée -->
        <div class="mb-3">
            <label for="date_arrivee" class="form-label fw-bold">Date d'arrivée:</label>
            <input
                type="date"
                class="form-control"
                name="date_arrivee"
                id="date_arrivee"
                required>
            <small class="text-danger">
                @error('date_arrivee')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Heure de départ -->
        <div class="mb-3">
            <label for="heure_depart" class="form-label fw-bold">Heure de départ:</label>
            <input
                type="time"
                class="form-control"
                name="heure_depart"
                id="heure_depart"
                required>
            <small class="text-danger">
                @error('heure_depart')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Heure d'arrivée -->
        <div class="mb-3">
            <label for="heure_arrivee" class="form-label fw-bold">Heure d'arrivée:</label>
            <input
                type="time"
                class="form-control"
                name="heure_arrivee"
                id="heure_arrivee"
                required>
            <small class="text-danger">
                @error('heure_arrivee')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Prix -->
        <div class="mb-3">
            <label for="prix" class="form-label fw-bold">Prix:</label>
            <input
                type="number"
                class="form-control"
                name="prix"
                id="prix"
                required>
            <small class="text-danger">
                @error('prix')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Submit Button -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Ajouter
            </button>
        </div>
    </form>
</div>
@endsection
