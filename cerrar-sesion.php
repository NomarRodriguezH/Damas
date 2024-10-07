<?php  
	include 'C/loginController.php';
	include 'M/mainModel.php';
	$cs = new loginController;
	echo $cs->cerrarSesionControlador();
?>