document.write('<div id=container ></div>');
var x = 200;
var y = 140;

var width = window.innerWidth;
var height = window.innerHeight;
var widthCanvas = 58;
var heightCanvas = 71.5;
//Empieza prueba
function update(activeAnchor) {
  var group = activeAnchor.getParent();

  var topLeft = group.get('.topLeft')[0];
  var topRight = group.get('.topRight')[0];
  var bottomRight = group.get('.bottomRight')[0];
  var bottomLeft = group.get('.bottomLeft')[0];
  var image = group.get('Image')[0];

  var anchorX = activeAnchor.getX();
  var anchorY = activeAnchor.getY();

  // update anchor positions
  switch (activeAnchor.getName()) {
    case 'topLeft':
      topRight.y(anchorY);
      bottomLeft.x(anchorX);
      break;
    case 'topRight':
      topLeft.y(anchorY);
      bottomRight.x(anchorX);
      break;
    case 'bottomRight':
      bottomLeft.y(anchorY);
      topRight.x(anchorX);
      break;
    case 'bottomLeft':
      bottomRight.y(anchorY);
      topLeft.x(anchorX);
      break;
  }

  image.position(topLeft.position());

  var width = topRight.getX() - topLeft.getX();
  var height = bottomLeft.getY() - topLeft.getY();
  if (width && height) {
    image.width(width);
    image.height(height);
  }
}
function addAnchor(group, x, y, name) {
  var stage = group.getStage();
  var layer = group.getLayer();

  var anchor = new Konva.Circle({
    x: x,
    y: y,
    stroke: '#666',
    fill: '#aaa',
    strokeWidth: 2,
    radius: 3,
    name: name,
    draggable: true,
    dragOnTop: false
  });

  anchor.on('dragmove', function () {
    update(this);
    layer.draw();
  });
  anchor.on('mousedown touchstart', function () {
    group.draggable(false);
    this.moveToTop();
  });
  anchor.on('dragend', function () {
    group.draggable(true);
    layer.draw();
  });
  // add hover styling
  anchor.on('mouseover', function () {
    var layer = this.getLayer();
    document.body.style.cursor = 'pointer';
    this.strokeWidth(4);
    layer.draw();
  });
  anchor.on('mouseout', function () {
    var layer = this.getLayer();
    document.body.style.cursor = 'default';
    this.strokeWidth(2);
    layer.draw();
  });

  group.add(anchor);
}





//Termina prueba
var stage = new Konva.Stage({
  container: 'container',
  width: (width / 100) * widthCanvas,
  height: (height / 100) * heightCanvas
});
var layer = new Konva.Layer();
stage.add(layer);
stage.getContainer().style.border = '10px solid black';
stage.getContainer().style.background = 'grey';
stage.getContainer().style.width = widthCanvas + "%";

// what is url of dragging element?
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


  // });

  var imagen = new Konva.Image({
    width: x,
    height: y
  });
  var aleatorio = Math.round(Math.random() * 100);
  var imgGroup = new Konva.Group({

    x: 200 + aleatorio,
    y: 100 + aleatorio,
    draggable: true,

  });

  imagen.on('dblclick', function (evt) {
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



  layer.add(imgGroup);
  imgGroup.add(imagen);


  addAnchor(imgGroup, 0, 0, 'topLeft');
  addAnchor(imgGroup, x, 0, 'topRight');
  addAnchor(imgGroup, x, y, 'bottomRight');
  addAnchor(imgGroup, 0, y, 'bottomLeft');

  imagen.on('click', function (evt) {


});

stage.on('click', function (evt) {


});






  var imageObj1 = new Image();
  imageObj1.onload = function () {
    imagen.image(imageObj1);
    layer.draw();
  };
  imageObj1.src = itemURL;

});


// layer.on('mouseover', function(evt) {
//   var shape = evt.target;
//   document.body.style.cursor = 'pointer';
//   shape.scaleX(1.01);
//   shape.scaleY(1.01);
//   layer.draw();
// });
// layer.on('mouseout', function(evt) {
//   var shape = evt.target;
//   document.body.style.cursor = 'default';
//   shape.scaleX(1);
//   shape.scaleY(1);
//   layer.draw();
// });

//Shape comentadpo temporalmente 
// function alerta(imagenx) {
//   var mensaje;
//   var opcion = confirm("¿Deseas eliminar el elemento seleccionado?");
//   if (opcion == true) {
//     imagenx.destroy();
//     layer.draw();
//   } else {

//   }
//   document.getElementById("ejemplo").innerHTML = mensaje;
// }










