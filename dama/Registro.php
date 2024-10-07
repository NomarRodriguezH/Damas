<!DOCTYPE html>
<html lang="es">
<?php include '../V/head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Dama</title>
    <meta charset="UTF-8">

</head>
<body>
    <h2>Registro de Dama</h2>
    <form action="../RutaRegistro.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="tipoRegistro" value="dama">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <select name="tipo" id="tipo">
                <option selected value="1">Normal</option>
                <option value="2">VIP</option>
                <option value="3">De compania</option>
                <option value="4">X</option>
                <option value="5">X</option>
                <option value="6">X</option>
                <option value="7">X</option>
            </select>
        </div>
        <div>
            <label for="correo">Correo electronico:</label>
            <input type="text" id="correo" name="correo" required>
        </div>
        <div>
            <label for="username">Nombre de usuario:</label>
            <input type="username" id="username" name="username" required>
        </div>
        <div>
            <label for="clave">Contraseña:</label>
            <input type="password" id="clave" name="clave" required>
        </div>
        <div>
            <label for="clave2">Confirmar Contraseña:</label>
            <input type="password" id="clave2" name="clave2" required>
        </div>
        <div>
            <label for="usuario_foto">Foto:</label>
            <input type="file" id="usuario_foto" name="usuario_foto" accept="image/jpeg, image/png">
        </div>
        <h3>Datos Adicionales Para Tu Perfil</h3>

         <div>
            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" required>
        </div>
         <div>
            <label for="medidas">Medidas:</label>
            <input type="text" id="medidas" name="medidas" required>
        </div>
         <div>
            <label for="estatura">Estatura:</label>
            <input type="text" id="estatura" name="estatura" required>
        </div>
         <div>
            <label for="descripcion">Descripción:</label>
            <textarea cols="50" rows="8" id="descripcion" name="descripcion">Soy una Nena en damas nocturnas buscandote a ti.
            </textarea>
        </div>

        <div>
            <button type="submit">Registrar</button>
        </div>
    </form>
    <div><a href="index.php">Volver</a></div>
</body>
</html>
