<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    require("../datos_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

    if(mysqli_connect_errno()){

      echo "Fallo al conectar la BBDD";

      exit();

    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $id =$_GET["id_anuncio"];

    $consulta=("DELETE FROM anuncios WHERE id_anuncio = $id");

    $resultados=mysqli_query($conexion, $consulta);

    echo "<script>window.location ='ofertas.php'</script>";

    mysqli_close($conexion);
     ?>
  </body>
</html>
