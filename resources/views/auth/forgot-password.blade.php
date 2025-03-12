{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-guest-layout>

    <!-- Main Wrapper -->
    <div class="main-wrapper authentication-wrapper">
        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="p-4 text-center">
                            <img src="assets/img/logo-dark.svg" alt="logo" class="img-fluid">
                        </div>
                        <div class="card authentication-card">
                            <div class="card-header">
                                <div class="text-center">
                                    <h5 class="mb-1">Forgot Password</h5>
                                    <p>Mot de passe oublié ? Aucun problème. Communiquez-nous simplement votre adresse e-mail et nous vous enverrons par e-mail un lien de réinitialisation de mot de passe qui vous permettra d'en choisir un nouveau.</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-message"></i>
                                            </span>
                                            <input id="email" type="email" class="form-control form-control-lg" name="email" :value="old('email')" placeholder="Enter Email" required autofocus>
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">
                                            Email Password Reset Link <i class="isax isax-arrow-right-3 ms-2"></i>
                                        </button>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <p class="fs-14">Remember Password? <a href="{{ route('login') }}" class="link-primary fw-medium">Sign In</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Main Wrapper -->



</x-guest-layout>
