<div class="ContentList" id="content_list">
	<div class="TableDepartament" id="table_items">
		<!-- <section class="HeaderTable"> -->
			<div class="HeaderTable">
				<h2 class="TextCenter">#</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Código</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextLeft">Descripción</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Detalle</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Tipo Inventario</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Tipo de Costo</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Status</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Acción</h2>
			</div>
			<?php 
			$count =1;

			foreach ($Vista as $key => $keyList): ?>
				<div class="TextCenter Border">
					<?php echo $key+1; ?>
				</div>
				<div class="TextCenter Border"><?php echo htmlspecialchars(utf8_encode($keyList['FCT_CODE'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FCT_DESCRIPTION'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FCT_DETAILS'])) ?></div>
				<div class="TextCenter Border"><?php switch ($keyList['FCT_TYPEPRODC']) {
						case 1:echo "Producto";
					break;
						case 2:echo "Servicio";
					break;
						case 3:echo "Combo";
					break;
						case 4:echo "Producción";
					break;
						case 5:echo "Activo Fijo";
					break;

				}
				$keyList['FCT_TYPEPRODC'] ?></div>
				<div  class="TextLeft Border"><?php switch ($keyList['FCT_TYPECOST']) {
						case 1:echo "Costo Promedio";
					break;
						case 2:echo "Ultimo Costo";
					break;
						case 3:echo "Costo Lote";
					break;
				} ?></div>
				<div  class="TextCenter Border <?php if ($keyList['FCT_STATUS']==0) {
					echo " Estado_Inactivo";
				} else{
					echo " Estado_Activo";
				} ?>"><?php if ($keyList['FCT_STATUS']==0) {
					echo "Inactivo";
				} else{
					echo "Activo";
				} ?>					
				</div>
				<div class="TextCenter Border ContentActionBtm" id="event_btn">
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FCT_ID'])) ?>" class="Btn BtnSmTb InEdit" data="Edit"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FCT_ID'])) ?>" data="Edit" class="fa fa-pencil" aria-hidden="true"></i></a>
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FCT_ID'])) ?>" class="Btn BtnSmTb InDanger" data="Delete"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FCT_ID'])) ?>" data="Delete" class="fa fa-trash" aria-hidden="true"></i></a>
				</div>
			<?php endforeach;?>
			<!-- </section> -->
		</div>
	</div>
	<div class="ContentPagination" id="pagination">
		<div class="Pagination">
			<?php for ($i=0; $i < $numberPager; $i++) { ; ?>
				
			<a href="<?php echo Url.'departament?pag='.($i+1) ?>" class="BtnSmall BtnPagination"><span><?php echo $i+1; ?></span></a>
			

			 <?php };  ?>
			<!-- <a href="#" class="BtnSmall BtnPagination"><span>1</span></a>
			<a href="#" class="BtnSmall BtnPagination"><span>2</span></a>
			<a href="#" class="BtnSmall BtnPagination"><span>3</span></a>
			<a href="#" class="BtnSmall BtnPagination"><span>4</span></a>
			<a href="#" class="BtnSmall BtnPagination"><span>5</span></a> -->
		</div>
	</div>