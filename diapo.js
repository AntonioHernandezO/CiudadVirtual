
var consta = 2;
var boton;
var espacio=60;
function agregar1() {

  boton = document.createElement('input');
  boton.type = 'button';
  boton.id = consta;
  boton.className = "bot";
  boton.value = ' ' + consta + ' ';
 
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



window.onload=function(){
  document.onkeypress=inspeccionartecla;
}

function inspeccionartecla(evobjet){
var elcaracter=evobjet.keyCode;
  if(elcaracter==40){
  
  }
}