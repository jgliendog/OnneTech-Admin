<?php 

	public function ListBank($conexion){
		$sql = "SELECT FBC_ID,FBC_ACCOUNT,FBC_DESCRIPTION,FBC_DETAILS,FBC_TAXPOS,FBC_TAXCARD, FBC_STATUS FROM fbank";
			    $ListBank = $conexion->prepare($sql);
			    $ListBank->execute();
			    $rListBank = $ListBank->fetchAll();
			    
			    return $rListBank;
	}

	public function ListBankOperation($conexion){
		$sql = "SELECT FBC_ID,FBC_ACCOUNT,FBC_DESCRIPTION,FBC_DETAILS,FBC_TAXPOS,FBC_TAXCARD, FBC_STATUS FROM fbank";
			    $ListBank = $conexion->prepare($sql);
			    $ListBank->execute();
			    $rListBank = $ListBank->fetchAll();
			    
			    return $rListBank;
	}

	public function ListDepartamentAll($conexion){
		$sql = "SELECT FCT_ID, FCT_CODE, FCT_DESCRIPTION, FCT_DETAILS, FCT_TYPEPRODC, FCT_TYPECOST, FCT_MANEJAINV, FCT_STATUS FROM fdepartament";
			    $ListDepartament = $conexion->prepare($sql);
			    $ListDepartament->execute();
			    $rListDepartament = $ListDepartament->fetchAll();
			    
			    return $rListDepartament;
	}


	public function ListProduct($conexion){
		$sql = "SELECT FI_ID,FI_CODE,FI_CATEGORY, FI_TYPEINV,FI_DESCRIPTION,FI_DETAILS,FI_UNIT,FI_BRAND, FI_STATUS FROM finventory WHERE FI_TYPEINV = 1";
			    $ListProducto = $conexion->prepare($sql);
			    $ListProducto->execute();
			    $rListProducto = $ListProducto->fetchAll();
			    
			    return $rListProducto;
	}

	public function ListService($conexion){
		$sql = "SELECT FI_ID,FI_CODE,FI_CATEGORY, FI_TIPYINV,FI_DESCRIPTION,FI_DETAILS,FI_UNIT,FI_BRAND, FI_STATUS FROM finventory WHERE FI_TIPYINV = 1";
			    $ListService = $conexion->prepare($sql);
			    $ListService->execute();
			    $rListService = $ListService->fetchAll();
			    
			    return $rListService;
	}

	public function ListSeller($conexion){
		$sql = "SELECT FVD_CODE, FVD_DESCRIPTION, FVD_PHONE1, FVD_MOVIL1, FVD_DIRECTBOSS, FVD_EMAIL, FVD_ID, FVD_STATUS FROM fseller";
			    $ListSeller = $conexion->prepare($sql);
			    $ListSeller->execute();
			    $rListSeller = $ListSeller->fetchAll();
			    
			    return $rListSeller;
	}

	public function ListCustomer($conexion, $table){
		$sql = "SELECT FC_ID,FC_CODE,FC_DESCRIPTION,FC_CONTACT,FC_EMAIL,FC_PHONE1, FC_STATUS FROM $table";
			    $ListCustomer = $conexion->prepare($sql);
			    $ListCustomer->execute();
			    $rListCustomer = $ListCustomer->fetchAll();
			    
			    return $rListCustomer;
	}

	public function ListProvider($conexion){
		$sql = "SELECT FP_ID,FP_CODE,FP_DESCRIPTION,FP_PHONE1,FP_CONTACT,FP_EMAIL, FP_STATUS FROM fprovider";
			    $ListProvider = $conexion->prepare($sql);
			    $ListProvider->execute();
			    $rListProvider = $ListProvider->fetchAll();
			    
			    return $rListProvider;
	}

	public function ListStorage($conexion){
		$sql = "SELECT FDP_ID,FDP_CODE,FDP_DESCRIPTION,FDP_LIABLE,FDP_LOCATION,FDP_DETAILS,FDP_CREATEDATE, FDP_STATUS FROM fstorage";
			    $ListStorage = $conexion->prepare($sql);
			    $ListStorage->execute();
			    $rListStorage = $ListStorage->fetchAll();
			    
			    return $rListStorage;
	}