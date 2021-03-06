<?php 
require_once 'pdo.php';
$con = new Conexion();
$conexion = $con->get_conexion();
ini_set('date.timezone', 'America/Lima');

/**
 * 
 */
class Validator
{
	/* Este script permite filtrar y evitar inyección*/ 
	public function DatosString($datos)
    	{
	        $datos = trim($datos);
	        $datos = stripslashes($datos);
	        $datos = htmlspecialchars($datos);
	        $datos = filter_var($datos, FILTER_SANITIZE_STRING);
	        $datos = strtoupper($datos);
	        $datos = utf8_decode($datos);
	        return $datos;
    	}
    public function DatosLoginx($datos)
    	{
	        $datos = trim($datos);
	        $datos = stripslashes($datos);
	        $datos = htmlspecialchars($datos);
	        $datos = filter_var($datos, FILTER_SANITIZE_STRING);
	        $datos = utf8_decode($datos);
	        return $datos;
    	}
    public function DatosPhone($datos)
    	{
	        $datos = trim($datos);
	        $datos = stripslashes($datos);
	        $datos = htmlspecialchars($datos);
	        $datos = filter_var($datos, FILTER_SANITIZE_STRING);
	        $datos = strtoupper($datos);
	        // $datos = str_replace("-", "",$datos);
	        // $datos = str_replace("(", "",$datos);
	        // $datos = str_replace(")", "",$datos);
	        // $datos = str_replace("_", "",$datos);
	        // $datos = str_replace(" ", "",$datos);
	        return $datos;
    	}
    public function DatosMail($datos)
    	{
	        $datos = trim($datos);
	        $datos = stripslashes($datos);
	        $datos = filter_var($datos, FILTER_SANITIZE_EMAIL);
	        $datos = htmlspecialchars($datos);
	        $datos = strtolower($datos);
	        return $datos;
    	}
    public function DatosUrl($datos)
    	{
	        $datos = trim($datos);
	        $datos = stripslashes($datos);
	        $datos = filter_var($datos, FILTER_SANITIZE_URL);
	        $datos = htmlspecialchars($datos);
	        $datos = strtolower($datos);
	        return $datos;
    	}
    public function DatosInt($datos)
    	{
	        $datos = trim($datos);
	        $datos = stripslashes($datos);
	        $datos = htmlspecialchars($datos);
	        // $datos = is_numeric($datos);
	        $datos = str_replace(",", "",$datos);
	        $datos = filter_var($datos, FILTER_VALIDATE_INT);
	        $datos = floatval($datos);
	        return $datos;
    	}
   	public function DatosFloat($datos)
    	{
	        $datos = trim($datos);
	        $datos = stripslashes($datos);
	        // $datos = is_numeric($datos);
	        $datos = str_replace(",", "",$datos);
	        $datos = filter_var($datos, FILTER_VALIDATE_FLOAT);
	        $datos = floatval($datos);
	        return $datos;
    	}
    public function DatosFecha($datos)
    {
    	$datos = date('Y/m/d', strtotime($datos));
    	return $datos;
    }
}

class ListData
{
	public function ListPrice($conexion){
		$sql = "SELECT FTP_ID, FTP_DESCRIPTION, FTP_STATUS FROM ftypeprice WHERE FTP_STATUS = 1";
			    $ListPrice = $conexion->prepare($sql);
			    $ListPrice->execute();
			    $rListPrice = $ListPrice->fetchAll();
			    
			    return $rListPrice;
	}

	public function ListDepartamentAct($conexion){
		$sql = "SELECT FCT_ID, FCT_CODE, FCT_DESCRIPTION, FCT_DETAILS, FCT_TYPEPRODC, FCT_TYPECOST, FCT_MANEJAINV, FCT_STATUS FROM fdepartament WHERE FCT_STATUS = 1";
			    $ListDepartament = $conexion->prepare($sql);
			    $ListDepartament->execute();
			    $rListDepartament = $ListDepartament->fetchAll();
			    
			    return $rListDepartament;
	}

	public function ListProdCate($conexion, $Order, $pagestard,$items){
		$sql = "SELECT finventory.FI_ID, finventory.FI_CODE, finventory.FI_CATEGORY, finventory.FI_DESCRIPTION, finventory.FI_DETAILS, finventory.FI_REFERENCE, finventory.FI_UNIT, finventory.FI_BRAND,finventory.FI_STATUS, fdepartament.FCT_ID,fdepartament.FCT_CODE,fdepartament.FCT_DESCRIPTION,fdepartament.FCT_TYPEPRODC,fdepartament.FCT_TYPECOST,fdepartament.FCT_TYPECOST
	FROM (finventory
	INNER JOIN fdepartament
	ON fdepartament.FCT_ID = finventory.FI_CATEGORY) ORDER BY $Order LIMIT $pagestard,$items";
			    $ListProducto = $conexion->prepare($sql);
			    $ListProducto->execute();
			    $rListProducto = $ListProducto->fetchAll();
			    
			    return $rListProducto;
	}
	

	public function ListResultFile($conexion,$table,$order){
		$sql = "SELECT * FROM $table ORDER BY $order";
			    $ListResultFile = $conexion->prepare($sql);
			    $ListResultFile->execute();
			    $rListResultFile = $ListResultFile->fetchAll();
			    
			    return $rListResultFile;
	}

	public function PagerResult($conexion,$table,$Order,$pagestard,$items){
		$sql = "SELECT * FROM $table ORDER BY $Order LIMIT $pagestard,$items";
			    $PagerResult = $conexion->prepare($sql);
			    $PagerResult->execute();
			    $rPagerResult = $PagerResult->fetchAll();
			    
			    return $rPagerResult;
	}	

}

class InventaryOperation
{
	public function Tranfer($conexion,$table,$order,$ItemsSearch){
		$sql = "SELECT * FROM $table where $order LIKE '%$ItemsSearch'";
			    $ListResultFile = $conexion->prepare($sql);
			    $ListResultFile->execute();
			    $rListResultFile = $ListResultFile->fetchAll();
			    
			    return $rListResultFile;
	}
	
}
