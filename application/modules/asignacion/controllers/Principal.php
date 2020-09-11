<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 24/01/2020
 * Time: 10:50 AM
 */

class Principal extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$models = array('Asignacion_model');
		$libreria = array('ErrorMsg');
		$this->load->models($models);
		$this->load->library($libreria);
	}


	private function insert_asignacion()
	{
		$i = 0;
		#$questions	=	 questions();
		$buscar = new Asignacion_model();
	#	$totalUsers		=	$buscar->getCount();



		$data_ricipe = array(
			'id_psicologo' 		=> $this->input->post('users'),
			'id_paciente'		=>	$this->input->post('paciente'),
			'status'			=>	1
		);
	#	var_dump($data_ricipe);
#		var_dump(count($totalUsers));
#		var_dump($this->session->userdata('usuario'));


		$config = array(
			'principal'	,
			array(
				'field' => 'paciente',
				'label' => 'asignacion',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El campo %s es requerido.',
				),
			),
			array(
				'field' => 'users',
				'label' => 'users',
				'rules' => 'required',
				'errors' => array(
					'required' => 'El campo %s es requerido.',
				),
			),

		);



		$this->form_validation->set_rules($config);

		if ($this->form_validation->run('princiapl') == FALSE)
		{

		}else{

			$buscar->asignacion_paciente($data_ricipe);
		#	redirect('escritorio/principal');
		}


	}

	private function delete_row()
	{
		$i = 1;
		$asignacion = new asignacion_model();

		if (is_array($asignacion->get_asignacion()) AND $asignacion->get_asignacion() != NULL)
		{
			foreach ($asignacion->get_asignacion() as $asignados) {

					$all_asing[$i++] = [

						'id_psicologo'	=>	$asignados->id_psicologo,
						'id_paciente'	=>	$asignados->id_paciente,
					];

			}




			#var_dump($all_asing);

		}
	}

	public function index()
	{

		#var_dump($this->session->userdata('usuario'));
		if ($this->session->userdata('usuario') != NULL) {

			$buscar = new asignacion_model();
			$totalUsers	=	$buscar->getCount();
		#	var_dump($totalUsers);
			#$buscar->asignacion_paciente();
			$i = 0;





			if (is_array($buscar->usuarios()) AND $buscar->usuarios() != NULL) {

				foreach ($buscar->usuarios() as $ukey_user) {
					$all_user[$i++] = [
						'id' 		=> $ukey_user->id_psicologo,
						'nombre' 	=> $ukey_user->nombre,
						'paterno'	=> $ukey_user->paterno,
						'materno'	=> $ukey_user->materno,

					];

				}

				#var_dump($all_user);
			}

			#var_dump($data_ricipe);

			$this->insert_asignacion();

			$this->delete_row();
			$all 	=	$this->get_users();




			$data = array(
				'body_color' => 'fondo-inicio-docentes',
				'card_color_docentes' => 'background-login-docentes',
				'shadow' => 'docentes-shadow',
				# 		'hdr_img' 				=> '<img src="' . base_url() . 'assets/heart/iconos/LogoSocratesDocentes.png" alt="IRC" class="img-fluid icons">',
				'hdr_link_home' => '<b>Acceso para Administradores</b>',
				'btn'	 		=> '<button type="submit" class="btn bg-gradient-gray"> Accesar</button>',
				'img_l' 		=> '<img src="assets/heart/img/logos/fes_logo_mini.png"  class="img-fluid h-logo">',
				'img_r' 		=> '<img src="assets/heart/img/logos/unam_logo.png"  alt="" class="img-fluid new-logo">',
				't_header' 		=> '<p class="col-12 col-12 text-white header-t">UNIVERSIDAD NACIONAL AUTÓNOMA DE MÉXICO</p>',
				't2_header' 	=> '<p class="col-12 col-12 text-white header-t2">FACULTAD DE ESTUDIOS SUPERIORES ARAGÓN</p>',
				't3_header'		=> '<p class="col-12 col-8 text-white offset-1 header-t3">PROGRAMA DE ASESORÍA PSICOLÓGICA </p>',
				'pacientes' 	=> (isset($all) ? $all : "Sin datos"),
				'usuarios' 		=> (isset($all_user) ? $all_user : "Sin datos"),


			);


			$data = array(
				// Migas de pan
				'breadcums' => $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
				// Contenido dinámico
				'content_main' => $this->load->view('main_view', $data, TRUE),
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


	public  function get_users()
	{
		$buscar = new asignacion_model();
		$i=	0;

		if (is_array($buscar->pacientes()) AND $buscar->pacientes() != NULL) {

			foreach ($buscar->pacientes() as $paciente) {
				$all[$i++] = [
					'id'		=>	$paciente->id,
					'name' 		=> $paciente->nombre,
					'paterno' 	=> $paciente->paterno,
					'materno' 	=> $paciente->materno,
					'year' 		=> $paciente->anio,
					'semester' 	=> $paciente->tipo_semestre,
					'num_folio' => $paciente->num_folio,
					'horario' 	=> $paciente->horario_atencion,
					'carrera' 	=> $paciente->carrera,
					'motivo'	=> $paciente->motivo_servicio_psicologico,
					'status'	=>	$paciente->status,
				//	'activo'	=>	$paciente->activo,
				];


			}

		#	var_dump($buscar->pacientes());

		return $all;
	#	var_dump($all);

		}

	}
}
