<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Commerce</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
        <!-- Tailwindcss -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Alpine -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body class="">
        <!-- 1. Landing Page -->
            <!-- Navigation Bar  -->
            <x-home.landing-page/>
            <!-- Landing Page Section 2 -->
            <x-home.landing-page-section2/>
    </body>
</html>