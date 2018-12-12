<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superusuario extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
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
	public function cambiarpass(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/cambiar_pass',$this->data);
	}
	public function usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/usuarios',$this->data);
	}
	public function clientes(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('interfaces/clientes',$this->data);
	}
}