@extends('admin.Layout.app')

@section('title', 'Modifier Équipement')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-warning text-white">
                    <h3 class="mb-0 text-center fw-bold">Modifier l'Équipement</h3>
                </div>
                <div class="card-body p-4">

                    <!-- Form to Edit Equipment -->
                    <form method="POST" action="{{ route('equipements.update', $equipement->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Nom de l'équipement -->
                        <div class="mb-4">
                            <label for="equipement" class="form-label fw-bold">Nom de l'équipement:</label>
                            <input
                                type="text"
                                class="form-control form-control-lg @error('equipement') is-invalid @enderror"
                                name="equipement"
                                id="equipement"
                                value="{{ old('equipement', $equipement->equipement) }}"
                                required
                                placeholder="Entrez le nom de l'équipement">

                            @error('equipement')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Boutons -->
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ route('equipements.index') }}" class="btn btn-secondary btn-lg">
                                <i class="bi bi-arrow-left me-2"></i> Retour
                            </a>
                            <button type="submit" class="btn btn-warning btn-lg">
                                <i class="bi bi-pencil-square me-2"></i> Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
