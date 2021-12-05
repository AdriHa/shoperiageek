



<?php
    $id=mysqli_real_escape_string($con,$_REQUEST['id']??'');
    $queryProducto="SELECT producto.idProducto, producto.nombreProducto, producto.precioOriginal, producto.precioDescuento,producto.descripcion, inventario.cantidadInventario,categoria.nombreCategoria,franquicia.nombreFranquicia, imagen.direccionImagen
    from producto 
    INNER JOIN inventario ON producto.idProducto=inventario.idProducto
    INNER JOIN categoria ON categoria.idCategoria=producto.idCategoria
    INNER JOIN franquicia ON franquicia.idFranquicia=producto.idFranquicia
    INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
    INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen
    WHERE producto.idProducto='$id';";
    $resProducto=mysqli_query($con,$queryProducto);
    $rowProducto=mysqli_fetch_assoc($resProducto);

    $queryComentario="SELECT producto.idProducto, cliente.nombreCliente, comentario.Comentario
    from producto
    INNER JOIN comentario ON comentario.idProducto=producto.idProducto
    INNER JOIN cliente ON cliente.idCliente=comentario.idCliente
    WHERE producto.idProducto='$id';";
    $resComentario=mysqli_query($con,$queryComentario);

    $queryImagenes="SELECT imagen.direccionImagen,imagen.idImagen
    from producto
    INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
    INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen
    WHERE producto.idProducto='$id'
    ORDER BY imagen.idImagen;";
    $resImagenes=mysqli_query($con,$queryImagenes);
    $resImagenesMain=mysqli_query($con,$queryImagenes);






    $queryCantidadComentarios="SELECT COUNT(*) 
    as cantidadComentarios from Comentario 
    INNER JOIN producto ON producto.idProducto=Comentario.idProducto 
    WHERE producto.idProducto='$id';";
    $resCantidadComentarios=mysqli_query($con,$queryCantidadComentarios);
    $rowCantidadComentarios=mysqli_fetch_assoc($resCantidadComentarios);


?>



<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->


            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">

                    <!--While de php-->


                    <?php
                    while($row1=mysqli_fetch_assoc($resImagenesMain)){
                        ?>
                        <div class="product-preview">
                            <img src="<?php echo $row1['direccionImagen'] ?>" alt="">
                        </div>
                        <?php
                    }
                    ?>


                </div>
            </div>



            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">

                    <!--While de php-->
                    <?php
                    while($row=mysqli_fetch_assoc($resImagenes)){
                        ?>
                        <div class="product-preview">
                            <img src="<?php echo $row['direccionImagen'] ?>" alt="">
                        </div>
                        <?php
                    }
                    ?>


                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"><?php echo $rowProducto['nombreProducto'] ?></h2>
                    <div>

                        <a class="review-link" href="#"><?php echo $rowCantidadComentarios['cantidadComentarios'] ?> comentarios | Deja tu comentario</a>
                    </div>
                    <div>
                        <?php
                        if($rowProducto['precioDescuento']!=0 && $rowProducto['precioDescuento']!=null ){
                        ?>

                        <h3 class="product-price">$<?php echo $rowProducto['precioDescuento'] ?><del class="product-old-price">$<?php echo $rowProducto['precioOriginal'] ?></del></h3>

                        <?php
                        }else{
                            ?>
                            <h3 class="product-price"><?php echo $rowProducto['precioOriginal'] ?></h3>
                        <?php
                        }
                        ?>


                        <span class="product-available"><?php echo $rowProducto['cantidadInventario'] ?> en inventario</span>
                    </div>
                    <p><?php echo $rowProducto['descripcion'] ?></p>



                    <div class="add-to-cart">
                        <div class="qty-label">
                            Cantidad
                            <div class="input-number">
                                <input type="number" id="cantidadProducto" value="1">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                        <button class="add-to-cart-btn" id="agregarCarrito"
                                data-id="<?php echo $rowProducto['idProducto'] ?>"
                                data-nombre="<?php echo $rowProducto['nombreProducto'] ?>"
                                data-direccionImagen="<?php echo $rowProducto['direccionImagen'] ?>"
                                >
                            <i class="fa fa-shopping-cart" ></i> Agregar al carrito</button>
                    </div>

                    <ul class="product-btns">
                        <!--<li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>-->

                    </ul>

                    <ul class="product-links">
                        <li>Categoria y franquicia:</li>
                        <li><a href="#"><?php echo $rowProducto['nombreCategoria'] ?></a></li>
                        <li><a href="#"><?php echo $rowProducto['nombreFranquicia'] ?></a></li>
                    </ul>



                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Descripción</a></li>
                        <li><a data-toggle="tab" href="#tab3">Comentarios</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $rowProducto['descripcion'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->

                        <!-- tab3  -->
                        <div id="tab3" class="tab-pane fade in">
                            <div class="row">
                                <!-- Rating -->

                                <!-- /Rating -->

                                <!-- Reviews -->
                                <div class="col-md-6">
                                    <div id="reviews">
                                        <ul class="reviews">

                                            <?php
                                            $contadorComentario=-1;
                                            while($row=mysqli_fetch_assoc($resComentario)){
                                                $contadorComentario=$contadorComentario+1;
                                                if($contadorComentario==3){
                                                    break;
                                                }
                                                ?>
                                            <li>
                                                <div class="review-heading">
                                                    <h5 class="name"><?php echo $row['nombreCliente']?></h5>

                                                </div>
                                                <div class="review-body">
                                                    <p><?php echo $row['Comentario']?></p>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>

                                    </div>
                                </div>
                                <!-- /Reviews -->

                                <!-- Review Form -->
                                <div class="col-md-3">
                                    <div id="review-form">
                                        <form class="review-form">
                                            <input class="input" type="text" placeholder="Your Name">
                                            <input class="input" type="email" placeholder="Your Email">
                                            <textarea class="input" placeholder="Your Review"></textarea>

                                            <button class="primary-btn">Submit</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- /Review Form -->
                            </div>
                        </div>
                        <!-- /tab3  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->





