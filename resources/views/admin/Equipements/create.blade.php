@extends('admin.Layout.app')

@section('title', 'Ajouter Équipement')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center text-primary">Ajouter un équipement</h1>

    <form method="POST" action="{{ route('equipements.store') }}" class="bg-white p-4 rounded-3 shadow-sm">
        @csrf

        <!-- Nom de l'équipement -->
        <div class="mb-4">
            <label for="equipement" class="form-label fw-semibold">Nom de l'équipement</label>
            <input
                type="text"
                class="form-control form-control-lg @error('equipement') is-invalid @enderror"
                name="equipement"
                id="equipement"
                value="{{ old('equipement') }}"
                required
                placeholder="Nom de l'équipement">

            @error('equipement')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Action Buttons -->
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('equipements.index') }}" class="btn btn-outline-secondary btn-lg">
                <i class="bi bi-arrow-left me-2"></i> Retour
            </a>
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="bi bi-plus-circle me-2"></i> Ajouter
            </button>
        </div>
    </form>
</div>
@endsection
