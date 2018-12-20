<?php

class Modelo_grupo extends CI_Model{

    public function grupos_lista(){
        $this->db->distinct('nombre');
        $this->db->where_not_in('idgrupo', 1);
        $data=$this->db->get('grupo');
        return $data->result();
    }

}
?>