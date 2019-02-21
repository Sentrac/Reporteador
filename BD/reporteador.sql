-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-02-2019 a las 23:27:49
-- Versión del servidor: 5.6.43
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `bitacora_equipo` (
  `idbitacora` int(11) NOT NULL,
  `accion` varchar(17) DEFAULT NULL,
  `id_equipo` int(11) DEFAULT NULL,
  `nombre_host` varchar(50) DEFAULT NULL,
  `dns` varchar(15) DEFAULT NULL,
  `dns_viejo` varchar(15) DEFAULT NULL,
  `grupo` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
(16, 'MODIFICO EQUIPO', 37, 'warriors.local', '192.168.5.11', '192.168.5.11', 4, 'admin@gmail.com', '2019-02-19 17:31:51'),
(17, 'MODIFICO EQUIPO', 37, 'warriors.localbgou', '192.168.5.11', '192.168.5.11', 4, 'admin@gmail.com', '2019-02-19 17:32:17'),
(18, 'MODIFICO EQUIPO', 37, 'warriors.localbgou', '192.168.5.11', '192.168.5.11', 4, 'admin@gmail.com', '2019-02-19 17:57:46'),
(19, 'ELIMINO EQUIPO', 49, 'asdfghjklñ', 'sdcfghjkl', NULL, 4, 'enriquez.rosaicela@gmail.com', '2019-02-19 17:57:55'),
(20, 'AGREGO EQUIPO', 50, 'hola', 'cniu', NULL, 4, 'admin@gmail.com', '2019-02-19 17:58:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_grupo`
--

CREATE TABLE IF NOT EXISTS `bitacora_grupo` (
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_grupo`
--

INSERT INTO `bitacora_grupo` (`idbitacora`, `accion`, `id_grupo`, `nombre_nuevo`, `nombre_viejo`, `alias_nuevo`, `rfc_nuevo`, `iframe`, `usuario`, `fecha`) VALUES
(6, 'ELIMINO GRUPO', 19, 'HELLO', NULL, 'JEJE', 'POI1624345QWE', '<iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"></iframe>', 'admin@gmail.com', '2019-02-08 15:51:36'),
(7, 'ELIMINO GRUPO', 16, 'GREGE', NULL, 'FREG', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-10 16:08:35'),
(8, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTESS', 'UNIVERSIDAD INSURGENTES', 'INSURGENTES', 'POI1624345QSE', '<iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"></iframe>', 'admin@gmail.com', '2019-02-10 16:13:58'),
(9, 'AGREGO GRUPO', 28, 'FNRKFN', NULL, 'NFK', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-11 14:26:36'),
(10, 'AGREGO GRUPO', 29, 'NOW', NULL, 'NVE', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-11 19:20:11'),
(11, 'AGREGO GRUPO', 30, 'VNEJN', NULL, 'VBIE', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-11 19:21:30'),
(12, 'AGREGO GRUPO', 31, 'AASDF', NULL, 'ASD', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-13 17:15:56'),
(13, 'ELIMINO GRUPO', 31, 'AASDF', NULL, 'ASD', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-13 17:16:18'),
(14, 'AGREGO GRUPO', 31, 'NVADPIP', NULL, 'WIHO', 'POI1624345QWE', '', 'admin@gmail.com', '2019-02-14 11:08:37'),
(15, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTES', 'UNIVERSIDAD INSURGENTESS', 'INSURGENTES', 'POI1624345QSE', '&lt;iframe src="http://192.168.2.44:5601/app/kibana#/dashboard/a428b970-d620-11e8-a693-d78fb81e1fa0?embed=true&_g=(refreshInterval:(pause:!t,value:0),time:(from:now-2y,mode:quick,to:now))" height="600" width="800"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-02-18 14:34:58'),
(16, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTESS', 'UNIVERSIDAD INSURGENTES', 'INSURGENTES', 'POI1624345QSE', '&lt;iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=(refreshInterval:(pause:!t,value:0),time:(from:now-60d,mode:quick,to:now))" height="600" width="800"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-02-18 14:36:46'),
(17, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTESS', 'UNIVERSIDAD INSURGENTESS', 'INSURGENTES', 'POI1624345QSE', '<iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"></iframe>', 'admin@gmail.com', '2019-02-19 15:15:53'),
(18, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTESS', 'UNIVERSIDAD INSURGENTESS', 'INSURGENTES', 'POI1624345QSE', '&lt;iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"&gt;&lt;/iframe&gt;', 'admin@gmail.com', '2019-02-20 13:27:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_usuario`
--

CREATE TABLE IF NOT EXISTS `bitacora_usuario` (
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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

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
(11, 'AGREGO USUARIO', 100, '''HIUHI''', '''CBIDBI''', '''A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:46:29'),
(12, 'ELIMINO USUARIO', 100, '''HIUHI''', '''CBIDBI''', '''A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:46:30'),
(13, 'AGREGO USUARIO', 101, '''AAA''', '''BBBB''', '''A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:47:22'),
(14, 'ELIMINO USUARIO', 101, '''AAA''', '''BBBB''', '''A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:47:22'),
(15, 'AGREGO USUARIO', 102, '''BRKJB''', '''VKJK''', '''C', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:48:07'),
(16, 'ELIMINO USUARIO', 102, '''BRKJB''', '''VKJK''', '''C', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:48:07'),
(17, 'AGREGO USUARIO', 103, '''AAAA''', '''BBBB''', '''A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-11 18:49:26'),
(18, 'ELIMINO USUARIO', 95, 'ROSA', 'ENRIQUEZ', 'CO', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 14:34:33'),
(19, 'ELIMINO USUARIO', 103, '''AAAA''', '''BBBB''', '''A', NULL, 4, NULL, 'admin@gmail.com', '2019-02-13 15:34:21'),
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
(56, 'MODIFICO USUARIO', 111, 'ROSA', 'SANTILLAN', 'AD', 'CO', 4, 4, 'admin@gmail.com', '2019-02-19 14:54:02'),
(57, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'CO', 'AD', 4, 4, 'admin@gmail.com', '2019-02-19 14:54:12'),
(58, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'AD', 'CO', 4, 4, 'admin@gmail.com', '2019-02-19 15:03:06'),
(59, 'MODIFICO USUARIO', 108, 'ROSA', 'ENRIQUEZ', 'CO', 'AD', 4, 4, 'admin@gmail.com', '2019-02-19 16:25:14'),
(60, 'MODIFICO USUARIO', 111, 'ROSA', 'SANTILLAN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-20 11:08:10'),
(61, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-20 11:14:04'),
(62, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-20 11:15:43'),
(63, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, '', '2019-02-20 11:39:22'),
(64, 'MODIFICO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', 'AD', 4, 4, 'admin@gmail.com', '2019-02-20 11:40:41'),
(65, 'ELIMINO USUARIO', 94, 'JOSUE', 'MARIN', 'AD', NULL, 4, NULL, 'admin@gmail.com', '2019-02-20 12:38:02');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `b_equipos`
--
CREATE TABLE IF NOT EXISTS `b_equipos` (
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
--
CREATE TABLE IF NOT EXISTS `b_grupoNuevo` (
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
--
CREATE TABLE IF NOT EXISTS `b_grupos` (
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
--
CREATE TABLE IF NOT EXISTS `b_grupoViejo` (
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

CREATE TABLE IF NOT EXISTS `equipos` (
  `idequipos` int(11) NOT NULL,
  `nombre_host` varchar(50) DEFAULT NULL,
  `dns` varchar(45) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fk_grupo` int(11) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idequipos`, `nombre_host`, `dns`, `descripcion`, `fk_grupo`, `usuario`) VALUES
(37, 'warriors.localbgou', '192.168.5.11', 'BGOUGO', 4, 'admin@gmail.com'),
(38, 'warriors.localdomain', '192.168.2.38', '', 4, ''),
(39, 'warriors.localdomain', '192.168.2.142', '', 4, ''),
(40, 'warriors.localdomain3', '192.168.2.62', '', 4, 'ariel@gmail.com'),
(41, 'warriors.localdomain', '192.168.2.61', '', 4, ''),
(42, 'asd', 'wreporter.warri', '', 4, 'admin@gmail.com'),
(43, 'bjbj', 'fuyf.com', '', 4, 'enriquez.rosaicela@gmail.com'),
(44, 'vbhouho', 'bvue', '', 4, 'enriquez.rosaicela@gmail.com'),
(45, 'hola', 'giu', '', 4, 'enriquez.rosaicela@gmail.com'),
(46, 'final', 'fiu', '', 4, 'enriquez.rosaicela@gmail.com'),
(47, 'vkjug', 'bglio', '', 4, 'enriquez.rosaicela@gmail.com'),
(48, 'viygfyfu', 'gougo', '', 4, 'enriquez.rosaicela@gmail.com'),
(50, 'hola', 'cniu', 'NFE', 4, 'admin@gmail.com');

--
-- Disparadores `equipos`
--
DELIMITER $$
CREATE TRIGGER `equipo_delete` AFTER DELETE ON `equipos`
 FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'ELIMINO EQUIPO',old.idequipos,old.nombre_host,old.dns,null,old.fk_grupo,old.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `equipo_insert` AFTER INSERT ON `equipos`
 FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'AGREGO EQUIPO',new.idequipos,new.nombre_host,new.dns,null,new.fk_grupo,new.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `equipo_update` AFTER UPDATE ON `equipos`
 FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'MODIFICO EQUIPO',old.idequipos,new.nombre_host,new.dns,old.dns,new.fk_grupo,new.usuario,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
  `idgrupo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  `iframe` varchar(250) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nombre`, `alias`, `rfc`, `iframe`, `descripcion`, `usuario`) VALUES
(1, 'TODOS', NULL, NULL, '', NULL, ''),
(4, 'UNIVERSIDAD INSURGENTESS', 'INSURGENTES', 'POI1624345QSE', '&lt;iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"&gt;&lt;/iframe&gt;', '', 'admin@gmail.com'),
(22, 'VIYGI', 'IYG', 'POI1624345QWE', '', '', 'admin@gmail.com'),
(28, 'FNRKFN', 'NFK', 'POI1624345QWE', '', '', 'admin@gmail.com'),
(29, 'NOW', 'NVE', 'POI1624345QWE', '', '[REMOVED]ALERT&#40;''HOLA''&#41;[REMOVED]', 'admin@gmail.com'),
(30, 'VNEJN', 'VBIE', 'POI1624345QWE', '', '<SCRIPT>ALERT(''HOLA'');<SCRIPT>', 'admin@gmail.com'),
(31, 'NVADPIP', 'WIHO', 'POI1624345QWE', '', '', 'admin@gmail.com');

--
-- Disparadores `grupo`
--
DELIMITER $$
CREATE TRIGGER `grupo_delete` AFTER DELETE ON `grupo`
 FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,rfc_nuevo,iframe,usuario,fecha)
VALUES
(null,'ELIMINO GRUPO',old.idgrupo,old.nombre,null,old.alias,old.rfc,old.iframe,old.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `grupo_insert` AFTER INSERT ON `grupo`
 FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,rfc_nuevo,usuario,fecha)
VALUES
(null,'AGREGO GRUPO',new.idgrupo,new.nombre,null,new.alias,new.rfc,new.usuario,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `grupo_update` AFTER UPDATE ON `grupo`
 FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,rfc_nuevo,iframe,usuario,fecha)
VALUES
(null,'MODIFICO GRUPO',old.idgrupo,new.nombre,old.nombre,new.alias,new.rfc,new.iframe,new.usuario,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `grupo_equipos`
--
CREATE TABLE IF NOT EXISTS `grupo_equipos` (
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
--
CREATE TABLE IF NOT EXISTS `nombre_grupo` (
`fk_grupou` int(11)
,`idgrupo` int(11)
,`grupo` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tkns`
--

CREATE TABLE IF NOT EXISTS `tkns` (
  `id` int(11) NOT NULL,
  `tkn` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fkusuarios` int(11) DEFAULT NULL,
  `typetkn` varchar(64) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tkns`
--

INSERT INTO `tkns` (`id`, `tkn`, `fkusuarios`, `typetkn`, `status`) VALUES
(4, 'cIAJjAMVk5uqgoabmD4M1TueqyPScxm39DdgiWpQpJEv6eu53iz1cUOI6UtymbGH', 108, 'VF', 0),
(5, '6yOHD0LEo0vqjs4stSCEqCKx7z4b4OuKwARUx8TMK8C7pM5duRLS2Ub5KOc28FYp', 111, 'VF', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL,
  `fk_grupou` int(11) DEFAULT NULL,
  `user_session` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellidos`, `telefono`, `usuario`, `pass`, `tipo_usuario`, `fk_grupou`, `user_session`) VALUES
(1, 'JOSUE', 'MARIN ROMERO', '5587125364', 'admin@gmail.com', 'ad0d15b3e9b9c209962391db3cdae0fa', 'SU', 1, ''),
(108, 'ROSA', 'ENRIQUEZ', '5537678608', 'enriquez.rosaicela@gmail.com', '004525f722f2d7fb247259f562965cf6', 'CO', 4, 'admin@gmail.com'),
(111, 'ROSA', 'SANTILLAN', '5534567231', 'sentrack32@gmail.com', '004525f722f2d7fb247259f562965cf6', 'AD', 4, 'admin@gmail.com');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuario_delete` AFTER DELETE ON `usuarios`
 FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ELIMINO USUARIO',old.idusuarios,old.nombre,old.apellidos,old.tipo_usuario,null,old.fk_grupou,null,old.user_session,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuario_insert` AFTER INSERT ON `usuarios`
 FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO USUARIO',new.idusuarios,new.nombre,new.apellidos,new.tipo_usuario,null,new.fk_grupou,null,new.user_session,now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuario_update` AFTER UPDATE ON `usuarios`
 FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'MODIFICO USUARIO',old.idusuarios,new.nombre,new.apellidos,new.tipo_usuario,old.tipo_usuario,new.fk_grupou,old.fk_grupou,new.user_session,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `usuarios_grupo`
--
CREATE TABLE IF NOT EXISTS `usuarios_grupo` (
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_equipos` AS (select `bitacora_equipo`.`idbitacora` AS `idbitacora`,`bitacora_equipo`.`accion` AS `accion`,`bitacora_equipo`.`id_equipo` AS `id_equipo`,`bitacora_equipo`.`nombre_host` AS `nombre_host`,`bitacora_equipo`.`dns` AS `dns`,`bitacora_equipo`.`dns_viejo` AS `dns_viejo`,`bitacora_equipo`.`grupo` AS `grupo`,`grupo`.`nombre` AS `nombre`,`bitacora_equipo`.`usuario` AS `usuario`,`bitacora_equipo`.`fecha` AS `fecha` from (`bitacora_equipo` join `grupo` on((`bitacora_equipo`.`grupo` = `grupo`.`idgrupo`))));

-- --------------------------------------------------------

--
-- Estructura para la vista `b_grupoNuevo`
--
DROP TABLE IF EXISTS `b_grupoNuevo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupoNuevo` AS (select `bitacora_usuario`.`accion` AS `accion`,`bitacora_usuario`.`id_usuario` AS `id_usuario`,`bitacora_usuario`.`nombre` AS `nombre`,`bitacora_usuario`.`apellidos` AS `apellidos`,`bitacora_usuario`.`rol_nuevo` AS `rol_nuevo`,`bitacora_usuario`.`rol_viejo` AS `rol_viejo`,`bitacora_usuario`.`grupo_nuevo` AS `grupo_nuevo`,`grupo`.`nombre` AS `grupo_actual`,`bitacora_usuario`.`usuario` AS `usuario`,`bitacora_usuario`.`fecha` AS `fecha` from (`bitacora_usuario` join `grupo`) where (`bitacora_usuario`.`grupo_nuevo` = `grupo`.`idgrupo`));

-- --------------------------------------------------------

--
-- Estructura para la vista `b_grupos`
--
DROP TABLE IF EXISTS `b_grupos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupos` AS (select distinct `b_grupoNuevo`.`id_usuario` AS `id_usuario`,`b_grupoNuevo`.`accion` AS `accion`,`b_grupoNuevo`.`nombre` AS `nombre`,`b_grupoNuevo`.`apellidos` AS `apellidos`,`b_grupoNuevo`.`rol_nuevo` AS `rol_nuevo`,`b_grupoNuevo`.`rol_viejo` AS `rol_viejo`,`b_grupoNuevo`.`grupo_nuevo` AS `grupo_nuevo`,`b_grupoNuevo`.`grupo_actual` AS `grupo_actual`,`b_grupoViejo`.`grupo_viejo` AS `grupo_viejo`,`b_grupoViejo`.`grupo_anterior` AS `grupo_anterior`,`b_grupoNuevo`.`usuario` AS `usuario`,`b_grupoNuevo`.`fecha` AS `fecha` from (`b_grupoNuevo` join `b_grupoViejo`));

-- --------------------------------------------------------

--
-- Estructura para la vista `b_grupoViejo`
--
DROP TABLE IF EXISTS `b_grupoViejo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupoViejo` AS (select `bitacora_usuario`.`accion` AS `accion`,`bitacora_usuario`.`id_usuario` AS `id_usuario`,`bitacora_usuario`.`nombre` AS `nombre`,`bitacora_usuario`.`apellidos` AS `apellidos`,`bitacora_usuario`.`rol_nuevo` AS `rol_nuevo`,`bitacora_usuario`.`rol_viejo` AS `rol_viejo`,`bitacora_usuario`.`grupo_viejo` AS `grupo_viejo`,`grupo`.`nombre` AS `grupo_anterior`,`bitacora_usuario`.`usuario` AS `usuario`,`bitacora_usuario`.`fecha` AS `fecha` from (`bitacora_usuario` join `grupo`) where (`bitacora_usuario`.`grupo_viejo` = `grupo`.`idgrupo`));

-- --------------------------------------------------------

--
-- Estructura para la vista `grupo_equipos`
--
DROP TABLE IF EXISTS `grupo_equipos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `grupo_equipos` AS (select `grupo`.`nombre` AS `grupo`,`equipos`.`idequipos` AS `idequipos`,`equipos`.`nombre_host` AS `nombre_host`,`equipos`.`dns` AS `dns`,`equipos`.`descripcion` AS `descripcion`,`equipos`.`fk_grupo` AS `fk_grupo` from (`grupo` join `equipos` on((`grupo`.`idgrupo` = `equipos`.`fk_grupo`))));

-- --------------------------------------------------------

--
-- Estructura para la vista `nombre_grupo`
--
DROP TABLE IF EXISTS `nombre_grupo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nombre_grupo` AS (select `usuarios`.`fk_grupou` AS `fk_grupou`,`grupo`.`idgrupo` AS `idgrupo`,`grupo`.`nombre` AS `grupo` from (`usuarios` join `grupo` on((`usuarios`.`fk_grupou` = `grupo`.`idgrupo`))));

-- --------------------------------------------------------

--
-- Estructura para la vista `usuarios_grupo`
--
DROP TABLE IF EXISTS `usuarios_grupo`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_grupo` AS (select `usuarios`.`idusuarios` AS `idusuarios`,`usuarios`.`fk_grupou` AS `fk_grupou`,`grupo`.`idgrupo` AS `idgrupo`,`usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`usuario` AS `usuario`,`usuarios`.`telefono` AS `telefono`,`usuarios`.`tipo_usuario` AS `tipo_usuario`,`grupo`.`nombre` AS `grupo`,`grupo`.`iframe` AS `iframe` from (`usuarios` join `grupo` on((`usuarios`.`fk_grupou` = `grupo`.`idgrupo`))));

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
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `bitacora_grupo`
--
ALTER TABLE `bitacora_grupo`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `bitacora_usuario`
--
ALTER TABLE `bitacora_usuario`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idequipos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `tkns`
--
ALTER TABLE `tkns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=112;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
