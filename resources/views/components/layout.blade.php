<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $ttl ?? 'Dashboard Page || PortoSpace' }}</title>

    {{-- My Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    {{-- My CSS --}}
    <link rel="stylesheet" href="{{ asset('plugins/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/partials/header.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/css/partials/carousel.css') }}">

    {{-- My Carousel --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    {{-- Preloader Start --}}
    {{-- Preloader End --}}

    {{-- Navbar Start --}}
    <x-navbar></x-navbar>
    {{-- Navbar End --}}

    {{-- Carousel Start --}}
    <x-carousel></x-carousel>
    {{-- Carousel End --}}

    <x-header>{{ $ttl_head }}</x-header>
</body>

</html>
