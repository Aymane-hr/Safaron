@extends('admin.Layout.app')

@section('title', 'Liste des Équipements')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion des Équipements</h1>
        <a href="{{ route('equipements.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-circle me-2"></i> Ajouter un Équipement
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden" style="max-width: 800px; margin: auto;">
        <div class="card-body p-0">
            @if($equipements->isEmpty())
                <div class="text-center py-5">
                    <i class="bi bi-tools text-muted fs-1"></i>
                    <p class="text-muted mt-3">Aucun équipement trouvé. Ajoutez-en un maintenant !</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4 py-3" style="width: 15%">#</th>
                                <th class="py-3">Nom de l'Équipement</th>
                                <th class="pe-4 py-3 text-center" style="width: 25%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($equipements as $equipement)
                                <tr>
                                    <td class="ps-4 text-muted fw-medium">#{{ ($equipements->currentPage() - 1) * $equipements->perPage() + $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3 text-primary">
                                                <i class="bi bi-briefcase"></i>
                                            </div>
                                            <span class="fw-bold text-dark">{{ $equipement->equipement }}</span>
                                        </div>
                                    </td>
                                    <td class="pe-4 text-center">
                                        <div class="d-flex justify-content-center gap-3">
                                            <a href="{{ route('equipements.edit', $equipement->id) }}" class="btn btn-sm btn-light border text-warning rounded-pill px-3 shadow-sm hover-lift" title="Modifier">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('equipements.destroy', $equipement->id) }}" method="POST" class="d-inline" onsubmit="confirmDelete(event, this)">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-light border text-danger rounded-pill px-3 shadow-sm hover-lift" title="Supprimer">
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
            @endif
        </div>
        @if(!$equipements->isEmpty())
        <div class="card-footer bg-white border-top-0 py-3">
            <div class="d-flex justify-content-center">
                {{ $equipements->links() }}
            </div>
        </div>
        @endif
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
        transform: translateY(-2px);
        background-color: #f8f9fa;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1) !important;
    }
</style>
@endsection
