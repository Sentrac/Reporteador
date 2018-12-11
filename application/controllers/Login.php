<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
	}

	public function index(){        
		$this->load->view('interfaces/index');
	}

	public function proceso_login(){
		$this->load->helper(array('form','url'));
		$email=$this->input->post('email');
		$pass=$this->input->post('pass');
		
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
	}
	public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}