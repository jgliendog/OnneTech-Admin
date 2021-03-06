
<form action="#" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>
		<h4>
			
		</h4>

		<div class="InputGroup InputCode">
			<label class="LabelInput" for="InputItems">Código</label>
			<input hidden id="customer_id" type="text" name="CustomerId">
			<input id="customer_code" class="InputItems" type="text" name="CustomerCode" tabindex="1" onfocus="true">
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="customer_description" class="InputItems" type="text" name="CustomerDescription" tabindex="2">
		</div>

		<div class="InputGroup InputTypeDoc">
			<label class="LabelInput" for="InputItems">Tipo Documento</label>
			<select class="TipoDocItems" id="customer_type_doc" name="CustomerTypeDoc" tabindex="3">
				<option value="0">Tipo documento</option>
				<option value="1">DNI</option>
				<option value="2"selected>CE</option>
			</select>
		</div>

		<div class="InputGroup InputDocument">
			<label class="LabelInput " for="InputItems">Documento</label>
			<input class="InputItems" id="customer_document" type="text" name="CustomerDoc" tabindex="4">
		</div>

		<div class="InputGroup InputTypeCustomer">
			<label class="LabelInput" for="InputItems">Tipo Cliente</label>
			<select class="InputItems" id="customer_type" name="CustomerType" tabindex="5">
				<option value="0">Seleccionar tipo cliente</option>
				<option value="1">Contribuyente</option>
				<option value="2"selected>Consumidor Final</option>
			</select>
		</div>

		<div class="InputGroup InputAdress1">
			<label class="LabelInput" for="InputItems">Dirección Fiscal</label>
			<input id="customer_adress1" class="InputItems" type="text" name="CustomerAdress1" tabindex="6">
		</div>

		<div class="InputGroup InputContact">
			<label class="LabelInput" for="InputItems">Persona Contacto</label>
			<input id="customer_contact" class="InputItems" type="text" name="CustomerContact" tabindex="8">
		</div>

		<div class="InputGroup InputAdress2">
			<label class="LabelInput" for="InputItems">Dirección de Despacho</label>
			<input id="customer_adress2" class="InputItems" type="text" name="CustomerAdress2" tabindex="7">
		</div>

		

		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha Creación</label>
			<input id="customer_create_date" class="InputItems" type="date" name="CustomerDate" tabindex="9">
		</div>

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="customer_status" class="InputCheck" type="checkbox" name="CustomerStatus">
		</div>
	</section>

	<div class="FormContentSecond" id="animate">
		<section class="ContentInfoTwo" id="formfontentsecond">
			<section class="TitleForm">
				<h4 class="TitleFormItems">Datos Adicionales</h4>

				
				
			</section>
			

			<div class="InputGroup InputPhone1">
				<label class="LabelInput" for="InputItems">Teléfono 1</label>
				<input id="customer_phone1" class="InputItems" type="text" name="CustomerPhone" tabindex="1">
			</div>

			<div class="InputGroup InputPhone2">
				<label class="LabelInput" for="InputItems">Teléfono 2</label>
				<input id="customer_phone2" class="InputItems" type="text" name="CustomerPhoneAlt" tabindex="2">
			</div>

			<div class="InputGroup InputMovil1">
				<label class="LabelInput" for="InputItems">Móvil 1</label>
				<input id="customer_movil1" class="InputItems" type="text" name="CustomerMovil" tabindex="3">
			</div>

			<div class="InputGroup InputMovil2">
				<label class="LabelInput" for="InputItems">Móvil 2</label>
				<input id="customer_movil2" class="InputItems" type="text" name="CustomerMovilAlt" tabindex="4">
			</div>

			<div class="InputGroup InputMail">
				<label class="LabelInput" for="InputItems">E-mail</label>
				<input id="customer_email" class="InputItems" type="email" name="CustomerMail" tabindex="5">
			</div>

			<div class="InputGroup InputMailAlt">
				<label class="LabelInput" for="InputItems">E-mail Alt</label>
				<input id="customer_email_alt" class="InputItems" type="email" name="CustomerMailAlt" tabindex="6">
			</div>

			<div class="InputGroup InputPrice">
				<label class="LabelInput" for="InputItems">Precio por Defecto</label>
				<select class="InputItems" id="customer_price_type" name="CustomerPrice" tabindex="7">
					<option value="1">Cliente</option>
					<option value="2">Mayor</option>
					<option value="3">Revendedor</option>
				</select>
			</div>			

			<div class="InputGroup InputCreditLimit">
				<label class="LabelInput" for="InputItems">Límite de Crédito</label>
				<input id="customer_credit_limit" class="InputItems TextRight" type="text" name="CustomerCreditLimit"  tabindex="8">
			</div>

			<div class="InputGroup InputCreditDay">
				<label class="LabelInput" for="InputItems">Días de Crédito</label>
				<input id="customer_credit_day" class="InputItems TextRight" type="number" name="CustomerCreditDay"  tabindex="9">
			</div>

			<div class="InputGroup InputPlusDay">
				<label class="LabelInput" for="InputItems">Días de Tolerancia</label>
				<input id="customer_plus_day" class="InputItems TextRight" type="number" name="CustomerPlusDay" tabindex="9">
			</div>

			<div class="InputGroup InputAdress3">
				<label class="LabelInput" for="InputItems">Dirección Cóbro</label>
				<input id="customer_adress3" class="InputItems" type="text" name="CustomerAdress3" tabindex="10">
			</div>

			<div class="InputGroup InputSite">
				<label class="LabelInput" for="InputItems">Sitio Web</label>
				<input id="customer_site" class="InputItems" type="url" placeholder="https://www.empresa.com" name="CustomerSite" tabindex="11">
			</div>

			<div class="InputGroup InputFaceBook">
				<label class="LabelInput" for="InputItems">Facebook</label>
				<input id="customer_social1" class="InputItems" type="url" placeholder="https://facebook.com/empresa" name="CustomerFacebook" tabindex="12">
			</div>

			<div class="InputGroup InputTwitter">
				<label class="LabelInput" for="InputItems">Twitter</label>
				<input id="customer_social2" class="InputItems" type="url" placeholder="https://twitter.com/empresa" name="CustomerTwitter" tabindex="13">
			</div>

			<div class="InputGroup InputInstagram">
				<label class="LabelInput" for="InputItems">Instagram</label>
				<input id="customer_social3" class="InputItems" type="text" name="CustomerInstagram" placeholder="https://instagram.com/empresa" tabindex="14">
			</div>
			<div class="InputGroup InputExempt">
				<label class="LabelInput" for="InputItems">Exento</label>
				<input id="customer_excempt" class="InputCheck" type="checkbox" name="CustomerExempt" tabindex="15">
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