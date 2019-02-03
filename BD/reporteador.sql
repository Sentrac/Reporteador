-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2019 a las 03:42:21
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
  `nombre_host_nuevo` varchar(50) DEFAULT NULL,
  `nombre_host_viejo` varchar(50) DEFAULT NULL,
  `dns_nuevo` varchar(15) DEFAULT NULL,
  `dns_viejo` varchar(15) DEFAULT NULL,
  `descripcion_nuevo` varchar(255) DEFAULT NULL,
  `descripcion_viejo` varchar(255) DEFAULT NULL,
  `grupo_nuevo` int(11) DEFAULT NULL,
  `grupo_viejo` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_equipo`
--

INSERT INTO `bitacora_equipo` (`idbitacora`, `accion`, `id_equipo`, `nombre_host_nuevo`, `nombre_host_viejo`, `dns_nuevo`, `dns_viejo`, `descripcion_nuevo`, `descripcion_viejo`, `grupo_nuevo`, `grupo_viejo`, `usuario`, `fecha`) VALUES
(1, 'AGREGO EQUIPO', 28, 'grght.com', NULL, '192.168.0.40', NULL, '', NULL, 3, NULL, 'root@localhost', '2019-01-20 19:32:14'),
(2, 'AGREGO EQUIPO', 28, 'apple.com', 'grght.com', '192.168.2.14', '192.168.0.40', 'SLOW COMPUTER', '', 3, 3, 'root@localhost', '2019-01-20 19:32:57'),
(3, 'AGREGO EQUIPO', 13, 'localdomain12.com', 'localdomain12.com', '192.122.0.2', '192.122.0.2', 'UBUNTU', 'UBUNTU', 4, 4, 'root@localhost', '2019-01-20 19:39:39'),
(4, 'AGREGO EQUIPO', 26, 'warriors.com', 'warriors.com', '192.168.0.44', '192.168.0.44', '', '', 7, 7, 'root@localhost', '2019-01-20 19:40:03'),
(5, 'AGREGO EQUIPO', 26, 'warriors.com', 'warriors.com', '192.168.0.44', '192.168.0.44', '', '', 7, 7, 'root@localhost', '2019-01-20 19:40:26'),
(6, 'AGREGO EQUIPO', 26, 'warriors.com', 'warriors.com', '192.168.0.44', '192.168.0.44', '', '', 7, 7, 'root@localhost', '2019-01-20 19:42:26'),
(7, 'AGREGO EQUIPO', 29, 'ggwr', NULL, '192.168.0.44', NULL, '', NULL, 5, NULL, 'root@localhost', '2019-01-20 19:44:46'),
(8, 'AGREGO EQUIPO', 13, 'localdomain12.com', 'localdomain12.com', '192.122.0.2', '192.122.0.2', 'UBUNTU', 'UBUNTU', 4, 4, 'root@localhost', '2019-01-20 19:47:35'),
(9, 'AGREGO EQUIPO', 13, 'localdomain12.com', 'localdomain12.com', '192.122.0.2', '192.122.0.2', 'UBUNTU', 'UBUNTU', 4, 4, 'root@localhost', '2019-01-20 19:49:38'),
(10, 'AGREGO EQUIPO', 13, 'localdomain12.com', 'localdomain12.com', '192.122.0.2', '192.122.0.2', 'UBUNTU', 'UBUNTU', 4, 4, 'root@localhost', '2019-01-20 19:53:05'),
(11, 'AGREGO EQUIPO', 7, 'localdomain.com', 'localdomain.com', '192.168.2.11', '192.168.2.11', 'LINUX MINT', 'LINUX MINT', 4, 4, 'root@localhost', '2019-01-20 19:58:16'),
(12, 'AGREGO EQUIPO', 7, 'localdomain.com', 'localdomain.com', '192.168.2.11', '192.168.2.11', 'LINUX MINT', 'LINUX MINT', 4, 4, 'root@localhost', '2019-01-20 20:02:00'),
(13, 'AGREGO EQUIPO', 28, 'apple.com', 'apple.com', '192.168.2.14', '192.168.2.14', 'SLOW COMPUTER', 'SLOW COMPUTER', 3, 3, 'root@localhost', '2019-01-20 20:10:37'),
(14, 'AGREGO EQUIPO', 5, 'warriors12.com', 'warriors12.com', '192.168.0.44', '192.168.0.44', '', '', 3, 3, 'root@localhost', '2019-01-21 10:59:22'),
(15, 'AGREGO EQUIPO', 5, 'warriors12.com', 'warriors12.com', '192.168.0.44', '192.168.0.44', '', '', 3, 3, 'root@localhost', '2019-01-21 11:24:09'),
(16, 'AGREGO EQUIPO', 5, 'warriors12.com', 'warriors12.com', '192.168.0.44', '192.168.0.44', '', '', 3, 3, 'root@localhost', '2019-01-21 11:27:17'),
(17, 'AGREGO EQUIPO', 5, 'warriors12.com', 'warriors12.com', '192.168.0.44', '192.168.0.44', '', '', 3, 3, 'root@localhost', '2019-01-21 11:27:55'),
(18, 'AGREGO EQUIPO', 30, 'localdomain.com', NULL, '192.168.0.40', NULL, 'SDFGHJK', NULL, 14, NULL, 'root@localhost', '2019-01-21 13:20:31'),
(19, 'AGREGO EQUIPO', 30, 'ewf.com', 'localdomain.com', '192.168.0.40', '192.168.0.40', 'SDFGHJK', 'SDFGHJK', 14, 14, 'root@localhost', '2019-01-21 13:23:18'),
(20, 'ELIMINO EQUIPO', 30, 'ewf.com', NULL, '192.168.0.40', NULL, 'SDFGHJK', NULL, 14, NULL, 'root@localhost', '2019-01-21 13:46:31'),
(21, 'AGREGO EQUIPO', 31, 'dfgh', NULL, '192.168.0.44', NULL, '', NULL, 5, NULL, 'root@localhost', '2019-01-21 13:56:12'),
(22, 'AGREGO EQUIPO', 31, 'dfghgrgtht', 'dfgh', '192.168.0.44', '192.168.0.44', '', '', 5, 5, 'root@localhost', '2019-01-21 13:56:24'),
(23, 'ELIMINO EQUIPO', 31, 'dfghgrgtht', NULL, '192.168.0.44', NULL, '', NULL, 5, NULL, 'root@localhost', '2019-01-21 13:56:32'),
(24, 'ELIMINO EQUIPO', 29, 'ggwr', NULL, '192.168.0.44', NULL, '', NULL, 5, NULL, 'root@localhost', '2019-01-21 13:56:40'),
(25, 'ELIMINO EQUIPO', 26, 'warriors.com', NULL, '192.168.0.44', NULL, '', NULL, 7, NULL, 'root@localhost', '2019-01-21 18:26:27'),
(26, 'AGREGO EQUIPO', 5, 'warriors12.com', 'warriors12.com', '192.168.0.44', '192.168.0.44', '', '', 3, 3, 'root@localhost', '2019-01-21 19:19:06'),
(27, 'AGREGO EQUIPO', 32, 'ssgmjh,', NULL, '192.168.0.44', NULL, '', NULL, 3, NULL, 'root@localhost', '2019-01-21 19:19:33'),
(28, 'AGREGO EQUIPO', 5, 'warriwe.localdomain', 'warriors12.com', '192.168.0.44', '192.168.0.44', '', '', 3, 3, 'root@localhost', '2019-01-22 09:25:07'),
(29, 'AGREGO EQUIPO', 33, 'localdomain.com', NULL, '192.122.1.23', NULL, '', NULL, 16, NULL, 'root@localhost', '2019-01-22 18:19:02'),
(30, 'ELIMINO EQUIPO', 20, 'warriors.com', NULL, '192.122.0.2', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-01-22 18:22:18'),
(31, 'ELIMINO EQUIPO', 7, 'localdomain.com', NULL, '192.168.2.11', NULL, 'LINUX MINT', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:14:04'),
(32, 'ELIMINO EQUIPO', 13, 'localdomain12.com', NULL, '192.122.0.2', NULL, 'UBUNTU', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:14:07'),
(33, 'ELIMINO EQUIPO', 14, 'localdomain12.com', NULL, '192.122.0.2', NULL, 'UBUNTU', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:14:09'),
(34, 'ELIMINO EQUIPO', 15, 'local.com', NULL, '192.122.0.2', NULL, 'UBUNTU', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:14:11'),
(35, 'ELIMINO EQUIPO', 16, 'plamesi.com', NULL, '192.122.3.44', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:14:14'),
(36, 'AGREGO EQUIPO', 34, 'warriors.localdomain', NULL, '192.168.2.44', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:14:58'),
(37, 'AGREGO EQUIPO', 35, 'warriors.localdomain', NULL, '192.168.2.188', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:15:41'),
(38, 'AGREGO EQUIPO', 36, 'warriors.localdomain', NULL, '192.168.2.63', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:16:16'),
(39, 'AGREGO EQUIPO', 37, 'warriors.localdomain', NULL, '192.168.5.11', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:16:39'),
(40, 'AGREGO EQUIPO', 38, 'warriors.localdomain', NULL, '192.168.2.38', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:17:00'),
(41, 'AGREGO EQUIPO', 39, 'warriors.localdomain', NULL, '192.168.2.142', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:17:28'),
(42, 'AGREGO EQUIPO', 40, 'warriors.localdomain', NULL, '192.168.2.62', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:17:48'),
(43, 'AGREGO EQUIPO', 41, 'warriors.localdomain', NULL, '192.168.2.61', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:18:03'),
(44, 'AGREGO EQUIPO', 42, 'warriors.localdomain', NULL, '192.168.2.17', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:18:19'),
(45, 'AGREGO EQUIPO', 43, 'warriors.localdomain', NULL, '192.168.2.65', NULL, '', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:18:39');

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
  `alias_viejo` varchar(50) DEFAULT NULL,
  `rfc_nuevo` varchar(13) DEFAULT NULL,
  `rfc_viejo` varchar(13) DEFAULT NULL,
  `descripcion_nuevo` varchar(255) DEFAULT NULL,
  `descripcion_viejo` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_grupo`
