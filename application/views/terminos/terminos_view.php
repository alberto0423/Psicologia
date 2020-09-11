<div class="card bg-light col-6 bg-gradient-gray offset-3">
	<div class="card-header text-white">Aviso de privacidad</div>
	<div class="card-body bg-gradient-gray">
		<div class="col-12">
			<?php echo (isset($terminos))? $terminos : FALSE;?></div>
		</div>
	<div class="card-footer col-12">
		<a href="<?php echo base_url('citas/Citas') ?>" class="btn btn-success">Sí Acepto</a>
		<a href="<?php echo base_url() ?>" class="btn btn-danger">No Acepto</a>
	</div>
</div>
