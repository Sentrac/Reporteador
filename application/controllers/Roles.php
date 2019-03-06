<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
		$this->load->model('Modelo_grupo');
	}
	public function superusuario(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['frame']=$this->Modelo_login->getFrame();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/interfaz_susuario',$this->data);
		$this->load->view('temps/footer');
  }
    public function admin(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->data['grupo_admin']=$this->Modelo_grupo->getGrupoAdmin();
    	$this->load->view('interfaces/interfaz_admin',$this->data);
    	$this->load->view('temps/footer');
    }
    public function consultor(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->data['grupo_admin']=$this->Modelo_grupo->getGrupoAdmin();
		$this->load->view('interfaces/interfaz_consul',$this->data);
		$this->load->view('temps/footer');
    }
}
?>