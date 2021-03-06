const SellerId = document.getElementById('seller_id');
const SellerCode = document.getElementById('seller_code');
const SellerDescription = document.getElementById('seller_description');
const SellerTypeDoc = document.getElementById('seller_type_doc');
const SellerDocument = document.getElementById('seller_document');
const SellerType = document.getElementById('seller_type');
const SellerAdress1 = document.getElementById('seller_adress1');
const SellerLocation = document.getElementById('seller_location');
const SellerZone = document.getElementById('seller_zone');
const SellerPhone1 = document.getElementById('seller_phone1');
const SellerPhone2 = document.getElementById('seller_phone2');
const SellerMovil1 = document.getElementById('seller_movil1');
const SellerMovil2 = document.getElementById('seller_movil2');
const SellerEmail = document.getElementById('seller_email');
const SellerEmailAlt = document.getElementById('seller_email_alt');
const SellerStardate = document.getElementById('seller_date');
const Status = document.getElementById('seller_status');
const TableItems =document.getElementById('table_items');
const SellerComisionDepStatus = document.getElementById('seller_comision_dep_status');
const SellerComisionCobroStatus = document.getElementById('seller_comision_cobro_status');
const SellerComisionVolStatus = document.getElementById('seller_comision_vol_status');
const SellerComisionSaleStatus = document.getElementById('seller_comision_sale_status');
const SellerComisionUtilStatus = document.getElementById('seller_comision_util_status');
const SellerComisionDep = document.getElementById('seller_comision_dep');
const SellerComisionCobro = document.getElementById('seller_comision_Cobro')
const SellerComisionVol = document.getElementById('seller_comision_vol');
const SellerCommisionSale = document.getElementById('seller_commision_sale');
const SellerCommisionUtil = document.getElementById('seller_commision_util');


 

FormContent.addEventListener('submit', (e)=>{
    e.preventDefault();
    Validation()
  
  });

const ValidatorForm={
  DepartamentCode: false,
  DepartamentDescription:false,
  DepartamentDetail:false
}

if (BtnSaveNew) {
    BtnSaveNew.addEventListener('click',(e)=>{
      e.preventDefault();
     NewRegister();
    });
}

 if (BtnSaveEdit) {
      BtnSaveEdit.addEventListener('click', (e)=>{
        e.preventDefault()
        SaveEditRegster()
        
      })
}


const NewRegister = ()=>{

    const path = (`${Api}seller`)
    const action = "New"

    console.log(action);
    const formData = new FormData()
    formData.append('action',action)
    formData.append('SellerCode',SellerCode.value)
    formData.append('SellerDescription',SellerDescription.value)
    formData.append('SellerTypeDoc',SellerTypeDoc.value)
    formData.append('SellerDocument',SellerDocument.value)
    formData.append('SellerAdress1',SellerAdress1.value)
    formData.append('SellerLocation',SellerLocation.value)
    formData.append('SellerZone',SellerZone.value)
    formData.append('SellerPhone1',SellerPhone1.value)
    formData.append('SellerPhone2',SellerPhone2.value)
    formData.append('SellerMovil1',SellerMovil1.value)
    formData.append('SellerMovil2',SellerMovil2.value)
    formData.append('SellerEmail',SellerEmail.value)
    formData.append('SellerEmailAlt',SellerEmailAlt.value)
    formData.append('SellerStardate',SellerStardate.value)
    formData.append('SellerStatus',Status.value)
    formData.append('SellerComisionUtilStatus',SellerComisionUtilStatus.value)
    formData.append('SellerComisionDepStatus',SellerComisionDepStatus.value)
    formData.append('SellerComisionCobroStatus',SellerComisionCobroStatus.value)
    formData.append('SellerComisionVolStatus',SellerComisionVolStatus.value)
    formData.append('SellerComisionSaleStatus',SellerComisionSaleStatus.value)
    formData.append('SellerComisionDep',SellerComisionDep.value)
    formData.append('SellerComisionCobro',SellerComisionCobro.value)
    formData.append('SellerComisionVol',SellerComisionVol.value)
    formData.append('SellerCommisionSale',SellerCommisionSale.value)
    formData.append('SellerCommisionUtil',SellerCommisionUtil.value)
    


     fetch(path,{
        method:'POST',
        body: formData
      })

      .then(response => (response.ok) ? Promise.resolve(response): Promise.reject(new Error
      ('Failed to load')))
      .then(response => response.text())
      .then(data =>{
      console.log(data);
      if (data==200) {
          window.location.href=`${Url}seller`;
        }
      })
  } /*End-Create*/

