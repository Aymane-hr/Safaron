@extends('admin.Layout.app')

@section('content')
    <div class="container py-5">
        <h1 class="mb-4 text-center text-primary fw-bold">Modifier un Équipement pour un Autocar</h1>

        <!-- Edit Form -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                <form action="{{ route('autocarequipements.update', $autocarequipement->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card border-0 rounded">
                        <div class="card-header bg-primary text-white text-center">
                            <h4 class="mb-0 fw-bold">🛠️ Modification</h4>
                        </div>
                        <div class="card-body p-4">
                            
                            <!-- Autocar Select -->
                            <div class="mb-3">
                                <label for="autocar_id" class="form-label fw-bold">🚍 Autocar:</label>
                                <select name="autocar_id" id="autocar_id" class="form-select @error('autocar_id') is-invalid @enderror" required>
                                    <option value="">Choisissez un Autocar</option>
                                    @foreach ($autocars as $autocar)
                                        <option value="{{ $autocar->id }}" {{ $autocar->id == $autocarequipement->autocar_id ? 'selected' : '' }}>
                                            {{ $autocar->matricule }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('autocar_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Equipement Select -->
                            <div class="mb-3">
                                <label for="equipement_id" class="form-label fw-bold">🔧 Équipement:</label>
                                <select name="equipement_id" id="equipement_id" class="form-select @error('equipement_id') is-invalid @enderror" required>
                                    <option value="">Choisissez un Équipement</option>
                                    @foreach ($equipements as $equipement)
                                        <option value="{{ $equipement->id }}" {{ $equipement->id == $autocarequipement->equipement_id ? 'selected' : '' }}>
                                            {{ $equipement->equipement }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('equipement_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="bi bi-check-circle me-2"></i> Enregistrer
                                </button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
