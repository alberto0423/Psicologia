<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 24/02/2020
 * Time: 05:26 PM
 */


class Asignados extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$models = array('Asignacion_model');
		$libreria = array('ErrorMsg');
		$helpers = array('calc_age_helper');

		$this->load->models($models);
		$this->load->library($libreria);
		$this->load->helper($helpers);
		Modules::run('login/Validaciones/exist_user_sess');

	}




	public function current_asign()
	{
		$i = 1;
		$asignacion = new Asignacion_model();
	#	var_dump($this->session->userdata('usuario')['id']);
		if (is_array($asignacion->get_asignacion($this->session->userdata('usuario')['id'])) AND $asignacion->get_asignacion($this->session->userdata('usuario')['id']) != NULL) {

			return  $asignacion->get_asignacion($this->session->userdata('usuario')['id']);
		}else{
			return  0;
		}

	#	var_dump($all_asing);

		#return isset($all_asing)? $all_asing :'Nada';
	}






	public function index ()
	{

		$asing  = $this->current_asign();
	#	var_dump($this->current_asign());
	#	var_dump($asing);


		$data = array(

		#	'pacientes' 	=> $all,
			'asignacion'	=> $asing,
			'asignados' 	=> $this->session->userdata('usuario')['id'],

		#	var_dump($this->session->userdata('usuario')['id'])
		);


		$data = array(
			// Migas de pan
			'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
			// Contenido dinámico
			'content_main' => $this->load->view('asignados_view', $data, TRUE),
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
