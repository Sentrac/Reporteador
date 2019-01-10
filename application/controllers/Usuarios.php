<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
		$this->load->model('Modelo_usuarios');
		$this->load->library('form_validation');//libreria de validaciones
	}
    //INTERFAZ PRINCIPAL DONDE SE MUESTRAN LOS USUARIOS REGISTRADOS
	public function usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		//modelo para obtener todos los usuarios registrados para el superusuario
		$this->data['usuarios']=$this->Modelo_login->getUsuarios();
		//modelo para obtener todos los usuarios pertenecientes a un solo grupo
		$grupo=$this->input->get('fk_grupou');
		$this->data['usuario_grupo']=$this->Modelo_usuarios->usuario_grupo($grupo);
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/usuarios',$this->data);
		$this->load->view('temps/footer');
	}
    //FUNCIÓN DONDE MUESTRA LA VISTA DEL FORMULARIO PARA REGISTRAR USUARIOS
	public function formulario_usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		//Modelos para las funciones de los grupos para el superusuario para registar el usuario
		$this->data['ex_grupos']=$this->Modelo_usuarios->n_grupos();
		$this->data['todo_grupo']=$this->Modelo_usuarios->grupostodos();
		//Modelo para obtener el grupo del administrador para agregar un nuevo usuario a su grupo
		$idusuario=$this->input->get('idusuarios');
		$this->data['grupo_admin']=$this->Modelo_usuarios->getGrupo_admin($idusuario);
		/////////////////////////////////////////////////////////////////////////////////////
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/registrar_usuarios',$this->data);	
		$this->load->view('temps/footer');
    }
    //FUNCIÓN DONDE SE REGISTRA UN NUEVO USUARIO
	public function registrar_usuarios(){		
		//VALIDACIONES DE CAMPOS
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric|exact_length[10]');
		$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|valid_email');
		//$this->form_validation->set_rules('fk_grupou', 'Grupo', 'trim|required');
		$this->form_validation->set_rules('tipo_usuario', 'Rol', 'required');
		$this->form_validation->set_rules('pass', 'Contraseña', 'required|min_length[8]|max_length[10]|alpha_numeric_spaces');
		$this->form_validation->set_rules('repeat_pswd', 'Confirmar Contraseña', 'required|matches[pass]');

		if($this->form_validation->run() == FALSE){
           
            $this->formulario_usuarios();

        }else{
			$nombre = $this->input->post('nombre');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$correo = $this->input->post('email');
			$user = $this->input->post('usuario');
			$tipouser = $this->input->post('tipo_usuario');
			if($tipouser=='SU'){
				$grupo = 1;
			} else {
				$grupo = $this->input->post('fk_grupou');
			}
			$psw = $this->input->post('pass');
			
			//REGISTRAR EN MAYUSCULAS
			$nombre = strtoupper($nombre);
			$apellidos = strtoupper($apellidos);
		
			$d = array(
				'nombre' => $nombre,
				'apellidos' => $apellidos,
				'telefono' => $telefono,
				'email' => $correo,
				'usuario' => $user,
				'pass' => md5($psw),
				'tipo_usuario' => $tipouser,
				'fk_grupou' => $grupo
			);
				if($this->Modelo_usuarios->registrarUsuarios($d)){
					$this->session->set_flashdata('registro','EL USUARIO SE HA REGISTRADO EXITOSAMENTE');
					redirect('/Usuarios/usuarios','refresh');
				}else{
					echo 'no registrado';
				}
		}
	}
	public function registrar_usuarios_admin(){		
		//VALIDACIONES DE CAMPOS
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric|exact_length[10]');
		$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|valid_email');
		$this->form_validation->set_rules('tipo_usuario', 'Rol', 'required');
		$this->form_validation->set_rules('pass', 'Contraseña', 'required|min_length[8]|max_length[10]|alpha_numeric_spaces');
		$this->form_validation->set_rules('repeat_pswd', 'Confirmar Contraseña', 'required|matches[pass]');

		if($this->form_validation->run() == FALSE){
           
            $this->error_usuario_modal();

        }else{
			$nombre = $this->input->post('nombre');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$correo = $this->input->post('email');
			$user = $this->input->post('usuario');
			$grupo = $this->input->post('fk_grupou');
			$psw = $this->input->post('pass');
			$tipouser = $this->input->post('tipo_usuario');
			//REGISTRAR EN MAYUSCULAS
			$nombre = strtoupper($nombre);
			$apellidos = strtoupper($apellidos);
		
			$d = array(
				'nombre' => $nombre,
				'apellidos' => $apellidos,
				'telefono' => $telefono,
				'email' => $correo,
				'usuario' => $user,
				'pass' => md5($psw),
				'tipo_usuario' => $tipouser,
				'fk_grupou' => $grupo
			);
				if($this->Modelo_usuarios->registrarUsuarios($d)){
					$this->session->set_flashdata('registro','EL USUARIO SE HA REGISTRADO EXITOSAMENTE'); 
					redirect('/Usuarios/success_usuario_modal','refresh');
				}else{
					echo 'no registrado';
				}
		}
	}
	//Función para mostrar datos en formulario de editar->gestion_usuarios.php
	public function editarUsuario(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$idusuario=$this->input->get('idusuario');
		$this->data['mostrardatosUsuario']=$this->Modelo_usuarios->traerdatosUsuario($idusuario);
		$this->data['usuarios']=$this->Modelo_login->getUsuarios();
		$this->data['getGrupo_admin']=$this->Modelo_usuarios->getGrupo_admin($idusuario);
		$this->data['grupos']=$this->Modelo_usuarios->grupos();
		$this->data['todo_grupo']=$this->Modelo_usuarios->grupostodos();
		$this->data['ex_grupos']=$this->Modelo_usuarios->n_grupos();
		$this->load->view('interfaces/gestion_usuarios',$this->data);
	}
	public function actualizarUsuario(){
		//VALIDACIONES DE CAMPOS
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric|exact_length[10]');
		$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');

		if($this->form_validation->run() == FALSE){
           
            $this->error_registaruser_modal();

        }else{
			$idusuario = $this->input->post('idusuarios');
			$nombre = $this->input->post('nombre');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$correo = $this->input->post('email');
			$tipouser = $this->input->post('tipo_usuario');
			$antval = $this->input->post('antval');
			$grupo = $this->input->post('fk_grupou');
			if($grupo==$grupo){
				$grupo = $this->input->post('antval');
			}
			if($tipouser=='SU'){
				$grupo = 1;
			} else {
				$grupo = $this->input->post('fk_grupou');
			}
			
			
			//REGISTRAR EN MAYUSCULAS
			$nombre = strtoupper($nombre);
			$apellidos = strtoupper($apellidos);
		
			$array = array(
				'nombre' => $nombre,
				'apellidos' => $apellidos,
				'telefono' => $telefono,
				'email' => $correo,
				'tipo_usuario' => $tipouser,
				'fk_grupou' => $grupo
			);
				if($this->Modelo_usuarios->updateUsuarios($array,$idusuario)){
					$this->session->set_flashdata('editar','EL USUARIO SE HA MODIFICADO EXITOSAMENTE'); 
					redirect('/Usuarios/usuarios','refresh');
				}else{
					echo 'no registrado';
				}
		}
	}
	public function EliminarUsuario($id){
		$this->Modelo_usuarios->EliminardatosUsuario($id);
		$response['status']  = 'success';
		$response['message'] = 'Registro eliminado correctamente ...';
		echo json_encode($response);
	}
	public function success_usuario_modal(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/success_usuario_modal');
		$this->load->view('temps/footer');
	}
	public function error_usuario_modal(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/error_usuario_modal');
		$this->load->view('temps/footer');
	}
	public function error_registaruser_modal(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/error_registaruser_modal');
		$this->load->view('temps/footer');
	}
	public function contactos($id)
	{
		$list = $this->Modelo_usuarios->getContactos($id);
		$data = array();
		foreach ($list as $person) {
			$row = array();
			$row[] = $person->nombre;
			$row[] = $person->apellidos;
			$row[] = $person->telefono;
			$row[] = $person->email;

			$data[] = $row;
		}

		$respons = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Modelo_usuarios->count_all(),
			"recordsFiltered" => $this->Modelo_usuarios->count_filtered(),
			"data" => $data,
		);
		
		echo json_encode($respons);
	}
	public function grupos()
	{
		$sel = $this->Modelo_usuarios->getGrupos();
		$itm = array();
		foreach ($sel as $group) {
			$reg = array();
			$reg[] = $group;
			$itm[] = $reg;
		}
		echo json_encode($itm);
	}
	public function editusuari($id)
	{
		$dts = $this->Modelo_usuarios->traerdatosUsuario($id);
		echo json_encode($dts);
	}
}