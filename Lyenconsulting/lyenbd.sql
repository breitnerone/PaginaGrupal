-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-06-2016 a las 04:04:20
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lyenbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE usuarios (
Id_usuarios int  NOT NULL AUTO_INCREMENT,
nombreCompleto varchar(255) NOT NULL,
nick varchar(255) NOT NULL,
correo varchar(255) NOT NULL,
password varchar(255) NOT NULL,
PRIMARY KEY ( Id_usuarios ) 
)

CREATE TABLE `areas` (
  `Id_area` int(10) NOT NULL,
  `Area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`Id_area`, `Area`) VALUES
(1, 'Administrativa'),
(2, 'Financiera'),
(3, 'Tecnolog&iacute;a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `Id_cargo` int(10) NOT NULL,
  `Cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`Id_cargo`, `Cargo`) VALUES
(1, 'Directivo'),
(2, 'Gerencial'),
(3, 'Asesor'),
(4, 'Ejecutivo'),
(5, 'Comercial'),
(6, 'Consultor'),
(7, 'Tenico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactenos`
--

CREATE TABLE `contactenos` (
  `Id_contacto` int(10) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido` varchar(255) NOT NULL,
  `Cargo` varchar(255) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Empresa` varchar(255) NOT NULL,
  `Nro_empleados` int(10) NOT NULL,
  `Pais` varchar(255) NOT NULL,
  `Mensaje` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactenos`
--

INSERT INTO `contactenos` (`Id_contacto`, `Nombre`, `Apellido`, `Cargo`, `Telefono`, `Email`, `Empresa`, `Nro_empleados`, `Pais`, `Mensaje`) VALUES
(1, 'David', 'Quiroz', 'Ing', '3123904988', 'dquiroz@its.jnj.com', 'carulla', 1500, 'Colombia', 'fnkdsfkfndsklf dsjfsdklj fdsklfjds klfds'),
(2, 'Andres', 'Simbaqueba', 'Ing', '3168349018', 'andress718@gmail.com', 'Tools 4 Media', 10, 'Colombia', 'lkjvklsjflsdk ljsflkdsjfdslkf slkdjcdskljf'),
(3, 'David', 'Quiroz', 'Ing', '3123904988', 'dquiroz@its.jnj.com', 'carulla', 20, 'Colombia', 'mbjhghjghjgk '),
(4, 'Yessica', 'Naranjo', 'Analista', '1234567890', 'YN@lyen.MX', 'Lyen', 5, 'Mexico', 'Prueba de mensaje');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_empleado` int(10) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellido` varchar(250) NOT NULL,
  `Area` int(10) NOT NULL,
  `Cargo` int(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `Id_pais` int(10) NOT NULL,
  `nombre_pais` varchar(250) NOT NULL,
  `codigo_pais` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`Id_pais`, `nombre_pais`, `codigo_pais`) VALUES
(1, 'Argentina', 1),
(2, 'Bolivia', 2),
(3, 'Chile', 3),
(4, 'Colombia', 4),
(5, 'Costa Rica', 5),
(6, 'Cuba', 6),
(7, 'Ecuador', 7),
(8, 'El Salvador', 8),
(9, 'Espa&ntilde;a', 9),
(10, 'Guatemala', 10),
(11, 'Honduras', 11),
(12, 'M&eacute;xico', 12),
(13, 'Nicaragua', 13),
(14, 'Panam&aacute;', 14),
(15, 'Paraguay', 15),
(16, 'Per&uacute;', 16),
(17, 'Puerto Rico', 17),
(18, 'Rep&uacute;blica Dominicana', 18),
(19, 'Uruguay', 19),
(20, 'Venezuela', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id_visita` int(11) NOT NULL,
  `ip` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id_visita`, `ip`, `fecha`, `num`) VALUES
(1, '::1', '2016-06-07', 1),
(2, '::1', '2016-06-07', 1),
(3, '::1', '2016-06-07', 1),
(4, '::1', '2016-06-07', 1),
(5, '::1', '2016-06-07', 1),
(6, '::1', '2016-06-07', 1),
(7, '::1', '2016-06-07', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona_casosexito`
--

CREATE TABLE `zona_casosexito` (
  `Id_casosexito` int(10) NOT NULL,
  `Exito_titulo1` varchar(250) NOT NULL,
  `Exito_texto1` varchar(250) NOT NULL,
  `Exito_img1` varchar(250) NOT NULL,
  `Exito_titulo2` varchar(250) NOT NULL,
  `Exito_texto2` varchar(250) NOT NULL,
  `Exito_img2` varchar(250) NOT NULL,
  `Exito_titulo3` varchar(250) NOT NULL,
  `Exito_texto3` varchar(250) NOT NULL,
  `Exito_img3` varchar(250) NOT NULL,
  `Exito_titulo4` varchar(250) NOT NULL,
  `Exito_texto4` varchar(250) NOT NULL,
  `Exito_img4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zona_casosexito`
--

INSERT INTO `zona_casosexito` (`Id_casosexito`, `Exito_titulo1`, `Exito_texto1`, `Exito_img1`, `Exito_titulo2`, `Exito_texto2`, `Exito_img2`, `Exito_titulo3`, `Exito_texto3`, `Exito_img3`, `Exito_titulo4`, `Exito_texto4`, `Exito_img4`) VALUES
(1, 'Tu Casa Express', 'Autofinanciamiento Inmobiliario', 'Imagenes/LogoTCE.JPG', 'BNN M&eacute;xico', 'Agencia de marketing digital', 'Imagenes/LogoBnn.JPG', 'Banco Inmobiliario Mexicano', 'Financiamiento Inmobiliario', 'Imagenes/LogoBIM.JPG', 'Play Telecom', 'Soluciones de Telecomunicaciones', 'Imagenes/LogoPlay.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona_nosotros`
--

CREATE TABLE `zona_nosotros` (
  `Id_nosotros` int(10) NOT NULL,
  `Zona1` text NOT NULL,
  `Zona2` text NOT NULL,
  `Zona3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zona_nosotros`
--

INSERT INTO `zona_nosotros` (`Id_nosotros`, `Zona1`, `Zona2`, `Zona3`) VALUES
(1, 'Lyen Consulting es una empresa que tiene dos a&ntilde;os en el mercado, tiempo en el cual ha conseguido clientes importantes en M&eacute;xico. Nuestro planteamiento estrat&eacute;gico nos ha permitido expandirnos en Latinoam&eacute;rica. Contamos con un equipo de consultores certificado en Salesforce. ', 'Lyen Consulting es una compa&ntilde;&iacute;a que presta servicios profesionales y esta enfocada en el desarrollo del conocimiento alrededor de la herramienta CRM Salesforce, con el objetivo de generar valor a sus clientes haciendo realidad los beneficios de este nuevo modelo de negocios en sus empresas.', 'Actualmente, las tendencias tecnol&oacute;gicas avanzan m&aacute;s r&aacute;pido que cualquier otra industria en el mundo y el correcto uso de las tecnolog&iacute;as de informaci&oacute;n tienen un papel muy importante en el funcionamiento y crecimiento de las compa&ntilde;&iacute;as. Las peque&ntilde;as y medianas empresas tienen hoy m&aacute;s que nunca la posibilidad de acceder a tecnolog&iacute;as que permitan mejorar su competitividad y productividad. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona_servicios`
--

CREATE TABLE `zona_servicios` (
  `Id_servicios` int(10) NOT NULL,
  `Servicios_titulo1` varchar(250) NOT NULL,
  `Servicios_texto1` varchar(250) NOT NULL,
  `Servicios_img1` varchar(250) NOT NULL,
  `Servicios_titulo2` varchar(250) NOT NULL,
  `Servicios_texto2` varchar(250) NOT NULL,
  `Servicios_img2` varchar(250) NOT NULL,
  `Servicios_titulo3` varchar(250) NOT NULL,
  `Servicios_texto3` varchar(250) NOT NULL,
  `Servicios_img3` varchar(250) NOT NULL,
  `Servicios_titulo4` varchar(250) NOT NULL,
  `Servicios_texto4` varchar(250) NOT NULL,
  `Servicios_img4` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zona_servicios`
--

INSERT INTO `zona_servicios` (`Id_servicios`, `Servicios_titulo1`, `Servicios_texto1`, `Servicios_img1`, `Servicios_titulo2`, `Servicios_texto2`, `Servicios_img2`, `Servicios_titulo3`, `Servicios_texto3`, `Servicios_img3`, `Servicios_titulo4`, `Servicios_texto4`, `Servicios_img4`) VALUES
(1, 'Asesor&iacute;a', 'Luego de un an&aacute;lisis profundo de las necesidades de la empresa y requerimientos pasamos a implementar una soluci&oacute;n que se ajuste a lo que se requiere.', 'Imagenes/Consultoria.jpg', 'Arquitectura de soluciones', 'Dise&ntilde;amos la soluci&oacute;n de CRM que mas se ajuste sus necesidades y al tipo de negocio.', 'Imagenes/Soluciones.jpg', 'Implementaci&oacute;n a la medida', 'Implementamos con calidad la soluci&oacute;n requerida por su compa&ntilde;ia, estamos certificados para hacerlo.', 'Imagenes/Implementacion.png', 'M&aacute;s informaci&oacute;n de SalesForce', 'Rem&iacute;tase a la pagina de Salesforce para obtener mas informaci&oacute;n acerca de los diferentes servicios que podemos implementar en su empresa.', 'Imagenes/SalesForce.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`Id_area`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Id_cargo`);

--
-- Indices de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  ADD PRIMARY KEY (`Id_contacto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_empleado`),
  ADD UNIQUE KEY `EmailEmpleado` (`Email`),
  ADD UNIQUE KEY `ContraEmpleado` (`Contraseña`),
  ADD KEY `IndiceArea` (`Area`),
  ADD KEY `IndiceCargo` (`Cargo`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`Id_pais`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id_visita`);

--
-- Indices de la tabla `zona_casosexito`
--
ALTER TABLE `zona_casosexito`
  ADD PRIMARY KEY (`Id_casosexito`);

--
-- Indices de la tabla `zona_nosotros`
--
ALTER TABLE `zona_nosotros`
  ADD PRIMARY KEY (`Id_nosotros`);

--
-- Indices de la tabla `zona_servicios`
--
ALTER TABLE `zona_servicios`
  ADD PRIMARY KEY (`Id_servicios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  MODIFY `Id_contacto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
