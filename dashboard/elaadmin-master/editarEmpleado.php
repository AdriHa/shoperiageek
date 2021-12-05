<?php

include_once "conexion.php";
$con=mysqli_connect($host,$user,$pass,$db);




if(isset($_REQUEST['guardar'])){
    $email=mysqli_real_escape_string($con,$_REQUEST['email']??'');
    $pass=md5(mysqli_real_escape_string($con,$_REQUEST['password']??''));
    $nombre=mysqli_real_escape_string($con,$_REQUEST['nombre']??'');
    $apellido=mysqli_real_escape_string($con,$_REQUEST['apellido']??'');
    $telefono=mysqli_real_escape_string($con,$_REQUEST['telefono']??'');
    $acceso=mysqli_real_escape_string($con,$_REQUEST['acceso']??'');
    $sueldo=mysqli_real_escape_string($con,$_REQUEST['sueldo']??'');
    $id=mysqli_real_escape_string($con,$_REQUEST['id']??'');
    $calle=mysqli_real_escape_string($con,$_REQUEST['calle']??'');
    $idDireccion=mysqli_real_escape_string($con,$_REQUEST['idDireccion']??'');
    $colonia=mysqli_real_escape_string($con,$_REQUEST['colonia']??'');
    $codigoPostal=mysqli_real_escape_string($con,$_REQUEST['codigoPostal']??'');
    $estado=mysqli_real_escape_string($con,$_REQUEST['Estado']??'');
    $numeroInterior=mysqli_real_escape_string($con,$_REQUEST['numeroInterior']??'');
    $numeroExterior=mysqli_real_escape_string($con,$_REQUEST['numeroExterior']??'');




    $query="UPDATE empleado SET
        emailEmpleado='".$email."',passwordEmpleado='".$pass."',nombreEmpleado='".$nombre."',apellidoEmpleado='".$apellido."',telefonoempleado='".$telefono."',
        acceso='".$acceso."', Suledo='".$sueldo."'
        where idEmpleado='".$id."';
        ";
    $res=mysqli_query($con,$query);
    $query2="UPDATE direccion SET
        calle='".$calle."',colonia='".$colonia."',codigoPostal='".$codigoPostal."',Estado='".$estado."',numeroExterior='".$numeroExterior."',numeroInterio='".$numeroInterior."' where idDireccion='".$idDireccion."';
        ";
    $re2s=mysqli_query($con,$query2);
    if($res){
        if($re2s){
            echo '<meta http-equiv="refresh" content="0; url=dashboard.php?modulo=empleados&mensaje=Empleado '.$nombre.' editado exitosamente"/>';
        }else{
            ?>

            <div class="alert alert-danger role="alert>
                Error al editar empleado <?php echo mysqli_error($con);?>
            </div>

            <?php
        }

    }else{
        ?>

        <div class="alert alert-danger role="alert>
            Error al editar empleado <?php echo mysqli_error($con);?>
        </div>

        <?php
    }
}
$id=mysqli_real_escape_string($con, $_REQUEST['id']??'');
$query="SELECT idEmpleado,emailEmpleado,passwordEmpleado,nombreEmpleado,apellidoEmpleado,telefonoempleado, acceso,suledo, idDireccion from empleado where idEmpleado='".$id."'; ";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($res);
$query2="SELECT direccion.idDireccion,direccion.calle,direccion.colonia,direccion.codigoPostal,direccion.Estado,direccion.numeroInterio,direccion.numeroExterior from direccion inner join empleado on direccion.idDireccion=empleado.idDireccion where idEmpleado='".$id."'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_assoc($res2);
$queryNombreAcceso=mysqli_query($con,"SELECT acceso from empleado GROUP BY acceso;");
?>



<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Editar Empleado </strong>
                    </div>
                    <div class="card-body">
                        <form action="dashboard.php?modulo=editarEmpleado" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $row['emailEmpleado']; ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombreEmpleado'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" name="apellido" class="form-control" value="<?php echo $row['apellidoEmpleado'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="number" name="telefono" class="form-control" value="<?php echo $row['telefonoempleado'] ?>" required="required">
                            </div>


                            <div class="form-group">
                                <label>Acceso</label>
                                <label type="text" class="form-control" required="required"><?php echo $row['acceso'] ?>
                            </div>


                            <div class="form-group">
                                <select name="acceso">
                                    <?php
                                    while($nombreAcceso=mysqli_fetch_array($queryNombreAcceso)){

                                        ?>
                                        <option value="<?php echo $nombreAcceso['acceso'] ?>"><?php echo $nombreAcceso['acceso'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Sueldo</label>
                                <input type="number" name="sueldo" class="form-control" value="<?php echo $row['suledo'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Calle</label>
                                <input type="text" name="calle" class="form-control" value="<?php echo $row2['calle'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Colonia</label>
                                <input type="text" name="colonia" class="form-control" value="<?php echo $row2['colonia'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Codigo Postal</label>
                                <input type="text" name="codigoPostal" class="form-control" value="<?php echo $row2['codigoPostal'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" name="Estado" class="form-control" value="<?php echo $row2['Estado'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Numero Exterior</label>
                                <input type="number" name="numeroExterior" class="form-control" value="<?php echo $row2['numeroExterior'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Numero Interior</label>
                                <input type="number" name="numeroInterior" class="form-control" value="<?php echo $row2['numeroInterio'] ?>" >
                            </div>
                            <input type="hidden" name="id" value="<?php echo $row['idEmpleado'] ?>" required="required">
                            <input type="hidden" name="idDireccion" value="<?php echo $row2['idDireccion'] ?>" required="required">

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->
