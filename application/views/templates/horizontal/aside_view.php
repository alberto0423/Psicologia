<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="" class="brand-link">
		<img src=""
			 alt=""
			 class="brand-image img-circle elevation-3"
			 style="opacity: .8">
		<span class="brand-text font-weight-light">Administración</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?php echo (isset($name_user)? $name_user : "Sin Nombre"); ?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

				<!--Página para registar nuevos usuarios -->
				<li class="nav-item has-treeview">
					<a href="" class="nav-link">
						<i class="nav-icon fas fa-user"></i>
						<p>
							Nuevos usuarios
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Registro de nuevos usuarios</p>
							</a>
						</li>


					</ul>
				</li>
				<!-- End-->

				<!--Pagina para registrar reactivos -->
				<li class="nav-item has-treeview menu-open">
					<a href="#" class="nav-link active">
						<i class="nav-icon fas fa-copy"></i>
						<p>
							Registro de reactivos
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?php echo base_url('nuevos_user/Registro')?>" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Nuevos Reactivos</p>
							</a>
						</li>




					</ul>
				</li>
				<!-- End-->

				<!--Pagina para validar reactivos -->
				<li class="nav-item has-treeview">
					<a href="#" class="nav-link">
						<i class="nav-icon fas fa-tree"></i>
						<p>
							Validación de reactivos
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="../UI/general.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>General</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/icons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Icons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/buttons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Buttons</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/sliders.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Sliders</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/modals.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Modals & Alerts</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/navbar.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Navbar & Tabs</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/timeline.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Timeline</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="../UI/ribbons.html" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Ribbons</p>
							</a>
						</li>
					</ul>
				</li>
				<!-- End-->





			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
