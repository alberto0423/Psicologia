<?php

/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 13/01/2020
 * Time: 07:44 PM
 */
class Login extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
			$models = array('Inicio_model');
		$this->load->models($models);
	}


	public function verify()
	{
		$j =0;
		$log = new Inicio_model();
		#var_dump($log->pass_users());

		#var_dump($this->session->userdata("usuario"));
		#var_dump($log->pass_users(52));

		/*
		if (is_array($log->pass_users(19)) AND $log->pass_users(19) != NULL){

			foreach ($log->pass_users(19) as $pass_user) {
				$recipe_pass[$j++] = [
					'pass'	=>	$pass_user->password,
				];
			}

		}
		*/

		if ($this->form_validation->run('acceso')) {

			$pass =	$this->input->post('password');

			$data = array(
				'username' => $this->input->post('email'),
				#'password' => $this->input->post('password'),
			);
			#	var_dump($data);
			$result	=	$log->validate_user($data);
				# var_dump($result->password);




			if (!$final = password_verify($pass,$result->password)){
				redirect('login');
				#echo "Error";

			}else{

				$recipe = array(
					'id'		=>	$result->id_psicologo,
					'nombre'	=>	$result->nombre,
					'paterno'	=>	$result->paterno,
					'password'	=>	$result->password,
					'user'		=>	$result->username,
					'activo'	=>	$result->activo,
					'nivel'		=>	$result->nivel,
					'session'		=>	TRUE,
				);
				#var_dump($recipe);
				#echo "Bien";
				$this->session->set_userdata('usuario',$recipe);
				redirect('escritorio/principal');

			}



		}

	}


	public function exist_user_sess()
	{
		if($this->session->userdata('usuario') == NULL ||$this->session->userdata('usuario') == FALSE ){
			#var_dump($this->session->userdata());
			redirect('login/principal');
		}

	}


	public function index()
	{
		$log = new Inicio_model();
		$this->verify();

		if ($this->session->userdata("sesion")){

				redirect(base_url(). 'principal');
		}else {
			#	$this->session->unset_userdata('sesion');
			#	redirect(base_url().'login');

			$data = array(
				'body_color' => 'fondo-inicio-docentes',
				'card_color_docentes' => 'background-login-docentes',
				'shadow' => 'docentes-shadow',
				# 		'hdr_img' 				=> '<img src="' . base_url() . 'assets/heart/iconos/LogoSocratesDocentes.png" alt="IRC" class="img-fluid icons">',
				'hdr_link_home' => '<b>Acceso para administradores</b>',
				'btn' => '<button type="submit" class="btn bg-gradient-gray"> Accesar</button>',



			);


			$data = array(
				// Migas de pan
				'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
				// Contenido dinámico
				'content_main' => $this->load->view('main_login_view', $data, TRUE),
			);

			$data = array(
				// Tag title
				'title_lgral' 	=> 'Programa de Asesoría Psicopedagógica',
				// Archivos css
				'css' 			=> FALSE,
				// Header de la página web
				'header' 		=> $this->load->view('inicio/main_view', $data, TRUE),
				// Aside de la página web
				'aside' 		=> $this->load->view('templates/horizontal/aside_view', $data, TRUE),
				#	'menu' => $this->load->view('templates/horizontal/menu_view',$data,TRUE),
				// Main de la página web
				'main' 			=> $this->load->view('templates/horizontal/main_view', $data, TRUE),
				// Footer de la página de web
				'footer' 		=> $this->load->view('templates/horizontal/footer_view', $data, TRUE),
				// Archivos JS
				'js' 			=> FALSE

			);


			$this->load->view('layout_general', $data);
		}

	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Inicio');
	}
}
