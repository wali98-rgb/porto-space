@props(['href', 'active' => false])

@php
    $classes =
        $href ?? false
            ? 'nav-link active' // Kelas CSS untuk link aktif
            : 'nav-link'; // Kelas CSS untuk link non-aktif
@endphp

<a href="{{ $attributes->merge(['href' => $classes]) }}" class="{{ $active ? 'l14ct' : 'l1nO4ct' }}"
    aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
