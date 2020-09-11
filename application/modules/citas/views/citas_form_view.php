<a href="<?php echo site_url('terminos') ?>" class="btn btn-close"><span
			class="fas fa-arrow-alt-circle-left"></span></a>
<?php
$html = '';

$input_name = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'nombre',
		'placeholder' => 'Nombre',
		'value' => set_value('nombre'),

);

$input_patern = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'paterno',
		'placeholder' => 'Apellido Paterno',
		'value' => set_value('paterno'),


);
$input_matern = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'materno',
		'placeholder' => 'Apellido Materno',
		'value' => set_value('materno'),


);
$input_burn = array(
		'type' => 'text',
		'id' => 'datepicker',
		'class' => 'form-control col-8',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'nacimiento',
		'placeholder' => '',
		'value' => set_value('nacimiento'),

);
$input_phone = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'tel_fijo',
		'placeholder' => 'Teléfono Fijo',
		'value' => set_value('tel_fijo'),

);
$input_cel = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'celular',
		'placeholder' => 'Teléfono Celular',
		'value' => set_value('celular'),


);
$input_email = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'email',
		'placeholder' => 'Correo Electrónico',
		'value' => set_value('email'),

);


$input_direccion = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'direccion',
		'placeholder' => 'Dirección',
		'value' => set_value('direccion'),


);

$input_grade = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'promedio',
		'placeholder' => 'Promedio',
		'value' => set_value('promedio'),


);
$input_id = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'cuenta',
		'placeholder' => 'Número de Cuenta',
		'value' => set_value('cuenta'),

);
$input_count = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'cuenta',
		'placeholder' => 'Número de cuenta',
		'value' => set_value('cuenta'),
	//	'error'				=>	echo form_error('cuenta'),

);
$input_asigns = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'adeudos',
		'placeholder' => 'Número de Materias Adeudadas'

);

$input_materias_adeuda = array(
		'type' => 'text',
		'id' => 'adeudos',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'recurse',
		'placeholder' => 'Número de Materias adeudadas',

);


$input_materias_recuerse = array(
		'type' => 'text',
		'id' => 'recurse',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'recurse',
		'placeholder' => 'Número de materias recursadas',
		'value' => set_value('recurse'),

);


$input_motivo = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'motivo',
		'placeholder' => 'Escriba su respuesta',
		'value' => set_value('motivo'),

);
$input_afectacion = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'afecta',
		'placeholder' => 'Escriba su respuesta',
		'value' => set_value('afecta'),

);
$input_problema = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'problema',
		'placeholder' => 'Escriba su respuesta',
		'value' => set_value('problema'),

);
$input_rendimiento = array(
		'type' => 'text',
		'id' => 'rendimiento',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'rendimiento',
		'placeholder' => 'Escriba su respuesta',
		'value' => set_value('rendimiento'),
);

$input_horario = array(
		'type' => 'text',
		'id' => 'name',
		'class' => 'form-control',
		'data-toggle' => 'tooltip',
		'title' => 'Ingresa tu nombre',
		'name' => 'atencion',
		'placeholder' => 'Día y Fecha',
		'value' => set_value('atencion'),
);


$btn_save = array(
		'type' => 'submit',
		'content' => 'Guardar',
		'class' => 'btn btn-success btn-md offset-4'
);

$btn_reset = array(
		'type' => 'reset',
		'content' => 'Limpiar',
		'class' => 'btn btn-secondary btn-md'
);


$check = array(
		'type' => 'checkbox',
		'name' => 'compromiso',
		'value' => '1',
		'class' => 'form-check-input col-xl-12',
		'id' => 'compromiso',
		'checked' => ""
);

$drop_down = array(
		'type' => 'select',
		'name' => 'adeudos',
		'id' => 'adeudos',
		'class' => 'form-control input-md',

);

?>


