<?php

class Modelo_login extends CI_Model{

    function login($usuario,$pass){
        /*FUNCIÓN PARA CONSULTAR LOS CAMPOS DE LA TABLA 'usuarios'*/
        $this->db->select('usuario, pass, tipo_usuario');
        $this->db->from('usuarios');
        $this->db->where('usuario',$usuario);
        $this->db->where('pass',md5($pass));
        $this->db->limit(1);
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    //FUNCIÓN PARA TRAER LOS CAMPOS 'nombre,apellidos,email,tipo_usuario DE LA TABLA 'usuarios para mostrar en la vista perfil.php'
    function getRoles(){  
        $this->db->select("idusuarios,nombre,apellidos,telefono,tipo_usuario,fk_grupou"); 
        $this->db->from('usuarios');  
        $this->db->where("usuario",$this->session->userdata("usuario"));
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
   }
?>