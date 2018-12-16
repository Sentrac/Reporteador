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
	/**********************************FUNCIONES DE USUARIO ->editar->eliminar->actualizar***************** */
	public function usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['usuarios']=$this->Modelo_login->getUsuarios();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/usuarios',$this->data);
		$this->load->view('temps/footer');
	}
	//Función para registrar usuarios
	public function registrar_usuarios(){
		$this->load->view('temps/header'); 
		$this->load->view('temps/footer');
		$this->load->view('interfaces/registrar_usuarios');
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