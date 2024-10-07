<?php 
include '../V/head.php'; 
session_start();

if(isset($_SESSION["id_cliente"])){
	header("location: panel.php");
}
?>

<!-- Estilos personalizados -->
<style>
    /* Contenedor principal centrado y con fondo moderno */
    .main-container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #e9ecef; /* Fondo gris claro moderno */
    }

    /* Caja de login más minimalista y moderna */
    .box.login {
        max-width: 380px;
        width: 100%;
        padding: 2rem;
        border-radius: 12px;
        background-color: #ffffff; /* Fondo blanco para un look limpio */
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05); /* Sombra suave para dar profundidad */
        border: 1px solid #dee2e6; /* Borde gris suave */
        text-align: center; /* Centra todo el contenido dentro del formulario */
    }

    /* Título centrado con estilo moderno */
    .title.is-5 {
        font-size: 1.2rem;
        font-weight: 700;
        color: #212529; /* Color de texto oscuro y moderno */
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 1.5rem;
    }

    /* Inputs centrados con diseño minimalista */
    .input {
        border-radius: 6px;
        border: 1px solid #ced4da; /* Borde gris claro */
        padding: 0.75rem;
        font-size: 1rem;
        background-color: #f8f9fa; /* Fondo gris suave para inputs */
        width: 100%; /* Asegura que los inputs llenen el espacio disponible */
        max-width: 300px; /* Limita el ancho máximo para que se vean más compactos */
        margin: 0 auto; /* Centra los inputs */
    }

    /* Efecto de foco en inputs */
    .input:focus {
        border-color: #0d6efd; /* Color azul moderno */
        box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
    }

    /* Botón con estilo moderno y color atractivo */
    .button.is-info {
        background-color: #0d6efd; /* Azul moderno */
        border-color: transparent;
        padding: 0.75rem;
        font-size: 1rem;
        border-radius: 6px;
        width: 100%;
        max-width: 300px; /* Asegura que el botón esté alineado con los inputs */
        margin: 0 auto; /* Centra el botón */
        transition: background-color 0.3s ease;
    }

    /* Efecto hover moderno en el botón */
    .button.is-info:hover {
        background-color: #0b5ed7; /* Azul más oscuro en hover */
    }

    /* Márgenes personalizados para una separación adecuada */
    .has-text-centered {
        text-align: center;
    }

    .mb-4 {
        margin-bottom: 1.5rem;
    }

    .mt-3 {
        margin-top: 1rem;
    }
</style>

<div class="main-container">
    <form class="box login" action="" method="POST" autocomplete="off">
        <h5 class="title is-5 has-text-centered">Iniciar sesión</h5>

        <div class="field has-text-centered">
            <label class="label">Usuario</label>
            <div class="control">
                <input class="input" type="text" name="login_usuario" maxlength="20" required>
            </div>
        </div>

        <div class="field has-text-centered">
            <label class="label">Clave</label>
            <div class="control">
                <input class="input" type="password" name="login_clave"  maxlength="100" required>
            </div>
        </div>

        <p class="has-text-centered mb-4 mt-3">
            <button type="submit" class="button is-info">Iniciar sesión</button>
        </p>
    </form>
</div>

<?php
    require_once '../C/loginController.php';
    if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
        $insLogin = new loginController();
        $insLogin->iniciarSesionControlador();
    }
?>
