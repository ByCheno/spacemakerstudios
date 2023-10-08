<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1em 2em;
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div>
            <a href="#" style="color: white; text-decoration: none;">Mi Proyecto</a>
        </div>
        <div>
            <a href="#" style="color: white; text-decoration: none; margin-right: 1em;">Inicio</a>
            <a href="#" style="color: white; text-decoration: none; margin-right: 1em;">Acerca de</a>
            <a href="#" style="color: white; text-decoration: none; margin-right: 1em;">Contacto</a>
            <button style="padding: 0.5em 1em; background-color: #007BFF; color: white; border: none; border-radius: 5px;">Iniciar sesión</button>
        </div>
    </div>

    <!-- Contenido principal -->
    <div style="padding: 2em;">
        <h1>Bienvenido a mi proyecto Laravel</h1>
        <p>Este es un proyecto de ejemplo creado con Laravel.</p>
    </div>
</body>

</html>
