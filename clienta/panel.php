<?php 
    include '../V/head.php';
    session_start(); 
    $id = $_SESSION['id'];
    $img = $_SESSION['foto'];

    if ($_SESSION['tipo'] == '1') {
    } else if ($_SESSION['tipo'] == '2') {
        header("Location: suggar-mommy/index.php");
    }else {
    	header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel De SB</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body {
            background-color: #f5f5f5; /* Fondo gris claro */
        }
        .box {
            background-color: white; /* Fondo blanco */
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
            padding: 20px; /* Espaciado interno */
            max-width: 500px; /* Ancho máximo de la caja */
            margin: 20px auto; /* Centramos la caja */
            text-align: center; /* Texto centrado */
        }
        .title {
            color: #363636; /* Color del título */
        }
        .button {
            background-color: #3273dc; /* Color moderno para los botones */
            border-radius: 5px; /* Bordes redondeados */
            margin: 10px; /* Espaciado entre botones */
        }
        .button.is-link {
            background-color: #23d160; /* Color alternativo para botones */
        }
        img {
            border-radius: 50%; /* Imagen redondeada */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra suave en la imagen */
        }
        .section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="box">
            <h1 class="title">Panel De Administración</h1>
            <p>Bienvenida <?php echo $_SESSION['nombre'] ?>, aquí podrás completar la información de tu perfil.</p>

            <div>
                <a href="completar-perfil.php" class="button is-info">Completar mi perfil</a>
                <a href="ver-suggars.php" class="button is-info">Ver lista de SD disponibles</a>
                <a href="#" class="button is-info">Propuestas de SD</a>
                <a href="mi-perfil.php" class="button is-info">Ver mi perfil</a>
                <a href="formas-de-contacto.php" class="button is-info">Formas para contactarme</a>
                <a href="cerrar-sesion.php" class="button is-link">Cerrar sesión</a>
            </div>
            <img height="90px" width="90px" src="<?php echo '../fotos/clientas/'.$img ?>" alt="Foto de perfil">
        </div>
    </section>
</body>
</html>