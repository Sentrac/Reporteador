<?php

class Modelo_equipos extends CI_Model{
    public function getEquipos($idgrupo){
        $this->db->where('fk_grupo', $idgrupo);
        $data=$this->db->get('grupo_equipos');
        return $data->result();
    }
    public function getEquiposAdmin($grupo){
        $this->db->where('fk_grupo', $grupo);
        $data=$this->db->get('grupo_equipos');
        return $data->result();
    }
    public function registrarEquipos($array){
        $count=$this->db->insert('equipos',$array);        
        if($count>0){
            return true;
        }else{
            return false;
        }
    }
}

?>