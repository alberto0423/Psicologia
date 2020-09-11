<a href="<?php echo site_url('escritorio/principal') ?>" class="btn btn-close"><span class="fas fa-arrow-alt-circle-left"></span></a>

<?php
$html = '';
$html	.=	'<div class="row">';
$html	.=	'<div class="col-12 offset-4 mb-4">';

$html	.=	'<h3 class="text-dark">registro y alta de nuevos usuarios</h3>';

$html	.=	'</div></div>';

$input_name = array(
	'type' 			=> 'text',
	'id' 			=> 'name',
	'class'			=> 'form-control col-4',
	'data-toggle'	=>	'tooltip',
	'title'			=>	'Ingresa tu nombre',
	'name' 			=> 'name',
	'placeholder' 	=> 'Nombre',
	'required'		=>	TRUE

);


$input_patern 	= array(
	'type' 			=> 'text',
	'id' 			=> 'paterno',
	'class'			=> 'form-control col-4 mb-2',
	'data-toggle'	=>	'tooltip',
	'title'			=>	'Ingresa tu nombre',
	'name' 			=> 'paterno',
	'placeholder' 	=> 'Apellido Materno',
	'required'		=>	TRUE

);
$input_matern 	= array(
	'type' 			=> 'text',
	'id' 			=> 'materno',
	'class'			=> 'form-control col-4',
	'data-toggle'	=>	'tooltip',
	'title'			=>	'Ingresa tu nombre',
	'name' 			=> 'materno',
	'placeholder' 	=> 'Apellido Materno',
	'required'		=>	TRUE

);

$input_alias 	= array(
	'type' 			=> 'text',
	'id' 			=> 'alias',
	'class'			=> 'form-control col-4',
	'data-toggle'	=>	'tooltip',
	'title'			=>	'Ingresa tu nombre',
	'name' 			=> 'alias',
	'placeholder' 	=> 'Nombre de Usuario',
	'required'		=>	TRUE

);

$input_burn 	= array(
	'type' 			=> 'text',
	'id' 			=> 'pass',
	'class'			=> 'form-control col-4',
	'data-toggle'	=>	'tooltip',
	'title'			=>	'Ingresa tu nombre',
	'name' 			=> 'pass',
	'placeholder' 	=> 'Contraseña',
	'required'		=>	TRUE

);
$input_phone 	= array(
	'type' 			=> 'text',
	'id' 			=> 'confirm_pass',
	'class'			=> 'form-control col-4',
	'data-toggle'	=>	'tooltip',
	'title'			=>	'Ingresa tu nombre',
	'name' 			=> 'confirm_pass',
	'placeholder' 	=> 'Confirmar Contraseña',
	'required'		=>	TRUE
);
/*
$input_cel = array(
	'type' 			=> 'text',
	'id' 			=> 'name',
	'class'			=> 'form-control',
	'data-toggle'	=>	'tooltip',
	'title'			=>	'Ingresa tu nombre',
	'name' 			=> 'name',
	'placeholder' 	=> 'Nombre'


);
*/
$btn_save 		= array(
	'type' 		=> 'submit',
	'content' 	=> 'Guardar',
	'class' 	=> 'btn btn-primary mb-4 offset-5'
);
$btn_reset 		= array(
	'type' 		=> 'reset',
	'content' 	=> 'Limpiar',
	'class' 	=> 'btn btn-secondary mb-4'
);
$select			= array(
	'type' 		=> 'select',

);


$html	.=	'<div class="container offset-4">';
$html	.=	'<div class="form-group">';
#$html	.=	'<div class="col-12 ">';
$html	.=	form_open();
$html	.=	form_input($input_name);
$html	.=	'</div>';

$html	.=	'<div class="form-group">';
$html	.=	form_input($input_patern);

$html	.=	'</div>';

$html	.=	'<div class="form-group">';
$html	.=	form_input($input_matern);
$html	.=	'</div>';

$html	.=	'<div class="form-group">';
$html	.=	form_input($input_alias);
$html	.=	'</div>';


$html	.=	'<div class="form-group">';
$html	.=	form_input($input_burn);
$html	.=	'</div>';

$html	.=	'<div class="form-group">';
$html	.=	form_input($input_phone);
$html	.=	'</div>';

$html	.=	'<div class="form-group">';
$html	.=	form_dropdown('user',$multi[1],NULL,'class="form-control col-4"');
$html	.=	'</div>';


$html	.=	'<div class="form-group">';
$html	.=	form_dropdown('active',$multi[2],NULL,'class="form-control col-4"');
$html	.=	'</div>';


#$html	.=	form_input($input_cel);
#$html	.=	form_input($input_name);
$html	.=	'</div>';




$html	.=	'<div class="form-group col-12">';
$html	.=	form_button($btn_save);
$html	.=	form_button($btn_reset);
$html	.=	'</div>';





#$html	.=	'<div class="form-group">';
#$html	.=	form_button($btn_reset);
#$html	.=	'</div>';

$html	.=	form_close();
echo $html;

?>
<!--<div class="form-group">
	<label for="email">Email address:</label>
	<input type="email" class="form-control mb-2" placeholder="Enter email" id="email">
</div>
<div class="form-group">
	<label for="pwd">Password:</label>
	<input type="password" class="form-control" placeholder="Enter password" id="pwd">
</div>
<div class="form-group form-check">
	<label class="form-check-label">
		<input class="form-check-input" type="checkbox"> Remember me
	</label>
</div>-->
