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
				<h2 class="TextCenter">Contacto</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Teléfono</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">e-mail</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Status</h2>
			</div>
			<div class="HeaderTable">
				<h2 class="TextCenter">Acción</h2>
			</div>
			<?php 
			$count =1;

			foreach ($PagerResult as $key => $keyList): ?>
				<div class="TextCenter Border">
					<?php echo $key+1; ?>
				</div>
				<div class="TextCenter Border"><?php echo htmlspecialchars(utf8_encode($keyList['FC_CODE'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars($keyList['FC_DESCRIPTION']) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FC_CONTACT'])) ?></div>
				<div class="TextCenter Border"><?php echo htmlspecialchars(utf8_encode($keyList['FC_PHONE1'])) ?></div>
				<div  class="TextLeft Border"><?php echo htmlspecialchars(utf8_encode($keyList['FC_EMAIL'])) ?></div>
				<div  class="TextCenter Border <?php if ($keyList['FC_STATUS']==0) {
					echo " Estado_Inactivo";
				} else{
					echo " Estado_Activo";
				} ?>"><?php if ($keyList['FC_STATUS']==0) {
					echo "Inactivo";
				} else{
					echo "Activo";
				} ?></div>
				<div class="TextCenter Border ContentActionBtm" id="event_btn">
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FC_ID'])) ?>" class="Btn BtnSmTb InEdit" data="Edit"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FC_ID'])) ?>" data="Edit" class="fa fa-pencil" aria-hidden="true"></i></a>
					<a href="#" id="<?php echo htmlspecialchars(utf8_encode($keyList['FC_ID'])) ?>" class="Btn BtnSmTb InDanger" data="Delete"><i id="<?php echo htmlspecialchars(utf8_encode($keyList['FC_ID'])) ?>" data="Delete" class="fa fa-trash" aria-hidden="true"></i></a>
				</div>
			<?php endforeach;?>
			<!-- </section> -->
		</div>
	</div>
	<div class="ContentPagination" id="pagination">
		<div class="Pagination">

			<?php for ($i=0; $i < $numberPager; $i++) { ; ?>
				
			<a href="<?php echo Url.'customer?pag='.($i+1) ?>" class="BtnSmall BtnPagination"><span><?php echo $i+1; ?></span></a>
			

			 <?php };  ?>
			

		</div>
	</div>


