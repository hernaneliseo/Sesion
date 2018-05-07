<?php
require '../core/sesion.php';
require '../core/funciones.php';
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<link href="https://raw.github.com/daneden/animate.css/master/animate.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>
		<?php titulo() ?>
	</title>
	<?php icono() ?>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="default.php">
			<?php app() ?>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<div class="col-lg-11">
			</div>
			<ul class="nav navbar-nav ">
				<li class="dropdown text-md-left">
					<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-danger dropdown-toggle">
						<?php echo "$_SESSION[usuario]" ?><b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
						<a class="dropdown-item" href="perfil2.php">Perfil</a>
						<a class="dropdown-item" href="#">Configuraciones</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="../application/salir.php">Salir</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid p-0">
		<div class="container ">

			<form role="form" action="nuevo_usuario.php" method="post">

				<div class="panel-heading">
					<h3 class="panel-title">NUEVO USUARIO</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class=" col-lg-7 ">
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td width="35%">NOMBRE:</td>
										<td width="65%"><input name="nombreUsuario" autofocus type="text" class="form-control">
										</td>
									</tr>
									<tr>
										<td>APELLIDO:</td>
										<td><input name="apellidoUsuario" type="text" class="form-control"> </td>
									</tr>
									<tr>
										<td>FECHA DE NACIMIENTO:</td>
										<td><input name="fechaUsuario" type="date" class="form-control">
										</td>
									</tr>
									<tr>
										<td>DOCUMENTO:</td>
										<td><input name="documento" type="text" class="form-control">
										</td>
									</tr>
									<tr>
										<td>CORREO:</td>
										<td><input name="correo" type="email" class="form-control">
										</td>
									</tr>
									<tr>
										<td>NUMERO TELEFONICO:</td>
										<td><input name="telefono" type="text" class="form-control">
										</td>
									</tr>
									<tr>
										<td>GENERO:</td>
										<td>

											<select name="generoUsuario" class="form-control">
												<option value="Hombre">Hombre</option>
												<option value="Mujer">Mujer</option>

											</select>

									</tr>
									<tr>
										<td>USUARIO:</td>
										<td><input name="idUsuario" type="text" class="form-control">
										</td>
									</tr>
									<tr>
										<td>CONTRASEÑA:</td>
										<td><input name="claveUsuario" type="password" class="form-control">
										</td>
									</tr>
									<tr>
										<td>NIVEL USUARIO</td>
										<td>
<table width="200" border="0">
  
    <tr>
      <th ><input type="radio" name="nivel_usu" value="1"></th>
      <th > Administrador </th>
    </tr>
    <tr>
      <td><input type="radio" name="nivel_usu" value="0"></th>
      <td>Comun</td>
    </tr>
  
</table></td>
									</tr>
								</tbody>
							</table>
							<input type="submit" class="btn btn-primary" name="guardar" id=guardar value="Guardar">
						</div>
					</div>
				</div>






				<div class="clearfix"></div>


				<?php
				if ( isset( $_POST[ 'guardar' ] ) ) {
					$nombreUsuario = $_POST[ 'nombreUsuario' ];
					$apellidoUsuario = $_POST[ 'apellidoUsuario' ];
					$documento = $_POST[ 'documento' ];
					$fechaUsuario = strtoupper( $_POST[ "fechaUsuario" ] );
					$correo = strtoupper( $_POST[ "correo" ] );
					$telefono = strtoupper( $_POST[ "telefono" ] );
					$generoUsuario = strtoupper( $_POST[ "generoUsuario" ] );
					$claveUsuario = $_POST[ 'claveUsuario' ];
					$idUsuario = $_POST[ 'idUsuario' ];
					$nivel_usu = $_POST['nivel_usu'];
					require '../core/conexion_db.php';

					$sql2 = "INSERT INTO  usuarios (nombreUsuario ,  apellidoUsuario ,  documento ,  correo ,  telefono ,  fechaUsuario ,  generoUsuario ,  idUsuario ,  password ,  nivel_usu  ) 
		VALUES 
	('$nombreUsuario', '$apellidoUsuario', '$documento', '$correo', '$telefono', '$fechaUsuario', '$generoUsuario', '$idUsuario', '$claveUsuario', '$nivel_usu')";
					$resultado = mysql_query( $sql2 );
					if ( !$resultado ) {
						    printf("Error: %s\n", mysql_error());
						?>
				<h3>Datos erroneos</h3>
				<a href="nuevo_usuario.php">Agregar Nuevo</a>
				<?php
				} else {
					?>
				<h3>Sus datos se guardaron correctamente</h3>
				<a href="nuevo_usuario.php">Agregar Nuevo</a>
				<?php
			
				} }
		
				?>

				<footer class="page-footer lighten-3 pt-4 mt-4 ">
					<div class="container text-center text-md-left ">
						<div class="row">
							<div class="col-md-8 ">
								<h5 class="text-uppercase mb-4 font-weight-bold">Footer Content</h5>
								<p>Here you can use rows and columns here to organize your footer content.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum. </p>
							</div>
							<div class="col-md-4 col-lg-3">
								<h5 class="text-uppercase mb-4 font-weight-bold">Address</h5>
								<p>
									<i class="fa fa-home mr-3"></i>SRL, La Union, El Salvador</p>
								<p>
									<i class="fa fa-envelope mr-3"></i>info@lozano.biz</p>
								<p>
									<i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
								<p>
									<i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
							</div>
						</div>
					</div>
					<div class="footer-copyright py-3 text-center" style="background-color: red;">
						©
						<?php echo date('Y'); ?> Copyright:
						<a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
					</div>
				</footer>
</body>
</html>