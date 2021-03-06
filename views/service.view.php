<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>AkiraPos | Solución Perfecta</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Roboto&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="Public/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/default.css">
	<link rel="stylesheet" href="public/css/service.css">
</head>

<body>
	<main class="Content">
		<?php LinkGroup::Menu()?>

		<div class="ContentBody">
			<header class="ContentHeader">
				<a href="#" class="BtnNavBar" id="btn_nav_bar">
					<span class="LineNavBar"></span>
					<span class="LineNavBar"></span>
					<span class="LineNavBar"></span>
					<span class="LineNavBar"></span>
				</a>
				<div class="SeccionItems">
					<h2 class="Title">Archivo de Service</h2>
					<a id="create_record" class="BtnAdd" href="#" data="New"><span data="New">+</span></a>
				</div>
			</header>

			<div class="CustomerContent">
				<div class="BtnHomeContent">
				<a href="<?php echo(Url); ?>" class="BtnSm OutBefore"><span>Home</span></a>					
				</div>
				<?php include('modulos/__files/table_service.php') ?>


				<?php include('modulos/__files/form_service.php') ?>

			</div>

		</div>

	</main>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="public/js/main.js"></script>

</body>
</html>