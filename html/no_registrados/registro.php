<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrate</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
    <nav class="navbar navbar-default" id="barraprincipal">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="../index.php">BuscaJob</a>
        </div>
      </div>
    </nav>
    <center>
      <div class="row" id="registro">


    <form action="registro_datos.php" method="post" name="fregistro">

      <!-- Nombre de Usuario -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Nombre de Usuario">Nombre de Usuario</label>
        <div class="col-md-6">
        <input id="Nombre_de_Usuario" name="Nombre_de_Usuario" type="text" placeholder="Nombre de Usuario" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Tipo de Usuarios -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="TipoCuenta">Tipo de Cuenta</label>
        <div class="col-md-6">
          <select id="TipoCuenta" name="TipoCuenta" class="form-control input-md">
            <option>Selecciona</option>
            <option value="Usuario">Usuario</option>
            <option value="Empresa">Empresa</option>
          </select>
        </div>
      </div>

      <!-- Email-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Email">E-Mail</label>
        <div class="col-md-6">
        <input id="Email" name="Email" type="email" placeholder="E-mail" class="form-control input-md" required=""> <!-- pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" -->

        </div>
      </div>

      <!-- Repetir Email-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Repetir Email">Repetir E-mail</label>
        <div class="col-md-6">
        <input id="Repetir_Email" name="Repetir Email" type="email" placeholder="Repetir E-mail" class="form-control input-md" required=""><!-- pattern="/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/" -->

        </div>
      </div>

      <!-- Contrasena -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Contrasena">Contraseña</label>
        <div class="col-md-6">
        <input id="Contrasena" name="Contrasena" type="password" placeholder="Contraseña" class="form-control input-md" required="">

        </div>
      </div>

      <!-- Repetir Contrasena -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="Repetir Contrasena">Repetir Contraseña</label>
        <div class="col-md-6">
        <input id="Repetir_Contrasena" name="Repetir Contrasena" type="password" placeholder="Repetir Contraseña" class="form-control input-md" required="">

        </div>
      </div>

    <!-- Nombre-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Nombre">Nombre</label>
      <div class="col-md-6">
      <input id="Nombre" name="Nombre" type="text" placeholder="Nombre" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Apellidos-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Apellidos">Apellidos</label>
      <div class="col-md-6">
      <input id="Apellidos" name="Apellidos" type="text" placeholder="Apellidos" class="form-control input-md" required="">

      </div>
    </div>

    <!-- DNI-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="DNI">DNI</label>
      <div class="col-md-6">
      <input id="DNI" name="DNI" type="text" pattern="\d{8}[A-Z]{1}" placeholder="DNI" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Fecha de Nacimiento-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Fecha de Nacimiento">Fecha de Nacimiento</label>
      <div class="col-md-6">
      <input id="Fecha_Nacimiento" name="Fecha_Nacimiento" type="date"  placeholder="Año/Mes/Dia" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Movil-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Movil">Movil</label>
      <div class="col-md-6">
      <input id="Movil" name="Movil" type="text" pattern="^[7|6]\d{8}$" placeholder="Movil" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Provincia-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Provincia">Provincia</label>
      <div class="col-md-6">
        <select id="Provincia" name="Provincia" class="form-control input-md">
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

    <!-- Poblacion-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Poblacion">Poblacion</label>
      <div class="col-md-6">
      <input id="Poblacion" name="Poblacion" type="text" placeholder="Poblacion" class="form-control input-md">
      </div>
    </div>

    <!-- C.P-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="C.P">C.P</label>
      <div class="col-md-6">
      <input id="Codigo_postal" name="Codigo_postal" type="text" pattern="^([1-9]{2}|[0-9][0-9]|[1-9][0-9])[0-9]{3}$" placeholder="C.P" class="form-control input-md" required="">

      </div>
    </div>

    <!-- Genero Poner Inputs de seleccion-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="Genero">Genero</label>
      <div class="col-md-6">
      <select id="Genero" name="Genero" class="form-control input-md">
        <option>Selecciona</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
      </div>
    </div>



        <script>
        var Email, Repetir_Email;

    Email = document.getElementById('Email');
    Repetir_Email = document.getElementById('Repetir_Email');

    Email.onchange = Repetir_Email.onkeyup = emailMatch;

    function emailMatch() {
        if(Email.value !== Repetir_Email.value){
            Repetir_Email.setCustomValidity('Los Email no coinciden');
        }else{
            Repetir_Email.setCustomValidity('');
    }
  }

    var Contrasena, Repetir_Contrasena;

    Contrasena = document.getElementById('Contrasena');
    Repetir_Contrasena = document.getElementById('Repetir_Contrasena');

    Contrasena.onchange = Repetir_Contrasena.onkeyup = ContrasenaMatch;

    function ContrasenaMatch(){
      if (Contrasena.value !== Repetir_Contrasena.value) {
          Repetir_Contrasena.setCustomValidity('Las Contrasenas no coinciden');
      }else{
          Repetir_Contrasena.setCustomValidity('');
      }
    }

        </script>


    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="button1id"></label>
      <div class="col-md-12">
        <button id="button1id" name="button1id" class="btn btn-success">Aceptar</button>
        <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
      </div>
    </div>
  </div>
  <div class="footer" id="footerregistro">
    <div class="container">
      <p>BuscaJob.</p>
    </div>
  </div>
  </body>
</html>
