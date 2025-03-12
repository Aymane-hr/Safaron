@extends('admin.Layout.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4 text-center text-primary fw-bold">📌 Liste des Équipements des Autocars</h1>

        <!-- Button to Add Equipment -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('autocarequipements.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Associer un Équipement à un Autocar
            </a>
        </div>

        <!-- Equipment Table -->
        <div class="card rounded shadow-sm">
            <div class="card-body">

                @if ($autocarequipements->isEmpty())
                    <!-- Message when table is empty -->
                    <div class="alert alert-info text-center py-4" role="alert">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Aucun équipement associé trouvé. Ajoutez un nouvel équipement maintenant !
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th> <!-- Order Number -->
                                    <th>Autocar</th>
                                    <th>Équipement</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($autocarequipements as $autocar_equipement)
                                    <tr>
                                        <td>{{ ($autocarequipements->currentPage() - 1) * $autocarequipements->perPage() + $loop->iteration }}</td>
                                        <td>{{ $autocar_equipement->autocar->matricule }}</td>
                                        <td>{{ $autocar_equipement->equipement->equipement }}</td>
                                        <td class="d-flex justify-content-center">
                                            <!-- Edit Button -->
                                            <a href="{{ route('autocarequipements.edit', $autocar_equipement->id) }}" class="btn btn-warning btn-sm me-2">
                                                <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <!-- Delete Button with Confirmation -->
                                            <form action="{{ route('autocarequipements.destroy', $autocar_equipement->id) }}" method="POST" class="delete-form" onsubmit="confirmDelete(event, this)">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $autocarequipements->links('pagination::bootstrap-5') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
