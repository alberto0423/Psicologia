<?php


class Session_model extends CI_Model
{

	private $tbl_session;

	public function __construct()
	{
		parent::__construct();
		$this->tbl_session	=	'sesion';
	}


	public function saveDataSession($data)
	{
		#var_dump($data);
		$this->db->insert($this->tbl_session, $data);
	}


	public function getUsersAppoinment($where = false, $obj = false)
	{
		$this->db->select();
		$this->db->from($this->tbl_session);
#		$this->db->join($this->tbl_paciente, $this->tbl_paciente.'.id = '.$this->tbl_session.' .id_paciente');

		$concidion	=	array(
			'id_psicologo'	=>	$where
		);

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


	public function getAppoinment($data = false)
	{
		var_dump($data);
		$sessionUser = array(
		'id_paciente'		=>	$data
		);
		return $this->getUsersAppoinment($sessionUser);
	}

}
