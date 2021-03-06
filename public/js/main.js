'user strict';
const Api = "http://localhost/proyect/32/api/";
const Url = "http://localhost/proyect/32/"

// Menus
const BtnMenuFile = document.getElementById("btn_menu_file");
const BtnMenuControl = document.getElementById("btn_menu_control");
const BtnMenuBuy = document.getElementById("btn_menu_buy");
const BtnMenuSales = document.getElementById("btn_menu_sales");
const BtnMenuBank = document.getElementById("btn_menu_bank");
const BtnMenuReport = document.getElementById("btn_menu_report");
// Menus Contenedor
const SubMenuFile =document.getElementById('sub_menu_file');
const SubMenuControl = document.getElementById('sub_menu_control');
const SubMenuBuy = document.getElementById('sub_menu_buy');
const SubMenuSales = document.getElementById('sub_menu_sales');
const SubMenuBank = document.getElementById('sub_menu_bank');
const SubMenuReport = document.getElementById('sub_menu_report');
const SubMenu = document.getElementById("content_menu");
// Formulario Contenedor
const BtnAfter = document.querySelector(".BtnAfter")
const BtnNext = document.querySelector(".BtnNext")
const BtnAdd = document.getElementById("create_record");
const BtnCancel = document.getElementById("btn_cancel");

const FormContent = document.getElementById('content_form');
const TableList = document.getElementById('content_list');
const Pagination = document.getElementById("pagination");


const BtnSaveEdit = document.getElementById('btn_save_edit');

const BtnSaveNew = document.getElementById('btn_save');

const BtnNavBars = document.getElementById('btn_nav_bar');
const MenuVertical = document.getElementById('menu_vertical');
const MainContent = document.getElementById('main_content');
const MenuBarNav = document.getElementById('menu_bar_nav');
const FormContentFirst = document.querySelector(".FormContentFirst");
const FormContentSecond = document.querySelector(".FormContentSecond");
const SubBtnContent = document.querySelector(".SubBtnContent");


const DepartamentTypeInv = document.getElementById('departament_type_inv');

let ResultInv


if (BtnNavBars) {
  BtnNavBars.addEventListener("click", (e) =>{
    e.preventDefault();

    if (MainContent.classList.contains('Remplace')) {
        MainContent.classList.remove('Remplace');
        MainContent.classList.add('Content');
        MenuBarNav.classList.remove('ClosedMenu');
    } else{
        MainContent.classList.remove('Content');
      MainContent.classList.add('Remplace');
      MenuBarNav.classList.add('ClosedMenu');
    }

  });
}

if (BtnNavBars) {
  
BtnNavBars.addEventListener("click", (e)=>{
  e.preventDefault();
  if (SubMenuControl.classList.contains('FrmOperation')) {
      SubMenuFile.classList.remove('FrmOperation');
      SubMenuFile.classList.Add('FrmOperationActive');
      MenuVertical.style.display ="flex";

  }else if (SubMenuControl.classList.contains('FrmOperationActive')) {

       SubMenuFile.classList.remove('FrmOperationActive');
      SubMenuFile.classList.Add('FrmOperation');
      MenuVertical.style.display="none";


  }

});
}

BtnMenuFile.addEventListener("click",(e)=>{
  e.preventDefault();
  // alert("Hola Mundo");
  if (SubMenuControl.classList.contains('Active')||SubMenuBuy.classList.contains('Active')||SubMenuSales.classList.contains('Active')||SubMenuBank.classList.contains('Active')||SubMenuReport.classList.contains('Active')) {
    // SubMenuFile.classList.remove('Active');
    SubMenuControl.classList.remove('Active');
    SubMenuBuy.classList.remove('Active');
    SubMenuSales.classList.remove('Active');
    SubMenuBank.classList.remove('Active');
    SubMenuReport.classList.remove('Active');

  }
  SubMenuFile.classList.toggle('Active');
});

BtnMenuControl.addEventListener("click",(e)=>{
  e.preventDefault();
  // alert("Hola Mundo");
  if (SubMenuFile.classList.contains('Active')||SubMenuBuy.classList.contains('Active')||SubMenuSales.classList.contains('Active')||SubMenuBank.classList.contains('Active')||SubMenuReport.classList.contains('Active')) {
    SubMenuFile.classList.remove('Active');
    // SubMenuControl.classList.remove('Active');
    SubMenuBuy.classList.remove('Active');
    SubMenuSales.classList.remove('Active');
    SubMenuBank.classList.remove('Active');
    SubMenuReport.classList.remove('Active');
    BtnMenuBuy.classList.remove('Active');
  }
  SubMenuControl.classList.toggle('Active');

});
BtnMenuBuy.addEventListener("click",(e)=>{
  e.preventDefault();
  // alert("Hola Mundo");
  if (SubMenuFile.classList.contains('Active')||SubMenuControl.classList.contains('Active')||SubMenuSales.classList.contains('Active')||SubMenuBank.classList.contains('Active')||SubMenuReport.classList.contains('Active')) {
    SubMenuFile.classList.remove('Active');
    SubMenuControl.classList.remove('Active');
    SubMenuSales.classList.remove('Active');
    SubMenuBank.classList.remove('Active');
    SubMenuReport.classList.remove('Active');
    BtnMenuBuy.classList.remove('Active');

  }
SubMenuBuy.classList.toggle('Active');
});
BtnMenuSales.addEventListener("click",(e)=>{
  e.preventDefault();
  // alert("Hola Mundo");
  if (SubMenuFile.classList.contains('Active')||SubMenuControl.classList.contains('Active')||SubMenuBuy.classList.contains('Active')||SubMenuBank.classList.contains('Active')||SubMenuReport.classList.contains('Active')) {
    SubMenuFile.classList.remove('Active');
    SubMenuControl.classList.remove('Active');
    SubMenuBuy.classList.remove('Active');
    // SubMenuSales.classList.remove('Active');
    SubMenuBank.classList.remove('Active');
    SubMenuReport.classList.remove('Active');
  }
SubMenuSales.classList.toggle('Active');
});
BtnMenuBank.addEventListener("click",(e)=>{
  e.preventDefault();
  // alert("Hola Mundo");
if (SubMenuFile.classList.contains('Active')||SubMenuControl.classList.contains('Active')||SubMenuBuy.classList.contains('Active')||SubMenuSales.classList.contains('Active')||SubMenuReport.classList.contains('Active')) {
    SubMenuFile.classList.remove('Active');
    SubMenuControl.classList.remove('Active');
    SubMenuBuy.classList.remove('Active');
    SubMenuSales.classList.remove('Active');
    // SubMenuBank.classList.remove('Active');
    SubMenuReport.classList.remove('Active');

  }
SubMenuBank.classList.toggle('Active');
});

