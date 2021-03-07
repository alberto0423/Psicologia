<?php


class Principal extends MX_Controller
{

    public function __construct()
    {
	  parent::__construct();
	  $this->load->library('form_validation');
	  $models = array('registro/Registro_model', 'asignacion/Asignacion_model', 'Reasignacion_model');
	  $helpers = array('multi_options_helper', 'calc_age_helper');
	  $this->load->model($models);
	  $this->load->helper($helpers);
	  Modules::run('login/Validaciones/exist_user_sess');

    }

    public function reasignacion($data)
    {


	  if (is_numeric($data)) {

		$tbl_paciente = 'paciente';
		$idUser = new registro_model();

		$infoUser = $idUser->get_all_users($tbl_paciente, '*', array('id' => $data), '1');


		if (is_array($infoUser) and $infoUser != NULL) {

		    $userData = $idUser->get_all_users($tbl_paciente, '*', array('id' => $data), '1');

		    $this->verfiyUser($data);

		} else {

		}


		$data = array(
			  'asignados' => $userData,
			  'psciologos' => $this->getDataPsico(),
		);


		$data = array(
		    // Migas de pan
		    #	'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
		    // Contenido dinámico
			  'content_main' => $this->load->view('reasignacion_view', $data, TRUE),
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

    public function verfiyUser($data)
    {

	  if ($this->input->server("REQUEST_METHOD") == "POST") {
		$update = new Reasignacion_model();

		$request = $this->input->post();
		$requestConvert = json_encode($request);
		$requestReal = json_decode($requestConvert);


	//	var_dump($requestReal);
		$id = intval($requestReal->id);
		$idPsicologo = intval($requestReal->psicologo);

		$reasignacion = array(
			  'id_psicologo' => intval($requestReal->psicologo)
		);


		$dataPacient = array(
			  'nombre' => $requestReal->nombre,
			  'paterno' => $requestReal->paterno,
			  'materno' => $requestReal->materno,
			  'fecha_nacimiento' => $requestReal->nacimiento,
			  'genero' => $requestReal->sexo,
			  'correo_electronico' => $requestReal->email,
			  'telefono' => $requestReal->telefono,
			  'celular' => $requestReal->celular,
			  'direccion' => $requestReal->direccion,

			  'numero_cuenta' => $requestReal->NoCuenta,
			  'carrera' => $requestReal->carrera,
			  'semestre' => $requestReal->semestre,

			  'horario_atencion' => $requestReal->horario,
			  'adeuda_materias' => $requestReal->adeudos,
			  'promedio' => $requestReal->promedio,
			  'numero_adeudos' => $requestReal->NoAdeudo,
			  'numero_recursamientos' => $requestReal->recurse,

			  'motivo_servicio_psicologico' => $requestReal->motivoConsulta,
			  'antiguedad_problema' => $requestReal->antiguedad,
			  'horario_atencion' => $requestReal->atentionDate,


			  'problematica_rendimiento' => $requestReal->performance,
			  'afectacion_problema' => $requestReal->afectacion,
			  'medio_conocimiento_servicio' => $requestReal->servicio,
			  'nivel_molestia' => $requestReal->nivelMolestia,

			  'categoria_consulta' => $requestReal->consulta,
			  'categoria_especial' => $requestReal->categoria,
		);

		$update->updatePaciente($dataPacient, $id);
		$update->update($reasignacion, $id);

		//'id_psicologo' => $this->input->post('psicologo')
		//var_dump($dataPacient);
		//	$update->update($dataPacient);
	  }
    }


    public function updateAjax()
    {
	  if ($this->input->server("REQUEST_METHOD") == "POST") {
		$request = $this->input->post();

		echo $request;
		var_dump($request);
	  }

    }


    public function getDataPsico()
    {
	  $buscar = new asignacion_model();

	  if (is_array($buscar->usuarios()) and $buscar->usuarios() != NULL) {
		$i = 0;

		foreach ($buscar->usuarios() as $ukey_user) {

		    $all_user[$i++] = [
				'id' => $ukey_user->id_psicologo,
				'nombre' => $ukey_user->name_user,
				'paterno' => $ukey_user->user_paterno,
				'materno' => $ukey_user->user_materno,
				'activo' => $ukey_user->activo,

		    ];


		}

		return $all_user;
		//var_dump($all_user);

	  }
    }

    public function index()
    {

	  $data = array(

		//   'asignacion' => $this->getCurrentAsign(),
		//   'asignados' => $this->session->userdata('usuario')['id'],

	  );

	  $data = array(
		// Migas de pan
		    'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
		// Contenido dinámico
		    'content_main' => $this->load->view('reasignacion_view', $data, TRUE),
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
