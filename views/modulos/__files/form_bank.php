<form action="#" method="post" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>

		<div class="InputGroup InputCode">
			<label class="LabelInput" for="InputItems">Código</label>
			<input id="InputItems" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="InputItems" class="InputItems" type="text">
		</div>


		<div class="InputGroup InputDetail">
			<label class="LabelInput " for="input_detail">Detalle o Comentario</label>
			<!-- <input class="InputItems" id="document" type="text"> -->
			<textarea name="InputDetail" id="input_detail" class="InputItems InputText"></textarea>
		</div>

		<div class="InputTypeInv">
		<div class="InputGroup TypeInvItems">

			<div class="custom-control custom-radio">
						<input type="radio" id="customRadio1Add" name="customRadio" class="custom-control-input" checked="" value="1" default>
						<label class="custom-control-label" for="customRadio1Add">Mercaderia</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio2Add" name="customRadio" class="custom-control-input" value="2">
						<label class="custom-control-label" for="customRadio2Add">Servicios</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio3Add" name="customRadio" class="custom-control-input" value="3">
						<label class="custom-control-label" for="customRadio3Add">Combos</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio4Add" name="customRadio" class="custom-control-input" value="4">
						<label class="custom-control-label" for="customRadio4Add">Producción</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio5Add" name="customRadio" class="custom-control-input" value="5">
						<label class="custom-control-label" for="customRadio5Add">Activo Fijo</label>
					</div>
		</div>
			
		</div>
		
		<div class="InputGroup InputTypeCost">
			<label class="LabelInput" for="InputItems">Tipo de Costo</label>
			<select class="InputItems" name="TypeCost" id="type_cost">
				<option value="#">Costo Promedio</option>
				<option value="#">Ultimo Costo</option>
				<option value="#">Costo Lote</option>
			</select>
		</div>


		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha</label>
			<input id="InputItems" class="InputItems" type="date">
		</div>

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="" class="InputCheck" type="checkbox" checked="true">
		</div>
	</section>

	<div class="ContentBtn" id="ContentBtn">
		<div class="SubBtnContent">
			<!-- <a class="Btn OutSuccess OutSave" id="btn_save" href="#"><span>Save</span></a> -->
			<button class="Btn OutSuccess OutSave" id="btn_save"><span>Save</span></button>
			<a class="Btn OutDanger OutCancel" id="btn_cancel" href="#"><span>Cancel</span></a>
		</div>

	</div>

</form>