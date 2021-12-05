-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2020 a las 06:12:36
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shoperiageek`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoracliente`
--

CREATE TABLE `bitacoracliente` (
  `idBitacoraCliente` int(20) NOT NULL,
  `idCliente` int(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `responsable` varchar(30) NOT NULL,
  `actividad_realizada` varchar(50) NOT NULL,
  `informacion_actual` text NOT NULL,
  `informacion_anterior` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoraempleado`
--

CREATE TABLE `bitacoraempleado` (
  `idBitacoraEmpleado` int(20) NOT NULL,
  `idEmpleado` int(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `responsable` varchar(30) NOT NULL,
  `actividad_realizada` varchar(50) NOT NULL,
  `informacion_actual` text NOT NULL,
  `informacion_anterior` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoraproducto`
--

CREATE TABLE `bitacoraproducto` (
  `idBitacoraProducto` int(20) NOT NULL,
  `idProducto` int(20) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `responsable` varchar(30) NOT NULL,
  `actividad_realizada` varchar(50) NOT NULL,
  `informacion_actual` text NOT NULL,
  `informacion_anterior` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bitacoraproducto`
--

INSERT INTO `bitacoraproducto` (`idBitacoraProducto`, `idProducto`, `fecha`, `responsable`, `actividad_realizada`, `informacion_actual`, `informacion_anterior`) VALUES
(1, 1, '2020-12-04 23:11:29', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta The Warriors grupo L 220.00 200.00 camiseta tamaño L 1 1 1', ''),
(2, 1, '2020-12-06 07:40:55', 'root@localhost', 'Se ELIMINO un producto', 'informacion anterior: camiseta The Warriors grupo L 220.00 200.00 camiseta tamaño L 1 11', ''),
(3, 1, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta The Warriors grupo L 220.00 200.00 camiseta tamaño L 1 1 1', ''),
(4, 2, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta The Warriors grupo M 220.00 0.00 camiseta tamaño M 1 1 1', ''),
(5, 3, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta The Warriors grupo S 220.00 0.00 camiseta tamaño S 1 1 1', ''),
(6, 4, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta el Padrino L 349.00 0.00 camisa tamaño L 2 1 1', ''),
(7, 5, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta el Padrino S 349.00 0.00 camisa tamaño S 2 1 1', ''),
(8, 6, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta La Chaqueta Metalica  599.00 0.00 camiseta tamaño XXL 3 1 1', ''),
(9, 7, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: camiseta La Chaqueta Metalica  599.00 0.00 camiseta tamaño XL 3 1 1', ''),
(10, 8, '2020-12-06 07:41:30', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura deus ex mankind divided 499.00 0.00 figura de 30 cm 4 2 3', ''),
(11, 9, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: taza crusader kings 239.00 0.00 taza adornada 5 2 3', ''),
(12, 10, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: taza city skylines 199.00 0.00 taza 6 2 3', ''),
(13, 11, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura pop Dune: Lady Jessica 699.00 0.00 figura Dune 7 3 2', ''),
(14, 12, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura pop Dune: Duncan Idaho 899.00 0.00 figura Dune 7 3 2', ''),
(15, 13, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura porp Dune: Duke Leto 700.00 0.00 figura dune 7 3 2', ''),
(16, 14, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura porp Dune: Baron Karkon 759.00 0.00 figura dune 7 3 2', ''),
(17, 15, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura qposket kimetsu no yaib 499.00 0.00 figura Tanjiro 14 cm 8 4 2', ''),
(18, 16, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura banpresto Saint Seiya M 439.00 0.00 figura banpresto 16 cm 9 4 2', ''),
(19, 17, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura qposket kimetsu no yaib 499.00 0.00 figura Vib Nezuko 12 cm 8 4 2', ''),
(20, 18, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: figura Banpresto One Piece Luf 899.00 0.00 figura One piece 13 cm 9 4 2', ''),
(21, 19, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: Display mazos star realms colo 199.00 0.00 juego de cartas 6pz 10 5 3', ''),
(22, 20, '2020-12-06 07:41:31', 'root@localhost', 'Se inserto nuevo producto', 'informacion actual: gorra Hora de Aventura 199.00 0.00 gorra 11 6 1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(20) NOT NULL,
  `nombreCategoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'camisetas de cine'),
(2, 'catalogo gaya'),
(3, 'figuras cine'),
(4, 'figuras manga'),
(5, 'juegos de cartas'),
(6, 'caricaturas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(20) NOT NULL,
  `nombreCliente` varchar(30) NOT NULL,
  `apellidoCliente` varchar(30) NOT NULL,
  `emailCliente` varchar(30) NOT NULL,
  `telefonoCliente` varchar(12) NOT NULL,
  `idImagen` int(20) NOT NULL,
  `idDireccion` int(20) NOT NULL,
  `passwordCliente` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCliente`, `apellidoCliente`, `emailCliente`, `telefonoCliente`, `idImagen`, `idDireccion`, `passwordCliente`) VALUES
(1, 'Rosalia', 'Manriquez', 'RosaMan132@gmail.com', '5590875634', 1, 4, '700ab2794a2699c28cb3b5955f40ef83'),
(2, 'Maria Josefa', 'Saiz', 'MaJoSa@outlook.com', '2229087564', 1, 5, '31928f9655c1db0bb28ca7db77341237'),
(3, 'Axel', 'Quintero', 'Axelito23@gmail.com', '6798234019', 1, 6, 'b9c91ac2d8398eb00af4e165cbf251fd'),
(4, 'Isidro', 'Martinez', 'ILYisi0@hotmail.com', '5634243091', 1, 7, '0ee19b7f9245b22d0cac71378f11afab'),
(5, 'Palmira', 'Alegre', 'AlePal009@gmail.com', '6344657893', 1, 8, 'de2a196cb812ef8abdb8f168dc2542c8'),
(6, 'Xenia de Miguel', 'Anguiano', 'XeniaAnguiano2001@yahoo.com', '9086740581', 1, 9, 'eaf9d75b284899052f06020cd02abf71'),
(7, 'Ruth', 'Rivero', 'RRUItv1@gmail.com', '5590091634', 1, 10, 'e4507bfbb85ab8ff5e22c1ac8923fba7'),
(8, 'Maria Victoria', 'Ojeda', 'MVO@hotmail.com', '4491234567', 1, 11, '839c33f02c40067ed1bcd1da7381a7b7'),
(9, 'Faustino', 'Vazquez', 'VazFa90@gmail.com', '6349087124', 1, 12, '6e062cc764217b45142eb3a4f97677ba'),
(10, 'Yurena', 'Arias', 'yureyure2@gmail.com', '1209768542', 1, 13, '2b637a75e5d51d4e81c2d6e17d56955f'),
(11, 'Carmen', 'Tudelo', 'tudelitok@hotmail.com', '3349053894', 1, 14, '2b637a75e5d51d4e81c2d6e17d56955f'),
(12, 'Laura', 'Perdomo', 'lauraperdom0@gmail.com', '5545907612', 1, 15, '2b637a75e5d51d4e81c2d6e17d56955f'),
(13, 'Amanda Rosal', 'Palacios', 'amandarosalpala@hotmail.com', '7074041532', 1, 16, 'cb1603a5b22dd6823a3e42c6896140be'),
(14, 'Alexandru', 'Ares', 'aares@outlook.com', '6098763450', 1, 17, 'dfa6e19ce3d4e024f87eeb77c7e909dc'),
(15, 'Miquel', 'Lloret', 'Loraloramiq@gmail.com', '4460981238', 1, 18, 'e743d0d097d5047f21b1020ef93dec9c');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(20) NOT NULL,
  `idCliente` int(20) NOT NULL,
  `idProducto` int(20) NOT NULL,
  `Comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idComentario`, `idCliente`, `idProducto`, `Comentario`) VALUES
(1, 15, 16, 'Venía en perfecto estado, muy pequeña, pero el tamaño ya lo indican'),
(2, 1, 5, 'Llego demasiado pequeña, a pesar que pedí la talla S.'),
(3, 11, 16, 'Muy cara como para el tamaño del producto'),
(4, 11, 3, 'Me quedó perfecta, muy bonita'),
(5, 6, 7, 'Muy grande'),
(6, 9, 12, 'Hermoso, llego a tiempo'),
(7, 2, 12, 'Se tardó un poco en llegar, en buen estado'),
(8, 4, 11, 'Hermosa'),
(9, 7, 8, 'Esta de buen tamaño'),
(10, 14, 3, 'Me quedo muy apretada.'),
(11, 14, 6, 'Demasiado grande, la tela muy suave'),
(12, 3, 5, 'Muy bonita'),
(13, 5, 20, 'Muy cute, aunque es del tamaño para un niño.'),
(14, 8, 13, 'Muy bonito, casi completo la colección'),
(15, 13, 6, 'Muy bien hecha, perfecto para mi talla'),
(16, 10, 13, 'Buen tamaño, entrega a tiempo'),
(17, 12, 19, 'Muy completas las cartas, divertido.'),
(18, 13, 9, 'Muy bonita taza, sirve de adorno, muy amplia y cabe suficiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `idPedido` int(20) NOT NULL,
  `idProducto` int(20) NOT NULL,
  `cantidadCompra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`idPedido`, `idProducto`, `cantidadCompra`) VALUES
(1, 16, 1),
(2, 5, 1),
(3, 13, 1),
(3, 16, 1),
(4, 7, 1),
(5, 12, 1),
(6, 12, 1),
(7, 11, 1),
(8, 8, 1),
(9, 3, 1),
(9, 6, 1),
(10, 5, 1),
(11, 20, 1),
(12, 13, 1),
(13, 6, 1),
(13, 9, 1),
(14, 13, 1),
(15, 9, 1),
(16, 20, 1),
(17, 2, 1),
(18, 18, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `idDireccion` int(20) NOT NULL,
  `calle` varchar(30) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `codigoPostal` int(5) NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `numeroInterio` smallint(6) NOT NULL,
  `numeroExterior` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`idDireccion`, `calle`, `colonia`, `codigoPostal`, `Estado`, `numeroInterio`, `numeroExterior`) VALUES
(1, 'Destornillador Nave', 'Pol Store', 41008, 'Aguascalientes', 2, 5),
(2, '31Pte juarez', 'Colonia Esmeralda', 72400, 'Aguascalientes', 3528, 2),
(3, 'centro de la comunidad', 'san antonio', 45678, 'Aguascalientes', 43, 1),
(4, 'calle Agustin Lara', 'Ex-Normal tuxtepec', 68370, 'Guerrero', 909, 0),
(5, 'av independencia', 'centro tuxtepex', 68300, 'Sinaloa', 241, 3),
(6, 'carretera loma alta', 'lomas del pedregal', 68306, 'Veracruz', 2345, 0),
(7, 'av 10 de mayo', 'la piragua', 60978, 'Guadalajara', 243, 9),
(8, 'calle matamoros', 'temazcal', 12093, 'Ciudad de Mexico', 31, 0),
(9, 'av Sebastian ortiz', 'ma. luisa', 69045, 'Baja california sur', 404, 3),
(10, 'aldama', 'lazaro cardenas', 68320, 'Guerrero', 1231, 0),
(11, 'avenida niños herores', 'boxtha chico', 34560, 'Guanajuato', 31, 4),
(12, 'plaza constitucion', 'demacu', 66786, 'Monterrey', 234, 1),
(13, 'adolfo lopez mateos', 'santa maria amajac', 20298, 'Chihuahua', 1236, 1),
(14, 'felipe angeles', 'san antonio zaragoza', 45678, 'Queretaro', 123, 0),
(15, 'caynajay', 'lagunilla', 90870, 'Baja california norte', 10, 0),
(16, 'jose maria morelos', 'bomintzac', 9768, 'Sonora', 12, 0),
(17, 'ejercito mexicano', 'fresno', 46758, 'Tlaxcala', 906, 2),
(18, 'av 16 de julio', 'caxuxi', 90878, 'Aguascalientes', 2343, 7),
(19, 'calle montario', 'vicente guerrero', 78932, 'Guerrero', 132, 0),
(20, 'av mariano polero', 'palmero', 89321, 'Michoacan', 890, 2),
(21, 'palomito viajero', 'sierra madre', 90832, 'Yucatan', 233, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(20) NOT NULL,
  `nombreEmpleado` varchar(30) NOT NULL,
  `apellidoEmpleado` varchar(30) NOT NULL,
  `emailEmpleado` varchar(30) NOT NULL,
  `telefonoEmpleado` varchar(12) NOT NULL,
  `acceso` varchar(20) NOT NULL,
  `Suledo` decimal(10,0) NOT NULL,
  `idImagen` int(20) NOT NULL,
  `idDireccion` int(20) NOT NULL,
  `passwordEmpleado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombreEmpleado`, `apellidoEmpleado`, `emailEmpleado`, `telefonoEmpleado`, `acceso`, `Suledo`, `idImagen`, `idDireccion`, `passwordEmpleado`) VALUES
(1, 'Eleazar', 'Palacios', 'ElePala90@gmail.com', '4567890321', 'Administrador', '8900', 1, 19, 'fe196833cc573a26b141ff1d2a35c9ae'),
(2, 'Ana Lizbeth', 'Covarrubias', 'AnaLiz91@gmail.com', '4669871430', 'Vendedor', '5670', 2, 20, '028d8b722c6b3ccc786f774b402e30c8'),
(3, 'Gerardo', 'Montañez', 'GeraMon92@gmail.com', '3215678904', 'Vendedor', '5670', 3, 21, '29f91d161732d4da03314773209c79f6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `franquicia`
--

CREATE TABLE `franquicia` (
  `idFranquicia` int(20) NOT NULL,
  `nombreFranquicia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `franquicia`
--

INSERT INTO `franquicia` (`idFranquicia`, `nombreFranquicia`) VALUES
(1, 'The Warriors'),
(2, 'El Padrino'),
(3, 'Metalica'),
(4, 'deus'),
(5, 'Crusader kings'),
(6, 'City skylines'),
(7, 'Dune'),
(8, 'qposket'),
(9, 'Banpresto'),
(10, 'Colony Wars'),
(11, 'Hora de Aventura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `idImagen` int(20) NOT NULL,
  `nombreImagen` varchar(50) NOT NULL,
  `tamaÃ±oImagen` decimal(10,3) NOT NULL,
  `direccionImagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`idImagen`, `nombreImagen`, `tamaÃ±oImagen`, `direccionImagen`) VALUES
(1, 'Empleado1', '200.000', 'dasfasdf.png'),
(2, 'Empleado2', '200.000', 'asdf.png'),
(3, 'Empleado3', '200.000', 'asdf.png'),
(4, 'camisaWarriorsL', '200.000', './img/theWarriors_cinePlayeraL.jpg'),
(5, 'camisaWarriorsM', '200.000', './img/theWarriors_cinePlayeraM.jpg'),
(6, 'camisaWarriorsS', '200.000', './img/theWarriors_cinePlayeraS.jpg'),
(7, 'camisaPadrinoL', '200.000', './img/elPadrino_cinePlayeraL.jpg'),
(8, 'camisaPadrinoS', '200.000', './img/elPadrino_cinePlayeraS.jpg'),
(9, 'camisetoMetalXXL', '200.000', './img/laChaquetaMetalica_cinePlayeraXXL.jpg'),
(10, 'camisaMetalXL', '200.000', './img/laChaquetaMetalica_cinePlayeraXL.jpg'),
(11, 'figuraDeus', '200.000', './img/ProductosdeDeus.png'),
(12, 'tazaCKings', '200.000', './img/tazacrusaderskings.png'),
(13, 'tazaCSkylines', '200.000', './img/skylines.png'),
(14, 'figuraLadyJessica', '200.000', './img/product19figuraAkizukiKC.png'),
(15, 'figuraDuncanIdaho', '200.000', './img/product21figuraCapitanJamesTStarTrek.png'),
(16, 'figuraDukeLeto', '200.000', './img/figurabanpresto_SaintSeiyaM.jpg'),
(17, 'figuraBaronKarkon', '200.000', './img/funko-star-wars-pop-the-mandalorian-cara-\r\n\r\ndune.jpg'),
(18, 'figuraTanjiro', '200.000', './img/shopFiguraR2D2C3P0.png'),
(19, 'figuraBanpresto', '200.000', './img/product20figuraKenStreetFighter.png'),
(20, 'figuraNezuko', '200.000', './img/png-clipart-r2-d2-c-3po-chewbacca-droid-sideshow-collectibles-star-wars-star-wars-episode-vii-metal.png'),
(21, 'figuraOnePiece', '200.000', './img/product17figuraZoroOP.png'),
(22, 'juegoCartas', '200.000', './img/product13juegoMesaResidentEvil.png'),
(23, 'gorraHoraAventura', '200.000', './img/Gorra-hora-de-aventura-jake-S.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idProducto` int(20) NOT NULL,
  `cantidadInventario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`idProducto`, `cantidadInventario`) VALUES
(1, 900),
(2, 512),
(3, 87),
(4, 190),
(5, 892),
(6, 123),
(7, 654),
(8, 293),
(9, 984),
(10, 264),
(11, 276),
(12, 132),
(13, 87),
(14, 23),
(15, 89),
(16, 243),
(17, 768),
(18, 12),
(19, 321),
(20, 201);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `idMetodo` int(20) NOT NULL,
  `nombreMetodo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(20) NOT NULL,
  `idCliente` int(20) NOT NULL,
  `fechaPedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `costoTotal` decimal(10,2) NOT NULL,
  `idMetodo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `idCliente`, `fechaPedido`, `costoTotal`, `idMetodo`) VALUES
(1, 15, '2020-08-16 05:00:00', '439.00', 1),
(2, 1, '2019-09-07 05:00:00', '349.00', 1),
(3, 11, '2020-01-09 06:00:00', '659.00', 1),
(4, 6, '2020-12-10 06:00:00', '599.00', 1),
(5, 9, '2020-05-10 05:00:00', '899.00', 1),
(6, 2, '2020-11-01 06:00:00', '899.00', 1),
(7, 4, '2020-08-13 05:00:00', '699.00', 1),
(8, 7, '2020-07-19 05:00:00', '499.00', 1),
(9, 14, '2020-10-06 05:00:00', '819.00', 1),
(10, 3, '2020-09-13 05:00:00', '349.00', 1),
(11, 5, '2020-09-16 05:00:00', '199.00', 1),
(12, 8, '2020-05-05 05:00:00', '700.00', 1),
(13, 13, '2020-06-12 05:00:00', '838.00', 1),
(14, 10, '2020-04-08 05:00:00', '700.00', 1),
(15, 12, '2020-03-13 06:00:00', '199.00', 2),
(16, 12, '2020-12-05 06:00:00', '199.00', 0),
(17, 7, '2020-12-06 06:00:00', '220.00', 0),
(18, 1, '2020-11-10 06:00:00', '899.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(20) NOT NULL,
  `nombreProducto` varchar(30) NOT NULL,
  `precioOriginal` decimal(10,2) NOT NULL,
  `precioDescuento` decimal(10,2) DEFAULT NULL,
  `descripcion` varchar(50) NOT NULL,
  `idFranquicia` int(20) NOT NULL,
  `idCategoria` int(20) NOT NULL,
  `idProveedor` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `precioOriginal`, `precioDescuento`, `descripcion`, `idFranquicia`, `idCategoria`, `idProveedor`) VALUES
(1, 'camiseta The Warriors grupo L', '220.00', '200.00', 'camiseta tamaño L', 1, 1, 1),
(2, 'camiseta The Warriors grupo M', '220.00', '0.00', 'camiseta tamaño M', 1, 1, 1),
(3, 'camiseta The Warriors grupo S', '220.00', '0.00', 'camiseta tamaño S', 1, 1, 1),
(4, 'camiseta el Padrino L', '349.00', '0.00', 'camisa tamaño L', 2, 1, 1),
(5, 'camiseta el Padrino S', '349.00', '0.00', 'camisa tamaño S', 2, 1, 1),
(6, 'camiseta La Chaqueta Metalica ', '599.00', '0.00', 'camiseta tamaño XXL', 3, 1, 1),
(7, 'camiseta La Chaqueta Metalica ', '599.00', '0.00', 'camiseta tamaño XL', 3, 1, 1),
(8, 'figura deus ex mankind divided', '499.00', '0.00', 'figura de 30 cm', 4, 2, 3),
(9, 'taza crusader kings', '239.00', '0.00', 'taza adornada', 5, 2, 3),
(10, 'taza city skylines', '199.00', '0.00', 'taza', 6, 2, 3),
(11, 'figura pop Dune: Lady Jessica', '699.00', '0.00', 'figura Dune', 7, 3, 2),
(12, 'figura pop Dune: Duncan Idaho', '899.00', '0.00', 'figura Dune', 7, 3, 2),
(13, 'figura porp Dune: Duke Leto', '700.00', '0.00', 'figura dune', 7, 3, 2),
(14, 'figura porp Dune: Baron Karkon', '759.00', '0.00', 'figura dune', 7, 3, 2),
(15, 'figura qposket kimetsu no yaib', '499.00', '0.00', 'figura Tanjiro 14 cm', 8, 4, 2),
(16, 'figura banpresto Saint Seiya M', '439.00', '0.00', 'figura banpresto 16 cm', 9, 4, 2),
(17, 'figura qposket kimetsu no yaib', '499.00', '0.00', 'figura Vib Nezuko 12 cm', 8, 4, 2),
(18, 'figura Banpresto One Piece Luf', '899.00', '0.00', 'figura One piece 13 cm', 9, 4, 2),
(19, 'Display mazos star realms colo', '199.00', '0.00', 'juego de cartas 6pz', 10, 5, 3),
(20, 'gorra Hora de Aventura', '199.00', '0.00', 'gorra', 11, 6, 1);

--
-- Disparadores `producto`
--
DELIMITER $$
CREATE TRIGGER `ProductoDelete` AFTER DELETE ON `producto` FOR EACH ROW BEGIN
INSERT INTO bitacoraproducto(idProducto,responsable,actividad_realizada,informacion_actual)
VALUES(OLD.idProducto,CURRENT_USER,'Se ELIMINO un producto',concat('informacion anterior: ',OLD.nombreProducto,' ',OLD.precioOriginal,' ',OLD.precioDescuento,' ',OLD.descripcion,' ',OLD.idFranquicia,' ',OLD.idCategoria,'',OLD.idProveedor));


END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ProductoInsertar` AFTER INSERT ON `producto` FOR EACH ROW BEGIN
INSERT INTO bitacoraproducto(idProducto,responsable,actividad_realizada,informacion_actual)
VALUES(NEW.idProducto,CURRENT_USER,'Se inserto nuevo producto',concat('informacion actual: ',NEW.nombreProducto,' ',NEW.precioOriginal,' ',NEW.precioDescuento,' ',NEW.descripcion,' ',NEW.idFranquicia,' ',NEW.idCategoria,' ',NEW.idProveedor));


END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ProductoUpdate` AFTER UPDATE ON `producto` FOR EACH ROW BEGIN
INSERT INTO bitacoraproducto(idProducto,responsable,actividad_realizada,informacion_actual)
VALUES(OLD.idProducto,CURRENT_USER,'Se actualizo un producto',concat('informacion actual: ',OLD.nombreProducto,' ',OLD.precioOriginal,' ',OLD.precioDescuento,' ',OLD.descripcion,' ',OLD.idFranquicia,' ',OLD.idCategoria,' ',OLD.idProveedor), concat('informacion actual: ',NEW.nombreProducto,' ',NEW.precioOriginal,' ',NEW.precioDescuento,' ',NEW.descripcion,' ',NEW.idFranquicia,' ',NEW.idCategoria,' ',NEW.idProveedor));

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_imagen`
--

CREATE TABLE `producto_imagen` (
  `idImagen` int(20) NOT NULL,
  `idProducto` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto_imagen`
--

INSERT INTO `producto_imagen` (`idImagen`, `idProducto`) VALUES
(4, 1),
(5, 2),
(6, 3),
(7, 4),
(8, 5),
(9, 6),
(10, 7),
(11, 8),
(12, 9),
(13, 10),
(14, 11),
(15, 12),
(16, 13),
(17, 14),
(18, 15),
(19, 16),
(20, 17),
(21, 18),
(22, 19),
(23, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(20) NOT NULL,
  `nombreProveedor` varchar(30) NOT NULL,
  `emailProveedor` varchar(50) NOT NULL,
  `telefonoProveedor` varchar(12) NOT NULL,
  `idDireccion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombreProveedor`, `emailProveedor`, `telefonoProveedor`, `idDireccion`) VALUES
(1, 'Last Level', 'info@lastlevel.es', '34954368866', 2),
(2, 'Geek Corner', 'contacto@geekcorner.mx', '2228895097', 1),
(3, 'SuperGeek', 'mayoreo@supergeek.com.mx', '2228895097', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacoracliente`
--
ALTER TABLE `bitacoracliente`
  ADD PRIMARY KEY (`idBitacoraCliente`);

--
-- Indices de la tabla `bitacoraempleado`
--
ALTER TABLE `bitacoraempleado`
  ADD PRIMARY KEY (`idBitacoraEmpleado`);

--
-- Indices de la tabla `bitacoraproducto`
--
ALTER TABLE `bitacoraproducto`
  ADD PRIMARY KEY (`idBitacoraProducto`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`idDireccion`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `franquicia`
--
ALTER TABLE `franquicia`
  ADD PRIMARY KEY (`idFranquicia`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`idMetodo`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacoracliente`
--
ALTER TABLE `bitacoracliente`
  MODIFY `idBitacoraCliente` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bitacoraempleado`
--
ALTER TABLE `bitacoraempleado`
  MODIFY `idBitacoraEmpleado` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bitacoraproducto`
--
ALTER TABLE `bitacoraproducto`
  MODIFY `idBitacoraProducto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `idDireccion` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `franquicia`
--
ALTER TABLE `franquicia`
  MODIFY `idFranquicia` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `idImagen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  MODIFY `idMetodo` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
