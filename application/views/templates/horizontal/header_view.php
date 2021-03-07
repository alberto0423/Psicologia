<header>
	<nav class="main-header navbar navbar-expand-md navbar-light navbar-white main-header-irc">
		<div class="container">

			<a href="#" class="navbar-brand">
				<img src="<?php echo base_url($img_header); ?>" width="600px" alt="FES Aragón" class="img-fluid">
				<!--<span class="brand-text font-weight-light">Diagnóstico</span>-->
			</a>

			<!--<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>-->

			<!--<div class="collapse navbar-collapse order-3" id="navbarCollapse text-left">
				<ul class="navbar-nav order-md-3">
					<li class="nav-item">
						<a href="" class="nav-link text-white"><i class="fas fa-search text-white"></i> Consulta tu folio</a>
					</li>
				</ul>

			</div>-->
		</div>


	</nav>


	<div class="content-header">
		<div class="container">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark text-center">
						<?php echo (isset($name)) ? $name : FALSE; ?>

					</h1>

				</div>

			</div>

		</div>

	</div>


</header>
