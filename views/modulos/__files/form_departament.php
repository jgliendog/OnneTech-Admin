<form action="#" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>

		<div class="InputGroup InputCode">
			<label class="LabelInput" for="InputItems">Código</label>
			<input id="departament_code" class="InputItems" type="text" name="CodeDepartament">
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="departament_description" class="InputItems" type="text" name="DescriptionDepartamente">
		</div>


		<div class="InputGroup InputDetail">
			<label class="LabelInput " for="input_detail">Detalle o Comentario</label>
			<!-- <input class="InputItems" id="document" type="text"> -->
			<textarea id="departament_detail" name="DetailDepartament" class="InputItems InputText"></textarea>
		</div>

		<div class="InputTypeInv">
			<div class="InputGroup TypeInvItems" id="type_inv_items">
				
				<label class="custom-control-label" for="departament_type_inv">
					<input id="departament_type_inv" type="radio"  name="DepartamentRadio" class="custom-control-input" value="1">
					Mercaderia
				</label>

				<label class="custom-control-label" for="departament_type_ser"><input id="departament_type_ser" type="radio"  name="DepartamentRadio" class="custom-control-input" value="2">
					Servicios
				</label>

				<label class="custom-control-label" for="departament_type_com"><input id="departament_type_com" type="radio"  name="DepartamentRadio" class="custom-control-input" value="3">
					Combos
				</label>

				<label class="custom-control-label" for="departament_type_product"><input id="departament_type_product" type="radio"  name="DepartamentRadio" class="custom-control-input" value="4">
					Producción
				</label>

				<label class="custom-control-label" for="departament_type_act_fijo"><input id="departament_type_act_fijo" type="radio"  name="DepartamentRadio" class="custom-control-input" value="5">
					Activo Fijo
				</label>

			</div>
		</div>

		<div class="InputGroup InputTypeCost">
			<label class="LabelInput" for="InputItems">Tipo de Costo</label>
			<select id="departament_type_cost" class="InputItems" name="TypeCost">
				<option value="1">Costo Promedio</option>
				<option value="2">Ultimo Costo</option>
				<option value="3">Costo Lote</option>
			</select>
		</div>


		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha</label>
			<input id="departament_date" class="InputItems" type="date">
		</div>

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="departament_status" class="InputCheck" type="checkbox" name="StatusDepartament">
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