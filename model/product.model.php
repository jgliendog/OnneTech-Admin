<?php 
include('controller/method.controller.php');
include_once('controller/setting.controller.php');

$datos = new Validator();

$ListTable = new ListData($conexion);
$stard =0;

// $VistaProdCount = $ListTable->ListProdCate($conexion,'FI_ID',$stard,1000);
$Vista = $ListTable->ListResultFile($conexion,'finventory',ItemsPager);
$row = count($Vista);
$VistaCategory = $ListTable->ListDepartamentAct($conexion);
$VistaPrice = $ListTable->ListPrice($conexion);

// echo $row;

$numberPager = ceil(($row/ItemsPager));
// echo $numberPager;

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	if (isset($_GET['pag'])) {
		$pager=$_GET['pag'];
		if ($pager>0) {
			$stard= (($pager-1)*ItemsPager);
		}else{
			$stard=0;
		}
	}
	
}

$VistaProd = $ListTable->ListProdCate($conexion,'FI_ID',$stard,ItemsPager);





include('views/product.view.php');