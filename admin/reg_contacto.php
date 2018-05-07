<?php
$x1 = $_GET['codigo'];
if (isset($_POST['lista'])) {
}
?>

<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-body bg-primary">
            <h4 class="">Lista de Contactos</h4>
        </div>
        <div class="panel-footer">
            <div class="box-body table-responsive">
                <table  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td width="300">Nombre Completo</td>
                            <td>Telefono</td>
                            <td>Correo</td>
                            <td colspan="3" scope="col" class="text-center">Acción</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                      
                            $consulta = "SELECT nombrecompleto, telefono, correo, IdContacto FROM contacto ORDER BY nombrecompleto ASC ";
                            $bd->consulta($consulta);
                            while ($fila = $bd->mostrar_registros()) {
                                ?>
                                <tr>
                                    <td width="200"><?php echo "$fila[nombrecompleto]" ?></td>
                                    <td><?php echo "$fila[telefono] " ?></td>
                                    <td><?php echo "$fila[correo] " ?></td>
                                    <td width="60px" class="text-center">
                                        <a href=?mod=vis_contacto&ver&registrocont=<?php echo $fila[IdContacto] ?>> 
                                            <i class="glyphicon text-orange glyphicon-eye-open btn-XS" width='25' alt='Visualizar' title=' CONSULTAR A <?php echo $fila[nombrecompleto] ?>'></i>
                                        </a> 
                                    <td width="60px" class="text-center">
                                        <a href=?mod=edit_contacto&editar&codigo=<?php echo $fila[IdContacto] ?>> 
                                            <i class="glyphicon glyphicon-edit text-green btn-xs" width='25' alt='Editar' title=' EDITAR LOS DATOS DE<?php echo $fila[nombrecompleto] ?>'></i>

                                        </a> 
                                    </td>
                                    <td width="60px" class="text-center">
                                        <a href=?mod=reg_contacto&eliminar&codigo=<?php echo $fila[IdContacto] ?> onclick="return confirm('Deseas elimiar este Contacto del sistema?');">  
                                            <i class="glyphicon glyphicon-trash text-red btn-xs "  alt='Eliminar' title=' ELIMINAR A <?php echo $fila[nombrecompleto] ?>'></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                            }
                      
                        ?>

                        <?php
                        if (isset($_GET['eliminar'])) {

//codigo que viene de la lista
                            $x2 = $_GET['codigo'];
                            if ($x2 == "") {
                                echo "<script> alert('error')</script>";
                            } else {
                                $sql = "delete from contacto where IdContacto='$x2' ";
                                $bd->consulta($sql);

                                //echo "Datos Guardados Correctamente";
                                echo'<script type="text/javascript">
        alert("Registro Eliminado con exito!");
        javascritp:history.go(-1);
         </script>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

