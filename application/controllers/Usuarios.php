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
		$this->data['usuarios']=$this->Modelo_usuarios->getUsuarios();
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
		function generarCodigo($longitud) {
			$key = '';
			$pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
			$max = strlen($pattern)-1;
			for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
			return $key;
		}
		//VALIDACIONES DE CAMPOS
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric|exact_length[10]');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|valid_email');
		$this->form_validation->set_rules('fk_grupou', 'Grupo', 'trim|required');
		$this->form_validation->set_rules('tipo_usuario', 'Rol', 'required');
		$this->form_validation->set_rules('pass', 'Contraseña', 'required|min_length[8]|max_length[16]|alpha_numeric_spaces');
		$this->form_validation->set_rules('repeat_pswd', 'Confirmar Contraseña', 'required|matches[pass]');

		if($this->form_validation->run() == FALSE){
           
            $this->formulario_usuarios();

        }else{
			$nombre = $this->input->post('nombre');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
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
				'usuario' => $user,
				'pass' => md5($psw),
				'tipo_usuario' => $tipouser,
				'fk_grupou' => $grupo,
				'user_session' => $this->session->userdata("usuario")
			);

			if($tipouser == 'SU'){
				$tps = 'Super Administrador';
			} elseif ($tipouser == 'AD') {
				$tps = 'Administrador';
			} elseif ($tipouser == 'CO') {
				$tps = 'Consultor';
			}
			
			$this->load->library('email');

			$url = base_url();
			$cod = generarCodigo(64);
			
			$this->email->from('warlab2019@gmail.com', 'Warriors Labs');
			$this->email->to($d['usuario']);
			$this->email->subject('Cuenta de WReporter');

			if($this->Modelo_usuarios->registrarUsuarios($d)){
				$ui =  $this->db->insert_id();
				$this->email->message(
					'<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
					<tr>
						<td align="center" style="padding: 0px 0 40px 0;">
							<img src="http://189.204.31.154:81/Reporteador/assets/images/email.jpg" width="100%" alt="" style="display: block;">
						</td>
					</tr>
					<tr>
					   <td style="padding: 60px 50px 60px 50px;color:#000;">
							<h1>Hola '.$d['nombre'].'!</h1><br>
							Nombre : <strong>'.$d['nombre'].' '.$d['apellidos'].'</strong>.<br>
							Telefono : <strong>'.$d['telefono'].'</strong>.<br>
							Usuario : <strong>'.$d['usuario'].'</strong>.<br>
							Contraseña : <strong>'.$psw.'</strong>.<br>
							Nivel de usuario : <strong>'.$tps.'</strong>.<br>
							Para comenzar a usar su cuenta de WReporter, haga clic en el botón para confirmar su dirección de correo electrónico:
							<br><br>
							<center>
								<a href="'.$url.'Login/verificar/'.$cod.'/'.$ui.'">
									<button style="display: inline-block;
									padding: 10px 20px;
									font-size: 14px;
									cursor: pointer;
									text-align: center;
									text-decoration: none;
									outline: none;
									color: #fff;
									background-color: #DD333B;
									border: none;
									border-radius: 15px;
									box-shadow: 0 9px #999;" class="button">Confirmar correo electrónico</button>
								</a>
							</center>
						</td>
					</tr>
					<tr>
						<td align="center" style="padding: 40px 0 0px 0;">
							<img src="http://189.204.31.154:81/Reporteador/assets/images/footer.png" width="100%" style="display: block;">
						</td>
					</tr>
					</table>'
				);
				$this->Modelo_usuarios->regTkn($cod,$ui,'VF');
				$it = $this->db->insert_id();
				if($this->email->send()){
					// echo 'enviado'.'<br>';
					$this->session->set_flashdata('registro','EL USUARIO SE HA REGISTRADO ');
					redirect('/Usuarios/usuarios','refresh');
				} else {
					$this->Modelo_usuarios->delTkUS($ui,$it);
					$this->session->set_flashdata('usuario_existe','EL USUARIO NO SE HA REGISTRADO, VUELVA A INTENTAR');
					redirect('/Usuarios/usuarios','refresh');
				}
			}else{
				$this->session->set_flashdata('usuario_existe','EL USUARIO YA EXISTE, ELIGA OTRO USUARIO');
				redirect('/Usuarios/usuarios','refresh');
			}
		}
	}
	public function registrar_usuarios_admin(){		
		//VALIDACIONES DE CAMPOS
		$this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|alpha_dash');
		$this->form_validation->set_rules('telefono', 'Telefono', 'trim|required|numeric|exact_length[10]');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|valid_email');
		$this->form_validation->set_rules('tipo_usuario', 'Rol', 'required');
		$this->form_validation->set_rules('pass', 'Contraseña', 'required|min_length[8]|max_length[16]|alpha_numeric_spaces');
		$this->form_validation->set_rules('repeat_pswd', 'Confirmar Contraseña', 'required|matches[pass]');
		
		$idusuario = $this->input->post('idusuarios');
		$idgrupo = $this->input->post('fk_grupou');

		if($this->form_validation->run() == FALSE){
			$error_usuario =  validation_errors();
            $this->session->set_flashdata('ErrorUsuario',$error_usuario);
            redirect('/Usuarios/formulario_usuarios?idusuarios='.$idusuario,'refresh');

        }else{
			$nombre = $this->input->post('nombre');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
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
				'usuario' => $user,
				'pass' => md5($psw),
				'tipo_usuario' => $tipouser,
				'fk_grupou' => $grupo,
				'user_session' => $this->session->userdata("usuario")
			);
			if($this->Modelo_usuarios->registrarUsuarios($d)){
				$this->session->set_flashdata('registro','EL USUARIO SE HA REGISTRADO EXITOSAMENTE'); 
				redirect('/Usuarios/usuarios?fk_grupou='.$idgrupo);
			}else{
				$this->session->set_flashdata('usuario_existe','EL USUARIO YA ESXISTE, VUELVA A INTENTAR');
				redirect('/Usuarios/formulario_usuarios?idusuarios='.$idusuario,'refresh'); 
			}
		}
	}
	public function EliminarUsuario($id){
		$this->Modelo_usuarios->EliminardatosUsuario($id);
		$response['status']  = 'success';
		$response['message'] = 'Registro eliminado correctamente ...';
		echo json_encode($response);
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
			$row[] = $person->usuario;

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
	public function editusuarioAdmin($id)
	{
		$dts = $this->Modelo_usuarios->traerdatosUsuariosAdmin($id);
		echo json_encode($dts);
	}
	public function actusuari()
	{
		$ids = $this->input->post('idus');
		$nom = $this->input->post('Nombre');
		$ape = $this->input->post('Apellidos');
		$tel = $this->input->post('Telefono');
		$rol = $this->input->post('Rol');
		$grp = $this->input->post('Grupo');
		$nom = strtoupper($nom);
		$ape = strtoupper($ape);
	
		$array = array(
			'nombre' => $nom,
			'apellidos' => $ape,
			'telefono' => $tel,
			'tipo_usuario' => $rol,
			'fk_grupou' => $grp,
			'user_session' => $this->session->userdata("usuario")
		);

		// echo json_encode($array);
		
		if($this->Modelo_usuarios->updateUsuarios($array,$ids)){
			$this->session->set_flashdata('editar','EL USUARIO SE HA MODIFICADO'); 
			// redirect('/Usuarios/usuarios','refresh');
		}else{
			echo 'no registrado';
		}
	}
	function updpass()
	{
		$this->form_validation->set_rules('new_pass', 'Nueva contraseña', 'required|min_length[8]|max_length[16]|alpha_numeric_spaces');
		$this->form_validation->set_rules('new_pass2', 'Repetir nueva contraseña', 'required|matches[new_pass]');

		if($this->form_validation->run() == FALSE){
			echo validation_errors();
        }else{
			$ids = $this->input->post('idps');
			$np2 = $this->input->post('new_pass2');

			$this->load->library('email');

			$list = $this->Modelo_usuarios->getContactos($ids);
	
			$data = array();
			foreach ($list as $person) {
				$row = array();
				$row[] = $person->nombre;
				$row[] = $person->usuario;
			}

			$url = base_url();
			
			$this->email->from('warlab2019@gmail.com', 'Warriors Labs');
			$this->email->to($row[1]);
			$this->email->subject('Cuenta de WReporter');

			$this->email->message(
				'<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
				<tr>
					<td align="center" style="padding: 0px 0 40px 0;">
						<img src="http://189.204.31.154:81/Reporteador/assets/images/email.jpg" width="100%" alt="" style="display: block;">
					</td>
				</tr>
				<tr>
					<td style="padding: 60px 50px 60px 50px;color:#000;">
						<h1>Hola '.$row[0].'!</h1>
						<h3>Se ha cambiado la contraseña de su cuenta de WReporter!</h3><br>
						Inicia sesion con tu usuario y con la contraseña siguiente.<br> 
						Contraseña : <strong>'.$np2.'</strong>.<br>
						<br><br>
						<center>
							<a href="'.$url.'">
								<button style="display: inline-block;
								padding: 10px 20px;
								font-size: 14px;
								cursor: pointer;
								text-align: center;
								text-decoration: none;
								outline: none;
								color: #fff;
								background-color: #DD333B;
								border: none;
								border-radius: 15px;
								box-shadow: 0 9px #999;" class="button">Iniciar sesion</button>
							</a>
						</center>
					</td>
				</tr>
				<tr>
					<td align="center" style="padding: 40px 0 0px 0;">
						<img src="http://189.204.31.154:81/Reporteador/assets/images/footer.png" width="100%" style="display: block;">
					</td>
				</tr>
				</table>'
			);

			if($this->Modelo_usuarios->UpdPass($ids,$np2) and $this->email->send()){
				echo true;
			} else {
				echo false;
			}
		}	
	}
}
