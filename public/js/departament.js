const DepartamentCode = document.getElementById('departament_code');
const DepartamentDescription = document.getElementById('departament_description');
const DepartamentDetail = document.getElementById('departament_detail');
const TypeInvItems = document.getElementById('type_inv_items');

const DepartamentTypeService = document.getElementById('departament_type_ser');
const DepartamentTypeCombo = document.getElementById('departament_type_com');
const DepartamentTypeProduct = document.getElementById('departament_type_product');
const DepartamentTypeActFijo = document.getElementById('departament_type_act_fijo');
const DepartementTypeCost = document.getElementById('departament_type_cost');
const DepartamentDate = document.getElementById('departament_date');

 

const Status = document.getElementById('departament_status');

const TableItems =document.getElementById('table_items');

FormContent.addEventListener('submit', (e)=>{
    e.preventDefault();
    Validation()
  
  });

const ValidatorForm={
	DepartamentCode: false,
	DepartamentDescription:false,
	DepartamentDetail:false
}

DepartamentCode.addEventListener('change',(e) =>{
  // e.preventDefault();
  if (e.target.value.trim().length >0) ValidatorForm.DepartamentCode=true;
  // console.log(e.target)
  console.log(DepartamentCode.value)
});
DepartamentDescription.addEventListener('change',(e) =>{
  // e.preventDefault();
  if (e.target.value.trim().length >0) ValidatorForm.DepartamentDescription=true;
  console.log(DepartamentDescription.value)
});
DepartamentDetail.addEventListener('change',(e) =>{
  // e.preventDefault();
  if (e.target.value.trim().length >0) ValidatorForm.DepartamentDetail=true;
  console.log(DepartamentDetail.value)
});
     
TypeInvItems.addEventListener('change',(e) =>{
  // e.preventDefault();
  
  if (e.target.value.trim().length >0) ValidatorForm.TypeInvItems=true;
      console.log(ValidatorForm.TypeInvItems=true)
      
      if (DepartamentTypeInv.checked==true) {
     // alert("Hola Mundo") 
        ResultInv = parseInt(DepartamentTypeInv.value);
        console.log(ResultInv)
      } else if (DepartamentTypeService.checked==true) {
        ResultInv = parseInt(DepartamentTypeService.value);
        console.log(ResultInv)
      } else if (DepartamentTypeCombo.checked==true) {
        ResultInv = parseInt(DepartamentTypeCombo.value);
        console.log(ResultInv)
      } else if (DepartamentTypeProduct.checked==true) {
        ResultInv = parseInt(DepartamentTypeProduct.value);
        console.log(ResultInv)
      } else if (DepartamentTypeActFijo.checked==true) {
        ResultInv = parseInt(DepartamentTypeActFijo.value);
        console.log(ResultInv)
      }   
});

DepartementTypeCost.addEventListener('change',(e) =>{
  console.log(DepartementTypeCost.value)
});
DepartamentDate.addEventListener('change',(e) =>{
  // e.preventDefault();
  if (e.target.value.trim().length >0) ValidatorForm.DepartamentDate=true;
  console.log(DepartamentDate.value)
});
Status.addEventListener('change',(e) =>{
  // e.preventDefault();
   const StatusDepartament  = e.target.checked
   if (StatusDepartament == true) {
    Status.value =1;
   }else{
    Status.value =0;
   }
  console.log(`esto es validación storage ${ValidatorForm.Status} ${Status.value}`)

});

const Validation = ()=>{
  const FormValue = Object.values(ValidatorForm);
  const Valid = FormValue.findIndex(value => value==false)
  console.log(`proceso de validación${Valid}`);
  console.log(ValidatorForm);
  if (Valid==-1) {
    // alert("Ok registro exitoso");
    NewRegister();  
  } else{
    alert("Registro invalido");
  }
}

const NewRegister = ()=>{ 

 
  const path = (`${Api}departament`)
  const action = "New"

  // console.log(TypeInvItems);

  const formData = new FormData()
  formData.append('action',action)
  formData.append('DepartamentCode',DepartamentCode.value)
  formData.append('DepartamentDescription',DepartamentDescription.value)
  formData.append('DepartamentDetail',DepartamentDetail.value)
  formData.append('DepartamentTypeInv',ResultInv)
  formData.append('DepartamentDate',DepartamentDate.value)
  formData.append('DepartementTypeCost',DepartementTypeCost.value)
  formData.append('DepartamentStatus',Status.value)
  
  fetch(path,{
    method:'POST',
    body: formData
  })

  .then(response => (response.ok) ? Promise.resolve(response): Promise.reject(new Error
    ('Failed to load')))
  .then(response => response.text())
  .then(data =>{
    console.log(data);
    const Result = data;
    if (Result==="ok") {
      swal("El registro fue exitoso", {
            icon: "success",
            buttons: false,
          });
      window.location.href=`${Url}departament`;
    }else{
      swal("Good job!", "You clicked the button!", "error");
      console.log(data);
    }
  })


} /*End-Create*/

