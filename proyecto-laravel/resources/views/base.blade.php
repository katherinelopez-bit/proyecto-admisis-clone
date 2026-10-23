<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('titulo','Sitema Contable - Con Laravel')</title>
</head>
<body>
    <header>
        <h1>Sistema Contable</h1>
        <nav>
            <a href="/inicio">Inicio</a>
            <a href="/caracteristicas">Caracteristicas</a>
            <a href="/modulos">Modulos</a>
            <a href="/reportes">Reportes</a>
            <a href="/contacto">Contactenos</a>
        </nav>
    </header>
    <main>
        @yield('contenido')
    </main>
    <footer>
        <p>Sistema Contable - Bolivia</p>
        <p>Gestión contable para contadores</p>
        <p>Katherine Lopez Ramos</p>
    </footer>

</body>
</html>