<x-app-layout>
    <x-profile-layout>

                <!-- Profile Settings -->
                <div class="col-xl-9 col-lg-8">
                    <div class="card shadow-none mb-0">
                        <form method="POST" action="{{ route('client.profile.parametres.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') 

                                        <div class="card-header">
                                            <h6>Paramètres</h6>
                                        </div>
                                        <div class="card-body pb-3">
                                            
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <!-- Profile Image -->
                                            <div class="settings-content mb-3">
                                                <h6 class="fs-16 mb-3">Informations de base</h6>
                                                <div class="row gy-2">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex align-items-center">
                                                        <img src="{{ Storage::url('profile_images/' . basename(auth()->user()->image)) }}"

                                                        alt="image" class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3">

                                                        <!--<img src="{{ Storage::url('profile_images/' . auth()->user()->profile_image) }}"alt="image" width="150">
                                                        <img src="{{ asset('profile_images/' . auth()->user()->image) }}" alt="image" width="150">

                                                        <img src="{{ asset(auth()->user()->profile_image )}}"  alt="image" class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3"> -->

                                                        <!-- <img src="{{ asset(auth()->user()->profile_image ?? 'assets/img/users/default.jpg')}}"  alt="image" class="img-fluid avatar avatar-xxl br-10 flex-shrink-0 me-3"> -->
                                                        
                                                        <!-- url('storage/profile_images/'.$user->image) -->
                                                            <div>
                                                                <p class="fs-14 text-gray-6 fw-normal mb-2">Taille recommandée : 400 x 400 px.</p>
                                                                <div class="d-flex align-items-center">
                                                                    <label for="fileUpload" class="btn btn-primary me-2">Upload </label>
                                                                    <input type="file" id="fileUpload" name="image" hidden>

                                                                    <!-- <label for="dlt_profile" class="btn btn-light">Remove</label>
                                                                    <input type="checkbox" name="dlt_profile" value="1" hidden>  -->
                                                                    <!-- <div class="form-check">
                                                                        <input type="checkbox" name="dlt_profile" id="dlt_profile" value="1"  >
                                                                            <label for="dlt_profile" class="btn btn-light peer-checked:bg-danger peer-checked:text-white}">

                                                                            Remove
                                                                        </label>
                                                                    </div>                                                                    -->
                                                                    <div class="form-check">
                                                                    <button type="submit" name="dlt_profile" value="1" class="btn btn-light" 
                                                                        onclick="confirmDeleteImage(event)">
                                                                        Remove
                                                                    <!-- </button>
    <input type="checkbox" name="dlt_profile" id="dlt_profile" value="1" hidden>
    <label for="dlt_profile" class="btn btn-light" onclick="confirmDeleteImage(event)">Remove</label>
</div> -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Name -->
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label class="form-label">Nom et Prénom</label>
                                                            <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Email -->
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label class="form-label">Email</label>
                                                            <input type="email" name="email" value="{{ old('email', auth()->user()->email) }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <!-- Téléphone -->
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label class="form-label">Téléphone</label>
                                                            <input type="text" name="telephone" value="{{ old('telephone', auth()->user()->telephone) }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Adresse Information -->
                                            <div class="settings-content">
                                                <h6 class="fs-16 mb-3">Informations d'Adresse</h6>
                                                <div class="row gy-2">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <label class="form-label">Adresse</label>
                                                            <input type="text" name="adresse" value="{{ old('adresse', auth()->user()->adresse) }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label class="form-label">Pays</label>
                                                            <input type="text" name="pays" value="{{ old('pays', auth()->user()->pays) }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label class="form-label">Région</label>
                                                            <input type="text" name="region" value="{{ old('region', auth()->user()->region) }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label class="form-label">Ville</label>
                                                            <input type="text" name="ville" value="{{ old('ville', auth()->user()->ville) }}" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div>
                                                            <label class="form-label">Code Postal</label>
                                                            <input type="text" name="code_postal" value="{{ old('code_postal', auth()->user()->code_postal) }}" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <a href="{{ route('client.profile.monprofile.index') }}"  class="btn btn-light me-2">Annuler</a>
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>

                <!-- /Profile Settings -->
    </x-profile-layout>
</x-app-layout>
<script>
    function confirmDeleteImage(event) {
        event.preventDefault();

        Swal.fire({
            title: "Êtes-vous sûr?",
            text: "Cette action supprimera immédiatement votre photo de profil!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "red", // Bootstrap Danger (Red)
            cancelButtonColor: "black", // Bootstrap Secondary (Gray)
            confirmButtonText: "<i class='fas fa-trash-alt'></i> Supprimer",
            cancelButtonText: "<i class='fas fa-times'></i> Annuler",
            buttonsStyling: false,
            customClass: {
                popup: 'rounded-3 shadow-lg', // Rounded corners & shadow
                title: 'fw-bold fs-5', // Bold & slightly larger title
                confirmButton: 'btn btn-danger px-4 py-2', // Red button
                cancelButton: 'btn btn-light px-4 py-2', // Gray button
                icon: 'text-danger fs-1', // Large red icon
            }
        }).then((result) => {
            if (result.isConfirmed) {
                fetch("{{ route('profile.delete-image') }}", {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({})
                })
                .then(response => response.json())
                .then(data => {
                    Swal.fire({
                        title: "Supprimé!",
                        text: data.message,
                        icon: "success",
                        confirmButtonColor: "#28a745",
                        confirmButtonText: "OK",
                        customClass: {
                            confirmButton: 'btn btn-success px-4 py-2'
                        }
                    }).then(() => {
                        location.reload(); 
                    });
                })
                .catch(error => {
                    console.error("Error deleting image:", error);
                    Swal.fire({
                        title: "Erreur!",
                        text: "Impossible de supprimer l'image.",
                        icon: "error",
                        confirmButtonColor: "#dc3545",
                        confirmButtonText: "OK",
                        customClass: {
                            confirmButton: 'btn btn-danger px-4 py-2'
                        }
                    });
                });
            }
        });
    }
    
</script>
