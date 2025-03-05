@extends('admin.Layout.app') <!-- Extend the layout -->
@section('title', 'Liste des societes') <!-- Define the title section -->

@section('content') <!-- Define the content section -->

    <div class="container mt-4">
        <h1 class="text-center mb-4">Liste des societes</h1>


        <div class="mb-3">
            <a href="{{ route('societes.create') }}" class="btn btn-primary">Add Societe</a>
        </div>

        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>raison_social</th>
                        <th>adresse</th>
                        <th>ville</th>
                        <th>tel</th>
                        <th>nom_contact</th>
                        <th>email</th>
                        <th>ice</th>
                        <th>logo</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($societes as $societe)
                        <tr>



                            <td>{{ $societe->id }}</td>
                            <td>{{ $societe->raison_social }}</td>
                            <td>{{ $societe->adresse }}</td>
                            <td>{{ $societe->ville }}</td>
                            <td>{{ $societe->tel }}</td>
                            <td>{{ $societe->nom_contact }}</td>
                            <td>{{ $societe->email }}</td>
                            <td>{{ $societe->ice }}</td>

                            <td>
                                <img src="{{ asset('storage/' . $societe->logo) }}" alt="Logo" width="50"
                                    height="50">

                            </td>

                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('societes.edit', $societe->id) }}"
                                        class="btn btn-warning btn-sm">Modifier</a>
                                    <form action="{{ route('societes.destroy', $societe->id) }}" method="POST"
                                        onsubmit="return confirm('Etes-vous s��r de vouloir supprimer cet societe?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Pagination Links --}}
        <div >
            {{ $societes->links() }}
        </div>
    </div>
    @endsection


