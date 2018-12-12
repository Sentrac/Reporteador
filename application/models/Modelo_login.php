<?php

class Modelo_login extends CI_Model{

    function login($email,$pass){
        /*FUNCIÓN PARA CONSULTAR LOS CAMPOS DE LA TABLA 'usuarios'*/
        $this->db->select('email, pass, tipo_usuario');
        $this->db->from('usuarios');
        $this->db->where('email',$email);
        $this->db->where('pass',$pass);
        $this->db->limit(1);
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    //FUNCIÓN PARA TRAER LOS CAMPOS 'nombre,apellidos DE LA TABLA 'usuarios para mostrar en la vista perfil.php'
    function getRoles(){  
        $this->db->select("nombre,apellidos,telefono,email,tipo_usuario"); 
        $this->db->from('usuarios');  
        $this->db->where("email",$this->session->userdata("email"));
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
}
?>