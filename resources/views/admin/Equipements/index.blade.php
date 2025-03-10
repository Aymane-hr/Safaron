@extends('admin.Layout.app')

@section('title', 'Liste des équipements')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0 text-center fw-bold">Liste des équipements</h3>
                </div>
                <div class="card-body p-4">

                    <!-- Display Flash Messages as Toasts -->
                    @if(session('success'))
                        <script>
                            window.onload = function() {
                                showToast('success', '{{ session("success") }}');
                            };
                        </script>
                    @endif

                    @if(session('error'))
                        <script>
                            window.onload = function() {
                                showToast('error', '{{ session("error") }}');
                            };
                        </script>
                    @endif

                    <!-- Bouton Ajouter -->
                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('equipements.create') }}" class="btn btn-success">
                            <i class="bi bi-plus-circle me-2"></i> Ajouter un équipement
                        </a>
                    </div>

                    <!-- Liste des équipements -->
                    @if($equipements->isEmpty())
                        <p class="text-muted text-center">Aucun équipement trouvé.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">Équipement</th>
                                        <th scope="col" class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($equipements as $equipement)
                                        <tr>
                                            <td>{{ $equipement->equipement }}</td>
                                            <td class="text-end">
                                                <a href="{{ route('equipements.edit', $equipement->id) }}" class="btn btn-warning btn-sm shadow">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <form action="{{ route('equipements.destroy', $equipement->id) }}" method="POST" class="d-inline delete-form"  onsubmit="confirmDelete(event, this)">
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Toast Container -->
<div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
    <div id="toastContainer"></div>
</div>


@endsection
