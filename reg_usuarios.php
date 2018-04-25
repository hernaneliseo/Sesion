<?php
require '../core/sesion.php';
//require '../core/funciones.php';
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
       
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="default.php"></a>
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
                            <a class="dropdown-item"  href="../application/salir.php">Salir</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
       <div class="table100 ver2 m-b-110 ">
	    
	     <table data-vertable="ver2" class="table-responsive">
			 <thead>
							<tr class="row100 head">
								<th class="column100 column2" data-column="column2">NOMBRE COMPLETO:</th>
			<th class="column100 column4" data-column="column4">DOCUMENTO DE IDENTIDAD:</th>
								<th class="column100 column5" data-column="column5">CORREO:</th>
						<th class="column100 column6" data-column="column6">NUMERO TELEFONICO:</th>
								<th class="column100 column7" data-column="column7">GENERO:</th>
								<th class="column100 column8" data-column="column8">USUARIO</th>
								<th class="column100 column8" data-column="column8">CLAVE</th>
								<th class="column100 column8" data-column="column8">NIVEL</th>
				<th class="column100 column8" data-column="column8">FECHA DE MODIFICACION</th>
								<th class="column100 column8" data-column="column8">IMAGEN</th>
								<th class="column100 column8" data-column="column8">ACCION</th>
							</tr>
						</thead>
		
			 <tbody>
							<tr class="row100">
	<td class="column100 column2" data-column="column2"><?php echo "$MR_usu[1], $MR_usu[2]"; ?></td>
	<td class="column100 column4" data-column="column4"><?php echo "$MR_usu[3]"; ?></td>
	<td class="column100 column5" data-column="column5"><?php echo "$MR_usu[4]"; ?></td>
	<td class="column100 column6" data-column="column6"><?php echo "$MR_usu[5]"; ?></td>
	<td class="column100 column7" data-column="column7"><?php echo "$MR_usu[7]"; ?></td>
	<td class="column100 column8" data-column="column8"><?php echo "$MR_usu[8]"; ?></td>
	<td class="column100 column8" data-column="column8"><?php echo "$MR_usu[9]"; ?></td>
	<td class="column100 column8" data-column="column8"><?php echo "$MR_usu[10]"; ?></td>
								<td class="column100 column8" data-column="column8"><?php echo "$MR_usu[11]"; ?></td>
								<td class="column100 column8" data-column="column8"><?php echo "$MR_usu[12]"; ?></td>
								<td class="column100 column8" data-column="column8">
                                <li data-icon="delete">
                                <a href="modificar_perfil.php?editar=<?php echo "$MR_usu[0]"; ?>" >
                               Editar
                                </a>
                                </li>
                                </td>
							</tr>
						</tbody>
                  
			 
					</table>
			
		</div>

        <footer class="page-footer lighten-3 pt-4 mt-4 ">
            <div class="container text-center text-md-left " >
                <div class="row">
                    <div class="col-md-8 ">
                        <h5 class="text-uppercase mb-4 font-weight-bold">Footer Content</h5>
                        <p>Here you can use rows and columns here to organize your footer content.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident
                            voluptate esse quasi, veritatis totam voluptas nostrum. </p>
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
                © <?php echo date('Y'); ?> Copyright:
                <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
            </div>
        </footer>
    </body>
</html>
