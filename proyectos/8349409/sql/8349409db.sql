-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-08-2016 a las 19:05:31
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `8349409db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE IF NOT EXISTS `acciones` (
  `idaccion` int(11) NOT NULL AUTO_INCREMENT,
  `idformulario` int(11) NOT NULL,
  `accion` varchar(20) NOT NULL,
  PRIMARY KEY (`idaccion`),
  KEY `idformulario` (`idformulario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `idciudad` int(11) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(40) NOT NULL,
  `relacion` int(11) NOT NULL,
  PRIMARY KEY (`idciudad`),
  KEY `relacion` (`relacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idciudad`, `opcion`, `relacion`) VALUES
(2, 'Valencia', 11),
(3, 'San Diego', 11),
(4, 'Naguanagua', 11),
(5, 'Maracay', 12),
(6, 'Turmero', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `idsexo` int(11) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `idpais` int(11) NOT NULL,
  `idciudad` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `direccion_redes_sociales` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  PRIMARY KEY (`idcliente`),
  KEY `idsexo` (`idsexo`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  `idcotizacion` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `total` float(13,2) NOT NULL,
  `subtotal` float(13,2) NOT NULL,
  `iva` float(13,2) NOT NULL,
  PRIMARY KEY (`idcompra`),
  KEY `idcotizacion` (`idcotizacion`),
  KEY `idproveedor` (`idproveedor`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `idcotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fecha_cotizacion` date NOT NULL,
  `total` float(13,2) NOT NULL,
  `subtotal` float(13,2) NOT NULL,
  `iva` float(13,2) NOT NULL,
  PRIMARY KEY (`idcotizacion`),
  KEY `idproveedor` (`idproveedor`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `idestado` int(11) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(40) NOT NULL,
  `relacion` int(11) NOT NULL,
  PRIMARY KEY (`idestado`),
  KEY `relacion` (`relacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idestado`, `opcion`, `relacion`) VALUES
(11, 'Carabobo', 2),
(12, 'Aragua', 2),
(13, 'Apure', 2),
(14, 'Bolivar', 2),
(15, 'Amazonas', 2),
(16, 'Zulia', 2),
(17, 'Guarico', 2),
(18, 'Tachira', 2),
(19, 'Bogota', 3),
(20, 'Cucuta', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `idestatus` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(10) NOT NULL,
  PRIMARY KEY (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`idestatus`, `estatus`) VALUES
(1, 'Activa'),
(2, 'Inactiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `idformulario` int(11) NOT NULL AUTO_INCREMENT,
  `idfuncion` int(11) NOT NULL,
  `formulario` varchar(20) NOT NULL,
  PRIMARY KEY (`idformulario`),
  KEY `idfuncion` (`idfuncion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funciones`
--

CREATE TABLE IF NOT EXISTS `funciones` (
  `idfuncion` int(11) NOT NULL AUTO_INCREMENT,
  `funcion` varchar(20) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idfuncion`),
  KEY `idusuario` (`idusuario`,`funcion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items_compra`
--

CREATE TABLE IF NOT EXISTS `items_compra` (
  `iditemcompra` int(11) NOT NULL AUTO_INCREMENT,
  `idcompra` int(11) NOT NULL,
  `idparte` int(11) NOT NULL,
  `monto` float(13,2) NOT NULL,
  PRIMARY KEY (`iditemcompra`),
  KEY `idparte` (`idparte`),
  KEY `idcompra` (`idcompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items_cotizacion`
--

CREATE TABLE IF NOT EXISTS `items_cotizacion` (
  `iditemcotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `idcotizacion` int(11) NOT NULL,
  `idparte` int(11) NOT NULL,
  `monto` float(13,2) NOT NULL,
  PRIMARY KEY (`iditemcotizacion`),
  KEY `idcotizacion` (`idcotizacion`),
  KEY `idparte` (`idparte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `idpais` int(11) NOT NULL AUTO_INCREMENT,
  `opcion` varchar(40) NOT NULL,
  PRIMARY KEY (`idpais`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idpais`, `opcion`) VALUES
(2, 'Venezuela'),
(3, 'Colombia'),
(4, 'Argentina'),
(5, 'Brasil'),
(6, 'Chile'),
(7, 'Uruguay'),
(8, 'Peru');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes`
--

CREATE TABLE IF NOT EXISTS `partes` (
  `idparte` int(11) NOT NULL AUTO_INCREMENT,
  `idvehiculo` int(11) NOT NULL,
  `parte` varchar(100) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `idestatus` int(11) NOT NULL,
  PRIMARY KEY (`idparte`),
  KEY `idvehiculo` (`idvehiculo`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `idproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` varchar(100) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `direccion_redes_sociales` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `idpais` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idciudad` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idproveedor`),
  UNIQUE KEY `idusuario` (`idusuario`,`proveedor`),
  KEY `idpais` (`idpais`),
  KEY `idestado` (`idestado`),
  KEY `idciudad` (`idciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE IF NOT EXISTS `sexo` (
  `idsexo` int(11) NOT NULL AUTO_INCREMENT,
  `sexo` varchar(10) NOT NULL,
  PRIMARY KEY (`idsexo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idsexo`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_cotizacion`
--

CREATE TABLE IF NOT EXISTS `solicitud_cotizacion` (
  `idsolicitud_cotizacion` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `fecha_solicitud` datetime NOT NULL,
  `idestatus` int(11) NOT NULL,
  `fecha_vencimiento` datetime NOT NULL,
  PRIMARY KEY (`idsolicitud_cotizacion`),
  KEY `idcliente` (`idcliente`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE IF NOT EXISTS `tipousuario` (
  `idtipousuario` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `tipousuario` varchar(20) NOT NULL,
  PRIMARY KEY (`idtipousuario`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idtipousuario`, `idestatus`, `tipousuario`) VALUES
(1, 1, 'Administrador'),
(2, 1, 'Operador'),
(3, 1, 'Cliente'),
(4, 1, 'Proveedor'),
(5, 1, 'Auditor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL,
  `idtipousuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `idestatus` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idtipousuario` (`idtipousuario`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `idvehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `serialcarroceria` varchar(32) NOT NULL,
  `version` varchar(32) NOT NULL,
  `sincauto` varchar(10) NOT NULL,
  `año` varchar(4) NOT NULL,
  PRIMARY KEY (`idvehiculo`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `acciones_ibfk_1` FOREIGN KEY (`idformulario`) REFERENCES `formulario` (`idformulario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`relacion`) REFERENCES `estados` (`idestado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_6` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_5` FOREIGN KEY (`idsexo`) REFERENCES `sexo` (`idsexo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idcotizacion`) REFERENCES `cotizacion` (`idcotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `cotizacion_ibfk_1` FOREIGN KEY (`idproveedor`) REFERENCES `proveedor` (`idproveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cotizacion_ibfk_2` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `estados_ibfk_1` FOREIGN KEY (`relacion`) REFERENCES `paises` (`idpais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD CONSTRAINT `formulario_ibfk_1` FOREIGN KEY (`idfuncion`) REFERENCES `funciones` (`idfuncion`);

--
-- Filtros para la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD CONSTRAINT `funciones_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `items_compra`
--
ALTER TABLE `items_compra`
  ADD CONSTRAINT `items_compra_ibfk_1` FOREIGN KEY (`idcompra`) REFERENCES `compra` (`idcompra`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_compra_ibfk_2` FOREIGN KEY (`idparte`) REFERENCES `partes` (`idparte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `items_cotizacion`
--
ALTER TABLE `items_cotizacion`
  ADD CONSTRAINT `items_cotizacion_ibfk_1` FOREIGN KEY (`idcotizacion`) REFERENCES `cotizacion` (`idcotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `items_cotizacion_ibfk_2` FOREIGN KEY (`idparte`) REFERENCES `partes` (`idparte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `partes`
--
ALTER TABLE `partes`
  ADD CONSTRAINT `partes_ibfk_1` FOREIGN KEY (`idvehiculo`) REFERENCES `vehiculo` (`idvehiculo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `partes_ibfk_2` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_4` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`idpais`) REFERENCES `paises` (`idpais`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor_ibfk_2` FOREIGN KEY (`idestado`) REFERENCES `estados` (`idestado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proveedor_ibfk_3` FOREIGN KEY (`idciudad`) REFERENCES `ciudades` (`idciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solicitud_cotizacion`
--
ALTER TABLE `solicitud_cotizacion`
  ADD CONSTRAINT `solicitud_cotizacion_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `solicitud_cotizacion_ibfk_2` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD CONSTRAINT `tipousuario_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idtipousuario`) REFERENCES `tipousuario` (`idtipousuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
