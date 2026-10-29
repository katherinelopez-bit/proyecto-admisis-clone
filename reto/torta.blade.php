<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo','Pasteleria la Espiga')</title>
</head>
<body>
    <header>
        <h1>Pasteleria La Espiga</h1>
    </header>

    <main>
        @yield('contenido')

        <section>
            <p>
                Hola a todos!!. Presentamos nuestras mejores tortas, elaboradas con calidad
                y dedicación, con precios accesibles para nuestros clientes.
            </p>
        </section>
    </main>

    <footer>
        Integradora - Katherine Lopez Ramos - 27 de octubre de 2026
    </footer>
</body>
</html>