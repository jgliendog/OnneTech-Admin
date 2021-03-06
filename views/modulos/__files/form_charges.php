<section class="FrmCargos">
    <header>
        <h1><span>Cargos de Inventario</span></h1>
    </header>
    <aside>
        <div class="DataLogistica">            
            <section class="SearchDataSale FrmInputData">
                <h6 class="BtnTextVerCenter TitleDepo" for="BtnDeposito"><span>Depósito:</span></h6>
                <select name="DepositoCompras" id="BtnDeposito">
                    <option value="0">Seleccionar Depósito......</option>
                    <option value="1">ALmacen Principal</option>
                </select>
            </section>            
            <section class="SearchDataSale FrmInputData">
                <input class="BuscarItems" type="text" placeholder="Ingrese el código del items....">
                <input class="QtyVenta NumInputRight" type="text" value="1.00">
                <a href="#" class="BtnSelectItems BtnTextVerCenter btn-outline-secondary"><span><i class="material-icons">done_all</i>Agregar</span></a>
            </section>
        </div>    
    </aside>

    <section class="TotalesTransaccion">
        <section class="BordeTotales">
            <div class="FrmInputTotales">
                <label for="NumDocumento">Número:</label>
                <input readonly type="text" class="NumDocumento NumInputRight" id="NumDocumento" value="00000001" name="NumDocumento">
            </div>
            <div class="FrmInputTotales">
                <label for="FechaCompras">Fecha:</label>
                <input type="text" class="FechaCompras NumInputRight" id="FechaCompras" value="19/08/2019" name="FechaCompras">
            </div>
            
            
            <div class="FrmInputTotales">
                <label for="FechaCompras">Total Cargo:</label>
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
            <tbody class="">
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

            <a href="#" class="btn btn-outline-secondary BtnTextVerCenter" accesskey="n"><span><i class="material-icons">bookmarks</i>Nuevo</span></a>
            <a href="#" class="btn btn-outline-secondary BtnTextVerCenter" accesskey="d"><span><i class="material-icons">archive</i>Cargar</span></a>
            <a href="#" class="btn btn-outline-secondary BtnTextVerCenter" accesskey="s"><span><i class="material-icons">unarchive</i>Guardar</span></a>
            <a href="#" class="btn btn-outline-info BtnTextVerCenter" accesskey="p"><span><i class="material-icons">print</i>Reimprimir</span></a>

            <a href="#" class="btn btn-outline-primary BtnTextVerCenter" accesskey="t"><span><i class="material-icons">send</i>Totalizar</span></a>
            <a href="#" class="btn btn-outline-danger BtnTextVerCenter" accesskey="c"><span><i class="material-icons">clear</i>Anular</span></a>

            <a href="<?php echo BaseUrl;?>Admin" class="btn btn-outline-warning BtnTextVerCenter"><span><i class="material-icons">exit_to_app</i>Salir</span></a>

        </div>
    </footer>
</section>