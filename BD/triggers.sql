/*create table bitacora_usuario(
    idbitacora int not null primary key AUTO_INCREMENT,
    accion varchar(17),
    id_usuario int,
    nombre_nuevo varchar(45),
    nombre_viejo varchar(45),
    apellidos_nuevo varchar(45),
    apellidos_viejo varchar(45),
    telefono_nuevo varchar(10), 
    telefono_viejo varchar(10),
    email_nuevo varchar(50),
    email_viejo varchar(50),  
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
idbitacora,accion,id_usuario,nombre_nuevo,nombre_viejo,apellidos_nuevo,apellidos_viejo,telefono_nuevo,telefono_viejo,email_nuevo,email_viejo,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO USUARIO',new.idusuarios,new.nombre,null,new.apellidos,null,new.telefono,null,new.email,null,new.tipo_usuario,null,new.fk_grupou,null,user(),now());

--ELIMINAR USUARIO--
CREATE TRIGGER usuario_delete after DELETE
on usuarios
for each ROW
insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre_nuevo,nombre_viejo,apellidos_nuevo,apellidos_viejo,telefono_nuevo,telefono_viejo,email_nuevo,email_viejo,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ELIMINO USUARIO',old.idusuarios,old.nombre,null,old.apellidos,null,old.telefono,null,old.email,null,old.tipo_usuario,null,old.fk_grupou,null,user(),now());

--MODIFICAR USUARIO--
CREATE TRIGGER usuario_update after UPDATE
on usuarios
for each ROW
insert into bitacora_usuario(
idbitacora,accion,id_usuario,nombre_nuevo,nombre_viejo,apellidos_nuevo,apellidos_viejo,telefono_nuevo,telefono_viejo,email_nuevo,email_viejo,rol_nuevo,rol_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ACTUALIZO USUARIO',old.idusuarios,new.nombre,old.nombre,new.apellidos,old.apellidos,new.telefono,old.telefono,new.email,old.email,new.tipo_usuario,old.tipo_usuario,new.fk_grupou,old.fk_grupou,user(),now());

/*create table bitacora_grupo(
    idbitacora int not null primary key AUTO_INCREMENT,
    accion VARCHAR(17),
    id_grupo int,
    nombre_nuevo VARCHAR(45),
    nombre_viejo VARCHAR(45),
    alias_nuevo VARCHAR(50),
    alias_viejo VARCHAR(50),
    rfc_nuevo VARCHAR(13),
    rfc_viejo VARCHAR(13),
    descripcion_nuevo VARCHAR(255),
    descripcion_viejo VARCHAR(255),
    usuario VARCHAR(45),
    fecha DATETIME
);*/

--INSERTAR GRUPO--
CREATE TRIGGER grupo_insert after INSERT
on grupo
for each ROW
insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,alias_viejo,rfc_nuevo,rfc_viejo,descripcion_nuevo,descripcion_viejo,usuario,fecha)
VALUES
(null,'AGREGO GRUPO',new.idgrupo,new.nombre,null,new.alias,null,new.rfc,null,new.descripcion,null,user(),now());

--MODIFICAR GRUPO--
CREATE TRIGGER grupo_update after UPDATE
on grupo
for each ROW
insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,alias_viejo,rfc_nuevo,rfc_viejo,descripcion_nuevo,descripcion_viejo,usuario,fecha)
VALUES
(null,'MODIFICO GRUPO',old.idgrupo,new.nombre,old.nombre,new.alias,old.alias,new.rfc,old.rfc,new.descripcion,old.descripcion,user(),now());

--ELIMINAR GRUPO--
CREATE TRIGGER grupo_delete after DELETE
on grupo
for each ROW
insert into bitacora_grupo(
idbitacora,accion,id_grupo,nombre_nuevo,nombre_viejo,alias_nuevo,alias_viejo,rfc_nuevo,rfc_viejo,descripcion_nuevo,descripcion_viejo,usuario,fecha)
VALUES
(null,'ELIMINO GRUPO',old.idgrupo,old.nombre,null,old.alias,null,old.rfc,null,old.descripcion,null,user(),now());

/*create table bitacora_equipo(
    idbitacora int not null primary key AUTO_INCREMENT,
    accion VARCHAR(17),
    id_equipo int,
    nombre_host_nuevo VARCHAR(50),
    nombre_host_viejo VARCHAR(50), 
    dns_nuevo VARCHAR(15),
    dns_viejo VARCHAR(15),
    descripcion_nuevo VARCHAR(255),
    descripcion_viejo VARCHAR(255),
    grupo_nuevo int,
    grupo_viejo int,
    usuario VARCHAR(45),
    fecha DATETIME
);*/

--INSERTAR EQUIPO--
CREATE TRIGGER equipo_insert after INSERT
on equipos
for each ROW
insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host_nuevo,nombre_host_viejo,dns_nuevo,dns_viejo,descripcion_nuevo,descripcion_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'AGREGO EQUIPO',new.idequipos,new.nombre_host,null,new.dns,null,new.descripcion,null,new.fk_grupo,null,user(),now());

--MODIFICO EQUIPO--
CREATE TRIGGER equipo_update after UPDATE
on equipos
for each ROW
insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host_nuevo,nombre_host_viejo,dns_nuevo,dns_viejo,descripcion_nuevo,descripcion_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'MODIFICAR EQUIPO',old.idequipos,new.nombre_host,old.nombre_host,new.dns,old.dns,new.descripcion,old.descripcion,new.fk_grupo,old.fk_grupo,user(),now());

--ELIMINO EQUIPO--
CREATE TRIGGER equipo_delete after DELETE
on equipos
for each ROW
insert into bitacora_equipo(
idbitacora,accion,id_equipo,nombre_host_nuevo,nombre_host_viejo,dns_nuevo,dns_viejo,descripcion_nuevo,descripcion_viejo,grupo_nuevo,grupo_viejo,usuario,fecha)
VALUES
(null,'ELIMINO EQUIPO',old.idequipos,old.nombre_host,null,old.dns,null,old.descripcion,null,old.fk_grupo,null,user(),now());