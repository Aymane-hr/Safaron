@extends('admin.layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Ajouter un Mode de Règlement</h1>

    <div class="card shadow p-4">
        <form action="{{ route('modeReglements.store') }}" method="POST">
            @csrf
            {{-- @if($error->any())
            <div class="alert alert-danger">
                <ul>
                    
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach --}}
                </ul>

            <div class="mb-3">
                <label for="mode_reglement" class="form-label">Mode de Règlement</label>
                <input type="text" id="mode_reglement" name="mode_reglement" class="form-control" >
            </div>

            <div>
            @error('mode_reglement')
                <span class="text-danger">{{$message}}</span> 
             @enderror</div>
            
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('modeReglements.index') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</div>
@endsection
