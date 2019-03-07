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
		//Modelo para obtener todos los equipos y grupos para el SuperAdministrador
		if($this->session->userdata('tipo_usuario')=="SU"){
			$idgrupo=$this->input->get('idgrupo');
			$this->data['grupo_equipos']=$this->Modelo_grupo->getGrupo($idgrupo);
			$this->data['equipos']=$this->Modelo_equipos->getEquipos($idgrupo);
		} elseif($this->session->userdata('tipo_usuario')=="AD" or $this->session->userdata('tipo_usuario')=="CO"){
			//Modelo para mostrar todos los equipos pertenecientes al grupo del Admin
			$grup=$this->input->get('fk_grupou');
			if($grup == $this->session->userdata('grupo')){
				$grupo = $grup;
			} else {
				$grupo = $this->session->userdata('grupo');
			}
			$this->data['equipos_admin']=$this->Modelo_equipos->getEquiposAdmin($grupo);
		}
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
		$fkgrupo=$this->input->post('fk_grupo');

		if($this->form_validation->run() == FALSE){
			$asd =  validation_errors();
			$this->session->set_flashdata('ErrorEq',$asd);
			redirect('/Equipos/formulario_equipo?idgrupo='.$fkgrupo,'refresh');
  	}else{
			$nom_host=$this->input->post('nombre_host');
			$dns=$this->input->post('dns');
			$descripcion=$this->input->post('descripcion');

			$descripcion = strtoupper($descripcion);
			
			$array = array(
				'nombre_host' => $nom_host,
				'dns' => $dns,
				'fk_grupo' => $fkgrupo,
				'descripcion' => $descripcion,
				'usuario' => $this->session->userdata("usuario")
			);
			if($this->Modelo_equipos->registrarEquipos($array)){
				$this->session->set_flashdata('registro','EL EQUIPO SE HA REGISTRADO'); 
				redirect('/Equipos/equipo?idgrupo='.$fkgrupo,'refresh');
			}else{
				$this->session->set_flashdata('ErrorEq','LA IP YA EXISTE'); 
				redirect('/Equipos/formulario_equipo?idgrupo='.$fkgrupo,'refresh');
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
				'descripcion' => $descripcion,
				'usuario' => $this->session->userdata("usuario")
			);
			if($this->Modelo_equipos->registrarEquipos($array)){
				$this->session->set_flashdata('registro','EL EQUIPO SE HA REGISTRADO EXITOSAMENTE'); 
				redirect('/Equipos/equipo?fk_grupou='.$fkgrupo);
			}else{
				$this->session->set_flashdata('ip_existe','LA IP YA EXISTE'); 
				redirect('/Equipos/grupo','refresh');
			}
		}
	}
	public function editarEquipo(){
		$idequipo=$this->input->get('idequipo');
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['mostrardatosequipo']=$this->Modelo_equipos->equipos($idequipo);
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/gestion_equipos',$this->data);
		$this->load->view('temps/footer');
	}
	public function actualizarEquipo(){
		$this->form_validation->set_rules('nombre_host', 'Nombre/Hostname', 'trim|required');
		$this->form_validation->set_rules('dns', 'DNS o IP', 'trim|required');

		if($this->form_validation->run() == FALSE){
           
            $this->error_modal();

        }else{
			$idequipo=$this->input->post('idequipos');
			$nom_host=$this->input->post('nombre_host');
			$dns=$this->input->post('dns');
			$descripcion=$this->input->post('descripcion');
			$frm="<iframe src='".$this->input->post('frame',FALSE)."'></iframe>";
			$fkgrupo=$this->input->post('fk_grupo');

			$descripcion = strtoupper($descripcion);
			
			$array = array(
				'nombre_host' => $nom_host,
				'dns' => $dns,
				'fk_grupo' => $fkgrupo,
				'descripcion' => $descripcion,
				'iframe' => $frm,
				'usuario' => $this->session->userdata("usuario")
			);
			if($this->Modelo_equipos->updateEquipo($array,$idequipo)){
				$this->session->set_flashdata('registro','EL EQUIPO SE HA CAMBIADO EXITOSAMENTE'); 
				if($this->session->userdata('tipo_usuario')=='SU'){
					redirect('/Equipos/equipo?idgrupo='.$fkgrupo,'refresh');
				} else {
					redirect('/Equipos/equipo?fk_grupou='.$fkgrupo,'refresh');
				}
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
	public function EliminarEquipo($id){
		$this->Modelo_equipos->delEquipo($id);
		$response['status']  = 'success';
		$response['message'] = 'Equipo eliminado correctamente ...';
		echo json_encode($response);
	}
	public function grafic()
	{
		$frm = $_GET['ide'];
		$this->data['posts']=$this->Modelo_login->getRoles();
		if($this->session->userdata('tipo_usuario') == 'SU'){
			$this->data['iframe']=$this->Modelo_equipos->getFrame($frm);
		} elseif($this->session->userdata('tipo_usuario') == 'AD') {
			$this->data['iframe']=$this->Modelo_equipos->getFrameG($frm,$this->session->userdata('grupo'));
		}
		// var_dump($this->data['iframe']);
		$this->load->view('temps/header',$this->data);
		$this->load->view('interfaces/interfaz_grafic',$this->data);
		$this->load->view('temps/footer');
	}
}
?>