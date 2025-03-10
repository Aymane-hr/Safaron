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
        <form action="{{ route('autocaroptions.update', $autocaroption->id) }}" method="POST">
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
                                <option value="{{ $autocar->id }}" {{ $autocar->id == $autocaroption->autocar_id ? 'selected' : '' }}>
                                    {{ $autocar->matricule }}
                                </option>
                            @endforeach
                        </select>
                        @error('autocar_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Option Select -->
                    <div class="form-group mb-3">
                        <label for="option_id" class="form-label fw-bold">Équipement:</label>
                        <select name="option_id" id="option_id" class="form-select @error('option_id') is-invalid @enderror" required>
                            <option value="">Choisissez un Équipement</option>
                            @foreach ($options as $option)
                                <option value="{{ $option->id }}" {{ $option->id == $autocaroption->option_id ? 'selected' : '' }}>
                                    {{ $option->option }}
                                </option>
                            @endforeach
                        </select>
                        @error('option_id')
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
