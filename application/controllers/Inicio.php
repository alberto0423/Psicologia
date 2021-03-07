<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 12/01/2020
 * Time: 01:20 AM
 */

class Inicio extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$models = array('Inicio_model');
		$this->load->models($models);
	}


	public function index()
	{


		$data = array(
			'img_header' => 'Hola',

		);


		$data = array(
			// Migas de pan
			'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
			// Contenido dinámico
			'content_main' => $this->load->view('templates/horizontal/main/content_main_view', $data, TRUE),
		);

		$data = array(
			// Tag title
			'title_lgral' => 'Bienvenido al sistema de Psicologia',
			// Archivos css
			'css' => FALSE,
			// Header de la página web
			'header' => $this->load->view('templates/horizontal/header_view', $data, TRUE),
			// Aside de la página web
			'aside' => $this->load->view('templates/horizontal/aside_view', $data, TRUE),
			// Main de la página web
			'main' => $this->load->view('templates/horizontal/main_view', $data, TRUE),
			// Footer de la página de web
			'footer' => $this->load->view('templates/horizontal/footer_view', $data, TRUE),
			// Archivos JS
			'js' => FALSE

		);

		$this->load->view('layout_general',$data);
	}


}
