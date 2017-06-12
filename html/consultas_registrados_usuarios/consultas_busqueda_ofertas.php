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
          <a class="navbar-brand" href="../usuarios_registrados/indexusuario.php">BuscaJob</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="../usuarios_registrados/indexusuario.php">Inicio</a></li>
            <li><a href="../usuarios_registrados/ofertasempleo.php">Ofertas de Empleo</a></li>
            <!-- <li><a href="../usuarios_registrados/crearcv.php">Crea tu CV</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a><?php echo "Hola " . $_SESSION["nombre_usuario"] . " !"?></a></li>
            <li><a href="../logout.php">Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    <?php
    try{
      require("../datos_conexion_pdo.php");
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql="SELECT * FROM anuncios WHERE nombre_oferta like :busqueda and lugar_trabajo like :ciudad";
      $resultado=$base->prepare($sql);
      $busqueda=htmlentities (addslashes ($_GET["busqueda"]));
      $ciudad=htmlentities (addslashes ($_GET["ciudad"]));

      $resultado->bindValue(":busqueda", "%".$busqueda."%", PDO::PARAM_STR);
      $resultado->bindValue(":ciudad", "%".$ciudad."%", PDO::PARAM_STR);
      $resultado->execute();

      $numero_registro=$resultado->rowCount();


      if($numero_registro!=0){



        foreach ($resultado as $row) {

        echo "<div class='container' id='container'>";

        echo "<div class='row' id='cajaofertaempleo' style='margin-top: 2%'";

        echo "<div class='col-xs-12 col-md-4' id='oferta' >";

        echo "<div class='col-md-12' id='ofertasempleo'>";

        echo utf8_decode("<strong>" . "<p style='font-size: 1.5em;'><a href='../usuarios_registrados/anuncio_completo_usuarios.php?id=" . $row["id_anuncio"]. "'>" . $row["nombre_oferta"]. "</a></p>" . "</strong>");

        echo utf8_decode("<p>" . "<strong>Experiencia Minima: </strong>" . $row["experiencia_minima"]. "</p>");

        echo utf8_decode("<p>" . $row["descripcion"]. "</p style='padding-bottom: 2%;'>");

        echo utf8_decode("<strong>Duracion del Contrato: </strong>" . $row["duracion_contrato"] . " " . "<strong>Lugar de trabajo: </strong>" . $row["lugar_trabajo"] . " " . "<strong>Salario: </strong>" . $row["salario"]);

        echo "</div>";

        echo "</div>";

        echo "</div>";

          }


        }else{

          echo "En estos momentos no hay ofertas relacionadas con lo que esta buscando.";

        }

        }catch(Exception $e){

          die("Error: " . $e->getMessage());


    }

    ?>
    <div class="footer" id="footerbusqueda">
      <div class="container">
        <p>BuscaJob.</p>
      </div>
    </div>
  </body>
</html>
