@extends('admin.Layout.app')

@section('title', 'Liste des Villes')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion des Villes</h1>
        <a href="{{ route('villes.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-circle me-2"></i> Ajouter une ville
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" id="alert-message" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3" style="width: 10%"># ID</th>
                            <th class="py-3">Nom de la Ville</th>
                            <th class="pe-4 py-3 text-center" style="width: 25%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($villes as $ville)
                            <tr>
                                <td class="ps-4 text-muted fw-medium">{{ $ville->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3 text-primary">
                                            <i class="bi bi-geo-alt"></i>
                                        </div>
                                        <span class="fw-bold text-dark fs-5">{{ $ville->ville }}</span>
                                    </div>
                                </td>
                                <td class="pe-4 text-center">
                                    <div class="d-flex justify-content-center gap-3">
                                        <a href="{{ route('villes.edit', $ville->id) }}" class="btn btn-sm btn-light border text-warning rounded-pill px-3 shadow-sm hover-lift" title="Modifier">
                                            <i class="bi bi-pencil me-1"></i> Modifier
                                        </a>
                                        <form action="{{ route('villes.destroy', $ville->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-light border text-danger rounded-pill px-3 shadow-sm hover-lift" title="Supprimer" 
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette ville ?')">
                                                <i class="bi bi-trash me-1"></i> Supprimer
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let alertDiv = document.getElementById("alert-message");
        if (alertDiv) {
            setTimeout(function () {
                let bsAlert = new bootstrap.Alert(alertDiv);
                bsAlert.close();
            }, 3000); 
        }
    });
</script>
@endsection
