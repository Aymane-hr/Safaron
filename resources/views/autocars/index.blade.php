@extends('admin.Layout.app') <!-- Extend the layout -->

@section('title', 'Liste des Autocars') <!-- Define the title section -->

@section('content') <!-- Define the content section -->
    <div class="container mt-4">
        {{-- @include('layouts.Components.Flachbag') --}}
        <h1 class="text-center mb-4">Liste des Autocars</h1>

        {{-- Add Autocar Button --}}
        <div class="mb-3">
            <a href="{{ route('autocars.create') }}" class="btn btn-primary">Ajouter Autocar</a>
        </div>

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Société</th>
                        <th>Nombre de sièges</th>
                        <th>Matricule</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($autocars as $autocar)
                        <tr>
                            <td>{{ $autocar->id }}</td>
                            <td>{{ $autocar->societe->raison_social }}</td>
                            <td>{{$autocar->nbr_siege}}</td>
                            <td>{{ $autocar->matricule }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $autocar->image) }}" alt="Autocar Image" width="50" height="50">
                            </td>
                            <td>
                                <div class="d-flex gap-2">

                                    <a href="{{ route('autocars.edit', $autocar->id) }}" class="btn btn-warning btn-sm">
                                         Modifier
                                    </a>
                                    <form action="{{ route('autocars.destroy', $autocar->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet autocar ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                             Supprimer
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div >
            {{ $autocars->links() }}
        </div>
    </div>
@endsection
