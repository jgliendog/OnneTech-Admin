<?php 
	include('../controller/method.controller.php');

	$datos = new Validator();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['action']=="New") {
		$CustomerCode = $datos->DatosString($_POST['CustomerCode']);
		$CustomerDescription = $datos->DatosString($_POST['CustomerDescription']);
		$CustomerTypeDoc = $datos->DatosString($_POST['CustomerTypeDoc']);
		$CustomerDocument = $datos->DatosString($_POST['CustomerDocument']);
		$CustomerType = $datos->DatosString($_POST['CustomerType']);
		$CustomerAdress1 = $datos->DatosString($_POST['CustomerAdress1']);
		$CustomerAdress2 = $datos->DatosString($_POST['CustomerAdress2']);
		$CustomerAdress3 = $datos->DatosString($_POST['CustomerAdress3']);
		$CustomerPhone1 = $datos->DatosString($_POST['CustomerPhone1']);
		$CustomerPhone2 = $datos->DatosString($_POST['CustomerPhone2']);
		$CustomerMovil1 = $datos->DatosString($_POST['CustomerMovil1']);
		$CustomerMovil2 = $datos->DatosString($_POST['CustomerMovil2']);
		$CustomerContact = $datos->DatosString($_POST['CustomerContact']);
		$CustomerEmail = $datos->DatosMail($_POST['CustomerEmail']);
		$CustomerEmailAlt = $datos->DatosMail($_POST['CustomerEmailAlt']);
		$CustomerDate = $datos->DatosFecha($_POST['CustomerCreateDate']);
		$CustomerSite = $datos->DatosUrl($_POST['CustomerSite']);
		$CustomerFacebook = $datos->DatosUrl($_POST['CustomerSocial1']);
		$CustomerTwitter = $datos->DatosUrl($_POST['CustomerSocial2']);
		$CustomerInstagram = $datos->DatosUrl($_POST['CustomerSocial3']);
		$CustomerCreditDay = $datos->DatosFloat($_POST['CustomerCreditDay']);
		$CustomerCreditLimit = $datos->DatosInt($_POST['CustomerCreditLimit']);
		$CustomerPlusDay = $datos->DatosFloat($_POST['CustomerPlusDay']);
		$CustomerPrice = $datos->DatosInt($_POST['CustomerPriceType']);
		if (isset($_POST['CustomerExempt'])) {
		$CustomerExempt = $datos->DatosInt($_POST['CustomerExempt']);
		}else{
		$CustomerExempt = 0;
		}
		if (isset($_POST['CustomerStatus'])) {
		$CustomerStatus = $datos->DatosInt($_POST['CustomerStatus']);
		}else{
		$CustomerStatus = 0;
		}
		$CustomerCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);

		$sqlNewClient = "INSERT INTO `fcustomer`(`FC_CODE`,`FC_DESCRIPTION`,`FC_TYPEDOC`,`FC_DOCUMENT`,`FC_TTPECLIENTS`,`FC_ADRESS1`,`FC_ADRESS2`,`FC_ADRESS3`,`FC_PHONE1`,`FC_PHONE2`,`FC_MOVIL1`,`FC_MOVIL2`,`FC_CONTACT`,`FC_EMAIL`,`FC_EMAILALT`,`FC_STARDATE`,`FC_WEBSITE`,`FC_FACEBOOK`,`FC_TWITTER`,`FC_INSTAGRAM`,`FC_CREDITDAY`,`FC_LIMITCREDIT`,`FC_PLUSDAY`,`FC_TYPEPRICE`,`FC_EXEMT`,`FC_STATUS`,`FC_CREATEDATE`,`FC_USER`) VALUES ('$CustomerCode','$CustomerDescription','$CustomerTypeDoc','$CustomerDocument','$CustomerType','$CustomerAdress1','$CustomerAdress2','$CustomerAdress3','$CustomerPhone1','$CustomerPhone2','$CustomerMovil1','$CustomerMovil2','$CustomerContact','$CustomerEmail','$CustomerEmailAlt','$CustomerDate','$CustomerSite','$CustomerFacebook','$CustomerTwitter','$CustomerInstagram','$CustomerCreditDay','$CustomerCreditLimit','$CustomerPlusDay','$CustomerPrice','$CustomerExempt','$CustomerStatus','$CustomerCreateDate','$UserID')";
		$rNewClient = $conexion->prepare($sqlNewClient); 
		$rNewClient->execute(); 
		if($rNewClient->rowCount()==1){
		echo "200";
		}else{
		echo "Fail";

		}
	}

	elseif ($_POST['action']=="Edit") {

		$id = $_POST['CustomerId'];

		$sql ="SELECT * FROM fcustomer WHERE FC_ID=:doc LIMIT 1";
		$stm = $conexion->prepare($sql);
		// $stm->execute();
		$stm->execute(array(':doc' => $id));

		$result = $stm->fetchAll();

		echo json_encode($result);
		}

	elseif ($_POST['action']=="Delete") {
			
			$id = $_POST['CustomerId'];
			$slqdel = "DELETE FROM fcustomer WHERE FC_ID = :doc";
			$pdo = $conexion->prepare($slqdel);
			$pdo->execute(array(':doc' => $id));
			$cliente = $pdo->fetchAll();

			if (isset($cliente)) {
				$out = "200";
			}

			echo json_encode($out);
		}
	elseif ($_POST['action']=="SaveEdit") {

		$CustomerId = $datos->DatosString($_POST['CustomerId']);
		$CustomerCode = $datos->DatosString($_POST['CustomerCode']);
		$CustomerDescription = $datos->DatosString(utf8_encode($_POST['CustomerDescription']));
		$CustomerTypeDoc = $datos->DatosString($_POST['CustomerTypeDoc']);
		$CustomerDocument = $datos->DatosString($_POST['CustomerDocument']);
		$CustomerType = $datos->DatosString($_POST['CustomerType']);
		$CustomerAdress1 = $datos->DatosString($_POST['CustomerAdress1']);
		$CustomerAdress2 = $datos->DatosString($_POST['CustomerAdress2']);
		$CustomerAdress3 = $datos->DatosString($_POST['CustomerAdress3']);
		$CustomerPhone1 = $datos->DatosString($_POST['CustomerPhone1']);
		$CustomerPhone2 = $datos->DatosString($_POST['CustomerPhone2']);
		$CustomerMovil1 = $datos->DatosString($_POST['CustomerMovil1']);
		$CustomerMovil2 = $datos->DatosString($_POST['CustomerMovil2']);
		$CustomerContact = $datos->DatosString($_POST['CustomerContact']);
		$CustomerEmail = $datos->DatosMail($_POST['CustomerEmail']);
		$CustomerEmailAlt = $datos->DatosMail($_POST['CustomerEmailAlt']);
		$CustomerDate = $datos->DatosFecha($_POST['CustomerCreateDate']);
		$CustomerSite = $datos->DatosUrl($_POST['CustomerSite']);
		$CustomerFacebook = $datos->DatosUrl($_POST['CustomerSocial1']);
		$CustomerTwitter = $datos->DatosUrl($_POST['CustomerSocial2']);
		$CustomerInstagram = $datos->DatosUrl($_POST['CustomerSocial3']);
		$CustomerCreditDay = $datos->DatosFloat($_POST['CustomerCreditDay']);
		$CustomerCreditLimit = $datos->DatosInt($_POST['CustomerCreditLimit']);
		$CustomerPlusDay = $datos->DatosFloat($_POST['CustomerPlusDay']);
		$CustomerPrice = $datos->DatosInt($_POST['CustomerPriceType']);
		if (isset($_POST['CustomerExempt'])) {
		$CustomerExempt = $datos->DatosInt($_POST['CustomerExempt']);
		}else{
		$CustomerExempt = 0;
		}
		if (isset($_POST['CustomerStatus'])) {
		$CustomerStatus = $datos->DatosInt($_POST['CustomerStatus']);
		}else{
		$CustomerStatus = 0;
		}
		$CustomerCreateDate = date('Y/m/d');
		$UserID = '1';
		// $UserID = $datos->DatosString($_POST['UserID']);



		$sqlNewRecord = "UPDATE fcustomer SET FC_DESCRIPTION ='$CustomerDescription',FC_TYPEDOC = '$CustomerTypeDoc',FC_DOCUMENT = '$CustomerDocument',FC_TTPECLIENTS = '$CustomerType',FC_ADRESS1 = '$CustomerAdress1',FC_ADRESS2 = '$CustomerAdress2',FC_ADRESS3 = '$CustomerAdress3',FC_PHONE1 = '$CustomerPhone1',FC_PHONE2 = '$CustomerPhone2',FC_MOVIL1 = '$CustomerMovil1',FC_MOVIL2 = '$CustomerMovil2',FC_CONTACT = '$CustomerContact',FC_EMAIL = '$CustomerEmail',FC_EMAILALT = '$CustomerEmailAlt',FC_STARDATE = '$CustomerDate',FC_WEBSITE = '$CustomerSite',FC_FACEBOOK = '$CustomerFacebook',FC_TWITTER = '$CustomerTwitter',FC_INSTAGRAM = '$CustomerInstagram',FC_CREDITDAY = '$CustomerCreditDay',FC_LIMITCREDIT = '$CustomerCreditLimit',FC_PLUSDAY = '$CustomerPlusDay',FC_TYPEPRICE = '$CustomerPrice',FC_EXEMT = '$CustomerExempt',FC_STATUS = '$CustomerStatus',FC_USER = '$UserID' WHERE FC_ID =:doc";
		$rNewRecord = $conexion->prepare($sqlNewRecord); 
		$rNewRecord->execute(array(':doc' => $CustomerId)); 
		if($rNewRecord->rowCount()==1){
			echo "200";
		}else{
			echo "Fail";
			// echo var_dump($rNewRecord);

		}
	}

	}

