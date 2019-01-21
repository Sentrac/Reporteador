-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2019 a las 02:35:02
-- Versión del servidor: 5.5.60-MariaDB
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
-- Estructura para la vista `grupo_equipos`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `grupo_equipos` AS (select `grupo`.`nombre` AS `grupo`,`equipos`.`idequipos` AS `idequipos`,`equipos`.`nombre_host` AS `nombre_host`,`equipos`.`dns` AS `dns`,`equipos`.`descripcion` AS `descripcion`,`equipos`.`fk_grupo` AS `fk_grupo` from (`grupo` join `equipos` on((`grupo`.`idgrupo` = `equipos`.`fk_grupo`))));

--
-- VIEW  `grupo_equipos`
-- Datos: Ninguna
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
