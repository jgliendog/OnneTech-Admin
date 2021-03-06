/**************************************************JSOn*******************/
const StorageCode = document.getElementById('storage_code');
const StorageDescription = document.getElementById('storage_description');
const StorageLiable = document.getElementById('storage_liable');
const StorageLocation = document.getElementById('storage_location');
const StorageDate = document.getElementById('storage_date');
const StorageDetail = document.getElementById('storage_detail');
const Status = document.getElementById('storage_status');

const TableItems =document.getElementById('table_items');

FormContent.addEventListener('submit', (e)=>{
    e.preventDefault();
    Validation()
  
  });

const ValidatorForm={
  StorageCode: false,
  StorageDescription: false,
  StorageLiable: false
}

StorageCode.addEventListener('change',(e) =>{
  // e.preventDefault();
  if (e.target.value.trim().length >0) ValidatorForm.StorageCode=true;
  // console.log(e.target)
});
StorageDescription.addEventListener('change',(e) =>{
  // e.preventDefault();
  if (e.target.value.trim().length >0) ValidatorForm.StorageDescription=true;
});
StorageLiable.addEventListener('change',(e) =>{
  // e.preventDefault();
  if (e.target.value.trim().length >0) ValidatorForm.StorageLiable=true;
});
StorageLocation.addEventListener('change',(e) =>{
  // e.preventDefault();
  // if (e.target.value.trim().length >0) ValidatorForm.StorageLocation=true;
});
StorageDate.addEventListener('change',(e) =>{
  // e.preventDefault();
  // if (e.target.value.trim().length >0) ValidatorForm.StorageDate=true;
});
StorageDetail.addEventListener('change',(e) =>{
  // e.preventDefault();
  // if (e.target.value.trim().length >0) ValidatorForm.StorageDetail=true;
});
Status.addEventListener('change',(e) =>{
  // e.preventDefault();
   const StatusStorage  = e.target.checked
   if (StatusStorage == true) {
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
  if (Valid==-1) {
    alert("Ok registro exitoso");
    NewRegister();  
  } else{
    alert("Registro invalido");
  }
}

const NewRegister = ()=>{ 

 
  const path = (`${Api}storage`)
  const action = "New"

  const formData = new FormData()
  formData.append('action',action)
  formData.append('StorageCode',StorageCode.value)
  formData.append('StorageDescription',StorageDescription.value)
  formData.append('StorageLiable',StorageLiable.value)
  formData.append('StorageLocation',StorageLocation.value)
  formData.append('StorageDate',StorageDate.value)
  formData.append('StorageDetail',StorageDetail.value)
  formData.append('StorageStatus',Status.value)
  
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
      window.location.href=`${Url}storage`;
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
  StorageCode.setAttribute("disabled", "true");
   let xhr
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    xhr.open('GET', `${Api}storage?action=${action}&id=${id}`)

    xhr.addEventListener('load', (data) => {
        const obj = JSON.parse(data.target.response)[0];

        if (obj[7]==1) {
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
      
        console.log(obj)
        StorageCode.value= obj[1];
        StorageDescription.value = obj[2];
        StorageLiable.value = obj[3];
        StorageDetail.value = obj[6];
        StorageLocation.value = obj[4];
        StorageDate.value = obj[5];
     

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

    xhr.open('GET', `${Api}storage?action=${action}&id=${id}`)

    xhr.addEventListener('load', (data) => {
        const obj = data.target.response;
        console.log(obj)
    })

    xhr.send()
    window.location.href=`${Url}storage`;
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
  const path = (`${Api}storage`)
  const action = "SaveEdit"
  console.log(`estoy update ${id}`)

  const formData = new FormData()
  formData.append('action',action)
  formData.append('StorageId',id)
  formData.append('StorageDescription',StorageDescription.value)
  formData.append('StorageLiable',StorageLiable.value)
  formData.append('StorageDetail',StorageDetail.value)
  formData.append('StorageLocation',StorageLocation.value)
  formData.append('StorageDate',StorageDate.value)
  formData.append('StorageStatus',Status.value)
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
     window.location.href=`${Url}storage`;

    }
  })


} /*End-Save-Edit*/


