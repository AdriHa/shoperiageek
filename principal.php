<!-- SECTION -->
<?php
include_once "conexion.php";
$con=mysqli_connect($host,$user,$pass,$db);
$query="SELECT 
producto.idProducto,producto.idProducto, producto.nombreProducto, producto.precioOriginal, producto.precioDescuento,imagen.direccionImagen, categoria.nombreCategoria 
from producto 
INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen
INNER JOIN categoria ON categoria.idCategoria=producto.idCategoria
GROUP BY producto.idProducto
ORDER BY producto.idProducto DESC;";
$res=mysqli_query($con,$query);

$queryMasVendidos="SELECT 
producto.idProducto,producto.nombreProducto, producto.precioOriginal, producto.precioDescuento,imagen.direccionImagen, categoria.nombreCategoria, detallePedido.cantidadCompra
from producto 
INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen
INNER JOIN categoria ON categoria.idCategoria=producto.idCategoria
INNER JOIN detallePedido ON detallePedido.idProducto=producto.idProducto
GROUP BY producto.idProducto
ORDER BY detallePedido.cantidadCompra DESC;";
$resMasVendidos=mysqli_query($con,$queryMasVendidos);

$queryCategorias="SELECT nombreCategoria from categoria;";
$resCategorias=mysqli_query($con,$queryCategorias);

$variableCategoriaAlAzar=random_int(1,3);
$queryDeCategoriaAlAzar="SELECT producto.idProducto,categoria.idCategoria,producto.idProducto, producto.nombreProducto, producto.precioOriginal, producto.precioDescuento,imagen.direccionImagen, categoria.nombreCategoria 
from producto
INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen
INNER JOIN categoria ON categoria.idCategoria=producto.idCategoria
WHERE categoria.idCategoria='".$variableCategoriaAlAzar."'
GROUP BY producto.idProducto 
;";
$resDeCategoriaAlAzar=mysqli_query($con,$queryDeCategoriaAlAzar);
$retDeCategoriaAlAzar=mysqli_fetch_assoc($resDeCategoriaAlAzar);




