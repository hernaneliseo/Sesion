<?PHP
@mysql_connect("localhost:3308","root","") or die("No se puede conectar con MySQL");

if(mysql_select_db("sisreport")) {
mysql_query("DROP DATABASE sisreport");
echo"<br><font color='red' face='verdana' size='2'><strong>OK:La Base de datos Sisrepot  ha sido Eliminada</strong>";
}else{
if(mysql_query("create database sisreport")){
		echo"<center><br>
<table border=0 bordercolor=black ellpadding=0 cellspacing=0 style='border:solid #000000 1px;width:350px;font:10pt verdana;font-weight:bold;color:black;'>
<tr>
<td bgcolor='white'><img src='Forward.png' width='40'><td>Base de datos sisreport creada!
</td>
</tr>
</table>

";
//Usando la base de datos,crea las tablas solo cuando es nueva creacion de base de datos
mysql_query("use sisreport");
}

//Creando tabla usuarios...
if(mysql_query("create table usuarios(
codigoUsuario int primary key auto_increment,
nombreUsuario varchar(40),
apellidoUsuario varchar(40),
documento varchar(18),
correo varchar(200),
telefono varchar(20),
fechaUsuario date,
generoUsuario varchar(20),
idUsuario varchar(20),
password varchar(128),
nivel_usu int,
fechaModificacion datetime,
nombre varchar(200),
destino varchar(100))")){
$claveUsuario = 'HOLA';
$hashed_pass = password_hash($claveUsuario, PASSWORD_DEFAULT);
mysql_query("insert into usuarios values(NULL, 'HERNAN', 'LOZANO', '', 'HERNYN@LIVE.COM', 
'', '', '', 'eliseo', '$hashed_pass', 1, NOW(), '', '')");
echo"<br><font color='black' face='verdana' size='2'><strong>Ok:Tabla usuarios Creada</strong></font>";
}else{
echo"<br><font color='red' face='verdana' size='2'><strong>Error al crear tabla usuarios</strong>";
}
}
//

?>