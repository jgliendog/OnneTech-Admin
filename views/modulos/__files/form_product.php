<form action="#" class="ContentForm" id="content_form">

	<section class="FormContentFirst" id="FormContentFirst">

		<h3 class="TitleForm">Datos Básicos</h3>

		<div class="InputGroup InputCode">
			<label class="LabelInput" for="InputItems">Código</label>
			<input id="product_code" class="InputItems" type="text" tabindex="1">
		</div>
		<div class="InputGroup InputCategory">
			<label class="LabelInput" for="InputItems">Categoría</label>
			<select  id="product_type_departament" class="TipoDocItems" name="TypeDoc" tabindex="2">
				<?php foreach ($VistaCategory as $key => $keyList): ?>
				<option value="<?php echo htmlspecialchars(utf8_encode($keyList['FCT_ID'])) ?>"><?php echo htmlspecialchars(utf8_encode($keyList['FCT_CODE']."-".$keyList['FCT_DESCRIPTION'])) ?></option>
				<?php endforeach;?>
			</select>
		</div>

		<div class="InputGroup InputDescription">
			<label class="LabelInput" for="InputItems">Descripción</label>
			<input id="product_description" class="InputItems" type="text" tabindex="3">
		</div>

		<div class="InputGroup InputUnd">
			<label class="LabelInput" for="InputItems">Unidad</label>
			<input id="product_unit" class="InputItems" type="text" tabindex="7">
		</div>
		<div class="InputGroup InputEmpaque">
			<label class="LabelInput" for="InputItems">Empaque</label>
			<input id="product_pack" class="InputItems" type="number" tabindex="8">
		</div>
		<div class="InputGroup InputDetail">
			<label class="LabelInput " for="input_detail">Detalle o Comentario</label>
			<!-- <input class="InputItems" id="document" type="text"> -->
			<textarea id="product_detail" name="DetailProduct" class="InputItems InputText" tabindex="4"></textarea>
		</div>
		<div class="InputGroup InputRef">
			<label class="LabelInput" for="InputItems">Referencia</label>
			<input id="product_referent" class="InputItems" type="text" tabindex="10">
		</div>

		

		<div class="InputGroup InputMarca">
			<label class="LabelInput" for="InputItems">Marca</label>
			<input id="product_brand" class="InputItems" type="text" tabindex="5">
		</div>
		<div class="InputGroup InputModel">
			<label class="LabelInput" for="InputItems">Modelo</label>
			<input id="product_model" class="InputItems" type="text" tabindex="6">
		</div>

		<div class="InputGroup InputDate">
			<label class="LabelInput" for="InputItems">Fecha de Creación</label>
			<input id="product_create_date" class="InputItems" type="date" tabindex="9">
		</div>

		<div class="InputGroup InputDecimal">
			<label class="LabelInput" for="InputItems">Existencia Decimal</label>
			<input id="product_decimal_point" class="InputCheck" type="checkbox" tabindex="11">
		</div>
		

		<div class="InputGroup InputStatus">
			<label class="LabelInput" for="InputItems">status </label>
			<input id="product_status" class="InputCheck" type="checkbox">
		</div>
	</section>

	<div class="FormContentSecond" id="animate">
		<section class="ContentInfoTwo" id="formfontentsecond">
			<h4 class="TitleForm">Datos Adicionales</h4>

			<div class="InputGroup InputUbicacion">
			<label class="LabelInput" for="InputItems">Ubicación</label>
			<input id="product_stall" class="InputItems" type="text" tabindex="6">
		</div>

			

			<div class="InputGroup InputCostBefore">
				<label class="LabelInput" for="InputItems">Costo Anterior</label>
				<input id="product_before_cost" class="InputItems" type="number" tabindex="1">
			</div>

			<div class="InputGroup InputCostAfter">
				<label class="LabelInput" for="InputItems">Costo Actual</label>
				<input id="product_cost_today" class="InputItems" type="number" tabindex="2">
			</div>

			<div class="InputGroup InputCostProm">
				<label class="LabelInput" for="InputItems">Costo Promedio</label>
				<input id="product_cost_prome" class="InputItems" type="number" tabindex="3">
			</div>

			<div class="InputGroup InputExento">
				<label class="LabelInput" for="InputItems">Exento</label>
				<input id="product_exempt" class="InputCheck" type="checkbox" tabindex="4">
			</div>

			<div class="InputGroup InputExistMin">
				<label class="LabelInput" for="InputItems">Existencia Mínima</label>
				<input id="product_min" class="InputItems" type="number" tabindex="5">
			</div>

			<div class="InputGroup InputExistMax">
				<label class="LabelInput" for="InputItems">Existencia Máxima</label>
				<input id="product_max" class="InputItems" type="number" tabindex="6">
			</div>

			<div class="InputGroup InputImage">
				<label class="LabelInput" for="InputItems">Imagen</label>
				
			</div>		

		</section>
		<div class="DatosPrice">
			<section class="BotonAcordion" id="BotonAcordion">
				<a href="#">Sección de Precios......</a>
			</section>

			<div class="ContentPrice" id="ContentPrice">
				<section class="BodyAcordion" id="BodyAcordion">
				
					<!-- Inicio  -->

					<?php
					$count =1;
					 foreach ($VistaPrice as $key => $keyList): ?>

					<div id="frm_prices" class="FrmPrices">
						<label for="Label" class="PriceLabel" id="price_label_<?php echo $key+1; ?>"><?php echo htmlspecialchars(utf8_encode($keyList['FTP_DESCRIPTION'])) ?>:</label>
				
						<section class="CampoPriceInv">
							<label for="">Utilidad - 5%</label>
							<input type="text" class="InputItems Precio<?php echo $key+1; ?> TextRight" id="utility<?php echo htmlspecialchars(utf8_encode($keyList['FTP_ID'])) ?>" >
						</section>
						<section class="CampoPriceInv">
							<label for="">Sin IGV</label>
							<input type="text" class="InputItems Precio<?php echo $key+1; ?> TextRight" id="net_price<?php echo htmlspecialchars(utf8_encode($keyList['FTP_ID'])) ?>" value="">
						</section>
						
						<section class="CampoPriceInv">
							<label for="">IGV - 18%</label>
							<input type="text" class="InputItems Precio<?php echo $key+1; ?> TextRight" id="tax_price<?php echo htmlspecialchars(utf8_encode($keyList['FTP_ID'])) ?>" value="">
						</section>
						
						<section class="CampoPriceInv">
							<label for="">Total</label>
							<input type="text" class="InputItems Precio<?php echo $key+1; ?> TextRight" id="total_price<?php echo htmlspecialchars(utf8_encode($keyList['FTP_ID'])) ?>" value="">
						</section>
					</div>
					<?php endforeach;?>			
				
				</section>
			</div>
		</div>

	</div>

	<div class="ContentBtn" id="ContentBtn">
		<a class="Btn BtnAfter OutBefore" id="btnafter" href="#" tabindex="12"><span>After</span></a>
		<a class="Btn BtnNext OutNext" id="btnnext" href="#"><span>Next</span></a>
		<div class="SubBtnContent">
			
			<button class="Btn OutSuccess OutSave" id="btn_save_edit"><span>Save-Edit</span></button>
			<button class="Btn OutSuccess OutSave" id="btn_save"><span>Save</span></button>
			<a class="Btn OutDanger OutCancel" id="btn_cancel" href="#"><span>Cancel</span></a>
		</div>

	</div>

</form>