<?php 
	session_start();
    include '../C/clientaController.php';
    $id = $_SESSION['id']; 
    $clienta = new clientaController();
    $resultado = $clienta->verificarPerfilCompleto($id);

    if ($resultado == "si") {
        echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
        echo '<script>
            Swal.fire({
                title: "¡Atención!",
                text: "Ya llenaste el formulario.",
                icon: "warning",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "panel.php";
                }
            });
        </script>';
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar Perfil</title>
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
        }
        .title {
            text-align: center;
            color: #363636;
        }
        .button.is-info {
            background-color: #3273dc; /* Color moderno */
            border-radius: 5px; /* Bordes redondeados */
        }
        .field {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <section class="section">
        <div class="box">
            <h1 class="title">Completar Perfil</h1>
            <form action="RC.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="field">
                    <label class="label" for="estatura">Estatura:</label>
                    <div class="control">
                        <input class="input" type="number" id="estatura" name="estatura" autocomplete="off" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="peso">Peso:</label>
                    <div class="control">
                        <input class="input" type="number" id="peso" name="peso" autocomplete="off" required>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="bustoT">Tamaño de tetas:</label>
                    <div class="control">
                        <select name="bustoT" id="bustoT">       
                            <option value="1">Pequeñas (limones)</option>
                            <option value="2">Medianas (Naranjas)</option>
                            <option value="3">Grandes (Melones)</option>
                            <option value="4">Muy Grandes (Sandias)</option>
                        </select>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="bustoTi">Busto:</label>
                    <div class="control">
                        <select name="bustoTi" id="bustoTi">       
                            <option value="1">Redondo</option>
                            <option value="2">Pera</option>
                            <option value="3">Reloj de arena</option>
                            <option value="4">Triángulo invertido</option>
                            <option value="5">Asimétrico</option>
                            <option value="6">Forma de "T"</option>
                            <option value="7">Forma de "V"</option>
                            <option value="8">Caído</option>
                        </select>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="bustoTip">Busto:</label>
                    <div class="control">    
                            <input type="radio" name="bustoTip" value="N">Natural
                            <input type="radio" name="bustoTip" value="O">Operado         
                        </select>
                    </div>
                </div>



                <div class="field">
                    <label class="label" for="medidas">Medidas:</label>
                    <div class="control">
                        <div class="select">
                            <select name="medidas" id="medidas" autocomplete="off">
                                <option selected value="1">60x90</option>
                                <option value="2">60x80</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="colorPiel">Color de Piel:</label>
                    <div class="control">
                        <div class="select">
                            <select name="colorPiel" id="colorPiel" autocomplete="off">
                                <option selected value="1">Blanca</option>
                                <option value="2">Morena</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="descripcion">Descripción:</label>
                    <div class="control">
                        <textarea id="descripcion" name="descripcion" class="textarea" placeholder="Cómo eres, qué te gusta hacer, por qué buscas un SD..."></textarea>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="personalidad">Personalidad:</label>
                    <div class="control">
                        <input class="input" type="text" id="personalidad" name="personalidad" autocomplete="off" required>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="edad">Edad:</label>
                    <div class="control">
                        <input class="input" type="number" id="edad" name="edad" autocomplete="off" required>
                    </div>
                </div>


                <div class="field">
                    <label class="label" for="tipoCuerpo">Tipo de cuerpo:</label>
                    <div class="control">
                        <div class="select">
                            <select name="tipoCuerpo" id="tipoCuerpo" autocomplete="off">
                                <option selected value="1">Manzana</option>
                                <option value="2">Copa</option>
                            </select>
                        </div>
                    </div>
                </div>


                <!-- Agregando más campos del formulario de forma similar -->

                <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
                <input type="hidden" name="modulo_C" value="completar">

                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-info is-rounded">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>

<?php
	require_once "../C/clientaController.php";
	if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
		$obj = new clientaController();
		$obj->iniciarSesionClientaControlador();
	}
?>
