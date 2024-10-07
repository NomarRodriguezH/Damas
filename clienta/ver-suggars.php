<?php 
	require_once '../C/clientaController.php';
	if (isset($_GET['id']) || is_numeric($_GET['id']) ) {
		$id= $_GET['id'];
	}else {
		echo "Favor de seleccionar un SG desde la pagina principal.";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ver Suggar</title>
</head>
	<body>
		<div><h1>Información Completa De SG</h1></div>


		<?php $clienta = new clientaController();
		$res = $clienta->verInformacionSuggar($id);
		echo $res;?>
	</body>
</html>