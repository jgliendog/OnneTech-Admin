const ProviderId = document.getElementById('provider_id');
const ProviderCode = document.getElementById('provider_code');
const ProviderDescription = document.getElementById('provider_description');
const ProviderTypeDoc = document.getElementById('provider_type_doc');
const ProviderDocument = document.getElementById('provider_document');
const ProviderType = document.getElementById('provider_type');
const ProviderAdress1 = document.getElementById('provider_adress1');
const ProviderContact = document.getElementById('provider_contact');
const ProviderPhone1 = document.getElementById('provider_phone1');
const ProviderPhone2 = document.getElementById('provider_phone2');
const ProviderMovil1 = document.getElementById('provider_movil1');
const ProviderMovil2 = document.getElementById('provider_movil2');
const ProviderEmail = document.getElementById('provider_email');
const ProviderEmailAlt = document.getElementById('provider_email_alt');
const ProviderCreateDate = document.getElementById('provider_date');
const ProviderCreditLimit = document.getElementById('provider_credit_limit');
const ProviderCreditDay = document.getElementById('provider_credit_day');
const ProviderPlusDay = document.getElementById('provider_plus_day');
const ProviderSite = document.getElementById('provider_site');
const ProviderSocial1 = document.getElementById('provider_social1');
const ProviderSocial2 = document.getElementById('provider_social2');
const ProviderSocial3 = document.getElementById('provider_social3');
const Status = document.getElementById('provider_status');
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

    const path = (`${Api}provider`)
    const action = "New"

    const formData = new FormData()
    formData.append('action',action)
    formData.append('ProviderCode',ProviderCode.value)
    formData.append('ProviderDescription',ProviderDescription.value)
    formData.append('ProviderTypeDoc',ProviderTypeDoc.value)
    formData.append('ProviderDocument',ProviderDocument.value)
    formData.append('ProviderType',ProviderType.value)
    formData.append('ProviderAdress1',ProviderAdress1.value)
    formData.append('ProviderContact',ProviderContact.value)
    formData.append('ProviderPhone1',ProviderPhone1.value)
    formData.append('ProviderPhone2',ProviderPhone2.value)
    formData.append('ProviderMovil1',ProviderMovil1.value)
    formData.append('ProviderMovil2',ProviderMovil2.value)
    formData.append('ProviderEmail',ProviderEmail.value)
    formData.append('ProviderEmailAlt',ProviderEmailAlt.value)
    formData.append('ProviderCreateDate',ProviderCreateDate.value)
    formData.append('ProviderCreditDay',ProviderCreditDay.value)
    formData.append('ProviderCreditLimit',ProviderCreditLimit.value)
    formData.append('ProviderPlusDay',ProviderPlusDay.value)
    formData.append('ProviderSite',ProviderSite.value)
    formData.append('ProviderSocial1',ProviderSocial1.value)
    formData.append('ProviderSocial2',ProviderSocial2.value)
    formData.append('ProviderSocial3',ProviderSocial3.value)
    formData.append('ProviderStatus',Status.value)

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
          // window.location.href=`${Url}provider`;
        }
      })
  } /*End-Create*/

const SaveEditRegster= ()=>{

    const path = (`${Api}provider`)
    const action = "SaveEdit"

    const formData = new FormData()
    formData.append('action',action)
    formData.append('ProviderId',ProviderId.value)
    formData.append('ProviderCode',ProviderCode.value)
    formData.append('ProviderDescription',ProviderDescription.value)
    formData.append('ProviderTypeDoc',ProviderTypeDoc.value)
    formData.append('ProviderDocument',ProviderDocument.value)
    formData.append('ProviderType',ProviderType.value)
    formData.append('ProviderAdress1',ProviderAdress1.value)
    formData.append('ProviderContact',ProviderContact.value)
    formData.append('ProviderPhone1',ProviderPhone1.value)
    formData.append('ProviderPhone2',ProviderPhone2.value)
    formData.append('ProviderMovil1',ProviderMovil1.value)
    formData.append('ProviderMovil2',ProviderMovil2.value)
    formData.append('ProviderEmail',ProviderEmail.value)
    formData.append('ProviderEmailAlt',ProviderEmailAlt.value)
    formData.append('ProviderCreateDate',ProviderCreateDate.value)
    formData.append('ProviderCreditDay',ProviderCreditDay.value)
    formData.append('ProviderCreditLimit',ProviderCreditLimit.value)
    formData.append('ProviderPlusDay',ProviderPlusDay.value)
    formData.append('ProviderSite',ProviderSite.value)
    formData.append('ProviderSocial1',ProviderSocial1.value)
    formData.append('ProviderSocial2',ProviderSocial2.value)
    formData.append('ProviderSocial3',ProviderSocial3.value)
    formData.append('ProviderStatus',Status.value)

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
          window.location.href=`${Url}provider`;
        }
      })

  }




const EditRegister = (e)=>{

  const action = e.target.getAttribute('data');

  const id = e.target.getAttribute('id');
  console.log(`${action} y ${id}`);

  const path = (`${Api}provider`)
  // const action = "Edit"

  const formData = new FormData()
    formData.append('action',action)
    formData.append('ProviderId',id)
    
     fetch(path,{
        method:'POST',
        body: formData,
        
      })
     .then(res => res.json())
     .then(data => {
        // console.log(data)
        let obj = data[0]
        console.log(obj)
        ProviderId.value= obj[0];
        ProviderCode.value= obj[1];
        ProviderDescription. value = obj[2]
        ProviderType.selectedIndex = parseInt(obj[3]);
        ProviderTypeDoc.selectedIndex = parseInt(obj[4]);
        ProviderDocument.value = obj[5]
        ProviderAdress1.value = obj[6]
        // ProviderAdress2.value = obj[7]
        ProviderContact.value = obj[11]
        ProviderPhone1.value = obj[7]
        ProviderPhone2.value = obj[8]
        ProviderMovil1.value = obj[9]
        ProviderMovil2.value = obj[10]
        ProviderEmail.value = obj[12]
        ProviderEmailAlt.value = obj[13]
        ProviderCreateDate.value = obj[14]
        ProviderCreditLimit.value = obj[20]
        ProviderCreditDay.value = obj[19]
        ProviderPlusDay.value = obj[21]
        // ProviderAdress3.value = obj[8]
        ProviderSite.value = obj[15]
        ProviderSocial1.value = obj[16]
        ProviderSocial2.value = obj[17]
        ProviderSocial3.value = obj[18]
        // ProviderExcempt.value = obj[25]
         // if (obj[25]==1) {
         //      CustomerExcempt.setAttribute("checked", "true");
         //      CustomerExcempt.value =1;
         //      CustomerExcempt.addEventListener('change', ()=>{
         //        CustomerExcempt.value =0;          
         //      });

         //  } else {
         //    CustomerExcempt.value =0;
         //    CustomerExcempt.addEventListener('change', ()=>{
         //      CustomerExcempt.setAttribute("checked", "true");
         //    CustomerExcempt.value =1;
         //    });
         //  }
        if (obj[23]==1) {
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

  const path = (`${Api}provider`)

  const formData = new FormData()
    formData.append('action',action)
    formData.append('ProviderId',id)


    
     fetch(path,{
        method:'POST',
        body: formData,        
      })
     .then(res => res.text())
     .then(data => {
        console.log(data)
        if (data==200) {
          window.location.href=`${Url}provider`;
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
