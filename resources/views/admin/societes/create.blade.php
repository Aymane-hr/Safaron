@extends('admin.Layout.app')
@section('title', 'Ajouter nouvelle Societe') <!-- Define the title section -->

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Ajouter nouvelle Societe</h1>
    <form action="{{ route('societes.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf

        <!-- Raison Social -->
        <div class="mb-3">
            <label for="raison_social" class="form-label fw-bold">Raison Social:</label>
            <input
                type="text"
                name="raison_social"
                id="raison_social"
                class="form-control">
            <small class="text-danger">
                @error('raison_social')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Adresse -->
        <div class="mb-3">
            <label for="adresse" class="form-label fw-bold">Adresse:</label>
            <input
                type="text"
                name="adresse"
                id="adresse"
                class="form-control">
            <small class="text-danger">
                @error('adresse')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Ville -->
        <div class="mb-3">
            <label for="ville" class="form-label fw-bold">Ville:</label>
            <input
                type="text"
                name="ville"
                id="ville"
                class="form-control">
            <small class="text-danger">
                @error('ville')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Tel -->
        <div class="mb-3">
            <label for="tel" class="form-label fw-bold">Tel:</label>
            <input
                type="text"
                name="tel"
                id="tel"
                class="form-control">
            <small class="text-danger">
                @error('tel')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Nom Contact -->
        <div class="mb-3">
            <label for="nom_contact" class="form-label fw-bold">Nom Contact:</label>
            <input
                type="text"
                name="nom_contact"
                id="nom_contact"
                class="form-control">
            <small class="text-danger">
                @error('nom_contact')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email:</label>
            <input
                type="email"
                name="email"
                id="email"
                class="form-control">
            <small class="text-danger">
                @error('email')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- ICE -->
        <div class="mb-3">
            <label for="ice" class="form-label fw-bold">ICE:</label>
            <input
                type="text"
                name="ice"
                id="ice"
                class="form-control">
            <small class="text-danger">
                @error('ice')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Logo -->
        <div class="mb-3">
            <label for="logo" class="form-label fw-bold">Logo:</label>
            <input
                type="file"
                name="logo"
                id="logo"
                class="form-control">
            <small class="text-danger">
                @error('logo')
                    {{ $message }}
                @enderror
            </small>
        </div>

        <!-- Submit and Cancel Buttons -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-2">
                <i class="bi bi-plus-circle"></i> Créer
            </button>
            <a href="{{ route('societes.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>
    </form>
</div>
@endsection
