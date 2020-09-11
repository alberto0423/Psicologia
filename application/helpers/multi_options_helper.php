<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20/01/2020
 * Time: 12:31 AM
 */

function sex()
{
	return array(
		'0' 		=> 'Sexo...',
		'hombre' 	=> 'Hombre',
		'mujer' 	=> 'Mujer'
	);
}

function carrer()

{

	return array(
		'0' => 'Elija una carrera',
		'1' => 'Arquitectura',
		'2' => 'Derecho',
		'3' => 'Economía',
		'4' => 'Diseño Industrial',
		'5' => 'Ingeniería en Computación',
		'6' => 'Ingeniería Industrial',
		'7' => 'Ingeniería Civil',
		'8' => 'Ingeniería Eléctrica Electrónica',
		'9' => 'Ingeniería Mecánica',
		'10' => 'Pedagogía',
		'11' => 'Relaciones Internacionales',
		'12' => 'Comunicación y Periodismo',
		'13' => 'Planificación para el Desarrollo Agropecuario',
		'14' => 'Sociología',
		'15' => 'SUA-Derecho',
		'16' => 'SUA-Ecommía',
		'17' => 'SUA-Relaciones Internacionales',

	);
}

function debit()

{
	return array(
		'0' => 'Elija un adeudo',
		'1' => 'Si adeudo',
		'2' => 'No adeudo'
	);
}

function semester()

{
	return array(
		'0' => 'Elija un semestre',
		'1' => '1 Semestre',
		'2' => '2 Semestre',
		'3' => '3 Semestre',
		'4' => '4 Semestre',
		'5' => '5 Semestre',
		'6' => '6 Semestre',
		'7' => '7 Semestre',
		'8' => '8 Semestre',
		'9' => '9 Semestre',
		'10' => '10 Semestre',
	);
}

function schedule()

{
	return array(
		'0' 		=> 'Elija una horario',
		'1' 		=> 'Matutino',
		'2' 		=> 'Vespertino',
		'3' 		=> 'Mixto'
	);
}

function service()

{
	return array(
		'0' 		=> 'Elija una opción',
		'1' 		=> 'Recomendación de un amigo / compañero',
		'2' 		=> 'Semana de inducción',
		'3' 		=> 'Servicio médico',
		'4' 		=> 'Profesor/Tutor/Jefe de carrera',
		'5' 		=> 'Cordinación de servicios a la comunidad',
		'6' 		=> 'Taller'
	);
}

function questions()
{
	return array(
		1 => 'Escriba breve y claramente el motivo por el cual acude al servicio psicológico',
		2 => 'Describe como ha afectado a tu vida cotidiana el problema que refieres',
		3 => '¿Desde hace cuánto tiempo vives con este problema?',
		4 => '¿La problemática por la que pasas afecta tu rendimiento académico?',
		5 => 'En una escala del 1 al 5 marca con una X que tan incapacitante es tu molestia',
		6 => '¿Cómo te enteraste del servicio de asesoría Psicológica?'
	);
}


function terminos()
{
	return array(
		'terminos' => 'Servicios a la Comunidad de la Facultad de Estudios Superiores Aragón,
		 UNAM, con domicilio en Av. Rancho Seco s/n Col. Impulsora Popular Avícola, Cd. Nezahualcóyotl, 
		 Estado de México, utilizará los datos personales aquí recibidos para informarle sobre actividades
		  concernientes al proceso de asesoría psicopedagógica y enviar material de apoyo. Su información solamente será 
		  utilizada por esta área y para los fines aquí descritos, sin que puedan ser objeto de algún otro tratamiento o trasferencia a 
		  terceros sin su consentimiento.',
	);
}


function user_leve(){
	return array(
		'0'	=>	'Selecciona un nivel de usuario',
		'3'	=>	'Root',
		'1' =>	'Administrador',
		#'2' =>	'Invitado',
	);
}


function user_active()
{
	return array(
		'' 		=>	'Selecciona un estado de activación',
		'0'		=>	'Inactivo',
		'1'		=>	'Activo'

	);
}






