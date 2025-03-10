@extends('admin.Layout.app')

@section('title', 'Liste des options')

@section('content')

    <h1 class="mb-4 text-center text-primary fw-bold">📌 Liste des options</h1>




    <!-- Bouton pour ajouter une nouvelle option -->
    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('options.create') }}" class="btn btn-success shadow">
            <i class="bi bi-plus-circle"></i> Ajouter une nouvelle option
        </a>
    </div>

    <!-- Liste des options -->
    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white fw-bold">
            <i class="bi bi-list-task"></i> Options Disponibles
        </div>
        <div class="card-body">
            @if($options->isEmpty())
                <div class="alert alert-info text-center py-4" role="alert">
                    <i class="bi bi-info-circle-fill me-2"></i>
                    🚀 Aucune option disponible. Ajoutez-en une maintenant !
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Nom de l'Option</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($options as $option)
                                <tr>
                                    <td>{{ ($options->currentPage() - 1) * $options->perPage() + $loop->iteration }}</td>
                                    <td class="fw-bold">{{ $option->option }}</td>
                                    <td>
                                        <a href="{{ route('options.edit', $option->id) }}" class="btn btn-warning btn-sm shadow">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('options.destroy', $option->id) }}" method="POST" class="d-inline delete-form"  onsubmit="confirmDelete(event, this)">
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

                <!-- Pagination améliorée -->
                <div class="mt-3 d-flex justify-content-center align-items-center gap-2">
                    <!-- Aller à la première page -->
                    @if(!$options->onFirstPage())
                        <a href="{{ $options->url(1) }}" class="btn btn-outline-primary shadow-sm">
                            <i class="bi bi-chevron-double-left"></i> Première
                        </a>
                    @endif

                    <!-- Bouton -5 pages -->
                    @if($options->currentPage() > 5)
                        <a href="{{ $options->url($options->currentPage() - 5) }}" class="btn btn-outline-secondary shadow-sm">
                            <i class="bi bi-arrow-left-circle"></i> -5
                        </a>
                    @endif

                    <!-- Pagination Laravel -->
                    {{ $options->links('pagination::bootstrap-5') }}

                    <!-- Bouton +5 pages -->
                    @if($options->currentPage() + 5 <= $options->lastPage())
                        <a href="{{ $options->url($options->currentPage() + 5) }}" class="btn btn-outline-secondary shadow-sm">
                            +5 <i class="bi bi-arrow-right-circle"></i>
                        </a>
                    @endif

                    <!-- Aller à la dernière page -->
                    @if($options->currentPage() < $options->lastPage())
                        <a href="{{ $options->url($options->lastPage()) }}" class="btn btn-outline-primary shadow-sm">
                            Dernière <i class="bi bi-chevron-double-right"></i>
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>

@endsection
