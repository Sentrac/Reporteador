<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grupo extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
		$this->load->model('Modelo_grupo');
		$this->load->library('form_validation');//libreria de validaciones
    }
    public function grupo(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		//MODELO PARA OBTNER TODOS LOS GRUPOS
		$this->data['lista_grupos']=$this->Modelo_grupo->grupos_lista();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/grupo',$this->data);
		$this->load->view('temps/footer');
    }
    //FUNCIÓN PARA MOSTRAR EL FORMULARIO DE AGREGAR GRUPOS
	public function formulario_grupos(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/registrar_grupos',$this->data);
		$this->load->view('temps/footer');
    }
    //FUNCIÓN PARA PODER INSERTAR LOS REGISTROS DE UN NUEVO GRUPO EN LA BD 'grupo'
	public function registrar_grupo(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('alias', 'Alias', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('rfc', 'RFC', 'trim|required|alpha_numeric');

		if($this->form_validation->run() == FALSE){
           
            $this->formulario_grupos();

        }else{
			$nombre = $this->input->post('nombre');
			$alias = $this->input->post('alias');
			$rfc = $this->input->post('rfc');
			$descripcion = $this->input->post('descripcion');
			$nombre = strtoupper($nombre);
			$alias = strtoupper($alias);
			$rfc = strtoupper($rfc);
			$descripcion = strtoupper($descripcion);
			
			$array = array(
				'nombre' => $nombre,
				'alias' => $alias,
				'rfc' => $rfc,
				'descripcion' => $descripcion
			);
			if($this->Modelo_grupo->registrarGrupos($array)){
				$this->session->set_flashdata('registro','EL GRUPO SE HA REGISTRADO EXITOSAMENTE'); 

				redirect('/Grupo/grupo','refresh');

			}else{
				$this->session->set_flashdata('grupo','EL GRUPO YA EXISTE'); 
				redirect('/Grupo/grupo','refresh');

			}
		}
	}
	public function editarGrupo(){
		$idgrupo=$this->input->get('idgrupo');
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['mostrardatosgrupo']=$this->Modelo_grupo->getGrupo($idgrupo);
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/gestion_grupos',$this->data);
		$this->load->view('temps/footer');
	}
	public function actualizarGrupo(){
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('alias', 'Alias', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('rfc', 'RFC', 'trim|required|alpha_numeric');

		if($this->form_validation->run() == FALSE){
           
            $this->error_modal();

        }else{
			$idgrupo = $this->input->post('idgrupo');
			$nombre = $this->input->post('nombre');
			$alias = $this->input->post('alias');
			$rfc = $this->input->post('rfc');
			$descripcion = $this->input->post('descripcion');
			
			$nombre = strtoupper($nombre);
			$alias = strtoupper($alias);
			$rfc = strtoupper($rfc);
			$descripcion = strtoupper($descripcion);
			
			$array = array(
				'nombre' => $nombre,
				'alias' => $alias,
				'rfc' => $rfc,
				'descripcion' => $descripcion
			);
			if($this->Modelo_grupo->updateGrupo($array,$idgrupo)){
				$this->session->set_flashdata('editar','EL GRUPO SE HA CAMBIADO EXITOSAMENTE'); 
				$this->grupo();
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
	public function delgrupo($id)
	{
		$this->Modelo_grupo->delGrp($id);
		$response['status']  = 'success';
		$response['message'] = 'Grupo eliminado correctamente ...';
		echo json_encode($response);
	}

}
?>