<section class="FrmOperation">

    <header class="HeaderOperation">
        <a href="#" class="BtnNavBar" id="btn_nav_bar">
                    <span class="LineNavBar"></span>
                    <span class="LineNavBar"></span>
                    <span class="LineNavBar"></span>
                    <span class="LineNavBar"></span>
                </a>
        <h1 class="TitleOpartion"><span>Nota deCrédito</span></h1>
    </header>

    <div class="DataOperation">

            <div class="InputGroup">
            <label class="LabelInput" for="InputItems">Proveedor</label>
        <div class="InputGroupVertical">
            <input readonly  id="customer_code_buy" class="InputItems" type="text" name="ProviderCodeBuy" tabindex="1" onfocus="true">
                <a href="#" class="BtnAction OutLoad BtnSizeXs"><span><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Buscar</span></a>
                <a href="#" class="BtnAction OutLoad BtnSizeXs"><span><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Nuevo</span></a>
            </div>
        </div>            

    
        <section class="InputGroup">
            <h6 class="BtnTextVerCenter TitleDepo" for="BtnDeposito"><span>Almacen:</span></h6>
            <select class="InputItems" name="Seller" id="BtnDeposito">
                <option value="1">ALmacen Principal</option>
                <option value="2">Almacen interno</option>
            </select>

        </section>
        <section class="InputGroup SelectItems">
            
            <label for="currency_exchange">Cambio</label>
            <input id="currency_exchange" class="InputItems InputExchange TextRight" type="text" value="3.70">
            <input class="InputItems InputFind" type="text" placeholder="Ingrese el código del items....">
            <input class="InputItems InputQty" type="text" value="1.00">
            <a href="#" class="BtnAction OutLoad"><span><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar</span></a>
        </section>
    </div>

    <section class="TotalsOperation">
        <section class="BordeTotales">
            <div class="FrmInputTotales">
                <label for="FechaCompras">Documento:</label>
                <input type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="00000001" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Fecha:</label>
                <input type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="19/08/2019" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Total Bruto:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Descuento:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Base Imponible:</label>
                <input type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">IGV - 18%:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Total Compras:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
        </section>
    </section>

    <section class="DetailsOperation">

        <section class="HeaderDetails">            
            <h2 class="TextCenter"><span>#</span></h2>
            <h2 class="TextCenter">Código</h2>
            <h2 class="TextCenter">Descripción</h2>
            <h2 class="TextCenter">Cantidad</h2>
            <h2 class="TextCenter">Costo</h2>
            <h2 class="TextCenter">Total</h2>
            <h2 class="TextCenter">Acción</h2>
        </section>

        <div class="TableInvDetails">

            <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun">1</span></div>
            <div class="AlingContentLeft Border Input-Col"><input readonly class="Col-Code" type="text" value="9999999999"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Description" type="text" value="compacto"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Qty" type="text" value="999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Cost" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Totals" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><a href="#"><i class="material-icons">delete</i></a></div>

            <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun">1</span></div>
            <div class="AlingContentLeft Border Input-Col"><input readonly class="Col-Code" type="text" value="9999999999"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Description" type="text" value="compacto"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Qty" type="text" value="999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Cost" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Totals" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><a href="#"><i class="material-icons">delete</i></a></div>

            <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun">1</span></div>
            <div class="AlingContentLeft Border Input-Col"><input readonly class="Col-Code" type="text" value="9999999999"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Description" type="text" value="compacto"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Qty" type="text" value="999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Cost" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Totals" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><a href="#"><i class="material-icons">delete</i></a></div>

            <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun">1</span></div>
            <div class="AlingContentLeft Border Input-Col"><input readonly class="Col-Code" type="text" value="9999999999"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Description" type="text" value="compacto"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Qty" type="text" value="999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Cost" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Totals" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><a href="#"><i class="material-icons">delete</i></a></div>

            <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun">1</span></div>
            <div class="AlingContentLeft Border Input-Col"><input readonly class="Col-Code" type="text" value="9999999999"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Description" type="text" value="compacto"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Qty" type="text" value="999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Cost" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Totals" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><a href="#"><i class="material-icons">delete</i></a></div>

            <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun">1</span></div>
            <div class="AlingContentLeft Border Input-Col"><input readonly class="Col-Code" type="text" value="9999999999"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Description" type="text" value="compacto"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Qty" type="text" value="999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Cost" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><input readonly class="Col-Totals" type="text" value="999.999.999,99"></div>
            <div class="AlingContentCenter Border Input-Col"><a href="#"><i class="material-icons">delete</i></a></div>




        </div>

    </section>

    <footer class="ContentButton">
        <div class="BtnControl">

            <a href="#" class="Btn BtnSmallBtnCtrl OutNew" accesskey="n"><span><i class="material-icons">bookmarks</i>Nuevo</span></a>
            <a href="#" class="Btn BtnSmallBtnCtrl OutLoad" accesskey="d"><span><i class="material-icons">archive</i>Cargar</span></a>
            <a href="#" class="Btn BtnSmallBtnCtrl OutUpdate" accesskey="s"><span><i class="material-icons">unarchive</i>Guardar</span></a>
            <a href="#" class="Btn BtnSmallBtnCtrl OutPrint" accesskey="p"><span><i class="material-icons">print</i>Reimprimir</span></a>

            <a href="#" class="Btn BtnSmallBtnCtrl OutTotal" accesskey="t"><span><i class="material-icons">send</i>Totalizar</span></a>
            <a href="#" class="Btn BtnSmallBtnCtrl InDanger" accesskey="c"><span><i class="material-icons">clear</i>Anular</span></a>

            <a href="<?php echo Url;?>" class="Btn BtnSmallBtnCtrl OutExit"><span><i class="material-icons">exit_to_app</i>Salir</span></a>

        </div>
    </footer>
