<?php

include_once "conexion.php";
$con=mysqli_connect($host,$user,$pass,$db);




if(isset($_REQUEST['guardar'])){
    $nombre=mysqli_real_escape_string($con,$_REQUEST['nombre']??'');
    $precioOriginal=mysqli_real_escape_string($con,$_REQUEST['precioOriginal']??'');
    $precioDescuento=mysqli_real_escape_string($con,$_REQUEST['precioDescuento']??'');
    $descripcion=mysqli_real_escape_string($con,$_REQUEST['descripcion']??'');
    $id=mysqli_real_escape_string($con,$_REQUEST['id']??'');
    $nombreProveedor=mysqli_real_escape_string($con,$_REQUEST['nombreProveedor']??'');
    $nombreFranquicia=mysqli_real_escape_string($con,$_REQUEST['nombreFranquicia']??'');
    $nombreCategoria=mysqli_real_escape_string($con,$_REQUEST['nombreCategoria']??'');






    $query2="SELECT nombreProveedor,idProveedor from proveedor where nombreProveedor='".$nombreProveedor."';
    ";
    $re2s=mysqli_query($con,$query2);
    $row3=mysqli_fetch_assoc($re2s);
    $idProveedorS=$row3['idProveedor']??'';

    $query3="SELECT nombreFranquicia,idFranquicia from franquicia where nombreFranquicia='".$nombreFranquicia."';
    ";
    $re3s=mysqli_query($con,$query3);
    $row4=mysqli_fetch_assoc($re3s);
    $idFranquiciaS=$row4['idFranquicia']??'';

    $query4="SELECT nombreCategoria,idCategoria from categoria where nombreCategoria='".$nombreCategoria."';
    ";
    $re4s=mysqli_query($con,$query4);
    $row5=mysqli_fetch_assoc($re4s);
    $idCategoriaS=$row5['idCategoria']??'';



    $query="UPDATE producto SET
        nombreProducto='".$nombre."',precioOriginal='".$precioOriginal."',precioDescuento='".$precioDescuento."',descripcion='".$descripcion."',idFranquicia='".$idFranquiciaS."',idCategoria='".$idCategoriaS."', idProveedor='".$idProveedorS."'
        where idProducto='".$id."';
        ";
    $res=mysqli_query($con,$query);


    if($res){
        if($re2s){
            echo '<meta http-equiv="refresh" content="0; url=dashboard.php?modulo=productos&mensaje=Producto '.$nombre.' editado exitosamente"/>';
        }else{
            ?>

            <div class="alert alert-danger role="alert>
                Error al editar producto <?php echo mysqli_error($con);?>
            </div>

            <?php
        }

    }else{
        ?>

        <div class="alert alert-danger role="alert>
            Error al editar producto <?php echo mysqli_error($con);?>
        </div>

        <?php
    }
}
$id=mysqli_real_escape_string($con, $_REQUEST['id']??'');
$query="SELECT idProducto,nombreProducto,precioOriginal, precioDescuento,descripcion from producto where idProducto='".$id."'; ";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($res);
$query2="SELECT proveedor.idProveedor,proveedor.nombreProveedor from proveedor inner join producto on proveedor.idProveedor=producto.idProveedor where idProducto='".$id."'";
$res2=mysqli_query($con,$query2);
$row2=mysqli_fetch_assoc($res2);
$queryNombreProveedores=mysqli_query($con,"SELECT idProveedor,nombreProveedor from proveedor;");

$query3="SELECT franquicia.idFranquicia,franquicia.nombreFranquicia from franquicia inner join producto on franquicia.idFranquicia=producto.idFranquicia where idProducto='".$id."'";
$res3=mysqli_query($con,$query3);
$row3=mysqli_fetch_assoc($res3);
$queryNombreFranquicias=mysqli_query($con,"SELECT idFranquicia,nombreFranquicia from franquicia;");

$query4="SELECT categoria.idCategoria,categoria.nombreCategoria from categoria inner join producto on categoria.idCategoria=producto.idCategoria where idProducto='".$id."'";
$res4=mysqli_query($con,$query4);
$row4=mysqli_fetch_assoc($res4);
$queryNombreCategorias=mysqli_query($con,"SELECT idCategoria,nombreCategoria from categoria;");



?>



<div class="content">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Editar Producto </strong>
                    </div>
                    <div class="card-body">
                        <form action="dashboard.php?modulo=editarProducto" method="post">
                            <div class="form-group">
                                <label>Nombre Producto</label>
                                <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombreProducto']; ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Precio</label>
                                <input type="number" name="precioOriginal" class="form-control" value="<?php echo $row['precioOriginal']; ?>"required="required">
                            </div>
                            <div class="form-group">
                                <label>Precio descuento</label>
                                <input type="number" name="precioDescuento" class="form-control" value="<?php echo $row['precioDescuento']; ?>"required="required">
                            </div>
                            <div class="form-group">
                                <label>Descripcion</label>
                                <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion'] ?>" required="required">
                            </div>
                            <div class="form-group">
                                <label>Nombre Franquicia</label>
                                <label type="text" class="form-control" required="required"><?php echo $row3['nombreFranquicia'] ?>
                            </div>
                            <div class="form-group">
                                <select name="nombreFranquicia">
                                    <?php
                                    while($nombreFranquicias=mysqli_fetch_array($queryNombreFranquicias)){

                                        ?>
                                        <option value="<?php echo $nombreFranquicias['nombreFranquicia'] ?>"><?php echo $nombreFranquicias['nombreFranquicia'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nombre Categoria</label>
                                <label type="text" class="form-control" required="required"><?php echo $row4['nombreCategoria'] ?>
                            </div>
                            <div class="form-group">
                                <select name="nombreCategoria">
                                    <?php
                                    while($nombreCategorias=mysqli_fetch_array($queryNombreCategorias)){

                                        ?>
                                        <option value="<?php echo $nombreCategorias['nombreCategoria'] ?>"><?php echo $nombreCategorias['nombreCategoria'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nombre Proveedor</label>
                                <label type="text" class="form-control" required="required"><?php echo $row2['nombreProveedor'] ?>
                            </div>
                            <div class="form-group">
                                <select name="nombreProveedor">
                                    <?php
                                    while($nombreProveedores=mysqli_fetch_array($queryNombreProveedores)){

                                        ?>
                                        <option value="<?php echo $nombreProveedores['nombreProveedor'] ?>"><?php echo $nombreProveedores['nombreProveedor'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>



                            <input type="hidden" name="id" value="<?php echo $row['idProducto'] ?>" required="required">

                            <input type="hidden" name="idProveedor" value="<?php echo $row2['idProveedor'] ?>" required="required">
                            <input type="hidden" name="idFranquicia" value="<?php echo $row3['idFranquicia'] ?>" required="required">
                            <input type="hidden" name="idCategoria" value="<?php echo $row4['idCategoria'] ?>" required="required">

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
