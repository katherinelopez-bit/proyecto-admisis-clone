<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo', 'Sistema Contable')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header id="inicio">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Cerrar sesión</button>
        </form>
        <h1>Sistema Contable</h1>
        <p>Gestión contable para contadores</p>

        <button type="button" id="btn-tema" class="btn-modo">
            Modo día
        </button>
         
    </header>

    <nav id="menu">
        <button type="button" id="btn-menu" class="hamburguesa">
            ☰ Menú
        </button>

        <ul>
            <li><a href="{{ route('inicio') }}">Inicio</a></li>
            <li><a href="{{ url('/caracteristicas') }}">Características</a></li>
            <li><a href="{{ url('/modulos') }}">Módulos</a></li>
            <li><a href="{{ url('/reportes') }}">Reportes</a></li>
            <li><a href="{{ url('/contacto') }}">Contacto</a></li>
            <li><a href="{{ url('/torta') }}">tortas</a></li>
        </ul>
    </nav>

    <main>
       
        @yield('contenido')
    </main>

    <footer>
        <p>Sistema Contable - Bolivia</p>
        <p>Solución de gestión contable para Bolivia</p>
        <p>Katherine Lopez Ramos</p>

       
    </footer>

  
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>