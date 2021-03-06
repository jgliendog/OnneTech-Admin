function pinta(num,inicio){//función creada por Jorge Zazo de la Encarnación http://www.forosdelweb.com/1201706-post4.html
	//Modificaciones Ariel Oliva arieloliva.com
	var pagNow = inicio;
	var limSup;
	var numPaginasFSt = "";
	var DatoI;
	var DatoF;
	var pagAnt;
	var pagSig;
	var rutaIma=""; //Ruta base de las imagenes
	var numPaginas = misDatos.length /num; //Detecto el número "entero" de páginas
	numPaginas = numPaginas.toString();
	numPaginas = numPaginas.split(".");
	numPaginasF = eval(numPaginas[0]);

	if (misDatos.length % num != 0){ //Si el resultado de la división anterior no es exacto le añado manualmente una página más
		numPaginasF ++;
	}


	if((pagNow + 1) != numPaginasF){//Establezco el número de datos a mostrar si la última página no tiene el mismo número de datos
		limSup = -1;
	} else {
		limSup = (misDatos.length - (numPaginasF * num))-1;
	} 

	DatoI = pagNow * num;//Establezco el dato inicial y el dato final de la paginación
	DatoF = DatoI + (num+limSup);


	if (pagNow == 0){//Establezco cual es la página anterior y la siguiente
		pagAnt = 0;
	} else {
		pagAnt = pagNow - 1;
	}
	if (pagNow == (numPaginasF-1)){
		pagSig = pagNow;
	} else {
		pagSig = pagNow + 1;
	}

	for (i=0;i<numPaginasF;i++){//Pinto la cadena con el número de páginas y sus correspondientes enlaces
		numPaginasFSt += "<a>"+ (i+1) +"</a> ";
	}

	if (primera == 0){//Establezco si es la primera vez que se crean los elementos
		var creo = document.createElement("span");
		document.getElementById("contenido").appendChild(creo);
		var cadena = ""
	}
}

		 var primera = 0;
			var misDatos = new Array();   
			function datos(dato1,dato2,dato3,dato4){ 
				this.dato1 = dato1;  
				this.dato2 = dato2;  
				this.dato3 = dato3;  
				this.dato4 = dato4;    
			}  
			var encabeza = new Array("Seleccion","Tipo Plantilla","Plantilla","Producto");
			misDatos[0] = new datos("sds0","hgh","ghg","dd");
			misDatos[1] = new datos("dsd1","ghg","hgh","tyt");
			misDatos[2] = new datos("ffg2","ghg","ghg","tyt");
			misDatos[3] = new datos("dfd3","hgg","ghg","tyt");
			misDatos[4] = new datos("fdf4","ghg","ghg","df");
			misDatos[5] = new datos("fdf5","hgg","ghg","ghg");
			misDatos[6] = new datos("fdf6","ghg","ghg","ghg");
			misDatos[7] = new datos("fdf7","ggh","ghg","ghg");
			