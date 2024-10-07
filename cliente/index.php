<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <!-- Incluyendo el CDN de Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        /* Contenedor de altura completa */
        .full-height {
            height: 100vh;
            background-color: #e9ecef; /* Fondo gris claro moderno */
        }

        /* Caja centrada con sombra suave */
        .box {
            padding: 2rem;
            border-radius: 12px;
            background-color: #ffffff; /* Fondo blanco limpio */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05); /* Sombra suave para profundidad */
            border: 1px solid #dee2e6; /* Borde gris suave */
        }

        /* Título estilizado */
        .title.is-4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #212529; /* Color oscuro y moderno */
        }

        /* Espacio entre botones */
        .buttons a {
            margin: 10px 0;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem; /* Botones más grandes y cómodos */
        }

        /* Botones con transición suave */
        .button {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        /* Efecto hover en botones */
        .button:hover {
            transform: translateY(-2px); /* Efecto de elevación al pasar el mouse */
        }
    </style>
</head>
<body>
    <!-- Contenedor principal -->
    <div class="container full-height is-flex is-justify-content-center is-align-items-center">
        <!-- Div centrado con botones -->
        <div class="box has-text-centered">
            <h1 class="title is-4">Bienvenido A La Area De Clientes</h1>
            <div class="buttons is-flex-direction-column">
                <a href="ingreso-cliente.php" class="button is-primary is-large">Iniciar sesión</a>
                <a href="Registro.php" class="button is-link is-large">Registrarse como cliente</a>
            </div>
        </div>
    </div>
</body>
</html>
