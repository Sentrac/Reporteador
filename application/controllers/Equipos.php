<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Equipos extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
		$this->load->model('Modelo_grupo');
		$this->load->model('Modelo_equipos');
		$this->load->library('form_validation');//libreria de validaciones
	}
	public function grupo(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['lista_grupos']=$this->Modelo_grupo->grupos_lista();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/grupo',$this->data);
		$this->load->view('temps/footer');
    }
    public function equipo(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['grupo_admin']=$this->Modelo_grupo->getGrupoAdmin();
		//Modelo para obtener todos los equipos y grupos para el super administrador
		$idgrupo=$this->input->get('idgrupo');
		$this->data['grupo_equipos']=$this->Modelo_grupo->getGrupo($idgrupo);
		$this->data['equipos']=$this->Modelo_equipos->getEquipos($idgrupo);
		//Modelo para mostrar todos los equipos pertenecientes al grupo del admin
		$grupo=$this->input->get('fk_grupou');
		$this->data['equipos_admin']=$this->Modelo_equipos->getEquiposAdmin($grupo);
		/////////////////////////////////////////////////////////////////////
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/equipos',$this->data);
		$this->load->view('temps/footer');
    }
    public function formulario_equipo(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$idgrupo=$this->input->get('idgrupo');
		$this->data['grupo_equipos']=$this->Modelo_grupo->getGrupo($idgrupo);
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/registrar_equipo',$this->data);
		$this->load->view('temps/footer');
    }
    public function registrar_equipo(){
		$this->form_validation->set_rules('nombre_host', 'Nombre/Hostname', 'trim|required');
		$this->form_validation->set_rules('dns', 'DNS o IP', 'trim|required');

		if($this->form_validation->run() == FALSE){
           
            $this->error_modal();

        }else{
			$nom_host=$this->input->post('nombre_host');
			$dns=$this->input->post('dns');
			$descripcion=$this->input->post('descripcion');
			$fkgrupo=$this->input->post('fk_grupo');

			$descripcion = strtoupper($descripcion);
			
			$array = array(
				'nombre_host' => $nom_host,
				'dns' => $dns,
				'fk_grupo' => $fkgrupo,
				'descripcion' => $descripcion
			);
			if($this->Modelo_equipos->registrarEquipos($array)){
				$this->session->set_flashdata('registro','EL EQUIPO SE HA REGISTRADO EXITOSAMENTE'); 
				redirect('/Equipos/grupo','refresh');
			}else{
				echo 'no registrado';
			}
		}
	}
	public function registrar_equipo_admin(){
		$this->form_validation->set_rules('nombre_host', 'Nombre/Hostname', 'trim|required');
		$this->form_validation->set_rules('dns', 'DNS o IP', 'trim|required');

		if($this->form_validation->run() == FALSE){
           
            $this->error_modal();

        }else{
			$nom_host=$this->input->post('nombre_host');
			$dns=$this->input->post('dns');
			$descripcion=$this->input->post('descripcion');
			$fkgrupo=$this->input->post('fk_grupo');

			$descripcion = strtoupper($descripcion);
			
			$array = array(
				'nombre_host' => $nom_host,
				'dns' => $dns,
				'fk_grupo' => $fkgrupo,
				'descripcion' => $descripcion
			);
			if($this->Modelo_equipos->registrarEquipos($array)){
				$this->session->set_flashdata('registro','EL EQUIPO SE HA REGISTRADO EXITOSAMENTE'); 
				redirect('/Equipos/success_equipo_modal','refresh');
			}else{
				echo 'no registrado';
			}
		}
	}
	public function error_modal(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/error_modal');
		$this->load->view('temps/footer');
	}
	public function success_equipo_modal(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/success_equipo_modal');
		$this->load->view('temps/footer');
	}
}
?>