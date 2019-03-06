-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-02-2019 a las 03:28:53
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

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_grupou` FOREIGN KEY (`fk_grupou`) REFERENCES `grupo` (`idgrupo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
