	<?php 
	include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {
		$SellerCode = $datos->DatosString($_POST['SellerCode']);
		$SellerDescription = $datos->DatosString($_POST['SellerDescription']);
		$SellerTypeDoc = $datos->DatosInt($_POST['SellerTypeDoc']);
		$SellerDocument = $datos->DatosString($_POST['SellerDocument']);
		$SellerAdress1 = $datos->DatosString($_POST['SellerAdress1']);
		$SellerLocation = $datos->DatosInt($_POST['SellerLocation']);
		$SellerZone= $datos->DatosInt($_POST['SellerZone']);
		$SellerPhone1 = $datos->DatosString($_POST['SellerPhone1']);
		$SellerPhone2 = $datos->DatosString($_POST['SellerPhone2']);
		$SellerMovil1 = $datos->DatosString($_POST['SellerMovil1']);
		$SellerMovil2 = $datos->DatosString($_POST['SellerMovil2']);
		$SellerEmail = $datos->DatosString($_POST['SellerEmail']);
		$SellerEmailAlt = $datos->DatosMail($_POST['SellerEmailAlt']);
		$SellerStarDate = $datos->DatosFecha($_POST['SellerStarDate']);
		if (isset($_POST['SellerComisionUtilStatus'])) {
			$SellerComisionUtilStatus = $datos->DatosInt($_POST['SellerComisionUtilStatus']);
		}else{
			$SellerComisionUtilStatus = 0;
		}

		if (isset($_POST['SellerComisionDepStatus'])) {
			$SellerComisionDepStatus = $datos->DatosInt($_POST['SellerComisionDepStatus']);
			
		}else{
			$SellerComisionDepStatus = 0;
		}

		if (isset($_POST['SellerComisionCobroStatus'])) {
			$SellerComisionCobroStatus = $datos->DatosInt($_POST['SellerComisionCobroStatus']);
			
		}else{
			$SellerComisionCobroStatus = 0;
		}

		if (isset($_POST['SellerComisionVolStatus'])) {
			$SellerComisionVolStatus = $datos->DatosInt($_POST['SellerComisionVolStatus']);
		
		}else{
			$SellerComisionVolStatus = 0;
		}

		if (isset($_POST['SellerComisionSaleStatus'])) {
			$SellerComisionSaleStatus = $datos->DatosInt($_POST['SellerComisionSaleStatus']);
			
		}else{
			$SellerComisionSaleStatus = 0;
		}
		$SellerComisionDep = $datos->DatosInt($_POST['SellerComisionDep']);
		$SellerComisionCobro = $datos->DatosInt($_POST['SellerComisionCobro']);
		$SellerComisionVol = $datos->DatosInt($_POST['SellerComisionVol']);
		$SellerCommisionSale = $datos->DatosInt($_POST['SellerCommisionSale']);
		$SellerCommisionUtil = $datos->DatosInt($_POST['SellerCommisionUtil']);



		if (isset($_POST['SellerStatus'])) {
				$SellerStatus = $datos->DatosInt($_POST['SellerStatus']);
			}else{
				$SellerStatus = 0;
			}
		$SellerCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);

		$sqlNewSeller = "INSERT INTO `fseller`(`FVD_CODE`,`FVD_DESCRIPTION`, `FVD_ADRESS`, `FVD_TYPEDOC`, `FVD_DOCUMENT`, `FVD_AREADEPTAMENT`, `FVD_DIRECTBOSS`,`FVD_LOCATION`, `FVD_ZONE`,`FVD_PHONE1`, `FVD_PHONE2`, `FVD_MOVIL1`, `FVD_MOVIL2` , `FVD_EMAIL`, `FVD_EMAIL_ALT`,`FVD_COMISIONPORDEP`, `FVD_COMISIONCOPORCOBRO`, `FVD_COMISIONPORVOL`, `FVD_COMISIONPORSALE`,`FVD_COMISIONPORUTI`,`FVD_COMISIONDEPSTATUS`, `FVD_COMISIONCOBSTATUS`, `FVD_COMISIONVOLSTATUS`, `FVD_COMISIONSALESTATUS`, `FVD_COMISIONUTISTATUS`, `FVD_COMIPORCEN`, `FVD_STARDATE`,`FVD_CREATEDATE`, `FVD_STATUS`, `FVD_USER`) VALUES ('$SellerCode','$SellerDescription','$SellerAdress1','$SellerTypeDoc','$SellerDocument','1','1','$SellerLocation','$SellerZone','$SellerPhone1','$SellerPhone2','$SellerMovil1','$SellerMovil2','$SellerEmail','$SellerEmailAlt','$SellerComisionDep','$SellerComisionCobro','$SellerComisionVol','$SellerCommisionSale','$SellerCommisionUtil','$SellerComisionDepStatus','$SellerComisionCobroStatus','$SellerComisionVolStatus','$SellerComisionSaleStatus','$SellerComisionUtilStatus','1','$SellerStarDate','$SellerCreateDate','$SellerStatus','$UserID')";
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

		$id = $_POST['SellerId'];

		$sql ="SELECT * FROM fseller WHERE FVD_ID=:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		// $stm->execute();
		$stm->execute(array(':doc' => $id));

		$result = $stm->fetchAll();

		echo json_encode($result);
	}

	elseif ($_POST['action']=="Delete") {

		$id = $_POST['SellerId'];
		$slqdel = "DELETE FROM fseller WHERE FVD_ID = :doc";
		$pdo = $conexion->prepare($slqdel);
		$pdo->execute(array(':doc' => $id));
		$seller = $pdo->fetchAll();

		if (isset($seller)) {
		echo "200";
		}

	}
	elseif ($_POST['action']=="SaveEdit") {

		$SellerId = $datos->DatosInt($_POST['SellerId']);
		$SellerDescription = $datos->DatosString($_POST['SellerDescription']);
		$SellerTypeDoc = $datos->DatosInt($_POST['SellerTypeDoc']);
		$SellerDocument = $datos->DatosString($_POST['SellerDocument']);
		$SellerAdress1 = $datos->DatosString($_POST['SellerAdress1']);
		$SellerLocation = $datos->DatosInt($_POST['SellerLocation']);
		$SellerZone= $datos->DatosInt($_POST['SellerZone']);
		$SellerPhone1 = $datos->DatosString($_POST['SellerPhone1']);
		$SellerPhone2 = $datos->DatosString($_POST['SellerPhone2']);
		$SellerMovil1 = $datos->DatosString($_POST['SellerMovil1']);
		$SellerMovil2 = $datos->DatosString($_POST['SellerMovil2']);
		$SellerEmail = $datos->DatosString($_POST['SellerEmail']);
		$SellerEmailAlt = $datos->DatosMail($_POST['SellerEmailAlt']);
		// $SellerStarDate = $datos->DatosFecha($_POST['SellerStarDate']);
		if (isset($_POST['SellerComisionUtilStatus'])) {
			$SellerComisionUtilStatus = $datos->DatosInt($_POST['SellerComisionUtilStatus']);
		}else{
			$SellerComisionUtilStatus = 0;
		}

		if (isset($_POST['SellerComisionDepStatus'])) {
			$SellerComisionDepStatus = $datos->DatosInt($_POST['SellerComisionDepStatus']);
			
		}else{
			$SellerComisionDepStatus = 0;
		}

		if (isset($_POST['SellerComisionCobroStatus'])) {
			$SellerComisionCobroStatus = $datos->DatosInt($_POST['SellerComisionCobroStatus']);
			
		}else{
			$SellerComisionCobroStatus = 0;
		}

		if (isset($_POST['SellerComisionVolStatus'])) {
			$SellerComisionVolStatus = $datos->DatosInt($_POST['SellerComisionVolStatus']);
		
		}else{
			$SellerComisionVolStatus = 0;
		}

		if (isset($_POST['SellerComisionSaleStatus'])) {
			$SellerComisionSaleStatus = $datos->DatosInt($_POST['SellerComisionSaleStatus']);
			
		}else{
			$SellerComisionSaleStatus = 0;
		}
		$SellerComisionDep = $datos->DatosInt($_POST['SellerComisionDep']);
		$SellerComisionCobro = $datos->DatosInt($_POST['SellerComisionCobro']);
		$SellerComisionVol = $datos->DatosInt($_POST['SellerComisionVol']);
		$SellerCommisionSale = $datos->DatosInt($_POST['SellerCommisionSale']);
		$SellerCommisionUtil = $datos->DatosInt($_POST['SellerCommisionUtil']);



		if (isset($_POST['SellerStatus'])) {
				$SellerStatus = $datos->DatosInt($_POST['SellerStatus']);
			}else{
				$SellerStatus = 0;
			}
		$SellerCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);



		$sqlNewRecord = "UPDATE fseller SET FVD_DESCRIPTION='$SellerDescription', FVD_ADRESS='$SellerAdress1', FVD_TYPEDOC='$SellerTypeDoc', FVD_DOCUMENT='$SellerDocument', FVD_AREADEPTAMENT='1', FVD_DIRECTBOSS='1', FVD_LOCATION='$SellerLocation' WHERE FVD_ID =:doc";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $SellerId)); 
		if($rNewRecord->rowCount()==1){
		echo "200";
		// var_dump(rNewRecord);
		}else{
		echo "Fail";
		// var_dump(rNewRecord);

		}
	}

}

