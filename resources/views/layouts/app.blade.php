<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Admin Sena</title>
</head>
<body>
    <header>
        @include('includes.navbar')
    </header>

    <main>
        @if (session('success'))
            <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
        @endif

        @yield('content')
    </main>
</body>
</html>
