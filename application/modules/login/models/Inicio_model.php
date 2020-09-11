<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 12/01/2020
 * Time: 02:17 AM
 */

class Inicio_model extends CI_Model
{
	private $tb;
	private $user_tbl;

	public function __construct()
	{
		parent::__construct();
		$this->tb = 'password';
		$this->user_tbl = 'usuario';
	}


	public function get_general($where = FALSE, $obj = FALSE)
	{

		$this->db->select();

		$this->db->from($this->user_tbl);
		if ($where) {


			$this->db->where($where);
		}

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			if ($obj) {

				return $query->row();
			} else {

				return $query->result();
			}
		} else {

			return FALSE;
		}

	}


	public function get_hash_pass($where = FALSE, $obj = FALSE)
	{

		$this->db->select();
		$this->db->from($this->user_tbl);

		if ($where) {
			$this->db->where($where);
		}

		$query = $this->db->get();


		if ($query->num_rows() > 0) {
			if ($obj) {
				return $query->row();
			} else {
				return $query->result();
			}
		} else {

			return FALSE;
		}


	}

	public function pass_users($data)
	{

		$datos = array(
			'id'	=>	$data,
		);
		var_dump($datos);
		return $this->get_hash_pass($datos);
	}



	protected function get_data_all($tb, $get_data = FALSE, $where = FALSE, $return_value = 0)
	{
		$this->db->select($get_data);
		$this->db->from($tb);
		if ($where) {
			$this->db->where($where);
		}
		$query  = $this->db->get();

		if ($query->num_rows() > 0) {
			if ($return_value == 0) {
				return $query->row();
			} else if ($return_value == 1) {
				return $query->result();
			} else {
				return TRUE;
			}
		} else {
			return FALSE;
		}
	}




	public function validate_user($user = FALSE)
	{
			#var_dump($user);

		return $this->get_data_all($this->user_tbl, '*', $user);

	}


	public function get_users()
	{
		$data = array();


		/*
                switch ($recipe_u)
                {
                    case 'root':
                        if ($this->user_tbl){
                            $data	=	array(
                                'id' =>	1,
                            );
                            return $this->get_general($data);
                        }
                        break;


                    case 'admin':

                        var_dump($recipe_u);
                        if ($this->user_tbl){
                            $data	=	array(
                                'id'	=>	2,

                            );
                            return $this->get_general($data);
                        }
                        break;

                    default:
                        return FALSE;
                        break;



                }
        */


		return $this->get_general($data);
	}


	public function get_sesion()
	{

	}

}
