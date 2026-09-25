<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Espoir d'Enfance</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Police -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Ton CSS principal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="auth-page">

    <div class="auth-container">

        <!-- Partie gauche -->
        <div class="auth-welcome">

            <a href="{{ url('/') }}" class="auth-logo">

                <span class="auth-logo-icon">
                    <i class="fa-solid fa-heart"></i>
                </span>

                <span>Espoir d'Enfance</span>

            </a>

            <div class="auth-welcome-content">

                <h1>Ensemble, offrons-leur <span>de l'espoir.</span></h1>

                <p>
                    Chaque geste compte. Connectez-vous et participez
                    à la construction d'un avenir meilleur pour les enfants.
                </p>

            </div>

        </div>


        <!-- Partie droite : Formulaire -->
        <div class="auth-form-container">

            {{ $slot }}

        </div>

    </div>

</body>

</html>
