@extends('admin.Layout.app')
@section('content')
<div class="mb-3" id="formAdd">
    <form action="{{route('villes.update', $ville)}}" method="post">
        @csrf
        @method('PUT')
        <p class="text-danger">
            @error('ville')
                {{ $message }}
            @enderror
        </p>
        <input type="text" name="ville" value="{{$ville->ville}}" class="form-control" placeholder="Nom de la ville">
        <button type="submit" class="btn btn-success mt-2">Modifier une ville</button>
    </form>
</div>
@endsection
