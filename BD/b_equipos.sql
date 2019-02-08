-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-02-2019 a las 21:35:54
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
-- Estructura para la vista `b_equipos`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_equipos` AS (select `bitacora_equipo`.`idbitacora` AS `idbitacora`,`bitacora_equipo`.`accion` AS `accion`,`bitacora_equipo`.`id_equipo` AS `id_equipo`,`bitacora_equipo`.`nombre_host` AS `nombre_host`,`bitacora_equipo`.`dns` AS `dns`,`bitacora_equipo`.`dns_viejo` AS `dns_viejo`,`bitacora_equipo`.`grupo` AS `grupo`,`grupo`.`nombre` AS `nombre`,`bitacora_equipo`.`usuario` AS `usuario`,`bitacora_equipo`.`fecha` AS `fecha` from (`bitacora_equipo` join `grupo` on((`bitacora_equipo`.`grupo` = `grupo`.`idgrupo`))));

--
-- VIEW  `b_equipos`
-- Datos: Ninguna
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
