<?php

class Modelo_usuarios extends CI_Model{
    //FUNCIÓN DONDE MUESTRA LOS DATOS DEL USUARIO POR ID
    public function traerdatosUsuario($idusuarios){
        $this->db->where('idusuarios',$idusuarios);
        $data=$this->db->get('usuarios');
        return $data->result();
    } 
    public function nombreGrupo($idusuarios){
        $this->db->where('',$idusuarios);
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
    //VISTA DONDE TRAE TODOS LOS NOMBRES DE LOS GRUPOS
    public function grupos(){
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
    public function grupostodos(){
        $this->db->distinct('grupo');
        $this->db->where('fk_grupou',1);
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
    public function n_grupos(){
        $this->db->distinct('grupo');
        $this->db->where_not_in('idgrupo', 1);
        $data=$this->db->get('grupo');
        return $data->result();
    }
    //FUNCIÓN PARA INSERTAR LOS NUEVOS USUARIOS EN LA BD
    public function registrarUsuarios($d){
        $count=$this->db->insert('usuarios',$d);        
        if($count>0){
            return true;
        }else{
            return false;
        }
    }
    public function usuario_grupo($fk_grupou){
        $this->db->where('fk_grupou',$fk_grupou);
        $this->db->where_not_in('tipo_usuario','SU');
        $this->db->order_by("tipo_usuario", "asc"); 
        $data=$this->db->get('usuarios_grupo');
        return $data->result();
    }
    function getUsuarios(){  
        $this->db->select(); 
        $this->db->from('usuarios_grupo'); 
        $this->db->order_by("grupo", "asc"); 
        $this->db->order_by("tipo_usuario", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
    public function getGrupo_admin($idusuario){
        $this->db->where('idusuarios',$idusuario);
        $data=$this->db->get('usuarios_grupo');
        return $data->result();
    }
    //ACTUALIZAR DATOS
    public function updateUsuarios($array,$idusuario){
        $this->db->where('idusuarios',$idusuario);
        $this->db->update('usuarios', $array);
        return true;
    }
    public function EliminardatosUsuario($idusuario){
        $this->db->where('idusuarios', $idusuario);
        $this->db->delete('usuarios');
    }
    public function delete_by_id($idusuario){
        $this->db->where('idusuarios', $idusuario);
		$this->db->delete('usuarios');
    }
}

?>