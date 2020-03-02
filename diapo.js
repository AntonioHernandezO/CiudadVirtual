var arrboton=[1];
var consta = 2;
var boton;
var espacio=62;
var idbor;
function agregar1() {

  boton = document.createElement('k');
  boton.textContent = "Diapositiva " + consta;
  boton.id = consta;
  boton.className = "bot cambioColor";
  boton.value = ' ' + consta + ' ';
  boton.addEventListener("click", seleccionado, false);
  arrboton.push(consta);
  //alert(arrboton); 
  if (consta>1){


    boton.style.top= (espacio*(boton.id-1))+'px';
  }
 consta = consta + 1;
  document.getElementById('Panel').appendChild(boton);
  

 

//flecha arriba 38
//Fecha abajo 40

  // var espacio = document.createElement('br');
  // document.getElementById('Panel').appendChild(espacio);
  // var espacio2 = document.createElement('br');
  // document.getElementById('Panel').appendChild(espacio2);
}



function quitarBtn(){
  boton.className = "bot";
  alert("Hola mundo");

}




function seleccionado1(x){
  alert("El boton seleccionado es "+ x);
  idbor= x;
}

function seleccionado(){
  alert("El boton seleccionado es "+ this.id);
  idbor= this.id;

  
}
function eliminarbtn(){
  imagen = document.getElementById(idbor);
	if (!imagen){
		alert("Seleccione una diapositiva");
	} else {
		padre = imagen.parentNode;
    padre.removeChild(imagen);
    for (var i of arrboton) {
      
      console.log(i); // logs "3", "5", "7"
   }

	}
}