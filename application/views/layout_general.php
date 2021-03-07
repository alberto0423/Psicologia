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

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stamina/fontawesome/css/all.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stamina/adminlte/css/adminlte.min.css">

	<link rel="stylesheet" href="<?php echo base_url();?>assets/heart/instrucciones/css/main.css">

	<!--Iconos -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

	<!--Fav Icon-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/heart/General/img/LogoSocrates.png">
	<!--Final de Fav Icon-->

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
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>assets/stamina/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url();?>assets/stamina/adminlte/js/adminlte.min.js"></script>
	<?php
	if (isset($js) && is_array($js)) {
		foreach ($js as $js_key) {
			echo $js_key;
		}
	}
	?>

</body>
</html>