</section>
<!-- <section class="FrmCompras">
    <header>
        <h1><span>Módulo de Compras</span></h1>
    </header>
    <aside>
        <div class="DataProvider">            
            <section class="SearchDataBuy FrmInputData">
                <input class="InputProvider" readonly type="text">
                <a href="#" class="Btn BtnBuscarProvider BtnTextVerCenter OutLine"><span><i class="material-icons">search</i>Buscar</span></a>
                <a href="#" class="Btn BtnNewProvider BtnTextVerCenter OutLine"><span><i class="material-icons">add</i>Nuevo</span></a>

            </section>
            <section class="SearchDataBuy FrmInputData">
                <h6 class="BtnTextVerCenter TitleDepo" for="BtnDeposito"><span>Depósito</span></h6>
                <select name="DepositoCompras" id="BtnDeposito">
                    <option value="0">Seleccionar Depósito......</option>
                    <option value="1">ALmacen Principal</option>
                </select>
            </section>
            <section class="SearchDataBuy FrmInputData">
                <input class="BuscarItems" type="text" placeholder="Ingrese el código del items....">
                <input class="BuscarQty NumInputRight" type="text" value="1.00">
                <a href="#" class="Btn BtnSelectItems BtnTextVerCenter btn-outline-secondary"><span><i class="material-icons">done_all</i>Agregar</span></a>
            </section>
        </div>

        <section class="BtnOperBuy" id="BtnOperBuy">
            <div>
                <label for="TipoCambio">Típo Cambio</label>
                <input class="InputTipoCambio NumInputRight" id="TipoCambio" type="text" value="20,000.000">
            </div>
            <a href="#" class="Btn OutLine BtnTextVerCenter BtnSmall"><span><i class="material-icons">list</i>Serial</span></a>

            <a href="#" class="Btn OutLine BtnTextVerCenter BtnSmall" id="BtnControlOper"><span><i class="material-icons">playlist_add</i>DetalleItems</span></a>
            <a href="#" class="BtnControlOper Btn OutLine BtnTextVerCenter BtnSmall" id="BtnControlOper"><span><i class="material-icons">schedule</i>Programadas</span></a>

            <a href="#" class="Btn OutLine BtnTextVerCenter BtnSmall" id="BtnControlOper"><span><i class="material-icons">import_export</i>Importación</span></a>
        </section>
    </aside>

    <section class="TotalesCompras">
        <section class="BordeTotales">
            <div class="FrmInputTotales">
                <label for="FechaCompras">Fecha:</label>
                <input type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="19/08/2019" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Total Bruto:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Descuento:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Base Imponible:</label>
                <input type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">IGV - 18%:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Total Compras:</label>
                <input readonly type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="0.00" name="FechaCompras">
            </div>
        </section>
    </section>
    <section class="FrmBodyCompras DetailCompras">

        <table id="DetailCompras" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="Nitems">#</th>
                    <th class="CodItems">Código</th>
                    <th>Desripción</th>
                    <th class="QtyItemsDetail">Cantidad</th>
                    <th>Costo</th>
                    <th>Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>12345678901234567poi</td>
                    <td>Edinburgh</td>
                    <td class="NumInputCenter">61.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="MountItems NumInputRight">$320,800,999,999.00</td>
                    <td class="ActionItems"><a href="#"><i class="material-icons">delete</i></a></td>
                </tr>

            </tbody>

        </table>

    </section>
    <footer>
        <div class="BtnControl">

            <a href="#" class="Btn OutLine BtnTextVerCenter" accesskey="n"><span><i class="material-icons">bookmarks</i>Nuevo</span></a>
            <a href="#" class="Btn OutLine BtnTextVerCenter" accesskey="d"><span><i class="material-icons">archive</i>Cargar</span></a>
            <a href="#" class="Btn OutLine BtnTextVerCenter" accesskey="s"><span><i class="material-icons">unarchive</i>Guardar</span></a>
            <a href="#" class="Btn OutPrint BtnTextVerCenter" accesskey="p"><span><i class="material-icons">print</i>Reimprimir</span></a>
            <a href="#" class="Btn OutTotal BtnTextVerCenter" accesskey="t"><span><i class="material-icons">send</i>Totalizar</span></a>
            <a href="#" class="Btn OutNull BtnTextVerCenter" accesskey="c"><span><i class="material-icons">clear</i>Anular</span></a>
            <a href="<?php echo BaseUrl;?>Admin" class="Btn OutExit BtnTextVerCenter"><span><i class="material-icons">exit_to_app</i>Salir</span></a>

        </div>
    </footer>
</section> -->