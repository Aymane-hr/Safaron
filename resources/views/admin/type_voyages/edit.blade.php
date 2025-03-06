@extends('admin.Layout.app')
@section('title','Modifier un Type de Voyage')

@section('content')
<div class="container mt-4">
    <form action="{{ route('type_voyages.update', $type_voyage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="type_voyage" class="form-label">Type</label>
            <input type="text" class="form-control" id="type_voyage" name="type_voyage" value="{{ $type_voyage->type_voyage }}" >
        </div>
        @error('type_voyage')
         <span style="color: red;">{{$message}}</span>
        @enderror
        <br>
        <button type="submit" class="btn btn-success">Modifier</button>
        <a href="{{ route('type_voyages.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
