<?php 
include '../V/head.php'; 
session_start();?>
<div class="main-container">

<form class="box login" action="" method="POST" autocomplete="off" >
		<h5 class="title is-5 has-text-centered is-uppercase">Ingreso Exclusivamente Para Clienta </h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="login_usuario"  maxlength="20" required >
			</div>
		</div>

		<div class="field">
		  	<label class="label">Clave</label>
		  	<div class="control">
		    	<input class="input" type="password" name="login_clave"  maxlength="100" required >
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-info is-rounded">Iniciar sesion</button>
		</p>

	</form>
	            
</div>

<?php
	require_once '../C/loginController.php';
	if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
		$insLogin = new loginController();
		$insLogin->iniciarSesionClientaControlador();
	}
?>