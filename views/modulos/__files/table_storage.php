<div class="ContentList" id="content_list">
	<div class="Table" id="table_items">
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
				<h2 class="TextCenter">Responsable</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Detalle</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Ubicación</h2>
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
				<div class="TextCenter Border"><?php echo htmlspecialchars(utf8_encode($keyList['FDP_CODE'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FDP_DESCRIPTION'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FDP_LIABLE'])) ?></div>
				<div class="TextCenter Border"><?php echo htmlspecialchars(utf8_encode($keyList['FDP_DETAILS'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FDP_LOCATION'])) ?></div>
				<div  class="TextCenter Border <?php if ($keyList['FDP_STATUS']==0) {
					echo " Estado_Inactivo";
				} else{
					echo " Estado_Activo";
				} ?>"><?php if ($keyList['FDP_STATUS']==0) {
					echo "Inactivo";
				} else{
					echo "Activo";
				} ?>					
				</div>
				<div class="TextCenter Border ContentActionBtm" id="event_btn">
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FDP_ID'])) ?>" class="Btn BtnSmTb InEdit" data="Edit"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FDP_ID'])) ?>" data="Edit" class="fa fa-pencil" aria-hidden="true"></i></a>
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FDP_ID'])) ?>" class="Btn BtnSmTb InDanger" data="Delete"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FDP_ID'])) ?>" data="Delete" class="fa fa-trash" aria-hidden="true"></i></a>
				</div>
			<?php endforeach;?>
			<!-- </section> -->
		</div>
	</div>
	<div class="ContentPagination" id="pagination">
		<div class="Pagination">
			<?php for ($i=0; $i < $numberPager; $i++) { ; ?>
				
			<a href="<?php echo Url.'storage?pag='.($i+1) ?>" class="BtnSmall BtnPagination"><span><?php echo $i+1; ?></span></a>
			

			 <?php };  ?>
		</div>
	</div>