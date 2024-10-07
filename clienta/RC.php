<?php 

require_once '../C/clientaController.php';



if (isset($_POST['modulo_C'])) {

    $insC = new clientaController();

    if ($_POST['modulo_C'] == "completar") { 
        $respuesta = $insC->completarPerfil();
        $respuestaArray = json_decode($respuesta, true);
    }

    if ($_POST['modulo_C'] == "eliminar") {
        echo "hola";
    }
    
} else {
    echo "mamai";
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
            <strong><?php echo $respuestaArray['titulo']; ?></strong> <?php echo $respuestaArray['texto']; ?>
        </div>
    <?php endif; ?>
    <div>
    	<a href="completar-perfil.php">Volver</a>
    </div>
</body>
</html>
