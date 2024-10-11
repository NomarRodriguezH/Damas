<!DOCTYPE html>
<html lang="es">
<?php include '../V/head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <!-- Incluyendo Bulma -->
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

        /* Estilo para el título */
        .title {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #3273dc; /* Color del título */
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

        /* Espaciado entre los campos del formulario */
        .field {
            margin-bottom: 1.5rem;
        }

        /* Estilo del botón de registro */
        .button.is-primary {
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Botón de volver atrás -->
    <button class="back-button" onclick="window.history.back();">
        ←
    </button>

    <!-- Contenedor principal -->
    <div class="container full-height is-flex is-justify-content-center is-align-items-center">
        <div class="box">
            <h2 class="title">Registro de Usuario</h2>
            <form action="../RutaRegistro.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="tipoRegistro" value="cliente">
                
                <div class="field">
                    <label for="usuario_nombre" class="label">Nombre:</label>
                    <div class="control">
                        <input class="input" type="text" id="usuario_nombre" name="usuario_nombre" required>
                    </div>
                </div>
                
                <div class="field">
                    <label for="usuario_apellido" class="label">Apellido:</label>
                    <div class="control">
                        <input class="input" type="text" id="usuario_apellido" name="usuario_apellido" required>
                    </div>
                </div>
                
                <div class="field">
                    <label for="usuario_usuario" class="label">Usuario:</label>
                    <div class="control">
                        <input class="input" type="text" id="usuario_usuario" name="usuario_usuario" required>
                    </div>
                </div>
                
                <div class="field">
                    <label for="usuario_email" class="label">Email:</label>
                    <div class="control">
                        <input class="input" type="email" id="usuario_email" name="usuario_email" required>
                    </div>
                </div>
                
                <div class="field">
                    <label for="usuario_clave_1" class="label">Contraseña:</label>
                    <div class="control">
                        <input class="input" type="password" id="usuario_clave_1" name="usuario_clave_1" required>
                    </div>
                </div>
                
                <div class="field">
                    <label for="usuario_clave_2" class="label">Confirmar Contraseña:</label>
                    <div class="control">
                        <input class="input" type="password" id="usuario_clave_2" name="usuario_clave_2" required>
                    </div>
                </div>
                
                <div class="field">
                    <label for="usuario_foto" class="label">Foto:</label>
                    <div class="control">
                        <input class="input" type="file" id="usuario_foto" name="usuario_foto" accept="image/jpeg, image/png">
                    </div>
                </div>
                
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
