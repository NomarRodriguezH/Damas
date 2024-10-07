<?php 
session_start();
echo "ID: " . $_SESSION['id_cliente']; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <!-- Incluyendo el CDN de Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        /* Fondo gris claro para toda la página */
        body {
            background-color: #f5f5f5; /* Fondo gris claro para todo el cuerpo */
        }

        /* Contenedor de altura completa */
        .full-height {
            height: 100vh;
        }

        /* Caja centrada con sombra suave */
        .box {
            padding: 2rem;
            border-radius: 12px;
            background-color: #ffffff; /* Fondo blanco de la caja */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05); /* Sombra suave */
            border: 1px solid #dee2e6; /* Borde gris suave */
            text-align: center; /* Centrando el texto */
        }

        /* Estilización de los enlaces como botones */
        .box a {
            display: block;
            margin: 10px 0;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            background-color: #3273dc; /* Azul para los enlaces */
            color: white;
            border-radius: 6px;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        /* Efecto hover en los enlaces */
        .box a:hover {
            background-color: #276cda; /* Azul más oscuro en hover */
            transform: translateY(-2px); /* Efecto de elevación */
        }

        /* Espacio entre elementos */
        .box a + a {
            margin-top: 15px;
        }
    </style>
</head>
<body>

     <div class="container" style="margin-top: 50px;">

        <?php if (isset($_SESSION['alert'])): ?>
            <article class="message is-warning">
                <div class="message-header">
                    <p>Alerta</p>
                    <button class="delete" aria-label="delete" onclick="this.parentElement.parentElement.style.display='none'"></button>
                </div>
                <div class="message-body">
                    <?php
                    echo $_SESSION['alert'];
                    unset($_SESSION['alert']); // Limpiar el mensaje después de mostrarlo
                    ?>
                </div>
            </article>
        <?php endif; ?>
    </div>  

    <div class="container full-height is-flex is-justify-content-center is-align-items-center">
        <div class="box">
            <h1 class="title is-4">Opciones Como Cliente</h1>
            <a href="../V/explorar-damas.php">Explorar Damas Nocturnas</a>
            <a href="../V/explorar-damas.php">Explorar Suggar Babys</a>
            <a href="promocionarme.php">Promocionarme como Suggar Daddy</a>

            <a href="baby-hombre.php">Promocionarme como Suggar baby macho</a>

            <a href="historial.php">Ver mi historial de citas</a>

            <a href="cliente-perfil.php">Ver Mi Perfil</a>
            <a href="cerrar-sesion.php">Cerrar Sesion</a>
        </div>
    </div>

</body>
</html>
