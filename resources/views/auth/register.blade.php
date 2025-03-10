<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Safar</title>

    <meta name="description"
        content="Créez votre compte DreamsTour. Un modèle HTML Bootstrap 5 pour les agences de voyage et les plateformes de réservation.">
    <meta name="keywords"
        content="modèle de réservation de voyage, DreamsTour, inscription, template Bootstrap 5, modèle HTML, agence de voyage, réservation de vol, réservation d'hôtel, réservation de tour, package de vacances, site web d'agence de voyage">
    <meta name="author" content="Dreams Technologies">
    <meta name="robots" content="index, follow">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Main.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <!-- Tabler Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.css') }}">

    <!-- Fontawesome Icon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Owlcarousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/owlcarousel/owl.carousel.min.css') }}">

    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">

    <!-- Iconsax CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/iconsax.css') }}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body class="bg-light-200">

    <!-- Main Wrapper -->
    <div class="main-wrapper authentication-wrapper">
        <div class="container-fuild">

            <!-- Register -->
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row justify-content-center align-items-center vh-100 overflow-auto flex-wrap ">
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                        <div class="p-4 text-center">
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
        <div class="coprright-footer">
            <p class="fs-14">Copyright &copy; 2025. Tous droits réservés, <a href="javascript:void(0);" class="text-primary fw-medium">Safar</a>
            </p>
        </div>
    </div>
    <!-- /Main Wrapper -->

    <!-- Cursor -->
    <div class="xb-cursor tx-js-cursor">
        <div class="xb-cursor-wrapper">
            <div class="xb-cursor--follower xb-js-follower"></div>
        </div>
    </div>
    <!-- /Cursor -->

    <!-- Jquery JS -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!-- MeanMenu Js -->
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- cursor JS -->
    <script src="{{ asset('assets/js/cursor.js') }}"></script>

    <!-- Script JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

