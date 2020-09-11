<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 24/01/2020
 * Time: 02:59 PM
 */
$config = array(
	'acceso' => array(
		array(
			'field' => 'email',
			'label' => 'email',
			'rules' => 'required|trim'
		),
		array(
			'field' => 'password',
			'label' => 'contraseña',
			'rules' => 'required|trim'
		)
	),
);
