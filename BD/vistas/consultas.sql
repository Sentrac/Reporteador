SELECT grupo.nombre as grupo, equipos.nombre_host,equipos.dns,equipos.descripcion,equipos.fk_grupo
from grupo
inner join equipos
on grupo.idgrupo=equipos.fk_grupo;

SELECT * FROM `usuarios_grupo` 
WHERE usuarios_grupo.fk_grupou=2 and 
 usuarios_grupo.tipo_usuario not in ('AD');

SELECT usuarios_grupo.grupo 
from usuarios_grupo where 
usuarios_grupo.idusuarios=2;