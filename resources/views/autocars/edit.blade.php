@extends('admin.Layout.app')
@section('title', 'Modifier Autocar') <!-- Define the title section -->

@section('content')
    <div class="container mt-5">
        @php
        $societes = App\Models\Societe::all();
        @endphp

        <h1 class="mb-4">Modifier Autocar</h1>


        <form action="{{ route('autocars.update', $autocar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Société Dropdown -->
            <div class="mb-3">
                <label for="societe_id" class="form-label">Société:</label>
                <select name="societe_id" id="societe_id" class="form-control" required>
                    @foreach ($societes as $societe)
                        <option value="{{ $societe->id }}" {{ $societe->id == $autocar->societe_id ? 'selected' : '' }}>
                            {{ $societe->raison_social }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Number of Seats -->
            <div class="mb-3">
                <label for="nbr_siege" class="form-label">Nombre de sièges:</label>
                <input type="number" class="form-control" name="nbr_siege" id="nbr_siege"
                    value="{{ old('nbr_siege', $autocar->nbr_siege) }}" required>
            </div>

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" name="image" id="image">
                @if ($autocar->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $autocar->image) }}" alt="Autocar Image" width="100">
                    </div>
                @endif
            </div>

            <!-- Matricule -->
            <div class="mb-3">
                <label for="matricule" class="form-label">Matricule:</label>
                <input type="text" class="form-control" name="matricule" id="matricule"
                    value="{{ old('matricule', $autocar->matricule) }}" required>
            </div>

            <!-- Submit and Cancel Buttons -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-2">
                <i class="bi bi-save"></i> Enregistrer
            </button>
            <a href="{{ route('societes.index') }}" class="btn btn-secondary">
                Annuler
            </a>
        </div>
        </form>
    </div>
@endsection
