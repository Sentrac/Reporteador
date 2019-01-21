-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-01-2019 a las 02:34:29
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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
(13, 'AGREGO EQUIPO', 28, 'apple.com', 'apple.com', '192.168.2.14', '192.168.2.14', 'SLOW COMPUTER', 'SLOW COMPUTER', 3, 3, 'root@localhost', '2019-01-20 20:10:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_grupo`
--

INSERT INTO `bitacora_grupo` (`idbitacora`, `accion`, `id_grupo`, `nombre_nuevo`, `nombre_viejo`, `alias_nuevo`, `alias_viejo`, `rfc_nuevo`, `rfc_viejo`, `descripcion_nuevo`, `descripcion_viejo`, `usuario`, `fecha`) VALUES
(1, 'AGREGO GRUPO', 12, 'VDGEWE', NULL, 'GEGRE', NULL, 'POI1624345SDE', NULL, '', NULL, 'root@localhost', '2019-01-20 19:01:59'),
(2, 'MODIFICO GRUPO', 12, 'VDGEWE', 'OZUMBA', 'GEGRE', 'OZUMBITA', 'POI1624345SDE', 'POI1624345SDE', '', 'BUENA COMIDA', 'root@localhost', '2019-01-20 19:02:43'),
(3, 'MODIFICO GRUPO', 8, 'PANTITLAN', 'PANTITLAN', 'PANTITLAAAAAN', 'PANTI', 'EISR123456785', 'EISR123456785', '', 'CERCA DEL METRO', 'root@localhost', '2019-01-20 19:05:53'),
(4, 'ELIMINO GRUPO', 12, 'OZUMBA', NULL, 'OZUMBITA', NULL, 'POI1624345SDE', NULL, 'BUENA COMIDA', NULL, 'root@localhost', '2019-01-20 19:06:59'),
(5, 'MODIFICO GRUPO', 4, 'CHABACANO', 'CHABACANO', 'EL CHABACANO', 'EL CHABACANO', 'POI1624345QSE', 'POI1624345QSE', '', '', 'root@localhost', '2019-01-20 19:39:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_usuario`
--

INSERT INTO `bitacora_usuario` (`idbitacora`, `accion`, `id_usuario`, `nombre_nuevo`, `nombre_viejo`, `apellidos_nuevo`, `apellidos_viejo`, `telefono_nuevo`, `telefono_viejo`, `email_nuevo`, `email_viejo`, `rol_nuevo`, `rol_viejo`, `grupo_nuevo`, `grupo_viejo`, `usuario`, `fecha`) VALUES
(1, 'AGREGO USUARIO', 60, 'GRHTEH', NULL, 'BHTHT', NULL, '5534215674', NULL, 'danny@hotmail.com', NULL, 'SU', NULL, 1, NULL, 'root@localhost', '2019-01-20 15:56:59'),
(2, 'AGREGO USUARIO', 60, 'GRHTEH', NULL, 'BHTHT', NULL, '5534215674', NULL, 'danny@hotmail.com', NULL, 'SU', NULL, 1, NULL, 'root@localhost', '2019-01-20 15:59:57'),
(3, 'ELIMINO USUARIO', 35, 'URIEL', NULL, 'BARON', NULL, '5534567231', NULL, 'dfgh@gmail.com', NULL, 'AD', NULL, 7, NULL, 'root@localhost', '2019-01-20 16:01:31'),
(4, 'ACTUALIZO USUARIO', 40, 'CESAR', 'JULIO CESAR', 'AGUSTO', 'GARCIA', '5534231234', '1234567834', 'danny@hotmail.com', 'danny@hotmail.com', 'SU', 'AD', 1, 4, 'root@localhost', '2019-01-20 16:05:20');

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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idequipos`, `nombre_host`, `dns`, `descripcion`, `fk_grupo`) VALUES
(5, 'warriors12.com', '192.168.0.44', '', 3),
(7, 'localdomain.com', '192.168.2.11', 'LINUX MINT', 4),
(8, 'sentrac.com', '192.168.3.2', '', 6),
(13, 'localdomain12.com', '192.122.0.2', 'UBUNTU', 4),
(14, 'localdomain12.com', '192.122.0.2', 'UBUNTU', 4),
(15, 'local.com', '192.122.0.2', 'UBUNTU', 4),
(16, 'plamesi.com', '192.122.3.44', '', 4),
(20, 'warriors.com', '192.122.0.2', '', 4),
(21, 'warriors.com', '192.168.0.44', '', 8),
(22, 'reporteador.com', '192.168.2.11', '', 8),
(24, 'localdomain.com', '192.168.0.44', '', 8),
(26, 'warriors.com', '192.168.0.44', '', 7),
(28, 'apple.com', '192.168.2.14', 'SLOW COMPUTER', 3),
(29, 'ggwr', '192.168.0.44', '', 5);

--
-- Disparadores `equipos`
--
DELIMITER $$
CREATE TRIGGER `equipo_delete` AFTER DELETE ON `equipos`
 FOR EACH ROW insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host_nuevo,nombre_host_viejo,dns_nuevo,dns_viejo,descripcion_nuevo,descripcion_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO EQUIPO',old.idequipos,null,old.nombre_host,null,old.dns,null,old.descripcion,null,old.fk_grupo,null,user(),now())
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
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nombre`, `alias`, `rfc`, `descripcion`) VALUES
(1, 'TODOS', NULL, NULL, NULL),
(3, 'XOLA', 'XOLA', 'BVI1224345ZER', ''),
(4, 'CHABACANO', 'EL CHABACANO', 'POI1624345QSE', ''),
(5, 'INSURGENTES', 'INSUR', 'POI1624345SDE', ''),
(6, 'CHALCO', 'CHALQUITO', 'POI1624345WER', ''),
(7, 'VILLA DE CORTES', 'GUARDIA', 'EISR123456785', ''),
(8, 'PANTITLAN', 'PANTITLAAAAAN', 'EISR123456785', '');

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
  `email` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `tipo_usuario` varchar(2) DEFAULT NULL,
  `fk_grupou` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellidos`, `telefono`, `email`, `usuario`, `pass`, `tipo_usuario`, `fk_grupou`) VALUES
(1, 'JOSUE', 'MARIN ROMERO', '5587125364', 'admin@gmail.com', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'SU', 1),
(40, 'CESAR', 'AGUSTO', '5534231234', 'danny@hotmail.com', 'poncho@yahoo.com', '25d55ad283aa400af464c76d713c07ad', 'SU', 1),
(47, 'OSIEL', 'GARCIA', '5534567231', 'enriq.rosa@yahoo.com', 'consultas@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'CO', 3),
(58, 'PANCHO', 'LOPEZ', '5534567844', 'consultas@gmail.com', 'fewe@hotmail.com', '25d55ad283aa400af464c76d713c07ad', 'AD', 5);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `usuario_delete` AFTER DELETE ON `usuarios`
 FOR EACH ROW insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre_nuevo,nombre_viejo,apellidos_nuevo,apellidos_viejo,telefono_nuevo,telefono_viejo,email_nuevo,email_viejo,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ELIMINO USUARIO',old.idusuarios,old.nombre,null,old.apellidos,null,old.telefono,null,old.email,null,old.tipo_usuario,null,old.fk_grupou,null,user(),now())
$$
DELIMITER ;
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
,`email` varchar(50)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuarios_grupo` AS (select `usuarios`.`idusuarios` AS `idusuarios`,`usuarios`.`fk_grupou` AS `fk_grupou`,`grupo`.`idgrupo` AS `idgrupo`,`usuarios`.`nombre` AS `nombre`,`usuarios`.`apellidos` AS `apellidos`,`usuarios`.`email` AS `email`,`usuarios`.`usuario` AS `usuario`,`usuarios`.`telefono` AS `telefono`,`usuarios`.`tipo_usuario` AS `tipo_usuario`,`grupo`.`nombre` AS `grupo` from (`usuarios` join `grupo` on((`usuarios`.`fk_grupou` = `grupo`.`idgrupo`))));

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
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `bitacora_grupo`
--
ALTER TABLE `bitacora_grupo`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `bitacora_usuario`
--
ALTER TABLE `bitacora_usuario`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idequipos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
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
