    /**************************************************JSOn*******************/
    const ProductCode = document.getElementById('product_code');
    const ProductTypeDepartament = document.getElementById('product_type_departament');
    const ProductDescription = document.getElementById('product_description');
    const ProductDetail = document.getElementById('product_detail');
    const ProductReferent = document.getElementById('product_referent');
    const ProductUnit = document.getElementById('product_unit');
    const ProductBrand = document.getElementById('product_brand');
    const ProductModel = document.getElementById('product_model');
    const ProductStall = document.getElementById('product_stall');
    const ProductPack = document.getElementById('product_pack');
    const ProductBeforeCost = document.getElementById('product_before_cost');
    const ProductCostToday = document.getElementById('product_cost_today');
    const ProductCostProme = document.getElementById('product_cost_prome');
    const ProductDecimalPoint = document.getElementById('product_decimal_point');
    const ProductMin = document.getElementById('product_min');
    const ProductMax = document.getElementById('product_max');
    const ProductExempt = document.getElementById('product_exempt');
    const ProductCreateDate = document.getElementById('product_create_date');
    const Status = document.getElementById('product_status');
    const Price = document.getElementsByClassName('Precio');
    const Arrays = [];


    const TableItems =document.getElementById('table_items');


    FormContent.addEventListener('submit', (e)=>{
    e.preventDefault();
    Validation()

    });

    const ValidatorForm={
    ProductCode: false,
    ProductDescription: false

    }

    ProductCode.addEventListener('change',(e) =>{
    // e.preventDefault();
    if (e.target.value.trim().length >0) ValidatorForm.ProductCode=true;
    // console.log(e.target)
    });

    ProductDescription.addEventListener('change',(e) =>{
    // e.preventDefault();
    if (e.target.value.trim().length >0) ValidatorForm.ProductDescription=true;
    });
    ProductUnit.addEventListener('change',(e) =>{
    // e.preventDefault();
    // if (e.target.value.trim().length >0) ValidatorForm.StorageLiable=true;
    });
    ProductTypeDepartament.addEventListener('change',(e) =>{
    // e.preventDefault();
    // if (e.target.value.trim().length >0) ValidatorForm.StorageLocation=true;
    });
    ProductDecimalPoint.addEventListener('change',(e) =>{
    // e.preventDefault();
    const StatusDecimalPoint  = e.target.checked
    if (StatusDecimalPoint == true) {
    ProductDecimalPoint.value =1;
    }else{
    ProductDecimalPoint.value =0;
    }
    console.log(`esto es validación Product ${ValidatorForm.Status} ${Status.value}`)

    });
    
    Status.addEventListener('change',(e) =>{
    // e.preventDefault();
    const StatusDepartament  = e.target.checked
    if (StatusDepartament == true) {
    Status.value =1;
    }else{
    Status.value =0;
    }
    // console.log(`esto es validación Product ${ValidatorForm.Status} ${Status.value}`)
    });

    const Validation = ()=>{
        const FormValue = Object.values(ValidatorForm);
        const Valid = FormValue.findIndex(value => value==false)
        console.log(`proceso de validación${Valid}`);
        if (Valid==-1) {
        // alert("Ok registro exitoso");
        NewRegister();  
        } else{
        alert("Registro invalido");
        }
    }

  const NewRegister = ()=>{

      const path = (`${Api}product`)
      const action = "New"

      const formData = new FormData()
      formData.append('action',action)
      formData.append('ProductCode',ProductCode.value)
      formData.append('ProductTypeDepartament',ProductTypeDepartament.value)
      formData.append('ProductDescription',ProductDescription.value)
      formData.append('ProductDetail',ProductDetail.value)
      formData.append('ProductReferent',ProductReferent.value)
      formData.append('ProductUnit',ProductUnit.value)
      formData.append('ProductBrand',ProductBrand.value)
      formData.append('ProductModel',ProductModel.value)
      formData.append('ProductStall',ProductStall.value)
      formData.append('ProductPack',ProductPack.value)
      formData.append('ProductBeforeCost',ProductBeforeCost.value)
      formData.append('ProductCostToday',ProductCostToday.value)
      formData.append('ProductCostProme',ProductCostProme.value)
      formData.append('ProductDecimalPoint',ProductDecimalPoint.value)
      formData.append('ProductMin',ProductMin.value)

      formData.append('ProductMax',ProductMax.value)
      formData.append('ProductExempt',ProductExempt.value)
      formData.append('ProductCreateDate',ProductCreateDate.value)

      formData.append('Arrays',Arrays.map(p=>parseInt(p.value)))
     


      formData.append('Status',Status.value)
      console.log(formData)
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
      window.location.href=`${Url}product`;
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
      ProductCode.setAttribute("disabled", "true");
    let xhr
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest()
    else xhr = new ActiveXObject("Microsoft.XMLHTTP")

    xhr.open('GET', `${Api}product?action=${action}&id=${id}`)

    xhr.addEventListener('load', (data) => {
    const obj = JSON.parse(data.target.response)[0];


    if (obj[13]==1) {
          ProductDecimalPoint.setAttribute("checked", "true");
          ProductDecimalPoint.value =1;
          ProductDecimalPoint.addEventListener('change', ()=>{
          ProductDecimalPoint.value =0;          
        });

    } else {
        ProductDecimalPoint.value =0;
        ProductDecimalPoint.addEventListener('change', ()=>{
        ProductDecimalPoint.setAttribute("checked", "true");
        ProductDecimalPoint.value =1;
      });
    }  

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
      
      if (obj[16]==1) {
        ProductExempt.setAttribute("checked", "true");
        ProductExempt.value =1;
        ProductExempt.addEventListener('change', ()=>{
        ProductExempt.value =0;          
      });

      } else {
        ProductExempt.value =0;
        ProductExempt.addEventListener('change', ()=>{
        ProductExempt.setAttribute("checked", "true");
        ProductExempt.value =1;
        });
  }

    ProductCode.value = obj[0];
    ProductTypeDepartament.selectedIndex = parseInt(obj[1]-1);
    ProductDescription.value = obj[2];
    ProductDetail.value = obj[3];
    ProductReferent.value = obj[4];
    ProductUnit.value = obj[5];
    ProductBrand.value = obj[6];
    ProductModel.value = obj[7];
    ProductStall.value = obj[8];
    ProductPack.value = obj[9];
    ProductBeforeCost.value = obj[10];
    ProductCostToday.value = obj[11];
    ProductCostProme.value = obj[12];
    ProductMin.value = obj[14];
    ProductMax.value = obj[15];
    ProductCreateDate.value = obj[21]


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

        xhr.open('GET', `${Api}product?action=${action}&id=${id}`)

        xhr.addEventListener('load', (data) => {
        const obj = data.target.response;
        console.log(obj)
        })

        xhr.send()
        window.location.href=`${Url}product`;
        } else {
        swal("Operación Cancelada!",{
        icon: "error",   
        buttons:false,
        timer:1700,
        });
        window.location.href=`${Url}product`;
        }
        });

    }/*End Delete*/

    });
    }

    const SaveEdit = (id)=>{
      const path = (`${Api}product`)
      const action = "SaveEdit"
      console.log(`estoy update ${id}`)

      const formData = new FormData()
      formData.append('action',action)
      formData.append('ProductId',id)
      formData.append('ProductDescription',ProductDescription.value)
      formData.append('ProductDetail',ProductDetail.value)
      formData.append('ProductReferent',ProductReferent.value)
      formData.append('ProductUnit',ProductUnit.value)
      formData.append('ProductBrand',ProductBrand.value)
      formData.append('ProductModel',ProductModel.value)
      formData.append('ProductStall',ProductStall.value)
      formData.append('ProductPack',ProductPack.value)
      formData.append('ProductBeforeCost',ProductBeforeCost.value)
      formData.append('ProductCostToday',ProductCostToday.value)
      formData.append('ProductCostProme',ProductCostProme.value)
      formData.append('ProductDecimalPoint',ProductDecimalPoint.value)
      formData.append('ProductMin',ProductMin.value)
      

      formData.append('ProductMax',ProductMax.value)
      formData.append('ProductExempt',ProductExempt.value)
      formData.append('ProductCreateDate',ProductCreateDate.value)

    // formData.append('Precio1',Precio1.map(p=>parseInt(p.value)))
    // formData.append('Precio2',Precio2.map(p=>parseInt(p.value)))
    // formData.append('Precio3',Precio3.map(p=>parseInt(p.value)))


    formData.append('ProductStatus',Status.value)
    console.log(formData)
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
    window.location.href=`${Url}product`;

    }
    })


    } /*End-Save-Edit*/