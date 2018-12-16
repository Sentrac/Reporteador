<?php

class Modelo_usuarios extends CI_Model{

    public function traerdatosUsuario($idusuarios){
        $this->db->where('idusuarios',$idusuarios);
        $data=$this->db->get('usuarios');
        return $data->result();
    }
    public function nombreGrupo($idusuarios){
        $this->db->where('fk_grupou',$idusuarios);
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
    public function grupos(){
        $data=$this->db->get('nombre_grupo');
        return $data->result();
    }
}

?>