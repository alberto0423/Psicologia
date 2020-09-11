<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/01/2020
 * Time: 12:51 AM
 */

class registro_model extends CI_Model
{
	private $tbl_user;

	public function __construct()
	{
		parent::__construct();
		$this->tbl_user	=	'usuario';
	}


	public function save_user($data = FALSE,$id = FALSE ,$tbl_default = FALSE)
	{
#		var_dump($data['pas']);


		if ($tbl_default) {
			$this->db->insert($this->tbl_user, $data);
		}


		$this->db->insert($this->tbl_user, $data);


		if ($this->db->affected_rows() > 0 ) {
			if ($id) {
				return $this->db->insert_id();
			} else  {
				return TRUE;
			}
		} else {
			return FALSE;
		}


	}

}
