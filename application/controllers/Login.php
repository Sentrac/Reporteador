<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->view('temps/header');         
        $this->load->view('temps/footer');         
		$this->load->view('interfaces/index');
	}
}