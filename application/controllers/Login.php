<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');//ayudante de formularios
		$this->load->library('session');//libreria de sesión
        $this->load->model('Modelo_login');
        $this->load->library('form_validation');//libreria de validaciones
	}

	public function index(){        
		$this->load->view('interfaces/index');
	}

	public function proceso_login(){
		$email=$this->input->post('email');
        md5($pass=$this->input->post('pass'));     

        $this->form_validation->set_rules('email', 'Correp', 'required');
        $this->form_validation->set_rules('pass', 'Contraseña', 'required');
        
        if($this->form_validation->run()==FALSE){
            $this->index();
        }else{
		    $checklogin=$this->Modelo_login->login($email,$pass);
            if($checklogin){
                foreach ($checklogin as $row);
                    $this->session->set_userdata('email',$row->email);
                    $this->session->set_userdata('tipo_usuario',$row->tipo_usuario);
                    //USUARIO SUPERUSUARIO
                    if($this->session->userdata('tipo_usuario')=="SU"){
                        redirect('Superusuario/index');
                    }
                    //USUARIO ADMINISTRADOR
                    elseif($this->session->userdata('tipo_usuario')=="AD"){
                        redirect('admin/index');
                    }
                    //USUARIO CONSULTAS
                    elseif($this->session->userdata('tipo_usuario')=='CO'){
                        redirect('consultas/index');
                    }
            }
            else{
                $this->session->set_flashdata('error','USUARIO O CONTRASEÑA INCORRECTOS'); 
                redirect(base_url());
            }
        }
	}
	public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}





