create view usuarios_grupo as 
(SELECT usuarios.idusuarios, usuarios.fk_grupou, grupo.idgrupo, usuarios.nombre, usuarios.apellidos, usuarios.email, usuarios.tipo_usuario, grupo.nombre as grupo
FROM usuarios
INNER JOIN grupo
on usuarios.idusuarios=grupo.idgrupo);