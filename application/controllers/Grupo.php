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
		$this->form_validation->set_rules('rfc', 'RFC', 'trim|required|alpha_numeric|min_length[12]|max_length[13]');

	if($this->form_validation->run() == FALSE){
	
		$old = array(
			'nombre' => $this->input->post('nombre'),
			'alias' => $this->input->post('alias'),
			'rfc' => $this->input->post('rfc'),
			'descripcion' => $this->input->post('descripcion'),
		);
		$this->session->set_flashdata('old',$old);

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
				'descripcion' => $descripcion,
				'usuario' => $this->session->userdata("usuario")
			);

			$command = "python3 /var/www/html/Reporteador/assets/Docker.py 2>&1";
			$qwe = exec($command);

			if($this->Modelo_grupo->registrarGrupos($array) and $qwe){
				$this->session->set_flashdata('registro','EL GRUPO SE HA REGISTRADO'); 
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
		$this->form_validation->set_rules('rfc', 'RFC', 'trim|required|alpha_numeric|min_length[12]|max_length[13]');
		$this->form_validation->set_rules('iframe', 'Iframe', 'trim|required');
		$idgrupo = $this->input->post('idgrupo');

		if($this->form_validation->run() == FALSE){

            $asd =  validation_errors();
			$this->session->set_flashdata('ErrorGrupo',$asd);
			redirect('/Grupo/editarGrupo?idgrupo='.$idgrupo,'refresh');
		
		}else{
			$idgrupo = $this->input->post('idgrupo');
			$nombre = $this->input->post('nombre');
			$alias = $this->input->post('alias');
			$rfc = $this->input->post('rfc');
			$iframe = $this->input->post('iframe',FALSE);
			$descripcion = $this->input->post('descripcion');
			
			$nombre = strtoupper($nombre);
			$alias = strtoupper($alias);
			$rfc = strtoupper($rfc);
			$descripcion = strtoupper($descripcion);
			
			$array = array(
				'nombre' => $nombre,
				'alias' => $alias,
				'rfc' => $rfc,
				'iframe' => $iframe,
				'descripcion' => $descripcion,
				'usuario' => $this->session->userdata("usuario")
			);
			if($this->Modelo_grupo->updateGrupo($array,$idgrupo)){
				$this->session->set_flashdata('editar_grupo','EL GRUPO SE HA MODIFICADO');
				$this->grupo();
			}else{
				$this->session->set_flashdata('grupo_modificar','EL NOMBRE DEL GRUPO NO SE PUEDE MODIFICAR, EL GRUPO YA EXISTE'); 
				redirect('/Grupo/grupo','refresh');
			}
		}
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
