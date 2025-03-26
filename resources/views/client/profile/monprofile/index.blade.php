<x-app-layout>
    <x-profile-layout>
        <!-- my profile -->
        <div class="col-xl-9 col-lg-8">
            <div class="card shadow-none mb-0">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6>Mon Profil</h6>
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{ route('client.profile.parametres.index') }}" class="p-1 rounded-circle btn btn-light d-flex align-items-center justify-content-center"><i class="isax isax-edit-2 fs-14"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Display success message -->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h6 class="fs-16 mb-3">Informations de Base</h6>
                    <div class="d-flex align-items-center mb-3">
                        <span class="avatar avatar-xl flex-shrink-0 me-3">
                            <img src="{{ Storage::url('profile_images/' . basename(auth()->user()->image)) }}" 
                            alt="image" class="img-fluid rounded">
                        </span>
                    </div>
                    <div class="row border-bottom pb-2 mb-3">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <h6 class="fs-14">Nom et Prénom</h6>
                                <p>{{ $user->name }}</p> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="fs-14">Email</h6>
                                <p>{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-2">
                                <h6 class="fs-14">Téléphone</h6>
                                <p>{{ $user->telephone }}</p> 
                            </div>
                        </div>
                    </div>
                    <h6 class="fs-16 mb-3">Informations de l'Adresse</h6>
                    <div class="row g-2">
                        <div class="col-md-12">
                            <div>
                                <h6 class="fs-14">Adresse</h6>
                                <p>{{ $user->adresse }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">Pays</h6>
                                <p>{{ $user->pays }}</p> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">Région</h6>
                                <p>{{ $user->region }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">Ville</h6>
                                <p>{{ $user->ville }}</p> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h6 class="fs-14">Code Postal</h6>
                                <p>{{ $user->code_postal }}</p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /my Profile -->
    </x-profile-layout>
</x-app-layout>
