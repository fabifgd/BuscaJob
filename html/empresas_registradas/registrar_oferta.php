<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Crear Oferta</title>
</head>

<body>
<?php

$nombre_empresa = $_POST["Nombre_Empresa"];
$oferta = $_POST["Nombre_de_Oferta"];
$estudios_requeridos = $_POST["Estudios_Requeridos"];
$experiencia_minima = $_POST["Experiencia_Minima"];
$Tipo_Industria = $_POST["Tipo_Industria"];
$categoria_oferta = $_POST["Categoria_Oferta"];
$nivel_oferta = $_POST["Nivel_Oferta"];
$numero_vacantes = $_POST["Numero_Vacantes"];
$duracion_contrato = $_POST["Duracion_Contrato"];
$lugar_trabajo = $_POST["Lugar_Trabajo"];
$salario = $_POST["Salario"];
$telefono = $_POST["Telefono_Contacto"];
$email = $_POST["Email"];
$descripcion = $_POST["Descripcion"];
$id_usuario = $_POST["id_usuario"];


	try{

		require("../datos_conexion_pdo.php");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET utf8");

		$sql="INSERT INTO anuncios (id_usuario, nombre_empresa, nombre_oferta, estudios_requeridos, experiencia_minima, industria_oferta, categoria_oferta, nivel_oferta, numero_vacantes, duracion_contrato, lugar_trabajo, salario, telefono_contacto, email_contacto, descripcion) VALUES (:id_usuario, :Nombre_Empresa, :Nombre_de_Oferta, :Estudios_Requeridos, :Experiencia_Minima, :Tipo_Industria, :Categoria_Oferta, :Nivel_Oferta, :Numero_Vacantes, :Duracion_Contrato, :Lugar_Trabajo, :Salario, :Telefono_Contacto, :Email, :Descripcion)";

		$resultado=$base->prepare($sql);

		$resultado->execute(array(":id_usuario"=>$id_usuario, ":Nombre_Empresa"=>$nombre_empresa, ":Nombre_de_Oferta"=>$oferta, ":Estudios_Requeridos"=>$estudios_requeridos, ":Experiencia_Minima"=>$experiencia_minima, ":Tipo_Industria"=>$Tipo_Industria, ":Categoria_Oferta"=>$categoria_oferta, ":Nivel_Oferta"=>$nivel_oferta, ":Numero_Vacantes"=>$numero_vacantes, ":Duracion_Contrato"=>$duracion_contrato, ":Lugar_Trabajo"=>$lugar_trabajo, ":Salario"=>$salario, ":Telefono_Contacto"=>$telefono, ":Email"=>$email, ":Descripcion"=>$descripcion));

		echo "Registro insertado correctamente";
		echo "<script>window.location ='crearoferta.php'</script>";

		$resultado->closeCursor();

	}catch(Exception $e){

		echo "Línea del error: " . $e->getLine();
		print_r($e);
	}finally{

		$base=null;

	}
?>
</body>
</html>
