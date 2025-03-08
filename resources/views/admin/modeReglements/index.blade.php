@extends('admin.layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Modes de Règlement</h1>

    <a href="{{ route('modeReglements.create') }}" class="btn btn-primary mb-3">Ajouter un Mode de Règlement</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Mode de Règlement</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modes as $mode)
                    <tr>
                        <td>{{ $mode->id }}</td>
                        <td>{{ $mode->mode_reglement }}</td>
                        <td>
                            <a href="{{ route('modeReglements.edit', $mode->id) }}" class="btn btn-warning btn-sm">Modifier</a>

                            <form action="{{ route('modeReglements.destroy',$mode->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce mode de règlement ?')">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
