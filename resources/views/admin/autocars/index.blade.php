@extends('admin.Layout.app')

@section('title', 'Liste des Autocars')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion de la Flotte</h1>
        <a href="{{ route('autocars.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-circle me-2"></i> Ajouter un Autocar
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3"># ID</th>
                            <th class="py-3">Image</th>
                            <th class="py-3">Société</th>
                            <th class="py-3">Matricule</th>
                            <th class="py-3 text-center">Capacité</th>
                            <th class="pe-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($autocars as $autocar)
                            <tr>
                                <td class="ps-4 text-muted fw-medium">{{ $autocar->id }}</td>
                                <td>
                                    <div class="rounded-3 overflow-hidden shadow-sm" style="width: 60px; height: 45px;">
                                        <img src="{{ asset('storage/' . $autocar->image) }}" alt="Autocar" class="w-100 h-100 object-fit-cover">
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-bold text-dark">{{ $autocar->societe->raison_social }}</span>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border font-monospace px-3">
                                        {{ $autocar->matricule }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="d-inline-flex align-items-center justify-content-center bg-info bg-opacity-10 text-info rounded-pill px-3 py-1">
                                        <i class="bi bi-person-workspace me-2"></i>
                                        <span class="fw-bold">{{ $autocar->nbr_siege }} sièges</span>
                                    </div>
                                </td>
                                <td class="pe-4 text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('autocars.edit', $autocar->id) }}" class="btn btn-sm btn-light border text-warning rounded-circle p-2 hover-lift" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('autocars.destroy', $autocar->id) }}" method="POST" onsubmit="confirmDelete(event, this)" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-light border text-danger rounded-circle p-2 hover-lift" title="Supprimer">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0 py-3">
            <div class="d-flex justify-content-center">
                {{ $autocars->links() }}
            </div>
        </div>
    </div>
</div>

<style>
    .table thead th {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 700;
        color: #555;
    }
    .hover-lift:hover {
        transform: scale(1.1);
        background-color: #f8f9fa;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .object-fit-cover { object-fit: cover; }
</style>
@endsection
