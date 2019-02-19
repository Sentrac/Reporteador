<?php

class Modelo_login extends CI_Model{

    function login($usuario,$pass){
        /*FUNCIÓN PARA CONSULTAR LOS CAMPOS DE LA TABLA 'usuarios'*/
        $this->db->select('usuario, pass, tipo_usuario,fk_grupou');
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
        $this->db->from('usuarios');  
        $this->db->where("usuario",$this->session->userdata("usuario"));
        $query=$this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else {
            return false;
        }
    }
    //Traer datos desde la vista usuarios_grupo
    function getUsuarios(){  
        $this->db->select(); 
        $this->db->from('usuarios_grupo'); 
        $this->db->order_by("grupo", "asc"); 
        $query = $this->db->get();
        return $query->result();
    }
    function validTI($t,$i)
    {
        $this->db->select();
        $this->db->from('tkns');
        $this->db->where('tkn',$t);
        $this->db->where('fkusuarios',$i);
        $this->db->where('status','0');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return true;
        }else {
            return false;
        }
    }
    function verifTI($i)
    {
        $this->db->set('status','1');
        $this->db->where('fkusuarios',$i);
        $this->db->where('typetkn','VF');
        if($this->db->update('tkns')){
            return true;
        } else {
            return false;
        }
    }
    function validMail($mail)
    {
        $this->db->select('idusuarios');
        $this->db->from('usuarios');
        $this->db->where('email',$mail);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else {
            return false;
        }
    }
    function valTKOP($tkn,$iu)
    {
        $this->db->from('tkns');
        $this->db->where('tkn',$tkn);
        $this->db->where('fkusuarios',$iu);
        $this->db->where('typetkn','MP');
        $this->db->where('status','0');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return true;   
        }else {
            return false;
        }
    }
    function chanTKOP($tkn,$iu)
    {
        $this->db->set('status','1');
        $this->db->where('fkusuarios',$iu);
        $this->db->where('tkn',$tkn);
        $this->db->where('typetkn','MP');
        if($this->db->update('tkns')){
            return true;
        } else {
            return false;
        } 
    }
    function changePass($ps,$id)
    {
        $this->db->set('pass',$ps);
        $this->db->where('idusuarios',$id);
        if($this->db->update('usuarios')){
            return true;
        } else {
            return false;
        }
    }
}
?>