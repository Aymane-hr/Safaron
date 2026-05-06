@extends('admin.Layout.app')

@section('title', 'Modes de Règlement')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Configuration des Paiements</h1>
        <a href="{{ route('modeReglements.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-circle me-2"></i> Ajouter un Mode
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden" style="max-width: 800px; margin: auto;">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3" style="width: 15%">ID</th>
                            <th class="py-3">Mode de Règlement</th>
                            <th class="pe-4 py-3 text-center" style="width: 30%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modes as $mode)
                            <tr>
                                <td class="ps-4 text-muted fw-medium">#{{ $mode->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3 text-success">
                                            <i class="bi bi-credit-card"></i>
                                        </div>
                                        <span class="fw-bold text-dark">{{ $mode->mode_reglement }}</span>
                                    </div>
                                </td>
                                <td class="pe-4 text-center">
                                    <div class="d-flex justify-content-center gap-3">
                                        <a href="{{ route('modeReglements.edit', $mode->id) }}" class="btn btn-sm btn-light border text-warning rounded-pill px-3 shadow-sm hover-lift" title="Modifier">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('modeReglements.destroy', $mode->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce mode de règlement ?')">
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
        transform: translateY(-2px);
        background-color: #f8f9fa;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1) !important;
    }
</style>
@endsection
