	<?php 
	include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {
		$ProviderCode = $datos->DatosString($_POST['ProviderCode']);
		$ProviderDescription = $datos->DatosString($_POST['ProviderDescription']);
		$ProviderTypeDoc = $datos->DatosString($_POST['ProviderTypeDoc']);
		$ProviderDocument = $datos->DatosString($_POST['ProviderDocument']);
		$ProviderType = $datos->DatosString($_POST['ProviderType']);
		$ProviderAdress1 = $datos->DatosString($_POST['ProviderAdress1']);
		$ProviderPhone1 = $datos->DatosString($_POST['ProviderPhone1']);
		$ProviderPhone2 = $datos->DatosString($_POST['ProviderPhone2']);
		$ProviderMovil1 = $datos->DatosString($_POST['ProviderMovil1']);
		$ProviderMovil2 = $datos->DatosString($_POST['ProviderMovil2']);
		$ProviderContact = $datos->DatosString($_POST['ProviderContact']);
		$ProviderEmail = $datos->DatosMail($_POST['ProviderEmail']);
		$ProviderEmailAlt = $datos->DatosMail($_POST['ProviderEmailAlt']);
		$ProviderDate = $datos->DatosFecha($_POST['ProviderCreateDate']);
		$ProviderSite = $datos->DatosUrl($_POST['ProviderSite']);
		$ProviderFacebook = $datos->DatosUrl($_POST['ProviderSocial1']);
		$ProviderTwitter = $datos->DatosUrl($_POST['ProviderSocial2']);
		$ProviderInstagram = $datos->DatosUrl($_POST['ProviderSocial3']);
		$ProviderCreditDay = $datos->DatosFloat($_POST['ProviderCreditDay']);
		$ProviderCreditLimit = $datos->DatosInt($_POST['ProviderCreditLimit']);
		$ProviderPlusDay = $datos->DatosFloat($_POST['ProviderPlusDay']);

		if (isset($_POST['ProviderStatus'])) {
			$ProviderStatus = $datos->DatosInt($_POST['ProviderStatus']);
			}else{
			$ProviderStatus = 0;
			}
		$ProviderCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);

		$sqlNewProvider = "INSERT INTO `fprovider`(`FP_CODE`, `FP_DESCRIPTION`,`FP_TYPEPROVIDER`, `FP_TYPEDOC`, `FP_DOCUMENT`, `FP_ANDRESS1`, `FP_PHONE1`, `FP_PHONE2`, `FP_MOVIL1`, `FP_MOVIL2` , `FP_CONTACT`, `FP_EMAIL`, `FP_EMAILALT`, `FP_STARDATE`, `FP_WEBSITE`, `FP_FACEBOOK`, `FP_TWITTER`, `FP_INSTAGRAM`, `FP_CREDITDAY`, `FP_CREDITLIMIT`, `FP_PLUSDAY`,`FP_CREATEDATE`, `FP_STATUS`,`FP_USER`) VALUES ('$ProviderCode','$ProviderDescription','$ProviderType','$ProviderTypeDoc','$ProviderDocument','$ProviderAdress1','$ProviderPhone1','$ProviderPhone2','$ProviderMovil1','$ProviderMovil2','$ProviderContact','$ProviderEmail','$ProviderEmailAlt' ,'$ProviderDate','$ProviderSite','$ProviderFacebook','$ProviderTwitter','$ProviderInstagram','$ProviderCreditDay','$ProviderCreditLimit','$ProviderPlusDay','$ProviderCreateDate','$ProviderStatus','$UserID')";
		$rNewProvider = $conexion->prepare($sqlNewProvider); 
		$rNewProvider->execute(); 
		if($rNewProvider->rowCount()==1){
		echo "200";
		}else{
		echo "Fail";
		}
}

	elseif ($_POST['action']=="Edit") {

		$id = $_POST['ProviderId'];

		$sql ="SELECT * FROM fprovider WHERE FP_ID=:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		// $stm->execute();
		$stm->execute(array(':doc' => $id));

		$result = $stm->fetchAll();

		echo json_encode($result,JSON_UNESCAPED_UNICODE);
	}

	elseif ($_POST['action']=="Delete") {

		$id = $_POST['ProviderId'];
		$slqdel = "DELETE FROM fprovider WHERE FP_ID = :doc";
		$pdo = $conexion->prepare($slqdel);
		$pdo->execute(array(':doc' => $id));
		$cliente = $pdo->fetchAll();

		if (isset($cliente)) {
		echo "200";
		}

	}
	elseif ($_POST['action']=="SaveEdit") {

		$ProviderId = $datos->DatosInt($_POST['ProviderId']);
		$ProviderDescription = $datos->DatosString($_POST['ProviderDescription']);
		$ProviderType = $datos->DatosString($_POST['ProviderType']);
		$ProviderTypeDoc = $datos->DatosString($_POST['ProviderTypeDoc']);
		$ProviderDocument = $datos->DatosString($_POST['ProviderDocument']);
		$ProviderAdress1 = $datos->DatosString($_POST['ProviderAdress1']);
		$ProviderPhone1 = $datos->DatosString($_POST['ProviderPhone1']);
		$ProviderPhone2 = $datos->DatosString($_POST['ProviderPhone2']);
		$ProviderMovil1 = $datos->DatosString($_POST['ProviderMovil1']);
		$ProviderMovil2 = $datos->DatosString($_POST['ProviderMovil2']);
		$ProviderContact = $datos->DatosString($_POST['ProviderContact']);
		$ProviderEmail = $datos->DatosMail($_POST['ProviderEmail']);
		$ProviderEmailAlt = $datos->DatosMail($_POST['ProviderEmailAlt']);
		$ProviderDate = $datos->DatosFecha($_POST['ProviderCreateDate']);
		$ProviderSite = $datos->DatosUrl($_POST['ProviderSite']);
		$ProviderFacebook = $datos->DatosUrl($_POST['ProviderSocial1']);
		$ProviderTwitter = $datos->DatosUrl($_POST['ProviderSocial2']);
		$ProviderInstagram = $datos->DatosUrl($_POST['ProviderSocial3']);
		$ProviderCreditDay = $datos->DatosFloat($_POST['ProviderCreditDay']);
		$ProviderCreditLimit = $datos->DatosInt($_POST['ProviderCreditLimit']);
		$ProviderPlusDay = $datos->DatosFloat($_POST['ProviderPlusDay']);

		if (isset($_POST['ProviderStatus'])) {
			$ProviderStatus = $datos->DatosInt($_POST['ProviderStatus']);
			}else{
			$ProviderStatus = 0;
			}
		$ProviderCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);



		$sqlNewRecord = "UPDATE fprovider SET FP_DESCRIPTION = '$ProviderDescription',FP_TYPEPROVIDER = '$ProviderType',FP_DOCUMENT = '$ProviderDocument', FP_ANDRESS1 = '$ProviderAdress1', FP_PHONE1 = '$ProviderPhone1',  FP_PHONE2 = '$ProviderPhone2', FP_MOVIL1 = '$ProviderMovil1', FP_MOVIL2 = '$ProviderMovil2', FP_CONTACT = '$ProviderContact', FP_EMAIL = '$ProviderEmail', FP_EMAILALT = '$ProviderEmailAlt', FP_STARDATE = '$ProviderDate', FP_WEBSITE = '$ProviderSite',  FP_FACEBOOK = '$ProviderFacebook', FP_TWITTER = '$ProviderTwitter', FP_INSTAGRAM = '$ProviderInstagram', FP_CREDITDAY = '$ProviderCreditDay', FP_CREDITLIMIT = '$ProviderCreditLimit', FP_PLUSDAY = '$ProviderPlusDay', FP_EXEMPT ='0', FP_STATUS = '$ProviderStatus', FP_CREATEDATE = '$ProviderCreateDate', FP_USER = '$UserID' WHERE FP_ID =:doc";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $ProviderId)); 
		if($rNewRecord->rowCount()==1){
		echo "200";
		// var_dump(rNewRecord);
		}else{
		echo "Fail";
		// var_dump(rNewRecord);

		}
	}

}

