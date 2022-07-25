<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce</title>
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    {{-- TailwindCSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- AnimateCSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    {{-- Alphine --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="">
    {{-- Navigation Bar --}}



    <x-home.landing-page />

    @yield('content')
    {{-- Footer --}}
    <x-home.landing-page-footer />
</body>

</html>