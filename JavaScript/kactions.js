document.write('<div id=container></div>');

var width = window.innerWidth;
var height = window.innerHeight;
var widthCanvas = 57;
var heightCanvas = 75;
var stage = new Konva.Stage({
  container: 'container',
  width: (width / 100) * widthCanvas,
  height: (height / 100) * heightCanvas
});
var layer = new Konva.Layer();
layer.id('canvas');
stage.add(layer);//El layer se agrega al stage.
stage.getContainer().style.width = widthCanvas + "%";
stage.getContainer().style.height = heightCanvas + "%";


//FUNCIONES DE FOOTER

function dibujarCuadricula(){
  
  var largo,ancho;
   const canvas = document.querySelector('canvas');
   largo=canvas.getAttribute('width');
   ancho=canvas.getAttribute('height')+25;
    for (var x=10; x<=largo; x=x+50){
     var redLine = new Konva.Line({
       points: [largo, x, largo, x, 0, x],
              //x1, y1, x2, y2, x3, y3]
       stroke: 'red',
       strokeWidth: 3,
       lineCap: 'round',
       lineJoin: 'round'
     });
     layer.add(redLine);
     layer.batchDraw();
    
    
   }
for (var y=10; y<=ancho; y=y+50){

     var redLine = new Konva.Line({
       points: [y, ancho, y, ancho, y, 0],
              //x1, y1, x2, y2, x3, y3]
       stroke: 'red',
       strokeWidth: 3,
       lineCap: 'round',
       lineJoin: 'round'
     });
     layer.add(redLine);
     layer.batchDraw();
   
    }
}


function dibujarLineas(){
 var largo,ancho;
 const canvas = document.querySelector('canvas');
 largo=canvas.getAttribute('width');
   ancho=canvas.getAttribute('height');
    for (var x=10; x<=largo; x=x+50){
     var unilinea = new Konva.Line({
       points: [largo, x, largo, x, 0, x],
              //x1, y1, x2, y2, x3, y3]
       stroke: 'red',
       strokeWidth: 3,
       lineCap: 'round',
       lineJoin: 'round'
     });
     layer.add(unilinea);
     layer.batchDraw();
    
   }
 
}


function dibujarBlanco(){
 const canvas = document.querySelector('canvas');
 var context = canvas.getContext('2d');
 context.fillStyle = "#ffffff";
 context.fillRect(0, 0, canvas.width, canvas.height);
 
}


//TERMINAN FUNCIONES DE FOOTER

function eraseC(){
  mode="eraser";
}


function drawC() {
  tamanopin=prompt('Ingrese el tamaño de grosor del pincel');

var isPaint = false;
// var mode = 'brush';
var lastLine;

stage.on('mousedown touchstart', function(e) {
  isPaint = true;
  var pos = stage.getPointerPosition();
  //PRUEBA CAMBIO DE COLOR
  var colorchange,elcolor
colorchange = document.querySelector("[type='color']");
elcolor=colorchange.value;

//TERMINA PRUEBA CAMBIO DE COLOR
  lastLine = new Konva.Line({
    stroke: elcolor,
    strokeWidth: tamanopin,
    globalCompositeOperation:
      mode === 'brush' ? 'source-over' : 'destination-out',
    points: [pos.x, pos.y]
  });
  layer.add(lastLine);
});

stage.on('mouseup touchend', function() {
  isPaint = false;
});

// and core function - drawing
stage.on('mousemove touchmove', function() {
  if (!isPaint) {
    return;
  }

  const pos = stage.getPointerPosition();
  var newPoints = lastLine.points().concat([pos.x, pos.y]);
  lastLine.points(newPoints);
  layer.batchDraw();
});



    mode="brush";


    

    }
   
  
  
  







// URL de las imagenes
var itemURL = '';
document.getElementById('drag-items')
document.addEventListener('dragstart', function (e) {
  itemURL = e.target.src;
});

var con = stage.container();
con.addEventListener('dragover', function (e) {
  e.preventDefault(); // !important
});

con.addEventListener('drop', function (e) {
  e.preventDefault();
  stage.setPointersPositions(e);

  Konva.Image.fromURL(itemURL, function (image) {
    layer.add(image);
    image.position(stage.getPointerPosition());
    image.draggable(true);
    image.name('imagenx');
    
      image.width(350);
      image.height(250);
    

    layer.draw();

    
    image.on('dblclick', function (evt) {
      //evento cuando el usuario de click

      var mensaje;
      var opcion = confirm("¿Deseas eliminar el elemento seleccionado?");
      if (opcion == true) {
        this.remove();
        layer.draw();

      } else {

      }
      document.getElementById("ejemplo").innerHTML = mensaje;

    });
    image.on('contextmenu', function (evt) {

    
   });//fin del contextmenu 
  });
  

  stage.on('click tap', function (e) {
    // Si hay click fuera remover el resize
    if (e.target === stage) {
      stage.find('Transformer').destroy();
      layer.draw();
      return;
    }
    // Si no hay click en las imagenes se desactiva el resize
    if (!e.target.hasName('imagenx')) {
      return;
    }
    stage.find('Transformer').destroy();

    // instancia de transformer
    var tr = new Konva.Transformer();
    layer.add(tr);
    tr.attachTo(e.target);
    layer.draw();
   });
});
function restart(){
  window.location.reload();
 

}




   

   