@extends('admin.Layout.app')

@section('title', 'Liste des Options')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Configuration des Options</h1>
        <a href="{{ route('options.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-plus-circle me-2"></i> Ajouter une Option
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden" style="max-width: 800px; margin: auto;">
        <div class="card-body p-0">
            @if($options->isEmpty())
                <div class="text-center py-5">
                    <i class="bi bi-info-circle text-muted fs-1"></i>
                    <p class="text-muted mt-3">Aucune option disponible. Ajoutez-en une maintenant !</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4 py-3" style="width: 15%">#</th>
                                <th class="py-3">Nom de l'Option</th>
                                <th class="pe-4 py-3 text-center" style="width: 25%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($options as $option)
                                <tr>
                                    <td class="ps-4 text-muted fw-medium">#{{ ($options->currentPage() - 1) * $options->perPage() + $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3 text-warning">
                                                <i class="bi bi-gear"></i>
                                            </div>
                                            <span class="fw-bold text-dark">{{ $option->option }}</span>
                                        </div>
                                    </td>
                                    <td class="pe-4 text-center">
                                        <div class="d-flex justify-content-center gap-3">
                                            <a href="{{ route('options.edit', $option->id) }}" class="btn btn-sm btn-light border text-warning rounded-pill px-3 shadow-sm hover-lift" title="Modifier">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('options.destroy', $option->id) }}" method="POST" class="d-inline" onsubmit="confirmDelete(event, this)">
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
        @if(!$options->isEmpty())
        <div class="card-footer bg-white border-top-0 py-3">
            <div class="d-flex justify-content-center">
                {{ $options->links() }}
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
