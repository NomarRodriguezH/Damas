<?php ?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Clienta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        body {
            background-color: #f5f5f5; /* Fondo gris claro */
        }
        .box {
            background-color: white; /* Fondo blanco para la caja */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar is-light" role="navigation" aria-label="main navigation">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item" href="iniciar-sesion.php">
                        Iniciar sesión
                    </a>
                    <a class="navbar-item" href="registro.php">
                        Registrarse como SB o SM
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <section class="section">
        <div class="container">
            <div class="box has-text-centered p-6">
                <h1 class="title is-4">Bienvenida al Panel Clienta</h1>
                <div class="content">
                    <p>Aquí podrás registrarte como SB y buscar a tu SD que se ajuste a lo que buscas y a lo que ofreces.</p>
                    <br>
                    <p>Pero también podrás registrarte como SM para buscar a tu suministro de C.</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
