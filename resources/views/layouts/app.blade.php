<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @include('layouts.head')
        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body >
            {{-- @include('layouts.navigation') --}}
            @include('layouts.navbar')






            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>








            @include('layouts.footer')

         <!-- Cursor -->
        <div class="xb-cursor tx-js-cursor">
            <div class="xb-cursor-wrapper">
                <div class="xb-cursor--follower xb-js-follower"></div>
            </div>
        </div>
        <!-- /Cursor -->

        <div class="back-to-top">
            <a class="back-to-top-icon align-items-center justify-content-center d-flex"  href="#top"><i class="fa-solid fa-arrow-up"></i></a>
        </div>
        @include('layouts.scripts')

    </body>
</html>
