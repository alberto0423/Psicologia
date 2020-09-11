<a href="<?php echo site_url('escritorio/principal') ?>" class="btn btn-close"><span class="fas fa-arrow-alt-circle-left"></span></a>
<a href="<?php echo site_url('login/logout') ?>" class="btn btn-secondary float-lg-right"><span class="">

	</span>Cerrar Sesión</a>


<div class="col-12 col-sm-6 col-md-6 offset-3">
	<div class="card p-3">
		<div class="card-header">
			<h2 class="text-center">Administración</h2>
		</div>

		<?php
		#echo (isset($data_user)) ? $data_user : FALSE;
	#	var_dump($this->session->userdata('usuario')['nivel']);
		?>
		<?php if ($this->session->userdata('usuario')['nivel'] == 3): ?>
			<a href="<?php echo base_url('registro/registro'); ?>">
				<div class="info-box mb-3 bg-gradient-info">
					<span class="info-box-icon"><i class="fas fa-user"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Agregar Usuario</span>
						<span class="info-box-number">Sección dedicada para dar de alta a nuevos usuarios</span>
					</div>
					<!-- /.info-box-content -->
				</div>
			</a>



			<a href="<?php echo base_url('asignacion/principal'); ?>">
				<div class="info-box mb-3 bg-gradient-info">
					<span class="info-box-icon"><i class="fas fa-pencil-ruler"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Consultar</span>
						<span class="info-box-number">Consulta los pacientes en espera</span>
					</div>
					<!-- /.info-box-content -->
				</div>
			</a>
		<?php endif;?>





		<a href="<?php echo base_url('asignacion/asignados'); ?>">
			<div class="info-box mb-3 bg-gradient-info">
				<span class="info-box-icon"><i class="fas fa-pencil-ruler"></i></span>

				<div class="info-box-content">
					<span class="info-box-text">Pacientes Asignados</span>
					<span class="info-box-number">Aquí podrás los pacientes</span>
				</div>
				<!-- /.info-box-content -->
			</div>
		</a>
	</div>
</div>
