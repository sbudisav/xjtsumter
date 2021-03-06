<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.24/default/snipcart.css" />

        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        <link rel="preconnect" href="https://app.snipcart.com">
        <link rel="preconnect" href="https://cdn.snipcart.com">
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main>
                <div class="container flex mx-auto">
                    <div class="px-12 py-32">
                        @include ('_sidebar')
                    </div>

                    <div class="lg:flex-1">
                        {{ $slot }}
                    </div>
                </div>
            </main>


            <!-- Page Footer -->
            <footer class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    Here is Footing
                </div>
            </footer>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
