<a href="<?php echo site_url('escritorio/principal') ?>" class="btn btn-close"><span
			class="fas fa-arrow-alt-circle-left"></span></a>

<?php for ($i=0; $i < count($asignacion); $i++): ?>



	<section class="container">

		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<!-- Default box -->
					<div class="card collapsed-card">
						<div class="card-header bg-gradient-blue">

							<h3 class="card-title"><?php echo $asignacion[$i]->nombre . ' ' . $asignacion[$i]->paterno . ' ' . $asignacion[$i]->materno ?></h3>

							<div class="card-tools">
								<button type="button" class="btn btn-tool" data-card-widget="collapse"
										data-toggle="tooltip" title="Collapse">
									<i class="fas fa-plus-circle bg-cyan"></i></button>
								<button type="button" class="btn btn-tool" data-card-widget="remove"
										data-toggle="tooltip" title="Remove">
									<i class="fas fa-times bg-cyan"></i></button>
							</div>
						</div>
						<div class="card-body" style="display: none;">

							<div class="row">
								<div class="col">

									<h5 class="text-center">Datos Personales</h5>

								</div>

								<div class="col-auto">

									<?php #var_dump(  $asignacion[$i]);?>
								</div>

							</div>

							<hr class="border border-info">

							<div class="row">

								<div class="col-4">
									<label>Nombre del paciente: </label>

									<div class="col-12">

										<input type="text"  name="userName" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->nombre ?>">
									</div>

								</div>



								<div class="col-4">
									<label>Paterno: </label>

									<div class="">

										<input type="text" name="paternUser" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->paterno ?>">
									</div>

								</div>


								<div class="col-4">
									<label>Materno: </label>

									<div class="">
										<input type="text" name="maternUser" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->materno ?>">
									</div>

								</div>




								<div class="col-4">
									<label>Fecha de nacimiento: </label>
									<div class="">

										<input type="text" name="burnDate" class="form-control col-sm-6" value="<?php echo date("Y-m-j", strtotime($asignacion[$i]->fecha_nacimiento)) ?>">
									</div>

								</div>
								<div class="col-4">
									<label>Edad: </label>
									<div class="">
										<p id="age">
											<?php
											echo age_calc($asignacion[$i]->fecha_nacimiento)

											?></p>

									</div>

								</div>


								<div class="col-4">
									<label>Sexo:</label>
									<div class="">
										<p id="gen"> <?php echo $asignacion[$i]->genero ?></p>

									</div>
								</div>

								<div class="col-4">
									<label>Correo electronico: </label>
									<div class="">
										<input type="email" name="userEmail" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->correo_electronico ?>">
									</div>
								</div>

								<div class="col-4">
									<label>Telefono fijo: </label>
									<div>

										<input type="text" name="userPhone" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->telefono ?>">
									</div>

								</div>

								<div class="col-4">
									<label>Celular: </label>
									<div class="">

										<input type="text" name="userCell" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->celular ?>">
									</div>

								</div>


								<div class="col-4">
									<label>Dirección: </label>
									<div class="">

										<input type="text" name="burnDate" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->direccion ?>">
									</div>

								</div>


							</div>

							<div class="row">
								<div class="col-12">
									<h5 class="text-center">Datos Académicos</h5>
								</div>

							</div>
							<hr class="border border-info">

							<div class="row">

								<div class="col-4">
									<label>No. cuenta: </label>
									<div class="">

										<input type="text" name="userCount" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->numero_cuenta ?>">
									</div>
								</div>


								<div class="col-4">
									<label>Carrera: </label>
									<input type="text" name="userCareer" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->carrera ?>">
								</div>


								<div class="col-4">
									<label>Semestre: </label>
									<input type="text" name="userSemester" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->semestre ?>">
								</div>


								<div class="col-4">
									<label>Turno: </label>

									<input type="text" name="userTurn" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->turno ?>">
								</div>


								<div class="col-4">
									<label>Promedio: </label>
									<input type="text" name="userNote" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->promedio ?>">
								</div>

							</div>


							<div class="row">
								<div class="col-12">

									<h5 class="text-center">Datos de Consulta</h5>

								</div>

							</div>

							<hr class="border border-info">

							<div class="row">

								<div class="col-4">
									<label>Motivo de consulta: </label>

									<input type="text" name="userMotive" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->motivo_servicio_psicologico ?>">
								</div>


								<div class="col-4">
									<label>Antiguedad: </label>

									<input type="text" name="userAntiq" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->antiguedad_problema ?>">
								</div>


								<div class="col-4">
									<label>Horario de atención: </label>
									<input type="text" name="atentionDate" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->horario_atencion ?>">
								</div>

								<div class="col-4">
									<label>Compromiso de Asistencia: </label>
									<?php if ($asignacion[$i]->compromiso_asistencia == 1) {
										$asiste = 'Sí';
									} else {
										$asiste == 'No';
									}
									?>
									<p id="compromise"><?php echo $asiste ?></p>

								</div>


								<div class="col-4">
									<label>Rendimiento: </label>

									<input type="text" name="performance" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->problematica_rendimiento ?>">
								</div>


								<div class="col-4">
									<label>Afectación: </label>

									<input type="text" name="afect" class="form-control col-sm-6" value="<?php echo $asignacion[$i]->afectacion_problema ?>">
								</div>

							</div>


						</div>
						<!-- /.card-body -->
						<div class="card-footer" style="display: none;">

						</div>
						<!-- /.card-footer-->


					</div>
					<!-- /.card -->

				</div>




			</div>

		</div>

	</section>
	<?php #var_dump($request_ajax[$i]);?>


<?php endfor; ?>
