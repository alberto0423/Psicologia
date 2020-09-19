

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
		'content' => 'Sesión',
		'class' => 'btn btn-sm btn-info ',
		'data-toggle' => "modal",
		'data-target' => "#session",
		'data-whatever' => "@getbootstrap"
);
?>
<section class="content">

	<div class="row">

	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-gradient-warning"><ion-icon name="people-outline"></ion-icon></span>

			<div class="info-box-content">
				<span class="info-box-text text-bold">Total de pacientes registrados</span>
				<span class="info-box-number"><?php echo(isset($totalUsers) ? $totalUsers : "Sin datos"); ?></span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>


	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-success"><ion-icon name="arrow-undo-outline"></ion-icon></span>


			<div class="info-box-content">
				<span class="info-box-text text-bold">Total de pacientes asigandos</span>

				<?php if(is_array($currentAsign) && $currentAsign != NULL):?>
					<span class="info-box-number"><?php echo(count($currentAsign));?></span>
				<?php else:?>
					<span class="info-box-number"><?php echo(isset($currentAsign) ? $currentAsign: "Sin datos");?></span>

				<?php endif;?>

			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>



	<div class="col-md-4 col-sm-6 col-xs-12">
		<div class="info-box">
			<span class="info-box-icon bg-blue"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>

			<div class="info-box-content">
				<span class="info-box-text text-bold">Total de sesiones generadas</span>
				<span class="info-box-number"><?php echo(isset($currentAppoint) ? $currentAppoint: "Sin datos");?></span>
			</div>
			<!-- /.info-box-content -->
		</div>
		<!-- /.info-box -->
	</div>

	</div>



	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header bg-gradient-blue">
						<h3 class="card-title col-xl-12 text-center">Información de los pacientes</h3>

						<div class="card-tools">
							<button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
									title="Collapse">
								<i class="fas fa-minus"></i></button>
							<button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
									title="Remove">
								<i class="fas fa-times"></i></button>
						</div>
					</div>
					<div class="card-body">

						<!-- Tabla para administradores-->
						<?php if ($this->session->userdata('usuario')['nivel'] == 1 && $this->session->userdata('usuario')['activo'] == 1): ?>
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered"
												   cellspacing="0"
												   width="100%">
												<thead>
												<tr>
													<th>Folio</th>
													<th>Nombre</th>
													<th>Apellido Paterno</th>
													<th>Apellido Materno</th>
													<th>&nbsp;</th>


												</tr>
												</thead>
												<tbody>
												<?php if (is_array($asignados) != null): ?>

													<?php foreach ($asignados as $key_paciente): ?>
														<?php
														#	var_dump($key_paciente['status']);
														if ($key_paciente['status'] == 0) {
															$label_asign = form_label('Nuevo', '', 'class="col-form-sm alert alert-success " ');
														} elseif ($key_paciente['status'] == 1) {
															$label_asign = form_label('Asignado', '', 'class="col-form-sm alert alert-success"');
														}

														?>

													<?php  #var_dump($key_paciente);?>
														<?php echo "<tr><td>" .$key_paciente['year'].'-'.$key_paciente['semester'].'-'.$key_paciente['folio'] ."</td>"; ?>
														<?php echo "<td>" . $key_paciente['nombre'] . "</td>" ?>
														<?php echo "<td>" . $key_paciente['paterno'] . "</td>" ?>
														<?php echo "<td>" . $key_paciente['materno'] . "</td>" ?>


														<?php echo "<td>" . $label_asign . "</td></tr>" ?>


													<?php endforeach; ?>

												<?php endif; ?>


												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

						<?php endif; ?>
						<!-- End -->


						<!-- Tabala para Root -->
						<?php if ($this->session->userdata('usuario')['nivel'] == 3): ?>

							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="table-responsive">

											<table id="example" class="table table-striped table-bordered"
												   cellspacing="0"
												   width="100%">
												<div class="row m-3">
												</div>
												<thead>

												<tr>
													<th>Folio</th>
													<th>Nombre</th>
													<th>Paterno</th>
													<th>Materno</th>
													<th>Fecha de nacimiento</th>
													<th>Sexo</th>
													<th>Telefono</th>
													<th>Celular</th>
													<th>Correo</th>
													<th>Dirección</th>
													<th>Carrera</th>
													<th>Semestre</th>
													<th># Cuenta</th>
													<th>Turno</th>
													<th>Promedio</th>


												</tr>
												</thead>


												<?php if (is_array($allUsers) != NULL): ?>

													<?php foreach ($allUsers as $key_paciente): ?>

														<?php

														switch ($key_paciente['carrera']) {
															case 1:
																$key_paciente['carrera'] = "Arquitectura";
																break;

															case 2:
																$key_paciente['carrera'] = "Derecho";
																break;

															case 3:
																$key_paciente['carrera'] = "Economía";
																break;

															case 4:
																$key_paciente['carrera'] = "Diseño Industrial";
																break;

															case 5:
																$key_paciente['carrera'] = "Ingeniería en Computación";
																break;


															case 6:
																$key_paciente['carrera'] = "Ingeniería Industrial";
																break;


															case 7:
																$key_paciente['carrera'] = "Ingeniería Civil";
																break;


															case 8:
																$key_paciente['carrera'] = "Ingeniería Eléctrica Electrónica";
																break;

															case 9:
																$key_paciente['carrera'] = "Ingeniería Mecánica";
																break;

															case 10:
																$key_paciente['carrera'] = "Pedagogía";
																break;

															case 11:
																$key_paciente['carrera'] = "Relaciones Internacionales";
																break;

															case 12:
																$key_paciente['carrera'] = "Comunicación y Periodismo";
																break;

															case 13:
																$key_paciente['carrera'] = "Planificación para el Desarrollo Agropecuario";
																break;

															case 14:
																$key_paciente['carrera'] = "Sociología";
																break;

															case 15:
																$key_paciente['carrera'] = "SUA-Derecho";
																break;

															case 16:
																$key_paciente['carrera'] = "SUA-Ecommía";
																break;

															case 17:
																$key_paciente['carrera'] = "SUA-Relaciones Internacionales";
																break;

														}
														?>

														<?php
														$turn = '';

														if ($key_paciente['turno'] == 1) {
															$turn = 'Matutino';

														} elseif ($key_paciente['turno'] == 2) {
															$turn = 'Vespertino';


														} elseif ($key_paciente['turno'] == 3) {
															$turn = 'Mixto';

														}
														$burn = date("j/M/Y", strtotime($key_paciente['nacimiento']));


														?>
														<tr>
															<td><?php echo $key_paciente['year'].'-'.$key_paciente['semester'].'-'.$key_paciente['folio']?></td>
															<td><?php echo $key_paciente['nombre']?></td>
															<td><?php echo $key_paciente['paterno']?></td>
															<td><?php echo $key_paciente['materno']?></td>
															<td><?php echo $burn?></td>
															<td><?php echo $key_paciente['genero']?></td>
															<td><?php echo $key_paciente['telefono']?></td>
															<td><?php echo $key_paciente['celular']?></td>
															<td><?php echo $key_paciente['email']?></td>
															<td><?php echo $key_paciente['direccion']?></td>
															<td><?php echo $key_paciente['carrera']?></td>
															<td><?php echo $key_paciente['semestre']?></td>
															<td><?php echo $key_paciente['cuenta']?></td>
															<td><?php echo $turn?></td>
															<td><?php echo $key_paciente['promedio']?></td>
														</tr>


													<?php endforeach; ?>
												<?php endif; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

						<?php endif; ?>
						<!-- End -->

					</div>
					<!-- /.card-body -->
					<div class="card-footer">

					</div>
					<!-- /.card-footer-->
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>
</section>
