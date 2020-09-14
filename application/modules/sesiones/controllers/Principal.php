<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 12/05/2020
 * Time: 05:41 PM
 */


class Principal extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$models = array('Asignacion/asignacion_model','Session_model');
		$this->load->models($models);
		Modules::run('login/Validaciones/exist_user_sess');
	}

	public function getSessionUser()
	{
		$saveSession = new  Session_model();

		if ($this->input->server('REQUEST_METHOD')	==	"POST")
		{
			if ($this->input->post('users') == null || $this->input->post('asistencia') == null || $this->input->post('servicio') == null)
			{


			}else{

				$dataSession = array(
					'id_paciente'		=>	$this->input->post('users'),
					'id_psicologo'		=>	$this->session->userdata('usuario')['id'],
					'asistencia'		=>	$this->input->post('asistencia'),
					'tipo_sesion'		=>	$this->input->post('servicio'),
					'numero_sesion'		=>	$this->input->post('numSession'),
					'fecha'				=>	$this->input->post('dateCreate'),
					'proxima_sesion'	=>	$this->input->post('dateSession'),
					'nota_sesion'		=>	$this->input->post('observaciones'),

				);
			#	var_dump($dataSession);
				$saveSession->saveDataSession($dataSession);
				redirect('historial/Inicio');
			}
		}
	}

	public function getAllUsersAjax()
	{
		$users 	=	new Asignacion_model();
	#	var_dump($users->getUsersAsign($this->session->userdata('usuario')['id']));
		if (is_array($users->getUsersAsign($this->session->userdata('usuario')['id'])) AND $users->getUsersAsign($this->session->userdata('usuario')['id']) != NULL)
		{
			$totalUsers	=	$users->getUsersAsign($this->session->userdata('usuario')['id']);
			$k	=	0;
			foreach ($totalUsers as $total) {
				$data[$k++]	=	[
					'id_paciente'	=>	$total->id_paciente,
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
					'adeuda'		=>	$total->adeuda_materias,
					'num_adeudos'	=>	$total->numero_adeudos,
					'motivo'		=>	$total->motivo_servicio_psicologico,
					'afectacion'	=>	$total->afectacion_problema,
					'antiguedad'	=>	$total->antiguedad_problema,
					'molestia'		=>	$total->nivel_molestia,
					'rendimiento'	=>	$total->problematica_rendimiento,
					'atencion'		=>	$total->horario_atencion,
					'compromiso'	=>	$total->compromiso_asistencia,
					'folio'			=>	$total->num_folio,

				];


			}

			return json_encode($data);
		}
	}


	public function index()
	{
		$this->getSessionUser();
		$request =  json_decode($this->getAllUsersAjax());


		$data = array(


			'asignados' 		=> $this->session->userdata('usuario')['id'],
			'request_ajax'		=>	(isset($request) ? $request : "Sin datos"),
		);


		$data = array(
			// Migas de pan
			'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
			// Contenido dinámico
			'content_main' => $this->load->view('sessions_main_view', $data, TRUE),
		);

		$data = array(
			// Tag title
			'title_lgral' => 'Programa de Asesoría Psicopedagógica',
			// Archivos css
			'css' => FALSE,
			// Header de la página web
			'header' => $this->load->view('templates/horizontal/header_view', $data, TRUE),
			// Aside de la página web
			'aside' => $this->load->view('templates/horizontal/aside_view', $data, TRUE),
			// Menu de toda la paqgina
			'menu' => $this->load->view('templates/horizontal/menu_view', $data, TRUE),
			// Main de la página web
			'main' => $this->load->view('templates/horizontal/main_view', $data, TRUE),
			// Footer de la página de web
			'footer' => $this->load->view('templates/horizontal/footer_view', $data, TRUE),
			// Archivos JS
			'js' => FALSE

		);
		$this->load->view('layout_general', $data);
	}
}
