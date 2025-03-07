@extends('admin.Layout.app')
@section('title', 'Liste des Types')
@section('content')
    <div class="container mt-4">
        <h2>Liste des Types de Voyage</h2>
        <a href="{{ route('type_voyages.create') }}" class="btn btn-primary mb-3">Ajouter Type</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->type_voyage }}</td>
                        <td>
                            <a href="{{ route('type_voyages.edit', $type->id) }}" class="btn btn-warning btn-sm"><i
                                    class="bi bi-pencil"></i></a>

                            <form action="{{ route('type_voyages.destroy', $type->id) }}" method="POST"
                                onsubmit="return confirm('Etes-vous sûr de vouloir supprimer ce type?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
