<!DOCTYPE html>
<html lang="es">
<?php include '../V/head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <meta charset="UTF-8">

</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="../RutaRegistro.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="tipoRegistro" value="cliente">
        <div>
            <label for="usuario_nombre">Nombre:</label>
            <input type="text" id="usuario_nombre" name="usuario_nombre" required>
        </div>
        <div>
            <label for="usuario_apellido">Apellido:</label>
            <input type="text" id="usuario_apellido" name="usuario_apellido" required>
        </div>
        <div>
            <label for="usuario_usuario">Usuario:</label>
            <input type="text" id="usuario_usuario" name="usuario_usuario" required>
        </div>
        <div>
            <label for="usuario_email">Email:</label>
            <input type="email" id="usuario_email" name="usuario_email" required>
        </div>
        <div>
            <label for="usuario_clave_1">Contraseña:</label>
            <input type="password" id="usuario_clave_1" name="usuario_clave_1" required>
        </div>
        <div>
            <label for="usuario_clave_2">Confirmar Contraseña:</label>
            <input type="password" id="usuario_clave_2" name="usuario_clave_2" required>
        </div>
        <div>
            <label for="usuario_foto">Foto:</label>
            <input type="file" id="usuario_foto" name="usuario_foto" accept="image/jpeg, image/png">
        </div>
        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
    <div><a href="index.php">Volver</a></div>
</body>
</html>
