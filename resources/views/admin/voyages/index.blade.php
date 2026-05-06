@extends('admin.Layout.app')
@section('title', 'Liste des Voyages')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion des Voyages</h1>
        <a href="{{ route('voyages.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-circle me-2"></i> Ajouter un voyage
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3">#</th>
                            <th class="py-3">Itinéraire</th>
                            <th class="py-3">Autocar</th>
                            <th class="py-3">Type</th>
                            <th class="py-3">Départ</th>
                            <th class="py-3">Arrivée</th>
                            <th class="py-3">Prix</th>
                            <th class="pe-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($voyages as $voyage)
                            <tr>
                                <td class="ps-4 text-muted fw-medium">{{ $voyage->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="fw-bold text-dark">{{ $voyage->villeDepart->ville }}</span>
                                        <i class="bi bi-arrow-right mx-2 text-primary"></i>
                                        <span class="fw-bold text-dark">{{ $voyage->villeArrivee->ville }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-bus-front me-2 text-muted"></i>
                                        <span>{{ $voyage->autocar->matricule }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 rounded-pill">
                                        {{ $voyage->typeVoyage->type_voyage }}
                                    </span>
                                </td>
                                <td>
                                    <div class="fs-14">
                                        <div class="fw-medium text-dark">{{ $voyage->date_depart }}</div>
                                        <div class="text-muted small">{{ $voyage->heure_depart }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fs-14">
                                        <div class="fw-medium text-dark">{{ $voyage->date_arrivee }}</div>
                                        <div class="text-muted small">{{ $voyage->heure_arrivee }}</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="fw-bold text-success">{{ number_format($voyage->prix, 2) }} DH</span>
                                </td>
                                <td class="pe-4 text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="{{ route('voyages.edit', $voyage->id) }}" class="btn btn-sm btn-light border text-warning rounded-circle p-2" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('voyages.destroy', $voyage->id) }}" onsubmit="confirmDelete(event, this)" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-light border text-danger rounded-circle p-2" title="Supprimer">
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
                {{ $voyages->links() }}
            </div>
        </div>
    </div>
</div>

<style>
    .bg-primary-subtle { background-color: #cfe2ff; }
    .text-primary { color: #084298; }
    .border-primary-subtle { border-color: #b6d4fe; }
    .fs-14 { font-size: 0.875rem; }
    .table thead th {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 700;
        color: #555;
    }
    .btn-light:hover {
        background-color: #f8f9fa;
        transform: scale(1.1);
    }
</style>
@endsection
