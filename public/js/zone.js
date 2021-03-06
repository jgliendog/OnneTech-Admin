const ZoneId = document.getElementById('zone_id');
const ZoneCode = document.getElementById('zone_code');
const ZoneDescription = document.getElementById('zone_description');
const ZoneDetail = document.getElementById('zone_detail');

const ZoneStarDate = document.getElementById('zone_date');
const Status = document.getElementById('zone_status');
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

    const path = (`${Api}zone`)
    const action = "New"

    console.log(action);
    const formData = new FormData()
    formData.append('action',action)
    formData.append('ZoneCode',ZoneCode.value)
    formData.append('ZoneDescription',ZoneDescription.value)
    formData.append('ZoneDetail',ZoneDetail.value)
    formData.append('ZoneStardate',ZoneStardate.value)    
    formData.append('ZoneStatus',Status.value)
  
    


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
          window.location.href=`${Url}zone`;
        }
      })
  } /*End-Create*/


const SaveEditRegster= ()=>{

    const path = (`${Api}zone`)
    const action = "SaveEdit"

    const formData = new FormData()
    formData.append('action',action)
    formData.append('ZoneId',ZoneId.value)
    formData.append('ZoneDescription',ZoneDescription.value)
    formData.append('ZoneDetail',ZoneDetail.value)
    formData.append('ZoneStarDate',ZoneStarDate.value)    
    formData.append('ZoneStatus',Status.value)



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
          window.location.href=`${Url}zone`;
        }
      })

  }


const EditRegister = (e)=>{

  const action = e.target.getAttribute('data');

  const id = e.target.getAttribute('id');
  console.log(`${action} y ${id}`);

  const path = (`${Api}zone`)
  // const action = "Edit"

  const formData = new FormData()
    formData.append('action',action)
    formData.append('ZoneId',id)
    
     fetch(path,{
        method:'POST',
        body: formData,
        
      })
     .then(res => res.json())
     .then(data => {
        // console.log(data)
        let obj = data[0]
        console.log(obj)
        ZoneId.value= obj[0];
        ZoneCode.value= obj[1];
        ZoneDescription. value = obj[2]
        ZoneDetail.value = obj[3]
        ZoneStarDate.value = obj[4]

           if (obj[7]==1) {
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

  const path = (`${Api}zone`)

  const formData = new FormData()
    formData.append('action',action)
    formData.append('ZoneId',id)


    
     fetch(path,{
        method:'POST',
        body: formData,        
      })
     .then(res => res.text())
     .then(data => {
        console.log(data)
        if (data==200) {
          window.location.href=`${Url}zone`;
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
