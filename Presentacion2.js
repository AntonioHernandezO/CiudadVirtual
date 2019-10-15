function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
     ev.dataTransfer.setData("text", ev.target.id);
     resizeimg();
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    // testing();
    resizeimg();
  }
  
   function testing(){
     var correcto = 1;
     var pokes = document.getElementsByClassName("pokemon");
     for(var i=0;i<pokes.length;i++){
        if(pokes[i].getAttribute("name") != pokes[i].parentNode.getAttribute("id")){
          correcto = correcto*0;
          break;
        }
     }
  }
  
function resizeimg(){
  var img = document.getElementById("drag1");
  drag1.width=804;
  drag1.height=484;

}


  var down = false;
  Rxt.canvas.addEventListener('mousedown', function () { 
      down = true; 
  }, false);
  Rxt.canvas.addEventListener('mouseup', function () { 
      down = false; 
  }, false);
  Rxt.canvas.addEventListener('mousemove', function (event) {
      if (down){
          //Rxt.translate(0, -50);
          clear();
          Rxt.drawImage(Img, event.clientX - this.offsetLeft,
          event.clientY - this.offsetTop, 80, 80);
          //Rxt.translate(0, 50);
      }
  }, false);
  
  // Funcion limpiar image.
  function clear(){
      Rxt.clearRect(0, 0, canvas.width, canvas.height);
      // Rxt.fillStyle = 'green';            // Contexto de color verde.
      // Rxt.fillRect(0, 0, 2000, 2000);     // Se rellena el contexto con el color verde.
  }
  
}

  