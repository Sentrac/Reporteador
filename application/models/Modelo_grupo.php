<?php

class Modelo_grupo extends CI_Model{

    //FUNCION DONDE SE MUESTRAN TODOS LOS GRUPOS MENOS EL DE ID=1
    public function grupos_lista(){
        $this->db->distinct('nombre');
        $this->db->where_not_in('idgrupo', 1);
        $data=$this->db->get('grupo');
        return $data->result();
    }
    public function getGrupo($idgrupo){
        $this->db->where('idgrupo', $idgrupo);
        $data=$this->db->get('grupo');
        return $data->result();
    }
    //FUNCIÓN PARA INSERTAR EN LA TABLA GRUPO 
    public function registrarGrupos($array){
        $count=$this->db->insert('grupo',$array);        
        if($count>0){
            return true;
        }else{
            return false;
        }
    }

}
?>