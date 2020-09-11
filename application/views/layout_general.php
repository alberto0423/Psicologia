<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title><?php echo (isset($title_lgral))? $title_lgral : '¡Hola!';?></title>


	<link rel="stylesheet" href="<?php echo base_url();?>assets/heart/bootstrap/bootstrap.min.css">

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stamina/fontawesome/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stamina/adminlte/css/adminlte.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/heart/instrucciones/css/main.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/heart/header/header_style.css">

	<!--Iconos -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/heart/menu/css/lateral_menu.css">

	<!--Fav Icon-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/heart/img/logos/fes_logo_mini.png">
	<!--Final de Fav Icon-->

	<!--datables CSS básico datatable-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/heart/datatables/datatables.css"/>
	<!--datables estilo bootstrap 4 CSS-->
	<link rel="stylesheet"  type="text/css" href="<?php echo base_url();?>assets/heart/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
	<!-- css datatable -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/tablas_admin/css/main.css">



	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/heart/citas/css/citas.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/stamina/icheck/icheck-bootstrap.css" >







	<?php
	if (isset($css) && is_array($css)) {
		foreach ($css as $css_key) {
			echo $css_key;
		}
	}
	?>

</head>
<body>
	<div class="hold-transition layout-top-nav">
		<div class="wrapper">

			<?php echo (isset($header))? $header : FALSE;?>

			<?php echo (isset($main))? $main : FALSE;?>

			<?php echo (isset($aside))? $aside : FALSE;?>

			<?php echo (isset($footer))? $footer : FALSE;?>
		</div>
		<!-- ./wrapper -->
	</div>

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>assets/stamina/jquery/jquery-3.4.1.min.js"></script>

	<!-- jQuery UI-->
	<script src="<?php echo base_url();?>assets/stamina/jquery/jquery-ui.min.js"></script>

	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>assets/stamina/adminlte/js/adminlte.min.js"></script>

	<script src="<?php echo base_url();?>assets/heart/menu/js/lateral_menu.js"></script>

	<script src="<?php echo base_url();?>assets/heart/citas/js/show_input.js"></script>




	<!-- popper -->
	<script src="<?php echo base_url(); ?>assets/heart/datatables/popper/popper.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>assets/stamina/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- datatables -->
	<script src="<?php echo base_url(); ?>assets/heart/datatables/datatables.js"></script>


	<!-- para usar botones-->
	<script src="<?php echo base_url(); ?>assets/heart/datatables/Buttons-1.5.6/js/dataTables.buttons.js"></script>
	<script src="<?php echo base_url(); ?>assets/heart/datatables/JSZip-2.5.0/jszip.js"></script>
	<script src="<?php echo base_url(); ?>assets/heart/datatables/pdfmake-0.1.36/pdfmake.js"></script>
	<script src="<?php echo base_url(); ?>assets/heart/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
	<script src="<?php echo base_url(); ?>assets/heart/datatables/Buttons-1.5.6/js/buttons.html5.js"></script>

	<!-- código js-->
	<script src="<?php echo base_url(); ?>assets/heart/datatables/table.js"></script>

	<script src="<?php echo base_url(); ?>assets/stamina/ajax/ajax.js"></script>

	<script src="<?php echo base_url(); ?>assets/heart/asignacion/js/selector.js"></script>

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>









	<?php
	if (isset($js) && is_array($js)) {
		foreach ($js as $js_key) {
			echo $js_key;
		}
	}
	?>

</body>
</html>
