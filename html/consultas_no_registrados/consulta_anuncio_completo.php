<?php

require("../datos_conexion.php");

$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

if(mysqli_connect_errno()){

  echo "Fallo al conectar la BBDD";

  exit();

}

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BBDD");

mysqli_set_charset($conexion, "utf8");

$consulta="SELECT * FROM anuncios where id_anuncio=$_GET[id]";

$resultados=mysqli_query($conexion, $consulta);

while (($fila=mysqli_fetch_row($resultados))==true) {



  echo "<div class='col-xs-12 col-md-6' id='ofertacompleta'>";

  echo "<div class='col-md-12' id='cajaofertacompleta' style='height: 10%; margin-bottom: 2%;'>";


  echo "<strong>" . "<p id='id_usuario'>" . $fila[2] . "</p>" . "</strong>";

  echo "<p id='experiencia_minima'>" . "<strong>Experiencia Minima: </strong>" . "</p>". "<p>" . $fila[4]. "</p>";

  echo "<p id='estudios_requeridos'>" . "<strong>Estudios Requeridos: </strong>" . "</p>". "<p>" . $fila[3]. "</p>";

  echo "<p id='industria_oferta'>" . "<strong>Industria de la Oferta: </strong>" . "</p>". "<p>" . $fila[6]. "</p>";

  echo "<p id='categoria_oferta'>" . "<strong>Categoria de la Oferta: </strong>" . "</p>". "<p>" . $fila[7]. "</p>";

  echo "<p id='descripcion'>" . "<strong>Descripción</strong>" . "</p>";

  echo "<p>" . $fila[5]. "</p style='padding-bottom: 2%;'>";

  echo "<p id='duracion_contrato'>" . "<strong>Duracion del Contrato: </strong>" . "</p>". "<p>" . $fila[10] ."</p>" ;

  echo "<p id='nivel_oferta'>" . "<strong>Nivel de la Oferta: </strong>" . "</p>". "<p>" . $fila[8] ."</p>" ;

  echo "<p id='numero_vacantes'>" . "<strong>Numero de Vacantes: </strong>" . "</p>". "<p>" . $fila[9] ."</p>" ;

  echo "<p id='lugar_trabajo'>" . "<strong>Lugar de trabajo: </strong>" . "</p>". "<p>" . $fila[12] . "</p>" ;

  echo "<p id='salario'>" . "<strong>Salario: </strong>" . "</p>". "<p>" . $fila[13] . "</p>" ;

  echo "</div>";

  echo "</div>";


}
mysqli_close($conexion);
 ?>
