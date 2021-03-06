<form action="#" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>

		<div class="InputGroup InputCode">
			<label class="LabelInput" for="InputItems">Código</label>
			<input hidden id="zone_id" class="InputItems" type="text">
			<input id="zone_code" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="zone_description" class="InputItems" type="text" name="DescriptionZone">
		</div>


		<div class="InputGroup InputDetail">
			<label class="LabelInput " for="input_detail">Detalle o Comentario</label>
			<!-- <input class="InputItems" id="document" type="text"> -->
			<textarea id="zone_detail" name="DetailZone" class="InputItems InputText"></textarea>
		</div>

		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha</label>
			<input id="zone_date" class="InputItems" type="date">
		</div>

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="zone_status" class="InputCheck" type="checkbox" name="StatusZone">
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