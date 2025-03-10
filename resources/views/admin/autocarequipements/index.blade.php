@extends('admin.Layout.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-primary fw-bold">📌 Liste des Équipements des Autocars</h1>

        <!-- Display Flash Messages for Success/Error -->
        @if(session('success'))
            <script>
                window.onload = function() {
                    showToast('success', '{{ session("success") }}');
                };
            </script>
        @endif

        @if(session('error'))
            <script>
                window.onload = function() {
                    showToast('error', '{{ session("error") }}');
                };
            </script>
        @endif

        <!-- Button to Add Equipment -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('autocarequipements.create') }}" class="btn btn-success shadow-sm">
                <i class="bi bi-plus-circle"></i> Associer un Équipement à un Autocar
            </a>
        </div>

        <!-- Equipment Table -->
        <div class="card shadow-lg rounded">
            <div class="card-body">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Autocar</th>
                            <th>Équipement</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($autocarequipements as $autocar_equipement)
                            <tr>
                                <td>{{ $autocar_equipement->autocar->matricule }}</td>
                                <td>{{ $autocar_equipement->equipement->equipement }}</td>
                                <td class="d-flex justify-content-center">
                                    <!-- Edit Button -->
                                    <a href="{{ route('autocarequipements.edit', $autocar_equipement->id) }}" class="btn btn-warning btn-sm me-2 shadow-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!-- Delete Button with Confirmation -->
                                    <form action="{{ route('autocarequipements.destroy', $autocar_equipement->id) }}" method="POST" class="delete-form" onsubmit="confirmDelete(event, this)">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm shadow-sm"  >
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
