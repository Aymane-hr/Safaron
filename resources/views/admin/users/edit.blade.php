@extends('admin.Layout.app')

@section('title', 'Modifier l\'utilisateur')

@section('content')
<div class="container-fluid py-4">
    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm mb-4">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
    @endif

    <!-- Header Section -->
    <div class="mb-5">
        <h2 class="fw-bold text-dark mb-4">Modifier l'utilisateur</h2>
        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold small">Nom d'utilisateur <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control bg-light border-0 py-2" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold small">Email d'utilisateur <span class="text-danger">*</span></label>
                    <input type="email" name="email" class="form-control bg-light border-0 py-2" value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold small">Role <span class="text-danger">*</span></label>
                    <select name="role" class="form-select bg-light border-0 py-2" required>
                        <option value="">Sélectionnez un rôle</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->roles->contains($role->id) ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-dark px-4 py-2 fw-bold">Modifier</button>
            </div>
        </form>
    </div>

    <!-- Password Section -->
    <div class="mt-5 pt-4 border-top">
        <h2 class="fw-bold text-dark mb-4">Changer le mot de passe</h2>
        <form action="{{ route('admin.users.update-password', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold small">Mot de passe <span class="text-danger">*</span></label>
                    <input type="password" name="password" class="form-control bg-light border-0 py-2" placeholder="********" required>
                    @error('password') <div class="text-danger small mt-1">{{ $message }}</div> @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold small">Confirmer le mot de passe <span class="text-danger">*</span></label>
                    <input type="password" name="password_confirmation" class="form-control bg-light border-0 py-2" placeholder="********" required>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-dark px-4 py-2 fw-bold">Réinitialiser le mot de passe</button>
            </div>
        </form>
    </div>
</div>

<style>
    .bg-light { background-color: #f8f9fa !important; }
    .form-control:focus, .form-select:focus {
        background-color: #fff !important;
        box-shadow: 0 0 0 0.25rem rgba(25, 53, 87, 0.1);
        border-color: #193557;
    }
    .btn-dark {
        background-color: #193557;
        border-color: #193557;
    }
    .btn-dark:hover {
        background-color: #142b46;
        border-color: #142b46;
    }
</style>
@endsection
