const CustomerId = document.getElementById('customer_id');
const CustomerCode = document.getElementById('customer_code');
const CustomerDescription = document.getElementById('customer_description');
const CustomerTypeDoc = document.getElementById('customer_type_doc');
const CustomerDocument = document.getElementById('customer_document');
const CustomerType = document.getElementById('customer_type');
const CustomerAdress1 = document.getElementById('customer_adress1');
const CustomerContact = document.getElementById('customer_contact');
const CustomerAdress2 = document.getElementById('customer_adress2');
const CustomerPhone1 = document.getElementById('customer_phone1');
const CustomerPhone2 = document.getElementById('customer_phone2');
const CustomerMovil1 = document.getElementById('customer_movil1');
const CustomerMovil2 = document.getElementById('customer_movil2');
const CustomerEmail = document.getElementById('customer_email');
const CustomerEmailAlt = document.getElementById('customer_email_alt');
const CustomerCreateDate = document.getElementById('customer_create_date');
const CustomerPriceType = document.getElementById('customer_price_type');
const CustomerCreditLimit = document.getElementById('customer_credit_limit');
const CustomerCreditDay = document.getElementById('customer_credit_day');
const CustomerPlusDay = document.getElementById('customer_plus_day');
const CustomerAdress3 = document.getElementById('customer_adress3');
const CustomerSite = document.getElementById('customer_site');
const CustomerSocial1 = document.getElementById('customer_social1');
const CustomerSocial2 = document.getElementById('customer_social2');
const CustomerSocial3 = document.getElementById('customer_social3');
const CustomerExcempt = document.getElementById('customer_excempt');
const Status = document.getElementById('customer_status');
const TableItems =document.getElementById('table_items');



if (BtnSaveNew) {
    BtnSaveNew.addEventListener('click',(e)=>{
      e.preventDefault();
     NewRegister();
});
}
if (BtnSaveEdit) {
  BtnSaveEdit.addEventListener('click',(e)=>{
    e.preventDefault();
    // alert('hola mundo')
    SaveEdit();

  })
}

const NewRegister = ()=>{

    const path = (`${Api}customer`)
    const action = "New"

    const formData = new FormData()
    formData.append('action',action)
    formData.append('CustomerCode',CustomerCode.value)
    formData.append('CustomerDescription',CustomerDescription.value)
    formData.append('CustomerTypeDoc',CustomerTypeDoc.value)
    formData.append('CustomerDocument',CustomerDocument.value)
    formData.append('CustomerType',CustomerType.value)
    formData.append('CustomerAdress1',CustomerAdress1.value)
    formData.append('CustomerAdress2',CustomerAdress2.value)
    formData.append('CustomerAdress3',CustomerAdress3.value)
    formData.append('CustomerPhone1',CustomerPhone1.value)
    formData.append('CustomerPhone2',CustomerPhone2.value)
    formData.append('CustomerMovil1',CustomerMovil1.value)
    formData.append('CustomerMovil2',CustomerMovil2.value)
    formData.append('CustomerContact',CustomerContact.value)
    formData.append('CustomerEmail',CustomerEmail.value)
    formData.append('CustomerEmailAlt',CustomerEmailAlt.value)
    formData.append('CustomerCreateDate',CustomerCreateDate.value)
    formData.append('CustomerSite',CustomerSite.value)
    formData.append('CustomerSocial1',CustomerSocial1.value)
    formData.append('CustomerSocial2',CustomerSocial2.value)
    formData.append('CustomerSocial3',CustomerSocial3.value)
    formData.append('CustomerCreditDay',CustomerCreditDay.value)
    formData.append('CustomerCreditLimit',CustomerCreditLimit.value)
    formData.append('CustomerPlusDay',CustomerPlusDay.value)
    formData.append('CustomerPriceType',CustomerPriceType.value)
    formData.append('CustomerExempt',CustomerExcempt.value)
    formData.append('CustomerStatus',Status.value)

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
      if (Result==="200") {
        swal("El registro fue exitoso", {
          icon: "success",
          buttons: false,
        });
        window.location.href=`${Url}customer`;
      }else{
      swal("Good job!", "You clicked the button!", "error");
      console.log(data);
      }
      })
  } /*End-Create*/


