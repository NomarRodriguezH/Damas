<?php
require_once '../../config/server.php';
session_start();
$idD = $_SESSION['id'];
$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$fecha = date('Y-m-d');
$damas='dama';

$dirLocal = "fotos_damas_post";
if (!file_exists($dirLocal)) {
    mkdir($dirLocal, 0777, true);
}

$miDir = opendir($dirLocal);

// Primer parte del formulario
$sql = "INSERT INTO damas_publicacion (idD, titulo, texto, status, fecha) VALUES ('$idD', '$titulo', '$texto', '1', '$fecha')";
if (mysqli_query($conex, $sql)) {


    if(isset($_POST['submit']) && count($_FILES['fotos']['name'])>0){

      foreach ($_FILES['fotos']['name'] as $i => $name) {
       
        if (strlen($_FILES['fotos']['name'][$i]) > 1) {
        
          $fileName          = $_FILES['fotos']['name'][$i];
          $sourceFoto        = $_FILES['fotos']['tmp_name'][$i];
          $tamanoFoto        = $_FILES["fotos"]['size'][$i];
          $restricciontamano = "500";//MB
          if((($tamanoFoto/1024)/1024)<=$restricciontamano){

          /**Renombrando cada foto que llega desde el formulario */
          $nuevoNombreFile    = uniqid();
          $extension_foto     = pathinfo($fileName, PATHINFO_EXTENSION);
          $nombreFoto         = $nuevoNombreFile.'_'.$damas.'.'.$extension_foto;


          $resultadoFotos     = $dirLocal.'/'.$nombreFoto;

            // Mover archivo a una ubicación permanente
            move_uploaded_file($sourceFoto, $resultadoFotos);
          
            // Insertar información del archivo en la base de datos
            $sql = "INSERT INTO damas_publicacion_fotos (idD, fotos) VALUES ('{$idD}', '{$nombreFoto}')";
            mysqli_query($conex, $sql);
            
          }else{
            echo'<p style="color:red">Existe una foto que supera el peso Maximo de '.$tamanoFoto.'</p>';
          }
        }
      }
    }











} else {
    echo '<p style="color:red">Ha ocurrido un error, contacta con el administrador.</p>';
    echo '<p style="color:red">Error: ' . mysqli_error($conex) . '</p>';
}
?>
