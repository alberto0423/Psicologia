<?php


class Inicio extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Historial_model');
		Modules::run('login/Validaciones/exist_user_sess');

	}



	public function getSession()
	{
		$sesion = new Historial_model();
		#var_dump($sesion->getDataSession($this->session->userdata('usuario')['id']));
		return $sesion->getDataSession($this->session->userdata('usuario')['id']);
	}


	public function index()
	{
		//$recipe		=	$this->getSession();
		//var_dump($recipe);

		$data = array(
		#	var_dump($this->session->userdata('usuario')['id'])
			'sessions'	=>	$this->getSession(),
		);


		$data = array(
			// Migas de pan
			'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
			// Contenido dinámico
			'content_main' => $this->load->view('historial_view', $data, TRUE),
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
		$this->load->view('layout_general', $data);
	}

}
