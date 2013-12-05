-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-08-2013 a las 20:17:00
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tribunaloral`
--
CREATE DATABASE IF NOT EXISTS `tribunaloral` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tribunaloral`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE IF NOT EXISTS `actividad` (
  `Id_Actividad` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Id_Modulo` int(11) NOT NULL,
  `Id_cargo` int(11) NOT NULL,
  PRIMARY KEY (`Id_Actividad`),
  UNIQUE KEY `Nombre` (`Nombre`),
  KEY `Id_Modulo` (`Id_Modulo`),
  KEY `Id_cargo` (`Id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`Id_Actividad`, `Nombre`, `Id_Modulo`, `Id_cargo`) VALUES
(14, 'admigeneral', 1, 6),
(15, 'actisala1', 5, 3),
(16, 'actasistente', 3, 3),
(17, 'hola', 4, 4),
(18, 'Holanda6', 1, 3),
(19, 'peneee', 1, 3),
(20, 'sasa', 1, 3),
(21, '23232', 1, 3),
(22, '43434', 1, 3),
(23, '1212', 1, 3),
(24, 'wqwqw', 1, 3),
(25, '2323', 1, 3),
(26, '23234', 1, 3),
(27, '555', 1, 3),
(28, '32323', 1, 3),
(29, 'wwww', 1, 3),
(30, '4rrddss', 1, 2),
(31, 'fdfdfdf', 1, 3),
(32, 'dsdds', 1, 3),
(33, 'sasas', 1, 3),
(34, '232311', 1, 3),
(35, 'qwqw', 1, 3),
(36, 'sdf', 1, 3),
(37, '343', 1, 3),
(38, 'w22', 1, 3),
(39, 'dww', 1, 3),
(41, 'sss', 1, 3),
(42, 'dsds', 1, 3),
(43, 'Actividadprueba', 5, 2),
(44, 'para pepe', 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_realizada`
--

CREATE TABLE IF NOT EXISTS `actividad_realizada` (
  `Id_Actividad_Realizada` int(11) NOT NULL AUTO_INCREMENT,
  `rut_supervisor` int(11) DEFAULT NULL,
  `Rut` int(11) NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Nota` int(11) NOT NULL,
  `Modificable` int(1) NOT NULL,
  `Observacion` varchar(50) NOT NULL,
  `Revisada` int(11) NOT NULL DEFAULT '0',
  `gestion` int(11) DEFAULT NULL,
  `Mod_gestion` int(11) NOT NULL DEFAULT '0',
  `rit` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`Id_Actividad_Realizada`),
  KEY `Id_Actividad` (`Id_Actividad`),
  KEY `Rut` (`Rut`),
  KEY `rut_jefe` (`rut_supervisor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Volcado de datos para la tabla `actividad_realizada`
--

INSERT INTO `actividad_realizada` (`Id_Actividad_Realizada`, `rut_supervisor`, `Rut`, `Id_Actividad`, `Fecha`, `Nota`, `Modificable`, `Observacion`, `Revisada`, `gestion`, `Mod_gestion`, `rit`) VALUES
(20, NULL, 789456123, 14, '2012-09-14 19:44:40', 100, 0, 'nada', 0, NULL, 0, ''),
(21, 12344, 147258369, 15, '2012-09-14 19:45:09', 100, 1, 'nada', 0, NULL, 0, ''),
(22, NULL, 147258369, 15, '2012-09-15 13:22:23', 100, 0, 'nada', 0, NULL, 0, ''),
(23, 12344, 147258369, 15, '2012-09-15 17:53:15', 100, 1, 'nada', 0, NULL, 0, ''),
(24, 12344, 147258369, 15, '2012-09-15 18:39:14', 100, 1, 'nada', 0, NULL, 0, ''),
(25, 12344, 147258369, 15, '2012-09-15 18:40:50', 100, 1, 'nada', 0, NULL, 0, ''),
(26, NULL, 147258369, 15, '2012-09-15 18:48:56', 100, 0, 'nada', 0, NULL, 0, ''),
(27, 12344, 147258369, 15, '2012-09-15 18:57:09', 100, 1, 'nada', 0, NULL, 0, '12345'),
(28, NULL, 147258369, 15, '2012-09-15 18:58:48', 100, 0, 'nada', 0, NULL, 0, ''),
(29, NULL, 147258369, 15, '2012-09-15 19:02:45', 100, 0, 'nada', 0, NULL, 0, ''),
(30, NULL, 147258369, 15, '2012-09-15 19:02:59', 100, 0, 'nada', 0, NULL, 0, ''),
(31, NULL, 147258369, 15, '2012-09-15 19:05:26', 100, 0, 'nada', 0, NULL, 0, ''),
(32, NULL, 147258369, 15, '2012-09-15 19:05:38', 100, 0, 'nada', 0, NULL, 0, ''),
(33, 987654321, 147258369, 15, '2012-09-15 19:09:34', 100, 1, 'nada', 1, NULL, 0, 'rit1 rit3 rit 4'),
(34, 987654321, 147258369, 15, '2012-09-15 19:09:43', 100, 1, 'nada', 1, NULL, 0, 'rit2 tit5'),
(35, 987654321, 147258369, 15, '2012-09-15 19:22:31', 100, 1, 'nada', 1, NULL, 0, '164546416545'),
(37, NULL, 147258369, 16, '2012-09-27 06:01:48', 100, 0, 'nada', 0, NULL, 0, '123'),
(38, NULL, 147258369, 16, '2012-09-27 06:14:14', 100, 0, 'nada', 0, NULL, 0, '555'),
(39, NULL, 32165423, 17, '2012-09-27 06:20:11', 100, 0, 'nada', 0, NULL, 0, ''),
(44, NULL, 32165423, 17, '2012-09-28 03:07:00', 100, 0, 'nada', 0, NULL, 0, ''),
(45, 47856985, 32165423, 17, '2012-09-28 03:09:02', 100, 1, 'nada', 0, NULL, 0, ''),
(46, 47856985, 32165423, 17, '2012-09-28 03:26:51', 100, 1, 'nada', 0, NULL, 0, ''),
(47, NULL, 32165423, 17, '2012-09-28 03:32:18', 100, 1, 'nada', 0, NULL, 0, ''),
(48, NULL, 32165423, 17, '2012-09-28 03:47:09', 100, 1, 'nada', 0, NULL, 0, ''),
(49, NULL, 32165423, 17, '2012-09-28 03:57:56', 100, 1, 'nada', 0, NULL, 0, ''),
(50, NULL, 32165423, 17, '2012-09-28 16:52:43', 100, 1, 'nada', 0, NULL, 0, ''),
(51, NULL, 32165423, 14, '2013-05-12 03:00:00', 0, 0, '', 0, NULL, 0, '123'),
(52, NULL, 32165423, 14, '2013-07-27 04:23:33', 0, 0, '', 0, NULL, 0, '123'),
(53, NULL, 32165423, 17, '2013-07-27 04:25:24', 0, 0, '', 0, NULL, 0, '123'),
(54, NULL, 32165423, 16, '2013-07-27 04:48:30', 0, 0, '', 0, NULL, 0, '123'),
(55, NULL, 32165423, 14, '2013-07-27 04:48:36', 0, 0, '', 0, NULL, 0, '123'),
(56, NULL, 32165423, 15, '2013-07-27 05:36:53', 0, 0, '', 0, NULL, 0, '123'),
(57, NULL, 32165423, 15, '2013-07-27 05:38:03', 0, 0, '', 0, NULL, 0, '123'),
(58, NULL, 32165423, 16, '2013-07-27 05:40:50', 0, 0, '', 0, NULL, 0, '123'),
(59, NULL, 32165423, 16, '2013-07-27 05:43:22', 0, 0, '', 0, NULL, 0, '123'),
(60, NULL, 32165423, 14, '2013-07-27 05:44:13', 0, 0, '', 0, NULL, 0, '123'),
(61, NULL, 32165423, 16, '2013-07-27 05:47:33', 0, 0, '', 0, NULL, 0, '123'),
(62, NULL, 32165423, 16, '2013-07-27 05:47:49', 0, 0, '', 0, NULL, 0, '123'),
(63, NULL, 32165423, 16, '2013-08-10 05:38:08', 0, 0, '', 0, NULL, 0, '123'),
(64, NULL, 32165423, 14, '2013-08-10 06:00:11', 0, 0, '', 0, NULL, 0, '123'),
(66, NULL, 32165423, 14, '2013-08-10 06:11:47', 0, 0, '', 0, NULL, 0, '123'),
(70, NULL, 32165423, 16, '2013-08-10 06:31:54', 0, 0, '', 0, NULL, 0, '123'),
(71, 47856985, 32165423, 16, '2013-08-10 06:31:57', 0, 1, '', 0, NULL, 0, '123'),
(72, 12344, 32165423, 16, '2013-08-10 06:39:26', 0, 1, '', 0, NULL, 0, '123'),
(73, NULL, 32165423, 17, '2013-08-10 06:40:42', 0, 1, '', 0, NULL, 0, '123'),
(74, NULL, 32165423, 14, '2013-08-11 18:08:06', 0, 1, '', 1, NULL, 0, '123'),
(75, 47856985, 32165423, 14, '2013-08-14 05:39:32', 0, 1, '', 0, NULL, 0, '123'),
(76, NULL, 32165423, 18, '2013-08-18 00:31:42', 0, 0, '', 0, NULL, 0, '123'),
(77, NULL, 32165423, 43, '2013-08-18 22:24:39', 0, 0, '', 0, NULL, 0, '123'),
(78, NULL, 12344, 43, '2013-08-18 22:29:12', 0, 0, '', 0, NULL, 0, '123'),
(79, 62524242, 12344, 43, '2013-08-18 22:36:06', 0, 1, '', 0, NULL, 0, '123'),
(80, NULL, 12344, 43, '2013-08-18 22:37:10', 0, 0, '', 0, NULL, 0, '123'),
(81, 62524242, 12344, 43, '2013-08-18 22:38:11', 0, 1, '', 0, NULL, 0, '123'),
(82, 12344, 987612345, 44, '2013-08-18 23:01:56', 0, 1, '', 0, NULL, 0, '123'),
(83, NULL, 987612345, 44, '2013-08-18 23:19:39', 0, 0, '', 0, NULL, 0, '123'),
(84, 12344, 987612345, 44, '2013-08-19 02:33:30', 0, 1, '', 0, NULL, 0, '123'),
(85, NULL, 987612345, 15, '2013-08-19 02:38:32', 0, 0, '', 0, NULL, 0, '123'),
(86, NULL, 987612345, 16, '2013-08-19 05:29:15', 0, 0, '', 0, NULL, 0, '123'),
(87, NULL, 12344, 43, '2013-08-19 06:42:12', 0, 0, '', 0, NULL, 0, '123'),
(88, NULL, 12344, 43, '2013-08-19 06:42:15', 0, 0, '', 0, NULL, 0, '123'),
(89, NULL, 987612345, 16, '2013-08-20 20:02:37', 0, 1, '', 0, NULL, 0, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombreCargo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cargo`),
  UNIQUE KEY `nombreCargo_2` (`nombreCargo`),
  KEY `nombreCargo` (`nombreCargo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombreCargo`) VALUES
