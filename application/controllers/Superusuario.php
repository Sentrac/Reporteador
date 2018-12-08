<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superusuario extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->library('session');
        
	}

	public function index(){
        $this->load->view('temps/header');
		$this->load->view('interfaces/interfaz_susuario');
    }
}