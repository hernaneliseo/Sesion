<?php
  session_start();
 if(!isset($_SESSION["valido"]) || $_SESSION["valido"]!="si")
     
  {
    header("location:../index.php"); // retorno al acceso
    exit;
  }
  
  $now = time();
	if($now > $_SESSION['expira']) {
	session_destroy();
	echo "Su sesion a terminado,
	<a href='../index.php'>Necesita Hacer Login</a>";
	exit;
	}	
  /*      
  if($_SESSION['Ntipo'] ==2){
	
	$tipo2=1;
	}else{
	$tipo2=2;
	}
   * */
   
?>