(6, 'Administrador'),
(2, 'Administrativo'),
(3, 'Asistente'),
(5, 'Encargado Atencion'),
(4, 'Informatico'),
(1, 'Jefe Unidad');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `datosact`
--
CREATE TABLE IF NOT EXISTS `datosact` (
`Id_Actividad_Realizada` int(11)
,`nombre` varchar(50)
,`Id_Modulo` int(11)
,`Id_cargo` int(11)
,`Modificable` int(1)
,`Revisada` int(11)
,`fecha` timestamp
,`rit` varchar(60)
,`NombreModulo` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `Id_Modulo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Modulo`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`Id_Modulo`, `Nombre`) VALUES
(2, 'Unidad Administrativa de Apoyo a Peritos y Testigo'),
(3, 'Unidad Administrativa de Atencion a Publico'),
(4, 'Unidad Administrativa de Causas'),
(5, 'Unidad Administrativa de Sala'),
(6, 'Unidad Administrativa de Servicio'),
(1, 'Unidad Administrativa General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paso`
--

CREATE TABLE IF NOT EXISTS `paso` (
  `Id_pasos` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `valor` int(11) NOT NULL DEFAULT '1',
  `id_actividad` int(11) NOT NULL,
  `eliminado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_pasos`),
  UNIQUE KEY `Id_pasos` (`Id_pasos`),
  KEY `id_actividad` (`id_actividad`),
  KEY `Id_pasos_2` (`Id_pasos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `paso`
--

INSERT INTO `paso` (`Id_pasos`, `Nombre`, `valor`, `id_actividad`, `eliminado`) VALUES
(6, 'paso1', 2, 14, 0),
(7, 'paso2', 3, 14, 0),
(8, 'paso3', 1, 14, 0),
(10, 'pasosala1', 1, 15, 0),
(11, 'pasosala2', 3, 15, 0),
(13, 'paso1', 1, 16, 0),
(14, 'paso2', 1, 17, 0),
(15, 'paso1', 1, 17, 0),
(16, 'paso1', 2, 17, 0),
(17, 'paso2', 2, 43, 0),
(18, 'paso1', 6, 43, 0),
(19, 'peneee', 6, 43, 0),
(20, 'pepe1', 2, 44, 0),
(21, 'pepe2', 3, 44, 0),
(22, 'pepe3', 2, 44, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasos_realizados`
--

CREATE TABLE IF NOT EXISTS `pasos_realizados` (
  `Id_Actividad_Realizada` int(11) NOT NULL,
  `id_paso` int(11) NOT NULL,
  `Nombre_Paso` varchar(50) NOT NULL,
  `Click_User` int(11) NOT NULL DEFAULT '0',
  `Click_Jefe` int(11) NOT NULL DEFAULT '0',
  `Valor_Paso` int(11) NOT NULL,
  `Malas` int(11) NOT NULL DEFAULT '0',
  `Observacion` varchar(50) DEFAULT NULL,
  `Observacion_jefe` varchar(50) DEFAULT NULL,
  `Click_gestion` int(11) NOT NULL DEFAULT '0',
  `Observacion_gestion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Actividad_Realizada`,`id_paso`),
  KEY `id_paso` (`id_paso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasos_realizados`
--

INSERT INTO `pasos_realizados` (`Id_Actividad_Realizada`, `id_paso`, `Nombre_Paso`, `Click_User`, `Click_Jefe`, `Valor_Paso`, `Malas`, `Observacion`, `Observacion_jefe`, `Click_gestion`, `Observacion_gestion`) VALUES
(46, 14, 'paso2', 1, 0, 3, 0, '', NULL, 0, NULL),
(46, 15, 'paso1', 1, 0, 3, 0, '', NULL, 0, NULL),
(46, 16, 'paso1', 1, 0, 3, 0, '', NULL, 0, NULL),
(48, 14, 'paso2', 1, 0, 3, 0, '', '', 0, NULL),
(48, 15, 'paso1', 1, 0, 3, 0, '', '', 0, NULL),
(48, 16, 'paso1', 1, 0, 3, 0, 'jajaj', NULL, 0, NULL),
(49, 14, 'paso2', 1, 0, 3, 0, '', NULL, 0, NULL),
(49, 15, 'paso1', 1, 0, 3, 0, 'pene', NULL, 0, NULL),
(49, 16, 'paso1', 1, 0, 3, 0, 'holi', NULL, 0, NULL),
(50, 14, 'paso2', 1, 0, 3, 0, '', NULL, 0, NULL),
(50, 15, 'paso1', 1, 0, 3, 0, 'pene pa knp', NULL, 0, NULL),
(50, 16, 'paso1', 1, 0, 3, 0, 'hdfjjsj', NULL, 0, NULL),
(57, 6, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(58, 13, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(60, 6, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(60, 7, 'paso2', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(60, 8, 'paso3', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(61, 13, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(62, 13, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(63, 13, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(64, 6, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(64, 7, 'paso2', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(64, 8, 'paso3', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(66, 6, 'paso1', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(66, 7, 'paso2', 0, 0, 2, 0, 'nada', NULL, 0, NULL),
(66, 8, 'paso3', 0, 0, 3, 0, 'nada', NULL, 0, NULL),
(70, 13, 'paso1', 0, 0, 3, 0, 'nada', NULL, 0, NULL),
(71, 13, 'paso1', 1, 1, 5, 0, 'nada', NULL, 0, NULL),
(74, 6, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(74, 7, 'paso2', 1, 1, 3, 0, 'nada', NULL, 0, NULL),
(74, 8, 'paso3', 1, 1, 1, 0, 'nada', NULL, 0, NULL),
(75, 6, 'paso1', 0, 1, 55, 0, 'nada', NULL, 0, NULL),
(75, 7, 'paso2', 1, 0, 66, 0, 'nada', NULL, 0, NULL),
(75, 8, 'paso3', 0, 1, 33, 0, 'nada', NULL, 0, NULL),
(77, 17, 'paso2', 0, 0, 22, 0, 'nada', NULL, 0, NULL),
(77, 18, 'paso1', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(77, 19, 'peneee', 0, 0, 2, 0, 'nada', NULL, 0, NULL),
(78, 17, 'paso2', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(78, 18, 'paso1', 1, 0, 2, 0, 'nada', NULL, 0, NULL),
(78, 19, 'peneee', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(79, 17, 'paso2', 1, 0, 3, 0, 'nada', NULL, 0, NULL),
(79, 18, 'paso1', 0, 1, 44, 0, 'nada', NULL, 0, NULL),
(79, 19, 'peneee', 1, 0, 5, 0, 'nada', NULL, 0, NULL),
(80, 17, 'paso2', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(80, 18, 'paso1', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(81, 17, 'paso2', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(81, 18, 'paso1', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(82, 20, 'pepe1', 0, 1, 1, 0, 'nada', NULL, 0, NULL),
(82, 21, 'pepe2', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(82, 22, 'pepe3', 1, 1, 1, 0, 'nada', NULL, 0, NULL),
(83, 20, 'pepe1', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(83, 21, 'pepe2', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(83, 22, 'pepe3', 0, 0, 4, 0, 'nada', NULL, 0, NULL),
(84, 20, 'pepe1', 1, 1, 2, 0, 'nada', NULL, 0, NULL),
(84, 21, 'pepe2', 1, 1, 1, 0, 'nada', NULL, 0, NULL),
(84, 22, 'pepe3', 0, 1, 1, 0, 'nada', NULL, 0, NULL),
(85, 10, 'pasosala1', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(85, 11, 'pasosala2', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(86, 13, 'paso1', 1, 0, 1, 0, 'nada', NULL, 0, NULL),
(87, 17, 'paso2', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(87, 18, 'paso1', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(87, 19, 'peneee', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(88, 17, 'paso2', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(88, 18, 'paso1', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(88, 19, 'peneee', 0, 0, 1, 0, 'nada', NULL, 0, NULL),
(89, 13, 'paso1', 1, 0, 3, 0, 'nada', NULL, 0, NULL);

--
-- Disparadores `pasos_realizados`
--
DROP TRIGGER IF EXISTS `Malas`;
DELIMITER //
CREATE TRIGGER `Malas` BEFORE UPDATE ON `pasos_realizados`
 FOR EACH ROW Begin
declare hola integer;
declare dd integer;

set dd = new.Valor_Paso;
set hola = new.Malas;

if  hola = 8530 then
	set new.Malas = dd;
        set hola = dd;
end if;
if dd < hola then
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = "Las malas son mayores que las realizadas";

end if;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Rut` int(8) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `ApPaterno` varchar(50) NOT NULL,
  `ApMaterno` varchar(50) NOT NULL,
  `Nick` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gestion` int(11) DEFAULT NULL,
  `cargo` int(11) NOT NULL,
  PRIMARY KEY (`Rut`),
  UNIQUE KEY `Nick` (`Nick`),
  UNIQUE KEY `Rut` (`Rut`),
  UNIQUE KEY `Gestion` (`Gestion`),
  KEY `cargo` (`cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Rut`, `Nombre`, `ApPaterno`, `ApMaterno`, `Nick`, `Password`, `Gestion`, `cargo`) VALUES
(12344, 'juan', 'juan', 'juan', 'juan ', '121313', NULL, 2),
(32165423, 'informativo', 'informatico', 'informatico', 'informatico', '123', NULL, 4),
(47856985, 'jefe', 'jefe', 'jefe', 'supervisor', '12345', NULL, 1),
(62524242, 'jefe', 'unidad', 'local', 'jefemax', '1234', NULL, 1),
(147258369, 'asistente', 'asistente ', 'asistente', 'asistente', '12345', NULL, 3),
(519753987, 'encaragdo', 'encargado', 'encargadi', 'encargado', '123', NULL, 5),
(789456123, 'admi', 'admi', 'admi', 'admi', 'admi', NULL, 6),
(987612345, 'pepe', 'lopez', 'perez', 'pepito', '9876', NULL, 3),
(987654321, 'administrativo', 'admin', 'admin', 'administrativo', '13', NULL, 2);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vistaact`
--
CREATE TABLE IF NOT EXISTS `vistaact` (
`Id_Actividad_Realizada` int(11)
,`nombre` varchar(50)
,`Id_Modulo` int(11)
,`Id_cargo` int(11)
,`Modificable` int(1)
,`Revisada` int(11)
,`rut_supervisor` int(11)
,`fecha` timestamp
,`rit` varchar(60)
,`NombreModulo` varchar(50)
,`Nombrejec` varchar(50)
,`Rut` int(8)
,`Apellidoejec` varchar(50)
);
-- --------------------------------------------------------

--
-- Estructura para la vista `datosact`
--
DROP TABLE IF EXISTS `datosact`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datosact` AS (select `actividad_realizada`.`Id_Actividad_Realizada` AS `Id_Actividad_Realizada`,`actividad`.`Nombre` AS `nombre`,`actividad`.`Id_Modulo` AS `Id_Modulo`,`actividad`.`Id_cargo` AS `Id_cargo`,`actividad_realizada`.`Modificable` AS `Modificable`,`actividad_realizada`.`Revisada` AS `Revisada`,`actividad_realizada`.`Fecha` AS `fecha`,`actividad_realizada`.`rit` AS `rit`,`modulos`.`Nombre` AS `NombreModulo` from ((`actividad` join `actividad_realizada`) join `modulos`) where ((`actividad_realizada`.`Id_Actividad` = `actividad`.`Id_Actividad`) and (`actividad`.`Id_Modulo` = `modulos`.`Id_Modulo`)));

-- --------------------------------------------------------

--
-- Estructura para la vista `vistaact`
--
DROP TABLE IF EXISTS `vistaact`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vistaact` AS (select `actividad_realizada`.`Id_Actividad_Realizada` AS `Id_Actividad_Realizada`,`actividad`.`Nombre` AS `nombre`,`actividad`.`Id_Modulo` AS `Id_Modulo`,`actividad`.`Id_cargo` AS `Id_cargo`,`actividad_realizada`.`Modificable` AS `Modificable`,`actividad_realizada`.`Revisada` AS `Revisada`,`actividad_realizada`.`rut_supervisor` AS `rut_supervisor`,`actividad_realizada`.`Fecha` AS `fecha`,`actividad_realizada`.`rit` AS `rit`,`modulos`.`Nombre` AS `NombreModulo`,`usuarios`.`Nombre` AS `Nombrejec`,`usuarios`.`Rut` AS `Rut`,`usuarios`.`ApPaterno` AS `Apellidoejec` from (((`actividad` join `actividad_realizada`) join `modulos`) join `usuarios`) where ((`actividad_realizada`.`Id_Actividad` = `actividad`.`Id_Actividad`) and (`actividad`.`Id_Modulo` = `modulos`.`Id_Modulo`) and (`actividad_realizada`.`Rut` = `usuarios`.`Rut`)));

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `actividad_ibfk_1` FOREIGN KEY (`Id_Modulo`) REFERENCES `modulos` (`Id_Modulo`),
  ADD CONSTRAINT `actividad_ibfk_2` FOREIGN KEY (`Id_cargo`) REFERENCES `cargo` (`id_cargo`);

--
-- Filtros para la tabla `actividad_realizada`
--
ALTER TABLE `actividad_realizada`
  ADD CONSTRAINT `actividad_realizada_ibfk_1` FOREIGN KEY (`Id_Actividad`) REFERENCES `actividad` (`Id_Actividad`),
  ADD CONSTRAINT `actividad_realizada_ibfk_2` FOREIGN KEY (`Rut`) REFERENCES `usuarios` (`Rut`);

--
-- Filtros para la tabla `paso`
--
ALTER TABLE `paso`
  ADD CONSTRAINT `paso_ibfk_1` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`Id_Actividad`);

--
-- Filtros para la tabla `pasos_realizados`
--
ALTER TABLE `pasos_realizados`
  ADD CONSTRAINT `pasos_realizados_ibfk_1` FOREIGN KEY (`Id_Actividad_Realizada`) REFERENCES `actividad_realizada` (`Id_Actividad_Realizada`),
  ADD CONSTRAINT `pasos_realizados_ibfk_2` FOREIGN KEY (`id_paso`) REFERENCES `paso` (`Id_pasos`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id_cargo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
