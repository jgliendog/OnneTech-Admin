const LocationId = document.getElementById('location_id');
const LocationCode = document.getElementById('location_code');
const LocationDescription = document.getElementById('location_description');
const LocationDetail = document.getElementById('location_detail');

const LocationStarDate = document.getElementById('location_date');
const Status = document.getElementById('location_status');
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

    const path = (`${Api}location`)
    const action = "New"

    console.log(action);
    const formData = new FormData()
    formData.append('action',action)
    formData.append('LocationCode',LocationCode.value)
    formData.append('LocationDescription',LocationDescription.value)
    formData.append('LocationDetail',LocationDetail.value)
    formData.append('LocationStarDate',LocationStarDate.value)    
    formData.append('LocationStatus',Status.value)
  
    


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
          window.location.href=`${Url}location`;
        }
      })
  } /*End-Create*/


const SaveEditRegster= ()=>{

    const path = (`${Api}location`)
    const action = "SaveEdit"

    const formData = new FormData()
    formData.append('action',action)
    formData.append('LocationId',LocationId.value)
    formData.append('LocationDescription',LocationDescription.value)
    formData.append('LocationDetail',LocationDetail.value)
    formData.append('LocationStarDate',LocationStarDate.value)    
    formData.append('LocationStatus',Status.value)



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
          window.location.href=`${Url}location`;
        }
      })

  }


const EditRegister = (e)=>{

  const action = e.target.getAttribute('data');

  const id = e.target.getAttribute('id');
  console.log(`${action} y ${id}`);

  const path = (`${Api}location`)
  // const action = "Edit"

  const formData = new FormData()
    formData.append('action',action)
    formData.append('LocationId',id)
    
     fetch(path,{
        method:'POST',
        body: formData,
        
      })
     .then(res => res.json())
     .then(data => {
        // console.log(data)
        let obj = data[0]
        console.log(obj)
        LocationId.value= obj[0];
        LocationCode.value= obj[1];
        LocationDescription. value = obj[2]
        LocationDetail.value = obj[3]
        LocationStarDate.value = obj[4]

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

  const path = (`${Api}location`)

  const formData = new FormData()
    formData.append('action',action)
    formData.append('LocationId',id)


    
     fetch(path,{
        method:'POST',
        body: formData,        
      })
     .then(res => res.text())
     .then(data => {
        console.log(data)
        if (data==200) {
          window.location.href=`${Url}location`;
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
