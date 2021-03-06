<?php 
include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {
		$StorageCode = $datos->DatosString($_POST['StorageCode']);
		$StorageDescription = $datos->DatosString($_POST['StorageDescription']);
		$StorageLiable = $datos->DatosString($_POST['StorageLiable']);
		$StorageLocation = $datos->DatosString($_POST['StorageLocation']);
		$StorageDate = $datos->DatosFecha($_POST['StorageDate']);
		$StorageDetail = $datos->DatosString($_POST['StorageDetail']);
		
		
		if (isset($_POST['StorageStatus'])) {
			$StorageStatus = $datos->DatosInt($_POST['StorageStatus']);
		}else{
			$StorageStatus = 0;
		}
		$CreateDate = date('Y/m/d');
		$UserID = '1';
// $UserID = $datos->DatosString($_POST['UserID']);

       
		$sqlNewRecord = "INSERT INTO `fstorage`(`FDP_CODE`,`FDP_DESCRIPTION`,`FDP_LIABLE`,`FDP_LOCATION`,`FDP_STARDATE`,`FDP_DETAILS`,`FDP_CREATEDATE`,`FDP_USER`,`FDP_STATUS`) VALUES ('$StorageCode','$StorageDescription','$StorageLiable','$StorageLocation','$StorageDate','$StorageDetail','$CreateDate','$UserID','$StorageStatus')";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(); 
		if($rNewRecord->rowCount()==1){
			echo "ok";
			// echo var_dump($rNewRecord);
		}else{
			echo "Fail";
			// echo var_dump($rNewRecord);
		}

	}
	elseif ($_POST['action']=="SaveEdit"&& isset($_POST['StorageId'])) {
 		$StorageId = $datos->DatosInt($_POST['StorageId']);
		$StorageDescription = $datos->DatosString($_POST['StorageDescription']);
		$StorageLiable = $datos->DatosString($_POST['StorageLiable']);
		$StorageLocation = $datos->DatosString($_POST['StorageLocation']);
		$StorageDetail = $datos->DatosString($_POST['StorageDetail']);
		$StorageDate = $datos->DatosString($_POST['StorageDate']);
		
		if (isset($_POST['StorageStatus'])) {
			$StorageStatus = $datos->DatosInt($_POST['StorageStatus']);
		}else{
			$StorageStatus = 0;
		}
		$UserID = '1';

		$sqlNewRecord = "UPDATE fstorage SET FDP_DESCRIPTION='$StorageDescription',FDP_LIABLE='$StorageLiable',FDP_LOCATION='$StorageLocation',FDP_STARDATE='$StorageDate',FDP_DETAILS='$StorageDetail',FDP_STATUS ='$StorageStatus' WHERE FDP_ID =:doc ";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $StorageId)); 
		if($rNewRecord->rowCount()==1){
			echo "ok";
		}else{
			echo "Fail";
			// echo var_dump($rNewRecord);
			
		}
	}
}

elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
	if ($_GET['action']=="Edit"&& isset($_GET['id'])) {

		$id = $_GET['id'];

		$sql ="SELECT FDP_ID,FDP_CODE,FDP_DESCRIPTION,FDP_LIABLE,FDP_LOCATION,FDP_STARDATE,FDP_DETAILS,FDP_STATUS FROM fstorage WHERE FDP_ID =:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		$stm->execute(array(':doc' => $id));
		$result = $stm->fetchAll();

		echo $data= json_encode($result);
		// echo var_dump($result);

	} elseif($_GET['action']=="Delete"&& isset($_GET['id'])){
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$slqdel = "DELETE  FROM fstorage WHERE FDP_ID = :doc";
			$pdo = $conexion->prepare($slqdel);
			$pdo->execute(array(':doc' => $id));
			$cliente = $pdo->fetchAll();

			if (isset($cliente)) {
				$out = "200";
			}


			echo json_encode($out);
		}
	}
}


