<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="grid grid-cols-[180px_1fr_1fr] grid-rows-[56px_1fr] h-screen">
        {{-- ############################ MENU LATERAL ########################## --}}
        <div class="row-[1/3] bg-white">
            <div class="h-14 flex items-center justify-center border-b-1 border-gray-50 gap-2">
                <img src="{{asset('images/Recurso12.png')}}" alt="logotipo" class="w-9">
                <div class="flex gap-1 text-sky-900">
                    Panel<span class="font-bold">Control</span>
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
        {{-- ############### FIN MENU LATERIAL ########################## --}}
        <div class="col-span-2 h-14 sticky top-0 z-50">
            @include('layouts.nav')
        </div>
        <div class="col-span-2 border-t-4 border-gray-100">
            {{-- @yield('content') --}}
        </div>
    </div>
</body>

</html>