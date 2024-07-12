<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $ttl ?? 'Dashboard Page || PortoSpace' }}</title>

    <link rel="stylesheet" href="{{ asset('plugins/css/layout.css') }}">
    @include('assets.css')

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
    <x-carousel>{{ $head_carousel }}</x-carousel>
    {{-- Carousel End --}}

    <x-header>{{ $ttl_head }}</x-header>

    <div class="c0T3n">
        @yield('ctn')
    </div>

    {{-- Footer Session Start --}}
    {{-- Footer Session End --}}

    @include('assets.js')
</body>

</html>
