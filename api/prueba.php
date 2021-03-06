<?php 
include('../controller/method.controller.php');

	$datos = new Validator();

$id = 67;

		
		$sql ="SELECT * FROM fcustomer WHERE FC_ID=:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		// $stm->execute();
		$stm->execute(array(':doc' => $id));

		$result = $stm->fetchAll();


		echo json_encode($result,JSON_UNESCAPED_UNICODE);
		// echo json_encode($result);