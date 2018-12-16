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
    public function perfil(){
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
        $this->load->view('interfaces/perfil',$this->data);
        $this->load->view('temps/footer');
    }
    function vistaPassword(){
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
        $this->load->view('interfaces/cambiar_pass',$this->data);
        $this->load->view('temps/footer');
    }
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL SUPER USUARIO PARA LA TABLA 'usuarios'
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
        $this->load->view('temps/footer');  
	}
	public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}





