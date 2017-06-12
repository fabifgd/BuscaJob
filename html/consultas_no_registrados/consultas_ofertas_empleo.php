<?php

require("../datos_conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

    if(mysqli_connect_errno()){

      echo "Fallo al conectar la BBDD";

      exit();

    }

    mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    mysqli_set_charset($conexion, "utf8");

    $consulta="SELECT * FROM anuncios";

    $resultados=mysqli_query($conexion, $consulta);

    while (($fila=mysqli_fetch_row($resultados))==true) {

      echo "<div class='row' id='cajaofertaempleo'";

      echo "<div class='col-xs-12 col-md-4' id='oferta' >";

      echo "<div class='col-md-12' id='ofertasempleo'>";

      echo "<strong>" . "<p style='font-size: 1.5em;'><a href='../no_registrados/anuncio_completo.php?id=" . $fila[1]. "'>" . $fila[2] . "</a></p>" . "</strong>";

      echo "<p>" . "<strong>Experiencia Minima: </strong>" . $fila[4]. "</p>";

      echo "<p>" . $fila[5]. "</p style='padding-bottom: 2%;'>";

      echo "<strong>Duracion del Contrato: </strong>" . $fila[10] . " " . "<strong>Lugar de trabajo: </strong>" . $fila[12] . " " . "<strong>Salario: </strong>" . $fila[13];

      echo "</div>";

      echo "</div>";

  }
  mysqli_close($conexion);
?>
