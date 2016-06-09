-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2015 a las 15:44:46
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `scjvalencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE IF NOT EXISTS `auditoria` (
  `idauditoria` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `idtipodeusuario` int(11) NOT NULL,
  `nombretabla` varchar(25) NOT NULL,
  `tipodeoperacion` varchar(25) NOT NULL,
  `fechadeoperacion` date NOT NULL,
  `horadeoperacion` time NOT NULL,
  PRIMARY KEY (`idauditoria`),
  KEY `idusuario` (`idusuario`),
  KEY `idtipodeusuario` (`idtipodeusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bautizos`
--

CREATE TABLE IF NOT EXISTS `bautizos` (
  `idbautizo` int(11) NOT NULL,
  `idestatus` int(11) NOT NULL,
  `idfiliacion` int(11) NOT NULL,
  `idsacerdote` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `padres` varchar(125) NOT NULL,
  `fechadenacimiento` date NOT NULL,
  `fechadebautizo` date NOT NULL,
  `padrinos` varchar(125) NOT NULL,
  `nota` varchar(500) NOT NULL,
  `telefonos` varchar(50) NOT NULL,
  `registrocivil` varchar(50) NOT NULL,
  PRIMARY KEY (`idbautizo`),
  KEY `idestatus` (`idestatus`),
  KEY `idsacerdote` (`idsacerdote`),
  KEY `idfiliacion` (`idfiliacion`),
  KEY `idusuario` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bautizos`
--

INSERT INTO `bautizos` (`idbautizo`, `idestatus`, `idfiliacion`, `idsacerdote`, `idusuario`, `nombre`, `apellido`, `padres`, `fechadenacimiento`, `fechadebautizo`, `padrinos`, `nota`, `telefonos`, `registrocivil`) VALUES
(780, 1, 1, 3, 3, 'Andres Simón', 'Suárez Bañez', 'Enrique Suarez y Gisela Bañez', '1996-03-05', '2008-06-21', 'Sanl Sevilla y Nelly González', '', '', '1259- Pref. Rafael Urdaneta, Tomo III, Año 1998'),
(783, 1, 1, 1, 3, 'AJ', 'Pernalete Lameda', 'Alberto Pernalete y Rosana lameda', '1988-06-22', '1988-07-14', 'Joaquin y Ana', '', '', 'Libro 88, Tomo V, Acta 2666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estatus`
--

CREATE TABLE IF NOT EXISTS `estatus` (
  `idestatus` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `estatus`
--

INSERT INTO `estatus` (`idestatus`, `nombre`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `filiacion`
--

CREATE TABLE IF NOT EXISTS `filiacion` (
  `idfiliacion` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`idfiliacion`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `filiacion`
--

INSERT INTO `filiacion` (`idfiliacion`, `idestatus`, `nombre`) VALUES
(1, 1, 'Reconocido(a)'),
(4, 1, 'Natural'),
(5, 1, 'Legitimo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sacerdotes`
--

CREATE TABLE IF NOT EXISTS `sacerdotes` (
  `idsacerdote` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  PRIMARY KEY (`idsacerdote`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `sacerdotes`
--

INSERT INTO `sacerdotes` (`idsacerdote`, `idestatus`, `nombre`, `apellido`) VALUES
(1, 1, 'Wilfredo', 'Corniel'),
(2, 1, 'Demetrio', 'Jimenez'),
(3, 1, 'Jesus', 'Vicente'),
(5, 1, 'Jose', 'Garcia'),
(6, 1, 'Miguel', 'Barrientos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeusuarios`
--

CREATE TABLE IF NOT EXISTS `tipodeusuarios` (
  `idtipodeusuario` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`idtipodeusuario`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipodeusuarios`
--

INSERT INTO `tipodeusuarios` (`idtipodeusuario`, `idestatus`, `nombre`) VALUES
(1, 1, 'Administrador'),
(2, 1, 'Operador'),
(3, 1, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `idestatus` int(11) NOT NULL,
  `idtipodeusuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `clave` varchar(8) NOT NULL,
  `telefonos` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idtipodeusuario` (`idtipodeusuario`),
  KEY `idestatus` (`idestatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `idestatus`, `idtipodeusuario`, `nombre`, `apellido`, `clave`, `telefonos`) VALUES
(3, 1, 1, 'Alberto', 'Pernalete', '18412', '04166442720'),
(4, 1, 1, 'Wilfredo', 'Corniel', '12345', '04127368382'),
(6, 1, 2, 'Helena', 'Gramko', '12345', 'xxxxxxxxx');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD CONSTRAINT `auditoria_ibfk_2` FOREIGN KEY (`idtipodeusuario`) REFERENCES `tipodeusuarios` (`idtipodeusuario`),
  ADD CONSTRAINT `auditoria_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`);

--
-- Filtros para la tabla `bautizos`
--
ALTER TABLE `bautizos`
  ADD CONSTRAINT `bautizos_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`),
  ADD CONSTRAINT `bautizos_ibfk_2` FOREIGN KEY (`idfiliacion`) REFERENCES `filiacion` (`idfiliacion`),
  ADD CONSTRAINT `bautizos_ibfk_3` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`),
  ADD CONSTRAINT `bautizos_ibfk_4` FOREIGN KEY (`idsacerdote`) REFERENCES `sacerdotes` (`idsacerdote`);

--
-- Filtros para la tabla `filiacion`
--
ALTER TABLE `filiacion`
  ADD CONSTRAINT `filiacion_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`);

--
-- Filtros para la tabla `sacerdotes`
--
ALTER TABLE `sacerdotes`
  ADD CONSTRAINT `sacerdotes_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`);

--
-- Filtros para la tabla `tipodeusuarios`
--
ALTER TABLE `tipodeusuarios`
  ADD CONSTRAINT `tipodeusuarios_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idestatus`) REFERENCES `estatus` (`idestatus`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idtipodeusuario`) REFERENCES `tipodeusuarios` (`idtipodeusuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
