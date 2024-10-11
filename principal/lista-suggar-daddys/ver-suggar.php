<?php 
    require_once '../../C/clientaController.php';
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
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

</head>
	<body>
		<center><h1>Información Completa De SG</h1></center>
		<?php $clienta = new clientaController();
		$res = $clienta->verInformacionSuggar($id);
		echo $res;?>
		<button></button>
	</body>
</html>