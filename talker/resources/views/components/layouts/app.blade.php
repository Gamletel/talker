<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @livewireStyles

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<div class="container">
    @include('inc.header')

    {{ $slot }}

    @include('inc.footer')
</div>

@livewireScripts

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />
</body>
</html>
