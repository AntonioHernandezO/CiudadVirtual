document.write('<div id=container  > <input id="com" type="button" value="Comenzar" onclick=" dinu(); dianueva();" class="bote" /></div>');

var diw;
var constan =1;
function dinu(){


    var boton = document.getElementById("com");
    boton.remove();    
}
function dianueva(){
    var newDiv = document.createElement("div");
	newDiv.id = "container"+ constan;
    var respuesta = document.getElementById("container");
    diw = "container"+ constan;
    constan= constan+1;
    respuesta.appendChild(newDiv);
    console.log(diw);
var width = window.innerWidth;
var height = window.innerHeight;
var widthCanvas = 57;
var heightCanvas = 75;
var stage = new Konva.Stage({
  container: diw,
  width: (width / 102) * widthCanvas,
  height: (height / 100) * heightCanvas-20,
});
var layer = new Konva.Layer();
layer.id('canvas');
stage.add(layer);


stage.getContainer().style.border = '10px solid black';
stage.getContainer().style.background = '#D4D4D4';
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
  // now we need to find pointer position
  // we can't use stage.getPointerPosition() here, because that event
  // is not registered by Konva.Stage
  // we can register it manually:
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
  //   image.on('contextmenu', function (evt) {
  //     //evento cuando el usuario de click derecho
  //     var mensaje;
  //     var opcion = confirm("¿Deseas colocar esta imagen como fondo?");
  //     if (opcion == true) {
  //       image.position(0,0);
  //       image.width((width / 100) * widthCanvas);
  //       image.height((height / 100) * heightCanvas);

  //     } else {

  //     }
  //     document.getElementById("ejemplo").innerHTML = mensaje;
    
  //   });
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

}
