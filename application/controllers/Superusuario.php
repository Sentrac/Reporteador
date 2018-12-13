<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superusuario extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
		$this->load->library('form_validation');//libreria de validaciones
		$this->load->view('temps/header'); 
		$this->load->view('temps/footer');
	}
	public function index(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/interfaz_susuario',$this->data);
	}
	public function perfil(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/perfil',$this->data);
	}
	/************************************************************************************************************************************** */
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL SUPER USUARIO PARA LA TABLA 'usuarios'
    function vistaPassword(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/cambiar_pass',$this->data);
	}
	function cambiarPassword(){
        //VALIDACIONES
        $this->form_validation->set_rules('actual_pswd','Contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Nueva contraseña','required|max_length[20]|min_length[6]');
        $this->form_validation->set_rules('repeat_pswd','Repetir contraseña','required|matches[new_pswd]');

        if($this->form_validation->run()==FALSE){
            $this->data['posts']=$this->Modelo_login->getRoles();
            $this->load->view('interfaces/cambiar_pass',$this->data);
        }else {
            $sql=$this->db->select("*")->from("usuarios")->where("email",$this->session->userdata("email"))->get();
            foreach ($sql->result() as $my_pswd) {
                md5($db_password=$my_pswd->pass);
                $db_email=$my_pswd->email;        
                $this->session->set_flashdata('pass', 'LA CONTRASEÑA SE HA CAMBIADO EXITOSAMENTE');
                $fixed_pw=md5($this->input->post("new_pswd"));
				$update=$this->db->query("UPDATE usuarios SET pass='$fixed_pw' WHERE email='$db_email'")or die(mysqli_error());
				$this->vistaPassword();
            } 
		}   
	}
	
	public function usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/usuarios',$this->data);
	}
	public function grupo(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/grupo',$this->data);
	}
}