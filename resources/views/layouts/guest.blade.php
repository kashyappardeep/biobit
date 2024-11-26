<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sky Marvel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" >
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 relative">
            <!-- Background Video -->
            <video loop autoplay muted playsinline preload="none" 
                class="absolute top-0 left-0 w-full h-full object-cover z-0" 
                poster="{{ asset('assets/media/phone-view.5e88650f8996ceddafae.jpg') }}">
                <source src="{{ asset('assets/media/hero_sec_bg.b6400a35a97be7b9def1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        
            <!-- Foreground Content -->
            <div class="relative z-10">
                <a href="/">
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    <img src="{{ asset('assets/media/logo.2a73c7c0e27a7cf8aa894ae868af0160.svg') }}" alt="">
                </a>
            </div>
        
            <div class=" w-full sm:max-w-md mt-6 px-6 py-4  shadow-md overflow-hidden sm:rounded-lg relative z-10" style="    background: #26418bc4;">
                {{ $slot }}
            </div>
        </div>
        
    </body>
</html>
