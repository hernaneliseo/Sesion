<?php
 if($num["nivel_usu"] == 0)
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: ../index.php'); 
  exit();
}

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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title><?php titulo() ?></title>
        <?php icono() ?>
    </head>
    <body>
  <?php include '../resource/menu.php'; ?>
        <br><br>  <br><br>
        <div class="container">
            <div class="row ">
                <div class="col-lg-4">

                    <div class="float-left ">
                        <img src="../img/user.png" alt="Lights" style="width:120px">
                    </div>
                    <h4 class="text-bold">Registro de Incidencias</h4>
                    <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>
                    <div class="clear"></div>
                </div>

                <div class="col-lg-4">

                    <div class="float-left ">
                        <img src="../img/user.png" alt="Lights" style="width:120px">
                    </div>

                    <h4 class="text-bold">Fallos de Sistema</h4>
                    <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                    <div class="clear"></div>
                </div>

                <div class="col-lg-4">

                    <div class="float-left ">
                        <img src="../img/user.png" alt="Lights" style="width:120px">
                    </div>

                    <h4 class="text-bold">Filtos o Busqueda</h4>
                    <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                    <div class="clear"></div>
                </div>

            </div>
            <br><br> 
            <div class="row">
                <div class="col-lg-4">

                    <div class="float-left ">
                        <img src="../img/user.png" alt="Lights" style="width:120px">
                    </div>

                    <h4 class="text-bold">Reportes</h4>
                    <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                    <div class="clear"></div>
                </div>

                <div class="col-lg-4">

                    <div class="float-left ">
                        <img src="../img/user.png" alt="Lights" style="width:120px">
                    </div>

                    <h4 class="text-bold">Cambios</h4>
                    <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                    <div class="clear"></div>
                </div>

                <div class="col-lg-4">
                    <div class="float-left">
                        <img src="../img/user.png" alt="Lights" style="width:120px">
                    </div>
                    <h4 class="text-bold">Solicitudes Varios</h4>
                    <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>
                    <div class="clear"></div>
                </div>

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