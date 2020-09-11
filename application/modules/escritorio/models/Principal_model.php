<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/01/2020
 * Time: 04:10 PM
 */

class principal_model	extends CI_Model
{
	private $tbl_user;

	public function __construct()
	{
		parent::__construct();
		$this->tbl_user	=	'usuario';
	}


	public function save_user($data = FALSE)
	{
		var_dump($data);

	}

}
