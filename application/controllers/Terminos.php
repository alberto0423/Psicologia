<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 23/01/2020
 * Time: 07:35 AM
 */

class terminos	extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$helpers	=	array('multi_options');
		$this->load->helper($helpers);
	}


	public function index()
	{
		$term = terminos();



		$data = array(
			'body_color' 			=> 'fondo-inicio-docentes',
			'card_color_docentes' 	=> 'background-login-docentes',
			'shadow' 				=> 'docentes-shadow',
			# 		'hdr_img' 				=> '<img src="' . base_url() . 'assets/heart/iconos/LogoSocratesDocentes.png" alt="IRC" class="img-fluid icons">',
			'hdr_link_home' 		=> '<b>Programa de acceso <abbr title="Instituto Rosario Castellanos"><a href="https://www.aragon.unam.mx/fes-aragon/#!/inicio" target="_blank">FES Aragon</a></abbr></b>',
			'btn' 					=> '<button type="submit" class="btn bg-gradient-gray"> Accesar</button>',
			'img_l' 				=> '<img src="assets/heart/img/logos/fes_logo_mini.png"  class="img-fluid h-logo">',
			'img_r' 				=> '<img src="assets/heart/img/logos/unam_logo.png"  alt="" class="img-fluid new-logo">',
			't_header' 				=> '<p class="col-12 col-12 text-white header-t">UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO</p>',
			't2_header' 			=> '<p class="col-12 col-12 text-white header-t2">FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN</p>',
			't3_header'				=> '<p class="col-12 col-8 text-white offset-1 header-t3">PROGRAMA DE ASESORÍA PSICOLÓGICA </p>',
			'terminos' =>	$term['terminos'],
		);


		$data = array(
			// Migas de pan
			'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
			// Contenido dinámico
			'content_main' => $this->load->view('terminos/terminos_view', $data, TRUE),
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
