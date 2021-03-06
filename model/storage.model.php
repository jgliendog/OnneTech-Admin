<?php 

include('controller/method.controller.php');


$ListTable = new ListData($conexion);


$Vista = $ListTable->ListResultFile($conexion, 'fstorage','FDP_ID');
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
	$PagerResult = $ListTable->PagerResult($conexion,'fstorage','FDP_ID',$stard,ItemsPager);

include('views/storage.view.php');