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

    function getGrupoAdmin(){  
        $this->db->select("grupo"); 
        $this->db->from('usuarios_grupo');  
        $this->db->where("usuario",$this->session->userdata("usuario"));
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    
    //FUNCIÓN PARA INSERTAR EN LA TABLA GRUPO Y NO INSERTAR SI EL GRUPO YA EXISTE
    public function registrarGrupos($array){
       $query = $array['nombre'];
       $this->db->where('nombre',$query);
       $validar=$this->db->get('grupo');
       if($validar->num_rows()>0){
          return false;
       } else {
            $count=$this->db->insert('grupo',$array);  
                return true;   
        }    
    }

    //FUNCIÓN PARA ACTUALIZAR EL GRUPO MEDIANTE LA ID
    public function updateGrupo($array,$idgrupo){
        $this->db->where('idgrupo',$idgrupo);
        $this->db->update('grupo', $array);
        return true;
    }
    public function delGrp($id)
    {
        $this->db->where('idgrupo', $id);
        $this->db->delete('grupo');   
    }
    
}
?>