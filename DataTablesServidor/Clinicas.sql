-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2013 a las 12:39:35
-- Versión del servidor: 5.5.28
-- Versión de PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Clinicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE IF NOT EXISTS `articulos` (
  `id_articulo` int(4) NOT NULL,
  `concepto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `concepto`) VALUES
(1, 'ADAMS ( ORTODONCIA)'),
(2, 'ANALOGO'),
(3, 'ANALOGO KLORNER'),
(4, 'AÑADIR 1ª PIEZA '),
(5, 'AÑADIR RESTO PIEZAS'),
(6, 'ARANDELA DE ORO'),
(7, 'ARCO VESTIBULAR ( ORTODONCIA)'),
(8, 'ATACHE PIEZA FIJA'),
(9, 'BARRA ACKERMAN'),
(10, 'CALCINABLE'),
(11, 'CALCINABLE KLORNER'),
(12, 'CAMBIO DE COLOR '),
(13, 'CAMBIO TOTAL RESINA HIBRIDAS'),
(14, 'CAMBIO TOTAL RESINA HIBRIDAS C/ SOLDADURAS'),
(15, 'CARILLA EMPRES'),
(16, 'COMPLETA '),
(17, 'COMPLETA DEFINITIVA'),
(18, 'COMPLETA PROVISIONAL '),
(19, 'COMPOSTURA'),
(20, 'COMPOSTURA// REBASE'),
(21, 'CONTENEDOR ESPACIO'),
(22, 'CORONA CIRCONIO'),
(23, 'CORONA CIRCONIO SOBRE IMPLANTE'),
(24, 'CORONA EMPRESS SIN METAL'),
(25, 'CORONA JACKET CERAMICA'),
(26, 'CORONA METAL CERAMICA'),
(27, 'CORONA PROVISIONAL CEMENTADA'),
(28, 'CORONA SOBRE IMPLANTE'),
(29, 'ESQUELETICO BILATERAL 1-3 PZAS'),
(30, 'ESQUELETICO BILATERAL 3-5 PZAS'),
(31, 'ESQUELETICO BILATERAL 5-8 PZAS'),
(32, 'ESQUELETICO BILATERAL 8-14 PZAS'),
(33, 'ESQUELETICO UNILATERAL 1-3 PZAS'),
(34, 'FERULA DE BLANQUEAMIENTO'),
(35, 'FERULA DESCARGA'),
(36, 'FERULA QUIRURGICA'),
(37, 'GANCHO UNIDAD'),
(38, 'IMPLANTE PROVISIONAL'),
(39, 'IMPLANTE PROVISIONAL ATORNILLADO'),
(40, 'INTERFASE CIRCONIO'),
(41, 'LOCATOR UNIDAD'),
(42, 'MERYLAND PIEZA'),
(43, 'PARCIAL ACRILICO 10 PZAS O MÁS'),
(44, 'PARCIAL ACRILICO DE 1-3 PZAS'),
(45, 'PARCIAL ACRILICO DE 4 PZAS'),
(46, 'PARCIAL ACRILICO DE 5 PZAS'),
(47, 'PARCIAL ACRILICO DE 6 PZAS'),
(48, 'PARCIAL ACRILICO DE 7 PZAS'),
(49, 'PARCIAL ACRILICO DE 8 PZAS'),
(50, 'PARCIAL ACRILICO DE 9 PZAS'),
(51, 'PARCIAL ACRILICO PROV. 10 PZAS O MÁS'),
(52, 'PARCIAL ACRILICO PROV. DE 1-3 PZAS'),
(53, 'PARCIAL ACRILICO PROV. DE 4 PZAS'),
(54, 'PARCIAL ACRILICO PROV. DE 5 PZAS'),
(55, 'PARCIAL ACRILICO PROV. DE 6 PZAS'),
(56, 'PARCIAL ACRILICO PROV. DE 7 PZAS'),
(57, 'PARCIAL ACRILICO PROV. DE 8 PZAS'),
(58, 'PARCIAL ACRILICO PROV. DE 9 PZAS'),
(59, 'PERNO MUÑON COLADO'),
(60, 'PERNO MUÑON DOBLE COLADO'),
(61, 'PILAR ANGULADO'),
(62, 'PILAR CIRCONIO'),
(63, 'PILAR KLORNER ANGULADO'),
(64, 'PILAR KLORNER RECTO'),
(65, 'PILAR RECTO'),
(66, 'PLACA ( ORTODONCIA)'),
(67, 'PROTESIS HIBRIDA'),
(68, 'REPARACION ARCADA CERAMICA'),
(69, 'REPARACION SOBREDENTADURA C/ REFUERZO'),
(70, 'REPARACION SOBREDENTADURA S/ REFUERZO'),
(71, 'SET UP UNIDAD'),
(72, 'SOBREDENTADURA CON LOCATOR'),
(73, 'SOLDADURA'),
(74, 'TORNILLO AVINENT'),
(75, 'TORNILLO EXPANSION( ORTODONCIA)'),
(76, 'TORNILLO KLORNER'),
(77, 'TORNILLO TITANIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_materiales`
--

CREATE TABLE IF NOT EXISTS `articulos_materiales` (
  `articulos_id_articulo` int(4) NOT NULL,
  `materiales_id_material` int(4) NOT NULL,
  PRIMARY KEY (`articulos_id_articulo`,`materiales_id_material`),
  KEY `fk_articulos_materiales_articulos` (`articulos_id_articulo`),
  KEY `fk_articulos_materiales_materiales` (`materiales_id_material`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos_materiales`
--

INSERT INTO `articulos_materiales` (`articulos_id_articulo`, `materiales_id_material`) VALUES
(4, 6),
(5, 6),
(9, 2),
(12, 6),
(13, 1),
(14, 1),
(14, 2),
(15, 8),
(17, 1),
(17, 6),
(18, 4),
(18, 17),
(19, 16),
(21, 2),
(22, 3),
(22, 9),
(22, 10),
(23, 3),
(23, 8),
(24, 8),
(25, 8),
(26, 2),
(26, 9),
(26, 10),
(27, 18),
(28, 2),
(28, 9),
(28, 10),
(29, 2),
(29, 6),
(30, 2),
(30, 6),
(31, 2),
(31, 6),
(32, 2),
(32, 6),
(33, 2),
(33, 6),
(34, 12),
(35, 11),
(36, 12),
(37, 2),
(39, 18),
(40, 3),
(42, 18),
(43, 1),
(43, 6),
(44, 1),
(44, 6),
(45, 1),
(45, 6),
(46, 1),
(46, 6),
(47, 1),
(47, 6),
(48, 1),
(48, 6),
(49, 1),
(49, 6),
(50, 1),
(50, 6),
(51, 4),
(51, 17),
(52, 4),
(52, 17),
(53, 4),
(53, 17),
(54, 4),
(54, 17),
(55, 4),
(55, 17),
(56, 4),
(56, 17),
(57, 4),
(57, 17),
(58, 4),
(58, 17),
(59, 2),
(60, 2),
(62, 3),
(66, 11),
(67, 1),
(67, 2),
(67, 5),
(67, 7),
(68, 9),
(69, 17),
(70, 2),
(70, 17),
(72, 2),
(72, 6),
(72, 13),
(72, 14),
(73, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinicas`
--

CREATE TABLE IF NOT EXISTS `clinicas` (
  `id_clinica` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `razonsocial` varchar(100) DEFAULT NULL,
  `cif` varchar(10) DEFAULT NULL,
  `localidad` varchar(100) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `numclinica` varchar(5) DEFAULT NULL,
  `id_tarifa` int(4) NOT NULL,
  PRIMARY KEY (`id_clinica`),
  KEY `fk_clinicas_tarifas1` (`id_tarifa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clinicas`
--

INSERT INTO `clinicas` (`id_clinica`, `nombre`, `razonsocial`, `cif`, `localidad`, `provincia`, `direccion`, `cp`, `numclinica`, `id_tarifa`) VALUES
(1, 'CENTRO IMPLANTOLOGICO BARCELONA', 'XX', 'B11111111', 'BARCELONA', 'BARCELONA', 'Avda. Gracia nº 15', '8015', '1', 1),
(2, 'CENTRO DE IMPLANTOLOGÍA MADRID', 'XX', 'B11111112', 'MADRID', 'MADRID', 'Paseo La Castellana nº 16', '28045', '2', 1),
(3, 'CENTRO DE IMPLANTOLOGÍA VIGO', 'XX', 'B11111113', 'VIGO', 'PONTEVEDRA', 'Calle de Vigo nº 17', '36208', '3', 1),
(4, 'CENTRO DE IMPLANTOLOGÍA ZARAGOZA', 'XX', 'B11111114', 'ZARAGOZA', 'ZARAGOZA', 'Paseo Independencia nº 18', '50005', '4', 1),
(5, 'CENTRO DE IMPLANTOLOGÍA VALENCIA', 'XX', 'B11111115', 'VALENCIA', 'VALENCIA', 'Calle de Valencia nº 19', '46018', '5', 1),
(6, 'CENTRO DE IMPLANTOLOGÍA SANTANDER', 'XX', 'B11111116', 'SANTANDER', 'SANTANDER', 'Calle de Santander nº 20', '50008', '6', 2),
(15, 'CENTRO DE IMPLANTOLOGÍA TARRAGONA', 'XX', 'B11111117', 'MADRID', 'TARRAGONA', 'Paseo de Tarragona nº 21', '28020', '15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica_doctor`
--

CREATE TABLE IF NOT EXISTS `clinica_doctor` (
  `id_doctor` int(4) NOT NULL,
  `id_clinica` int(4) NOT NULL,
  `numdoctor` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_doctor`,`id_clinica`),
  KEY `fk_clinica_doctor_Doctores` (`id_doctor`),
  KEY `fk_clinica_doctor_clinicas1` (`id_clinica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clinica_doctor`
--

INSERT INTO `clinica_doctor` (`id_doctor`, `id_clinica`, `numdoctor`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 6, 2),
(4, 1, 4),
(4, 2, 1),
(5, 2, 4),
(6, 2, 2),
(7, 4, 1),
(8, 2, 3),
(9, 3, 2),
(10, 3, 1),
(11, 1, 2),
(11, 4, 2),
(11, 6, 1),
(12, 5, 1),
(13, 6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE IF NOT EXISTS `doctores` (
  `id_doctor` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `numcolegiado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_doctor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`id_doctor`, `nombre`, `numcolegiado`) VALUES
(1, 'DAVID PEREZ', '11111'),
(2, 'FRANCISCO JIMENEZ', '22222'),
(3, 'ESTEBAN GONZALEZ', '333333'),
(4, 'DAVINIA DE DOS SANTOS', '44444'),
(5, 'JORGE ESPIAS', '55555'),
(6, 'LORENZO CAMAÑÓN', '666666'),
(7, 'HUGO IDIAZABAL', '777777'),
(8, 'JACOBO MADORRÁN', '888888'),
(9, 'MANUEL LOPEZ', '999999'),
(10, 'ADRIANA MEAÑOS', '101010'),
(11, 'LAURA SERRANO', '12121212'),
(12, 'YASMINE JERARCAL', '13131313'),
(13, 'DIEGO ZAERA', '14141414');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE IF NOT EXISTS `materiales` (
  `id_material` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `lote1` varchar(100) DEFAULT NULL,
  `lote2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_material`, `nombre`, `lote1`, `lote2`) VALUES
(1, 'PALAPRESS VARIO 500ML LIQ/ POLVO', NULL, NULL),
(2, 'C+B CR-CO 1KG', NULL, NULL),
(3, 'CIRCONIO', NULL, NULL),
(4, 'DIENTES INTEGRAL ', NULL, NULL),
(5, 'DIENTES MONDIAL ', NULL, NULL),
(6, 'DIENTES MONDIAL / PREMIUM', NULL, NULL),
(7, 'DIENTES PREMIUM', NULL, NULL),
(8, 'EMAX CERAMICA', NULL, NULL),
(9, 'IPS CERAMICA INLINE DENTIN', NULL, NULL),
(10, 'OPAQUER', NULL, NULL),
(11, 'ORTHORESIN ROSA LIQ/ POLVO', NULL, NULL),
(12, 'ORTHORESIN TRANS LIQ/ POLVO', NULL, NULL),
(13, 'PALAPRESS VARIO 1KG ROSA VETEADO POLVO', NULL, NULL),
(14, 'PALAPRESS VARIO 500ML LIQ', NULL, NULL),
(16, 'PALAPRESS VARIO LIQ/ POLVO', NULL, NULL),
(17, 'RAPID REPAIR LIQUIDO/ POLVO', NULL, NULL),
(18, 'TRIAD PROVIS. MARFIL MEDIO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas`
--

CREATE TABLE IF NOT EXISTS `tarifas` (
  `id_tarifa` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tarifa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarifas`
--

INSERT INTO `tarifas` (`id_tarifa`, `nombre`, `descripcion`) VALUES
(1, 'TARIFA 1', NULL),
(2, 'TARIFA 2', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifas_articulos`
--

CREATE TABLE IF NOT EXISTS `tarifas_articulos` (
  `tarifa` varchar(6) DEFAULT NULL,
  `tarifas_id_tarifa` int(1) DEFAULT NULL,
  `articulos_id_articulo` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifas_articulos`
--

INSERT INTO `tarifas_articulos` (`tarifa`, `tarifas_id_tarifa`, `articulos_id_articulo`) VALUES
('13,50', 1, 1),
('4,60', 1, 2),
('8,00', 1, 3),
('20,00', 1, 4),
('10,00', 1, 5),
('17,30', 1, 6),
('18,00', 1, 7),
('25,00', 1, 8),
('330,00', 1, 9),
('4,60', 1, 10),
('8,00', 1, 11),
('15,00', 1, 12),
('300,00', 1, 13),
('340,00', 1, 14),
('90,00', 1, 15),
('90,00', 1, 17),
('90,00', 1, 18),
('20,00', 1, 19),
('50,00', 1, 21),
('100,00', 1, 22),
('130,00', 1, 23),
('85,00', 1, 24),
('90,00', 1, 25),
('50,00', 1, 26),
('12,00', 1, 27),
('60,00', 1, 28),
('96,00', 1, 29),
('140,00', 1, 30),
('160,00', 1, 31),
('180,00', 1, 32),
('80,00', 1, 33),
('30,00', 1, 34),
('60,00', 1, 35),
('30,00', 1, 36),
('10,00', 1, 37),
('22,00', 1, 39),
('35,00', 1, 40),
('110,00', 1, 41),
('22,00', 1, 42),
('90,00', 1, 43),
('35,00', 1, 44),
('40,00', 1, 45),
('50,00', 1, 46),
('62,00', 1, 47),
('80,00', 1, 48),
('88,00', 1, 49),
('90,00', 1, 50),
('90,00', 1, 51),
('35,00', 1, 52),
('40,00', 1, 53),
('50,00', 1, 54),
('62,00', 1, 55),
('80,00', 1, 56),
('88,00', 1, 57),
('90,00', 1, 58),
('29,00', 1, 59),
('49,00', 1, 60),
('25,50', 1, 61),
('125,00', 1, 62),
('8,00', 1, 63),
('8,00', 1, 64),
('20,00', 1, 65),
('60,00', 1, 66),
('395,00', 1, 67),
('360,00', 1, 68),
('35,00', 1, 69),
('20,00', 1, 70),
('10,00', 1, 71),
('180,00', 1, 72),
('30,00', 1, 73),
('14,00', 1, 74),
('5,00', 1, 75),
('8,00', 1, 76),
('4,60', 1, 77),
('4,60', 2, 2),
('8,00', 2, 3),
('35,00', 2, 4),
('15,00', 2, 5),
('17,30', 2, 6),
('50,00', 2, 8),
('400,00', 2, 9),
('4,60', 2, 10),
('8,00', 2, 11),
('15,00', 2, 12),
('100,00', 2, 15),
('110,00', 2, 16),
('110,00', 2, 18),
('30,00', 2, 20),
('60,00', 2, 21),
('120,00', 2, 22),
('150,00', 2, 23),
('100,00', 2, 24),
('65,00', 2, 26),
('18,00', 2, 27),
('120,00', 2, 28),
('130,00', 2, 29),
('160,00', 2, 30),
('180,00', 2, 31),
('210,00', 2, 32),
('110,00', 2, 33),
('30,00', 2, 34),
('70,00', 2, 35),
('30,00', 2, 36),
('10,00', 2, 37),
('25,00', 2, 38),
('35,00', 2, 40),
('110,00', 2, 41),
('25,00', 2, 42),
('110,00', 2, 43),
('45,00', 2, 44),
('50,00', 2, 45),
('60,00', 2, 46),
('72,00', 2, 47),
('90,00', 2, 48),
('98,00', 2, 49),
('100,00', 2, 50),
('110,00', 2, 51),
('45,00', 2, 52),
('50,00', 2, 53),
('60,00', 2, 54),
('72,00', 2, 55),
('90,00', 2, 56),
('98,00', 2, 57),
('100,00', 2, 58),
('29,00', 2, 59),
('49,00', 2, 60),
('25,50', 2, 61),
('125,00', 2, 62),
('8,00', 2, 63),
('8,00', 2, 64),
('25,50', 2, 65),
('600,00', 2, 67),
('390,00', 2, 68),
('40,00', 2, 69),
('30,00', 2, 70),
('10,00', 2, 71),
('240,00', 2, 72),
('30,00', 2, 73),
('14,00', 2, 74),
('8,00', 2, 76),
('4,60', 2, 77);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_articulos`
--

CREATE TABLE IF NOT EXISTS `tarifa_articulos` (
  `tarifa` decimal(10,2) DEFAULT NULL,
  `tarifas_id_tarifa` int(4) NOT NULL,
  `articulos_id_articulo` int(4) NOT NULL,
  PRIMARY KEY (`tarifas_id_tarifa`,`articulos_id_articulo`),
  KEY `fk_tarifa_articulos_tarifas` (`tarifas_id_tarifa`),
  KEY `fk_tarifa_articulos_articulos` (`articulos_id_articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` char(20) NOT NULL,
  `password` char(50) NOT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos_materiales`
--
ALTER TABLE `articulos_materiales`
  ADD CONSTRAINT `fk_articulos_materiales_articulos` FOREIGN KEY (`articulos_id_articulo`) REFERENCES `articulos` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articulos_materiales_materiales` FOREIGN KEY (`materiales_id_material`) REFERENCES `materiales` (`id_material`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clinicas`
--
ALTER TABLE `clinicas`
  ADD CONSTRAINT `fk_clinicas_tarifas1` FOREIGN KEY (`id_tarifa`) REFERENCES `tarifas` (`id_tarifa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `clinica_doctor`
--
ALTER TABLE `clinica_doctor`
  ADD CONSTRAINT `fk_clinica_doctor_clinicas1` FOREIGN KEY (`id_clinica`) REFERENCES `clinicas` (`id_clinica`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clinica_doctor_Doctores` FOREIGN KEY (`id_doctor`) REFERENCES `doctores` (`id_doctor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tarifa_articulos`
--
ALTER TABLE `tarifa_articulos`
  ADD CONSTRAINT `fk_tarifa_articulos_articulos` FOREIGN KEY (`articulos_id_articulo`) REFERENCES `articulos` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarifa_articulos_tarifas` FOREIGN KEY (`tarifas_id_tarifa`) REFERENCES `tarifas` (`id_tarifa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
