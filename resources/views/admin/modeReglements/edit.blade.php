@extends('admin.layout.app')

@section('content')

<div class="container mt-5">
    <h1 class="text-center">Modifier le Mode de Règlement</h1>

    <div class="card p-4 shadow-sm">
        <form action="{{ route('modeReglements.update', $mode->id) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- @if($error->any())
            <div class="alert alert-danger">
                <ul>
                    
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach --}}

            <div class="mb-3">
                <label for="mode_de_reglement" class="form-label">Mode de Règlement</label>
                <input type="text" id="mode_reglement" name="mode_reglement" value="{{ $mode->mode_reglement }}" class="form-control">
                @error('mode_reglement')
                   <span class="text-danger">{{$message}}</span> 
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('modeReglements.index') }}" class="btn btn-secondary">Retour</a>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
          
        </form>
    </div>
</div>

@endsection
