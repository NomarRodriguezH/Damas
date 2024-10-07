<?php	
require_once '../C/ClienteController.php';


	if(isset($_POST['modulo_C'])){

		$cliente = new ClienteController();

		if($_POST['modulo_C']=="Promocionarme"){
			$respuesta=  $cliente->promocionar();
			$respuestaArray= json_decode($respuesta, true);
		}

		if($_POST['modulo_C']=="SBH"){
			$respuesta=  $cliente->SBH();
			$respuestaArray= json_decode($respuesta, true);
		}
		
	} else {
    echo "<p style='color: red; font-size:28px;'>NO TIENES ACCESO A ESTA PAGINA</p>";
	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado de Completar Perfil</title>
    <style>
        .alert {
            padding: 20px;
            margin-bottom: 15px;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <?php if (isset($respuestaArray)): ?>
        <div class="alert <?php echo $respuestaArray['icono'] == 'error' ? 'alert-error' : 'alert-success'; ?>">
            <strong><?php echo $respuestaArray['titulo']; ?></strong> 
            <?php echo $respuestaArray['texto']; ?>
        </div>
    <?php endif; ?>
    <div>
    	<button onclick="window.history.back();">Volver</button> 
    </div>
</body>
</html>
