<!DOCTYPE html>
<html lang="en">
<head>
    <style type="text/css">
        h3 {text-align: center}
        p {text-align: justify}
        #texto{text-indent: 30pt;}
    </style>
  <meta charset="UTF-8">
  <title>Politicas de Privacidad</title>
</head>


<?php
session_destroy();

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
		









			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			

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
									
										
										<span></span>
										<div class="qty"></div>
									</a>
									<div class="cart-dropdown" id="listaCarrito">

                                        <div class="cart-summary">
<p>camiseta The Warriors grupo M</p>
<p><img src="img/theWarriors_cinePlayeraM.jpg" width="100" height="100"></p>                                            

<p>camiseta The Warriors grupo S</p>
<p><img src="img/theWarriors_cinePlayeraS.jpg" width="100" height="100"><p/>
<small>2 articulos seleccionados</small>
                                            <h5>TOTAL: $440.00</h5>

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
<div align=>
<table class="default">
<tr>
<th>Articulo</th>
<th>Imagen</th>
<th>Precio</th>
</tr>
<tr>
<td>camiseta The Warriors grupo M</td>
<td><img src="img/theWarriors_cinePlayeraM.jpg" height="200" width=200"></td>
<td>$220</td>
</tr>
<tr>
<td>camiseta The Warriors grupo S</td>
<td><img src="img/theWarriors_cinePlayeraS.jpg" height="200" width=200"></td>
<td>$220</td>
</tr>
<tr>
<td>Dos articulos</td>
<td></td>
<td>Total: $440</td>
</tr>
<tr>
<td></td>
<td></td>
<td><a href="index.php?modulo=pagar"><button type"button">Pagar</button></a></td>
</table>
</div>












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
							<ul class="newsletter-follow">
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
