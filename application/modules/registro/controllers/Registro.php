<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 15/01/2020
 * Time: 01:31 AM
 */


class Registro extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$models = array('Registro_model');
		$helpers = array('multi_options_helper');
		$this->load->model($models);
		$this->load->helper($helpers);
		Modules::run('login/Validaciones/exist_user_sess');

	}


	public function index()
	{
		$user = new registro_model();

		#var_dump($this->session->userdata('usuario'));

		if ($this->session->userdata('usuario')['nivel'] == 1) {


			if ($this->input->server('REQUEST_METHOD') == "POST") {
				$html = '';


				$save = array(
					'nombre' => $this->input->post('name'),
					'paterno' => $this->input->post('paterno'),
					'materno' => $this->input->post('materno'),
					'username' => $this->input->post('alias'),
					'password' => $this->input->post('pass'),
					#	'confirm_pass'		=>	$this->input->post('confirm_pass'),
				);


				if ($user->save_user($save)) {
					echo 'Estas por guardar tus datos';

				} else {
					redirect('registro/registro');
				}


				#	var_dump($save);

			} else {

				echo validation_errors();
			}

			$data = array(
				'body_color' => 'fondo-inicio-docentes',
				'card_color_docentes' => 'background-login-docentes',
				'shadow' => 'docentes-shadow',
				# 		'hdr_img' 				=> '<img src="' . base_url() . 'assets/heart/iconos/LogoSocratesDocentes.png" alt="IRC" class="img-fluid icons">',
				'hdr_link_home' => '<b>Programa de acceso <abbr title="Instituto Rosario Castellanos"><a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio" target="_blank">FES Aragon</a></abbr></b>',
				'btn' => '<button type="submit" class="btn bg-gradient-gray"> Accesar</button>',
				'img_l' => '<img src="assets/heart/img/logos/fes_logo_mini.png"  class="img-fluid h-logo">',
				'img_r' => '<img src="assets/heart/img/logos/unam_logo.png"  alt="" class="img-fluid new-logo">',
				't_header' => '<p class="col-12 col-12 text-white header-t">UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO</p>',
				't2_header' => '<p class="col-12 col-12 text-white header-t2">FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN</p>',
				't3_header' => '<p class="col-12 col-8 text-white offset-1 header-t3">PROGRAMA DE ASESORÍA PSICOLÓGICA </p>'

			);


			$data = array(
				// Migas de pan
				'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
				// Contenido dinámico
				'content_main' => $this->load->view('registro_form', $data, TRUE),
			);

			$data = array(
				// Tag title
				'title_lgral' => 'Programa de Asesoría Psicopedagógica',
				// Archivos css
				'css' => FALSE,
				// Header de la página web
				'header' => $this->load->view('templates/horizontal/header_view', $data, TRUE),
				// Aside de la página web
				'aside' => $this->load->view('templates/horizontal/aside_view', $data, TRUE),
				// Menu de toda la paqgina
				'menu' => $this->load->view('templates/horizontal/menu_view', $data, TRUE),
				// Main de la página web
				'main' => $this->load->view('templates/horizontal/main_view', $data, TRUE),
				// Footer de la página de web
				'footer' => $this->load->view('templates/horizontal/footer_view', $data, TRUE),
				// Archivos JS
				'js' => FALSE

			);




		}elseif ($this->session->userdata('usuario')['nivel'] == 3){
			#var_dump($this->session->userdata('usuario')['nivel'] == 3);

			if ($this->input->server('REQUEST_METHOD') == "POST") {
				$html = '';

				$password	  = $this->input->post('pass');
				$confirm_pass = $this->input->post('confirm_pass');


				if ($password == $confirm_pass){
					$save = array(
						'nombre' 			=> $this->input->post('name'),
						'paterno' 			=> $this->input->post('paterno'),
						'materno' 			=> $this->input->post('materno'),
						'username' 			=> $this->input->post('alias'),
						'password' 			=> password_hash($this->input->post('pass'),PASSWORD_BCRYPT),
						'nivel'				=> $this->input->post('user'),
						'activo'			=>	$this->input->post('active')

					);

				#	var_dump($save);
					$user->save_user($save);
					redirect('escritorio/principal');

				}else{
					redirect('registro/registro');
				}




				$pass = password_hash($confirm_pass,PASSWORD_BCRYPT);

				/*
				if ($save['password']	==	$confirm_pass){

					$user->save_user($save);redirect('registro/registro');
				}else{
					redirect('registro/registro');
				}
				*/

				/*
				if ($user->save_user($save)) {
					echo 'Estas por guardar tus datos';

				} else {
					redirect('registro/registro');
				}
*/




			} else {

				echo validation_errors();
			}


			$userLevel = array(
				1 => user_leve(),
				2 => user_active(),
			);


		#	var_dump($userLevel);
			$data = array(
				'multi'	=>  ((isset($userLevel))? $userLevel : "Error"),

			);


			$data = array(
				// Migas de pan
			#	'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
				// Contenido dinámico
				'content_main' => $this->load->view('registro_form', $data, TRUE),
			);

			$data = array(
				// Tag title
				'title_lgral' => 'Programa de Asesoría Psicopedagógica',
				// Archivos css
				'css' => FALSE,
				// Header de la página web
				'header' => $this->load->view('templates/horizontal/header_view', $data, TRUE),
				// Aside de la página web
				'aside' => $this->load->view('templates/horizontal/aside_view', $data, TRUE),
				// Menu de toda la paqgina
				'menu' => $this->load->view('templates/horizontal/menu_view', $data, TRUE),
				// Main de la página web
				'main' => $this->load->view('templates/horizontal/main_view', $data, TRUE),
				// Footer de la página de web
				'footer' => $this->load->view('templates/horizontal/footer_view', $data, TRUE),
				// Archivos JS
				'js' => FALSE

			);


		}

		$this->load->view('layout_general', $data);
	}
}
