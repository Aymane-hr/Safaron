
    <x-guest-layout>

    <!-- Main Wrapper -->
    <div class="main-wrapper authentication-wrapper">
        <div class="container-fuild">

            <!-- Register -->
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="p-4 d-flex  justify-content-center">
                            <img src="{{ asset('assets/img/admin/logo.png') }}" style="width: 100px" alt="logo" class="img-fluid">
                        </div>
                        <div class="card authentication-card">
                            <div class="card-header">
                                <div class="text-center">
                                    <h5 class="mb-1">Inscription</h5>
                                    <p>Créez votre compte Safar</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Nom et prénom</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-user"></i>
                                            </span>
                                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control form-control-lg"
                                                placeholder="Entrez votre nom et prénom" required>
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Adresse e-mail</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-message"></i>
                                            </span>
                                            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="username"
                                                class="form-control form-control-lg" placeholder="Entrez votre adresse e-mail">
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-lock"></i>
                                            </span>
                                            <input id="password" type="password" name="password" required autocomplete="new-password"
                                                class="form-control form-control-lg pass-input" placeholder="Entrez votre mot de passe">
                                            <span class="input-icon-addon toggle-password">
                                                <i class="isax isax-eye-slash"></i>
                                            </span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirmez le mot de passe</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-lock"></i>
                                            </span>
                                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                                autocomplete="new-password" class="form-control form-control-lg pass-input"
                                                placeholder="Confirmez votre mot de passe">
                                            <span class="input-icon-addon toggle-password">
                                                <i class="isax isax-eye-slash"></i>
                                            </span>
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit"
                                            class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">S'inscrire<i
                                                class="isax isax-arrow-right-3 ms-2"></i></button>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <p class="fs-14">Vous avez déjà un compte? <a href="{{ route('login') }}"
                                                class="link-primary fw-medium">Se connecter</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /Register -->

        </div>

    </div>
    <!-- /Main Wrapper -->

    </x-guest-layout>

