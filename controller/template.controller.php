<?php 
/**
 * 
 */
class LinkGroup
{
	
	static public function Menu(){
		include 'views/modulos/menu.php';
	}
	static public function Index(){
		include "model/index.model.php";		
	}
	static public function Customer(){
		include "model/customer.model.php";		
	}
	static public function Provider(){
		include "model/provider.model.php";		
	}
	static public function Departament(){
		include "model/departament.model.php";		
	}
	static public function Product(){
		include "model/product.model.php";		
	}
	static public function Service(){
		include "model/service.model.php";		
	}
	static public function Location(){
		include "model/location.model.php";		
	}
	static public function Zone(){
		include "model/zone.model.php";		
	}
	static public function Seller(){
		include "model/seller.model.php";		
	}
	static public function Storage(){
		include "model/storage.model.php";		
	}
	static public function Transfer(){
		include "model/transfer.model.php";		
	}
	static public function Charges(){
		include "model/charges.model.php";		
	}
	static public function Discharges(){
		include "model/discharges.model.php";		
	}
	static public function SettingInv(){
		include "model/setting_inv.model.php";		
	}

	// compras

	static public function Buy(){
		include_once "model/buy.model.php";		
	}
	static public function Expenses(){
		include "model/expenses.model.php";		
	}

	static public function OrderBuy(){
		include "model/order_buy.model.php";		
	}
	static public function OrderExpenses(){
		include "model/order_expenses.model.php";		
	}
	static public function NoteDeliveryProvider(){
		include "model/delivery_note_provider.model.php";		
	}
	// Ventas
	static public function Pos(){
		include "model/pos.model.php";		
	}
	static public function Sales(){
		include "model/invoce.model.php";		
	}

	static public function Orders(){
		include "model/orders.model.php";		
	}
	static public function Budget(){
		include "model/budget.model.php";		
	}
	static public function DeliveryNoteClients(){
		include "model/delivery_note_clients.model.php";		
	}
	static public function PulledAparts(){
		include "model/pulled_aparts.model.php";		
	}

	// Operaciones
	
	static public function xSell(){
		include "model/sell.model.php";		
	}

	static public function xOrdersSell(){
		include "model/orders_sell.model.php";		
	}
	static public function xBudget(){
		include "model/order_expenses.model.php";		
	}
	static public function xNoteDeliverySell(){
		include "model/note_delivery_sell.model.php";		
	}

	static public function Bank(){
		include "model/bank.model.php";		
	}

	static public function BankTransactions(){
		include "model/bank_transactions.model.php";		
	}

	static public function BankReconciliation(){
		include "model/bank_reconciliation.model.php";		
	}

	static public function PettyCash(){
		include "model/petty_cash.model.php";		
	}



}