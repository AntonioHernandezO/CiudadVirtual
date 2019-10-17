<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/estilos2.css">
    <link rel="stylesheet" href="assets/fuentes.css">
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="https://unpkg.com/konva@4.0.13/konva.min.js"></script>
    <!--Uso de Iconos en los botones con Font Awesome-->
    <script src="https://kit.fontawesome.com/49634fa1fd.js"></script>    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="Presentacion2.js"></script>
    <script src="kactions.js"></script>
    
    <title > CanvaUNAM</title>
    <link rel="icon" type="image/x-icon" href="img/sys/infoicon.ico"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Iconos Font Awesome en los botones -->
     <!-- <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script> -->
    <!-- Also include jQueryUI -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script> //funcion para editar texto
        $(function(){
        $('#idTexto').on('click', function(){
        var esEditable = $('#idTexto').attr('contenteditable');
        if(esEditable){
        $('#idTexto').attr('contenteditable', true);
        $('#btnEditable').html('Hacerlo Editable');
        }else{
        $('#idTexto').attr('contenteditable', true);
        $('#btnEditable').html('dejar der editar');
   }
 });
})
    </script>
  </head>
  <body >
   <!-- Botón de Temas -->
    <nav>
     <br><br>
     <div class="container-fluid">
        <div class="btn-group dropright">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-swatchbook fa-2x"></i> Temas</button>
          <!--<img  src="img/sys/temas.png"    width="30" height="30" >-->
          <div class="dropdown-menu" id="drag-items" >
            <!-- Función para abrir el directorio de imágenes de fondo -->
          <?php
          $cont=0;
      
            $d=opendir("./img/fondos");
            while(($e=readdir($d))!=false)
            if($e!='.'&&$e!='..')
            {
              $cont=$cont+1;
            $e1="./img/fondos/".$e;
            
   
         echo "
            <a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            <img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=drag$cont>    
            </a>  
             "; 

            }
            ?> 
          </div>
        </div>
      </div>
      <!-- Botón de Avatares -->
           <br><br>
      <div class="container-fluid">
        <div class="btn-group dropright">
          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
          <i class="fas fa-user fa-2x"></i> Avatares </button>
          <div class="dropdown-menu" id="drag-items" >
            <!-- Función de abrir el directorio de imágenes para avatares -->
          <?php
          $cont=0;
      
            $d=opendir("./img/imgmonitos");
            while(($e=readdir($d))!=false)
            if($e!='.'&&$e!='..')
            {
              $cont=$cont+1;
            $e1="./img/imgmonitos/".$e;
            
   
         echo "
            <a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            <img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=drag$cont>    
            </a>  
             "; 

            }
            ?> 
           
          </div>
        </div>
      </div>

       <!-- Botón de Imágenes -->
       <br><br>
       <div class="container-fluid">
         <div class="btn-group dropright">
           <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-image fa-2x"></i> Imágenes </button>
           <!--<img  src="img/sys/imagenes.png"    width="30" height="30" >-->

           <!-- Función abrir directorio para imágenes -->
           <div class="dropdown-menu" id="drag-items" >
          <?php
          $cont=0;
      
            $d=opendir("./img/img");
            while(($e=readdir($d))!=false)
            if($e!='.'&&$e!='..')
            {
              $cont=$cont+1;
            $e1="./img/img/".$e;
            
   
         echo "
            <a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            <img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=drag$cont>    
            </a>  
             "; 

            }
            ?> 
           </div>
         </div>
       </div>
       
       <!-- Botón de Vídeo -->
       <br><br>
       <div class="container-fluid">
         <div class="btn-group dropright">
           <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-video fa-2x"></i>Videos </button>
           <!--<img  src="img/sys/video.png"    width="30" height="30" >--->
           <!-- Función para abrir directorio de Vídeos -->
           <div class="dropdown-menu" id="drag-items" >
          <?php
          $cont=0;
      
            $d=opendir("./img/videos");
            while(($e=readdir($d))!=false)
            if($e!='.'&&$e!='..')
            {
              $cont=$cont+1;
            $e1="./img/videos/".$e;
            
   
         echo "
            <a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            <img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=drag$cont>    
            </a>  
             "; 

            }
            ?> 
           </div>
         </div>
       </div>
            <!-- Botón de Sonido -->
            <br><br>
            <div class="container-fluid">
              <div class="btn-group dropright">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-volume-up fa-2x"></i>    
                <!--<img  src="img/sys/sonido.png"    width="30" height="30" >-->
                  Sonido
                </button>
                <div class="dropdown-menu" id="drag-items" >
             <!-- Función para abrir directorio de Sonido -->

          <?php
          $cont=0;
      
            $d=opendir("./img/sonido");
            while(($e=readdir($d))!=false)
            if($e!='.'&&$e!='..')
            {
              $cont=$cont+1;
            $e1="./img/sonido/".$e;
            
   
         echo "
            <a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            <img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=drag$cont>    
            </a>  
             "; 

            }
            ?> 
                </div>
              </div>
            </div>
                      <!-- Botón de Txto -->
                     <br><br>
                      <div class="container-fluid">
                        <div class="btn-group dropright">
                          <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-keyboard fa-2x"></i> Texto</button>
                          <!-- <img  src="img/sys/sonido.png"    width="30" height="30" >-->
                          <div class="dropdown-menu">
                           <a class="dropdown-item" ondrop="drop(event)" ondragover="allowDrop(event)"><div class="fuente" id="idTexto" draggable="true" ondragstart="drag(event)" id="drag6">Este contenido se volverá editable</div>
                            <div id="btnEditable"></div>
                           <!-- <a class="dropdown-item" ondrop="drop(event)" ondragover="allowDrop(event)"></a> -->
                           <!-- <a class="dropdown-item" ondrop="drop(event)" ondragover="allowDrop(event)"><img class="pokemon" src="img/arcoiris.gif" draggable="true" ondragstart="drag(event)" id="drag3"/></a> --> -->
                          </div>
                        </div>
                      </div>
          

    </nav>
             <aside>
        <!-- Aqui va el contenido del contenedor guinda -->
                  </aside>
