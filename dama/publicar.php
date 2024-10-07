<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir multiples archivos con PHP - MySQL</title>
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

<div class="container">
  <div class="row justify-content-md-center mt-5">
    <div class="col-md-12">
      <h2 class="text-center  font-weight-bold">Hacer publicacion<hr></h2>
  </div>

<div class="col-md-5">
    <form action="subirFoto.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="propietario">Titulo</label>
        <input type="text" name="titulo" class="form-control" >
      </div>

      <div class="form-group">
        <label for="Placa">Texto</label>
        <input type="text" name="texto" class="form-control">
      </div>

      <div class="form-group">
        <label for="fotos_cars">Fotos (Para que las fotos sean verificada spor un administrador no deben tener filtro ni censura).</label>
        <input type="file"  name="fotos[]" multiple accept="image/*"  class="form-control-file">
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Enviar Formulario</button>
    </form>
</div>
</body>
</html>