<section class="FrmOperation">
    
    <header class="HeaderOperation">
        <a href="#" class="BtnNavBar" id="btn_nav_bar">
                    <span class="LineNavBar"></span>
                    <span class="LineNavBar"></span>
                    <span class="LineNavBar"></span>
                    <span class="LineNavBar"></span>
                </a>
        <h1 class="TitleOpartion"><span>Transferencias de Inventario</span></h1>
    </header>

    <div class="DataOperation">            

        <section class="InputGroup">
            <h6 class="BtnTextVerCenter TitleDepo" for="BtnDeposito"><span>Origen:</span></h6>
            <select class="InputItems" name="DepositoCompras" id="source_storage">
                <option value="0">Seleccionar Depósito......</option>
                   <?php foreach ($Storage as $key => $keyList): ?>
                <option value="<?php echo htmlspecialchars(utf8_encode($keyList['FCT_ID'])) ?>"><?php echo htmlspecialchars(utf8_encode($keyList['FCT_CODE']."-".$keyList['FCT_DESCRIPTION'])) ?></option>
                <?php endforeach;?>
            </select>

        </section>
        <section class="InputGroup">
            <h6 class="BtnTextVerCenter TitleDepo" for="BtnDeposito"><span>Destino:</span></h6>
            <select class="InputItems" name="Seller" id="target_storage">
                <option value="0">Seleccionar Vendedor......</option>
                <?php foreach ($Storage as $key => $keyList): ?>
                <option value="<?php echo htmlspecialchars(utf8_encode($keyList['FCT_ID'])) ?>"><?php echo htmlspecialchars(utf8_encode($keyList['FCT_CODE']."-".$keyList['FCT_DESCRIPTION'])) ?></option>
                <?php endforeach;?>
            </select>

        </section>
        <section class="InputGroup SelectItems">
            <input id="select_code_inv" class="InputItems InputFind" type="text" placeholder="Ingrese el código del items....">
            <input id = "input_qty" class="InputItems InputQty" type="text" value="1.00">
            <a href="#" id="btn_add_item" class="BtnAction OutLoad BtnSizeXxs"><span><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar</span></a>
        </section>
            <div>
                <p class="ItemsDescription" id="item_description"></p>
            </div>
    </div>

    <section class="TotalsOperation">
        <section class="BordeTotales">
            <div class="FrmInputTotales">
                <label for="NumDocumento">Número:</label>
                 <?php foreach ($System as $key => $keyList): ?>
                <input readonly type="text" class="NumDocumento NumInputRight" id="numbers_transfer" value="<?php echo htmlspecialchars(utf8_encode($keyList['FS_DOCTRANSFER'])) ?>" name="NumDocumento">
                <?php endforeach;?>
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Fecha:</label>
                <input type="text" class="FechaCompras NumInputRight" id="date_transfer" value="<?php echo date('d/m/Y')?>">
            </div>


            <div class="FrmInputTotales">
                <label for="FechaCompras">Total Cargo:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="total_amount_tranfer" value="0.00" name="FechaCompras">
            </div>
        </section>
    </section>

    <section class="DetailsOperation" id="details_operation">

        <section class="HeaderDetails">            
            <h2 class="TextCenter"><span>#</span></h2>
            <h2 class="TextCenter">Código</h2>
            <h2 class="TextCenter">Descripción</h2>
            <h2 class="TextCenter">Cantidad</h2>
            <h2 class="TextCenter">Costo</h2>
            <h2 class="TextCenter">Total</h2>
            <h2 class="TextCenter">Acción</h2>
        </section>

        <div class="TableInvDetails" id="table_inv_details">

            


        </div>

    </section>

    <footer class="ContentButton">
        <div class="BtnControl">

            <a href="#" id="new_items" class="Btn BtnSmallBtnCtrl OutNew" accesskey="n"><span><i class="material-icons">bookmarks</i>Nuevo</span></a>
            <a href="#" id="save_tranfer" class="Btn BtnSmallBtnCtrl OutLoad" accesskey="d"><span><i class="material-icons">archive</i>Cargar</span></a>
            <a href="#" id="download_tranfer" class="Btn BtnSmallBtnCtrl OutUpdate" accesskey="s"><span><i class="material-icons">unarchive</i>Guardar</span></a>
            <a href="#" id="print_tranfer" class="Btn BtnSmallBtnCtrl OutPrint" accesskey="p"><span><i class="material-icons">print</i>Reimprimir</span></a>

            <a href="#" id="total_tranfer" class="Btn BtnSmallBtnCtrl OutTotal" accesskey="t"><span><i class="material-icons">send</i>Totalizar</span></a>
            <a href="#" id="cancel_tranfer" class="Btn BtnSmallBtnCtrl InDanger" accesskey="c"><span><i class="material-icons">clear</i>Anular</span></a>

            <a href="<?php echo Url;?>" class="Btn BtnSmallBtnCtrl OutExit"><span><i class="material-icons">exit_to_app</i>Salir</span></a>

        </div>
    </footer>
</section>


