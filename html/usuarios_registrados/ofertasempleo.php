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
            <!-- <li><a href="crearcv.php">Crea tu CV</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a><?php echo "Hola " . $_SESSION["nombre_usuario"] . " !"?></a></li>
            <li><a href="logout.php">Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
      <div class="row" id="busqueda" style="margin-top: 2%;">
        <div class="col-md-12">
            <div class="row">
                <form action="../consultas_registrados_usuarios/consultas_busqueda_ofertas.php" method="get">
            <div class="col-md-5">
              <label for="labelempleo">Tipo de Empleo</label>
              <input type="InputEmpleo" class="form-control" id="exampleInputEmpleo" placeholder="Tipo de Empleo">
            </div>
            <div class="col-md-5">
              <label for="labelciudad">Lugar de Interes</label>
                <select class="form-control" name="ciudad">
                  <option value="">Toda España</option>
                  <option value="A Coruña">A coru&#241;a</option>
                  <option value="Álava">&#193;lava</option>
                  <option value="Albacete">Albacete</option>
                  <option value="Alicante">Alicante</option>
                  <option value="Almería">Almer&#237;a</option>
                  <option value="Asturias">Asturias</option>
                  <option value="Ávila">&#193;vila</option>
                  <option value="Badajoz">Badajoz</option>
                  <option value="Baleares">Baleares</option>
                  <option value="Barcelona">Barcelona</option>
                  <option value="Burgos">Burgos</option>
                  <option value="Cáceres">C&#225;ceres</option>
                  <option value="Cádiz">C&#225;diz</option>
                  <option value="Cantabria">Cantabria</option>
                  <option value="Castellón">Castell&#243;n</option>
                  <option value="Ceuta">Ceuta</option>
                  <option value="Ciudad Real">Ciudad Real</option>
                  <option value="Córdoba">C&#243;rdoba</option>
                  <option value="Cuenca">Cuenca</option>
                  <option value="Girona">Girona</option>
                  <option value="Granada">Granada</option>
                  <option value="Guadalajara">Guadalajara</option>
                  <option value="Guipúzcoa">Guip&#250;zcoa</option>
                  <option value="Huelva">Huelva</option>
                  <option value="Huesca">Huesca</option>
                  <option value="Jaén">Ja&#233;n</option>
                  <option value="La Rioja">La rioja</option>
                  <option value="Las Palmas">Las palmas</option>
                  <option value="León">Le&#243;n</option>
                  <option value="Lleida">Lleida</option>
                  <option value="Lugo">Lugo</option>
                  <option value="Madrid">Madrid</option>
                  <option value="Málaga">M&#225;laga</option>
                  <option value="Melilla">Melilla</option>
                  <option value="Murcia">Murcia</option>
                  <option value="Navarra">Navarra</option>
                  <option value="Ourense">Ourense</option>
                  <option value="Palencia">Palencia</option>
                  <option value="Pontevedra">Pontevedra</option>
                  <option value="Salamanca">Salamanca</option>
                  <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                  <option value="Segovia">Segovia</option>
                  <option value="Sevilla">Sevilla</option>
                  <option value="Soria">Soria</option>
                  <option value="Tarragona">Tarragona</option>
                  <option value="Teruel">Teruel</option>
                  <option value="Toledo">Toledo</option>
                  <option value="Valencia">Valencia</option>
                  <option value="Valladolid">Valladolid</option>
                  <option value="Vizcaya">Vizcaya</option>
                  <option value="Zamora">Zamora</option>
                  <option value="Zaragoza">Zaragoza</option>
                </select>
            </div>
            <div class="col-md-2" id="botonbusqueda">
              <button type="submit" class="btn btn-default">Buscar</button>
            </div>
          </form>
        </div>
        </div>
      </div>
      <div class="container" id="container">
          <?php include("../consultas_registrados_usuarios/consultas_ofertas_empleo.php"); ?>
        </div>
      <div class="footer" id="footer">
        <div class="container">
          <p>BuscaJob.</p>
        </div>
      </div>
  </body>
</html>
