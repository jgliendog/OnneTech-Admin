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
				<div class="TextCenter Border"><?php echo htmlspecialchars(utf8_encode($keyList['FBC_ACCOUNT'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FBC_DESCRIPTION'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FBC_DETAILS'])) ?></div>
				<div class="TextCenter Border"><?php echo htmlspecialchars(utf8_encode($keyList['FBC_TAXPOS'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FBC_TAXCARD'])) ?></div>
				<div class="TextCenter Border ContentActionBtm" id="event_btn">
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FBC_ID'])) ?>" class="Btn BtnSmTb InEdit" data="Edit"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FBC_ID'])) ?>" data="Edit" class="fa fa-pencil" aria-hidden="true"></i></a>
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FBC_ID'])) ?>" class="Btn BtnSmTb InDanger" data="Delete"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FBC_ID'])) ?>" data="Delete" class="fa fa-trash" aria-hidden="true"></i></a>
				</div>
			<?php endforeach;?>
			<!-- </section> -->
		</div>
	</div>
	<div class="ContentPagination" id="pagination">
		<div class="Pagination">
			<?php for ($i=0; $i < $numberPager; $i++) { ; ?>
				
			<a href="<?php echo Url.'bank?pag='.($i+1) ?>" class="BtnSmall BtnPagination"><span><?php echo $i+1; ?></span></a>
			

			 <?php };  ?>
		</div>
	</div>