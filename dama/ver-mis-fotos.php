<?php 
require_once '../../config/server.php';

session_start();
$idD=$_SESSION['id'];
$s="SELECT * FROM damas_publicacion_fotos WHERE idD='$idD'";
$resultadoSQL = mysqli_query($conex, $s);
   
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>




    <div class='container'>
        <?php
        while ($dataFotos = mysqli_fetch_array($resultadoSQL)) { ?>
            <img src="fotos_damas_post/<?php echo $dataFotos['fotos'] . ".jpg"; ?>"  class="section__masonry-wrapper__item-img"><br>
        <?php } ?>

    </div>

 
 </body>
 </html>