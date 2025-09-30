<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Mi Blog')</title>
</head>
<body>
    <header>
        <h1>Mi sitio web 🚀</h1>
        <nav>
            <a href="/usuarios">Usuarios</a> |
            <a href="/perfil/Marlon/22">Perfil</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>© 2025 - Blog de Marlon</p>
    </footer>
</body>
</html>