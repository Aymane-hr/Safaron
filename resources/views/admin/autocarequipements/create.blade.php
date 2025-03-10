@extends('admin.Layout.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center fw-bold">Ajouter un Équipement à un Autocar</h3>
                    </div>
                    <div class="card-body p-5">

                        <!-- Display Flash Messages for Success/Error -->
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle-fill me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Form to Add Equipment to Autocar -->
                        <form action="{{ route('autocarequipements.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="autocar_id" class="form-label fw-bold">Autocar:</label>
                                <select name="autocar_id" id="autocar_id" class="form-select form-select-lg @error('autocar_id') is-invalid @enderror" required>
                                    <option value="">Choisissez un Autocar</option>
                                    @foreach ($autocars as $autocar)
                                        <option value="{{ $autocar->id }}">{{ $autocar->matricule }}</option>
                                    @endforeach
                                </select>
                                @error('autocar_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="equipement_id" class="form-label fw-bold">Équipement:</label>
                                <select name="equipement_id" id="equipement_id" class="form-select form-select-lg @error('equipement_id') is-invalid @enderror" required>
                                    <option value="">Choisissez un Équipement</option>
                                    @foreach ($equipements as $equipement)
                                        <option value="{{ $equipement->id }}">{{ $equipement->equipement }}</option>
                                    @endforeach
                                </select>
                                @error('equipement_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg shadow-sm">
                                    <i class="bi bi-check-circle me-2"></i> Enregistrer
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
