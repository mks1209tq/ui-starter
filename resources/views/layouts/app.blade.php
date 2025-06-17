<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Demo Site') }}</title>


    <!-- Scripts for Alpine.js to disable flash of content -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased h-full bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100">


    <div x-data="{ open: false }">
        <x-nav.app-mobile-nav />

        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <x-nav.app-desktop-nav />

            <!-- Main content area -->
            <div class="flex-1 lg:ml-20 flex flex-col">
                <x-app-sticky-top />
                {{ $slot }}
            </div>
        </div>
    </div>


    <x-app-footer />
    <x-app-global-notify />
    
</body>

</html>