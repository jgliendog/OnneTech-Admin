today=new Date().toLocaleDateString()
const SelectCodeInv = document.getElementById('select_code_inv')
const InputQty = document.getElementById('input_qty')
const ItemDescription = document.getElementById('item_description');
const TableInvDetails = document.getElementById('table_inv_details');
const SourceStorage = document.getElementById('source_storage');
const TargetStorage = document.getElementById('target_storage');
const BtnAddItem = document.getElementById('btn_add_item')

const NewItems = document.getElementById('new_items')
const SaveTranfer = document.getElementById('save_tranfer')
const DownloadTranfer = document.getElementById('download_tranfer')
const PrintTranfer = document.getElementById('print_tranfer')
const TotalTranfer = document.getElementById('total_tranfer')
const CancelTranfer = document.getElementById('cancel_tranfer')

const NumbersTransfer = document.getElementById('numbers_transfer')
const TotalAccumTranfer = document.getElementById('total_amount_tranfer');
const ColNunItems = document.getElementById('col-nun');

const SubTotalTranferModal = document.getElementById('sub_total_tranfer_modal')
const BtnCancelTotalModal = document.getElementById('btn_cancel_total_modal')
// const DeleteItems = document.querySelector("a.delete_items.delete_items")
const DeleteItems = document.getElementById("delete_items1")
const FormTranfer = document.getElementById('form_tranfer')
const BtnSaveTotalModal = document.getElementById('btn_save_total_modal')

let TotalAcum=0;
let Count =1;

FormTranfer.addEventListener("focus", function(evento) {
    evento.target.style.background = "#f3f3f3";
  }, true);
FormTranfer.addEventListener("blur", function(evento) {
    evento.target.style.background = "";
  }, true);
FormTranfer.addEventListener('submit', (e)=>{
    e.preventDefault();
  
  });
SourceStorage.addEventListener('change',(e)=>{
  TargetStorage.removeAttribute("disabled", "disabled")  
})
TargetStorage.addEventListener('change',(e)=>{
  SelectCodeInv.removeAttribute("disabled", "disabled")

})
TargetStorage.setAttribute("disabled", "disabled");
SelectCodeInv.setAttribute("disabled", "disabled");
InputQty.setAttribute("disabled", "disabled");
BtnAddItem.setAttribute("disabled", "disabled");


SelectCodeInv.addEventListener('keyup',(e)=>{
  e.preventDefault();

  SearchItems(e);
      SelectCodeInv.addEventListener('keypress',(e)=>{
      const action =e.keyCode;
          
      if (action==13) {

        InputQty.focus();

      }
    })
  if (SelectCodeInv.value>0) {
  InputQty.removeAttribute("disabled", "disabled")
  }
 
})
if (InputQty) {
  InputQty.addEventListener('keypress',(e)=>{
      const action =e.keyCode;
      TotalItems = (InputQty.value*RespCost)     
      if (action==13) {
        AddItems();
        SelectCodeInv.focus();
        SelectCodeInv.value="";
      }
  })
}
BtnAddItem.addEventListener('click',(e)=>{
  e.preventDefault();
 
})

NewItems.addEventListener('click',(e)=>{
  e.preventDefault()
  alert('Hola mUndo')
})
SaveTranfer.addEventListener('click',(e)=>{
  e.preventDefault()
  alert('Hola mUndo')
})
DownloadTranfer.addEventListener('click',(e)=>{
  e.preventDefault()
  alert('Hola mUndo')
})
PrintTranfer.addEventListener('click',(e)=>{
  e.preventDefault()
  alert('Hola mUndo')
})
TotalTranfer.addEventListener('click',(e)=>{
  e.preventDefault()
  OpenModal()
})
CancelTranfer.addEventListener('click', (e)=>{
  e.preventDefault()
  alert('Anular Transferencia')
  while (TableInvDetails.hasChildNodes()) {  
  TableInvDetails.removeChild(TableInvDetails.firstChild);
}
  TotalAcum-=TotalAcum
  Count=1
  SubTotalTranferModal.value=parseFloat(TotalAcum).toFixed(2);
  FormTranfer.reset();
})

TableInvDetails.addEventListener('click',(e)=>{
  e.preventDefault()
  console.log(e.target)
  const iditems = e.target.getAttribute('data');
  console.log(iditems)
  // iditems.removeChild(iditems.childNodes[0]);
  console.log(TableInvDetails.childNodes.value)
  TableInvDetails.removeChild(TableInvDetails.children[(iditems-1)]);
  // console.log(e.target.parentElement)
  console.log(TableInvDetails.previousSibling.previousSibling)
  // TotalAcum-=TableInvDetails.children.value

})

