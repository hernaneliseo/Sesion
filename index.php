<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Sistema de Reportes e Incidencias</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="col-md-4">
            <p class="mt-4 text-white lead text-center">
                Inicie sesión para acceder a su cuenta.</p>
            <div class="mt-4">
                <form action="core/validar.php" method="post" accept-charset="UTF-8">
                    <div class="form-group">
                        <input name="usuario" type="text" class="form-control" id="email" placeholder="Usuario ó Correo" value="">
                    </div>
                    <div class="form-group">
                        <input name="pass" type="password" class="form-control" id="password" placeholder="Introducir la contraseña" value="">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Entrar</button>
                </form>
            </div>
        </div>
    </body>
</html>