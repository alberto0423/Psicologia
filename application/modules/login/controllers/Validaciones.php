<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 24/01/2020
 * Time: 07:57 PM
 */

class Validaciones	extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();


	}

	public function exist_user_sess()
	{
		if($this->session->userdata('usuario') == NULL ||$this->session->userdata('usuario') == FALSE ){
		#	var_dump($this->session->userdata());
			redirect('login/login');
		}

	}


	public function index()
	{
		redirect('login/login');




	}

}