const SaveEditRegster= ()=>{

    const path = (`${Api}seller`)
    const action = "SaveEdit"

    const formData = new FormData()
    formData.append('action',action)
    formData.append('SellerId',SellerId.value)
    formData.append('SellerDescription',SellerDescription.value)
    formData.append('SellerTypeDoc',SellerTypeDoc.value)
    formData.append('SellerDocument',SellerDocument.value)
    formData.append('SellerAdress1',SellerAdress1.value)
    formData.append('SellerLocation',SellerLocation.value)
    formData.append('SellerZone',SellerZone.value)
    formData.append('SellerPhone1',SellerPhone1.value)
    formData.append('SellerPhone2',SellerPhone2.value)
    formData.append('SellerMovil1',SellerMovil1.value)
    formData.append('SellerMovil2',SellerMovil2.value)
    formData.append('SellerEmail',SellerEmail.value)
    formData.append('SellerEmailAlt',SellerEmailAlt.value)
    formData.append('SellerStardate',SellerStardate.value)
    formData.append('SellerStatus',Status.value)
    formData.append('SellerComisionUtilStatus',SellerComisionUtilStatus.value)
    formData.append('SellerComisionDepStatus',SellerComisionDepStatus.value)
    formData.append('SellerComisionCobroStatus',SellerComisionCobroStatus.value)
    formData.append('SellerComisionVolStatus',SellerComisionVolStatus.value)
    formData.append('SellerComisionSaleStatus',SellerComisionSaleStatus.value)
    formData.append('SellerComisionDep',SellerComisionDep.value)
    formData.append('SellerComisionCobro',SellerComisionCobro.value)
    formData.append('SellerComisionVol',SellerComisionVol.value)
    formData.append('SellerCommisionSale',SellerCommisionSale.value)
    formData.append('SellerCommisionUtil',SellerCommisionUtil.value)
   
    formData.append('SellerStatus',Status.value)

     fetch(path,{
        method:'POST',
        body: formData
      })

      .then(response => (response.ok) ? Promise.resolve(response): Promise.reject(new Error
      ('Failed to load')))
      .then(response => response.text())
      .then(data =>{
      console.log(data);
      if (data==200) {
          window.location.href=`${Url}seller`;
        }
      })

  }




