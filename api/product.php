<?php 
include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {



		$ProductCode = $datos->DatosString($_POST['ProductCode']);
		$ProductTypeDepartament = $datos->DatosString($_POST['ProductTypeDepartament']);
		$ProductDescription = $datos->DatosString($_POST['ProductDescription']);
		$ProductDetail = $datos->DatosString($_POST['ProductDetail']);
		$ProductReferent = $datos->DatosString($_POST['ProductReferent']);
		$ProductUnit = $datos->DatosString($_POST['ProductUnit']);
		$ProductBrand = $datos->DatosString($_POST['ProductBrand']);
		$ProductModel = $datos->DatosString($_POST['ProductModel']);
		$ProductStall = $datos->DatosString($_POST['ProductStall']);
		$ProductPack = $datos->DatosFloat($_POST['ProductPack']);
		$ProductBeforeCost = $datos->DatosFloat($_POST['ProductBeforeCost']);
		$ProductCostToday = $datos->DatosFloat($_POST['ProductCostToday']);
		$ProductCostProme = $datos->DatosFloat($_POST['ProductCostProme']);
		if (isset($_POST['ProductDecimalPoint'])) {
			$ProductDecimalPoint = $datos->DatosInt($_POST['ProductDecimalPoint']);
		} else{
			$ProductDecimalPoint = 0;
		}
		$ProductMax = $datos->DatosInt($_POST['ProductMax']);
		$ProductMin = $datos->DatosInt($_POST['ProductMin']);
		if (isset($_POST['ProductExempt'])) {
			$ProductExempt = $datos->DatosInt($_POST['ProductExempt']);
		}else{
			$ProductExempt = 0;
		}
		
		$DateExpiration = '2020/10/01';

		$ProductCreateDate = $datos->DatosFecha($_POST['ProductCreateDate']);
		$Status = $datos->DatosInt($_POST['Status']);
			
		
		$UserID = 1;
		// $UserID = $datos->DatosString($_POST['UserID']);

		$sqlCategory = "SELECT FCT_ID, FCT_TYPEPRODC,FCT_TYPECOST, FCT_MANEJAINV	FROM fdepartament WHERE FCT_ID= :idCategory LIMIT 1";
		$rSqlCategory = $conexion->prepare($sqlCategory); 
		$rSqlCategory->execute(array(':idCategory' => $ProductTypeDepartament));

		$result = $rSqlCategory->fetchAll();

		foreach ($result as $key) {
		  $TypeInv = $key['FCT_TYPEPRODC'];
		  $TypeCost = $key['FCT_TYPECOST'];
		  $ManagerInv = $key['FCT_MANEJAINV'];
		}



		$sqlNewRecord = "INSERT INTO finventory	(FI_CODE, FI_CATEGORY, FI_DESCRIPTION, FI_DETAILS, FI_REFERENCE, FI_UNIT ,FI_BRAND , FI_MODEL , FI_STALL , FI_CAPACITY, FI_LASTCOST , FI_CURRENTCOST , FI_AVERAGECOST, FI_DECIMALPOINT , FI_MAXINV , FI_MININV,FI_EXEMT, FI_MANAGEINVENTORY, FI_TYPEINV, FI_TYPECOST, FI_CREATEDATE , FI_STATUS , FI_USER)
	VALUES ('$ProductCode', '$ProductTypeDepartament', '$ProductDescription', '$ProductDetail', '$ProductReferent', '$ProductUnit','$ProductBrand','$ProductModel','$ProductStall','$ProductPack','$ProductBeforeCost','$ProductCostToday','$ProductCostProme','$ProductDecimalPoint','$ProductMax','$ProductMin','$ProductExempt','$ManagerInv','$TypeInv','$TypeCost','$ProductCreateDate','$Status', '$UserID')";
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
	elseif ($_POST['action']=="SaveEdit"&& isset($_POST['ProductId'])) {

		$ProductId = $datos->DatosInt($_POST['ProductId']);
		$ProductDescription = $datos->DatosString($_POST['ProductDescription']);
		$ProductDetail = $datos->DatosString($_POST['ProductDetail']);
		$ProductReferent = $datos->DatosString($_POST['ProductReferent']);
		$ProductUnit = $datos->DatosString($_POST['ProductUnit']);
		$ProductBrand = $datos->DatosString($_POST['ProductBrand']);
		$ProductModel = $datos->DatosString($_POST['ProductModel']);
		$ProductStall = $datos->DatosString($_POST['ProductStall']);
		$ProductPack = $datos->DatosInt($_POST['ProductPack']);
		$ProductBeforeCost = $datos->DatosFloat($_POST['ProductBeforeCost']);
		$ProductCostToday = $datos->DatosFloat($_POST['ProductCostToday']);
		$ProductCostProme = $datos->DatosFloat($_POST['ProductCostProme']);
		$ProductDecimalPoint = $datos->DatosInt($_POST['ProductDecimalPoint']);
		$ProductMin = $datos->DatosFloat($_POST['ProductMin']);
		$ProductMax = $datos->DatosFloat($_POST['ProductMax']);
		$ProductExempt = $datos->DatosInt($_POST['ProductExempt']);
		$ProductCreateDate = $datos->DatosFecha($_POST['ProductCreateDate']);


		
		
		if (isset($_POST['ProductStatus'])) {
			$Status = $datos->DatosInt($_POST['ProductStatus']);
		}else{
			$Status = 0;
		}
		$UserID = '1';


		$sqlNewRecord = "UPDATE finventory SET FI_DESCRIPTION='$ProductDescription', FI_DETAILS='$ProductDetail', FI_REFERENCE='$ProductReferent', FI_UNIT='$ProductUnit', FI_BRAND='$ProductBrand',FI_MODEL='$ProductModel',FI_STALL='$ProductStall',FI_CAPACITY='$ProductPack',FI_LASTCOST='$ProductBeforeCost',FI_CURRENTCOST='$ProductCostToday', FI_AVERAGECOST='$ProductCostProme',FI_DECIMALPOINT='$ProductDecimalPoint', FI_MAXINV='$ProductMin',FI_MININV='$ProductMax',FI_EXEMT='$ProductExempt',	FI_MANAGEINVENTORY=1,	FI_TYPEINV=1,FI_TYPECOST=1,	FI_EXPIRATION='$ProductCreateDate',FI_STATUS='$Status',FI_USER=1 WHERE  FI_ID =:doc ";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $ProductId)); 
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

		$sql ="SELECT FI_CODE, FI_CATEGORY, FI_DESCRIPTION, FI_DETAILS, FI_REFERENCE, FI_UNIT, FI_BRAND, FI_MODEL, FI_STALL, FI_CAPACITY, FI_LASTCOST, FI_CURRENTCOST, FI_AVERAGECOST, FI_DECIMALPOINT, FI_MAXINV, FI_MININV, FI_EXEMT, FI_MANAGEINVENTORY, FI_TYPEINV, FI_TYPECOST, FI_EXPIRATION, FI_CREATEDATE, FI_LASTUPDATE, FI_STATUS, FI_USER
	FROM finventory WHERE FI_ID =:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		$stm->execute(array(':doc' => $id));
		$result = $stm->fetchAll();

		echo $data= json_encode($result);

		
	} elseif($_GET['action']=="Delete"&& isset($_GET['id'])){
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$slqdel = "DELETE FROM finventory WHERE FI_ID = :doc";
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


