@extends('admin.Layout.app')
@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Liste des villes</h1>

        <div class="mb-3">
            <a href="{{ route('villes.create') }}" class="btn btn-success">Ajouter une ville</a>
        </div>

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" id="alert-message" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center w-25">Id</th>
                        <th class="text-center w-25">Nom</th>
                        <th class="text-center w-50">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($villes as $ville)
                        <tr>
                            <td class="text-center fs-5">{{ $ville->id }}</td>
                            <td class="text-center fs-5">{{ $ville->ville }}</td>
                            <td class="text-center fs-5">
                                {{-- href="{{ route('villes.edit', $ville->id) }}" --}}
                                <a  class="btn btn-warning btn-sm mx-4" href="{{route("villes.edit", $ville)}}" id="editBtn"> 
                                    <i class="bi bi-pencil fs-5"></i><span class="fs-6">Modify</span>
                                </a>
                                <form action="{{ route('villes.destroy', $ville->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mx-4" 
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette ville ?')">
                                        <i class="bi bi-trash fs-5"></i><span class="fs-6">Supprimer</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    let alertDiv = document.getElementById("alert-message");
    if (alertDiv) {
        setTimeout(function () {
            alertDiv.style.display = "none"; 
        }, 3000); 
    }
});
    </script>
@endsection