const SaveEdit =()=>{
  const path = (`${Api}customer`)
    const action = "SaveEdit"
    // const id = e.target.getAttribute('id');

    const formData = new FormData()
    formData.append('action',action)
    formData.append('CustomerId',CustomerId.value)
    formData.append('CustomerCode',CustomerCode.value)
    formData.append('CustomerDescription',CustomerDescription.value)
    formData.append('CustomerTypeDoc',CustomerTypeDoc.value)
    formData.append('CustomerDocument',CustomerDocument.value)
    formData.append('CustomerType',CustomerType.value)
    formData.append('CustomerAdress1',CustomerAdress1.value)
    formData.append('CustomerAdress2',CustomerAdress2.value)
    formData.append('CustomerAdress3',CustomerAdress3.value)
    formData.append('CustomerPhone1',CustomerPhone1.value)
    formData.append('CustomerPhone2',CustomerPhone2.value)
    formData.append('CustomerMovil1',CustomerMovil1.value)
    formData.append('CustomerMovil2',CustomerMovil2.value)
    formData.append('CustomerContact',CustomerContact.value)
    formData.append('CustomerEmail',CustomerEmail.value)
    formData.append('CustomerEmailAlt',CustomerEmailAlt.value)
    formData.append('CustomerCreateDate',CustomerCreateDate.value)
    formData.append('CustomerSite',CustomerSite.value)
    formData.append('CustomerSocial1',CustomerSocial1.value)
    formData.append('CustomerSocial2',CustomerSocial2.value)
    formData.append('CustomerSocial3',CustomerSocial3.value)
    formData.append('CustomerCreditDay',CustomerCreditDay.value)
    formData.append('CustomerCreditLimit',CustomerCreditLimit.value)
    formData.append('CustomerPlusDay',CustomerPlusDay.value)
    formData.append('CustomerPriceType',CustomerPriceType.value)
    formData.append('CustomerExempt',CustomerExcempt.value)
    formData.append('CustomerStatus',Status.value)

     fetch(path,{
        method:'POST',
        body: formData
      })
     .then(res => res.text())
     .then(data => {
        console.log(data)
        if (data==200) {
          // window.location.href=`${Url}customer`;
        }

     })
     .catch(error =>'ERROR')

}

const EditRegister = (e)=>{

  const action = e.target.getAttribute('data');

  const id = e.target.getAttribute('id');
  console.log(`${action} y ${id}`);

  const path = (`${Api}customer`)
  // const action = "Edit"

  const formData = new FormData()
    formData.append('action',action)
    formData.append('CustomerId',id)
    
     fetch(path,{
        method:'POST',
        body: formData,
        
      })

     .then(res => res.json())
     .then(data => {
        console.log(data)
        let obj = data[0]
        console.log(obj)
        CustomerId.value=obj[0];
        CustomerCode.value= obj[1];
        CustomerDescription. value = obj[2]
        CustomerType.selectedIndex = parseInt(obj[3]);
        CustomerTypeDoc.selectedIndex = parseInt(obj[4]);
        CustomerDocument.value = obj[5]
        CustomerAdress1.value = obj[6]
        CustomerAdress2.value = obj[7]
        CustomerContact.value = obj[13]
        CustomerPhone1.value = obj[9]
        CustomerPhone2.value = obj[10]
        CustomerMovil1.value = obj[11]
        CustomerMovil2.value = obj[12]
        CustomerEmail.value = obj[14]
        CustomerEmailAlt.value = obj[15]
        CustomerCreateDate.value = obj[16]
        CustomerPriceType.value = obj[24]
        CustomerCreditLimit.value = obj[22]
        CustomerCreditDay.value = obj[21]
        CustomerPlusDay.value = obj[23]
        CustomerAdress3.value = obj[8]
        CustomerSite.value = obj[17]
        CustomerSocial1.value = obj[18]
        CustomerSocial2.value = obj[19]
        CustomerSocial3.value = obj[20]
       
         if (obj[25]==1) {
              CustomerExcempt.setAttribute("checked", "true");
              CustomerExcempt.value =1;
              CustomerExcempt.addEventListener('change', ()=>{
                CustomerExcempt.value =0;          
              });

          } else {
            CustomerExcempt.value =0;
            CustomerExcempt.addEventListener('change', ()=>{
              CustomerExcempt.setAttribute("checked", "true");
            CustomerExcempt.value =1;
            });
          }
        if (obj[26]==1) {
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

  const path = (`${Api}customer`)

  const formData = new FormData()
    formData.append('action',action)
    formData.append('CustomerId',id)


    
     fetch(path,{
        method:'POST',
        body: formData,        
      })
     .then(res => res.json())
     .then(data => {
        console.log(data)
        if (data==200) {
          window.location.href=`${Url}customer`;
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
