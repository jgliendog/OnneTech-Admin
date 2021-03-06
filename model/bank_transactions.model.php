<?php 
include('controller/method.controller.php');
include_once('controller/setting.controller.php');

$datos = new Validator();


$sqlTable="SELECT FCT_ID,FCT_CODE,FCT_DESCRIPTION, FCT_DETAILS,FCT_TYPEPRODC,FCT_TYPECOST FROM fdepartament";
		$ListTable = $conexion->prepare($sqlTable);
		    $ListTable->execute();
		    $ListTable = $ListTable->fetchAll();






include('views/bank_transactions.view.php');