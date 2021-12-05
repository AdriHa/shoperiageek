<?php

    $where=" where 1=1 ";
    $nombreProducto=mysqli_real_escape_string($con,$_REQUEST['nombreProducto']??'');
    if(empty($nombreProducto)==false){
        $where=" where 1=1 and nombreProducto like '%".$nombreProducto."%'";
    }

    $queryCuenta="SELECT COUNT(*) as cuenta from producto INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
    INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen $where ;";
    $resCuenta=mysqli_query($con,$queryCuenta);
    $rowCuenta=mysqli_fetch_assoc($resCuenta);
    $totalRegistros=$rowCuenta['cuenta'];

    $elementosPorPagina=3;
    $totalPaginas=ceil($totalRegistros/$elementosPorPagina);
    $paginaSel=$_REQUEST['pagina']??false;
    if($paginaSel==false){
        $inicioLimite=0;
        $paginaSel=1;
    }else{
        $inicioLimite=($paginaSel-1)*$elementosPorPagina;
    }
    $limite=" limit $inicioLimite,$elementosPorPagina ";

    $query="SELECT 
    producto.idProducto, producto.nombreProducto, producto.precioOriginal, producto.precioDescuento,imagen.direccionImagen, categoria.nombreCategoria,inventario.cantidadInventario 
    from producto 
    INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
    INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen
    INNER JOIN categoria ON categoria.idCategoria=producto.idCategoria
    INNER JOIN inventario ON inventario.idProducto=producto.idProducto
    $where
    GROUP BY producto.idProducto
    $limite;";
    $res=mysqli_query($con,$query);


    ?>
<br>
    <div class="row col-sm-12" align="center">
    <?php
    while($row=mysqli_fetch_assoc($res)){

        ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-primary">
                <img class="card-img-top img-thumbnail" src="<?php echo $row['direccionImagen'] ?>" alt="">
                <div class="card-body">
                    <h3 class="card-title"><?php echo $row['nombreProducto'] ?></h3>
                    <p class="card-text"><strong>Precio </strong><?php echo $row['precioOriginal'] ?></p>
                    <p class="card-text"><strong>Existencia </strong><?php echo $row['cantidadInventario'] ?></p>
                    <a href="index.php?modulo=detalleProducto&id=<?php echo $row['idProducto'] ?>" class="btn btn-primary">Ver</a>
                </div>
            </div>
        </div>





     <?php
    }

    if($totalPaginas>0){
        ?>

</div>
        <nav aria-label="Page navigation" align="center">
            <ul class="pagination">
                <?php
                if($paginaSel!=1){
                ?>

                <li class="page-item">
                    <a class="page-link" href="index.php?modulo=todosProductos&pagina=<?php echo $paginaSel-1 ?>" area-label="Previous">
                        <span area-hidden="true">&raquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php
                }
                ?>

                <?php
                    for($i=1;$i<=$totalPaginas;$i++){
                ?>
                        <li class="page-item <?php echo ($paginaSel==$i)?" active ":" "; ?>">
                            <a class="page-link" href="index.php?modulo=todosProductos&pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                <?php
                    }
                ?>
                <?php
                    if($paginaSel!=$totalPaginas){



                ?>

                <li class="page-item"><a class="page-link" href="#"></a></li>
                <li class="page-item active">
                    <a class="page-link" href="index.php?modulo=todosProductos&pagina=<?php echo $paginaSel+1 ?>" aria-label="Next">
                        <span area-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
                <?php }?>
            </ul>
        </nav>




    <?php
    }


?>
