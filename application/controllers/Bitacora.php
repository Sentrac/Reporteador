<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bitacora extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->library('session');
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
    }
    public function bitacora(){
		$this->load->view('interfaces/bitacora',$this->data);
		$this->load->view('temps/footer');
    }
}
?>