@extends('admin.Layout.app')

@section('title', 'Options des Autocars')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Associations Options</h1>
        <a href="{{ route('autocaroptions.create') }}" class="btn btn-primary shadow-sm rounded-pill px-4">
            <i class="bi bi-link-45deg me-2"></i> Associer une Option
        </a>
    </div>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            @if($autocaroptions->isEmpty())
                <div class="text-center py-5">
                    <i class="bi bi-gear text-muted fs-1"></i>
                    <p class="text-muted mt-3">Aucune association trouvée. Commencez par en créer une !</p>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4 py-3" style="width: 10%">#</th>
                                <th class="py-3">Autocar (Matricule)</th>
                                <th class="py-3">Option</th>
                                <th class="pe-4 py-3 text-center" style="width: 20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($autocaroptions as $item)
                                <tr>
                                    <td class="ps-4 text-muted fw-medium">#{{ ($autocaroptions->currentPage() - 1) * $autocaroptions->perPage() + $loop->iteration }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="rounded bg-dark bg-opacity-10 p-2 me-3 text-dark">
                                                <i class="bi bi-bus-front"></i>
                                            </div>
                                            <span class="fw-bold text-dark">{{ $item->autocar->matricule }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning-subtle text-dark border border-warning-subtle px-3 rounded-pill fw-medium">
                                            {{ $item->option->option }}
                                        </span>
                                    </td>
                                    <td class="pe-4 text-center">
                                        <div class="d-flex justify-content-center gap-3">
                                            <a href="{{ route('autocaroptions.edit', $item->id) }}" class="btn btn-sm btn-light border text-warning rounded-pill px-3 shadow-sm hover-lift" title="Modifier">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('autocaroptions.destroy', $item->id) }}" method="POST" onsubmit="confirmDelete(event, this)" class="d-inline">
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
        @if(!$autocaroptions->isEmpty())
        <div class="card-footer bg-white border-top-0 py-3">
            <div class="d-flex justify-content-center">
                {{ $autocaroptions->links() }}
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
    .bg-warning-subtle { background-color: #fff3cd; }
    .border-warning-subtle { border-color: #ffecb5; }
</style>
@endsection
