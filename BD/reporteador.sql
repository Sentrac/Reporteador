-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-02-2019 a las 21:52:30
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora_grupo`
--

INSERT INTO `bitacora_grupo` (`idbitacora`, `accion`, `id_grupo`, `nombre_nuevo`, `nombre_viejo`, `alias_nuevo`, `rfc_nuevo`, `iframe`, `usuario`, `fecha`) VALUES
(6, 'ELIMINO GRUPO', 19, 'HELLO', NULL, 'JEJE', 'POI1624345QWE', '<iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"></iframe>', 'admin@gmail.com', '2019-02-08 15:51:36');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

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
  `dns` varchar(15) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fk_grupo` int(11) DEFAULT NULL,
  `usuario` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idequipos`, `nombre_host`, `dns`, `descripcion`, `fk_grupo`, `usuario`) VALUES
(35, 'warriors.localdomain', '192.168.2.188', '', 4, ''),
(36, 'warriors.localdomain', '192.168.2.63', '', 4, ''),
(37, 'warriors.localdomain', '192.168.5.11', '', 4, ''),
(38, 'warriors.localdomain', '192.168.2.38', '', 4, ''),
(39, 'warriors.localdomain', '192.168.2.142', '', 4, ''),
(40, 'warriors.localdomain3', '192.168.2.62', '', 4, 'ariel@gmail.com'),
(41, 'warriors.localdomain', '192.168.2.61', '', 4, '');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idgrupo`, `nombre`, `alias`, `rfc`, `iframe`, `descripcion`, `usuario`) VALUES
(1, 'TODOS', NULL, NULL, '', NULL, ''),
(4, 'UNIVERSIDAD INSURGENTES', 'INSURGENTES', 'POI1624345QSE', '<iframe src="http://189.204.31.154:5601/app/kibana#/dashboard/14173c70-1ff0-11e9-8f4c-6b11e5ded0e8?embed=true&_g=()" height="600" width="800"></iframe>', '', '');

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
  `fk_grupou` int(11) DEFAULT NULL,
  `user_session` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `nombre`, `apellidos`, `telefono`, `usuario`, `pass`, `tipo_usuario`, `fk_grupou`, `user_session`) VALUES
(1, 'JOSUE', 'MARIN ROMERO', '5587125364', 'admin@gmail.com', 'ad0d15b3e9b9c209962391db3cdae0fa', 'SU', 1, ''),
(90, 'MARIA', 'MONTOYA', '5534567844', 'maria@gmail.com', '004525f722f2d7fb247259f562965cf6', 'AD', 4, 'admin@gmail.com');

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
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `bitacora_grupo`
--
ALTER TABLE `bitacora_grupo`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `bitacora_usuario`
--
ALTER TABLE `bitacora_usuario`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idequipos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idgrupo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
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
