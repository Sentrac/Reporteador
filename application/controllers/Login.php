<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

		parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');//ayudante de formularios
		$this->load->library('session');//libreria de sesión
        $this->load->model('Modelo_login');
        $this->load->model('Modelo_usuarios');
        $this->load->model('Modelo_encrypt');
        $this->load->library('form_validation');//libreria de validaciones
	}

	public function index(){        
		$this->load->view('interfaces/index');
    }
    public function proceso_login(){        
		$usuario=$this->input->post('usuario');
		$pass=$this->input->post('pass');
        
        $checklogin=$this->Modelo_login->login($usuario,$pass);

        if($checklogin){
            foreach ($checklogin as $row);
                $this->session->set_userdata('usuario',$row->usuario);
                $this->session->set_userdata('tipo_usuario',$row->tipo_usuario);
                $this->session->set_userdata('grupo',$row->fk_grupou);
                //USUARIO SUPERUSUARIO
                if($this->session->userdata('tipo_usuario')=="SU"){
                    redirect('Roles/usru');
                    
                }
                //USUARIO ADMINISTRADOR
                elseif($this->session->userdata('tipo_usuario')=="AD"){
                    redirect('Roles/usrd');
                }
                //USUARIO CONSULTAS
                elseif($this->session->userdata('tipo_usuario')=='CO'){
                    redirect('Roles/usro');
                }
            }
            else{
                $this->session->set_flashdata('error','USUARIO O CONTRASEÑA INCORRECTOS'); 
                redirect(base_url());
        }
    }
    public function perfil(){
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
        $this->load->view('interfaces/perfil',$this->data);
        $this->load->view('temps/footer');
    }
    function vistaPassword(){
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
        $this->load->view('interfaces/cambiar_pass',$this->data);
        $this->load->view('temps/footer');
    }
    //FUNCIÓN PARA CAMBIAR LA CONTRASEÑA DEL SUPER USUARIO PARA LA TABLA 'usuarios'
	function cambiarPassword(){
        $this->data['posts']=$this->Modelo_login->getRoles();
        $this->load->view('temps/header',$this->data); 
        //VALIDACIONES
        $this->form_validation->set_rules('actual_pswd','Contraseña actual','required');
        $this->form_validation->set_rules('new_pswd','Nueva contraseña','required|min_length[8]|max_length[16]|alpha_numeric_spaces');
        $this->form_validation->set_rules('repeat_pswd','Repetir contraseña','required|matches[new_pswd]|min_length[8]|max_length[16]|alpha_numeric_spaces');

        if($this->form_validation->run()==FALSE){
            $asd =  validation_errors();
            $this->session->set_flashdata('ErrorPass',$asd);
            redirect('/Login/vistaPassword');
        }else {
            $sql=$this->db->select("*")->from("usuarios")
                                        ->where("usuario",$this->session->userdata("usuario"))
                                        ->where("pass",$this->Modelo_encrypt->encrypt($this->input->post("actual_pswd")))->get();
            if($sql->num_rows()==1) {
                foreach ($sql->result() as $user) {
                    $db_password=$user->pass;
                    $db_user=$user->usuario;
                    $this->session->set_flashdata('pass', 'LA CONTRASEÑA SE HA CAMBIADO EXITOSAMENTE');
                    $fixed_pw=$this->Modelo_encrypt($this->input->post("new_pswd"));
                    $update=$this->db->query("UPDATE usuarios SET pass='$fixed_pw' WHERE usuario='$db_user'")or die(mysqli_error());
                    $this->vistaPassword();
                    redirect('Login/vistaPassword','refresh');
                }
            } else {
                $this->session->set_flashdata('passError', 'INGRESE SU CONTRASEÑA ACTUAL CORRECTAMENTE');
                redirect('Login/vistaPassword','refresh');
            }
        }
        $this->load->view('temps/footer');
	}
	public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    public function verificar($tkn,$iu) {
        if($this->Modelo_login->validTI($tkn,$iu) and $this->Modelo_login->verifTI($iu)){
            $data['fic'] = '1';
        } else {
            $data['fic'] = '2';
        }
        $this->load->view('interfaces/verifica',$data);
    }
    public function recover()
    {
        $this->load->view('interfaces/olvido_pass');
    }
    public function recoverpass()
    {
        function generarCodigo($longitud) {
			$key = '';
			$pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
			$max = strlen($pattern)-1;
			for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
			return $key;
		}
        $this->form_validation->set_rules('email', 'Correo', 'trim|required|valid_email');
        if($this->form_validation->run()==FALSE){
            $this->recover();
        } else {
            $correo = $this->input->post('email');
            $dat = $this->Modelo_login->validMail($correo);
            if ($dat != false){
                $iu = $dat[0]->idusuarios;
                $this->load->library('email');

                $url = base_url();
                $cod = generarCodigo(64);
                
                $this->email->from('warlab2019@gmail.com', 'Warriors Labs');
                $this->email->to($correo);
                $this->email->subject('Recuperar cuenta de WReporter');
                $this->email->message(
					'<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
					<tr>
						<td align="center" style="padding: 0px 0 40px 0;">
							<img src="https://wreporter.warriorslabs.com:82/assets/images/email.jpg" width="100%" alt="" style="display: block;">
						</td>
					</tr>
					<tr>
					   <td style="padding: 60px 50px 60px 50px;color:#000;">
                            <h1>Recuperar cuenta de WReporter!</h1>
                            Para recuperar su cuenta, haga clic en el siguiente botón para continuar con la reuperacion de su cuenta.
                            <br>
                            <strong>Tenga en cuenta que este link solo servira una vez!</strong>
							<br><br>
							<center>
								<a href="'.$url.'Login/recover_pass/'.$cod.'/'.$iu.'">
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
									box-shadow: 0 9px #999;" class="button">Recuperar cuenta</button>
								</a>
							</center>
						</td>
					</tr>
					<tr>
						<td align="center" style="padding: 40px 0 0px 0;">
							<img src="https://wreporter.warriorslabs.com:82/assets/images/footer.png" width="100%" style="display: block;">
						</td>
					</tr>
					</table>'
                );
                $this->Modelo_usuarios->regTkn($cod,$iu,'MP');
                $it = $this->db->insert_id();
                if($this->email->send()){
					$this->session->set_flashdata('recuperar_pass','Se ha enviado un correo a su cuenta.');
				    redirect('/Login/recover','refresh');
				} else {
                    $this->Modelo_usuarios->delTk($it);
                    $this->session->set_flashdata('recuperar_passE','No se ha podido enviar el correo '.$correo.', por favor vuelva a intentar.');
				    redirect('/Login/recover','refresh');
				}
            } else {
                $this->session->set_flashdata('recuperar_passE','El correo '.$correo.', esta incorrecto o no esta registrado. Verifica que este escrito correctamente.');
				redirect('/Login/recover','refresh');
            }
        }
    }
    public function recover_pass($tkn,$iu)
    {
        if($this->Modelo_login->valTKOP($tkn,$iu)) {
            $d['iu'] = $iu;
            $d['tkn']= $tkn;
            $this->load->view('interfaces/new_pass',$d);
        } else {
            $this->load->view('interfaces/verificaMail');
        }
    }
    function change_pass()
    {
        $this->form_validation->set_rules('pass','Nueva contraseña','required|min_length[8]|max_length[16]|alpha_numeric_spaces');
        $this->form_validation->set_rules('pass2','Repetir contraseña','required|matches[pass]|min_length[8]|max_length[16]|alpha_numeric_spaces');
        $pw = $this->Modelo_encrypt->encrypt($this->input->post("pass2"));
        $id = $this->input->post("idu");
        $tkn = $this->input->post("tkn");
        
        if($this->form_validation->run()==FALSE){
            $asd =  validation_errors();
            $this->session->set_flashdata('validate',$asd);    
            redirect('/Login/recover_pass/'.$tkn.'/'.$id);
        } else {
            if($this->Modelo_login->chanTKOP($tkn,$id) and $this->Modelo_login->changePass($pw,$id)) {
                $this->session->set_flashdata('chanPass','Se cambio su contraseña correctamente, es hora de iniciar sesión.');
                redirect('Login','refresh');
            }
        }
    }
    function servstat()
    {
        $this->form_validation->set_rules('frame','IFrame','required');
        
        if($this->form_validation->run()==FALSE){
            $this->data['posts']=$this->Modelo_login->getRoles();
            $this->data['frame']=$this->Modelo_login->getFrame();
            $this->load->view('temps/header',$this->data); 
            $this->load->view('interfaces/interfaz_susuario',$this->data);
            $this->load->view('temps/footer');
        } else {
            $frm = $this->input->post('frame',FALSE);
            $dts = array(
                'iframe' => $frm
            );
            if($this->Modelo_login->insertFrame($dts)){
                redirect('/Roles/usru','refresh');
            }
        }
    }
    function cmd()
    {
        echo exec("whoami");
        echo "<br>";
        $command = "python /var/www/html/Reporteador/assets/Docker.py 2>&1";
		echo exec($command);
	}
	function base()
	{
		$password_plain = 'Asdf.1234';
		echo $password_plain . "<br>";
		
		$password_encrypted = $this->Modelo_encrypt->encrypt($password_plain);
		echo $password_encrypted . "<br>";

		$password_decrypted = $this->Modelo_encrypt->decrypt($password_encrypted);
		echo $password_decrypted . "<br>";

		$checklogin = $this->Modelo_login->login('admin@gmail.com','Asdf.1234');
		var_dump($checklogin);
	}
}