if (TableItems) {


TableItems.addEventListener('click',(e)=>{
  e.preventDefault();
  const action = e.target.getAttribute('data');

  const id = e.target.getAttribute('id');
  console.log(`${action} y ${id}`);

  if (action ==='Edit') {/*Editar*/
  console.log(id);
  DepartamentCode.setAttribute("disabled", "true");
  DepartementTypeCost.setAttribute("disabled", "true");
   let xhr
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    xhr.open('GET', `${Api}departament?action=${action}&id=${id}`)

    xhr.addEventListener('load', (data) => {
        const obj = JSON.parse(data.target.response)[0];

        if (obj[6]==1) {
              Status.setAttribute("checked", "true");
              Status.value =1;
              Status.addEventListener('change', ()=>{
                Status.value =0;          
              });

          } else {
            // Status.setAttribute("checked", "false");
            Status.value =0;
            Status.addEventListener('change', ()=>{
              Status.setAttribute("checked", "true");
            Status.value =1;
            });
          }

          switch(obj[3]){
          	case "1": 
          	DepartamentTypeInv.setAttribute("checked", "true");
          	DepartamentTypeInv.setAttribute("disabled", "true");
          	break;
          	case "2": 
          	DepartamentTypeService.setAttribute("checked", "true");
          	DepartamentTypeService.setAttribute("disabled", "true");          	
          	break;
          	case "3": 
          	DepartamentTypeCombo.setAttribute("checked", "true");
          	DepartamentTypeCombo.setAttribute("disabled", "true");
          	break;
          	case "4": 
          	DepartamentTypeProduct.setAttribute("checked", "true");
          	DepartamentTypeProduct.setAttribute("disabled", "true");
          	break;
          	case "5": DepartamentTypeActFijo.setAttribute("checked", "true");
          	case "5": DepartamentTypeActFijo.setAttribute("disabled", "true");
          	break;
          }
         
      
        console.table(obj)
        console.log(parseInt(obj[4]))
        DepartamentCode.value= obj[0];
        DepartamentDescription.value = obj[1];       
        DepartamentDetail.value = obj[2];       
        DepartamentDate.value = obj[5];
        DepartementTypeCost.selectedIndex = parseInt(obj[4])-1;

     

    FormOpen();
    BtnSaveNew.classList.add('BtnNone');
   
    });

    xhr.send()
    if (BtnSaveEdit) {

    BtnSaveEdit.addEventListener('click',(e)=>{
      e.preventDefault();
      SaveEdit(id);

    });
    }
   
  }/*End Edit*/
  else if(action ==='Delete'){
    console.log(action)

     console.log(id);

  swal({
  title: "Deseas Eliminar el registro?",
  text: "Una vez eliminado no podra ser recuperado",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("El registro fué eliminado!", {
      icon: "success",   
      buttons:false,   
    });
       let xhr
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    xhr.open('GET', `${Api}departament?action=${action}&id=${id}`)

    xhr.addEventListener('load', (data) => {
        const obj = data.target.response;
        console.log(obj)
    })

    xhr.send()
    window.location.href=`${Url}departament`;
  } else {
    swal("Operación Cancelada!",{
      icon: "error",   
      buttons:false,
      timer:1700,
    });
  }
});

  }/*End Delete*/
 
});
}

const SaveEdit = (id)=>{
  const path = (`${Api}departament`)
  const action = "SaveEdit"
  console.log(`estoy update ${id}`)





  const formData = new FormData()
  formData.append('action',action)
  formData.append('DepartamentId',id)
  formData.append('DepartamentDescription',DepartamentDescription.value)
  formData.append('DepartamentDetail',DepartamentDetail.value)
  formData.append('DepartamentDate',DepartamentDate.value)
  formData.append('DepartamentStatus',Status.value)
  fetch(path,{
    method:'POST',
    body: formData
  })

  .then(response => (response.ok) ? Promise.resolve(response): Promise.reject(new Error
    ('Failed to load')))
  .then(response => response.text())
  .then(data =>{
    console.log(data);
    if(data){
      swal("Operación Cancelada!",{
      icon: "success",   
      buttons:false,
      timer:1700,
    });
     window.location.href=`${Url}departament`;

    }
  })


} /*End-Save-Edit*/