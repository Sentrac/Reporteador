<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superusuario extends CI_Controller {

	function __construct(){

		parent::__construct(); 
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->model('Modelo_login');
		$this->load->model('Modelo_usuarios');
		$this->load->model('Modelo_grupo');
		$this->load->library('form_validation');//libreria de validaciones
	}
	public function index(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/interfaz_susuario',$this->data);
		$this->load->view('temps/footer');
	}
	/**********************************FUNCIONES DE USUARIO ->agregar->eliminar->actualizar***************** */
	//INTERFAZ PRINCIPAL DONDE SE MUESTRAN LOS USUARIOS REGISTRADOS
	public function usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['usuarios']=$this->Modelo_login->getUsuarios();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/usuarios',$this->data);
		$this->load->view('temps/footer');
	}
	//FUNCIÓN DONDE MUESTRA LA VISTA DEL FORMULARIO PARA REGISTRAR USUARIOS
	public function formulario_usuarios(){
		$this->data['posts']=$this->Modelo_login->getRoles();
		$this->data['ex_grupos']=$this->Modelo_usuarios->n_grupos();
		$this->data['todo_grupo']=$this->Modelo_usuarios->grupostodos();
		$this->load->view('temps/header',$this->data); 
		$this->load->view('interfaces/registrar_usuarios');	
		$this->load->view('temps/footer');
	}
	//FUNCIÓN DONDE SE REGISTRA UN NUEVO USUARIO
	public function registrar_usuarios(){		
		//VALIDACIONES DE CAMPOS
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|valid_email');
		$this->form_validation->set_rules('tipo_usuario', 'Rol', 'required');
		$this->form_validation->set_rules('pass', 'Contraseña', 'required|min_length[8]|max_length[10]|alpha_numeric_spaces');
		$this->form_validation->set_rules('repeat_pswd', 'Confirmar Contraseña', 'required|matches[pass]');

		if($this->form_validation->run() == FALSE){
           
            $this->formulario_usuarios();

        }else{
			$nombre = $this->input->post('nombre');
			$apellidos = $this->input->post('apellidos');
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
	/***************************************FUNCIONES DE GRUPO************************************************* */
	public function grupo(){
		$this->data['posts']=$this->Modelo_login->getRoles();
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
		$this->form_validation->set_rules('alias', 'Alias', 'trim|required|alpha');
		$this->form_validation->set_rules('rfc', 'RFC', 'trim|required|alpha_numeric');
		$this->form_validation->set_rules('nombre_cont', 'Nombre contacto', 'trim|required|alpha');
		$this->form_validation->set_rules('paterno_cont', 'Paterno contacto', 'trim|required|alpha');
		$this->form_validation->set_rules('materno_cont', 'Materno contacto', 'trim|required|alpha');
		$this->form_validation->set_rules('lada', 'Lada', 'required');
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric|exact_length[8]');
		$this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');

		if($this->form_validation->run() == FALSE){
           
            $this->formulario_grupos();

        }else{
			$nombre = $this->input->post('nombre');
			$alias = $this->input->post('alias');
			$rfc = $this->input->post('rfc');
			$descripcion = $this->input->post('descripcion');
			$n_contacto = $this->input->post('nombre_cont');
			$p_contacto = $this->input->post('paterno_cont');
			$m_contacto = $this->input->post('materno_cont');
			$lada = $this->input->post('lada');
			$telefono = $this->input->post('telefono');
			$email = $this->input->post('email');

			$nombre = strtoupper($nombre);
			$alias = strtoupper($alias);
			$rfc = strtoupper($rfc);
			$descripcion = strtoupper($descripcion);
			$n_contacto = strtoupper($n_contacto);
			$p_contacto = strtoupper($p_contacto);
			$m_contacto = strtoupper($m_contacto);

			$array = array(
				'nombre' => $nombre,
				'alias' => $alias,
				'rfc' => $rfc,
				'descripcion' => $descripcion,
				'nombre_cont' => $n_contacto,
				'paterno_cont' => $p_contacto,
				'materno_cont' => $m_contacto,
				'lada' => $lada,
				'telefono' => $telefono,
				'email' => $email
			);
			if($this->Modelo_grupo->registrarGrupos($array)){
				$this->session->set_flashdata('registro','EL GRUPO SE HA REGISTRADO EXITOSAMENTE'); 
				$this->grupo();
			}else{
				echo 'no registrado';
			}
		}
	}
}