<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>AkiraPos | Solución Perfecta | Cargos de Inventario</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Roboto&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Public/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/default.css">
	<link rel="stylesheet" href="public/css/operation.css">
</head>

<body>
	<main class="Remplace" id="main_content">

		<?php LinkGroup::Menu()?>
		<form action="#" id="form_tranfer" method="POST">
		<?php echo include('modulos/__logistics/frm.transfer.php');?>
	    <?php echo include('modulos/__logistics/frm.total.php'); ?>

		</form>
		


	</main>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="public/js/main.js"></script>
	<script src="public/js/logistic.js"></script>

</body>
</html>