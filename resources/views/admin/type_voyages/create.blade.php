@extends('admin.Layout.app')

@section('content')
<div class="container mt-4">
    <h2>Ajouter un Type de Voyage</h2>


    <form action="{{ route('type_voyages.store') }}" method="POST">
        @csrf

        <label for="type_voyage" class="form-label">Type</label>
        <input type="text" class="form-control" id="type_voyage" name="type_voyage">
        @error('type_voyage')
         <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('type_voyages.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection