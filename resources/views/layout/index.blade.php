<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('css')
</head>
<body>
    {{-- Esto es un comentario --}}
    <header>
        <h1>BIENVENIDOS A LARAVEL</h1>
    </header>
    <nav>
        <a href="{{ route('index') }}">Inicio</a>
        <a href="{{ route('about') }}">Nosotros</a>
        <a href="{{ route('contact') }}">Contacto</a>
    </nav>
    <div id="content">
        @yield('content')
    </div>
    <footer>
        Derechos reservados para mi y nadie mas
    </footer>
    @yield('script')
</body>
</html>