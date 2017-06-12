<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accede</title>
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
      <div class="row" id="login">
        <form action="comprueba_login.php" method="post">
          <!-- Nombre de Usuario -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Nombre de Usuario">Nombre de Usuario</label>
            <div class="col-md-6">
            <input id="Nombre de Usuario" name="login" type="text" placeholder="Nombre de Usuario" class="form-control input-md" required="">
            </div>
          </div>
          <!-- Contraseña -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="Contrasena">Contraseña</label>
            <div class="col-md-6">
            <input id="Contrasena" name="Contrasena" type="password" placeholder="Contraseña" class="form-control input-md" required="">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label" for="button1id"></label>
            <div class="col-md-12">
              <button id="button1id" name="button1id" type="submit" class="btn btn-success">Aceptar</button>
            </div>
          </div>
        </form>

      </div>

      <div class="footer" id="footerlogin">
        <div class="container">
          <p>BuscaJob.</p>
        </div>
      </div>
</body>
</html>
