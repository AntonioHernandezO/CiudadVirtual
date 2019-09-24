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
  
  // function testing(){
  //   var correcto = 1;
  //   var pokes = document.getElementsByClassName("pokemon");
  //   for(var i=0;i<pokes.length;i++){
  //      if(pokes[i].getAttribute("name") != pokes[i].parentNode.getAttribute("id")){
  //        correcto = correcto*0;
  //        break;
  //      }
  //   }
   
    
  // }
  
  