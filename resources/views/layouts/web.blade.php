<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cursos</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        {{--<script src="{{ mix('js/app.js') }}" defer></script>--}}
    </head>
    <body>
        <header class="shadow-lg">
            <div class="bg-gray-900 py-1"></div>
            <nav class="bg-gray-800 py-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/isotipo-weku.png') }}" class="h-8 mx-auto">
                </a>
            </nav>
        </header>

        <main class="py-10">
            <div class="container mx-auto px-4">
                @yield('content')
            </div>
        </main>

        <footer class="py-4 text-center">
            @auth
                <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">
                    Dashboard
                </a>
            @else
                <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">
                    Login
                </a>
                <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </a>
            @endauth
        </footer>
    </body>
</html>
