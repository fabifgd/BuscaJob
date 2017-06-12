<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comprueba login</title>
  </head>
  <body>
    <?php

    try{
          $login=htmlentities (addslashes ($_POST["login"]));
          $password=htmlentities (addslashes ($_POST["Contrasena"]));
          $contador=0;
          require("../datos_conexion_pdo.php");

          $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql="SELECT * FROM usuarios WHERE nombre_usuario = :login";
          $resultado=$base->prepare($sql);

          $resultado->execute(array(":login"=>$login));



          $numero_registro=$resultado->rowCount();

          if($numero_registro!=0){



            $_SESSION["nombre_usuario"]=$_POST["login"];
            $_SESSION["contraseña"]=$_POST["Contrasena"];
            $result=$resultado->fetch(PDO::FETCH_ASSOC);
            $result['id_usuario'];
            $_SESSION['id_usuario']=$result['id_usuario'];
            $resulttipousuario=$resultado->fetch(PDO::FETCH_ASSOC);
            $resulttipousuario['tipo_usuario'];
            $_SESSION['tipo_usuario']=$resulttipousuario['tipo_usuario'];

            // var_dump($result);
            // die();

            if (password_verify($password, $result['contrasena'])) {

                if ($result["tipo_usuario"] == "Empresa") {

                  echo "<script>window.location ='../empresas_registradas/indexempresa.php'</script>";

              }else{

                  echo "<script>window.location ='../usuarios_registrados/indexusuario.php'</script>";
              }
            } else {
              echo "<script>window.location ='login.php'</script>";
              die();
            }
            while ($numero_registro=$resultado->fetch(PDO::FETCH_ASSOC)) {



            }


            // if ($contador>0) {
            //   echo "Usuario Registrado";
            //   die();
            // }else {
            //   echo "<script>window.location ='login.php'</script>";
            // }


            if ($result["tipo_usuario"] == "Empresa") {

              echo "<script>window.location ='../empresas_registradas/indexempresa.php'</script>";

          }else{

              echo "<script>window.location ='../usuarios_registrados/indexusuario.php'</script>";
          }



          }else {
              echo "<script>window.location ='login.php'</script>";
          }



        }catch(Exception $e){

          die("Error: " . $e->getMessage());


    }

    ?>

  </body>
</html>
