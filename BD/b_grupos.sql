-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-02-2019 a las 21:36:27
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
-- Estructura para la vista `b_grupos`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `b_grupos` AS (select distinct `b_grupoNuevo`.`id_usuario` AS `id_usuario`,`b_grupoNuevo`.`accion` AS `accion`,`b_grupoNuevo`.`nombre` AS `nombre`,`b_grupoNuevo`.`apellidos` AS `apellidos`,`b_grupoNuevo`.`rol_nuevo` AS `rol_nuevo`,`b_grupoNuevo`.`rol_viejo` AS `rol_viejo`,`b_grupoNuevo`.`grupo_nuevo` AS `grupo_nuevo`,`b_grupoNuevo`.`grupo_actual` AS `grupo_actual`,`b_grupoViejo`.`grupo_viejo` AS `grupo_viejo`,`b_grupoViejo`.`grupo_anterior` AS `grupo_anterior`,`b_grupoNuevo`.`usuario` AS `usuario`,`b_grupoNuevo`.`fecha` AS `fecha` from (`b_grupoNuevo` join `b_grupoViejo`));

--
-- VIEW  `b_grupos`
-- Datos: Ninguna
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
