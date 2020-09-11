<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 24/01/2020
 * Time: 10:51 AM
 */

class asignacion_model extends CI_Model
{
	private $tbl_user;
	private $tbl_asignacion	;
	private $tbl_paciente;
	private $tbl_carrera;

	public function __construct()
	{
		parent::__construct();

		$this->tbl_user 		= 'usuario';
		$this->tbl_asignacion	= 'psicologo_paciente';
		$this->tbl_paciente		=	'paciente';
		$this->tbl_carrera		=	'carrera';
	}


	public function get_id_user( $where = FALSE, $obj = FALSE)
	{
	#	var_dump($data);
		$this->db->select();

		$this->db->from($this->tbl_user);

	#	var_dump($where);
		if ($where) {

			$this->db->where($where);
		}

		$query  = $this->db->get();
	#	var_dump($query);

		if ($query->num_rows() >  0){
			if ($obj) {

				return $query->row();
			} else {

				return $query->result();
			}
		} else {

			return FALSE;
		}



	}


	public function asignacion_paciente($data_recipe = FALSE)
	{

		#var_dump($id_psicologo);
		#var_dump($data_recipe);

		$status	=	array(
			'status'		=>	$data_recipe['status']
		);

		$user	=	array(
			'id'		=>	$data_recipe['id_paciente']
		);

	#	var_dump($status);
	#	var_dump($user);
		$this->db->insert($this->tbl_asignacion,$data_recipe);
		$this->db->update($this->tbl_paciente,$status,$user);
	}




	public function get_all_pacientes($where = FALSE, $obj = FALSE)
	{

		/*
		$this->db->select('p'.'.'.'id','p'.'.'.'nombre','p'.'.'.'paterno',
			'p'.'.'.'meterno','p'.'.'.'carrera');
		*/


		$this->db->select('*');

		$this->db->from($this->tbl_paciente);
	#	$this->db->join('carrera','carrera.id='.$this->tbl_paciente.'.'.'id');
	#	$this->db->join($this->tbl_asignacion, $this->tbl_asignacion.'.'.'id = '.' '.$this->tbl_asignacion.'.'.'id_paciente');
		#$this->db->join($this->tbl_asignacion, $this->tbl_asignacion.'.'.'id_paciente ='.$this->tbl_paciente.'.'.'id');
	#	$this->db->join($this->tbl_carrera,$this->tbl_carrera.'.'.'id ='.$this->tbl_paciente.'.'.'carrera');
		#	var_dump($where);
		if ($where) {

			$this->db->where($where);
		}

		$query  = $this->db->get();
		#	var_dump($query);

		if ($query->num_rows() >  0){
			if ($obj) {

				return $query->row();
			} else {

				return $query->result();
			}
		} else {

			return FALSE;
		}
	}


	public function pacientes()
	{
		return $this->get_all_pacientes();
	}




	public function get_all_user($where = FALSE, $obj = FALSE)
	{
		$this->db->select();

		$this->db->from($this->tbl_user);

		#	var_dump($where);
		if ($where) {

			$this->db->where($where);
		}

		$query  = $this->db->get();
		#	var_dump($query);

		if ($query->num_rows() >  0){
			if ($obj) {

				return $query->row();
			} else {

				return $query->result();
			}
		} else {

			return FALSE;
		}
	}


	public function usuarios()
	{
		$recipe = array(
			'activo' => 1,
		);
		return $this->get_all_user($recipe);
	}




	public  function  get_all_asigancion($where = FALSE, $obj = FALSE)
	{
		#var_dump($where);
		$this->db->select();

	#	$this->db->from('paciente');
        #	$this->db->join('carrera','paciente.id	=	carrera.id','inner');


		$this->db->from($this->tbl_asignacion);
		$this->db->join($this->tbl_paciente, $this->tbl_paciente.'.id = '. $this->tbl_asignacion .' .id_paciente');

		#	var_dump($where);
		if ($where) {

			$this->db->where($where);
		}

		$query  = $this->db->get();
		#	var_dump($query);

		if ($query->num_rows() >  0){
			if ($obj) {

				return $query->row();
			} else {

				return $query->result();
			}
		} else {

			return FALSE;
		}

	}


	public function get_asignacion($id = FALSE)
	{
		#var_dump($id);
		$recipe = array(
			'id_psicologo' => $id,
		);
		#var_dump($recipe);
		return $this->get_all_asigancion($recipe);
	}




	/*
	 * Metodos para obtener los pacientes registrados.
	 *
	 */



	public function getCount($where = false, $obj = false)
	{
		#var_dump($where);
		$this->db->select();
		$this->db->from($this->tbl_paciente);
		$this->db->join($this->tbl_asignacion,$this->tbl_asignacion. '.id_paciente = '. $this->tbl_paciente.' .id');


		if ($where) {

			$this->db->where($where);
		}

		$query  = $this->db->get();
		#	var_dump($query);

		if ($query->num_rows() >  0){
			if ($obj) {

				return $query->row();
			} else {

				return $query->result();
			}
		} else {

			return FALSE;
		}
	}



	public function getUsersAsign($where = false, $obj = false)
	{
		$this->db->select();
		$this->db->from($this->tbl_paciente);
		$this->db->join($this->tbl_asignacion,$this->tbl_asignacion. '.id_paciente = '. $this->tbl_paciente.' .id');

		$condicion = array(
			'id_psicologo'	=>	$where
		);

		if ($condicion) {

			$this->db->where($condicion);
		}

		$query  = $this->db->get();
		#	var_dump($query);

		if ($query->num_rows() >  0){
			if ($obj) {

				return $query->row();
			} else {

				return $query->result();
			}
		} else {

			return FALSE;
		}

	}

}
