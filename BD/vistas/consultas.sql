SELECT grupo.nombre as grupo, equipos.nombre_host,equipos.dns,equipos.descripcion,equipos.fk_grupo
from grupo
inner join equipos
on grupo.idgrupo=equipos.fk_grupo;