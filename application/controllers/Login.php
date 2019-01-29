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
		$usuario=$this->input->post('usuario');
		md5($pass=$this->input->post('pass'));
        
        $checklogin=$this->Modelo_login->login($usuario,$pass);

        if($checklogin){
            foreach ($checklogin as $row);
                $this->session->set_userdata('usuario',$row->usuario);
                $this->session->set_userdata('tipo_usuario',$row->tipo_usuario);
                //USUARIO SUPERUSUARIO
                if($this->session->userdata('tipo_usuario')=="SU"){
                    redirect('Roles/superusuario');
                    
                }
                //USUARIO ADMINISTRADOR
                elseif($this->session->userdata('tipo_usuario')=="AD"){
                    redirect('Roles/admin');
                }
                //USUARIO CONSULTAS
                elseif($this->session->userdata('tipo_usuario')=='CO'){
                    redirect('Roles/consultor');
                }
            }
            else{
                $this->session->set_flashdata('error','USUARIO O CONTRASEÑA INCORRECTOS'); 
                redirect(base_url());
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
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
        //VALIDACIONES
        $this->form_validation->set_rules('actual_pswd','Contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Nueva contraseña','required|min_length[8]|max_length[16]|alpha_numeric_spaces');
        $this->form_validation->set_rules('repeat_pswd','Repetir contraseña','required|matches[new_pswd]|min_length[8]|max_length[16]|alpha_numeric_spaces');
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('temps/header');
            $this->data['posts']=$this->Modelo_login->getRoles();
            redirect('Login/vistaPassword','refresh');
        }else {
            $sql=$this->db->select("*")->from("usuarios")
                                        ->where("usuario",$this->session->userdata("usuario"))
                                        ->where("pass",md5($this->input->post("actual_pswd")))->get();
            if($sql->num_rows()==1) {
                foreach ($sql->result() as $user) {
                    $db_password=$user->pass;
                    $db_user=$user->usuario;        
                    $this->session->set_flashdata('pass', 'LA CONTRASEÑA SE HA CAMBIADO EXITOSAMENTE');
                    $fixed_pw=md5($this->input->post("new_pswd"));
                    $update=$this->db->query("UPDATE usuarios SET pass='$fixed_pw' WHERE usuario='$db_user'")or die(mysqli_error());
                    $this->vistaPassword();
                    redirect('Login/vistaPassword','refresh');
                }
            } else {
                $this->session->set_flashdata('passError', 'INGRESE SU CONTRASEÑA ACTUAL CORRECTAMENTE');
                redirect('Login/vistaPassword','refresh');
            }
        }
        $this->load->view('temps/footer');
	}
	public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}





