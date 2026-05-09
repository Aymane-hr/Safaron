@extends('admin.Layout.app')

@section('title', 'Gestion Clients')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold text-dark mb-1">Gestion des Clients</h2>
            <p class="text-muted small mb-0">Gérez les comptes de vos clients.</p>
        </div>
    </div>

    <!-- Alert Messages -->
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm mb-4 fade show" role="alert">
            <div class="d-flex">
                <i class="bi bi-check-circle-fill me-3 fs-4"></i>
                <div>
                    <h6 class="alert-heading fw-bold mb-1">Succès !</h6>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Users Section -->
    <div>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-bold text-dark m-0">Liste des clients</h4>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white border-0 py-3">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="input-group" style="max-width: 350px;">
                            <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control bg-light border-0" placeholder="chercher par nom...">
                        </div>
                    </div>
                    <div class="col-auto d-flex gap-2">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary px-3 dropdown-toggle" data-bs-toggle="dropdown">
                                Colonnes
                            </button>
                            <ul class="dropdown-menu shadow-sm border-0">
                                <li><label class="dropdown-item"><input type="checkbox" checked> Id</label></li>
                                <li><label class="dropdown-item"><input type="checkbox" checked> Name</label></li>
                                <li><label class="dropdown-item"><input type="checkbox" checked> Email</label></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4">Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Is Verified</th>
                                <th>Role</th>
                                <th class="text-end pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="ps-4">{{ $user->id }}</td>
                                <td class="fw-bold text-dark">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->email_verified_at)
                                        <span class="badge bg-primary text-white rounded-pill px-3">Verified</span>
                                    @else
                                        <span class="badge bg-light text-muted border px-3">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <span class="badge bg-light text-dark border px-2">{{ $role->name }}</span>
                                    @endforeach
                                    @if($user->isadmin && $user->roles->isEmpty())
                                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2">admin</span>
                                    @endif
                                </td>
                                <td class="text-end pe-4">
                                    <div class="dropdown">
                                        <button class="btn btn-link text-dark p-0" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                                            <li><a class="dropdown-item" href="{{ route('admin.users.edit', $user->id) }}"><i class="bi bi-pencil me-2 text-primary"></i> Modifier</a></li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Supprimer cet utilisateur ?')">
                                                        <i class="bi bi-trash me-2"></i> Supprimer
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted small">{{ $users->count() }} sur {{ $users->total() }} ligne(s) sélectionnée(s).</span>
                    <div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-light { background-color: #f8f9fa !important; }
    .border-dashed { border-style: dashed !important; }
    .table thead th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.5px;
        color: #6c757d;
        border-bottom-width: 1px;
    }
    .badge { font-weight: 500; font-size: 0.75rem; }
    .bg-primary-subtle { background-color: #cfe2ff; }
    .border-primary-subtle { border-color: #b6d4fe; }
    .pagination { margin-bottom: 0; }
    .btn-outline-secondary:hover { background-color: #f8f9fa; color: #333; }
</style>
@endsection