--

INSERT INTO `bitacora_grupo` (`idbitacora`, `accion`, `id_grupo`, `nombre_nuevo`, `nombre_viejo`, `alias_nuevo`, `alias_viejo`, `rfc_nuevo`, `rfc_viejo`, `descripcion_nuevo`, `descripcion_viejo`, `usuario`, `fecha`) VALUES
(1, 'AGREGO GRUPO', 12, 'VDGEWE', NULL, 'GEGRE', NULL, 'POI1624345SDE', NULL, '', NULL, 'root@localhost', '2019-01-20 19:01:59'),
(2, 'MODIFICO GRUPO', 12, 'VDGEWE', 'OZUMBA', 'GEGRE', 'OZUMBITA', 'POI1624345SDE', 'POI1624345SDE', '', 'BUENA COMIDA', 'root@localhost', '2019-01-20 19:02:43'),
(3, 'MODIFICO GRUPO', 8, 'PANTITLAN', 'PANTITLAN', 'PANTITLAAAAAN', 'PANTI', 'EISR123456785', 'EISR123456785', '', 'CERCA DEL METRO', 'root@localhost', '2019-01-20 19:05:53'),
(4, 'ELIMINO GRUPO', 12, 'OZUMBA', NULL, 'OZUMBITA', NULL, 'POI1624345SDE', NULL, 'BUENA COMIDA', NULL, 'root@localhost', '2019-01-20 19:06:59'),
(5, 'MODIFICO GRUPO', 4, 'CHABACANO', 'CHABACANO', 'EL CHABACANO', 'EL CHABACANO', 'POI1624345QSE', 'POI1624345QSE', '', '', 'root@localhost', '2019-01-20 19:39:31'),
(6, 'AGREGO GRUPO', 13, 'WEGRTHYJUK', NULL, 'ERTHYU', NULL, 'POI1624345SDE', NULL, 'HSRTYJMK', NULL, 'root@localhost', '2019-01-21 11:32:16'),
(7, 'MODIFICO GRUPO', 13, 'HOLA', 'WEGRTHYJUK', 'HOLA', 'ERTHYU', 'POI1624345SDE', 'POI1624345SDE', 'HOLA', 'HSRTYJMK', 'root@localhost', '2019-01-21 11:32:52'),
(8, 'ELIMINO GRUPO', 13, 'HOLA', NULL, 'HOLA', NULL, 'POI1624345SDE', NULL, 'HOLA', NULL, 'root@localhost', '2019-01-21 11:33:16'),
(9, 'AGREGO GRUPO', 14, 'WARRIORS LABS', NULL, 'GUERREROS', NULL, 'POI1624345SDE', NULL, '', NULL, 'root@localhost', '2019-01-21 13:11:58'),
(10, 'MODIFICO GRUPO', 14, 'WARRIORS LABS', 'WARRIORS LABS', 'GUERREROS', 'GUERREROS', 'POI1624345SDE', 'POI1624345SDE', 'ZSDFGHJK', '', 'root@localhost', '2019-01-21 13:12:06'),
(11, 'ELIMINO GRUPO', 8, 'PANTITLAN', NULL, 'PANTITLAAAAAN', NULL, 'EISR123456785', NULL, '', NULL, 'root@localhost', '2019-01-21 13:27:31'),
(12, 'ELIMINO GRUPO', 14, 'WARRIORS LABS', NULL, 'GUERREROS', NULL, 'POI1624345SDE', NULL, 'ZSDFGHJK', NULL, 'root@localhost', '2019-01-21 18:26:16'),
(13, 'MODIFICO GRUPO', 3, 'XOLA', 'XOLA', 'XOLITA', 'XOLA', 'BVI1224345ZER', 'BVI1224345ZER', '', '', 'root@localhost', '2019-01-22 09:25:45'),
(14, 'MODIFICO GRUPO', 3, 'XOLA', 'XOLA', 'XOLITA', 'XOLITA', 'BVI1224345ZER', 'BVI1224345ZER', '', '', 'root@localhost', '2019-01-22 09:35:56'),
(15, 'MODIFICO GRUPO', 3, 'CHABACANO', 'XOLA', 'XOLITA', 'XOLITA', 'BVI1224345ZER', 'BVI1224345ZER', '', '', 'root@localhost', '2019-01-22 09:44:18'),
(16, 'MODIFICO GRUPO', 3, 'XOLA', 'CHABACANO', 'XOLITA', 'XOLITA', 'BVI1224345ZER', 'BVI1224345ZER', '', '', 'root@localhost', '2019-01-22 09:47:16'),
(17, 'MODIFICO GRUPO', 3, 'XOLA', 'XOLA', 'XOLITA', 'XOLITA', 'BVI1224345ZER', 'BVI1224345ZER', '', '', 'root@localhost', '2019-01-22 10:00:11'),
(18, 'MODIFICO GRUPO', 3, 'XOLA', 'XOLA', 'XOLITANV', 'XOLITA', 'BVI1224345ZER', 'BVI1224345ZER', '', '', 'root@localhost', '2019-01-22 10:00:41'),
(19, 'MODIFICO GRUPO', 3, 'XOLA', 'XOLA', 'XOLITANV', 'XOLITANV', 'BVI1224345ZER', 'BVI1224345ZER', '', '', 'root@localhost', '2019-01-22 10:00:49'),
(20, 'AGREGO GRUPO', 15, 'OZUMBA', NULL, 'NVIFRVIR', NULL, 'POI1624345QSE', NULL, '', NULL, 'root@localhost', '2019-01-22 10:01:48'),
(21, 'AGREGO GRUPO', 16, 'IZTACCIHUATL', NULL, 'OFICINA WARRIORS', NULL, 'POI1624345QSE', NULL, '', NULL, 'root@localhost', '2019-01-22 18:17:51'),
(22, 'ELIMINO GRUPO', 3, 'XOLA', NULL, 'XOLITANV', NULL, 'BVI1224345ZER', NULL, '', NULL, 'root@localhost', '2019-01-22 18:22:33'),
(23, 'MODIFICO GRUPO', 4, 'CHABACANO', 'CHABACANO', 'EL CHABACANO', 'EL CHABACANO', 'POI1624345QSE', 'POI1624345QSE', '', '', 'root@localhost', '2019-01-24 12:26:09'),
(24, 'MODIFICO GRUPO', 4, 'CHABACANO', 'CHABACANO', 'EL CHABACANO', 'EL CHABACANO', 'POI1624345QSE', 'POI1624345QSE', '', '', 'root@localhost', '2019-01-24 13:18:39'),
(25, 'MODIFICO GRUPO', 4, 'CHABACANO', 'CHABACANO', 'EL CHABACANO', 'EL CHABACANO', 'POI1624345QSE', 'POI1624345QSE', '', '', 'root@localhost', '2019-01-24 13:23:25'),
(26, 'MODIFICO GRUPO', 4, 'UNIVERSIDAD INSURGENTES', 'CHABACANO', 'INSURGENTES', 'EL CHABACANO', 'POI1624345QSE', 'POI1624345QSE', '', '', 'root@localhost', '2019-02-02 18:52:22'),
(27, 'ELIMINO GRUPO', 5, 'INSURGENTES', NULL, 'INSUR', NULL, 'POI1624345SDE', NULL, '', NULL, 'root@localhost', '2019-02-02 18:52:35'),
(28, 'ELIMINO GRUPO', 6, 'CHALCO', NULL, 'CHALQUITO', NULL, 'POI1624345WER', NULL, '', NULL, 'root@localhost', '2019-02-02 18:52:40'),
(29, 'ELIMINO GRUPO', 7, 'VILLA DE CORTES', NULL, 'GUARDIA', NULL, 'EISR123456785', NULL, '', NULL, 'root@localhost', '2019-02-02 18:52:45'),
(30, 'ELIMINO GRUPO', 15, 'OZUMBA', NULL, 'NVIFRVIR', NULL, 'POI1624345QSE', NULL, '', NULL, 'root@localhost', '2019-02-02 18:52:49'),
(31, 'ELIMINO GRUPO', 16, 'IZTACCIHUATL', NULL, 'OFICINA WARRIORS', NULL, 'POI1624345QSE', NULL, '', NULL, 'root@localhost', '2019-02-02 18:52:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_usuario`
--

CREATE TABLE IF NOT EXISTS `bitacora_usuario` (
  `idbitacora` int(11) NOT NULL,
  `accion` varchar(17) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nombre_nuevo` varchar(45) DEFAULT NULL,
  `nombre_viejo` varchar(45) DEFAULT NULL,
  `apellidos_nuevo` varchar(45) DEFAULT NULL,
  `apellidos_viejo` varchar(45) DEFAULT NULL,
  `telefono_nuevo` varchar(10) DEFAULT NULL,
  `telefono_viejo` varchar(10) DEFAULT NULL,
  `email_nuevo` varchar(50) DEFAULT NULL,
  `email_viejo` varchar(50) DEFAULT NULL,
  `rol_nuevo` varchar(2) DEFAULT NULL,
  `rol_viejo` varchar(2) DEFAULT NULL,
  `grupo_nuevo` int(11) DEFAULT NULL,
  `grupo_viejo` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_usuario`
--

INSERT INTO `bitacora_usuario` (`idbitacora`, `accion`, `id_usuario`, `nombre_nuevo`, `nombre_viejo`, `apellidos_nuevo`, `apellidos_viejo`, `telefono_nuevo`, `telefono_viejo`, `email_nuevo`, `email_viejo`, `rol_nuevo`, `rol_viejo`, `grupo_nuevo`, `grupo_viejo`, `usuario`, `fecha`) VALUES
(1, 'ACTUALIZO USUARIO', 62, 'ALFONSO', 'ALFONSO', 'CONTRERAS', 'CONTRERAS', '5534215676', '5534215674', 'ponchito@yahoo.com', 'ponchito@yahoo.com', 'AD', 'AD', 4, 4, 'root@localhost', '2019-01-28 16:53:53'),
(2, 'ACTUALIZO USUARIO', 61, 'DFRGHR', 'DFRGHR', 'GSGUG', 'GS', '5534532145', '5534532145', 'danny@hotmail.com', 'danny@hotmail.com', 'AD', 'CO', 4, 6, 'root@localhost', '2019-01-28 17:21:28'),
(4, 'ELIMINO USUARIO', 63, 'XOLA', NULL, 'GARCIA', NULL, '5534532145', NULL, 'sergio@warriorslabs.com', NULL, 'SU', NULL, 1, NULL, 'root@localhost', '2019-01-28 20:02:45'),
(5, 'AGREGO USUARIO', 64, 'JULIO CESAR', NULL, 'GARCIA', NULL, '5534532145', NULL, 'sergio@warriorslabs.com', NULL, 'SU', NULL, 1, NULL, 'root@localhost', '2019-01-28 20:05:03'),
(6, 'AGREGO USUARIO', 65, 'NVD', NULL, 'NOF', NULL, '5534215674', NULL, 'enriq.rosa@yahoo.com', NULL, 'CO', NULL, 4, NULL, 'root@localhost', '2019-02-01 10:42:49'),
(7, 'AGREGO USUARIO', 66, 'PRUEBA', NULL, 'PRUEBA', NULL, '5534567231', NULL, 'fbieur@gmail.com', NULL, 'AD', NULL, 5, NULL, 'root@localhost', '2019-02-01 14:47:10'),
(8, 'AGREGO USUARIO', 67, 'PRUEBAJI', NULL, 'PRUEBAJI', NULL, '5534215674', NULL, 'danny@hotmail.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 14:57:20'),
(9, 'ELIMINO USUARIO', 62, 'ALFONSO', NULL, 'CONTRERAS', NULL, '5534215676', NULL, 'ponchito@yahoo.com', NULL, 'CO', NULL, 5, NULL, 'root@localhost', '2019-02-01 14:57:34'),
(10, 'ELIMINO USUARIO', 64, 'JULIO CESAR', NULL, 'GARCIA', NULL, '5534532145', NULL, 'sergio@warriorslabs.com', NULL, 'SU', NULL, 1, NULL, 'root@localhost', '2019-02-01 15:20:45'),
(11, 'ELIMINO USUARIO', 61, 'DFRGHR', NULL, 'GSGUG', NULL, '5534532145', NULL, 'danny@hotmail.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 15:20:51'),
(12, 'ELIMINO USUARIO', 66, 'PRUEBA', NULL, 'PRUEBA', NULL, '5534567231', NULL, 'fbieur@gmail.com', NULL, 'AD', NULL, 5, NULL, 'root@localhost', '2019-02-01 15:20:59'),
(13, 'AGREGO USUARIO', 68, 'PRUEBA', NULL, 'PRUEBA', NULL, '5534567231', NULL, 'enriq.rosa@yahoo.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 15:21:45'),
(14, 'ELIMINO USUARIO', 67, 'PRUEBAJI', NULL, 'PRUEBAJI', NULL, '5534215674', NULL, 'danny@hotmail.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 15:23:03'),
(15, 'AGREGO USUARIO', 69, 'PRUEBA', NULL, 'PRUEBA', NULL, '5534567231', NULL, 'sergio@warriorslabs.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 15:23:51'),
(16, 'ELIMINO USUARIO', 68, 'PRUEBA', NULL, 'PRUEBA', NULL, '5534567231', NULL, 'enriq.rosa@yahoo.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 15:28:46'),
(17, 'AGREGO USUARIO', 70, 'PRUEBA', NULL, 'PRUEBA', NULL, '5534567231', NULL, 'sergio@warriorslabs.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 15:30:47'),
(18, 'AGREGO USUARIO', 71, 'PRUEBA', NULL, 'PRUBA', NULL, '5534567231', NULL, 'enriq.rosa@yahoo.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 15:42:32'),
(19, 'AGREGO USUARIO', 72, 'PRUEBAAAA', NULL, 'PRUEBA', NULL, '5534567844', NULL, 'enriq.rosa@yahoo.com', NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-01 16:05:43'),
(20, 'ACTUALIZO USUARIO', 72, 'RODRIGO', 'PRUEBAAAA', 'ARENAS', 'PRUEBA', '5534567844', '5534567844', 'rodrigo@gmail.com', 'enriq.rosa@yahoo.com', 'AD', 'AD', 4, 4, 'root@localhost', '2019-02-02 18:54:14'),
(21, 'ACTUALIZO USUARIO', 65, 'MARIA', 'NVD', 'HERNANDEZ', 'NOF', '5534215674', '5534215674', 'maria@yahoo.com', 'enriq.rosa@yahoo.com', 'CO', 'CO', 4, 4, 'root@localhost', '2019-02-02 18:54:48'),
(22, 'AGREGO USUARIO', 73, 'ARIEL', NULL, 'HERNANDEZ', NULL, '5534567231', NULL, NULL, NULL, 'AD', NULL, 4, NULL, 'root@localhost', '2019-02-02 18:58:41'),
(23, 'AGREGO USUARIO', 74, 'MARIA', NULL, 'HERNANDEZ', NULL, '5534567844', NULL, NULL, NULL, 'CO', NULL, 4, NULL, 'root@localhost', '2019-02-02 19:04:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `idequipos` int(11) NOT NULL,
  `nombre_host` varchar(50) DEFAULT NULL,
  `dns` varchar(15) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fk_grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idequipos`, `nombre_host`, `dns`, `descripcion`, `fk_grupo`) VALUES
(34, 'warriors.localdomain', '192.168.2.44', '', 4),
(35, 'warriors.localdomain', '192.168.2.188', '', 4),
(36, 'warriors.localdomain', '192.168.2.63', '', 4),
(37, 'warriors.localdomain', '192.168.5.11', '', 4),
(38, 'warriors.localdomain', '192.168.2.38', '', 4),
(39, 'warriors.localdomain', '192.168.2.142', '', 4),
(40, 'warriors.localdomain', '192.168.2.62', '', 4),
(41, 'warriors.localdomain', '192.168.2.61', '', 4),
(42, 'warriors.localdomain', '192.168.2.17', '', 4),
(43, 'warriors.localdomain', '192.168.2.65', '', 4);

--
-- Disparadores `equipos`
--
DELIMITER $$
CREATE TRIGGER `equipo_delete` AFTER DELETE ON `equipos`
 FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host_nuevo,nombre_host_viejo,dns_nuevo,dns_viejo,descripcion_nuevo,descripcion_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ELIMINO EQUIPO',old.idequipos,old.nombre_host,null,old.dns,null,old.descripcion,null,old.fk_grupo,null,user(),now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `equipo_insert` AFTER INSERT ON `equipos`
 FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host_nuevo,nombre_host_viejo,dns_nuevo,dns_viejo,descripcion_nuevo,descripcion_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO EQUIPO',new.idequipos,new.nombre_host,null,new.dns,null,new.descripcion,null,new.fk_grupo,null,user(),now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `equipo_update` AFTER UPDATE ON `equipos`
 FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host_nuevo,nombre_host_viejo,dns_nuevo,dns_viejo,descripcion_nuevo,descripcion_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO EQUIPO',old.idequipos,new.nombre_host,old.nombre_host,new.dns,old.dns,new.descripcion,old.descripcion,new.fk_grupo,old.fk_grupo,user(),now())
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
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nombre`, `alias`, `rfc`, `iframe`, `descripcion`) VALUES
(1, 'TODOS', NULL, NULL, '', NULL),
(4, 'UNIVERSIDAD INSURGENTES', 'INSURGENTES', 'POI1624345QSE', '<iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"></iframe>', '');

--
-- Disparadores `grupo`
--
DELIMITER $$
CREATE TRIGGER `grupo_delete` AFTER DELETE ON `grupo`
 FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,alias_viejo,rfc_nuevo,rfc_viejo,descripcion_nuevo,descripcion_viejo,usuario,fecha)
VALUES
(null,'ELIMINO GRUPO',old.idgrupo,old.nombre,null,old.alias,null,old.rfc,null,old.descripcion,null,user(),now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `grupo_insert` AFTER INSERT ON `grupo`
 FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,alias_viejo,rfc_nuevo,rfc_viejo,descripcion_nuevo,descripcion_viejo,usuario,fecha)
VALUES
(null,'AGREGO GRUPO',new.idgrupo,new.nombre,null,new.alias,null,new.rfc,null,new.descripcion,null,user(),now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `grupo_update` AFTER UPDATE ON `grupo`
 FOR EACH ROW insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,alias_viejo,rfc_nuevo,rfc_viejo,descripcion_nuevo,descripcion_viejo,usuario,fecha)
VALUES
(null,'MODIFICO GRUPO',old.idgrupo,new.nombre,old.nombre,new.alias,old.alias,new.rfc,old.rfc,new.descripcion,old.descripcion,user(),now())
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
,`dns` varchar(15)
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
  `fk_grupou` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellidos`, `telefono`, `usuario`, `pass`, `tipo_usuario`, `fk_grupou`) VALUES
(1, 'JOSUE', 'MARIN ROMERO', '5587125364', 'admin@gmail.com', 'ad0d15b3e9b9c209962391db3cdae0fa', 'SU', 1),
(73, 'ARIEL', 'HERNANDEZ', '5534567231', 'ariel@gmail.com', '004525f722f2d7fb247259f562965cf6', 'AD', 4),
(74, 'MARIA', 'HERNANDEZ', '5534567844', 'maria@gmail.com', '5fd57fbfb39530c5c7e48e1a049200ba', 'CO', 4);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuario_insert` AFTER INSERT ON `usuarios`
 FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre_nuevo,nombre_viejo,apellidos_nuevo,apellidos_viejo,telefono_nuevo,telefono_viejo,email_nuevo,email_viejo,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO USUARIO',new.idusuarios,new.nombre,null,new.apellidos,null,new.telefono,null,new.email,null,new.tipo_usuario,null,new.fk_grupou,null,user(),now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `usuario_update` AFTER UPDATE ON `usuarios`
 FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre_nuevo,nombre_viejo,apellidos_nuevo,apellidos_viejo,telefono_nuevo,telefono_viejo,email_nuevo,email_viejo,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ACTUALIZO USUARIO',old.idusuarios,new.nombre,old.nombre,new.apellidos,old.apellidos,new.telefono,old.telefono,new.email,old.email,new.tipo_usuario,old.tipo_usuario,new.fk_grupou,old.fk_grupou,user(),now())
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
);

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_grupo` AS (select `usuarios`.`idusuarios` AS `idusuarios`,`usuarios`.`fk_grupou` AS `fk_grupou`,`grupo`.`idgrupo` AS `idgrupo`,`usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`usuario` AS `usuario`,`usuarios`.`telefono` AS `telefono`,`usuarios`.`tipo_usuario` AS `tipo_usuario`,`grupo`.`nombre` AS `grupo` from (`usuarios` join `grupo` on((`usuarios`.`fk_grupou` = `grupo`.`idgrupo`))));

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
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `bitacora_grupo`
--
ALTER TABLE `bitacora_grupo`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `bitacora_usuario`
--
ALTER TABLE `bitacora_usuario`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idequipos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `fk_grupo` FOREIGN KEY (`fk_grupo`) REFERENCES `grupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_grupou` FOREIGN KEY (`fk_grupou`) REFERENCES `grupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
