	<?php 
	include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {
		$ZoneCode = $datos->DatosString($_POST['ZoneCode']);
		$ZoneDescription = $datos->DatosString($_POST['ZoneDescription']);
		$ZoneDetail = $datos->DatosInt($_POST['ZoneDetail']);
		$ZoneStardate = $datos->DatosFecha($_POST['ZoneStardate']);
		
		if (isset($_POST['ZoneStatus'])) {
				$ZoneStatus = $datos->DatosInt($_POST['ZoneStatus']);
			}else{
				$ZoneStatus = 0;
			}
		$ZoneCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);

		$sqlNewSeller = "INSERT INTO `fzone`(`FZ_CODE`,`FZ_DESCRIPTION`, `FZ_DETAILS`, `FZ_STARDATE`,`FZ_CREATEDATE`, `FZ_STATUS`, `FZ_USER`) VALUES ('$ZoneCode','$ZoneDescription','$ZoneDetail','$ZoneStardate','$ZoneCreateDate','$ZoneStatus','$UserID')";
		$rNewSeller = $conexion->prepare($sqlNewSeller); 
		$rNewSeller->execute();

		if($rNewSeller->rowCount()==1){
			echo "200";
		}else{
		// var_dump($rNewSeller);
			echo "Fail";
		}
}

	elseif ($_POST['action']=="Edit") {

		$id = $_POST['ZoneId'];

		$sql ="SELECT * FROM fzone WHERE FZ_ID=:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		// $stm->execute();
		$stm->execute(array(':doc' => $id));

		$result = $stm->fetchAll();

		echo json_encode($result);
	}

	elseif ($_POST['action']=="Delete") {

		$id = $_POST['ZoneId'];
		$slqdel = "DELETE FROM fzone WHERE FZ_ID = :doc";
		$pdo = $conexion->prepare($slqdel);
		$pdo->execute(array(':doc' => $id));
		$result = $pdo->fetchAll();

		if (isset($result)) {
		echo "200";
		}

	}
	elseif ($_POST['action']=="SaveEdit") {

		$ZoneId = $datos->DatosInt($_POST['ZoneId']);
		$ZoneDescription = $datos->DatosString($_POST['ZoneDescription']);
		$ZoneDetail = $datos->DatosString($_POST['ZoneDetail']);
		$ZoneStarDate = $datos->DatosFecha($_POST['ZoneStarDate']);
	

		if (isset($_POST['ZoneStatus'])) {
				$ZoneStatus = $datos->DatosInt($_POST['ZoneStatus']);
			}else{
				$ZoneStatus = 0;
			}
		$ZoneCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);



		$sqlNewRecord = "UPDATE fzone SET FZ_DESCRIPTION='$ZoneDescription', FZ_DETAILS='$ZoneDetail', FZ_STARDATE='$ZoneStarDate', FZ_STATUS='$ZoneStatus', FZ_USER='$UserID'  WHERE FZ_ID =:doc";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $ZoneId)); 
		if($rNewRecord->rowCount()==1){
		echo "200";
		// var_dump(rNewRecord);
		}else{
		echo "Fail";
		// var_dump(rNewRecord);

		}
	}

}

