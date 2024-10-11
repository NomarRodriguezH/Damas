<?php
    include '../../C/ClienteController.php';
error_reporting(E_ALL & ~E_WARNING); // Reporta todos los errores excepto las advertencias
ini_set('display_errors', 0); // No muestra errores en la salida

    $clienta= new ClienteController();


    $resultado=$clienta->mostrarDamas();
    echo "<br>";
    echo $resultado;

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">

