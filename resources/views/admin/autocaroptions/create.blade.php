@extends('admin.Layout.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
            <div class="card border-0 rounded-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0 fw-bold">➕ Ajouter une Option à un Autocar</h3>
                </div>
                <div class="card-body p-4">
                    <!-- Form to Add Option to Autocar -->
                    <form action="{{ route('autocaroptions.store') }}" method="POST">
                        @csrf

                        <!-- Autocar Select -->
                        <div class="mb-4">
                            <label for="autocar_id" class="form-label fw-bold">🚍 Autocar</label>
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

                        <!-- Option Select -->
                        <div class="mb-4">
                            <label for="option_id" class="form-label fw-bold">⚙️ Option</label>
                            <select name="option_id" id="option_id" class="form-select form-select-lg @error('option_id') is-invalid @enderror" required>
                                <option value="">Choisissez une Option</option>
                                @foreach ($options as $index => $option)
                                    <option value="{{ $option->id }}">{{ $index + 1 }}. {{ $option->option }}</option>
                                @endforeach
                            </select>
                            @error('option_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
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
