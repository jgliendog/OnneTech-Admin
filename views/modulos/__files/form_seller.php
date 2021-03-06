<!-- <form action="#" method="post" class="ContentForm" id="content_form"> -->
	<form action="#" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>

		<div class="InputGroup InputCode">
			<input hidden id="seller_id" type="text">
			<label class="LabelInput" for="InputItems">Código</label>
			<input id="seller_code" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="seller_description" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputTypeDoc">
			<label class="LabelInput" for="InputItems">Tipo Documento</label>
			<select class="TipoDocItems" name="TypeDoc" id="seller_type_doc">
				<option value="0">Tipo documento</option>
				<option value="1">DNI</option>
			</select>
		</div>

		<div class="InputGroup InputDocument">
			<label class="LabelInput " for="InputItems">Documento</label>
			<input class="InputItems" id="seller_document" type="text">
		</div>


		<div class="InputGroup InputAdress1">
			<label class="LabelInput" for="InputItems">Dirección Habitación</label>
			<input id="seller_adress1" class="InputItems" type="text">
		</div>

		<div class="InputGroup InputSede">
			<label class="LabelInput" for="InputItems">Ubicación (Sede)</label>
			<select class="SellerLocation" name="TypeDoc" id="seller_location">
				<option value="0">Principal</option>
				<option value="1">Sucursal</option>
				<option value="4">Lugar ubicación4</option>
			</select>
		</div>		
		<div class="InputGroup InputZona">
			<label class="LabelInput" for="InputItems">Zona de Venta Asignada</label>
			<select class="SellerZone" name="TypeDoc" id="seller_zone">
				<option value="0">Principal</option>
				<option value="1">Sucursal</option>
				<option value="3">Sucursal3</option>
			</select>
		</div>		

		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha</label>
			<input id="seller_date" class="InputItems" type="date">
		</div>

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="seller_status" class="InputCheck" type="checkbox">
		</div>
	</section>

	<div class="FormContentSecond" id="animate">
		<section class="ContentInfoTwo" id="formfontentsecond">
			<h4 class="TitleForm">Datos Adicionales</h4>

			<div class="TipoComision">
				<h2>Tipo de Comisiones</h2>
				<div class="InputGroup GroupCommission">
					<label class="LabelCommission" for="InputComision">Por Departamento</label>
					<input id="seller_comision_dep_status" class="InputCheck" type="checkbox">
					<input id="seller_comision_dep" class="InputComision TextRight" type="text" placeholder="5%">
				</div>
				<div class="InputGroup GroupCommission">
					<label class="LabelCommission" for="InputComision">Por Cobranzas</label>
					<input id="seller_comision_cobro_status" class="InputCheck" type="checkbox">
					<input id="seller_comision_Cobro" class="InputComision TextRight" type="text" placeholder="5%">
				</div>
				<div class="InputGroup GroupCommission">
					<label class="LabelCommission" for="InputComision">Por Volúmen</label>
					<input id="seller_comision_vol_status" class="InputCheck" type="checkbox">
					<input id="seller_comision_vol" class="InputComision TextRight" type="text" placeholder="5%">
				</div>
				<div class="InputGroup GroupCommission">
					<label class="LabelCommission" for="InputComision">Por Ventas</label>
					<input id="seller_comision_sale_status" class="InputCheck" type="checkbox">
					<input id="seller_commision_sale" class="InputComision TextRight" type="text" placeholder="5%">
				</div>
				<div class="InputGroup GroupCommission">
					<label class="LabelCommission" for="InputComision">Por Utilidad</label>
					<input id="seller_comision_util_status" class="InputCheck" type="checkbox">
					<input id="seller_commision_util" class="InputComision TextRight" type="text" placeholder="5%">
				</div>
			</div>


			<div class="InputGroup InputPhone1">
				<label class="LabelInput" for="InputItems">Teléfono 1</label>
				<input id="seller_phone1" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputPhone2">
				<label class="LabelInput" for="InputItems">Teléfono 2</label>
				<input id="seller_phone2" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputMovil1">
				<label class="LabelInput" for="InputItems">Móvil 1</label>
				<input id="seller_movil1" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputMovil2">
				<label class="LabelInput" for="InputItems">Móvil 2</label>
				<input id="seller_movil2" class="InputItems" type="text">
			</div>

			<div class="InputGroup InputMail">
				<label class="LabelInput" for="InputItems">E-mail</label>
				<input id="seller_email" class="InputItems" type="email">
			</div>

			<div class="InputGroup InputMailAlt">
				<label class="LabelInput" for="InputItems">E-mail Alt</label>
				<input id="seller_email_alt" class="InputItems" type="email">
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