?>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title" id="NuevosProductos">Nuevos productos</h3>
                    <!-- <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                            <?php
                            $contador1=-1;
                            while($row=mysqli_fetch_assoc($res)){
                                $contador1=$contador1+1;
                                if($contador1==5){
                                    break;
                                }
                                ?>
                                <!-- product -->
                                <div class="product">
                                    <div class="product-img">
                                        <img src="<?php echo $row['direccionImagen']?>" alt="">
                                        <?php

                                        if($row['precioDescuento']!=0 && $row['precioDescuento']!=null ){
                                            ?>
                                        <div class="product-label">
                                            <span class="sale">

                                                <?php

                                                $porcentajeDescuento=100-(($row['precioDescuento']*100)/$row['precioOriginal']);
                                                echo round($porcentajeDescuento,1);
                                                ?>

                                                %</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $row['nombreCategoria'] ?> </p>
                                            <h3 class="product-name"><a href="#"><?php echo $row['nombreProducto']?></a></h3>
                                            <h4 class="product-price"><?php echo $row['precioDescuento'] ?> <del class="product-old-price">$<?php echo $row['precioOriginal'] ?> </del></h4>


                                            <?php
                                        }else{
                                                ?>
                                        </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $row['nombreCategoria'] ?> </p>
                                        <h3 class="product-name"><a href="#"><?php echo $row['nombreProducto']?></a></h3>
                                        <h4 class="product-price"><?php echo $row['precioOriginal'] ?></h4>



                                            <?php
                                            }

                                        ?>


                                        <div class="product-btns">
                                            <!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>-->
                                            <!--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>-->
                                            <a href="index.php?modulo=detalleProducto&id=<?php echo $row['idProducto'] ?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> Vista rápida</span></a>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                                <!--php-->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!--php-->

<!-- HOT DEAL SECTION -->

<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title" id="MasVendido">Más vendido</h3>
                    <!--<div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab2">Accessories</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php
                                $contador1=-1;
                                while($row=mysqli_fetch_assoc($resMasVendidos)){
                                    $contador1=$contador1+1;
                                    if($contador1==5){
                                        break;
                                    }
                                    ?>
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="<?php echo $row['direccionImagen']?>" alt="">
                                            <?php

                                            if($row['precioDescuento']!=0 && $row['precioDescuento']!=null ){
                                            ?>
                                            <div class="product-label">
                                            <span class="sale">

                                                <?php

                                                $porcentajeDescuento=100-(($row['precioDescuento']*100)/$row['precioOriginal']);
                                                echo round($porcentajeDescuento,1);
                                                ?>

                                                %</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $row['nombreCategoria'] ?> </p>
                                            <h3 class="product-name"><a href="#"><?php echo $row['nombreProducto']?></a></h3>
                                            <h4 class="product-price"><?php echo $row['precioDescuento'] ?> <del class="product-old-price">$<?php echo $row['precioOriginal'] ?> </del></h4>


                                            <?php
                                            }else{
                                            ?>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $row['nombreCategoria'] ?> </p>
                                            <h3 class="product-name"><a href="#"><?php echo $row['nombreProducto']?></a></h3>
                                            <h4 class="product-price"><?php echo $row['precioOriginal'] ?></h4>



                                            <?php
                                            }

                                            ?>

                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                                <!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>-->
                                                <!--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>-->
                                                <a href="index.php?modulo=detalleProducto&id=<?php echo $row['idProducto'] ?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> Vista rápida</span></a>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <!--php-->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION  categorias-->

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->

        <div class="row" id="Categorias">
            <?php $contador2=-1; ?>
            <?php while($rowCategoria=mysqli_fetch_assoc($resCategorias)){
                $contador2=$contador2+1;

                if($contador2>=3){
                    break;
                }


                ?>



            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title" id="<?php echo $rowCategoria['nombreCategoria'] ?>"><?php echo $rowCategoria['nombreCategoria'] ?></h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-5">
                    <div>
                        <!-- product widget -->
                        <?php
                        $variableCategoriaWidget=$rowCategoria['nombreCategoria'];
                        $queryCategoriaWidget="select producto.idProducto,producto.nombreProducto, producto.precioOriginal, producto.precioDescuento, categoria.nombreCategoria, imagen.direccionImagen 
                        from producto 
                        INNER JOIN categoria ON producto.idCategoria=categoria.idCategoria
                        INNER JOIN producto_imagen ON producto_imagen.idProducto=producto.idProducto 
                        INNER JOIN imagen ON imagen.idImagen=producto_imagen.idImagen
                        WHERE categoria.nombreCategoria='".$variableCategoriaWidget."'
                        GROUP BY producto.idProducto;
                        ";


                        $resCategoriaWidget=mysqli_query($con,$queryCategoriaWidget);
                        $contador3=-1;
                        while($rowCategoriaWidget=mysqli_fetch_assoc($resCategoriaWidget)){
                            $contador3=$contador3+1;
                            if($contador3>=3){
                                break;
                            }
                        ?>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="<?php echo $rowCategoriaWidget['direccionImagen'];?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $rowCategoriaWidget['nombreCategoria'];?></p>
                                <h3 class="product-name"><a href="index.php?modulo=detalleProducto&id=<?php echo $rowCategoriaWidget['idProducto'] ?>"><?php echo $rowCategoriaWidget['nombreProducto'];?></a></h3>

                                <?php

                                if($rowCategoriaWidget['precioDescuento']!=0 && $rowCategoriaWidget['precioDescuento']!=null){
                                    ?>
                                    <h4 class="product-price">$<?php echo $rowCategoriaWidget['precioDescuento'];?> <del class="product-old-price">$<?php echo $rowCategoriaWidget['precioOriginal'];?></del></h4>



                                    <?php
                                }else{
                                    ?>

                                    <h4 class="product-price">$<?php echo $rowCategoriaWidget['precioOriginal'];?></h4>

                                <?php }

                                ?>

                                </div>
                        </div>
                        <?php } ?>
                        <!-- /product widget -->


                    </div>
                </div>
            </div>
                <div class="clearfix visible-sm visible-xs"></div>
            <?php }?>










        </div>
        <!-- /row -->

    </div>

    <!-- /container -->
</div>

<!-- /SECTION -->

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title" id="<?php echo $retDeCategoriaAlAzar['nombreCategoria'] ?>"><?php echo $retDeCategoriaAlAzar['nombreCategoria'] ?></h3>
                    <!-- <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                            <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                            <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                            <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php
                                $contador4=-1;
                                while($row=mysqli_fetch_assoc($resDeCategoriaAlAzar)){
                                    $contador4=$contador4+1;
                                    if($contador4==5){
                                        break;
                                    }
                                    ?>
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="<?php echo $row['direccionImagen']?>" alt="">
                                            <?php

                                            if($row['precioDescuento']!=0 && $row['precioDescuento']!=null ){
                                            ?>
                                            <div class="product-label">
                                            <span class="sale">

                                                <?php

                                                $porcentajeDescuento=100-(($row['precioDescuento']*100)/$row['precioOriginal']);
                                                echo round($porcentajeDescuento,1);
                                                ?>

                                                %</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $row['nombreCategoria'] ?> </p>
                                            <h3 class="product-name"><a href="#"><?php echo $row['nombreProducto']?></a></h3>
                                            <h4 class="product-price"><?php echo $row['precioDescuento'] ?> <del class="product-old-price">$<?php echo $row['precioOriginal'] ?> </del></h4>


                                            <?php
                                            }else{
                                            ?>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $row['nombreCategoria'] ?> </p>
                                            <h3 class="product-name"><a href="#"><?php echo $row['nombreProducto']?></a></h3>
                                            <h4 class="product-price"><?php echo $row['precioOriginal'] ?></h4>



                                            <?php
                                            }

                                            ?>


                                            <div class="product-btns">
                                                <!--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>-->
                                                <!--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>-->
                                                <a href="index.php?modulo=detalleProducto&id=<?php echo $row['idProducto'] ?>" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"> Vista rápida</span></a>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Añadir al carrito</button>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <!--php-->
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