BtnMenuReport.addEventListener("click",(e)=>{
  e.preventDefault();
  // alert("Hola Mundo");
if (SubMenuFile.classList.contains('Active')||SubMenuControl.classList.contains('Active')||SubMenuBuy.classList.contains('Active')||SubMenuSales.classList.contains('Active')||SubMenuBank.classList.contains('Active')) {
    SubMenuFile.classList.remove('Active');
    SubMenuControl.classList.remove('Active');
    SubMenuBuy.classList.remove('Active');
    SubMenuSales.classList.remove('Active');
    SubMenuBank.classList.remove('Active');


  }
SubMenuReport.classList.toggle('Active');
});

/*Fin de menu principal.*/


/*Navegación Formulario Content I & II*/ 
function NextContent(){
  document.querySelector(".FormContentSecond").style.display ="block";
  document.querySelector(".FormContentFirst").style.display ="none";
  document.querySelector(".BtnAfter").style.display ="block";
  document.querySelector(".BtnNext").style.display ="none";
  document.querySelector(".SubBtnContent").style.display ="block";
}

function AfterContent(){
  document.querySelector(".FormContentFirst").style.display ="grid";
  document.querySelector(".FormContentSecond").style.display ="none";
  document.querySelector(".BtnAfter").style.display ="none";
  document.querySelector(".BtnNext").style.display ="block";
  document.querySelector(".SubBtnContent").style.display ="none";
}

const BtnPriceCost = document.querySelector("#BotonAcordion");
const ContentPriceCost =document.querySelector(".ContentPrice");

if (BtnPriceCost) {
BtnPriceCost.addEventListener("click", (b)=>{
  b.preventDefault();
  ContentPriceCost.classList.toggle('Active');

});
}

if (BtnAfter) {

BtnAfter.addEventListener("click", (b)=>{
  b.preventDefault();
  // AfterContent(); 

  document.querySelector(".FormContentFirst").style.display ="grid";
  document.querySelector(".FormContentSecond").style.display ="none";
  document.querySelector(".BtnAfter").style.display ="none";
  document.querySelector(".BtnNext").style.display ="block";
  SubBtnContent.style.display ="none";
});
}
if (BtnNext) {
BtnNext.addEventListener("click", (b)=>{
  b.preventDefault();
  // NextContent();
  document.querySelector(".FormContentSecond").style.display ="block";
  document.querySelector(".FormContentFirst").style.display ="none";
  document.querySelector(".BtnAfter").style.display ="block";
  document.querySelector(".BtnNext").style.display ="none";
  SubBtnContent.style.display ="block";
 
});

}

/*Navegación Formulario Content I & II*/ 
// ###################################################
/*Open & Closed of formulary*/ 
if (BtnAdd) {
  BtnAdd.addEventListener("click", (e)=>{
    e.preventDefault();
  const action = e.target.getAttribute('data');
  if (Status) {
    Status.setAttribute("checked", "true");

    if (Status.checked==true) {
      const StatusCkeck = true;
      Status.value = 1;
     }
  }
  if (DepartamentTypeInv) {
    DepartamentTypeInv.setAttribute("checked", "true");
    if (DepartamentTypeInv.checked) {
    ResultInv = DepartamentTypeInv.value;
    }
  }

  if (BtnSaveEdit) {
      BtnSaveEdit.classList.add('BtnNone');
  }
  
    FormOpen();
  });
  function FormOpen(){
    FormContent.classList.add('ActiveForm');
    TableList.style.display ="none";
    Pagination.style.display ="none";

  }
}
// Open Form

// Closed Form
if (BtnCancel) {
  FormClosed();
}

function FormClosed(){
  BtnCancel.addEventListener("click", (b)=>{
    b.preventDefault();
    FormContent.reset();
    FormContent.classList.remove('ActiveForm');
    TableList.style.display ="block";
    Pagination.style.display ="flex";  

    if (FormContentFirst) {
      FormContentFirst.style.display ="grid";      
    }
    if (FormContentSecond) {
      FormContentSecond.style.display ="none";
    }

    if (BtnAfter) {
      BtnAfter.style.display ="none";
    }
    if (BtnNext) {
      BtnNext.style.display ="block";
    }

    if (SubBtnContent) {/*Pendiente de revisar porque oculta los botones*/
        // SubBtnContent.style.display ="none";
        // SubBtnContent.style.display ="block";
    }
    BtnSaveEdit.classList.remove('BtnNone');
    BtnSaveNew.classList.remove('BtnNone');
    });


}
/*Open & Closed of formulary*/ 



