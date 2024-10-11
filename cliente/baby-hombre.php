<?php 
    include "../V/head.php"; 
    session_start();
    $id = $_SESSION['id_cliente'];
    include "../C/clienteController.php"; 
    $objC = new clienteController();
    $dato = $objC->verDato("SB", "usuario", "id", $id);
    //$campo, $tabla, $campo2, $id

    if ($dato=='1') {
          $_SESSION['alert'] = "Ya llenaste el formulario";
          header("Location: panel.php");
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promocionarme Como SB Hombre</title>
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

        /* Estilización de los campos del formulario */
        .box input {
            width: 100%;
            margin-bottom: 1rem;
            padding: 0.75rem;
            border-radius: 6px;
            border: 1px solid #ddd;
        }

        /* Estilización del botón */
        .box button {
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            background-color: #3273dc;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .box button:hover {
            background-color: #276cda;
        }

        /* Espaciado en los labels */
        .box label {
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
        }

        /* Título estilizado */
        .title {
            font-size: 1.5rem;
            font-weight: 700;
            text-align: center;
        }

        .subtitle {
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 2rem;
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
    </style>
</head>
<body>
    <!-- Botón de volver atrás -->
    <button class="back-button" onclick="window.history.back();">
        ←
    </button>

    <div class="container full-height is-flex is-justify-content-center is-align-items-center">
        <div class="box">
            <h1 class="title">Promocionarme Como Suggar Baby Hombre</h1>
            <h2 class="subtitle">LLena el formulario</h2>

            <form action="RC.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="modulo_C" value="SBH">
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div>
                    <label for="ingresos">Estatura:</label>
                    <input type="number" id="Estatura" name="Estatura" required>
                </div>
                <div>
                    <label for="trabajo">Peso:</label>
                    <input type="number" id="Peso" name="Peso" required>
                </div>
                <div>
                    <label for="zona">Medidas:</label>
                    <input type="text" id="Medidas" name="Medidas" required>
                </div>
                <div>
                    <label for="rango">Color de piel:</label>
                    <input type="text" id="Color" name="Color" required>
                </div>
                <div>
                    <label for="gustos">Descripción general de ti</label>
                    <input type="text" id="general" name="general">
                </div>

                 <div>
                    <label for="gustos">Como es tu personalidad</label>
                    <input type="text" id="personalidad" name="personalidad">
                </div>

                 <div>
                    <label for="gustos">Edad</label>
                    <input type="text" id="Edad" name="Edad">
                </div>


                 <div>
                    <label for="gustos">Tipo de cuerpo</label>
                    <input type="text" id="Tipo" name="Tipo">
                </div>

                 <div>
                    <label for="gustos">Localidad</label>
                    <input type="text" id="Localidad" name="Localidad">
                </div>


                <div>
                    <label for="genero">¿Que buscas?</label>
                    

                    <label>
                       <input type="radio" name="genero" value="sd" required> Suggar daddy
                    </label>
                     <input type="radio" name="genero" value="sm" required> Suggar Mommy
                    </label>
                </div>
                
                <div>
                    <button type="submit">Enviar Registro</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

