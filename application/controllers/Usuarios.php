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
		//
		$this->data['usuarios']=$this->Modelo_login->getUsuarios();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/registrar_usuarios');	
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
		$this->form_validation->set_rules('fk_grupou', 'Grupo', 'trim|required');
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
					$this->usuarios();
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
		$this->data['nombre_grupo']=$this->Modelo_usuarios->nombreGrupo($idusuario);
		$this->data['grupos']=$this->Modelo_usuarios->grupos();
		$this->data['ex_grupos']=$this->Modelo_usuarios->n_grupos();
		$this->load->view('interfaces/gestion_usuarios',$this->data);
	}
}
?>