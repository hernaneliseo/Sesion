<?php
    $servidor = "localhost:3308";
    $usuario = "root";
    $clave = "";
    $base_datos = "tienda2grl";
	$conexion = mysql_connect("$servidor", "$usuario", "$clave");
	$db_seleccionada = mysql_select_db($base_datos, $conexion);
?>