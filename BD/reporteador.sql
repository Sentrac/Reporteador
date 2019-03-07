-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-03-2019 a las 15:19:15
-- Versión del servidor: 8.0.15
-- Versión de PHP: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reporteador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_equipo`
--

CREATE TABLE `bitacora_equipo` (
  `idbitacora` int(11) NOT NULL,
  `accion` varchar(17) DEFAULT NULL,
  `id_equipo` int(11) DEFAULT NULL,
  `nombre_host` varchar(50) DEFAULT NULL,
  `dns` varchar(15) DEFAULT NULL,
  `dns_viejo` varchar(15) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_equipo`
--

INSERT INTO `bitacora_equipo` (`idbitacora`, `accion`, `id_equipo`, `nombre_host`, `dns`, `dns_viejo`, `grupo`, `usuario`, `fecha`) VALUES
(1, 'MODIFICO EQUIPO', 35, 'warriors.localdomain', '192.168.2.188', '192.168.2.188', 4, 'admin@gmail.com', '2019-02-13 17:16:32'),
(2, 'ELIMINO EQUIPO', 35, 'warriors.localdomain', '192.168.2.188', NULL, 4, 'admin@gmail.com', '2019-02-13 17:17:33'),
(3, 'AGREGO EQUIPO', 42, 'asd', 'wreporter.warri', NULL, 4, 'admin@gmail.com', '2019-02-13 17:22:16'),
(4, 'AGREGO EQUIPO', 43, 'bjbj', 'fuyf.com', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-14 10:11:08'),
(5, 'MODIFICO EQUIPO', 36, 'warriors.localdomain', 'fyugi.com', '192.168.2.63', 4, 'enriquez.rosaicela@gmail.com', '2019-02-14 10:16:48'),
(6, 'ELIMINO EQUIPO', 36, 'warriors.localdomain', 'fyugi.com', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-14 10:18:22'),
(7, 'MODIFICO EQUIPO', 37, 'warriors.localdomain', '192.168.5.11', '192.168.5.11', 4, 'admin@gmail.com', '2019-02-14 11:06:17'),
(8, 'AGREGO EQUIPO', 44, 'vbhouho', 'bvue', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 16:30:14'),
(9, 'AGREGO EQUIPO', 45, 'hola', 'giu', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 16:52:50'),
(10, 'AGREGO EQUIPO', 46, 'final', 'fiu', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 16:53:57'),
(11, 'AGREGO EQUIPO', 47, 'vkjug', 'bglio', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 16:54:39'),
(12, 'AGREGO EQUIPO', 48, 'viygfyfu', 'gougo', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 16:55:47'),
(13, 'AGREGO EQUIPO', 49, 'asdfghjklñ', 'sdcfghjkl', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 16:59:07'),
(14, 'MODIFICO EQUIPO', 37, 'warriors.localdomain', '192.168.5.11', '192.168.5.11', 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 17:02:30'),
(15, 'MODIFICO EQUIPO', 37, 'warriors.localdomainasd', '192.168.5.11', '192.168.5.11', 4, 'enriquez.rosaicela@gmail.com', '2019-02-17 17:02:39'),
(16, 'AGREGO EQUIPO', 50, '192', '192.168.2.2', NULL, 4, 'admin@gmail.com', '2019-02-19 14:47:45'),
(17, 'AGREGO EQUIPO', 51, '19233', '193.168.5.5', NULL, 1, 'admin@gmail.com', '2019-02-19 14:55:02'),
(18, 'AGREGO EQUIPO', 52, 'hola', '195.165.123.123', NULL, 1, 'admin@gmail.com', '2019-02-19 14:57:02'),
(19, 'AGREGO EQUIPO', 53, '159', '15.15.15.15', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-19 15:57:43'),
(20, 'AGREGO EQUIPO', 54, '489', '123.123.123.123', NULL, 22, 'admin@gmail.com', '2019-02-19 16:01:16'),
(21, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 12:36:13'),
(22, 'MODIFICO EQUIPO', 52, 'hola', '195.165.123.123', '195.165.123.123', 32, 'admin@gmail.com', '2019-03-06 12:36:17'),
(23, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 12:52:16'),
(24, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 12:52:21'),
(25, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 12:52:59'),
(26, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 13:49:36'),
(27, 'MODIFICO EQUIPO', 52, 'hola', '195.165.123.123', '195.165.123.123', 32, 'admin@gmail.com', '2019-03-06 13:52:49'),
(28, 'MODIFICO EQUIPO', 52, 'hola', '195.165.123.123', '195.165.123.123', 32, 'admin@gmail.com', '2019-03-06 13:55:28'),
(29, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 13:57:34'),
(30, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 14:00:11'),
(31, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 14:03:57'),
(32, 'MODIFICO EQUIPO', 51, '19233', '193.168.5.5', '193.168.5.5', 32, 'admin@gmail.com', '2019-03-06 14:07:22'),
(33, 'AGREGO EQUIPO', 55, 'lolita', '159.263.487', NULL, 33, 'admin@gmail.com', '2019-03-06 14:26:36'),
(34, 'MODIFICO EQUIPO', 55, 'lolita', '159.263.487', '159.263.487', 33, 'admin@gmail.com', '2019-03-06 14:35:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_grupo`
--

CREATE TABLE `bitacora_grupo` (
  `idbitacora` int(11) NOT NULL,
  `accion` varchar(17) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `nombre_nuevo` varchar(45) DEFAULT NULL,
  `nombre_viejo` varchar(45) DEFAULT NULL,
  `alias_nuevo` varchar(50) DEFAULT NULL,
  `rfc_nuevo` varchar(13) DEFAULT NULL,
  `iframe` varchar(255) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_grupo`
--

INSERT INTO `bitacora_grupo` (`idbitacora`, `accion`, `id_grupo`, `nombre_nuevo`, `nombre_viejo`, `alias_nuevo`, `rfc_nuevo`, `iframe`, `usuario`, `fecha`) VALUES
(6, 'ELIMINO GRUPO', 19, 'HELLO', NULL, 'JEJE', 'POI1624345QWE', '<iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()\" height=\"600\" width=\"800\"></iframe>', 'admin@gmail.com', '2019-02-08 15:51:36'),
(7, 'ELIMINO GRUPO', 16, 'GREGE', NULL, 'FREG', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-10 16:08:35'),
(8, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTESS', 'UNIVERSIDAD INSURGENTES', 'INSURGENTES', 'POI1624345QSE', '<iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()\" height=\"600\" width=\"800\"></iframe>', 'admin@gmail.com', '2019-02-10 16:13:58'),
(9, 'AGREGO GRUPO', 28, 'FNRKFN', NULL, 'NFK', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-11 14:26:36'),
(10, 'AGREGO GRUPO', 29, 'NOW', NULL, 'NVE', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-11 19:20:11'),
(11, 'AGREGO GRUPO', 30, 'VNEJN', NULL, 'VBIE', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-11 19:21:30'),
(12, 'AGREGO GRUPO', 31, 'AASDF', NULL, 'ASD', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-13 17:15:56'),
(13, 'ELIMINO GRUPO', 31, 'AASDF', NULL, 'ASD', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-13 17:16:18'),
(14, 'AGREGO GRUPO', 31, 'NVADPIP', NULL, 'WIHO', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-14 11:08:37'),
(15, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTES', 'UNIVERSIDAD INSURGENTESS', 'INSURGENTES', 'POI1624345QSE', '&lt;iframe src=\"http://192.168.2.44:5601/app/kibana#/dashboard/a428b970-d620-11e8-a693-d78fb81e1fa0?embed=true&_g=(refreshInterval:(pause:!t,value:0),time:(from:now-2y,mode:quick,to:now))\" height=\"600\" width=\"800\"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-02-18 14:34:58'),
(16, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTESS', 'UNIVERSIDAD INSURGENTES', 'INSURGENTES', 'POI1624345QSE', '&lt;iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=(refreshInterval:(pause:!t,value:0),time:(from:now-60d,mode:quick,to:now))\" height=\"600\" width=\"800\"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-02-18 14:36:46'),
(17, 'ELIMINO GRUPO', 4, 'UNIVERSIDAD INSURGENTESS', NULL, 'INSURGENTES', 'POI1624345QSE', '&lt;iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=(refreshInterval:(pause:!t,value:0),time:(from:now-60d,mode:quick,to:now))\" height=\"600\" width=\"800\"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-03-02 00:29:23'),
(18, 'ELIMINO GRUPO', 22, 'VIYGI', NULL, 'IYG', 'POI1624345QWE', '', 'admin@gmail.com', '2019-03-02 00:29:28'),
(19, 'ELIMINO GRUPO', 28, 'FNRKFN', NULL, 'NFK', 'POI1624345QWE', '', 'admin@gmail.com', '2019-03-02 00:29:35'),
(20, 'ELIMINO GRUPO', 29, 'NOW', NULL, 'NVE', 'POI1624345QWE', '', 'admin@gmail.com', '2019-03-02 00:29:39'),
(21, 'ELIMINO GRUPO', 30, 'VNEJN', NULL, 'VBIE', 'POI1624345QWE', '', 'admin@gmail.com', '2019-03-02 00:29:44'),
(22, 'ELIMINO GRUPO', 31, 'NVADPIP', NULL, 'WIHO', 'POI1624345QWE', '', 'admin@gmail.com', '2019-03-02 00:29:50'),
(23, 'AGREGO GRUPO', 32, 'UNIVERSIDAD INSURGENTES', NULL, 'UI', 'UI12345678', '', 'admin@gmail.com', '2019-03-04 12:09:48'),
(24, 'AGREGO GRUPO', 33, 'VILLA', NULL, 'CORTE', 'POI1624345QWE', '', 'admin@gmail.com', '2019-03-04 20:06:18'),
(25, 'MODIFICO GRUPO', 32, 'UNIVERSIDAD INSURGENTES', 'UNIVERSIDAD INSURGENTES', 'UI', 'UI12345678', '&lt;iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/48ea39b0-3ea0-11e9-bd59-613c5e6c8929?embed=true&_g=(refreshInterval:(pause:!f,value:5000),time:(from:now-15m,mode:quick,to:now))\" height=\"600\" width=\"800\"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-03-05 17:37:43'),
(26, 'MODIFICO GRUPO', 32, 'UNIVERSIDAD INSURGENTES', 'UNIVERSIDAD INSURGENTES', 'UI', 'UI12345678', '<iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/48ea39b0-3ea0-11e9-bd59-613c5e6c8929?embed=true&_g=(refreshInterval:(pause:!f,value:5000),time:(from:now-15m,mode:quick,to:now))\" height=\"600\" width=\"800\"></iframe>', 'admin@gmail.com', '2019-03-05 17:42:45'),
(27, 'MODIFICO GRUPO', 32, 'UNIVERSIDAD INSURGENTES', 'UNIVERSIDAD INSURGENTES', 'UI', 'UI12345678', '', 'admin@gmail.com', '2019-03-05 17:48:16'),
(28, 'MODIFICO GRUPO', 32, 'UNIVERSIDAD INSURGENTES', 'UNIVERSIDAD INSURGENTES', 'UI', 'UI12345678', '&lt;iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/48ea39b0-3ea0-11e9-bd59-613c5e6c8929?embed=true&_g=(refreshInterval:(pause:!f,value:5000),time:(from:now-15m,mode:quick,to:now))\" height=\"600\" width=\"800\"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-03-05 17:49:04'),
(29, 'MODIFICO GRUPO', 32, 'UNIVERSIDAD INSURGENTES', 'UNIVERSIDAD INSURGENTES', 'UI', 'UI12345678', '<iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/48ea39b0-3ea0-11e9-bd59-613c5e6c8929?embed=true&_g=(refreshInterval:(pause:!f,value:5000),time:(from:now-15m,mode:quick,to:now))\" height=\"600\" width=\"800\"></iframe>', 'admin@gmail.com', '2019-03-06 12:35:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_usuario`
--

CREATE TABLE `bitacora_usuario` (
  `idbitacora` int(11) NOT NULL,
  `accion` varchar(17) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `rol_nuevo` varchar(2) DEFAULT NULL,
  `rol_viejo` varchar(2) DEFAULT NULL,
  `grupo_nuevo` int(11) DEFAULT NULL,
  `grupo_viejo` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_usuario`
--

INSERT INTO `bitacora_usuario` (`idbitacora`, `accion`, `id_usuario`, `nombre`, `apellidos`, `rol_nuevo`, `rol_viejo`, `grupo_nuevo`, `grupo_viejo`, `usuario`, `fecha`) VALUES
(1, 'AGREGO USUARIO', 91, 'BGIUG', 'BIUJ', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-10 14:18:43'),
(2, 'MODIFICO USUARIO', 91, 'HOLA', 'BIUJ', 'CO', 'CO', 4, 4, 'admin@gmail.com', '2019-02-10 14:49:42'),
(3, 'AGREGO USUARIO', 92, 'ROSA', 'ENRIQUEZ', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-10 14:52:13'),
(4, 'AGREGO USUARIO', 93, 'VBHFB', 'NCDU', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 13:06:11'),
(5, 'AGREGO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 13:27:02'),
(6, 'AGREGO USUARIO', 95, 'ROSA', 'ENRIQUEZ', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 13:28:19'),
(7, 'ELIMINO USUARIO', 93, 'VBHFB', 'NCDU', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 13:29:44'),
(8, 'AGREGO USUARIO', 96, 'EVE', 'PALOMAR', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 13:30:22'),
(9, 'MODIFICO USUARIO', 95, 'ROSA', 'ENRIQUEZ', 'CO', 'CO', 4, 4, 'admin@gmail.com', '2019-02-11 13:38:12'),
(10, 'AGREGO USUARIO', 98, 'VEJ', 'NVJ', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:44:40'),
(11, 'AGREGO USUARIO', 100, '\'HIUHI\'', '\'CBIDBI\'', '\'A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:46:29'),
(12, 'ELIMINO USUARIO', 100, '\'HIUHI\'', '\'CBIDBI\'', '\'A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:46:30'),
(13, 'AGREGO USUARIO', 101, '\'AAA\'', '\'BBBB\'', '\'A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:47:22'),
(14, 'ELIMINO USUARIO', 101, '\'AAA\'', '\'BBBB\'', '\'A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:47:22'),
(15, 'AGREGO USUARIO', 102, '\'BRKJB\'', '\'VKJK\'', '\'C', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:48:07'),
(16, 'ELIMINO USUARIO', 102, '\'BRKJB\'', '\'VKJK\'', '\'C', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:48:07'),
(17, 'AGREGO USUARIO', 103, '\'AAAA\'', '\'BBBB\'', '\'A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:49:26'),
(18, 'ELIMINO USUARIO', 95, 'ROSA', 'ENRIQUEZ', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 14:34:33'),
(19, 'ELIMINO USUARIO', 103, '\'AAAA\'', '\'BBBB\'', '\'A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 15:34:21'),
(20, 'ELIMINO USUARIO', 92, 'ROSA', 'ENRIQUEZ', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 15:34:30'),
(21, 'ELIMINO USUARIO', 90, 'MARIA', 'MONTOYA', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 15:34:36'),
(22, 'ELIMINO USUARIO', 91, 'HOLA', 'BIUJ', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 15:34:47'),
(23, 'ELIMINO USUARIO', 98, 'VEJ', 'NVJ', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 15:34:55'),
(24, 'AGREGO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 15:35:23'),
(25, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 15:44:38'),
(26, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 15:44:56'),
(27, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 15:47:06'),
(28, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 15:54:52'),
(29, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 15:55:12'),
(30, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 16:01:11'),
(31, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 16:02:21'),
(32, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-13 16:02:51'),
(33, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'CO', 'AD', 22, 4, 'admin@gmail.com', '2019-02-13 16:05:42'),
(34, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'CO', 'CO', 22, 22, 'admin@gmail.com', '2019-02-13 17:31:50'),
(35, 'MODIFICO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', 'CO', 4, 22, 'admin@gmail.com', '2019-02-14 09:59:14'),
(36, 'MODIFICO USUARIO', 96, 'EVE', 'PALOMAR', 'CO', 'AD', 4, 4, 'admin@gmail.com', '2019-02-14 09:59:27'),
(37, 'ELIMINO USUARIO', 96, 'EVE', 'PALOMAR', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-14 10:06:43'),
(38, 'AGREGO USUARIO', 105, 'ASD', 'ASD', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-14 10:06:56'),
(39, 'MODIFICO USUARIO', 105, 'ASD', 'ASD', 'CO', 'CO', 4, 4, 'enriquez.rosaicela@gmail.com', '2019-02-14 10:10:41'),
(40, 'ELIMINO USUARIO', 105, 'ASD', 'ASD', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-14 10:10:51'),
(41, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-14 10:33:17'),
(42, 'AGREGO USUARIO', 105, 'LUPE', 'SANTILLAN', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:22:31'),
(43, 'ELIMINO USUARIO', 105, 'LUPE', 'SANTILLAN', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:36:20'),
(44, 'AGREGO USUARIO', 106, 'LUPE', 'SANTIILLAN', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:43:05'),
(45, 'ELIMINO USUARIO', 106, 'LUPE', 'SANTIILLAN', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:44:43'),
(46, 'AGREGO USUARIO', 107, 'LUPE', 'SANTILLAN', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:45:16'),
(47, 'ELIMINO USUARIO', 104, 'ROSAICELA', 'ENRIQUEZ', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-15 16:46:12'),
(48, 'MODIFICO USUARIO', 107, 'LUPE', 'SANTILLAN', 'AD', 'CO', 4, 4, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:48:02'),
(49, 'AGREGO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-15 16:49:15'),
(50, 'ELIMINO USUARIO', 107, 'LUPE', 'SANTILLAN', 'AD', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:51:16'),
(51, 'AGREGO USUARIO', 109, 'VNFOI', 'NCEIU', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-15 16:51:41'),
(52, 'ELIMINO USUARIO', 109, 'VNFOI', 'NCEIU', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-15 16:51:52'),
(53, 'AGREGO USUARIO', 110, 'VBEKJ', 'BCVKEJ', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-15 16:52:41'),
(54, 'ELIMINO USUARIO', 110, 'VBEKJ', 'BCVKEJ', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-18 09:42:42'),
(55, 'AGREGO USUARIO', 111, 'ROSA', 'SANTILLAN', 'CO', NULL, 4, NULL, 'enriquez.rosaicela@gmail.com', '2019-02-18 09:45:41'),
(56, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 15:02:09'),
(57, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 15:02:10'),
(58, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 15:13:48'),
(59, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 15:37:26'),
(60, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, '', '2019-02-21 16:06:32'),
(61, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 16:06:48'),
(62, 'MODIFICO USUARIO', 94, 'JOSE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 16:08:08'),
(63, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:17:33'),
(64, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:18:41'),
(65, 'MODIFICO USUARIO', 94, 'JOSU', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:19:22'),
(66, 'MODIFICO USUARIO', 94, 'JOSU', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:20:04'),
(67, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:20:18'),
(68, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:21:15'),
(69, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:21:24'),
(70, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:21:37'),
(71, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:31:39'),
(72, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:32:37'),
(73, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:35:02'),
(74, 'MODIFICO USUARIO', 94, 'JOSU', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:35:47'),
(75, 'MODIFICO USUARIO', 94, 'JOSU', 'MARN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-21 17:36:40'),
(76, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-22 12:43:35'),
(77, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-22 13:11:12'),
(78, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-22 13:11:43'),
(79, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-25 12:46:28'),
(80, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-25 12:52:04'),
(81, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-25 13:00:55'),
(82, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-25 13:03:08'),
(83, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-25 13:07:50'),
(84, 'AGREGO USUARIO', 112, 'ROSAICELA', 'OKI', 'SU', NULL, 1, NULL, 'admin@gmail.com', '2019-02-25 13:08:51'),
(85, 'ELIMINO USUARIO', 112, 'ROSAICELA', 'OKI', 'SU', NULL, 1, NULL, 'admin@gmail.com', '2019-02-25 13:09:59'),
(86, 'AGREGO USUARIO', 113, 'ROSAICELA', 'OKI', 'SU', NULL, 1, NULL, 'admin@gmail.com', '2019-02-25 13:10:41'),
(87, 'MODIFICO USUARIO', 113, 'ROSAICELA', 'OKI', 'SU', 'SU', 1, 1, 'admin@gmail.com', '2019-02-25 13:11:08'),
(88, 'MODIFICO USUARIO', 113, 'ROSAICELA', 'OKI', 'SU', 'SU', 1, 1, 'admin@gmail.com', '2019-02-25 13:11:50'),
(89, 'MODIFICO USUARIO', 113, 'ROSAICELA', 'OKI', 'AD', 'SU', 22, 1, 'admin@gmail.com', '2019-02-25 13:22:33'),
(90, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'AD', 22, 4, 'admin@gmail.com', '2019-02-25 13:32:25'),
(91, 'MODIFICO USUARIO', 111, 'ROSAICELA', 'SANTILLAN', 'AD', 'CO', 22, 4, 'admin@gmail.com', '2019-03-01 16:38:18'),
(92, 'ELIMINO USUARIO', 111, 'ROSAICELA', 'SANTILLAN', 'AD', NULL, 22, NULL, 'admin@gmail.com', '2019-03-01 16:38:35'),
(93, 'MODIFICO USUARIO', 113, 'ROSAICELA', 'OKI', 'AD', 'AD', 22, 22, 'admin@gmail.com', '2019-03-01 23:43:44'),
(94, 'MODIFICO USUARIO', 113, 'ROSAICELA', 'OKI', 'AD', 'AD', 22, 22, 'admin@gmail.com', '2019-03-01 23:43:44'),
(95, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-03-01 23:44:54'),
(96, 'MODIFICO USUARIO', 113, 'ROSAICELA', 'OKI', 'AD', 'AD', 22, 22, 'admin@gmail.com', '2019-03-01 23:45:20'),
(97, 'AGREGO USUARIO', 114, 'EVE', 'FERIA', 'AD', NULL, 32, NULL, 'admin@gmail.com', '2019-03-04 12:11:37'),
(98, 'AGREGO USUARIO', 115, 'JOSUE', 'MARIN', 'CO', NULL, 32, NULL, 'eve@gma.com', '2019-03-04 12:13:02'),
(99, 'ELIMINO USUARIO', 115, 'JOSUE', 'MARIN', 'CO', NULL, 32, NULL, 'eve@gma.com', '2019-03-05 00:44:20'),
(100, 'AGREGO USUARIO', 116, 'JOSUE', 'MARIN', 'SU', NULL, 1, NULL, 'admin@gmail.com', '2019-03-05 00:49:35'),
(101, 'ELIMINO USUARIO', 114, 'EVE', 'FERIA', 'AD', NULL, 32, NULL, 'admin@gmail.com', '2019-03-05 18:59:45'),
(102, 'ELIMINO USUARIO', 116, 'JOSUE', 'MARIN', 'SU', NULL, 1, NULL, 'admin@gmail.com', '2019-03-05 18:59:47'),
(103, 'AGREGO USUARIO', 117, 'EVE', 'PALOMAR', 'AD', NULL, 32, NULL, 'admin@gmail.com', '2019-03-06 14:28:27');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `b_equipos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `b_equipos` (
`idbitacora` int(11)
,`accion` varchar(17)
,`id_equipo` int(11)
,`nombre_host` varchar(50)
,`dns` varchar(15)
,`dns_viejo` varchar(15)
,`grupo` int(11)
,`nombre` varchar(45)
,`usuario` varchar(45)
,`fecha` datetime
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `b_grupoNuevo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `b_grupoNuevo` (
`accion` varchar(17)
,`id_usuario` int(11)
,`nombre` varchar(45)
,`apellidos` varchar(45)
,`rol_nuevo` varchar(2)
,`rol_viejo` varchar(2)
,`grupo_nuevo` int(11)
,`grupo_actual` varchar(45)
,`usuario` varchar(45)
,`fecha` datetime
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `b_grupos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `b_grupos` (
`id_usuario` int(11)
,`accion` varchar(17)
,`nombre` varchar(45)
,`apellidos` varchar(45)
,`rol_nuevo` varchar(2)
,`rol_viejo` varchar(2)
,`grupo_nuevo` int(11)
,`grupo_actual` varchar(45)
,`grupo_viejo` int(11)
,`grupo_anterior` varchar(45)
,`usuario` varchar(45)
,`fecha` datetime
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `b_grupoViejo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `b_grupoViejo` (
`accion` varchar(17)
,`id_usuario` int(11)
,`nombre` varchar(45)
,`apellidos` varchar(45)
,`rol_nuevo` varchar(2)
,`rol_viejo` varchar(2)
,`grupo_viejo` int(11)
,`grupo_anterior` varchar(45)
,`usuario` varchar(45)
,`fecha` datetime
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `idequipos` int(11) NOT NULL,
  `nombre_host` varchar(50) DEFAULT NULL,
  `dns` varchar(45) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fk_grupo` int(11) DEFAULT NULL,
  `iframe` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idequipos`, `nombre_host`, `dns`, `descripcion`, `fk_grupo`, `iframe`, `usuario`) VALUES
(51, '19233', '193.168.5.5', 'OLO', 32, '', 'admin@gmail.com'),
(52, 'hola', '195.165.123.123', '', 32, '<iframe src=\"https://materialdesignicons.com/\"></iframe>', 'admin@gmail.com'),
(55, 'lolita', '159.263.487', 'QWE', 33, '<iframe src=\"https://getbootstrap.com/docs/4.3/components/alerts/\"></iframe>', 'admin@gmail.com');

--
-- Disparadores `equipos`
--
DELIMITER $$
CREATE TRIGGER `equipo_delete` AFTER DELETE ON `equipos` FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'ELIMINO EQUIPO',old.idequipos,old.nombre_host,old.dns,null,old.fk_grupo,old.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `equipo_insert` AFTER INSERT ON `equipos` FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'AGREGO EQUIPO',new.idequipos,new.nombre_host,new.dns,null,new.fk_grupo,new.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `equipo_update` AFTER UPDATE ON `equipos` FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'MODIFICO EQUIPO',old.idequipos,new.nombre_host,new.dns,old.dns,new.fk_grupo,new.usuario,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  `iframe` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nombre`, `alias`, `rfc`, `iframe`, `descripcion`, `usuario`) VALUES
(1, 'TODOS', NULL, NULL, '', NULL, ''),
(32, 'UNIVERSIDAD INSURGENTES', 'UI', 'UI12345678', '<iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/48ea39b0-3ea0-11e9-bd59-613c5e6c8929?embed=true&_g=(refreshInterval:(pause:!f,value:5000),time:(from:now-15m,mode:quick,to:now))\" height=\"600\" width=\"800\"></iframe>', '', 'admin@gmail.com'),
(33, 'VILLA', 'CORTE', 'POI1624345QWE', '', '', 'admin@gmail.com');

--
-- Disparadores `grupo`
--
DELIMITER $$
CREATE TRIGGER `grupo_delete` AFTER DELETE ON `grupo` FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,rfc_nuevo,iframe,usuario,fecha)
VALUES
(null,'ELIMINO GRUPO',old.idgrupo,old.nombre,null,old.alias,old.rfc,old.iframe,old.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `grupo_insert` AFTER INSERT ON `grupo` FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,rfc_nuevo,usuario,fecha)
VALUES
(null,'AGREGO GRUPO',new.idgrupo,new.nombre,null,new.alias,new.rfc,new.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `grupo_update` AFTER UPDATE ON `grupo` FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,rfc_nuevo,iframe,usuario,fecha)
VALUES
(null,'MODIFICO GRUPO',old.idgrupo,new.nombre,old.nombre,new.alias,new.rfc,new.iframe,new.usuario,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `grupo_equipos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `grupo_equipos` (
`grupo` varchar(45)
,`idequipos` int(11)
,`nombre_host` varchar(50)
,`dns` varchar(45)
,`descripcion` varchar(255)
,`fk_grupo` int(11)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `nombre_grupo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `nombre_grupo` (
`fk_grupou` int(11)
,`idgrupo` int(11)
,`grupo` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Server`
--

CREATE TABLE `Server` (
  `IdIframe` int(11) NOT NULL,
  `Iframe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Server`
--

INSERT INTO `Server` (`IdIframe`, `Iframe`) VALUES
(4, '<iframe src=\"http://189.204.31.154:5601/app/kibana#/dashboard/48ea39b0-3ea0-11e9-bd59-613c5e6c8929?embed=true&_g=(refreshInterval%3A(pause%3A!f%2Cvalue%3A5000)%2Ctime%3A(from%3Anow-15m%2Cmode%3Aquick%2Cto%3Anow))\" height=\"600\" width=\"800\"></iframe>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tkns`
--

CREATE TABLE `tkns` (
  `id` int(11) NOT NULL,
  `tkn` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `fkusuarios` int(11) DEFAULT NULL,
  `typetkn` varchar(64) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tkns`
--

INSERT INTO `tkns` (`id`, `tkn`, `fkusuarios`, `typetkn`, `status`) VALUES
(26, 'o4Kg360pgaSiyaPxRkG0liIyqIcu9sBwcDewLs0gCSPexQXc0gqZLgHqHOcZq9nt', 117, 'VF', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL,
  `fk_grupou` int(11) DEFAULT NULL,
  `user_session` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellidos`, `telefono`, `usuario`, `pass`, `tipo_usuario`, `fk_grupou`, `user_session`) VALUES
(1, 'JOSUE', 'MARIN ROMERO', '5587125364', 'admin@gmail.com', 'ad0d15b3e9b9c209962391db3cdae0fa', 'SU', 1, ''),
(117, 'EVE', 'PALOMAR', '5512345678', 'eve@gma.com', 'bfdd8321feb5a8583516a3d82473db9f', 'AD', 32, 'admin@gmail.com');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuario_delete` AFTER DELETE ON `usuarios` FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ELIMINO USUARIO',old.idusuarios,old.nombre,old.apellidos,old.tipo_usuario,null,old.fk_grupou,null,old.user_session,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuario_insert` AFTER INSERT ON `usuarios` FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO USUARIO',new.idusuarios,new.nombre,new.apellidos,new.tipo_usuario,null,new.fk_grupou,null,new.user_session,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuario_update` AFTER UPDATE ON `usuarios` FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'MODIFICO USUARIO',old.idusuarios,new.nombre,new.apellidos,new.tipo_usuario,old.tipo_usuario,new.fk_grupou,old.fk_grupou,new.user_session,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_grupo`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `usuarios_grupo` (
`idusuarios` int(11)
,`fk_grupou` int(11)
,`idgrupo` int(11)
,`nombre` varchar(45)
,`apellidos` varchar(45)
,`usuario` varchar(50)
,`telefono` varchar(10)
,`tipo_usuario` varchar(2)
,`grupo` varchar(45)
,`iframe` varchar(250)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `b_equipos`
--
DROP TABLE IF EXISTS `b_equipos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_equipos`  AS  select `bitacora_equipo`.`idbitacora` AS `idbitacora`,`bitacora_equipo`.`accion` AS `accion`,`bitacora_equipo`.`id_equipo` AS `id_equipo`,`bitacora_equipo`.`nombre_host` AS `nombre_host`,`bitacora_equipo`.`dns` AS `dns`,`bitacora_equipo`.`dns_viejo` AS `dns_viejo`,`bitacora_equipo`.`grupo` AS `grupo`,`grupo`.`nombre` AS `nombre`,`bitacora_equipo`.`usuario` AS `usuario`,`bitacora_equipo`.`fecha` AS `fecha` from (`bitacora_equipo` join `grupo` on((`bitacora_equipo`.`grupo` = `grupo`.`idgrupo`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `b_grupoNuevo`
--
DROP TABLE IF EXISTS `b_grupoNuevo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupoNuevo`  AS  select `bitacora_usuario`.`accion` AS `accion`,`bitacora_usuario`.`id_usuario` AS `id_usuario`,`bitacora_usuario`.`nombre` AS `nombre`,`bitacora_usuario`.`apellidos` AS `apellidos`,`bitacora_usuario`.`rol_nuevo` AS `rol_nuevo`,`bitacora_usuario`.`rol_viejo` AS `rol_viejo`,`bitacora_usuario`.`grupo_nuevo` AS `grupo_nuevo`,`grupo`.`nombre` AS `grupo_actual`,`bitacora_usuario`.`usuario` AS `usuario`,`bitacora_usuario`.`fecha` AS `fecha` from (`bitacora_usuario` join `grupo`) where (`bitacora_usuario`.`grupo_nuevo` = `grupo`.`idgrupo`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `b_grupos`
--
DROP TABLE IF EXISTS `b_grupos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupos`  AS  select distinct `b_grupoNuevo`.`id_usuario` AS `id_usuario`,`b_grupoNuevo`.`accion` AS `accion`,`b_grupoNuevo`.`nombre` AS `nombre`,`b_grupoNuevo`.`apellidos` AS `apellidos`,`b_grupoNuevo`.`rol_nuevo` AS `rol_nuevo`,`b_grupoNuevo`.`rol_viejo` AS `rol_viejo`,`b_grupoNuevo`.`grupo_nuevo` AS `grupo_nuevo`,`b_grupoNuevo`.`grupo_actual` AS `grupo_actual`,`b_grupoViejo`.`grupo_viejo` AS `grupo_viejo`,`b_grupoViejo`.`grupo_anterior` AS `grupo_anterior`,`b_grupoNuevo`.`usuario` AS `usuario`,`b_grupoNuevo`.`fecha` AS `fecha` from (`b_grupoNuevo` join `b_grupoViejo`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `b_grupoViejo`
--
DROP TABLE IF EXISTS `b_grupoViejo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupoViejo`  AS  select `bitacora_usuario`.`accion` AS `accion`,`bitacora_usuario`.`id_usuario` AS `id_usuario`,`bitacora_usuario`.`nombre` AS `nombre`,`bitacora_usuario`.`apellidos` AS `apellidos`,`bitacora_usuario`.`rol_nuevo` AS `rol_nuevo`,`bitacora_usuario`.`rol_viejo` AS `rol_viejo`,`bitacora_usuario`.`grupo_viejo` AS `grupo_viejo`,`grupo`.`nombre` AS `grupo_anterior`,`bitacora_usuario`.`usuario` AS `usuario`,`bitacora_usuario`.`fecha` AS `fecha` from (`bitacora_usuario` join `grupo`) where (`bitacora_usuario`.`grupo_viejo` = `grupo`.`idgrupo`) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `grupo_equipos`
--
DROP TABLE IF EXISTS `grupo_equipos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `grupo_equipos`  AS  select `grupo`.`nombre` AS `grupo`,`equipos`.`idequipos` AS `idequipos`,`equipos`.`nombre_host` AS `nombre_host`,`equipos`.`dns` AS `dns`,`equipos`.`descripcion` AS `descripcion`,`equipos`.`fk_grupo` AS `fk_grupo` from (`grupo` join `equipos` on((`grupo`.`idgrupo` = `equipos`.`fk_grupo`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `nombre_grupo`
--
DROP TABLE IF EXISTS `nombre_grupo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nombre_grupo`  AS  select `usuarios`.`fk_grupou` AS `fk_grupou`,`grupo`.`idgrupo` AS `idgrupo`,`grupo`.`nombre` AS `grupo` from (`usuarios` join `grupo` on((`usuarios`.`fk_grupou` = `grupo`.`idgrupo`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_grupo`
--
DROP TABLE IF EXISTS `usuarios_grupo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_grupo`  AS  select `usuarios`.`idusuarios` AS `idusuarios`,`usuarios`.`fk_grupou` AS `fk_grupou`,`grupo`.`idgrupo` AS `idgrupo`,`usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`usuario` AS `usuario`,`usuarios`.`telefono` AS `telefono`,`usuarios`.`tipo_usuario` AS `tipo_usuario`,`grupo`.`nombre` AS `grupo`,`grupo`.`iframe` AS `iframe` from (`usuarios` join `grupo` on((`usuarios`.`fk_grupou` = `grupo`.`idgrupo`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora_equipo`
--
ALTER TABLE `bitacora_equipo`
  ADD PRIMARY KEY (`idbitacora`);

--
-- Indices de la tabla `bitacora_grupo`
--
ALTER TABLE `bitacora_grupo`
  ADD PRIMARY KEY (`idbitacora`);

--
-- Indices de la tabla `bitacora_usuario`
--
ALTER TABLE `bitacora_usuario`
  ADD PRIMARY KEY (`idbitacora`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idequipos`),
  ADD KEY `fk_grupo` (`fk_grupo`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idgrupo`);

--
-- Indices de la tabla `Server`
--
ALTER TABLE `Server`
  ADD PRIMARY KEY (`IdIframe`);

--
-- Indices de la tabla `tkns`
--
ALTER TABLE `tkns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkusuarios` (`fkusuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`),
  ADD KEY `fk_grupou` (`fk_grupou`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora_equipo`
--
ALTER TABLE `bitacora_equipo`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `bitacora_grupo`
--
ALTER TABLE `bitacora_grupo`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `bitacora_usuario`
--
ALTER TABLE `bitacora_usuario`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idequipos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `Server`
--
ALTER TABLE `Server`
  MODIFY `IdIframe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tkns`
--
ALTER TABLE `tkns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `fk_grupo` FOREIGN KEY (`fk_grupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tkns`
--
ALTER TABLE `tkns`
  ADD CONSTRAINT `fkusuarios` FOREIGN KEY (`fkusuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_grupou` FOREIGN KEY (`fk_grupou`) REFERENCES `grupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
