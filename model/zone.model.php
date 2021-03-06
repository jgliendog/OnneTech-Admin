<?php 
include('controller/method.controller.php');
include_once('controller/setting.controller.php');

$ListTable = new ListData($conexion);


$Vista = $ListTable->ListResultFile($conexion,'fzone',ItemsPager);
$row = count($Vista);

$numberPager = ceil(($row/ItemsPager));

$stard =0;

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

// echo "comienza ".$stard;
	$PagerResult = $ListTable->PagerResult($conexion,'fzone','FC_ID',$stard,ItemsPager);


include('views/zone.view.php');