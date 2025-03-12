@extends('admin.Layout.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card border-0 rounded shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0 fw-bold">📋 Liste des Options des Autocars</h3>
                </div>

                <div class="card-body">
                    <!-- Bouton Ajouter -->
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('autocaroptions.create') }}" class="btn btn-success shadow">
                            <i class="bi bi-plus-circle me-2"></i> Ajouter
                        </a>
                    </div>

                    <!-- Tableau des options des autocars -->
                    @if($autocaroptions->isEmpty())
                        <div class="alert alert-info text-center py-4" role="alert">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            🚫 Aucune option associée trouvée.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-striped text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>🚍 Autocar</th>
                                        <th>⚙️ Option</th>
                                        <th class="text-end">🔧 Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autocaroptions as $autocar_option)
                                        <tr>
                                            <td>{{ ($autocaroptions->currentPage() - 1) * $autocaroptions->perPage() + $loop->iteration }}</td>
                                            <td class="fw-bold">{{ $autocar_option->autocar->matricule }}</td>
                                            <td class="text-primary fw-semibold">{{ $autocar_option->option->option }}</td>
                                            <td class="text-end">
                                                <!-- Modifier -->
                                                <a href="{{ route('autocaroptions.edit', $autocar_option->id) }}" class="btn btn-warning btn-sm shadow">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <!-- Supprimer -->
                                                <form action="{{ route('autocaroptions.destroy', $autocar_option->id) }}" method="POST" class="d-inline delete-form" onsubmit="confirmDelete(event, this)">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm shadow">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-4">
                            {{ $autocaroptions->links('pagination::bootstrap-5') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
