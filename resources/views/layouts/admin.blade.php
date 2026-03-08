<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin') - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>
<body class="min-h-screen bg-gray-100 text-gray-900">
    <div class="flex">
        @include('components.sidebar')

        <div class="flex-1">
            <header class="bg-white shadow-sm border-b px-8 py-4">
                <h2 class="text-lg font-semibold text-gray-800">@yield('page-title', 'Dashboard')</h2>
            </header>

            <main class="p-8">
                @if(session('success'))
                    <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="mb-4 p-4 bg-red-100 text-red-800 rounded">{{ session('error') }}</div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>
