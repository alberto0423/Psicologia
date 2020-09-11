<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 17/01/2020
 * Time: 07:00 PM
 */


class Citas extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();

		$opciones = array('Multi_options_helper','dates_config_helper');
		$models	=	array('Citas_model');
		$this->load->models($models);
		$this->load->helper($opciones);
		#Modules::run('login/Validaciones/exist_user_sess');

	}

	public function validateForm($recipe = false)
	{
		$save = new Citas_model();






		if ($this->input->server("REQUEST_METHOD") == "POST")
		{
			$data		=	$this->input->post();






			if ($data['nombre'] == "" || $data['paterno'] == "" || $data['email'] == "" || $data['cuenta'] == "")
			{


				echo 0;
			}else
			{


				$calc	=	$this->caculate();
				$info = array(
					"nombre"						=>	$data['nombre'],
					'paterno'						=>	$data['paterno'],
					'materno'						=>	$data['materno'],
					'fecha_nacimiento'				=>	$data['nacimiento'],
					'genero'						=>	$data['sex'],
					'telefono'						=>	$data['tel_fijo'],
					'correo_electronico'			=>	$data['email'],
					'celular'						=>	$data['celular'],
					'direccion'						=>	$data['direccion'],
					'carrera'						=>	$data['carrera'],
					'semestre'						=>	$data['semestre'],
					'numero_cuenta'					=>	$data['cuenta'],
					'turno'							=>	$data['horario'],
					'promedio'						=>	$data['promedio'],
					'adeuda_materias'				=>	$data['adeudos'],
					'numero_adeudos'				=>	$data['recurse'],
					'numero_recursamientos'			=>	$data['motivo'],
					'motivo_servicio_psicologico'	=>	$data['problema'],
					'nivel_molestia'				=>	$data['nivelMolestia'],
					'afectacion_problema'			=>	$data['problematica'],
					'medio_conocimiento_servicio'	=>	$data['servicio'],
					'horario_atencion'				=>	$data['atencion'],
					'compromiso_asistencia'			=>	$data['compromiso'],
					'anio'							=>	$calc['year'],
					'num_folio'						=>	$calc['folio'],
					'tipo_semestre'					=>	$calc['semestre'],

				);
				$this->comparate($info);


			}




		}


	}




	private function comparate($data = FALSE)
	{
		$log = new Citas_model();


		if ($log->validate($data['numero_cuenta']) != NULL) {

				echo 2;


		}else{

			$log->save($data);
			echo 1;

		}


	}

	public function caculate()
	{
		$i = 0;
		$folios = new Citas_model();



		$dates 	= 	fecha_hoy();
		$año = date('Y',strtotime($dates));
		$mes = date('m');
		$semestre = 0;
		#var_dump($mes);

		foreach ($folios->get_all_folios() as $all_folio) {
			$all_data[$i++] = [
				'folio' => $all_folio->num_folio,
			];
			#var_dump($all_folio->num_folio);
		}


		if (empty($all_folio->num_folio)){
			$folios = $all_folio->num_folio = 1;
		}else{
			$folios	= $all_folio->num_folio+=1;

		}


		if ($mes  >= 7){
			$año++;
			$semestre = 1;
		}else{
			$semestre = 2;

		}

		$generate	=	array(
			'semestre'	=>	$semestre,
			'year'	=>	$año,
			'folio'	=>	$folios
		);
		#var_dump($semestre);
		#var_dump($folios);
		#var_dump($año);

		return	$generate;
	}





	public function index()
	{

		$log	=	new citas_model();
		$questions	=	 questions();
		$dates 	= 	fecha_hoy();


		$this->validateForm();


		$options = array(
			1	=> sex(),
			2 	=>	carrer(),
			3	=>	debit(),
			4	=>	semester(),
			5	=>	schedule(),
			6	=>	service()
		);

		$data = array(

		//	'header'	=>	$this->load->view('inicio/main_view'),


			'multi'			=> $options,
			'preguntas'		=>	$questions,
			'error'				=> (isset($error))? $error : FALSE
		);

		$data = array(
			// Migas de pan
			'breadcums' 	=> $this->load->view('templates/horizontal/main/breadcums_view', $data, TRUE),
			// Contenido dinámico
			'content_main' 	=> $this->load->view('citas_form_view', $data, TRUE),
		);

		$data = array(
			// Tag title
			'title_lgral' 	=> 'Programa de Asesoría Psicopedagógica',
			// Archivos css
			'css' 			=> FALSE,
			// Header de la página web
			'header' 		=> $this->load->view('inicio/main_view', $data, TRUE),
			// Aside de la página web
			'aside' 		=> $this->load->view('templates/horizontal/aside_view', $data, TRUE),
			#	'menu' => $this->load->view('templates/horizontal/menu_view',$data,TRUE),
			// Main de la página web
			'main' 			=> $this->load->view('templates/horizontal/main_view', $data, TRUE),
			// Footer de la página de web
			'footer' 		=> $this->load->view('templates/horizontal/footer_view', $data, TRUE),
			// Archivos JS
			'js' 			=> FALSE

		);

		$this->load->view('layout_general',$data);
	}
}
