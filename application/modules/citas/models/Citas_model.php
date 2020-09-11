<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/01/2020
 * Time: 07:00 PM
 */

class Citas_model	extends CI_Model
{
	private $tbl_paciente;
	private $folio;

	public function __construct()
	{
		parent::__construct();
		$this->tbl_paciente	=	'paciente';
		$this->folio		=	'num_folio';
	}


	private function insert_data($data, $table, $id = FALSE)
	{
		$this->db->insert($table, $data);
		if ($this->db->affected_rows()) {
			if ($id) {
				return $this->db->insert_id();
			} else {
				return TRUE;
			}
		} else {
			return FALSE;
		}
	}


	public function save($data = FALSE)
	{

		//var_dump($data);
		$data_recipe = array(

		);
		 return $this->db->insert($this->tbl_paciente,$data);

	}


	/*
	 * Metodos donde se obtiene el folio maximo desde la BD
	 */

	public function get_folio($where = FALSE, $obj	=	FALSE)
	{

		$this->db->select_max($this->folio);
		$this->db->from($this->tbl_paciente);


		if ($where){
			$this->db->where($where);
		}

		$query = $this->db->get();


		if ($query->num_rows()	> 0){
			if ($obj){
				return $query->row();
			}else{
				return $query->result();
			}
		}else{

			return FALSE;
		}

	}


	public function get_all_folios()
	{
		#var_dump($data);
		return $this->get_folio();
	}



	protected function getValidate($tb, $get_data = FALSE, $where = FALSE, $return_value = 0)
	{

		$this->db->select($get_data);
		$this->db->from($tb);
		if ($where) {
			#	var_dump($where);
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

	public function validate($data = false)
	{
		$recipe = array(
			'numero_cuenta'	=>	$data,
		);
	#	var_dump($recipe);
		return $this->getValidate($this->tbl_paciente,'',$recipe);
	}


}
