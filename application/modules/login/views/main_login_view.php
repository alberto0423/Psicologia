<div class="col-xl-12">
	<a href="<?php echo site_url('Inicio') ?>" class="btn btn-close"><span class="fas fa-arrow-alt-circle-left"></span></a>
</div>


<div class="container">
	<div class="card bg-gradient-gray">
		<div class="card-body text-center">
			<?php echo form_open(); ?>
			<div class="input-group mb-3">
				<input type="text" name="email" value="" id="email"
					   class="form-control"
					   title="ingrese su usuario"
					   placeholder="Ingresar usuario" required="required">
				<div class="input-group-prepend">
					<span class="input-group-sm" id="basic-addon1"><i class="far fa-user"></i></span>


				</div>
				<span class="col-xl-12"></span>
				<input type="password" name="password" value="" id="password"
					   class="form-control"
					   title="ingrese su contraseña"
					   placeholder="Ingresar contraseña" >
				<div class="input-group-append">
					<div class="input-group-prepend">
						<span class="input-group-sm" id="basic-addon1"><i class="fa fa-lock"></i></span>


					</div>
				</div>
			</div>
			<div class="col-xl-12">
				<button type="submit" class="btn bg-gradient-success"> Accesar</button>
			</div>

			<?php echo form_close(); ?>
		</div>
	</div>

</div>
