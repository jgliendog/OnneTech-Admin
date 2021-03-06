	<?php 
	include('../controller/method.controller.php');

	$datos = new Validator();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


	if (isset($_POST['buscarItem'])) {
		$Search=$_POST['buscarItem'];
		$sql = "SELECT finventory.FI_ID,finventory.FI_CODE,finventory.FI_DESCRIPTION,finventory.FI_CURRENTCOST, fcostprice.FCI_IDINV,fcostprice.FCI_COSTOPROMEDIO FROM(finventory
			INNER JOIN fcostprice ON fcostprice.FCI_IDINV = finventory.FI_CODE)  WHERE FI_CODE =:doc";
		// $sql ="SELECT FI_ID, FI_CODE, FI_DESCRIPTION FROM finventory WHERE FI_CODE LIKE '%".$Search."%' ";
		$stm = $conexion->prepare($sql);
		// $stm->execute();
		$stm->execute(array(':doc' => $Search));

		$result = $stm->fetchAll();
		if ($result) {
		echo json_encode($result);
		
		}else{
			// $note="Busqueda no encontrada";
			echo json_encode('4');
		}

	}

	// if ($_POST['action']=="Transfer") {
	// 	echo "Hola Mundo";
	// }


	

}

