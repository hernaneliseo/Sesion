<?php
include '../core/sesion.php';
include '../core/funciones.php';
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link href="../css/arreglos.css" rel="stylesheet">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <title><?php titulo() ?></title>
        <?php icono() ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="default.php"><?php app() ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-lg-11">

                </div>
                <ul class="nav navbar-nav ">
                    <li class="dropdown text-md-left">
                        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-danger dropdown-toggle"><?php echo "$_SESSION[usuario]" ?><b class="caret"></b></a>

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

        <div class="container-fluid p-0">
            <div class="container ">
                <?php
if (isset($_POST['editar'])) {
    $claveUsuario = $_POST['claveUsuario'];

$hashed_pass = password_hash($claveUsuario, PASSWORD_DEFAULT);
    require '../core/conexion_db.php';
$query = mysql_query("UPDATE `usuarios` SET `password` = '$hashed_pass', `fechaModificacion` = now() WHERE `usuarios`.`idUsuario` = '$_SESSION[usuario]'");
    if (!$query) {
        printf("Error: %s\n", mysql_error());
    } else {
        echo'<script type="text/javascript">
        alert("Datos Editados Correctamente... ");
    location.replace("perfil.php"); </script>';
            }
}
                require '../core/conexion_db.php';
                $sql = "SELECT * FROM usuarios where idusuario='$_SESSION[usuario]'";
                $result = mysql_query($sql);
                //verificamos que no haya error
                if (!$result) {
                    echo "La consulta SQL contiene errores.";
                    exit();
                } else {
                    while ($Mos_Mod = mysql_fetch_row($result)) {
                        ?>
                        <form  action="modificar_clave.php" method="post">
                                             <div class="panel-heading">
                        <h3 class="panel-title">CAMBIO CONTRASEÑA</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-lg-5 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                    <tbody>
                                     <tr>
                                            <td>Nueva Contraseña:</td>
<td><input name="claveUsuario" type="text" class="form-control"  value="<?php echo "$Mos_Mod[9]";?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Ultima Modificación</td>
                                            <td><?php echo "$Mos_Mod[11]";?></td>
                                        </tr>
                                    </tbody>
                                </table>
                               <input type="submit" class="btn btn-primary" name="editar" id=editar value="Editar"datasubmit="...Sending" >
                            </div>
                        </div>
                    </div>
                        </form>
        <?php
    }
}
 ?>

            </div>
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
                © 2018 Copyright:
                <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
            </div>
        </footer>
    </body>
</html>