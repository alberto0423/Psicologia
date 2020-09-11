<?php


class Historial_model extends CI_Model
{
	private $tbl_session;
	private $tbl_paciente;

	public function __construct()
	{
		parent::__construct();
		$this->tbl_session 	= 	'sesion';
		$this->tbl_paciente	=	'paciente';
	}

	public function getDataSession($where = false, $obj = false)
	{
		$this->db->select();
		$this->db->from($this->tbl_session);
		$this->db->join($this->tbl_paciente, $this->tbl_paciente.'.id = '.$this->tbl_session.' .id_paciente');

		$concidion	=	array(
			'id_psicologo'	=>	$where
		);

		if ($concidion){
			$this->db->where($concidion);
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

}
