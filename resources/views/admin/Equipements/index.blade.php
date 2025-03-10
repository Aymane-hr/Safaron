@extends('admin.Layout.app')

@section('title', 'Liste des équipements')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0 text-center fw-bold">Liste des équipements</h3>
                </div>
                <div class="card-body p-4">

                    <!-- Bouton Ajouter -->
                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('equipements.create') }}" class="btn btn-success">
                            <i class="bi bi-plus-circle me-2"></i> Ajouter un équipement
                        </a>
                    </div>

                    <!-- Liste des équipements -->
                    @if($equipements->isEmpty())
                        <div class="alert alert-info text-center py-4" role="alert">
                            <i class="bi bi-info-circle-fill me-2"></i>
                            Aucun équipement trouvé. Ajoutez un nouvel équipement maintenant !
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Équipement</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipements as $equipement)
                                        <tr>
                                            <td>{{ ($equipements->currentPage() - 1) * $equipements->perPage() + $loop->iteration }}</td>
                                            <td>{{ $equipement->equipement }}</td>
                                            <td class="text-end">
                                                <a href="{{ route('equipements.edit', $equipement->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form action="{{ route('equipements.destroy', $equipement->id) }}" method="POST" class="d-inline delete-form" onsubmit="confirmDelete(event, this)">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
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
                            {{ $equipements->links('pagination::bootstrap-5') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
