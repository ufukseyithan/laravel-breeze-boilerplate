<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('components.admin.layouts.navigation')

            <header class="bg-white shadow">
                <div class="container py-4">
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ $header }}
                    </h1>
                </div>
            </header>

            <main class="py-8">
                <div class="container p-8 rounded bg-white overflow-hidden shadow">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>
</html>
