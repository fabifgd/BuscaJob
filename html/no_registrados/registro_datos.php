<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$nombre_usuario = $_POST["Nombre_de_Usuario"];
$tipo_cuenta = $_POST["TipoCuenta"];
$email = $_POST["Email"];
$contrasena=password_hash($_POST["Contrasena"],PASSWORD_DEFAULT);
$nombre = $_POST["Nombre"];
$apellidos = $_POST["Apellidos"];
$dni = $_POST["DNI"];
$fecha_nacimiento = $_POST["Fecha_Nacimiento"];
$movil = $_POST["Movil"];
$provincia = $_POST["Provincia"];
$poblacion = $_POST["Poblacion"];
$codigo_postal = $_POST["Codigo_postal"];
$genero = $_POST["Genero"];


	try{

		require("../datos_conexion_pdo.php");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET utf8");

		$sql="INSERT INTO usuarios (nombre_usuario, contrasena, nombre, apellidos, DNI, `e-mail`, fecha_nacimiento, genero, telefono, provincia, poblacion, codigo_postal, tipo_usuario) VALUES (:Nombre_de_Usuario, :Contrasena, :Nombre, :Apellidos, :DNI, :Email, :Fecha_Nacimiento, :Genero, :Movil, :Provincia, :Poblacion, :Codigo_postal, :TipoCuenta)";

		$resultado=$base->prepare($sql);

		$resultado->execute(array(":Nombre_de_Usuario"=>$nombre_usuario, ":Contrasena"=>$contrasena, ":Nombre"=>$nombre, ":Apellidos"=>$apellidos,":DNI"=>$dni,":Email"=>$email, ":Fecha_Nacimiento"=>$fecha_nacimiento, ":Genero"=>$genero,":Movil"=>$movil, ":Provincia"=>$provincia, ":Poblacion"=>$poblacion, ":Codigo_postal"=>$codigo_postal, ":TipoCuenta"=>$tipo_cuenta));

		echo "<script>window.location ='../index.php'</script>";

		$resultado->closeCursor();

	}catch(Exception $e){
		$stringemail = $e->getMessage();
		$email = 'e-mail';
		$pos = strpos($stringemail, $email);

		if ($pos !== false) {
				 echo "Email repetido. Esta siendo redireccionado.";
				 echo "<script>setTimeout(function(){ window.location ='registro.php' }, 5000);</script>";

	}

		$stringusuario = $e->getMessage();
		$usuario = 'nombre_usuario';
		$pos = strpos($stringusuario, $usuario);

		if ($pos !== false) {
				 echo "Nombre de Usuario repetido. Esta siendo redireccionado.";
				 sleep(5);
				 echo "<script>setTimeout(function(){ window.location ='registro.php' }, 5000);</script>";

	}

		$stringmovil = $e->getMessage();
		$movil = 'telefono';
		$pos = strpos($stringmovil, $movil);

		if ($pos !== false) {
				 echo "Movil repetido. Esta siendo redireccionado.";
				 sleep(5);
				 echo "<script>setTimeout(function(){ window.location ='registro.php' }, 5000);</script>";

		}

		$stringdni = $e->getMessage();
		$din = 'DNI';
		$pos = strpos($stringdni, $dni);

		if ($pos !== false) {
				 echo "DNI repetido. Esta siendo redireccionado.";
				 sleep(5);
				 echo "<script>setTimeout(function(){ window.location ='registro.php' }, 5000);</script>";

		}

	}finally{

		$base=null;

	}
	// header('registro.html');
?>
</body>
</html>
