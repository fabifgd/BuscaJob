<?php

require("../datos_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

    if(mysqli_connect_errno()){

      echo "Fallo al conectar la BBDD";

      exit();

    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta="SELECT * FROM anuncios WHERE id_usuario = $_SESSION[id_usuario]";

    $resultados=mysqli_query($conexion, $consulta);

    while (($fila=mysqli_fetch_row($resultados))==true) {

      echo "<div class='col-xs-12 col-md-4' id='ofertasborrar'>";

      echo "<div class='col-md-12' id='cajaborraroferta' style='height: 10%; margin-bottom: 2%;'>";

      echo "<strong>" . "<p style='font-size: 1.5em;' id='id_usuario'><a href='../empresas_registradas/anuncio_completo_empresas.php?id=" . $fila[1]. "'>" . $fila[2] . "</a></p>" . "</strong>";

      // echo "<p>" . "<strong>Experiencia Minima: </strong>" . $fila[4]. "</p>";

      // echo "<p>" . $fila[5]. "</p style='padding-bottom: 2%;'>";

      echo "<a href='borraroferta.php?id_anuncio=$fila[1]'>  <input type='button' name='del' id='del' value='Borrar Anuncio'></a>";

      echo "</div>";

      echo "</div>";


  }
  mysqli_close($conexion);
?>
