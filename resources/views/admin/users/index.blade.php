@extends('admin.Layout.app')

@section('title', 'Gestion des Utilisateurs')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion des Utilisateurs</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm border-0 mb-4" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4 py-3">Utilisateur</th>
                            <th class="py-3">Email</th>
                            <th class="py-3">Rôle</th>
                            <th class="py-3">Inscrit le</th>
                            <th class="py-3 text-center">Réservations</th>
                            <th class="pe-4 py-3 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle overflow-hidden border shadow-sm me-3" style="width: 40px; height: 40px;">
                                            <img src="{{ $user->profile_image_path }}" alt="User" class="w-100 h-100 object-fit-cover">
                                        </div>
                                        <div>
                                            <div class="fw-bold text-dark">{{ $user->name }}</div>
                                            <div class="text-muted small">ID: #{{ $user->id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-dark">{{ $user->email }}</div>
                                </td>
                                <td>
                                    @if($user->isadmin)
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 rounded-pill">
                                            Administrateur
                                        </span>
                                    @else
                                        <span class="badge bg-light text-muted border px-3 rounded-pill">
                                            Client
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <div class="text-muted small">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $user->created_at->format('d M Y') }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="fw-bold">{{ $user->reservations->count() }}</span>
                                </td>
                                <td class="pe-4 text-center">
                                    @if(!$user->isadmin)
                                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ? Cette action est irréversible.')" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-light border text-danger rounded-circle p-2 hover-lift" title="Supprimer l'utilisateur">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    @else
                                        <button class="btn btn-sm btn-light border text-muted rounded-circle p-2 opacity-50" title="Les administrateurs ne peuvent pas être supprimés" disabled>
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white border-top-0 py-3">
            <div class="d-flex justify-content-center">
                {{ $users->links() }}
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
    .bg-primary-subtle { background-color: #cfe2ff; }
    .border-primary-subtle { border-color: #b6d4fe; }
</style>
@endsection
