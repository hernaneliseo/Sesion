<?php
require("conexion_db.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
	 $password=htmlentities(addslashes($_POST["pass"]));
	
	//PROTECCION CONTRA INJECTION
$usuario = stripslashes($usuario);
$password = stripslashes($password);
$usuario = mysql_real_escape_string($usuario);
$password = mysql_real_escape_string($password);

    $sql = mysql_query("SELECT * FROM usuarios WHERE idUsuario='$usuario'");

        
    if ($num = mysql_num_rows($sql) == 0) {
        $_SESSION['msg'] = "Logeo incorrecto, Ingresar Datos Validos!";
        
		header('location: ../index.php');
		
    }

    if ($list = mysql_fetch_array($sql)){
        if ($list['nivel_usu'] == 0) {
            header("Location: ../admin");

            $_SESSION["valido"] = "si";
         //   $_SESSION['Ntipo'] = $list['nive_usua']; //nueva
           // $_SESSION['nivel_usu'] = $nivel_usu;
             $_SESSION["nivel_usu"] = 0;
            $_SESSION['inicio'] = time();
            $_SESSION["usuario"] = $usuario;
            $_SESSION['expira'] = $_SESSION['inicio'] + (5 * 60);
            exit;
        }
        ///////
        elseif ($list['nivel_usu'] == 1) {

            header("Location: ../user");
            //    session_start();
            $_SESSION["valido"] = "si";
            //$_SESSION['Ntipo'] = $list['nive_usua']; //nueva
            //$_SESSION['nivel_usu'] = $nivel_usu;
             $_SESSION["nivel_usu"] = 0;
            $_SESSION['inicio'] = time();
            $_SESSION["usuario"] = $usuario;
            $_SESSION['expira'] = $_SESSION['inicio'] + (5 * 60);
            exit;
        }
    } else {
        $_SESSION['valido'] = false;
        header("location:../index.php");
        exit;
    }
}//cerrando reques
?>