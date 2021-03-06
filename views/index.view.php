<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>AkiraPos | Solución Perfecta</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&family=Roboto&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="Public/css/font-awesome.min.css">
	<script src="https://code.highcharts.com/highcharts.js"></script>
<!-- 	<script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
	<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script> -->

<!-- 	<script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script> -->
  
	<link rel="stylesheet" href="public/css/default.css">
	<link rel="stylesheet" href="public/css/index.css">
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
				<h2>Sistema Administrativo</h2>			
			</header>
            <!-- <div class="spinner"></div> -->

			<div class="ContentCard">
					<div class="ContentCardItems">
						
						<div id="container" style="width:100%; height:400px;"></div>
					</div>
					
					<div class="ContentCardItems">
						<div id="container2" style="width:100%; height:400px;"></div>
					</div>
					
					<div class="ContentCardItems">
						<div id="container3" style="width:100%; height:400px;"></div>
					</div>

					
					
					
				</div>

		</div>
		
	</main>
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
	<script src="public/js/main.js"></script>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Cuentas por Cobrar'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });
        
    });
	document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container2', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Compras'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });
       
        
    });

    document.addEventListener('DOMContentLoaded', function () {
        const chart = Highcharts.chart('container3', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Ventas'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });
       
        
    });
	</script>
</body>
</html>