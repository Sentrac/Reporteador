<?php

class Modelo_bitacora extends CI_Model{

    public function getusuariosB(){
       $sql=$this->db->get('bitacora_usuario');
       return $sql->result();
    }
    public function getGruposB(){
        $sql=$this->db->get('bitacora_grupo');
        return $sql->result();
    }
    public function getEquiposB(){
        $sql=$this->db->get('bitacora_equipo');
        return $sql->result();
    }
}
?>
