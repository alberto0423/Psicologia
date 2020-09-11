<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/heart/bootstrap/bootstrap.min.css">

	<!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/fontawesome/css/all.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/adminlte/css/adminlte.css">
    <!-- icheck-bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/icheck-bootstrap/icheck-bootstrap.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stamina/overlayScrollbars/css/OverlayScrollbars.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Ionicons -->
	<link href="<?php echo base_url()?>assets/stamina/adminlte/icons/css/ionicons.min.css" rel="stylesheet">
    <!-- Chart Css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Chart/css/Chart.min.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <?php
    if (isset($css) && is_array($css)) {
        foreach ($css as $css_key) {
            echo $css_key;
        }
    }
    ?>
    <title>Admin</title>
</head>
<?php if (isset($vertical_select)): ?>
<body class="hold-transition layout-top-nav">
<?php echo (isset($vertical)) ? $vertical : FALSE; ?>
<?php endif; ?>

<?php if (isset($horizontal_select)): ?>
<body class="hold-transition sidebar-mini layout-fixed">
<?php echo (isset($horizontal)) ? $horizontal : FALSE; ?>
<?php endif; ?>

<?php if (isset($access_select)): ?>
<body class="hold-transition login-page">
<?php echo (isset($access)) ? $access : FALSE; ?>
<?php endif; ?>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/stamina/jquery/jquery-3.4.1.min.js"></script>

<!-- jQuery UI-->
<script src="<?php echo base_url(); ?>assets/stamina/jquery/jquery-ui.min.js"></script>


<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Popper -->
<script src="<?php echo base_url(); ?>assets/heart/datatables/popper/popper.min.js"></script>


<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/stamina/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/stamina/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/stamina/adminlte/js/adminlte.min.js"></script>
<!-- Chart Js -->
<script src="<?php echo base_url(); ?>assets/Chart/js/Chart.min.js"></script>
<!-- Validar formulario desde fron con Js -->
<script src="<?php echo base_url(); ?>assets/extadminlte/js/validation_form.js"></script>

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<script src="<?php echo base_url(); ?>assets/heart/asignacion/js/selector.js"></script>



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
<!-- selector js -->

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

