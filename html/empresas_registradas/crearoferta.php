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
          <a class="navbar-brand" href="indexempresa.php">BuscaJob</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="indexempresa.php">Inicio</a></li>
            <li><a href="ofertasempleo.php">Ofertas de Empleo</a></li>
            <li><a href="crearoferta.php">Crear Oferta</a></li>
            <li><a href="ofertas.php">Ofertas</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a><?php echo "Hola " . $_SESSION["nombre_usuario"] . " !"?></a></li>
            <li><a href="logout.php">Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
        <center>
          <div class="row" id="crearoferta">


      <form action="registrar_oferta.php" method="post" name="foferta">

        <div class="form-group">
          <label class="col-md-4 control-label" for="Nombre_Empresa">Nombre de la Empresa</label>
          <div class="col-md-6">
          <input id="Nombre_Empresa" name="Nombre_Empresa" type="text" placeholder="Nombre de la Empresa" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Oferta">Oferta</label>
          <div class="col-md-6">
          <input id="Nombre_de_Oferta" name="Nombre_de_Oferta" type="text" placeholder="Oferta" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Estudios_Requeridos">Estudios Requeridos</label>
          <div class="col-md-6">
          <input id="Estudios_Requeridos" name="Estudios_Requeridos" type="text" placeholder="Estudios Requeridos" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Experiencia_Minima">Experiencia Minima</label>
          <div class="col-md-6">
          <input id="Experiencia_Minima" name="Experiencia_Minima" type="text" placeholder="Experiencia Minima" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Tipo_Industria">Tipo de Industria de la Oferta</label>
          <div class="col-md-6">
          <input id="Tipo_Industria" name="Tipo_Industria" type="text" placeholder="Tipo de Industria de la Oferta" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Categoria_Oferta">Categoria de la Oferta</label>
          <div class="col-md-6">
          <input id="Categoria_Oferta" name="Categoria_Oferta" type="text" placeholder="Categoria de la Oferta" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Nivel_Oferta">Nivel de la Oferta</label>
          <div class="col-md-6">
          <input id="Nivel_Oferta" name="Nivel_Oferta" type="text" placeholder="Nivel de la Oferta" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Numero_Vacantes">Numero de Vacantes</label>
          <div class="col-md-6">
          <input id="Numero_Vacantes" name="Numero_Vacantes" type="text" placeholder="Numero de Vacantes" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Duracion_Contrato">Duracion del Contrato</label>
          <div class="col-md-6">
          <input id="Duracion_Contrato" name="Duracion_Contrato" type="text" placeholder="Duracion del Contrato" class="form-control input-md" required="">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Lugar_Trabajo">Lugar de Trabajo</label>
          <div class="col-md-6">
          <select id="Lugar_Trabajo" name="Lugar_Trabajo" class="form-control input-md" required="">
              <option>Selecciona</option>
              <option value="A Coruña">A Coru&#241;a</option>
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
              <option value="La Rioja">La Rioja</option>
              <option value="Las Palmas">Las Palmas</option>
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
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Salario">Salario</label>
          <div class="col-md-6">
          <input id="Salario" name="Salario" type="text" placeholder="Salario" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Telefono_Contacto">Telefono de Contacto</label>
          <div class="col-md-6">
          <input id="Telefono_Contacto" name="Telefono_Contacto" type="text" placeholder="Telefono de Contacto" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Email">E-Mail</label>
          <div class="col-md-6">
          <input id="Email" name="Email" type="text" placeholder="E-Mail" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="Descripcion">Descripción</label>
          <div class="col-md-6">
          <textarea id="Descripcion" name="Descripcion" type="text" placeholder="Descripción" class="form-control input-md" required=""></textarea>
          </div>
        </div>

        <div class="form-group" style="visibility: hidden" >
          <label class="col-md-4 control-label" for="id_usuario">id_usuario</label>
          <div class="col-md-6">
          <select class="form-control input-md" name="id_usuario">
            <option value="<?php echo $_SESSION['id_usuario'] ?>"><?php echo($_SESSION['id_usuario']) ?></option>
          </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <p>Todos los campos obligatorios.</p>
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label" for="button1id"></label>
          <div class="col-md-12">
            <button id="button1id" name="button1id" class="btn btn-success">Aceptar</button>
            <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
      </form>
      </div>
      <div class="footer" id="footercrearoferta">
        <div class="container">
          <p>BuscaJob.</p>
        </div>
      </div>
  </body>
</html>
