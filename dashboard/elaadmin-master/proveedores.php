<?php


include_once "conexion.php";
$con=mysqli_connect($host,$user,$pass,$db);

if(isset($_REQUEST['idBorrar'])){
    $id=mysqli_real_escape_string($con,$_REQUEST['idBorrar']??'');
    $query="DELETE from proveedor where idProveedor='".$id."';";
    $res=mysqli_query($con,$query);
    if($res){
        ?>
        <div class="alert alert-warning float-right" role="alert">
            <strong>Proveedor borrado exitosamente</strong>
        </div>

        <?php
    }else{
        ?>
        <div class="alert alert-danger float-right" role="alert">
            <strong>Error al proveedor <?php echo mysqli_error($con);?></strong>
        </div>
        <?php
    }
}

?>


<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Proveedores</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>

                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Estado</th>

                                <?php
                                $id2=mysqli_real_escape_string($con, $_REQUEST['id']??'');
                                $query2="SELECT idEmpleado,acceso from empleado where idEmpleado='". $_SESSION['idEmpleado']."'; ";
                                $res2=mysqli_query($con,$query2);
                                $row2=mysqli_fetch_assoc($res2);

                                if($row2['acceso'] =='Administrador'){
                                    ?>
                                    <th>Acciones
                                        <a href="dashboard.php?modulo=crearProveedor"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </th>
                                    <?php
                                }
                                ?>





                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $query="SELECT idProveedor, nombreProveedor,emailProveedor,telefonoProveedor,idDireccion from proveedor;  ";
                            $res=mysqli_query($con,$query);
                            $query2="SELECT proveedor.idProveedor,proveedor.nombreProveedor,proveedor.emailProveedor,proveedor.telefonoProveedor,direccion.idDireccion,direccion.Estado from direccion INNER JOIN proveedor ON direccion.idDireccion=proveedor.idDireccion";
                            $res2=mysqli_query($con,$query2);

                            while($row=mysqli_fetch_assoc($res2)){

                                ?>

                                <tr>
                                    <th> <?php echo $row['nombreProveedor']  ?> </th>
                                    <th> <?php echo $row['emailProveedor']  ?> </th>
                                    <th> <?php echo $row['telefonoProveedor']  ?> </th>
                                    <th> <?php echo $row['Estado']  ?> </th>


                                    <?php
                                    $id1=mysqli_real_escape_string($con, $_REQUEST['id']??'');
                                    $query1="SELECT idEmpleado,acceso from empleado where idEmpleado='". $_SESSION['idEmpleado']."'; ";
                                    $res1=mysqli_query($con,$query1);
                                    $row1=mysqli_fetch_assoc($res1);

                                    if($row1['acceso'] =='Administrador'){
                                        ?>
                                        <th>
                                            <a href="dashboard.php?modulo=editarProveedor&id=<?php echo $row['idProveedor'] ?>" style="margin-right: 10%"><i class="fa fa-edit"></i></a>
                                            <a href="dashboard.php?modulo=proveedores&idBorrar=<?php echo $row['idProveedor'] ?>" class="text-danger borrar"><i class="fa fa-trash"></i></a>
                                        </th>
                                        <?php
                                    }
                                    ?>


                                </tr>

                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->




