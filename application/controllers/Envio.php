<?php


class Envio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('contacto_view');
	}


	public function enviar()
	{
		$this->load->library('email');

		$config[''];
	}

}
