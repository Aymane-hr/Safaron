<x-guest-layout>
    <!-- Main Wrapper -->
    <div class="main-wrapper authentication-wrapper">
        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap">
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="p-4 d-flex justify-content-center">
                            <img src="{{ asset('assets/img/admin/logo.png') }}" style="width: 100px" alt="logo" class="img-fluid">
                        </div>
                        <div class="card authentication-card">
                            <div class="card-header">
                                <div class="text-center">
                                    <h5 class="mb-1">Sign In</h5>
                                    <p>Sign in to Start Manage Your Account</p>
                                </div>
                            </div>
                            <div class="card-body">

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Field -->
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <div class="input-icon">
                                            <span class="input-icon-addon">
                                                <i class="isax isax-message"></i>
                                            </span>
                                            <input type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}"
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

    </div>





</x-guest-layout>