const EditRegister = (e)=>{

  const action = e.target.getAttribute('data');

  const id = e.target.getAttribute('id');
  console.log(`${action} y ${id}`);

  const path = (`${Api}seller`)
  // const action = "Edit"

  const formData = new FormData()
    formData.append('action',action)
    formData.append('SellerId',id)
    
     fetch(path,{
        method:'POST',
        body: formData,
        
      })
     .then(res => res.json())
     .then(data => {
        // console.log(data)
        let obj = data[0]
        console.log(obj)
        SellerId.value= obj[0];
        SellerCode.value= obj[1];
        SellerDescription. value = obj[2]
        SellerAdress1.value = obj[3]
        SellerTypeDoc.selectedIndex = parseInt(obj[4]);
        SellerDocument.value = obj[5]
        SellerLocation.selectedIndex = parseInt(obj[8]);
        SellerZone.selectedIndex = parseInt(obj[9]);
        SellerStardate.value = obj[27]
        SellerPhone1.value = obj[10]
        SellerPhone2.value = obj[11]
        SellerMovil1.value = obj[12]
        SellerMovil2.value = obj[13]
        SellerEmail.value = obj[14]
        SellerEmailAlt.value = obj[15]
        SellerComisionDep.value = obj[16]
        SellerComisionCobro.value = obj[17]
        SellerComisionVol.value = obj[18]
        SellerCommisionSale.value = obj[19]
        SellerCommisionUtil.value = obj[20]

        

          if (obj[21]==1) {
              SellerComisionDepStatus.setAttribute("checked", "true");
              SellerComisionDepStatus.value =1;
              SellerComisionDepStatus.addEventListener('change', ()=>{
                SellerComisionDepStatus.value =0;          
              });

          } else {
            SellerComisionDepStatus.value =0;
            SellerComisionDepStatus.addEventListener('change', ()=>{
              SellerComisionDepStatus.setAttribute("checked", "true");
            SellerComisionDepStatus.value =1;
            });
          }
          if (obj[22]==1) {
              SellerComisionCobroStatus.setAttribute("checked", "true");
              SellerComisionCobroStatus.value =1;
              SellerComisionCobroStatus.addEventListener('change', ()=>{
                SellerComisionCobroStatus.value =0;          
              });

          } else {
            SellerComisionCobroStatus.value =0;
            SellerComisionCobroStatus.addEventListener('change', ()=>{
              SellerComisionCobroStatus.setAttribute("checked", "true");
            SellerComisionCobroStatus.value =1;
            });
          }
          if (obj[23]==1) {
              SellerComisionVolStatus.setAttribute("checked", "true");
              SellerComisionVolStatus.value =1;
              SellerComisionVolStatus.addEventListener('change', ()=>{
                SellerComisionVolStatus.value =0;          
              });

          } else {
            SellerComisionVolStatus.value =0;
            SellerComisionVolStatus.addEventListener('change', ()=>{
              SellerComisionVolStatus.setAttribute("checked", "true");
            SellerComisionVolStatus.value =1;
            });
          }
          if (obj[24]==1) {
              SellerComisionSaleStatus.setAttribute("checked", "true");
              SellerComisionSaleStatus.value =1;
              SellerComisionSaleStatus.addEventListener('change', ()=>{
                SellerComisionSaleStatus.value =0;          
              });

          } else {
            SellerComisionSaleStatus.value =0;
            SellerComisionSaleStatus.addEventListener('change', ()=>{
              SellerComisionSaleStatus.setAttribute("checked", "true");
            SellerComisionSaleStatus.value =1;
            });
          }
           if (obj[25]==1) {
              SellerComisionUtilStatus.setAttribute("checked", "true");
              SellerComisionUtilStatus.value =1;
              SellerComisionUtilStatus.addEventListener('change', ()=>{
                SellerComisionUtilStatus.value =0;          
              });

          } else {
            SellerComisionUtilStatus.value =0;
            SellerComisionUtilStatus.addEventListener('change', ()=>{
              SellerComisionUtilStatus.setAttribute("checked", "true");
            SellerComisionUtilStatus.value =1;
            });
          }

           if (obj[30]==1) {
              Status.setAttribute("checked", "true");
              Status.value =1;
              Status.addEventListener('change', ()=>{
                Status.value =0;          
              });

          } else {
            Status.value =0;
            Status.addEventListener('change', ()=>{
              Status.setAttribute("checked", "true");
            Status.value =1;
            });
          }
 
        
        if (obj[30]==1) {
              Status.setAttribute("checked", "true");
              Status.value =1;
              Status.addEventListener('change', ()=>{
                Status.value =0;          
              });

          } else {
            Status.value =0;
            Status.addEventListener('change', ()=>{
              Status.setAttribute("checked", "true");
            Status.value =1;
            });
          }
     })
     .catch(error =>'ERROR')
}

const DeleteRegister = (e)=>{

  const action = e.target.getAttribute('data');

  const id = e.target.getAttribute('id');
  console.log(`${action} y ${id}`);

  const path = (`${Api}seller`)

  const formData = new FormData()
    formData.append('action',action)
    formData.append('SellerId',id)


    
     fetch(path,{
        method:'POST',
        body: formData,        
      })
     .then(res => res.text())
     .then(data => {
        console.log(data)
        if (data==200) {
          window.location.href=`${Url}seller`;
        }
     })
    
}



if (TableItems) {
  TableItems.addEventListener('click',(e)=>{
    e.preventDefault()
    const action = e.target.getAttribute('data');

    if (action=="Edit") {
      EditRegister(e,action)
      FormOpen();
    }else if(action=="Delete"){
      DeleteRegister(e,action)
    }

  })
}
