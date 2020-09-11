<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet"
		  href="<?php echo base_url(); ?>assets/stamina/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- iCheck -->
	<link rel="stylesheet"
		  href="<?php echo base_url(); ?>assets/stamina/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/plugins/jqvmap/jqvmap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/css/adminlte.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/heart/css/main.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet"
		  href="<?php echo base_url(); ?>assets/stamina/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/plugins/summernote/summernote-bs4.css">
	<!-- DataTables -->
	<link rel="stylesheet"
		  href="<?php echo base_url(); ?>assets/stamina/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/heart/css/main.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!--CSS-->

	<title>IRC</title>
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/heart/iconos/LogoSocrates.png">
	<?php if (isset($ccs_data)): ?>
		<?php if (is_array($ccs_data)): ?>
			<?php foreach ($ccs_data as $key_css): ?>
				<?php echo $key_css; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	<?php endif; ?>
</head>
<body class="hold-transition layout-top-nav <?php echo (isset($body_color)) ? $body_color : FALSE; ?>">
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand-md navbar-white">
		<div class="container">
			<a href="#" class="navbar-brand">
				<img src="<?php echo base_url(); ?>assets/heart/img/socrates/irc_extendido.jpg"
					 alt="Rosario Castellanos" class="img-fluid ims">
				<span
					class="brand-text font-weight-light ml-1  <?php echo (isset($color_nav_text)) ? $color_nav_text : 'text-white'; ?>"><b>IRC</b></span>
			</a>
		</div>
	</nav>

	<div class="row">
		<div class="col-12 col-sm-10 offset-sm-1 col-md-6 offset-md-3">
			<?php echo (isset($header_login)) ? $header_login : FALSE; ?>


		</div>
	</div>
</div>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/jquery-ui/jquery-ui.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/chart.js/Chart.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/stamina/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/stamina/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script
	src="<?php echo base_url(); ?>assets/stamina/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script
	src="<?php echo base_url(); ?>assets/stamina/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/stamina/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/stamina/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/stamina/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/stamina/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/stamina/js/demo.js"></script>
<?php if (isset($js_data)): ?>
	<?php if (is_array($js_data)): ?>
		<?php foreach ($js_data as $js_data): ?>
			<?php echo $js_data; ?>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>
<script>
	$(function () {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
		});
	});
</script>
</body>
</html>
