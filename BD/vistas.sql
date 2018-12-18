create view usuarios_grupo as 
(SELECT usuarios.idusuarios, usuarios.fk_grupou, grupo.idgrupo, usuarios.nombre, usuarios.apellidos, usuarios.email, usuarios.tipo_usuario, grupo.nombre as grupo
FROM usuarios
INNER JOIN grupo
on usuarios.idusuarios=grupo.idgrupo);

/*CONSULTA PARA MOSTRAR LOS GRUPOS SIN REPETIR **/
select DISTINCT(nombre_grupo.grupo) 
from nombre_grupo
where nombre_grupo.idgrupo NOT IN (1); 