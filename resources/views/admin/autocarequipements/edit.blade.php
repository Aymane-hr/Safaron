@extends('admin.Layout.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-primary fw-bold">Modifier un Équipement pour un Autocar</h1>

        <!-- Display Flash Messages for Success/Error -->
        <!-- @if(session('success'))
            <script>
                window.onload = function() {
                    showToast('success', '{{ session("success") }}');
                };
            </script>
        @endif -->

        <!-- @if(session('error')) -->
            <!-- <script>
                window.onload = function() {
                    showToast('error', '{{ session("error") }}');
                };
            </script>
        @endif -->

        <!-- Edit Form -->
        <form action="{{ route('autocarequipements.update', $autocarequipement->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card shadow-lg rounded border-0">
                <div class="card-body">
                    <!-- Autocar Select -->
                    <div class="form-group mb-3">
                        <label for="autocar_id" class="form-label fw-bold">Autocar:</label>
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
                    <div class="form-group mb-3">
                        <label for="equipement_id" class="form-label fw-bold">Équipement:</label>
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
                    <div class="d-flex justify-content-end mt-4">
                        <button type="submit" class="btn btn-success shadow-sm">
                            <i class="bi bi-check-circle"></i> Enregistrer
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>



@endsection
