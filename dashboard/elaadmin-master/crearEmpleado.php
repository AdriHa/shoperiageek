<?php

include_once "../../conexion.php";
$con=mysqli_connect($host,$user,$pass,$db);




if(isset($_REQUEST['guardar'])){
    $email=mysqli_real_escape_string($con,$_REQUEST['email']??'');
    $pass=md5(mysqli_real_escape_string($con,$_REQUEST['password']??''));
    $nombre=mysqli_real_escape_string($con,$_REQUEST['nombre']??'');
    $apellido=mysqli_real_escape_string($con,$_REQUEST['apellido']??'');
    $telefono=mysqli_real_escape_string($con,$_REQUEST['telefono']??'');
    $acceso=mysqli_real_escape_string($con,$_REQUEST['acceso']??'');
    $Sueldo=mysqli_real_escape_string($con,$_REQUEST['sueldo']??'');
    $calle=mysqli_real_escape_string($con,$_REQUEST['calle']??'');
    $colonia=mysqli_real_escape_string($con,$_REQUEST['colonia']??'');
    $codigoPostal=mysqli_real_escape_string($con,$_REQUEST['codigoPostal']??'');
    $estado=mysqli_real_escape_string($con,$_REQUEST['estado']??'');
    $numeroInterior=mysqli_real_escape_string($con,$_REQUEST['numeroInterior']??'');
    $numeroExterior=mysqli_real_escape_string($con,$_REQUEST['numeroExterior']??'');



    $query2="INSERT INTO direccion
        (calle,colonia,codigoPostal,Estado,numeroInterio,numeroExterior) VALUES
        ('".$calle."','".$colonia."','".$codigoPostal."','".$estado."','".$numeroInterior."','".$numeroExterior."')";
    $res2=mysqli_query($con,$query2);

    $idDireccionForanea=mysqli_insert_id($con);




    $query="INSERT INTO empleado
        (emailEmpleado,passwordEmpleado,nombreEmpleado,apellidoEmpleado,telefonoempleado,acceso,suledo,idDireccion) VALUES
        ('".$email."','".$pass."','".$nombre."','".$apellido."','".$telefono."','".$acceso."','".$Sueldo."','".$idDireccionForanea."')";
    $res=mysqli_query($con,$query);

    if($res){
        echo '<meta http-equiv="refresh" content="0; url=dashboard.php?modulo=empleados&mensaje=Empleado creado"/>';
    }else{
        ?>

        <div class="alert alert-danger role="alert>
            Error al crear empleado <?php echo mysqli_error($con);?>
        </div>

        <?php
    }


}
$queryNombreAcceso=mysqli_query($con,"SELECT acceso from empleado GROUP BY acceso;");
?>



<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Crear Empleado</strong>
                    </div>
                    <div class="card-body">
                        <form action="dashboard.php?modulo=crearEmpleado" method="post" required="required">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" name="apellido" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="number" name="telefono" class="form-control" required="required">
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
                                <input type="number" name="sueldo" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Calle</label>
                                <input type="text" name="calle" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Colonia</label>
                                <input type="text" name="colonia" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Codigo Postal</label>
                                <input type="text" name="codigoPostal" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" name="estado" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label>Numero Interior</label>
                                <input type="number" name="numeroInterior" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Numero Exterior</label>
                                <input type="number" name="numeroExterior" class="form-control" required="required">
                            </div>
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