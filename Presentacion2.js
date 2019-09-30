function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
     ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    testing();
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
  function init() {
    var stage = new createjs.Stage("demoCanvas");
    var circle = new createjs.Shape();
    circle.graphics.beginFill("Crimson").drawCircle(0, 0, 50);
    circle.x = 600;
    circle.y = 100;
    stage.addChild(circle);
    createjs.Tween.get(circle, {loop: true})
      .to({x: 400}, 1000, createjs.Ease.getPowInOut(4))
      .to({alpha: 0, y: 75}, 500, createjs.Ease.getPowInOut(2))
      .to({alpha: 0, y: 125}, 100)
      .to({alpha: 1, y: 100}, 500, createjs.Ease.getPowInOut(2))
      .to({x: 100}, 800, createjs.Ease.getPowInOut(2));
    createjs.Ticker.setFPS(60);
    createjs.Ticker.addEventListener("tick", stage);
  }

  