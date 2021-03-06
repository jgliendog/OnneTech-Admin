<?php 
include('controller/method.controller.php');
include_once('controller/setting.controller.php');

$datos = new Validator();


$sqlTable="SELECT FI_ID,FI_CODE,FI_CATEGORY, FI_TIPYINV,FI_DESCRIPTION,FI_DETAILS,FI_UNIT,FI_BRAND FROM finventory WHERE FI_TIPYINV = 0";
		$ListTable = $conexion->prepare($sqlTable);
		    $ListTable->execute();
		    $ListTable = $ListTable->fetchAll();





include('views/pulled_aparts.view.php');