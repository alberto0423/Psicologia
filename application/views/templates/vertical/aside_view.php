<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-cyan">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src=""
             alt=""
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Sistema de administración</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
				<?php
			#	var_dump($this->session->userdata('usuario')['nombre'],['paterno']);
				?>
                <a href="#" class="d-block"><?php echo (isset($this->session->userdata('usuario')['nombre'])? $this->session->userdata('usuario')['nombre'] : "Sin Nombre"); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                <!--Página para registar nuevos usuarios -->
				<?php if($this->session->userdata('usuario')['nivel'] == 3):?>
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
						<ion-icon name="person-add-outline"></ion-icon>
                        <p>
                           Nuevos usuarios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('registro/registro')?>" class="nav-link">
                                <i class="far fa-user"></i>
                                <p>Registrar nuevos usuarios</p>
                            </a>
                        </li>


                    </ul>
                </li>

                <!-- End-->

                <!--Pagina para registrar reactivos -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
						<ion-icon name="arrow-redo-outline"></ion-icon>
                        <p>
							Asignación de pacientes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('asignacion/principal')?>" class="nav-link">
								<ion-icon name="add-outline"></ion-icon>
                                <p>Asignar pacientes</p>
                            </a>
                        </li>




                    </ul>
                </li>
				<?php endif;?>
                <!-- End-->





				<!--Pagina para pacientes-->
                <li class="nav-item has-treeview">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>
                            Pacientes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-edit"></i>
                                <p>Modificación Paciente</p>
                            </a>
                        </li>
						<li class="nav-item">
							<a href="<?php echo base_url('asignacion/asignados')?>" class="nav-link">
								<i class="nav-icon fas fa-user-plus"></i>
								<p>Paciente Asignados</p>
							</a>
						</li>


					</ul>
                </li>
                <!-- End-->



				<!--Pagina para pacientes-->
				<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-paper-plane"></i>
					<p>
						Sessiones
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo base_url('sesiones/principal')?>" class="nav-link">
							<i class="nav-icon fas fa-user-edit"></i>
							<p>Nuevo Registro de Sesión</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo base_url('historial/Inicio')?>" class="nav-link">

						<i class="nav-icon fas fa-user-plus"></i>
							<p>Historial de Sesiones</p>
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
