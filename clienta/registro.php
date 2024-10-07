<!DOCTYPE html>
<html lang="es">
<?php include '../V/head.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Dama</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h2 class="title">Registro de Dama</h2>
            <form class="box" action="../RutaRegistro.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" name="tipoRegistro" value="clienta">
                
                <div class="field">
                    <label class="label" for="nombre">Nombre:</label>
                    <div class="control">
                        <input class="input" type="text" id="nombre" name="nombre" autocomplete="off" required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="apellido">Apellido:</label>
                    <div class="control">
                        <input class="input" type="text" id="apellido" name="apellido" autocomplete="off" required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="tipo">Tipo:</label>
                    <div class="control">
                        <div class="select">
                            <select name="tipo" id="tipo" autocomplete="off">
                                <option selected value="1">Estoy buscando Suggar</option>
                                <option value="2">Soy Suggar Mommy</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="correo">Correo electrónico:</label>
                    <div class="control">
                        <input class="input" type="email" id="correo" name="correo" autocomplete="off" required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="username">Nombre de usuario:</label>
                    <div class="control">
                        <input class="input" type="text" id="username" name="username" autocomplete="off" required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="clave">Contraseña:</label>
                    <div class="control">
                        <input class="input" type="password" id="clave" name="clave" autocomplete="off" required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="clave2">Confirmar Contraseña:</label>
                    <div class="control">
                        <input class="input" type="password" id="clave2" name="clave2" autocomplete="off" required>
                    </div>
                </div>
                
                <div class="field">
                    <label class="label" for="usuario_foto">Foto:</label>
                    <div class="control">
                        <input class="input" type="file" id="usuario_foto" name="usuario_foto" accept="image/jpeg, image/png">
                    </div>
                </div>
                
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-info is-rounded">Registrar</button>
                    </div>
                </div>
            </form>
            <div>
                <a href="index.php" class="button is-link is-light">Volver</a>
            </div>
        </div>
    </section>
</body>
</html>
