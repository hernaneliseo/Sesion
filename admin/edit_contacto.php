<?php 

    $x1 = $_GET['codigo'];
    if (isset($_POST['editar'])) {
        $nombrecompleto = strtoupper($_POST["nombrecompleto"]);
        $fecha_nac = strtoupper($_POST["fecha_nac"]);
        $sexo = strtoupper($_POST["sexo"]);
        $telefono = strtoupper($_POST["telefono"]);
        $telefono2 = strtoupper($_POST["telefono2"]);
        $cargo = strtoupper($_POST["cargo"]);
        $correoalter = strtoupper($_POST[" correoalter"]);
        $identificacion = strtoupper($_POST["identificacion"]);
        $correo = strtoupper($_POST["correo"]);
        $direccion = strtoupper($_POST["direccion"]);


        $sql = " UPDATE contacto SET 
nombrecompleto='$nombrecompleto', fecha_nac='$fecha_nac',
sexo='$sexo', telefono='$telefono',
telefono2='$telefono2', cargo='$cargo', correoalter='$correoalter',
identificacion='$identificacion', correo='$correo',
direccion='$direccion' where IdContacto='$x1'";
        $bd->consulta($sql);

        echo'<script type="text/javascript">
        alert("Datos Editados Correctamente... ");
        javascritp:history.go(-1);
         </script>';
    }

    $consulta = "SELECT nombrecompleto, fecha_nac, sexo, telefono, telefono2, cargo, identificacion, correo, direccion, correoalter FROM contacto where IdContacto='$x1'";
    $bd->consulta($consulta);
    while ($fila = $bd->mostrar_registros()) {
        ?>

        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-body bg-primary">
                    <h4 class="">Editar Contacto</h4>
                </div>
                <div class="panel-footer">
                    <div class="col-md-8">
        <?php echo '  <form  action="?mod=edit_contacto&editar=editar&codigo=' . $x1 . '" method="post">'; ?>
                        <div class="form-group">
                            <label >Nombre Completo</label>
                            <input name="nombrecompleto" type="text" required class="form-control"  value="<?php echo $fila[nombrecompleto] ?>">

                            <label >Fecha de Nacimiento</label>
                            <input name="fecha_nac" type="date" class="form-control"   value="<?php echo $fila[fecha_nac] ?>" placeholder="2017-00-00">

                            <label for="sexo">Sexo:</label>
                            <select name="sexo"  class="form-control" >
                                <option value="Hombre" selected="SELECTED">Hombre</option>
                                <option value="Mujer">Mujer</option>
                            </select>

                            <label >Telefono</label>
                            <input  type="text" name="telefono" class="form-control" value="<?php echo $fila[telefono] ?>"  placeholder="telefono">

                            <label >Celular</label>
                            <input  type="text" name="telefono2" class="form-control" value="<?php echo $fila[telefono2] ?>"  placeholder="Movil">

                            <label >Cargo</label>
                            <input  type="text" name="cargo" class="form-control" value="<?php echo $fila[cargo] ?>">

                            <label >Identificación</label>
                            <input  type="text" name="identificacion" class="form-control" value="<?php echo $fila[identificacion] ?>"  placeholder="identificacion">
                            <label>Correo</label>
                            <input type="email"  name="correo" class="form-control" value="<?php echo $fila[correo] ?>">
                            <label >Correo Alternativo</label>
                        <input type="email"  name="correoalter" class="form-control"  placeholder="empresa@empresa.com" value="<?php echo $fila[correoalter] ?>">

                            <label>Dirección</label>
                            <input name="direccion" type="text" class="form-control"  value="<?php echo $fila[direccion] ?>">
                        </div>
                    </div>
                    <?php
                }
         
            ?>


     
        <div class="col-md-4">
            <div class="box">
                <div class="box-header">
                    <h3> <center>Opciones <a href="#" class="alert-link"></a></center></h3>                                    
                    <center>       
                        <button type="submit" class="btn btn-primary btn-lg" name="editar" id="editar" value="Editar" >Actualizar</button>
                        <a class="btn btn-primary btn-lg" href="?mod=reg_contacto">Regresar</a>
                    </center> 
                </div>
                <br><br>
                </form>
            </div>
        </div>  
        <div class="clearfix"></div>
           </div>
    </div>
</div>