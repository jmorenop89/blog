<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- link rel="stylesheet" href="/assets/css/style.css"-->
    {{ Html::style('assets/css/style.css') }}
    @yield('css')
</head>
<body>
    {{-- Esto es un comentario --}}
    <header>
        <h1>BIENVENIDOS A LARAVEL</h1>
    </header>
    <nav>
        <a href="">Inicio</a>
        <a href="">Nosotros</a>
        <a href="">Contacto</a>
    </nav>
    <div id="content" class="container">
        @yield('content')
    </div>
    <footer>
        Derechos reservados para mi y nadie mas
    </footer>
    @yield('script')
</body>
</html>