</div>
  
  

    <!-- <script>
        var cv = document.getElementById('lienzo');
        var ctx = cv.getContext('2d');
        var image = document.getElementById("scream");
        var foto = {x: 50, y: 50, w: 100, h: 100};
        var isUp = null;
        image.onload = function() {
        drawImage(image, foto.w, foto.h);
        }
        function drawImage(image, w, h) {
            ctx.drawImage(image, foto.x, foto.y, w, h);
            ctx.fillStyle = 'white';
            ctx.beginPath();
            ctx.arc(foto.x, foto.y, 5, 0, Math.PI * 2, 1);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(w + foto.x, h / 2 + foto.y, 5, 0, Math.PI * 2, 1);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(w / 2 + foto.x, h + foto.y, 5, 0, Math.PI * 2, 1);
            ctx.fill();
            ctx.beginPath();
            ctx.arc(w + foto.x, h + foto.y, 5, 0, Math.PI * 2, 1);
            ctx.fill();
        }
        window.onmousedown = function(evt) {
            var ax = evt.clientX - cv.offsetLeft;
            var ay = evt.clientY - cv.offsetTop;
            console.log(ax, ay);
            if (ax >= foto.w - 5 + foto.x
                && ax <= foto.w + foto.x + 5
                && ay >= foto.h / 2 + foto.y - 5
                && ay <= foto.h / 2 + foto.y + 5
            ) {
                isUp = 'right';
            }
            else if (ax >= foto.w / 2 + foto.x - 5
                && ax <= foto.w / 2 + foto.x + 5
                && ay >= foto.h + foto.y - 5
                && ay <= foto.h + foto.y + 5
            ) {
                isUp = 'bottom';
            }
            else if (ax >= foto.w + foto.x - 5
                && ax <= foto.w + foto.x + 5
                && ay >= foto.h + foto.y - 5
                && ay <= foto.h + foto.y + 5
            ) {
                isUp = 'bottom-right';
            }
            else if (ax >= foto.x - 5 && ax <= foto.x + 5
                && ay >= foto.y - 5 && ay <= foto.y + 5
            ) {
                isUp = 'top-left';
            }
        }
        window.onmousemove = function(evt) {
            var ax = evt.clientX - cv.offsetLeft;
            var ay = evt.clientY - cv.offsetTop;
            if (isUp === 'right') {
                foto.w = ax - foto.x;
                ctx.clearRect(0, 0, 900, 600);
                drawImage(image, foto.w, foto.h);
            }
            else if (isUp === 'bottom') {
                foto.h = ay - foto.y;
                ctx.clearRect(0, 0, 900, 600);
                drawImage(image, foto.w, foto.h);
            }
            else if (isUp === 'bottom-right') {
                foto.w = ax - foto.x;
                foto.h = ay - foto.y;
                ctx.clearRect(0, 0, 900, 600);
                drawImage(image, foto.w, foto.h);
            }
            else if (isUp === 'top-left') {
                var dx = foto.x - ax;
                var dy = foto.y - ay;
                foto.x = ax;
                foto.y = ay;
                foto.w += dx;
                foto.h += dy;
                ctx.clearRect(0, 0, 900, 600);
                drawImage(image, foto.w, foto.h);
            }
        }
        window.onmouseup = function(evt) {
            isUp = null;
        }
    </script>  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <div style="border-style: solid; border-color: #3366FF; position: fixed; top: 0%; left: 20%; width: 58%; background-color: #C0C0C0; height: 8%;  clip: rect(auto, auto, auto, auto); padding-left: 2%; display: block; overflow: auto;" id="Panel">
          <input id="1" type="button" value="Diapositiva 1" />
          <input id="2" type="button" value="Diapositiva 2" />
          <input id="3" type="button" value="Diapositiva 3" />
          <input id="4" type="button" value="Diapositiva 4"  />
          </div>
      <input id="agregar" type="button" value="[+]" onclick="agregar1();" style="position: fixed; top: 19px; left: 244px;" />
      <script>
          var consta = 5;
          function agregar1(){

 

              var boton = document.createElement('input');


   boton.type = 'button';

   boton.id = consta;
                  boton.value = 'Diapositiva ' + consta;
                  document.getElementById('Panel').appendChild(boton);
                  consta = consta + 1;

}
      </script>
    </body>
</html>
