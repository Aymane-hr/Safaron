@extends('admin.Layout.app')
@section('title', 'Liste des Voyages')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Liste des Voyages</h1>

    <!-- Message de succès -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
            }, 3000); // Alert will disappear after 3 seconds
        </script>
    @endif
    <div class="d-flex justify-content-start">
        <a href="{{ route('voyages.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Ajouter un voyage
        </a>
    </div>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Ville de départ</th>
                <th>Ville d'arrivée</th>
                <th>Autocar</th>
                <th>Type de voyage</th>
                <th>Date départ</th>
                <th>Date arrivée</th>
                <th>Heure départ</th>
                <th>Heure arrivée</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voyages as $voyage)
                <tr>
                    <td>{{ $voyage->id }}</td>
                    <td>{{ $voyage->villeDepart->nom }}</td> <!-- Assurez-vous d'utiliser la bonne relation -->
                    <td>{{ $voyage->villeArrivee->nom }}</td>
                    <td>{{ $voyage->autocar->matricule }}</td>
                    <td>{{ $voyage->typeVoyage->nom }}</td>
                    <td>{{ $voyage->date_depart }}</td>
                    <td>{{ $voyage->date_arrivee }}</td>
                    <td>{{ $voyage->heure_depart }}</td>
                    <td>{{ $voyage->heure_arrivee }}</td>
                    <td>{{ $voyage->prix }} MAD</td>
                    <td>
                        <a href="{{ route('voyages.edit', $voyage->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('voyages.destroy', $voyage->id) }}" method="POST" style="display:inline;">
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
@endsection
