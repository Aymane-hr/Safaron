@extends('admin.Layout.app')
@section('content')
<div class="mb-3" id="formAdd">
    <form action="{{route('villes.update', $ville)}}" method="post" class="text-center">
        @csrf
        @method('PUT')
        <p class="text-danger">
            @error('ville')
                {{ $message }}
            @enderror
        </p>
        <input type="text" name="ville" value="{{$ville->ville}}" class="form-control w-50 m-auto" placeholder="Nom de la ville">
        <button type="submit" class="btn btn-success m-4">Modifier une ville</button>
    </form>
</div>
@endsection
