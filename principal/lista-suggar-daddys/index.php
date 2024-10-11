<?php  
    require_once '../../C/clientaController.php';
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Busqueda De S Daddy</title>
    <style type="text/css">
        .clientes-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    }

    .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        padding: 20px;
        width: calc(25% - 20px);
        box-sizing: border-box;
    }

    .card h2 {
        margin-top: 0;
        color: #333;
    }

    .card p {
        margin: 10px 0;
        color: #666;
    }

    </style>
</head>
<body>
    <h1>Lista De SG</h1>

    <?php $clienta = new clientaController();
    $res = $clienta->mostrarClientes();
    echo $res;?>

</body>
</html>