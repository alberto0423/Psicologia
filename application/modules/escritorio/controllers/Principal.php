<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 21/01/2020
 * Time: 04:09 PM
 */
class Principal	extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$models = array('Principal_model', 'Asignacion/asignacion_model','Sesiones/Session_model');
		$this->load->models($models);

	 Modules::run('login/Validaciones/exist_user_sess');

		/*
		if (!$this->session->userdata('sesion')){
			redirect('login');
		}else{
			redirect('escritorio/principal');
		}
		*/

	}


	public function counterUsers()
	{
		$users 	=	new Asignacion_model();
		if (is_array($users->getCount()) AND $users->getCount() != NULL)
		{
			$totalUsers	=	$users->getCount();
			$k	=	0;
			foreach ($totalUsers as $total) {
			$data[$k++]	=	[
				'nombre'		=>	$total->nombre,
				'paterno'		=>	$total->paterno,
				'materno'		=>	$total->materno,
				'nacimiento'	=>	$total->fecha_nacimiento,
				'genero'		=>	$total->genero,
				'telefono'		=>	$total->telefono,
				'celular'		=>	$total->celular,
				'email'			=>	$total->correo_electronico,
				'direccion'		=>	$total->direccion,
				'carrera'		=>	$total->carrera,
				'semestre'		=>	$total->semestre,
				'cuenta'		=>	$total->numero_cuenta,
				'turno'			=>	$total->turno,
				'promedio'		=>	$total->promedio,

			];

				}

				return count($data);
		}

		#	var_dump(count($totalUsers));

	}

	public function getAllUsers()
	{
		$users 	=	new Asignacion_model();
		if (is_array($users->getCount()) AND $users->getCount() != NULL)
		{
			$totalUsers	=	$users->getCount();
			$k	=	0;
			foreach ($totalUsers as $total) {
				$data[$k++]	=	[
					'nombre'		=>	$total->nombre,
					'paterno'		=>	$total->paterno,
					'materno'		=>	$total->materno,
					'nacimiento'	=>	$total->fecha_nacimiento,
					'genero'		=>	$total->genero,
					'telefono'		=>	$total->telefono,
					'celular'		=>	$total->celular,
					'email'			=>	$total->correo_electronico,
					'direccion'		=>	$total->direccion,
					'carrera'		=>	$total->carrera,
					'semestre'		=>	$total->semestre,
					'cuenta'		=>	$total->numero_cuenta,
					'turno'			=>	$total->turno,
					'promedio'		=>	$total->promedio,
					'year'			=>	$total->anio,
					'folio'			=>	$total->num_folio,
					'semester'		=>	$total->tipo_semestre

				];

			#	var_dump($total);

			}

			return $data;
		}
	}

	public function current_asign()
	{
		$i = 1;
		$asignacion = new Asignacion_model();
		#	var_dump($this->session->userdata('usuario')['id']);
		if (is_array($asignacion->get_asignacion($this->session->userdata('usuario')['id'])) AND $asignacion->get_asignacion($this->session->userdata('usuario')['id']) != NULL) {
			foreach ($asignacion->get_asignacion($this->session->userdata('usuario')['id']) as $asignados) {
				#var_dump($asignados);
				$all_asing[$i++] = [
					'nombre'				=>	$asignados->nombre,
					'paterno'				=> 	$asignados->paterno,
					'materno'				=>	$asignados->materno,
					'fecha_nacimiento'		=>	$asignados->fecha_nacimiento,
					'telefono'				=>	$asignados->telefono,
					'celular'				=>	$asignados->celular,
					'correo_electronico'	=>	$asignados->correo_electronico,
					'direccion'				=>	$asignados->direccion,
					'carrera'				=>	$asignados->carrera,
					'semestre'				=>	$asignados->semestre,
					'status'				=>	$asignados->status,
					'id_psicologo' 			=> $asignados->id_psicologo,
					'id_paciente' 			=> $asignados->id_paciente,
				];

			}
		}
		if (isset($all_asing))
		{
			return $all_asing;
		}else
		{
			return 0;
		}

		#return count($all_asing);
	}


	public function patientsAppoinment()
	{
		$appointment = new Session_model();

		if (is_array($appointment->getAppoinment($this->session->userdata('usuario')['id'])) AND $appointment->getAppoinment($this->session->userdata('usuario')['id'])) {

			return	count( $appointment->getAppoinment($this->session->userdata('usuario')['id']));
		}else
		{
			return 0;
		}

	}


	public function index()
	{
		$totalUsers	=	$this->counterUsers();
		$allUsers	=	$this->getAllUsers();
		$asignados	=	$this->current_asign();

		$currentAsign 	= 	$this->current_asign();
		$currentAppoint	=	$this->patientsAppoinment();





		if($this->session->userdata('usuario') != NULL)
		{
			if ($this->session->userdata('usuario')['nivel'] == 1 AND $this->session->userdata('usuario')['activo'] == 1)
			{
			#	var_dump($allUsers);
				$data   =   array(
					'totalUsers'	=>	(isset($totalUsers) ? $totalUsers: "Sin datos"),
					'allUsers'		=>	(isset($allUsers) ? $allUsers : "Sin datos"),
					'asignados'		=>	(isset($asignados) ? $asignados: "Sin datos"),
					'currentAsign'	=>	(isset($currentAsign) ? $currentAsign: "Sin datos"),
					'currentAppoint'	=>	(isset($currentAppoint) ? $currentAppoint: "Sin datos"),




				);

				$data = array(

					'header_content' => $this->load->view('templates/vertical/header_content_view', $data, TRUE),
					'change_content' => $this->load->view('templates/vertical/change_content_view', $data, TRUE),
					#'content_main' => $this->load->view('asignacion/main_view', $data, TRUE),
				);

				$data = [
					'navbar' 		=> $this->load->view('templates/vertical/navbar_view', $data, TRUE),
					'main_content' 	=> $this->load->view('templates/vertical/main_content_view', $data, TRUE),
					'aside' 		=> $this->load->view('templates/vertical/aside_view', $data, TRUE),
					'footer' 		=> $this->load->view('templates/vertical/footer_view', $data, TRUE),
				];

				$data = array(
					'horizontal_select' => TRUE,
					'horizontal' 		=> $this->load->view('templates/vertical/horizontal_view', $data, TRUE),
					//'vertical'          => $this->load->view('templates/vertical/vertical_view', $data, TRUE)
				);

			}else if ($this->session->userdata('usuario')['nivel'] == 3 AND $this->session->userdata('usuario')['activo'] == 1)
			{
				$data   =   array(
					'totalUsers'		=>	isset($totalUsers) ? $totalUsers : "Sin datos",
					'allUsers'			=>	isset($allUsers) ? $allUsers : "Sin datos",
					'currentAsign'		=>	(isset($currentAsign) ? $currentAsign: "Sin datos"),
					'currentAppoint'	=>	(isset($currentAppoint) ? $currentAppoint: "Sin datos"),
				);

				$data = array(

					'header_content' => $this->load->view('templates/vertical/header_content_view', $data, TRUE),
					'change_content' => $this->load->view('templates/vertical/change_content_view', $data, TRUE),
					#	'register_form' =>  $this->load->view('form_register_view',$data,TRUE)
				);

				$data = [
					'navbar' => $this->load->view('templates/vertical/navbar_view', $data, TRUE),
					'main_content' => $this->load->view('templates/vertical/main_content_view', $data, TRUE),
					'aside' => $this->load->view('templates/vertical/aside_view', $data, TRUE),
					'footer' => $this->load->view('templates/vertical/footer_view', $data, TRUE),
				];

				$data = array(
					'horizontal_select' => TRUE,
					'horizontal' => $this->load->view('templates/vertical/horizontal_view', $data, TRUE),
					//'vertical'          => $this->load->view('templates/vertical/vertical_view', $data, TRUE)
				);

			}else if ($this->session->userdata('usuario')['nivel'] == 0 AND $this->session->userdata('usuario')['activo'] == 1)
			{
				$data   =   array(
					'totalUsers'	=>	isset($totalUsers) ? $totalUsers : "Sin datos",
				#	'allUsers'		=>	isset($allUsers) ? $allUsers : "Sin datos",


				);

				$data = array(

					'header_content' => $this->load->view('templates/vertical/header_content_view', $data, TRUE),
					'change_content' => $this->load->view('templates/vertical/change_content_view', $data, TRUE),
					#	'register_form' =>  $this->load->view('form_register_view',$data,TRUE)
				);

				$data = [
					'navbar' => $this->load->view('templates/vertical/navbar_view', $data, TRUE),
					'main_content' => $this->load->view('templates/vertical/main_content_view', $data, TRUE),
					'aside' => $this->load->view('templates/vertical/aside_view', $data, TRUE),
					'footer' => $this->load->view('templates/vertical/footer_view', $data, TRUE),
				];

				$data = array(
					'horizontal_select' => TRUE,
					'horizontal' => $this->load->view('templates/vertical/horizontal_view', $data, TRUE),
					//'vertical'          => $this->load->view('templates/vertical/vertical_view', $data, TRUE)
				);
			}

		}




		$this->load->view('templates/admin/main_view',$data);
	}

}
