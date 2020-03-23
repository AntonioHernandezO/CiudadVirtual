document.write('<div id=container  ></div>');
var width = window.innerWidth;
var height = window.innerHeight;
var widthCanvas = 57;
var heightCanvas = 75;
var stage = new Konva.Stage({
  container: 'container',
  width: (width / 102) * widthCanvas,
  height: (height / 100) * heightCanvas-20
});
var layer = new Konva.Layer();
layer.id('canvas');
stage.add(layer);//El layer se agrega al stage.
stage.getContainer().style.border = '10px solid black';
stage.getContainer().style.background = '#FFFFFF';
stage.getContainer().style.width = widthCanvas + "%";
stage.getContainer().style.height = heightCanvas + "%";







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
  var c = document.querySelector('canvas');
  var context = c.getContext('2d');
  context.setTransform(1, 0, 0, 1, 0, 0);
  context.clearRect(0, 0, c.width, c.height);
  context.resetTransform();
  ctx.fillStyle = "#ffffff";
  ctx.fillRect(0, 0, c.width, c.height);
}




   

   