@extends('admin.Layout.app')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card border-0 rounded-lg shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0 text-center fw-bold">
                            <i class="bi bi-pencil-fill me-2"></i>Modifier un Équipement pour un Autocar
                        </h3>
                    </div>
                    <div class="card-body p-4">

                        <!-- Edit Form -->
                        <form action="{{ route('autocaroptions.update', $autocaroption->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- Autocar Select -->
                            <div class="mb-4">
                                <label for="autocar_id" class="form-label fw-bold text-primary">
                                    <i class="bi bi-bus-front-fill me-2"></i>Autocar:
                                </label>
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
                            <div class="mb-4">
                                <label for="option_id" class="form-label fw-bold text-primary">
                                    <i class="bi bi-gear-fill me-2"></i>Équipement:
                                </label>
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
                                <button type="submit" class="btn btn-success px-4 py-2 rounded-lg">
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
