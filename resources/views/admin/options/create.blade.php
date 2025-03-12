@extends('admin.Layout.app')

@section('title', 'Ajouter une nouvelle option')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center text-success fw-bold">📝 Ajouter une nouvelle option</h1>

    <form action="{{ route('options.store') }}" method="POST" class="bg-white p-4 rounded shadow-sm">
        @csrf

        <!-- Nom de l'option -->
        <div class="mb-3">
            <label for="option" class="form-label fw-bold">Nom de l'option</label>
            <input type="text" name="option" id="option" class="form-control @error('option') is-invalid @enderror" value="{{ old('option') }}" required>

            @error('option')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Boutons de contrôle -->
        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('options.index') }}" class="btn btn-outline-secondary shadow-sm">
                <i class="bi bi-arrow-left"></i> Annuler
            </a>
            <button type="submit" class="btn btn-success shadow-sm">
                <i class="bi bi-check-circle"></i> Ajouter
            </button>
        </div>
    </form>
</div>
@endsection
