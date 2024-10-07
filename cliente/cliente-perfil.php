<?php
require_once '../C/clienteController.php';
session_start();
$cc = new clienteController();

$id_usuario = $_SESSION['id_cliente'];

$perfil = $cc->verPerfil($id_usuario);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
    <!-- Incluyendo el CDN de Bulma -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        /* Fondo gris claro para todo el cuerpo */
        body {
            background-color: #f5f5f5;
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
            max-width: 600px;
            margin: auto;
        }

        /* Botón de volver atrás en la esquina izquierda */
        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: rgba(50, 115, 220, 0.7); /* Azul semi-transparente */
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: rgba(39, 108, 218, 0.9); /* Azul más oscuro al pasar el ratón */
        }

        /* Estilos para la imagen del perfil */
        .profile-image {
            display: block;
            margin: 0 auto 1.5rem;
            border-radius: 50%;
            max-width: 150px;
            height: auto;
        }

        /* Estilo para los textos del perfil */
        .profile-info {
            text-align: center;
        }

        .profile-info p {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }

        .profile-info p strong {
            font-weight: bold;
        }

    </style>
</head>
<body>
    <button class="back-button" onclick="window.history.back();">
        ←
    </button>

    <div class="container full-height is-flex is-justify-content-center is-align-items-center">
        <div class="box">
            <?php if ($perfil): ?>
                <!-- Imagen de perfil -->
                <img src="../fotos/<?php echo htmlspecialchars($perfil['foto']); ?>" alt="Foto de perfil" class="profile-image">

                <!-- Información del perfil -->
                <div class="profile-info">
                    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($perfil['usuario_nombre']); ?></p>
                    <p><strong>Apellido:</strong> <?php echo htmlspecialchars($perfil['usuario_apellido']); ?></p>
                    <p><strong>Usuario:</strong> <?php echo htmlspecialchars($perfil['usuario_usuario']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($perfil['usuario_email']); ?></p>
                    <p><strong>Fecha de creación:</strong> <?php echo htmlspecialchars($perfil['creado']); ?></p>
                    <p><strong>Edad:</strong> <?php echo htmlspecialchars($perfil['edad']); ?></p>

                    <p>
                        <?php 
                        if ($perfil['S'] != '1' && $perfil['S'] != '0') {
                            echo "Cuenta sin restricciones";
                        } else {
                            echo "Cuenta bloqueada o con restricciones";
                        }
                        ?>
                    </p>

                    <p>
                        <?php 
                        echo ($perfil['S'] == '1') ? "Registrado como Suggar Daddy: SI" : "Registrado como Suggar Daddy: NO";
                        ?>
                    </p>

                    <p>
                        <?php 
                        echo ($perfil['SB'] == '1') ? "Registrado como Suggar Baby Hombre: SI" : "Registrado como Suggar Baby Hombre: NO";
                        ?>
                    </p>
                </div>
            <?php else: ?>
                <h1 class="title has-text-centered">No se encontró el perfil del usuario.</h1>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
