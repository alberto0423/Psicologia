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
						<th>Nombre</th>
						<th>Apellido Paterno</th>
						<th>Apellido Materno</th>
						<th>Fecha de Nacimiento</th>


					</tr>
					</thead>
					<tbody>
					<?php if (is_array($sessions) != null): ?>

						<?php foreach ($sessions as $session): ?>

							<?php echo "<tr><td>" . $session->nombre . "</td>" ?>
							<?php echo "<td>" . $session->paterno . "</td>" ?>
							<?php echo "<td>" . $session->materno . "</td>" ?>

							<?php echo "<td>" . $session->fecha_nacimiento . "</td>" ?>


						<?php endforeach; ?>

					<?php endif; ?>


					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

