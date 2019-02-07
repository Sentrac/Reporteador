<?php

class Modelo_bitacora extends CI_Model{

    public function getusuariosB(){
        $sql=$this->db->get('b_grupos');
       return $sql->result();
    }
    // public function getNewGrupoB(){
    //     $this->db->select('grupo_nuevo,grupo.nombre');
    //     $this->db->from('bitacora_usuario');
    //     $this->db->join('grupo','bitacora_usuario.grupo_nuevo = grupo.idgrupo');
    //     $query=$this->db->get();
    //     return $query->result();
    // }
    public function getOldGrupoB(){
        $sql=$this->db->get('b_grupoViejo');
       return $sql->result();
        // $this->db->select('grupo_viejo,nombres');
        // $this->db->from('bitacora_usuario');
        // $this->db->join('grupo','bitacora_usuario.grupo_viejo = grupo.idgrupo');
        // $query=$this->db->get();
        // return $query->result();
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
