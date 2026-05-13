@extends('admin.Layout.app')

@section('title', 'Créer un utilisateur')

@section('content')
<div class="container-fluid py-4">
    <!-- Header Section -->
    <div class="mb-5">
        <div class="d-flex align-items-center mb-4">
            <a href="{{ route('admin.users.index') }}" class="btn btn-link text-dark p-0 me-3">
                <i class="bi bi-arrow-left fs-4"></i>
            </a>
            <h2 class="fw-bold text-dark m-0">Créer un nouvel utilisateur / employé</h2>
        </div>

        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body p-4 p-md-5">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="row g-4">
                        <div class="col-md-6">
                            <label class="form-label fw-bold small">Nom complet <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control bg-light border-0 py-2 @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Ex: Jean Dupont" required>
                            @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small">Adresse Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control bg-light border-0 py-2 @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email@exemple.com" required>
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small">Mot de passe <span class="text-danger">*</span></label>
                            <input type="password" name="password" class="form-control bg-light border-0 py-2 @error('password') is-invalid @enderror" placeholder="********" required>
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small">Confirmer le mot de passe <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control bg-light border-0 py-2" placeholder="********" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold small">Rôle (Optionnel pour les clients)</label>
                            <select name="role" class="form-select bg-light border-0 py-2 @error('role') is-invalid @enderror">
                                <option value="">Aucun rôle (Client par défaut)</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('role') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-md-6 d-flex align-items-end">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" name="isadmin" id="isadmin" value="1" {{ old('isadmin') ? 'checked' : '' }}>
                                <label class="form-check-label fw-bold small" for="isadmin">Définir comme Administrateur</label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-dark px-5 py-2 fw-bold rounded-3">Créer l'utilisateur</button>
                        <a href="{{ route('admin.users.index') }}" class="btn btn-light px-4 py-2 fw-bold rounded-3 ms-2">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
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
    .form-switch .form-check-input:checked {
        background-color: #193557;
        border-color: #193557;
    }
</style>
@endsection
