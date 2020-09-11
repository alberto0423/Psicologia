<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 12/01/2020
 * Time: 01:20 AM
 */

class Inicio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	#	$models = array('inicio_model');
	#	$this->load->models($models);
	}



	private function form_acceso($user_type = FALSE)
	{
		$inicio_model = new inicio_model();
		$email = $this->security->sanitize_filename(html_escape($this->input->post('email')));

		switch ($user_type){
			case 'admin':
				if ($this->form_validation->run('acceso')){
					$this->session->set_userdata('admin',$email);
					return TRUE;
				}else{
					return FALSE;
				}
				break;

			case 'paciente':
				if($this->form_validation->run('acceso')){
					$this->session->set_userdata('paciente',$email);
					return TRUE;
				}else{
					return FALSE;
				}
				break;

			default:
				return FALSE;
				break;
		}

	}




	public function index()
	{


		$data = array(

		//	'header'	=>	$this->load->view('inicio/main_view'),


		);


		$data = array(
			// Migas de pan
			'breadcums' 	=> $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
			// Contenido dinámico
			'content_main' 	=> $this->load->view('citas/citas_view', $data, TRUE),
		);

		$data = array(
			// Tag title
			'title_lgral' 	=> 'Programa de Asesoría Psicopedagógica',
			// Archivos css
			'css' 			=> FALSE,
			// Header de la página web
			'header' 		=> $this->load->view('templates/horizontal/header_view', $data, TRUE),
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

		$this->load->view('layout_general',$data);
	}


}
