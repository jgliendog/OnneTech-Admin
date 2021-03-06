<?php 
include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {

		$DepartamentCode = $datos->DatosString($_POST['DepartamentCode']);
		$DepartamentDescription = $datos->DatosString($_POST['DepartamentDescription']);
		$DepartamentDetail = $datos->DatosString($_POST['DepartamentDetail']);
		$DepartamentTypeInv = $datos->DatosInt($_POST['DepartamentTypeInv']);
		$DepartamentDate = $datos->DatosFecha($_POST['DepartamentDate']);
		$DepartementTypeCost = $datos->DatosInt($_POST['DepartementTypeCost']);
		$DepartamentStatus = $datos->DatosInt($_POST['DepartamentStatus']);
		
		// if ($DepartamentTypeInv==1) {
		// 	$ManageInv = 1;
		// } else {
		// 	$ManageInv = 0;
		// }
		switch ($DepartamentTypeInv) {
			case '1':
				$ManageInv = '1';
				break;
			case 3:
				$ManageInv = '1';
				break;
			case 4:
				$ManageInv = '1';
				break;
			
			default:
				$ManageInv = '0';
				break;
		}
		$CreateDate = date('Y/m/d');
		$UserID = '1';
// $UserID = $datos->DatosString($_POST['UserID']);



		$sqlNewRecord = "INSERT INTO `fdepartament`(`FCT_CODE`,`FCT_DESCRIPTION`,`FCT_TYPEPRODC`,`FCT_TYPECOST`,`FCT_MANEJAINV`,`FCT_DETAILS`,`FCT_CREATEDATE`,`FCT_STARDATE`,`FCT_STATUS`,`FCT_USER`) VALUES ('$DepartamentCode','$DepartamentDescription','$DepartamentTypeInv','$DepartementTypeCost','$ManageInv','$DepartamentDetail','$CreateDate','$DepartamentDate','$DepartamentStatus','$UserID')";
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
	// Grabar editar
	elseif ($_POST['action']=="SaveEdit"&& isset($_POST['DepartamentId'])) {


		$DepartamentId = $datos->DatosString($_POST['DepartamentId']);
		$DepartamentDescription = $datos->DatosString($_POST['DepartamentDescription']);
		$DepartamentDetail = $datos->DatosString($_POST['DepartamentDetail']);
		$DepartamentDate = $datos->DatosFecha($_POST['DepartamentDate']);
		
		if (isset($_POST['DepartamentStatus'])) {
			$Status = $datos->DatosInt($_POST['DepartamentStatus']);
		}else{
			$Status = 0;
		}
		$UserID = '1';

		$sqlNewRecord = "UPDATE fdepartament SET FCT_DESCRIPTION='$DepartamentDescription',FCT_DETAILS='$DepartamentDetail',FCT_STARDATE='$DepartamentDate',FCT_STATUS='$Status',FCT_USER='$UserID' WHERE FCT_ID =:doc ";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $DepartamentId)); 
		if($rNewRecord->rowCount()==1){
			echo "ok";
		}else{
			echo "Fail";
			// echo var_dump($rNewRecord);

		}

	}



}elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
	if ($_GET['action']=="Edit"&& isset($_GET['id'])) {

		$id = $_GET['id'];

		$sql ="SELECT FCT_CODE,FCT_DESCRIPTION,FCT_DETAILS,FCT_TYPEPRODC,FCT_TYPECOST,FCT_STARDATE,FCT_STATUS,FCT_USER FROM fdepartament WHERE FCT_ID =:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		$stm->execute(array(':doc' => $id));
		$result = $stm->fetchAll();

		echo $data= json_encode($result);
		
	} elseif($_GET['action']=="Delete"&& isset($_GET['id'])){
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$slqdel = "DELETE  FROM fdepartament WHERE FCT_ID = :doc";
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


