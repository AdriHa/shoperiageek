<?php


    include_once "conexion.php";
    $con=mysqli_connect($host,$user,$pass,$db);

    if(isset($_REQUEST['idBorrar'])){
        $id=mysqli_real_escape_string($con,$_REQUEST['idBorrar']??'');
        $query="DELETE from cliente where idCliente='".$id."';";
        $res=mysqli_query($con,$query);
        if($res){
            ?>
                <div class="alert alert-warning float-right" role="alert">
                    <strong>Usuario borrado exitosamente</strong>
                </div>

        <?php
        }else{
            ?>
            <div class="alert alert-danger float-right" role="alert">
                <strong>Error al borrar <?php echo mysqli_error($con);?></strong>
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
                        <strong class="card-title">Usuarios</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                            <tr>

                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Telefono</th>

                                <?php
                                $id2=mysqli_real_escape_string($con, $_REQUEST['id']??'');
                                $query2="SELECT idEmpleado,acceso from empleado where idEmpleado='". $_SESSION['idEmpleado']."'; ";
                                $res2=mysqli_query($con,$query2);
                                $row2=mysqli_fetch_assoc($res2);

                                if($row2['acceso'] =='Administrador'){
                                    ?>
                                    <th>Acciones
                                        <a href="dashboard.php?modulo=crearUsuario"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    </th>
                                    <?php
                                }
                                ?>





                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $query="SELECT idCliente,nombreCliente,emailCliente,passwordCliente,apellidoCliente,telefonoCliente from cliente;  ";
                            $res=mysqli_query($con,$query);


                            while($row=mysqli_fetch_assoc($res)){

                            ?>

                            <tr>
                                <th> <?php echo $row['nombreCliente']  ?> </th>
                                <th> <?php echo $row['apellidoCliente']  ?> </th>
                                <th> <?php echo $row['emailCliente']  ?> </th>
                                <th> <?php echo $row['telefonoCliente']  ?> </th>


                                <?php
                                $id1=mysqli_real_escape_string($con, $_REQUEST['id']??'');
                                $query1="SELECT idEmpleado,acceso from empleado where idEmpleado='". $_SESSION['idEmpleado']."'; ";
                                $res1=mysqli_query($con,$query1);
                                $row1=mysqli_fetch_assoc($res1);

                                if($row1['acceso'] =='Administrador'){
                                    ?>
                                    <th>
                                        <a href="dashboard.php?modulo=editarUsuario&id=<?php echo $row['idCliente'] ?>" style="margin-right: 10%"><i class="fa fa-edit"></i></a>
                                        <a href="dashboard.php?modulo=usuarios&idBorrar=<?php echo $row['idCliente'] ?>" class="text-danger borrar"><i class="fa fa-trash"></i></a>
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
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <tr>
                    <td>id</td>
                    <td>idCliente</td>
                    <td>fecha</td>
                    <td>responsable</td>
                    <td>actividad realizada</td>
                    <td>informacion actual</td>
                    <td>informacion anterior</td>
                </tr>

                <?php
                $query="SELECT * from bitacoracliente";
                $res=mysqli_query($con,$query);


                while($row=mysqli_fetch_assoc($res)){
                ?>

                <tr>
                    <td><?php echo $row['idBitacoraCliente']  ?></td>
                    <td><?php echo $row['idCliente']  ?></td>
                    <td><?php echo $row['fecha']  ?></td>
                    <td><?php echo $row['responsable']  ?></td>
                    <td><?php echo $row['actividad_realizada']  ?></td>
                    <td><?php echo $row['informacion_actual']  ?></td>
                    <td><?php echo $row['informacion_actual']  ?></td>
                </tr>
                <?php
                }
                ?>    
            </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->