// if (DeleteItems) {
//   DeleteItems.addEventListener('click',(e)=>{
//     e.preventDefault()
//     alert('hola mndo')

//     // console.log(e.target)
//     // console.log(e.target.parentElement)
//   })  
// }

/***********************Modal***************************/ 

function OpenModal(){document.querySelector(".Modal").style.display ="block";}

function ClosedModal(){document.querySelector(".Modal").style.display ="none";}


BtnCancelTotalModal.addEventListener('click', (e)=>{
  e.preventDefault()
  ClosedModal()
})

/*********************function***************************/ 




if (BtnAddItem) {
  BtnAddItem.addEventListener('click',(e)=>{
    e.preventDefault();
    AddItems();
    SelectCodeInv.focus();
    SelectCodeInv.value="";
  })
}


const SearchItems = (e)=>{


  const buscarItem = e.target.value;



  const path = (`${Api}operationinv`)

  const formData = new FormData()
    formData.append('buscarItem',buscarItem)

    
     fetch(path,{
        method:'POST',
        body: formData,
        
      })
     .then(res => res.json())
     .then(data => {

        let obj = data[0]

        if (obj=='4') {
          ItemDescription.innerHTML="No existe";
        }else{
          ItemDescription.innerHTML= obj[2]
           RespCount = 1;
           RespId = obj[0]
           RespCode = parseInt(obj[1])
           RespDescrition = obj[2]
           RespCost = obj[5]      

        }

     })
     .catch(error =>'ERROR')
}


const AddItems = (e)=>{

  const RespQty = parseInt(InputQty.value);
  const Total = parseFloat(TotalItems).toFixed(2);

  
    TableInvDetails.innerHTML+=`<div id="nodo_items" data="${Count}" class="NodoItems">
    <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun" id="col-nun">${Count}</span></div>
    <input readonly id="col_code${Count}" class="AlingContentLeft Border Input-Col Col-Code" type="text" value="${RespCode}" name="codeTransfer[]">
    <input readonly id="col_decription${Count}" class="Col-Description AlingContentLeft Border Input-Col" type="text" value="${RespDescrition}">
    <input readonly id="col_qty${Count}" class="Col-Qty AlingContentLeft Border Input-Col" type="text" value="${RespQty}">
    <input readonly id="col_cost${Count}" class="Col-Cost AlingContentLeft Border Input-Col" type="text" value="${RespCost}">
    <input readonly id="col_totals${Count}" class="Col-Totals AlingContentLeft Border Input-Col" type="text" value="${Total}">
    <div class="AlingContentCenter Border Input-Col"><i class="fa fa-trash delete_items AlingContentCenter" aria-hidden="true" data="${Count}"></i></div>
    </div>`;

    Count++
    // console.log(Count)

    TotalAcum+=TotalItems

    TotalAccumTranfer.value =parseFloat(TotalAcum).toFixed(2);
    SubTotalTranferModal.value=parseFloat(TotalAcum).toFixed(2);
     console.log(TableInvDetails.children)
 }




 // TableInvDetails.innerHTML+=`<div id="nodo_items" data="${Count}" class="NodoItems">
 //    <div class="AlingContentCenter Border Input-Col"><span class="Col-Nun" id="col-nun">${Count}</span></div>
 //    <div class="AlingContentLeft Border Input-Col"><input readonly id="col_code${Count}" class="Col-Code" type="text" value="${RespCode}" name="codeTransfer[]"></div>
 //    <div class="AlingContentCenter Border Input-Col"><input readonly id="col_decription${Count}" class="Col-Description" type="text" value="${RespDescrition}"></div>
 //    <div class="AlingContentCenter Border Input-Col"><input readonly id="col_qty${Count}" class="Col-Qty" type="text" value="${RespQty}"></div><div class="AlingContentCenter Border Input-Col"><input readonly id="col_cost${Count}" class="Col-Cost" type="text" value="${RespCost}"></div><div class="AlingContentCenter Border Input-Col"><input readonly id="col_totals${Count}" class="Col-Totals" type="text" value="${Total}"></div>
 //    <div class="AlingContentCenter Border Input-Col"><i class="fa fa-trash delete_items AlingContentCenter" aria-hidden="true" data="${Count}"></i></div>
 //    </div>`;