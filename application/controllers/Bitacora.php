<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bitacora extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
        $this->load->library('session');
        $this->load->model('Modelo_login');
        $this->load->model('Modelo_bitacora');
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
    }
    public function usuarios(){
        $this->data['b_usuarios']=$this->Modelo_bitacora->getusuariosB();
        $this->load->view('interfaces/bitacora_usuario',$this->data);
		$this->load->view('temps/footer');
    }
    public function grupos(){
        $this->data['b_grupos']=$this->Modelo_bitacora->getgruposB();
        $this->load->view('interfaces/bitacora_grupo',$this->data);
		$this->load->view('temps/footer');
    }
    public function equipos(){
        $this->data['b_equipos']=$this->Modelo_bitacora->getEquiposB();
        $this->load->view('interfaces/bitacora_equipos',$this->data);
		$this->load->view('temps/footer');
    }
}
?>