<form action="#" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>

		<div class="InputGroup InputCode">
			<label class="LabelInput" for="InputItems">Código</label>
			<input id="storage_code" class="InputItems" type="text" name="StorageCode">
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="storage_description" class="InputItems" type="text" name="StorageDescription">
		</div>

		<div class="InputGroup InputLiable">
			<label class="LabelInput" for="input_Liable">Responsable</label>
			<input id="storage_liable" class="InputItems" type="text" name="StorageLiable">
		</div>
		

		<div class="InputGroup InputDetail">
			<label class="LabelInput " for="input_detail">Detalle o Comentario</label>
			<textarea id="storage_detail" class="InputItems InputText" name="StorageDetail"></textarea>
		</div>

		<div class="InputGroup InputLocation">
			<label class="LabelInput " for="input_detail">Ubicación</label>
			<input id="storage_location" class="InputItems" type="text" name="StorageLocation">
		</div>

		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha</label>
			<input id="storage_date" class="InputItems" type="date" name="StorageDate">
		</div>

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="storage_status" class="InputCheck" type="checkbox" name="StorageStatus" value="1">
		</div>
	</section>


	<div class="ContentBtn" id="ContentBtn">

		<div class="SubBtnContent">
			<button class="Btn OutSuccess OutSave" id="btn_save_edit"><span>Save-Edit</span></button>
			<button class="Btn OutSuccess OutSave" id="btn_save"><span>Save</span></button>
			<a class="Btn OutDanger OutCancel" id="btn_cancel" href="#"><span>Cancel</span></a>
		</div>

	</div>

</form>