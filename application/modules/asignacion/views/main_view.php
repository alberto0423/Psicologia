<a href="<?php echo site_url('escritorio/principal') ?>" class="btn btn-close"><span
			class="fas fa-arrow-alt-circle-left"></span></a>


<!--Container -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="card <?php echo (isset($shadow)) ? $shadow : FALSE ?> card-secondary">
				<div class="card-header">
					<?php echo (isset($tit_hdr_content)) ? $tit_hdr_content : FALSE; ?>
				</div>
				<div class="card-body">


					<h3 class="offset-4">Pacientes por asignar</h3>
					<?php
					$input_recipe = array(
							'type' => 'text',
							'id' => 'asign',
							'class' => 'form-control',
							'data-toggle' => 'tooltip',
							'title' => 'Asignacion',
							'name' => 'asignacion',
							'placeholder' => ''
					);

					/*
					$btn_save_asign = array(
							'type' 			=> 'button',
							'content' 		=> 'Asignar',
							'class' 		=> 'form-control btn btn-success mb-4',
							'data-toggle' 	=> "modal" ,
							'data-target'	=> "#asignacion",
							'data-whatever'	=>	"@fat"
					);
					*/

					$i = 1;

					echo validation_errors('<span class="font-weight-bold">', '</span>');
					#var_dump($pacientes);

					?>


					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="table-responsive">

									<table id="example" class="table table-striped table-bordered" cellspacing="0"
										   width="100%">
										<div class="row m-3">
										</div>
										<thead>

										<tr>
											<th># de paciente</th>
											<!--<th>Folio</th>-->
											<th>Folio</th>
											<th>Nombres</th>
											<th>Carrera</th>
											<th>Motivo de consulta</th>
											<th>Fecha de atención</th>
											<th>Estatus</th>
											<th>&nbsp;</th>


										</tr>
										</thead>


										<?php if (is_array($pacientes) && $pacientes != NULL): ?>


											<?php foreach ($pacientes as $key_paciente): ?>

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

												if ($key_paciente['status'] == 0) {
													$status = form_label('Nuevo ', '', 'class="alert alert-primary"');
													$btn_save_asign = form_button('Asignar', 'Asignar', 'class="form-control btn btn-success mb-4"   data-toggle="modal"  data-target="#asignacion" id="asignacion"');

												} else if ($key_paciente['status'] == 1) {
													$status = form_label('Asignado ', '', 'class="alert alert-warning"');
												 #	$btn_save_asign = form_button('Asignar', 'Asignar', 'class="form-control btn btn-success mb-4"   data-toggle="modal"  data-target="#asignacion"  id="asignacion" hidden="hidden');

												}

												?>

												<tr>
													<td><?php echo $key_paciente['id']?></td>
												<!--<td><?php echo $key_paciente['year'].'-'.$key_paciente['semester'].'-'.$key_paciente['num_folio']?></td>-->
													<td><?php echo $key_paciente['year'].'-'. $key_paciente['semester'].'-'.$key_paciente['num_folio']?></td>
													<td><?php echo $key_paciente['name']. ' '.$key_paciente['paterno']. ' '. $key_paciente['materno']?></td>
													<td><?php echo $key_paciente['carrera']?></td>
													<td><?php echo $key_paciente['motivo']?></td>
													<td><?php echo $key_paciente['horario']?></td>
													<td><?php echo $status?></td>
													<td>
														<?php if (isset($btn_save_asign)): ?>
															<?php echo $btn_save_asign?>
														<?php else:?>
															<?php echo " "?>
														<?php endif;?>

													</td>
													<div class="modal fade" id="asignacion" tabindex="-1" role="dialog"
														 aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="exampleModalLabel">Nueva
																		Asignación </h5>
																	<button type="button" class="close" data-dismiss="modal"
																			aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<div class="modal-body">
																	<?php echo form_open(); ?>


																	<div class="form-group">
																		<label for="message-text" class="col-form-label">Psicologo:</label>
																		<select name="users" class="custom-select col-md-6">
																			<option value="0">Selecciona....</option>
																			<?php foreach ($usuarios as $key_user): ?>
																				<?php echo "<option value='" . $key_user['id'] . "'>" . $key_user['nombre'] . "</option>"; ?>
																			<?php endforeach; ?>
																		</select>

																	</div>


																	<div class="form-group">
																		<label for="recipient-name" class="col-form-label">Número
																			de paciente:</label>
																		<input type="text" class="form-control col-xl-12"
																			   id="id_paciente" name="paciente">
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-danger"
																				data-dismiss="modal">Close
																		</button>
																		<button type="submit" class="btn btn-success">
																			Asignar
																		</button>
																	</div>

																	<?php echo form_close(); ?>

																</div>
															</div>
														</div>
													</div>
												</tr>






											<?php endforeach; ?>

										<?php endif; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>
</div>
<!--End container -->




