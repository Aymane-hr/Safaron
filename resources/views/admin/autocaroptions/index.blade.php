@extends('admin.Layout.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0 text-center fw-bold">Liste des Options des Autocars</h3>
                </div>


                    <!-- Button to Add Autocar Option -->
                    <div class="d-flex justify-content-end mb-4">
                        <a href="{{ route('autocaroptions.create') }}" class="btn btn-success">
                            <i class="bi bi-plus-circle me-2"></i> Ajouter
                        </a>
                    </div>

                    <!-- Autocar Options Table -->
                    @if($autocaroptions->isEmpty())
                        <p class="text-muted text-center">Aucune option associée trouvée.</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead class="table-light">
                                    <tr>
                                        <th>Autocar</th>
                                        <th>Option</th>
                                        <th class="text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autocaroptions as $autocar_option)
                                        <tr>
                                            <td>{{ $autocar_option->autocar->matricule }}</td>
                                            <td>{{ $autocar_option->option->option }}</td>
                                            <td class="text-end">
                                                   <!-- Edit Button -->
                                    <a href="{{ route('autocaroptions.edit', $autocar_option->id) }}" class="btn btn-warning btn-sm me-2 shadow-sm">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                                <form action="{{ route('autocaroptions.destroy', $autocar_option->id) }}" method="POST" class="d-inline delete-form"  onsubmit="confirmDelete(event, this)">
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

<!-- SweetAlert2 CDN -->

@endsection
