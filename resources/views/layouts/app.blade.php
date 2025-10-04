<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('logo.svg') }}" type="image/svg+xml">
    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    
</head>
<body class="w-screen font-Inter flex flex-col min-h-screen">
    @include('layouts.navigation')

    <main class="flex flex-col flex-1 justify-center items-center text-xl bg-[#F6F7F8]">
        {{ $slot }}
    </main>
</body>
</html>
