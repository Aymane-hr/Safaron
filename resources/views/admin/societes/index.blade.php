@extends('admin.Layout.app')

@section('title', 'Liste des Sociétés')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion des Partenaires</h1>
        <a href="{{ route('societes.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-circle me-2"></i> Ajouter une Société
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3">Logo</th>
                            <th class="py-3">Raison Sociale</th>
                            <th class="py-3">Contact</th>
                            <th class="py-3">Localisation</th>
                            <th class="py-3">Email & Tel</th>
                            <th class="py-3">ICE</th>
                            <th class="pe-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($societes as $societe)
                            <tr>
                                <td class="ps-4">
                                    <div class="rounded-circle overflow-hidden border shadow-sm" style="width: 50px; height: 50px;">
                                        <img src="{{ asset('storage/' . $societe->logo) }}" alt="Logo" class="w-100 h-100 object-fit-contain p-1">
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-bold text-dark">{{ $societe->raison_social }}</span>
                                </td>
                                <td>
                                    <div class="fw-medium">{{ $societe->nom_contact }}</div>
                                </td>
                                <td>
                                    <div class="small">
                                        <div class="fw-medium text-dark">{{ $societe->ville }}</div>
                                        <div class="text-muted text-truncate" style="max-width: 150px;">{{ $societe->adresse }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small">
                                        <div class="text-primary fw-medium">{{ $societe->email }}</div>
                                        <div class="text-muted">{{ $societe->tel }}</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border font-monospace">{{ $societe->ice }}</span>
                                </td>
                                <td class="pe-4 text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('societes.edit', $societe->id) }}" class="btn btn-sm btn-light border text-warning rounded-circle p-2 hover-lift" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('societes.destroy', $societe->id) }}" method="POST" onsubmit="confirmDelete(event, this)" class="d-inline">
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
                {{ $societes->links() }}
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
    .object-fit-contain { object-fit: contain; }
</style>
@endsection
