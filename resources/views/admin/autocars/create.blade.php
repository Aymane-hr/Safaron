@extends('admin.Layout.app')
@section('title', 'Ajouter Autocar') <!-- Define the title section -->

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Ajouter Autocar</h1>
    @php $societes=App\models\Societe::all();
        @endphp
    <form action="{{ route('autocars.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf

        <!-- Société  -->
        <div class="mb-3">
            <label for="societe_id" class="form-label fw-bold">Société:</label>
            <select name="societe_id" id="societe_id" class="form-select" required>
                @foreach($societes as $societe)
                    <option value="{{ $societe->id }}">
                        {{ $societe->raison_social }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Number of Seats -->
        <div class="mb-3">
            <label for="nbr_siege" class="form-label fw-bold">Nombre de sièges:</label>
            <input
                type="number"
                class="form-control"
                name="nbr_siege"
                id="nbr_siege"
                required>
                <small class="text-danger">
                    @error('nbr_siege')
                        {{ $message }}
                    @enderror
                </small>
        </div>

        <!-- Image Upload -->
        <div class="mb-3">
            <label for="image" class="form-label fw-bold">Image:</label>
            <input
                type="file"
                class="form-control"
                name="image"
                id="image">
                <small class="text-danger">
                    @error('image')
                        {{ $message }}
                    @enderror
                </small>
        </div>

        <!-- Matricule -->
        <div class="mb-3">
            <label for="matricule" class="form-label fw-bold">Matricule:</label>
            <input
                type="text"
                class="form-control"
                name="matricule"
                id="matricule"
                required>
                <small class="text-danger">
                    @error('matricule')
                        {{ $message }}
                    @enderror
                </small>
        </div>

        <!-- Submit Button -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Ajouter
            </button>
        </div>
    </form>
</div>
@endsection
