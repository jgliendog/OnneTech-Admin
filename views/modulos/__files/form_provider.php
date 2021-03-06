<form action="#" method="post" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>

		<div class="InputGroup InputCode">
			<input hidden id="provider_id" type="text" name="ProviderId">
			<label class="LabelInput" for="InputItems">Código</label>
			<input id="provider_code" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="provider_description" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputTypeDoc">
			<label class="LabelInput" for="InputItems">Tipo Documento</label>
			<select id="provider_type_doc" class="TipoDocItems" name="TypeDoc">
				<option value="0">Tipo documento</option>
				<option value="1">DNI</option>
			</select>
		</div>

		<div class="InputGroup InputDocument">
			<label class="LabelInput " for="InputItems">Documento</label>
			<input class="InputItems" id="provider_document" type="text">
		</div>

		<div class="InputGroup InputTypeCustomer">
			<label class="LabelInput" for="InputItems">Tipo Proveedor</label>
			<select id="provider_type" class="InputItems" name="TypeCustomer">
				<option value="0">Seleccionar tipo proveedor</option>
				<option value="1">Nacional</option>
				<option value="2">Extranjero</option>
			</select>
		</div>

		<div class="InputGroup InputAdress1">
			<label class="LabelInput" for="InputItems">Dirección Fiscal</label>
			<input id="provider_adress1" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputContact">
			<label class="LabelInput" for="InputItems">Persona Contacto</label>
			<input id="provider_contact" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha</label>
			<input id="provider_date" class="InputItems" type="date">
		</div>

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="provider_status" class="InputCheck" type="checkbox">
		</div>
	</section>

	<div class="FormContentSecond">
		<section class="ContentInfoTwo" id="formfontentsecond">
			<h4 class="TitleForm">Datos Adicionales</h4>

			<div class="InputGroup InputPhone1">
				<label class="LabelInput" for="InputItems">Teléfono 1</label>
				<input id="provider_phone1" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputPhone2">
				<label class="LabelInput" for="InputItems">Teléfono 2</label>
				<input id="provider_phone2" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputMovil1">
				<label class="LabelInput" for="InputItems">Móvil 1</label>
				<input id="provider_movil1" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputMovil2">
				<label class="LabelInput" for="InputItems">Móvil 2</label>
				<input id="provider_movil2" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputMail">
				<label class="LabelInput" for="InputItems">E-mail</label>
				<input id="provider_email" class="InputItems" type="email">
			</div>

			<div class="InputGroup InputMailAlt">
				<label class="LabelInput" for="InputItems">E-mail Alt</label>
				<input id="provider_email_alt" class="InputItems" type="email">
			</div>

			<div class="InputGroup InputSite">
				<label class="LabelInput" for="InputItems">Sitio Web</label>
				<input id="provider_site" class="InputItems" type="url" placeholder="https://www.empresa.com">
			</div>

			<div class="InputGroup InputFaceBook">
				<label class="LabelInput" for="InputItems">Facebook</label>
				<input id="provider_social1" class="InputItems" type="url" placeholder="https://facebook.com/empresa">
			</div>

			<div class="InputGroup InputTwitter">
				<label class="LabelInput" for="InputItems">Twitter</label>
				<input id="provider_social2" class="InputItems" type="url" placeholder="https://twitter.com/empresa">
			</div>
			<div class="InputGroup InputInstagram">
				<label class="LabelInput" for="InputItems">Instagram</label>
				<input id="provider_social3" class="InputItems" type="url" placeholder="https://twitter.com/empresa">
			</div>

			<div class="InputGroup InputCreditLimit">
				<label class="LabelInput" for="InputItems">Límite de Crédito</label>
				<input id="provider_credit_limit" class="InputItems TextRight" type="text">
			</div>

			<div class="InputGroup InputCreditDay">
				<label class="LabelInput" for="InputItems">Días de Crédito</label>
				<input id="provider_credit_day" class="InputItems TextRight" type="number">
			</div>

			<div class="InputGroup InputPlusDay">
				<label class="LabelInput" for="InputItems TextRight">Días de Tolerancia</label>
				<input id="provider_plus_day" class="InputItems" type="number">
			</div>

		</section>

	</div>

	<div class="ContentBtn" id="ContentBtn">
		<a class="Btn BtnAfter OutBefore" id="btnafter" href="#"><span>After</span></a>
		<a class="Btn BtnNext OutNext" id="btnnext" href="#"><span>Next</span></a>
		<div class="SubBtnContent">
			<button class="Btn OutSuccess OutSave" id="btn_save_edit"><span>Save-Edit</span></button>
			<button class="Btn OutSuccess OutSave" id="btn_save"><span>Save</span></button>
			<a class="Btn OutDanger OutCancel" id="btn_cancel" href="#"><span>Cancel</span></a>
		</div>

	</div>

</form>