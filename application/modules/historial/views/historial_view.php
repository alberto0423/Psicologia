<a href="<?php echo base_url('escritorio/principal') ?>" class="btn btn-close"><span
			class="fas fa-arrow-alt-circle-left"></span></a>


<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				<table id="example" class="table table-striped table-bordered"
					   cellspacing="0"
					   width="100%">
					<thead>
					<tr>
						<th># Sesión</th>
						<th>Nombre</th>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Fecha de Nacimiento</th>
						<th>Nota</th>
						<th>Fecha de la sesión</th>
						<th>Fecha de la próxima sesión</th>


					</tr>
					</thead>
					<tbody>
					<?php if(is_array($sessions) != NULL):?>
						<?php foreach ($sessions as $session):?>
							<tr>
								<td><?php echo $session->numero_sesion?></td>
								<td><?php echo $session->nombre?></td>
								<td><?php echo $session->paterno?></td>
								<td><?php echo $session->materno?></td>
								<td><?php echo $session->fecha_nacimiento?></td>
								<td><?php echo $session->nota_sesion;?></td>
								<td><?php echo $session->fecha;?></td>
								<td><?php echo $session->proxima_sesion?></td>
							</tr>
						<?php endforeach;?>

					<?php endif;?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

