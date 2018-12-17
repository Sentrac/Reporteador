<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superusuario extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
		$this->load->model('Modelo_usuarios');
		$this->load->library('form_validation');//libreria de validaciones
	}
	public function index(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/interfaz_susuario',$this->data);
		$this->load->view('temps/footer');
	}
	/**********************************FUNCIONES DE USUARIO ->agregar->eliminar->actualizar***************** */
	public function usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['usuarios']=$this->Modelo_login->getUsuarios();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/usuarios',$this->data);
		$this->load->view('temps/footer');
	}
	//Función para registrar usuarios
	public function registrar_usuarios(){
		//VALIDACIONES DE CAMPOS
		$this->form_validation->set_rules('nombre', 'Nombre', 'required|alpha');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'required|alpha');
		$this->form_validation->set_rules('usuario', 'Usuario', 'required|valid_email');

		if($this->form_validation->run() == FALSE){
            $this->registrar_usuarios();
        }else{
			$nombre = $this->input->post('nombre');
			$apellidos = $this->input->post('apellidos');
			$user = $this->input->post('usuario');
			$grupo = $this->input->post('fk_grupou');
			$psw = $this->input->post('pass');
			$tipouser = $this->input->post('tipo_usuario');
			//REGISTRAR EN MAYUSCULAS
			$nombre = strtoupper($nombre);
			$apellidos = strtoupper($apellidos);
		
			$data = array(
				'nombre' => $nombre,
				'apellidos' => $apellidos,
				'usuario' => $user,
				'pass' => md5($psw),
				'tipo_usuario' => $tipouser,
				'fk_grupou' => $grupo
			);
			if ($this->Modelo_usuarios->registrarUsuarios($data)){
                //SE LLAMA A LA FUNCIÓN PRINCIPAL 'function gestion_tutores'
                $this->session->set_flashdata('registro','EL USUARIO SE HA REGISTRADO EXITOSAMENTE'); 
                $this->usuarios();
			}
		}
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/registrar_usuarios');
		$this->load->view('temps/footer');
	}
	//Función para mostrar datos en formulario de editar->gestion_usuarios.php
	public function editarUsuario(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$idusuario=$this->input->get('idusuario');
		$this->data['mostrardatosUsuario']=$this->Modelo_usuarios->traerdatosUsuario($idusuario);
		$this->data['usuarios']=$this->Modelo_login->getUsuarios();
		$this->data['nombre_grupo']=$this->Modelo_usuarios->nombreGrupo($idusuario);
		$this->data['grupos']=$this->Modelo_usuarios->grupos();
		$this->load->view('interfaces/gestion_usuarios',$this->data);
	}
	/********************************************************************************************** */
	public function grupo(){
		$this->load->view('temps/header'); 
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/grupo',$this->data);
		$this->load->view('temps/footer');
	}
}