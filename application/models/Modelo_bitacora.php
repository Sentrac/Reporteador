<?php

class Modelo_bitacora extends CI_Model{

    public function getusuariosB(){
       $sql=$this->db->get('bitacora_usuario');
       return $sql->result();
    }
    public function getGrupoB(){
        $this->db->select('nombre');
        $this->db->from('bitacora_usuario');
        $this->db->join('grupo','bitacora_usuario.grupo_nuevo=grupo.idgrupo');
        $query = $this->db->get();
        return $query->result();
    }
    public function getGrupoB2(){
        $this->db->select('nombre');
        $this->db->from('grupo');
        $this->db->join('bitacora_usuario','bitacora_usuario.grupo_viejo=grupo.idgrupo');
        $query = $this->db->get();
        return $query->result();
    }
    public function getGruposB(){
        $sql=$this->db->get('bitacora_grupo');
       return $sql->result();
    }
}
?>
