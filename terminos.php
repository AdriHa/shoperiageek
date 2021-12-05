<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Terminos Y condiciones</title>
  <style type="text/css">
        h3 {text-align: center}
        p {text-align: justify}
        
    </style>
</head>


<?php
session_start();
$modulo=$_REQUEST['modulo']??'';


include_once "conexion.php";

$con=mysqli_connect($host,$user,$pass,$db);


if(isset($_REQUEST['sesion']) && $_REQUEST['sesion']=="cerrar"){
    session_destroy();
    header("location: index.php");
/*}else{
    if(isset($_SESSION['idEmpleado'])==false){
        header("location: index.php");
    }else{
        if(isset($_SESSION['idCliente'])==false){
            header("location: index.php");}
    }*/
}

$modulo=$_REQUEST['modulo']??'';
?>


	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ShooperiaGeek</title>

		<!--Dashboard-->
		<link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
		<link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
		<link rel="stylesheet" href="dashboard/elaadmin-master/assets/css/cs-skin-elastic.css">
		<link rel="stylesheet" href="dashboard/elaadmin-master/assets/css/style.css">
		<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
		<link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

		<link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />





















		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +52-449-266-23-541</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> shooperiageek@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Aguascalientes, Ags</a></li>
					</ul>
					<ul class="header-links pull-right">
						<!--<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>-->
						<li>

                            <?php


                                if(isset($_SESSION['idCliente'])==true){

                                        ?>
                                        <div class="user-area dropdown float-right">
                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i>Mi cuenta</a>

                                            <div class="user-menu dropdown-menu">
                                                <a class="nav-link" href="index.php?modulo=editarPerfil&id=<?php echo $_SESSION['idCliente']; ?>"><i class="fa fa- user"></i>Mi perfil</a>

                                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificaciones <span class="count">13</span></a>
                                                <a class="nav-link" href="index.php?modulo=&sesion=cerrar" title="Cerrar sesion">Logout</a>
                                            </div>
                                        </div>
                                        <?php
                                }else{
                                            if(isset($_SESSION['idEmpleado'])==true){

                                                $id=mysqli_real_escape_string($con, $_REQUEST['id']??'');
                                                $query="SELECT idEmpleado,acceso from empleado where idEmpleado='". $_SESSION['idEmpleado']."'; ";
                                                $res=mysqli_query($con,$query);
                                                $row=mysqli_fetch_assoc($res);

                                                ?>
                                                <div class="user-area dropdown float-right">
                                                    <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i>Mi cuenta</a>

                                                    <div class="user-menu dropdown-menu">
                                                        <i class="fa fa- user"></i><?php echo $row['acceso']; ?>
                                                        <a class="nav-link" href="dashboard/elaadmin-master/dashboard.php?modulo=editarEmpleado&id=<?php echo $_SESSION['idEmpleado']; ?>"><i class="fa fa- user"></i>Mi perfil</a>

                                                        <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificaciones <span class="count">13</span></a>
                                                        <a class="nav-link" href="dashboard/elaadmin-master/dashboard.php?modulo=graficos"><i class="fa fa- user"></i>Dashboard</a>
                                                        <a class="nav-link" href="index.php?modulo=&sesion=cerrar" title="Cerrar sesion">Logout</a>
                                                    </div>
                                                </div>

                                                <?php
                                            }else{
                                                 ?>
                                                <div class="user-area  float-right">
                                                <a href="panel.php"  aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o"></i>Logearse</a>
                                                <?php
                                            }
                                    }
                            ?>


						</li>

					</ul>






				</div>









			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php?modulo=principal" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="index.php">
									<select class="input-select">
										<option value="0">Categorias</option>
										<option value="1">Ropa</option>
										<option value="1">Juegos</option>
										<option value="1">Figuras</option>
										<option value="1">Accesorios</option>
									</select>
									<input class="input" placeholder="Buscar..." name="nombreProducto" value="<?php echo $_REQUEST['nombreProducto']??''?>">
									<input type="hidden" name="modulo" value="todosProductos">
                                    <button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!--<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div>-->
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Carrito</span>
										<div class="qty">3</div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/producto-RiskGOT.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Risk Edición Game of Thrones</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$1300.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="./img/star-wars-episode-iv-replica-11-casco-de-stormtrooper-accessory-ver-55712-1.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Casco de Stormtrooper</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>4 articulos seleccionados</small>
											<h5>SUBTOTAL: $4240.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">Ver carro</a>
											<a href="#">Pagar  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
        <!-- /HEADER -->
        <br>

                                </br>
                                    <div>
                                        <h3>Terminos y Condiciones</h3>
                                    </div>
                                    <h4>TÉRMINOS DE LA TIENDA EN LÍNEA</h4>
                                    <p>Al utilizar este sitio, declaras que tienes al menos la mayoría de edad en tu estado o provincia de residencia, o que tienes la mayoría de edad en tu estado o provincia de residencia y que nos has dado tu consentimiento para permitir que cualquiera de 
                                        tus dependientes menores use este sitio.</p>
                                        <p>No puedes usar nuestros productos con ningún propósito ilegal o no autorizado tampoco puedes, en el uso del Servicio, violar cualquier ley en tu jurisdicción (incluyendo pero no limitado a las leyes de derecho de autor).</p>
                                        <p>No debes transmitir gusanos, virus o cualquier código de naturaleza destructiva.</p>
                                        <p>El incumplimiento o violación de cualquiera de estos Términos 
                                            darán lugar al cese inmediato de tus Servicios.</p>
                                            <h4>CONDICIONES GENERALES<h4>
                                                <p>Nos reservamos el derecho de rechazar la prestación de servicio a 
                                                    cualquier persona, por cualquier motivo y en cualquier momento.</p>
                                                    <p>Entiendes que tu contenido (sin incluir la información de tu tarjeta de crédito), 
                                                        puede ser transferida sin encriptar e involucrar (a) transmisiones a través de varias redes; 
                                                        y (b) cambios para ajustarse o adaptarse a los requisitos técnicosde conexión de redes o dispositivos. 
                                                        La información de tarjetas de crédito está siempre encriptada durante la transferencia a través de las redes.</p>
                                                        <p>Estás de acuerdo con no reproducir, duplicar, copiar, vender, revender o explotar cualquier parte del Servicio, 
                                                            uso del Servicio, o acceso al Servicio o cualquier contacto en el sitio web a través del cual se presta el servicio, 
                                                            sin el expreso permiso por escrito de nuestra parte.<p>
                                                        <h4>EXACTITUD, EXHAUSTVIDAD Y ACTUALIDAD DE LA INFORMACIÓN<h4>
                                                            <p>No nos hacemos responsables si la información disponible en este sitio no es exacta, 
                                                                completa o actual. El material en este sitio es provisto solo para información general y 
                                                                no debe confiarse en ella o utilizarse como la única base para la toma de decisiones sin consultar 
                                                                primeramente, información más precisa, completa u oportuna.</p>  
                                                                <p>Cualquier dependencia em el materia de este sitio es bajo su propio riesgo.</p>
                                                                <p>Este sitio puede contener cierta información histórica.  
                                                                    La información histórica, no es necesriamente actual y es provista únicamente para tu referencia.  
                                                                    Nos reservamos el derecho de modificar los contenidos de este sitio en cualquier momento, 
                                                                    pero no tenemos obligación de actualizar cualquier información en nuestro sitio.  
                                                                    Aceptas que es tu responsabilidad de monitorear los cambios en nuestro sitio.</p>
                                                                    <h4> MODIFICACIONES AL SERVICIO Y PRECIOS<h4>
                                                                        <p>Los precios de nuestros productos están sujetos a cambio sin aviso.
                                                                            Nos reservamos el derecho de modificar o discontinuar el Servicio (o cualquier parte del contenido) en cualquier momento sin aviso previo.
                                                                            No seremos responsables ante ti o alguna tercera parte por cualquier modificación, cambio de precio, suspensión o discontinuidad del Servicio.</p>
                                                                            <h4>PRODUCTOS O SERVICIOS (si aplicable)</h4>
                                                                            <p>Ciertos productos o servicios puedene star disponibles exclusivamente en línea a través del sitio web. 
                                                                                Estos productos o servicios pueden tener cantidades limitadas y estar sujetas a 
                                                                                devolución o cambio de acuerdo a nuestra política de devolución solamente.</p>
                                                                                <p>Hemos hecho el esfuerzo de mostrar los colores y las imágenes de nuestros productos, en la tienda, con la mayor precisión de colores posible.  
                                                                                    No podemos garantizar que el monitor de tu computadora muestre los colores de manera exacta.</p>
                                                                                    <p>Nos reservamos el derecho, pero no estamos obligados, para limitar las ventas de nuestros productos o servicios a cualquier persona, 
                                                                                        región geográfica o jurisdicción. Podemos ejercer este derecho basados en cada caso.  
                                                                                        Nos reservamos el derecho de limitar las cantidades de los productos o servicios que ofrecemos.</p>  
                                                                                       <p>Todas las descripciones de productos o precios de los productos están sujetos a cambios en cualquier momento sin previo aviso, 
                                                                                           a nuestra sola discreción. Nos reservamos el derecho de discontinuar cualquier producto en cualquier momento. 
                                                                                            Cualquier oferta de producto o servicio hecho en este sitio es nulo donde esté prohibido.</p>
                                                                                            <p>No garantizamos que la calidad de los productos, servicios, información u otro material comprado u obtenido por ti  cumpla con tus expectativas,
                                                                                                 o que cualquier error en el Servicio será corregido.</p>

 

 





		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p><strong>Suscribete</strong> para más información</p>
							<form>
								<input class="input" type="email" placeholder="Pon tu E-mail">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Suscribirte</button>
							</form>
							<li>
									<a href="https://web.facebook.com/Shoperiageek-102134348431369"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://instagram.com/shoperiageek12?igshid=1fzhzegn1fydy"><i class="fa fa-instagram"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sobre nosotros</h3>
								<p>Somos una tienda dedicada a traer los productos de mayor calidad de todo tipo de series, películas, comics y mangas.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Aguascalientes, Ags</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+52-449-266-23-541</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>shoperiageek@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Secciones</h3>
								<ul class="footer-links">
                                    <li><a href="index.php?modulo=principal">Inicio</a></li>
									<li><a href="#MasVendido">Lo más vendido</a></li>
									<li><a href="#NuevosProductos">Lo más nuevo</a></li>
									<li><a href="#Categorias">Categorias</a></li>

								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
                                <li><a href="quienessomos.php">Sobre nosotros</a></li>
									<li><a href="politicas.php">Politicas de privacidad</a></li>
									<li><a href="devoluciones.php">Devoluciones y Cancelaciones</a></li>
									<li><a href="terminos.php">Términos y condiciones</a></li>
									<li><a href="preguntas.php">Prguntas Frecuentes</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Servicios</h3>
								<ul class="footer-links">
									<li><a href="#">Mi cuenta</a></li>
									<li><a href="#">Ver carrito</a></li>
									<li><a href="#">Seguimiento de mi pedido</a></li>
									<li><a href="#">Ayuda</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>