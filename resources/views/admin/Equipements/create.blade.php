@extends('admin.Layout.app')
@section('title', 'Ajouter Equipement') <!-- Define the title section -->

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary">Ajouter un équipement</h1>

    <form method="POST" action="{{ route('equipements.store') }}" class="bg-white p-4 rounded shadow">
        @csrf

        <!-- Nom de l'équipement -->
        <div class="mb-3">
            <label for="equipement" class="form-label fw-bold">Nom de l'équipement:</label>
            <input type="text" class="form-control @error('equipement') is-invalid @enderror" name="equipement" id="equipement" required>
            @error('equipement')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Ajouter
            </button>
            <a href="{{ route('equipements.index') }}" class="btn btn-secondary ms-2">
                <i class="bi bi-arrow-left"></i> Retour
            </a>
        </div>
    </form>
</div>
@endsection