<section class="container">
	<div class="col-xl-12">
		<div class="col-xl-12">
			<div class="card-header">
				<h2>SOLICITUD DE ACOMPAÑAMIENTO PSICOLÓGICO</h2>
			</div>

			<div class="card-body">
				<div class="row">
					<?php echo form_open('','id="date_form"');?>

						<!-- Datos personales-->
						<div class="row personales">
							<div class="col-12 mb-5">
								<h2 class="font-weight-bolder">Datos Personales</h2>

							</div>

							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">


									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-user"></i></span>
									</div>

									<input type="text" name="nombre" value="" id="name" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre" placeholder="Nombre">
									<span class="e_name"></span>


								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-user"></i></span>
									</div>

									<input type="text" name="paterno" value="" id="paterno" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre"
										   placeholder="Apellido Paterno">
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" name="materno" value="" id="materno" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre"
										   placeholder="Apellido Materno">
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
									</div>
									<input type="date" name="nacimiento" value=""
										   class="form-control"  title="Ingresa tu nombre"
										   placeholder="">
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-venus-mars"></i></span>
									</div>

									<select name="sex" class="form-control input-md">
										<option value="0">Sexo...</option>
										<option value="hombre">Hombre</option>
										<option value="mujer">Mujer</option>
									</select>
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-phone-square"></i></span>
									</div>

									<input type="text" name="tel_fijo" value="" id="name" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre" placeholder="Teléfono Fijo">
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-envelope"></i></span>
									</div>


									<input type="text" name="email" value="" id="email" class="form-control"
										   title="Ingresa tu nombre"
										   placeholder="Correo Electrónico">
									<!--<p class="text-danger" id="notas">*
										VERIFICA QUE TU CORREO ESTE ESCRITO CORRECTAMENTE
									</p>-->
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-mobile-alt"></i></span>
									</div>

									<input type="text" name="celular" value="" id="name" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre"
										   placeholder="Teléfono Celular">
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-map-marked-alt"></i></span>
									</div>
									<input type="text" name="direccion" value="" id="name" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre" placeholder="Dirección">
								</div>

							</div>



						</div>
						<!-- End -->


					<hr class="bg-gradient-blue">


						<!-- Datos academicos -->
						<div class="row academicos">
							<div class="col-12 mb-5">
								<h2 class="font-weight-bolder">Datos Académicos</h2>

							</div>

							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-graduation-cap"></i></span>
									</div>

									<select name="carrera" class="form-control input-md">
										<option value="0">Elija una carrera que cursa</option>
										<option value="1">Arquitectura</option>
										<option value="2">Derecho</option>
										<option value="3">Economía</option>
										<option value="4">Diseño Industrial</option>
										<option value="5">Ingeniería en Computación</option>
										<option value="6">Ingeniería Industrial</option>
										<option value="7">Ingeniería Civil</option>
										<option value="8">Ingeniería Eléctrica Electrónica</option>
										<option value="9">Ingeniería Mecánica</option>
										<option value="10">Pedagogía</option>
										<option value="11">Relaciones Internacionales</option>
										<option value="12">Comunicación y Periodismo</option>
										<option value="13">Planificación para el Desarrollo Agropecuario</option>
										<option value="14">Sociología</option>
										<option value="15">SUA-Derecho</option>
										<option value="16">SUA-Economía</option>
										<option value="17">SUA-Relaciones Internacionales</option>
									</select>


								</div>

							</div>

							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-calendar-alt"></i></span>
									</div>
									<select name="semestre" class="form-control input-md">
										<option value="0">Elija un semestre que cursa</option>
										<option value="1">1 Semestre</option>
										<option value="2">2 Semestre</option>
										<option value="3">3 Semestre</option>
										<option value="4">4 Semestre</option>
										<option value="5">5 Semestre</option>
										<option value="6">6 Semestre</option>
										<option value="7">7 Semestre</option>
										<option value="8">8 Semestre</option>
										<option value="9">9 Semestre</option>
										<option value="10">10 Semestre</option>
									</select>

								</div>
							</div>

							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-id-card"></i></span>
									</div>

									<input type="text" name="cuenta" value="" id="num_cuenta" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre"
										   placeholder="Número de cuenta">


								</div>
							</div>

							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-clock"></i></span>
									</div>

									<select name="horario" class="form-control input-md">
										<option value="0">Elija el horario que cursa</option>
										<option value="1">Matutino</option>
										<option value="2">Vespertino</option>
										<option value="3">Mixto</option>
									</select>

								</div>

							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-sort-numeric-up-alt"></i></span>
									</div>
									<input type="text" name="promedio" value="" id="name" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre" placeholder="Promedio">
								</div>
							</div>


							<div class="col-md-4 col-auto">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-sm" id="basic-addon1"><i class="fas fa-file-prescription"></i></span>
									</div>

									<select type="select" name="adeudos" id="adeudos" class="form-control input-md">
										<option value="0">¿Adeudas Materias?</option>
										<option value="1">Si adeudo</option>
										<option value="2">No adeudo</option>
									</select>


								</div>

							</div>

							<div class="col-md-4 col-auto	">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<label for="adeudos" id="materias_deudas">
											<span class="input-group-sm" id="basic-addon1"><i class="fas fa-file-prescription"></i></span>
										</label>
									</div>
									<input type="text" name="recurse" value="" id="adeudos" class="form-control"
										   data-toggle="tooltip" title="Ingresa tu nombre"
										   placeholder="Número de Materias adeudadas">

								</div>
							</div>


						</div>
						<!-- End -->

					<hr class="bg-gradient-blue">


						<!-- Datos de consulta -->
						<div class="row mb-5" id="consulta">

							<div class="col-12 mb-5">
								<h2 class="font-weight-bolder">Datos de la Consulta</h2>

							</div>

							<div class="col-xl-12 questions">

								<div class="col-lg-12 mb-3">Describe de forma breve y clara el motivo por el cual solicitas la
									asesoría psicológica


									<input type="text" name="motivo" value="" id="motivo" class="form-control-sm"
										   data-toggle="tooltip" title="Ingresa tu nombre"
										   placeholder="Escriba su respuesta">
								</div>


								<div class="col-lg-12 mb-5">¿Desde hace cuanto tiempo presentas esta problemática?

									<input type="text" name="problema" value="" id="problema" class="form-control-sm"
										   data-toggle="tooltip" title="Ingresa tu nombre"
										   placeholder="Escriba su respuesta">
								</div>


							</div>


							<div class="col-xl-12 multi">
								<div class="col mb-5">En una escala del 1 al 5 marca con una X ¿Qué tan molesta es la
									problemática que presentas?

									<div class="input-group-sm">
										<div class="col-xl-auto">
											<input type="radio" name="nivelMolestia" value="1" checked id="moletia1">
											<label for="moletia1">Nada Molesto</label>
										</div>

										<div class="col-xl-auto ">
											<input type="radio" name="nivelMolestia" value="2" checked id="moletia2">
											<label for="moletia2"></label>
										</div>

										<div class="col-xl-auto">
											<input type="radio" name="nivelMolestia" value="3" checked id="moletia3">
											<label for="moletia3"> </label>
										</div>

										<div class="col-xl-auto">
											<input type="radio" name="nivelMolestia" value="4" checked id="moletia4">
											<label for="moletia4"> </label>
										</div>

										<div class="col-xl-auto">
											<input type="radio" name="nivelMolestia" value="5" checked id="moletia5">
											<label for="moletia5">Muy Molesto</label>
										</div>
									</div>
								</div>


								<div class="col-md mb-5 ">¿Consideras que la problemática por la cual buscaste la asesoría
									afecta tu rendimiento académico?

									<div class="input-group-sm">
										<div class="col-xl-auto">
											<input type="radio" name="problematica" value="1" checked id="problematica1">
											<label for="problematica1">Si</label>
										</div>

										<div class="col-xl-auto">
											<input type="radio" name="problematica"  value="2" checked id="problematica2">
											<label for="problematica2">No</label>
										</div>

										<div class="col-xl-auto">
											<input type="radio" name="problematica" value="3"  checked id="problematica3">
											<label for="problematica3">Comienza a fectarme</label>
										</div>

										<div class="col-xl-auto">
											<input type="radio" name="problematica" value="4" checked id="problematica4">
											<label for="problematica4">No lo sé</label>
										</div>
									</div>
								</div>

							</div>

						</div>

					<hr class="bg-gradient-blue">


						<!--Horario de servicio y medio por el que te enteraste-->
						<div class="row mb-5 complementos">


							<div class="col-xl-12">
								<div class="col-xl-12 mb-5">
									<label>¿Cómo te enteraste del servicio?</label>
									<select name="servicio" class="form-control input-md">
										<option value="0">Elija una opción</option>
										<option value="1">Servicio Médico</option>
										<option value="2">Servicios a la Comunidad</option>
										<option value="3">Jefatura de Carrera</option>
										<option value="4">Profesor o Tutor</option>
										<option value="5">Oficina Jurídica</option>
										<option value="6">UNAD</option>
									</select>
								</div>
							</div>


							<div class="col-xl-12  cita">
								<label>Indica los posibles días y horarios en los cuales podrías acudir a tu cita, estos son
									de referencia para asignar únicamente la primer cita.</label>

								<input type="text" name="atencion" value="" id="nextDate" class="form-control"
									   data-toggle="tooltip" title="Ingresa tu nombre" placeholder="Día y Fecha">

							</div>

							<div class="col-xl-12 mt-5 note-compromise">
								<label for="peterriver" class="col-form-label">
									IMPORTANTE: Me comprometo a acudir
									a mis citas
									agendadas, en caso de que no pueda acudir,
									avisaré a <a href="#" target="_blank">asesoriapsicologica@aragon.unam.mx </a>
								</label>

								<div class="col-xl-auto compromiso" >

									<input type="checkbox" name="compromiso" value="1" checked class="form-check-input col-xl-12" id="compromiso">
								</div>





							</div>

						</div>
						<!-- End -->

					<hr class="bg-gradient-blue">

					<!-- Botones de guardar y limpiar -->
					<div class="row mt-5 buttons">
						<div class="col-md-auto save">
							<button type="submit" class="btn btn-success btn-md guardar">Guardar</button>
							<span style="display: none" class="spinner"><i class="fas fa-spinner fa-spin"></i></span>

						</div>

						<div class="col-md-auto clean">
							<button type="reset" value="Limpiar" content="Limpiar"
									class="btn btn-secondary btn-md"> Limpiar </button>
						</div>
					</div>
					<!-- End -->



					<?php echo form_close();?>
				</div>

			</div>

		</div>

	</div>

</section>

