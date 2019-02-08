-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-02-2019 a las 21:36:32
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
-- Estructura para la vista `b_grupoViejo`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupoViejo` AS (select `bitacora_usuario`.`accion` AS `accion`,`bitacora_usuario`.`id_usuario` AS `id_usuario`,`bitacora_usuario`.`nombre` AS `nombre`,`bitacora_usuario`.`apellidos` AS `apellidos`,`bitacora_usuario`.`rol_nuevo` AS `rol_nuevo`,`bitacora_usuario`.`rol_viejo` AS `rol_viejo`,`bitacora_usuario`.`grupo_viejo` AS `grupo_viejo`,`grupo`.`nombre` AS `grupo_anterior`,`bitacora_usuario`.`usuario` AS `usuario`,`bitacora_usuario`.`fecha` AS `fecha` from (`bitacora_usuario` join `grupo`) where (`bitacora_usuario`.`grupo_viejo` = `grupo`.`idgrupo`));

--
-- VIEW  `b_grupoViejo`
-- Datos: Ninguna
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
