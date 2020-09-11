<a href="<?php echo base_url('escritorio/principal') ?>" class="btn btn-close"><span
			class="fas fa-arrow-alt-circle-left"></span></a>

<?php $i = 0; ?>
<?php
$btn_save_modify = array(
		'type' => 'button',
		'content' => 'Modificar',
		'class' => 'btn btn-sm btn-info ',
		'data-toggle' => "modal",
		'data-target' => "#info",
		'data-whatever' => "@getbootstrap"
);
$btn_save_sessión = array(
		'type' => 'button',
		'content' => 'Nueva Sesión',
		'class' => 'btn btn-md btn-info ',
		'data-toggle' => "modal",
		'data-target' => "#session",
		'data-whatever' => "@getbootstrap"
);
?>
<?php echo form_open() ?>
<div class="container mb-5">
	<div class="row">
		<div class="col-md-12">
			<select id="users" name="users" class="custom-select col-auto">
				<option value='<?php echo $i = 0; ?>'>Selecciona....</option>
				<?php for ($i; $i < count($request_ajax); $i++): ?>
					<?php echo "<option value='" . $request_ajax[$i]->id_paciente . "'>" . $request_ajax[$i]->nombre . ' ' . $request_ajax[$i]->paterno . ' ' . $request_ajax[$i]->materno . "</option>"; ?>
				<?php endfor; ?>
			</select>

		</div>
	</div>

</div>


<section class="container mt-5" id="newSesison">

			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<!-- Default box -->
						<div class="card collapsed-card">
							<div class="card-header bg-gradient-blue">
								<h3 class="card-title">Nueva sesión</h3>

								<div class="card-tools">
									<button type="button" class="btn btn-tool" data-card-widget="collapse"
											data-toggle="tooltip"
											title="Collapse">
										<i class="fas fa-plus-circle bg-cyan"></i></button>
									<button type="button" class="btn btn-tool" data-card-widget="remove"
											data-toggle="tooltip"
											title="Remove">
										<i class="fas fa-times bg-cyan"></i></button>
								</div>
							</div>
							<div class="card-body" style="display: none;">
								<div class="container-fluid">

									<div class="row">


										<div class="col-md-12 col-8 col-12">
											<!-- Default box -->


											<div class="row">
												<div class="col">


													<!--Input Clave de elaborador-->
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">Nombre</span>
														</div>


														<?php
														$input_user_key = array(
																'type' 			=> 'text',
																'id' 			=> 'nameUser',
																'class' 		=> 'form-control col-12',
																'data-toggle' 	=> 'tooltip',
																'title' 		=> '',
																'name' 			=> 'nameUser',
																'placeholder' 	=> 'Nombre del paciente'
														);
														echo form_input($input_user_key) ?>
													</div>


												</div>



											</div>


											<div class="row">
												<!--Dropdown confirmar asistencia-->
												<div class="col">
													<div class="input-group mb3">
														<div class="input-group-prepend">
															<span class="input-group-text"
																  id="basic-addon1">Asistencia</span>
														</div>

														<?php
														$dropdown_asistencia = array(
																'Por favor, seleccione la asistencia del paciente',
																'Si',
																'No'
														);
														echo form_dropdown('asistencia', $dropdown_asistencia, NULL, 'class="form-control col-7"') ?>


													</div>
												</div>


												<!--Dropdown sesión-->
												<div class="col">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
														<span class="input-group-text"
															  id="basic-addon1">Tipo de sesión</span>
														</div>

														<?php
														$dropdown_status = array(
																'Por favor, seleccione el tipo de seisión',
																'Sesión',
																'Entrevista',

														);
														echo form_dropdown('servicio', $dropdown_status, NULL, 'class="form-control col-7"') ?>
													</div>
												</div>


												<div class="col">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1"># Sesión</span>
														</div>

														<?php
														$input_num_session = array(
																'type' => 'text',
																'id' => 'num_session',
																'class' => 'form-control col-auto',
																'data-toggle' => 'tooltip',
																'title' => '',
																'name' => 'numSession',
																'placeholder' => 'Número de sesión'
														);
														echo form_input($input_num_session) ?>
													</div>

												</div>

											</div>


											<div class="row">
												<!--Fecha de cración-->
												<div class="col">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text" id="basic-addon1">Fecha</span>
														</div>

														<?php
														$date_create = array(
																'type' => 'date',
																'id' => 'dateCreate',
																'class' => 'form-control',
																'data-toggle' => 'tooltip',
																'title' => '',
																'name' => 'dateCreate',
																'placeholder' => ''
														);
														echo form_input($date_create) ?>
													</div>
												</div>


												<!--Fecha de sesion-->
												<div class="col">
													<div class="input-group mb-4">
														<div class="input-group-prepend">
														<span class="input-group-text"
															  id="basic-addon1">Próxima sesión</span>
														</div>

														<?php
														$date_create = array(
																'type' => 'date',
																'id' => 'dateSession',
																'class' => 'form-control',
																'data-toggle' => 'tooltip',
																'title' => '',
																'name' => 'dateSession',
																'placeholder' => ''
														);
														echo form_input($date_create) ?>
													</div>
												</div>


											</div>


											<div class="row">

												<div class="col">
													<div class="input-group mb-4">
														<div class="input-group-prepend">
															<span class="input-group-text">Nota</span>
														</div>
														<?php
														$text_area_base = array(
																'arial-label' => 'With textarea',
																'class' => 'form-control',
																'rows' => 3,
																'name'	=>	'observaciones'

														);
														echo form_textarea($text_area_base) ?>

													</div>

												</div>

											</div>


											<div class="row">



											</div>



											<!-- /.card -->
										</div>
									</div>
								</div>


							</div>
							<!-- /.card-body -->
							<div class="card-footer" style="display: none;">


								<div class="col">
									<?php
									$btn_save_asign = array(
											'type' 		=> 'submit',
											'content' 	=> 'Actualizar',
											'class' 	=> 'btn btn-md btn-success col-12',
											'name' 		=> 'actulizar',


									);
									echo form_button($btn_save_asign); ?>
								</div>
							</div>
							<!-- /.card-footer-->



						</div>
						<!-- /.card -->
					</div>
				</div>
			</div>

		</section>

<?php echo form_close(); ?>


