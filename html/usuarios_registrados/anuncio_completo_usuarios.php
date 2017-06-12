<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ofertas de Empleo</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-default" id="barraprincipal">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="indexusuario.php">BuscaJob</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="indexusuario.php">Inicio</a></li>
            <li><a href="ofertasempleo.php">Ofertas de Empleo</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a><?php echo "Hola " . $_SESSION["nombre_usuario"]     . " !"?></a></li>
            <li><a href="../logout.php">Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
      <div class='row' id='cajaofertasempleo'>
          <?php include("../consultas/consulta_anuncio_completo.php"); ?>
      </div>
      <div class="footer" id="footer">
        <div class="container">
          <p>BuscaJob.</p>
        </div>
      </div>
  </body>
</html>
