@extends('admin.Layout.app')

@section('title', 'Mon Profil')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800 fw-bold">Gestion du Profil</h1>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <!-- Profile Card -->
            <div class="card shadow-sm border-0 mb-4 text-center overflow-hidden">
                <div class="card-header bg-primary py-4"></div>
                <div class="card-body p-4" style="margin-top: -60px;">
                    <div class="position-relative d-inline-block mb-3">
                        <img src="{{ Auth::user()->getProfileImagePathAttribute() }}" class="rounded-circle border border-4 border-white shadow-sm" style="width: 120px; height: 120px; object-fit: cover; background: white;">
                        <div class="position-absolute bottom-0 end-0">
                            <span class="badge bg-success rounded-circle p-2 border border-2 border-white shadow-sm">
                                <i class="bi bi-patch-check-fill text-white"></i>
                            </span>
                        </div>
                    </div>
                    <h3 class="fw-bold mb-1 text-dark">{{ Auth::user()->name }}</h3>
                    <p class="text-muted small mb-3">{{ Auth::user()->email }}</p>
                    <div class="d-grid gap-2">
                        <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-bold">ADMINISTRATEUR</span>
                    </div>
                </div>
                <div class="card-footer bg-light border-0 py-3">
                    <div class="row text-center">
                        <div class="col border-end">
                            <div class="fw-bold text-dark">{{ Auth::user()->reservations->count() ?? 0 }}</div>
                            <div class="text-muted small">Réservations</div>
                        </div>
                        <div class="col">
                            <div class="fw-bold text-dark">Actif</div>
                            <div class="text-muted small">Statut</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-7">
            <!-- Profile Information -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white py-3 border-0">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3 text-primary">
                            <i class="bi bi-person-vcard fs-5"></i>
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold text-dark">Informations du Profil</h5>
                            <p class="text-muted small mb-0">Mettez à jour vos informations de base et votre adresse email.</p>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pb-4">
                    <form method="post" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-medium text-dark small">Nom Complet</label>
                                <input type="text" name="name" class="form-control bg-light border-0" value="{{ old('name', Auth::user()->name) }}" required autofocus>
                                @if($errors->has('name'))
                                    <div class="text-danger extra-small mt-1">{{ $errors->first('name') }}</div>
                                @endif
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-medium text-dark small">Adresse Email</label>
                                <input type="email" name="email" class="form-control bg-light border-0" value="{{ old('email', Auth::user()->email) }}" required>
                                @if($errors->has('email'))
                                    <div class="text-danger extra-small mt-1">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 mt-3">
                            <button type="submit" class="btn btn-primary px-4 rounded-pill shadow-sm hover-lift">
                                <i class="bi bi-save me-2"></i> Enregistrer
                            </button>
                            @if (session('status') === 'profile-updated')
                                <span class="text-success small fw-medium fade-in"><i class="bi bi-check-circle-fill me-1"></i>Modifications enregistrées.</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Password Update -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white py-3 border-0">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3 text-warning">
                            <i class="bi bi-shield-lock fs-5"></i>
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold text-dark">Sécurité du Compte</h5>
                            <p class="text-muted small mb-0">Modifiez votre mot de passe pour sécuriser votre accès.</p>
                        </div>
                    </div>
                </div>
                <div class="card-body px-4 pb-4">
                    <form method="post" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label class="form-label fw-medium text-dark small">Mot de passe actuel</label>
                            <input type="password" name="current_password" class="form-control bg-light border-0">
                            @if($errors->updatePassword->has('current_password'))
                                <div class="text-danger extra-small mt-1">{{ $errors->updatePassword->first('current_password') }}</div>
                            @endif
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-medium text-dark small">Nouveau mot de passe</label>
                                <input type="password" name="password" class="form-control bg-light border-0">
                                @if($errors->updatePassword->has('password'))
                                    <div class="text-danger extra-small mt-1">{{ $errors->updatePassword->first('password') }}</div>
                                @endif
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-medium text-dark small">Confirmer le mot de passe</label>
                                <input type="password" name="password_confirmation" class="form-control bg-light border-0">
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 mt-3">
                            <button type="submit" class="btn btn-warning text-dark fw-bold px-4 rounded-pill shadow-sm hover-lift">
                                <i class="bi bi-key me-2"></i> Mettre à jour
                            </button>
                            @if (session('status') === 'password-updated')
                                <span class="text-success small fw-medium fade-in"><i class="bi bi-check-circle-fill me-1"></i>Mot de passe mis à jour.</span>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <!-- Danger Zone -->
            <div class="card shadow-sm border-0 mb-4 bg-danger bg-opacity-10 border-start border-danger border-4">
                <div class="card-body d-flex justify-content-between align-items-center py-4">
                    <div class="pe-3">
                        <h5 class="fw-bold text-danger mb-1">Zone de Danger</h5>
                        <p class="text-danger small mb-0 opacity-75">La suppression du compte est définitive. Toutes vos données seront effacées.</p>
                    </div>
                    <button type="button" class="btn btn-danger px-4 rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#confirmDeletion">
                        Supprimer le compte
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="confirmDeletion" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
                @csrf
                @method('delete')
                <div class="text-center mb-4">
                    <div class="rounded-circle bg-danger bg-opacity-10 p-3 d-inline-block text-danger mb-3">
                        <i class="bi bi-exclamation-triangle fs-1"></i>
                    </div>
                    <h4 class="fw-bold text-dark">Confirmation requise</h4>
                    <p class="text-muted">Veuillez saisir votre mot de passe pour confirmer la suppression définitive de votre compte.</p>
                </div>

                <div class="mb-4">
                    <input type="password" name="password" class="form-control text-center py-2" placeholder="Mot de passe actuel">
                    @if($errors->userDeletion->has('password'))
                        <div class="text-danger small mt-1 text-center">{{ $errors->userDeletion->first('password') }}</div>
                    @endif
                </div>

                <div class="row g-2">
                    <div class="col-6">
                        <button type="button" class="btn btn-light w-100 rounded-pill py-2" data-bs-dismiss="modal">Annuler</button>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-danger w-100 rounded-pill py-2">Supprimer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .bg-primary-subtle { background-color: #cfe2ff; }
    .text-primary { color: #084298; }
    .extra-small { font-size: 0.75rem; }
    .hover-lift:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
    }
    .fade-in { animation: fadeIn 0.5s ease-in; }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }
    .btn-warning:hover { background-color: #ffc107 !important; color: #000 !important; }
</style>
@endsection
