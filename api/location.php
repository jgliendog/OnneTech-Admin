	<?php 
	include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {
		$LocationCode = $datos->DatosString($_POST['LocationCode']);
		$LocationDescription = $datos->DatosString($_POST['LocationDescription']);
		$LocationDetail = $datos->DatosString($_POST['LocationDetail']);
		$LocationStardate = $datos->DatosFecha($_POST['LocationStarDate']);
		
		if (isset($_POST['LocationStatus'])) {
				$LocationStatus = $datos->DatosInt($_POST['LocationStatus']);
			}else{
				$LocationStatus = 0;
			}
		$LocationCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);

		$sqlNewSeller = "INSERT INTO `fLocation`(`FL_CODE`,`FL_DESCRIPTION`, `FL_DETAILS`, `FL_STARDATE`,`FL_CREATEDATE`, `FL_STATUS`, `FL_USER`) VALUES ('$LocationCode','$LocationDescription','$LocationDetail','$LocationStardate','$LocationCreateDate','$LocationStatus','$UserID')";
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

		$id = $_POST['LocationId'];

		$sql ="SELECT * FROM flocation WHERE FL_ID=:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		// $stm->execute();
		$stm->execute(array(':doc' => $id));

		$result = $stm->fetchAll();

		echo json_encode($result);
	}

	elseif ($_POST['action']=="Delete") {

		$id = $_POST['LocationId'];
		$slqdel = "DELETE FROM flocation WHERE FL_ID = :doc";
		$pdo = $conexion->prepare($slqdel);
		$pdo->execute(array(':doc' => $id));
		$result = $pdo->fetchAll();

		if (isset($result)) {
		echo "200";
		}

	}
	elseif ($_POST['action']=="SaveEdit") {

		$LocationId = $datos->DatosInt($_POST['LocationId']);
		$LocationDescription = $datos->DatosString($_POST['LocationDescription']);
		$LocationDetail = $datos->DatosString($_POST['LocationDetail']);
		$LocationStarDate = $datos->DatosFecha($_POST['LocationStarDate']);
	

		if (isset($_POST['LocationStatus'])) {
				$LocationStatus = $datos->DatosInt($_POST['LocationStatus']);
			}else{
				$LocationStatus = 0;
			}
		$LocationCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);



		$sqlNewRecord = "UPDATE flocation SET FL_DESCRIPTION='$LocationDescription', FL_DETAILS='$LocationDetail', FL_STARDATE='$LocationStarDate', FL_STATUS='$LocationStatus', FL_USER='$UserID'  WHERE FL_ID =:doc";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $LocationId)); 
		if($rNewRecord->rowCount()==1){
		echo "200";
		// var_dump(rNewRecord);
		}else{
		echo "Fail";
		// var_dump(rNewRecord);

		}
	}

}

