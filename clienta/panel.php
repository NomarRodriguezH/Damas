<?php 
include '../V/head.php';
session_start(); 
$id= $_SESSION['id'];
$img=$_SESSION['foto'];



if ($_SESSION['tipo']=='1') {
	echo "Bienvenida SB". $_SESSION['nombre'];
}else if ($_SESSION['tipo']=='2') {
	header("Location: suggar-mommy/index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel De SB</title>
</head>
<body>
	<div>
		<p>Bienvenida, aqui podras completar la información de tu perfil para empezar a buscar tu SD.</p>
		<a href="completar-perfil.php">Completar Perfil</a>
	</div>
	<div>
		<p><a href="ver-suggars.php">Ver lista de SD disponibles.</a></p>
	</div>
	<img height="90px" width="90px" src="<?php echo "../../imgCLientas/".$img ?>" >
</body>
</html>