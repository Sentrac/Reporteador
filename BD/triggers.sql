/*create table bitacora_usuario(
    idbitacora int not null primary key AUTO_INCREMENT,
    accion varchar(17),
    id_usuario int,
    nombre_nuevo varchar(45),
    nombre_viejo varchar(45),
    apellidos_nuevo varchar(45),
    apellidos_viejo varchar(45), 
    rol_nuevo varchar(2),
    rol_viejo varchar(2),
    grupo_nuevo int,
    grupo_viejo int,
    usuario varchar(45),
    fecha datetime);*/


--INSERTAR USUARIO--

CREATE TRIGGER usuario_insert after INSERT
on usuarios
for each ROW
insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO USUARIO',new.idusuarios,new.nombre,new.apellidos,new.tipo_usuario,null,new.fk_grupou,null,new.user_session,now());

--ELIMINAR USUARIO--
CREATE TRIGGER usuario_delete after DELETE
on usuarios
for each ROW
insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ELIMINO USUARIO',old.idusuarios,old.nombre,old.apellidos,old.tipo_usuario,null,old.fk_grupou,null,old.user_session,now());

--MODIFICAR USUARIO
CREATE TRIGGER usuario_update after UPDATE
on usuarios
for each ROW
insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre,apellidos,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'MODIFICO USUARIO',old.idusuarios,new.nombre,new.apellidos,new.tipo_usuario,old.tipo_usuario,new.fk_grupou,old.fk_grupou,new.user_session,now());

/*create table bitacora_grupo(
    idbitacora int not null primary key AUTO_INCREMENT,
    accion VARCHAR(17),
    id_grupo int,
    nombre_nuevo VARCHAR(45),
    nombre_viejo VARCHAR(45),
    alias_nuevo VARCHAR(50),
    rfc_nuevo VARCHAR(13),
    usuario VARCHAR(45),
    fecha DATETIME);
*/

--INSERTAR GRUPO--
CREATE TRIGGER grupo_insert after INSERT
on grupo
for each ROW
insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias,rfc,usuario,fecha)
VALUES
(null,'AGREGO GRUPO',new.idgrupo,new.nombre,null,new.alias,new.rfc,new.usuario,now());

--MODIFICAR GRUPO--
CREATE TRIGGER grupo_update after UPDATE
on grupo
for each ROW
insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias,rfc,iframe,usuario,fecha)
VALUES
(null,'MODIFICO GRUPO',old.idgrupo,new.nombre,old.nombre,new.alias,new.rfc,new.iframe,new.user_session,now());

--ELIMINAR GRUPO--
CREATE TRIGGER grupo_delete after DELETE
on grupo
for each ROW
insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,rfc_nuevo,iframe,usuario,fecha)
VALUES
(null,'ELIMINO GRUPO',old.idgrupo,old.nombre,null,old.alias,null,old.rfc,old.iframe,old.usuario,now());
/*create table bitacora_equipo(
    idbitacora int not null primary key AUTO_INCREMENT,
    accion VARCHAR(17),
    id_equipo int,
    nombre_host VARCHAR(50),
    dns VARCHAR(15),
    dns_viejo VARCHAR(15),
    grupo int,
    usuario VARCHAR(45),
    fecha DATETIME
);*/

--INSERTAR EQUIPO--
CREATE TRIGGER equipo_insert after INSERT
on equipos
for each ROW
insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'AGREGO EQUIPO',new.idequipos,new.nombre_host,new.dns,null,new.fk_grupo,new.usuario,now());

--MODIFICO EQUIPO--
CREATE TRIGGER equipo_update after UPDATE
on equipos
for each ROW
insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'MODIFICO EQUIPO',old.idequipos,new.nombre_host,new.dns,old.dns,new.fk_grupo,new.usuario,now());

--ELIMINO EQUIPO--
CREATE TRIGGER equipo_delete after DELETE
on equipos
for each ROW
insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host,dns,dns_viejo,grupo,usuario,fecha)
VALUES
(null,'ELIMINO EQUIPO',old.idequipos,old.nombre_host,old.dns,null,old.fk_grupo,old.usuario,now());







