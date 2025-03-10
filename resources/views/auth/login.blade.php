{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Your App Name</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets\img\admin\logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets\img\admin\logo.png') }}" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Iconsax CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/iconsax.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-light-200">

    <!-- Main Wrapper -->
    <div class="main-wrapper authentication-wrapper">
        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="p-4 text-center">
                            <img src="{{ asset('assets/img/logo-dark.svg') }}" alt="logo" class="img-fluid">
                        </div>
                        <div class="card authentication-card">
                            <div class="card-header">
                                <div class="text-center">
                                    <h5 class="mb-1">Sign In</h5>
                                    <p>Sign in to Start Manage Your Account</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Field -->
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-message"></i>
                                            </span>
                                            <input type="email" class="form-control form-control-lg" name="email"
                                                placeholder="Enter Email" required autofocus>

                                        </div>
                                        <!-- Email Error Message -->
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password Field -->
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-lock"></i>
                                            </span>
                                            <input type="password" class="form-control form-control-lg pass-input"
                                                name="password" placeholder="Enter Password" required>
                                            <span class="input-icon-addon toggle-password">
                                                <i class="isax isax-eye-slash"></i>
                                            </span>

                                        </div>
                                        <!-- Password Error Message -->
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me & Forgot Password -->
                                    <div class="mt-3 mb-3">
                                        <div
                                            class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
                                            <div class="form-check d-flex align-items-center mb-2">
                                                <input class="form-check-input mt-0" type="checkbox" name="remember"
                                                    id="remembers_me">
                                                <label class="form-check-label ms-2 text-gray-9 fs-14"
                                                    for="remembers_me">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <a href="{{ route('password.request') }}"
                                                class="link-primary fw-medium fs-14 mb-2">Forgot Password?</a>
                                        </div>
                                    </div>

                                    <!-- Login Button -->
                                    <div class="mb-3">
                                        <button type="submit"
                                            class="btn btn-xl btn-primary d-flex align-items-center justify-content-center w-100">
                                            Login
                                        </button>
                                    </div>

                                    <!-- Sign Up Link -->
                                    <div class="d-flex justify-content-center">
                                        <p class="fs-14">Don't you have an account? <a href="{{ route('register') }}"
                                                class="link-primary fw-medium">Sign up</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="coprright-footer">
            <p class="fs-14">Copyright &copy; {{ date('Y') }}. All Rights Reserved, <a href="#"
                    class="text-primary fw-medium">Safar</a></p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Toggle Password Visibility -->
    <script>
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.querySelector('.pass-input');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('isax-eye');
            this.querySelector('i').classList.toggle('isax-eye-slash');
        });
    </script>
</body>

</html>
