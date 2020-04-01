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
  
// ANIMACION DE CIRCULO
  // function init() {
  //   var stage = new createjs.Stage("demoCanvas");
  //   var circle = new createjs.Shape();
  //   circle.graphics.beginFill("Crimson").drawCircle(0, 0, 50);
  //   circle.x = 600;
  //   circle.y = 100;
  //   stage.addChild(circle);
  //   createjs.Tween.get(circle, {loop: true})
  //     .to({x: 400}, 1000, createjs.Ease.getPowInOut(4))
  //     .to({alpha: 0, y: 75}, 500, createjs.Ease.getPowInOut(2))
  //     .to({alpha: 0, y: 125}, 100)
  //     .to({alpha: 1, y: 100}, 500, createjs.Ease.getPowInOut(2))
  //     .to({x: 100}, 800, createjs.Ease.getPowInOut(2));
  //   createjs.Ticker.setFPS(60);
  //   createjs.Ticker.addEventListener("tick", stage);
    
  // }
  // $("#winston").draggable();
  // $("#dropzone").droppable({
  //     drop: function(event, ui) {
  //         $(this).css('background', 'rgb(0,200,0)');
  //     },
  //     over: function(event, ui) {
  //         $(this).css('background', 'orange');
  //     },
  //     out: function(event, ui) {
  //         $(this).css('background', 'cyan');
  //     }
  // });
  



function resizeimg(){
  var img = document.getElementById("drag1");
  drag1.width=804;
  drag1.height=484;

}
//funcion para fijar las imagenes en el area de trabajo canvas
function init(){
  // var canvas=document.getElementById('demoCanvas');
  // var ctx = canvas.getContext('2d');
  // ctx.drawImage(document.getElementById('drag6'), 0, 0,80,80);
  // Objeto Canvas.
  var canvas = document.getElementById('demoCanvas');
  var Rxt = canvas.getContext('2d');
    
  // Se crea una imagen.
  var Img = document.getElementById("drag6");
  // Img.src = 'img/imgmonitos/Character_1.png';
  Img.onload = function () { 
  Rxt.drawImage(Img, -100, 0, 10, 10); 
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

  