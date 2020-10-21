<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nombre de la app - @yield ('titulo')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @section('barralateral')
    Esto es la barra lateral
    @show
    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>