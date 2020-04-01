<!DOCTYPE html>
<html lang="es">  
  <head>    
  <!--Record labels-->
  <!-- recommended -->
  <script src="https://www.WebRTC-Experiment.com/RecordRTC.js"></script>
 
 <!-- use 5.5.6 or any other version on cdnjs -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/RecordRTC/5.5.6/RecordRTC.js"></script>
  
 <!-- NPM i.e. "npm install recordrtc" -->
 <!-- <script src="node_modules/recordrtc/RecordRTC.js"></script> -->
  
 <!-- bower -->
 <!-- <script src="bower_components/recordrtc/RecordRTC.js"></script> -->

<script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
<script src="https://www.webrtc-experiment.com/FileSelector.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <!-- Etiquetas inicales para el desarrollo del proyecto -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Hojas de estilos CSS utilizadas -->
  <link rel="stylesheet" href="assets/estilos2.css">
  <link rel="stylesheet" href="assets/fuentes.css">
  <link rel="stylesheet" href="assets/dia.css">
  <link rel="stylesheet" href="assets/presentacion.css">
  <!-- Include Editor style. -->
<link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

<!-- Include JS file. -->
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.0.6/js/froala_editor.pkgd.min.js'></script>

  <!-- Scripts de "create" y uso de la librería "Konva" -->
  <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
  <script src="https://unpkg.com/konva@4.0.13/konva.min.js"></script>
  <script src="https://unpkg.com/konva@4.0.15/konva.min.js"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css"/>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

  <!--Medium editor js-->
  <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>

  <!--medium editor css-->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">


  <!--Uso de Iconos en los botones con Font Awesome-->
  <script src="https://kit.fontawesome.com/49634fa1fd.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Integración de librerias JavaScript para funciones como texto -->
 
  <script src="JavaScript/kactions.js"></script>
  <script src="JavaScript/txtEd.js"></script>
  <script src="JavaScript/diapo.js"></script>
  <script src="JavaScript/PropTEXT.js"></script>
  <script src="JavaScript/rec.js"></script>
  <script src="JavaScript/canvasSave.js"></script>
  <script src="JavaScript/drawC.js"></script>
  <script src="js\particles\particles.js"></script>
  <script src="JavaScript/panelControl.js"></script>
  <script src="JavaScript/loader.js"></script>
  <script src="videomodaljs/js/modal-video.js"></script>

  <link rel="stylesheet" type="text/css" href="videomodaljs/css/modal-video.min.css">

  <!-- Inicio de desarrollo del proyecto -->
  <title>E-Blackboard</title>
  <link rel="icon" type="image/x-icon" href="img/sys/infoicon.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
  <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/styleloader.css">

  <!-- <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script> -->

  <!-- Hp de Ajax -->
  <!-- Also include jQueryUI -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>   
  </head>  
  <body id="body">  
  <!--INICIA EL LOADER-->
<style>



.master{
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #d1ccc0;
  z-index: 9999;
}

.loader {
  position: absolute;
  width: 200px;
  height: 200px;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}

.item {
  width: 100px;
  height: 100px;
  position: absolute;
}

.item-1 {
  background-color: #FA5667;
  top: 0;
  left: 0;
  z-index: 1;
  -webkit-animation: item-1_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
          animation: item-1_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
}

.item-2 {
  background-color: #7A45E5;
  top: 0;
  right: 0;
  -webkit-animation: item-2_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
          animation: item-2_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
}

.item-3 {
  background-color: #1B91F7;
  bottom: 0;
  right: 0;
  z-index: 1;
  -webkit-animation: item-3_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
          animation: item-3_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
}

.item-4 {
  background-color: #FAC24C;
  bottom: 0;
  left: 0;
  -webkit-animation: item-4_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
          animation: item-4_move 1.8s cubic-bezier(.6,.01,.4,1) infinite;
}

@-webkit-keyframes item-1_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(0, 100px);transform: translate(0, 100px)} 
  50% {-webkit-transform: translate(100px, 100px);transform: translate(100px, 100px)} 
  75% {-webkit-transform: translate(100px, 0);transform: translate(100px, 0)} 
}

@keyframes item-1_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(0, 100px);transform: translate(0, 100px)} 
  50% {-webkit-transform: translate(100px, 100px);transform: translate(100px, 100px)} 
  75% {-webkit-transform: translate(100px, 0);transform: translate(100px, 0)} 
}

@-webkit-keyframes item-2_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(-100px, 0);transform: translate(-100px, 0)} 
  50% {-webkit-transform: translate(-100px, 100px);transform: translate(-100px, 100px)} 
  75% {-webkit-transform: translate(0, 100px);transform: translate(0, 100px)} 
}

@keyframes item-2_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(-100px, 0);transform: translate(-100px, 0)} 
  50% {-webkit-transform: translate(-100px, 100px);transform: translate(-100px, 100px)} 
  75% {-webkit-transform: translate(0, 100px);transform: translate(0, 100px)} 
}

@-webkit-keyframes item-3_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(0, -100px);transform: translate(0, -100px)} 
  50% {-webkit-transform: translate(-100px, -100px);transform: translate(-100px, -100px)} 
  75% {-webkit-transform: translate(-100px, 0);transform: translate(-100px, 0)} 
}

@keyframes item-3_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(0, -100px);transform: translate(0, -100px)} 
  50% {-webkit-transform: translate(-100px, -100px);transform: translate(-100px, -100px)} 
  75% {-webkit-transform: translate(-100px, 0);transform: translate(-100px, 0)} 
}

@-webkit-keyframes item-4_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(100px, 0);transform: translate(100px, 0)} 
  50% {-webkit-transform: translate(100px, -100px);transform: translate(100px, -100px)} 
  75% {-webkit-transform: translate(0, -100px);transform: translate(0, -100px)} 
}

@keyframes item-4_move {
  0%, 100% {-webkit-transform: translate(0, 0);transform: translate(0, 0)} 
  25% {-webkit-transform: translate(100px, 0);transform: translate(100px, 0)} 
  50% {-webkit-transform: translate(100px, -100px);transform: translate(100px, -100px)} 
  75% {-webkit-transform: translate(0, -100px);transform: translate(0, -100px)} 
}

</style>
<div class="master">
  <div class="loader">
  <div class="item item-1"></div>
  <div class="item item-2"></div>
  <div class="item item-3"></div>
  <div class="item item-4"></div>
</div>
</div>

  <script>
       $(window).on('load', function () {
      setTimeout(function () {
    $(".master").css({visibility:"hidden",opacity:"0"} ).fadeOut("slow")} , 3990);
   });
 $(window).on('load', function () {
      setTimeout(function () {
    $(".loader").css({visibility:"hidden",opacity:"0"} ).fadeOut("slow")} , 4000);
   });

   


    </script>
    
    



  <!--TERMINA EL LOADER-->

      <!--Modal: modalYT-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Body-->
      <div class="modal-body mb-0 p-0">

        <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XokhlijAAI0"
            allowfullscreen></iframe>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center flex-column flex-md-row">
        <span class="mr-4">¡Siguenos!</span>
        <div>
          <a type="button" class="btn-floating btn-sm btn-fb" href="https://www.facebook.com/">
            <i class="fab fa-facebook-f"></i>
          </a>
          <!--Twitter-->
          <a type="button" class="btn-floating btn-sm btn-tw" href="https://twitter.com/?lang=es">
            <i class="fab fa-twitter"></i>
          </a>
          <!--Google +-->
          <a type="button" class="btn-floating btn-sm btn-gplus" href="https://www.google.com/">
            <i class="fab fa-google-plus-g"></i>
          </a>
          <!--Linkedin-->
          <a type="button" class="btn-floating btn-sm btn-ins" href="https://mx.linkedin.com/">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
          data-dismiss="modal">Close</button>


      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalYT-->
<script>

$( document ).ready(function() {
    $('#myModal').modal('toggle')
});

  </script>


<!-- SE CREA EN CANVAS -->



<!-- SE CREA EN CANVAS -->



  <!--INICIA HEADER-->
    
    <header id=header >

    <div style=" top:1.3%; justify-content: space-evenly;  display: flex; align-items: start; margin-right: 10%; margin-left: 9%; margin-top: 1.3%;" >
        <button type="button" style="border-radius: 100%; height: 50px; width: 50px;  background-color: #7b9788!important; border-color: #7b9788!important;" title="Iniciar Grabación" class="btn btn-secondary btn-lg" id="btn-record-webm"><i class="fas fa-video fa-1x"></i> </button>
        <button type="button" style="border-radius: 100%; height: 50px; width: 50px;  background-color: #7b9788!important; border-color: #7b9788!important;"   title="Reanudar grabacion" class="btn btn-secondary btn-lg" id="resume" disabled><i class="fas fa-play fa-1x"></i> </button>
        <button type="button" style="border-radius: 100%; height: 50px; width: 50px;  background-color: #7b9788!important; border-color: #7b9788!important;"   title="Pausar grabacion" class="btn btn-secondary btn-lg" id="pause" disabled><i class="fas fa-pause fa-1x"></i> </button>
        <button type="button" style="border-radius: 100%; height: 50px; width: 50px;  background-color: #7b9788!important; border-color: #7b9788!important;"   title="Detener grabacion y descargar" class="btn btn-secondary btn-lg" id="stop" disabled>
        <!-- <i class="fas fa-stop fa-1x"> -->

        </i><i class="fas fa-download fa-1x"></i> </button>
        <!-- <button type="button" class="btn btn-primary btn-sm" id="download"disabled><i class="fas fa-download fa-1x"></i> Download</button> -->
    </div>


    <script>
      //BLOQUEO DE CONTEXT MENU Y F12

           $(document).bind("contextmenu",function(e) {
            e.preventDefault();
            });
            $(document).keydown(function(e){
            if(e.which === 123){
             return false;
            }
            });//TERMINA BLOQUEO
              (function () {
            if (!document.createElement('canvas').getContext) {
                document.body.innerHTML = '<h1 style="height:auto;color:red;font-size:30px;">Excuse me Sir,<br /><br />You are using very old web-browser!<br /><br />Please upgrade it.</h1>';
            }
            var prepend = function (parent, elementToPrepend)
            {
                return parent.insertBefore(elementToPrepend, parent.firstChild);
            };

            var div = document.createElement('div');

            div.innerHTML = '<g:plusone size="tall"></g:plusone>';
            div.className = 'gplus-button';
            div.style.position = 'absolute';
            div.style.top = 0;
            div.style.padding = '3px 0';
            div.style.right = '30px';

            var body = document.body;

            if(body.insertBefore) prepend(body, div);
            else document.body.appendChild(div);
        })();


        (function () {
            var lastTime = 0, vendors = ['ms', 'moz', 'webkit', 'o'];
            for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
                window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
                window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'RequestCancelAnimationFrame'];
            }
            if (!window.requestAnimationFrame)
                window.requestAnimationFrame = function (callback, element) {
                    var currTime = new Date().getTime();
                    var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                    var id = window.setTimeout(function () {
                        callback(currTime + timeToCall);
                    }, timeToCall);
                    lastTime = currTime + timeToCall;
                    return id;
                };
            if (!window.cancelAnimationFrame)
                window.cancelAnimationFrame = function (id) {
                    clearTimeout(id);
                };
        }());
    </script>

    <!-- below section handles RecordRTC and WhammyRecorder -->

    <script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>

    <script>
             document.getElementById('btn-record-webm').onclick = function() {
            this.disabled = true;
           
            //Asignacion de ID a canvas creado por KONVA
            const konvaCanvas = document.querySelector('canvas');
            konvaCanvas.setAttribute("id", "canvas");
            //Termina la asignacion


            navigator.mediaDevices.getUserMedia({audio: true}).then(function(audioStream) {
                var canvas = document.getElementById('canvas');
                
                var canvasStream = canvas.captureStream();

                var finalStream = new MediaStream();
                getTracks(audioStream, 'audio').forEach(function(track) {
                    finalStream.addTrack(track);
                });
                getTracks(canvasStream, 'video').forEach(function(track) {
                    finalStream.addTrack(track);
                });

                var recorder = RecordRTC(finalStream, {
                    type: 'video'
                });

                recorder.startRecording();
                document.getElementById("stop").disabled=false;
                document.getElementById("resume").disabled=false;
                document.getElementById("pause").disabled=false;

                //INICIA FUNCION DE STOP.
                document.getElementById('stop').onclick = function() {
                this.disabled = true;
                recorder.stopRecording(function() {
                          
                            var blob = recorder.getBlob();
                            // document.body.innerHTML = '<video controls src="' + URL.createObjectURL(blob) + '" autoplay loop></video>';
                            audioStream.stop();
                            canvasStream.stop();
                            this.save('MiVideo-CiudadVirtual');  
                            recorder.reset();
                            location.reload();
                            document.getElementById("resume").disabled=true;
                            document.getElementById("pause").disabled=true;
                            document.getElementById("btn-record-webm").disabled=false;

                        });
                };//Termina stop
                document.getElementById('pause').onclick = function() {
                  this.disabled = true;
                  recorder.pauseRecording(); 
         
                };//Termina pausa
                document.getElementById('resume').onclick = function() {
                recorder.resumeRecording();
                this.disabled=true;
                document.getElementById("pause").disabled=false;

                };//Termina resume
             }); //Termina grabacion

        };  //TERMINA EL EVENTO btn-record-web

        //Empiza tomar captura

       

    </script>
    </header>
  


  

    <article id="article">
    <br><br>
    <div class="container-fluid">
    <div class="btn-group dropright">
        <button type="button" title="Temas" class="btn btn-primary btn-lg dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
        <i class="fas fa-paint-roller"></i></button>
        <!--<label  id="et">Temas</label>-->
        <div class="dropdown-menu" id="drag-items">

          <!-- Función para abrir el directorio de imágenes de fondo -->
          <?php
          $cont = 0;

          $d = opendir("./img/fondos");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/fondos/" . $e;

              //Función Drag&Drop
              echo "
      <a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            <img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=dragfondo >    
            </a>  
             ";
            }
            
          ?>
        </div>
      </div>
    </div>
<br>
<!-- Botón de Imágenes -->
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" title="Imágenes" class="btn btn-primary btn-lg dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
          <i class="fas fa-image"></i></button>

        <!-- Función abrir directorio para imágenes -->
        <div class="dropdown-menu" id="drag-items">
          <?php
          $cont = 0;

          $d = opendir("./img/img");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/img/" . $e;
              //Función Drag&Drop   
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

    <br>
    <!-- Botón de Avatares -->
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" title="Avatares" class="btn btn-primary btn-lg dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
          <i class="fas fa-user"></i></button>
        <div class="dropdown-menu" id="drag-items">

          <!-- Función de abrir el directorio de imágenes para avatares -->
          <?php
          $cont = 0;

          $d = opendir("./img/imgmonitos");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/imgmonitos/" . $e;

              //Función Drag&Drop

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
    <br>
 <!-- Botón de Formas -->
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" title="Formas" class="btn btn-primary btn-lg dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
        <i class="fas fa-shapes"></i></button>
        <div class="dropdown-menu" id="drag-items">
        <?php
          $cont = 0;

          $d = opendir("./img/formas");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/formas/" . $e;

              //Función Drag&Drop

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
    <br>
         <!-- Botón de Números -->
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" title="Números" class="btn btn-primary btn-lg dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
        <i class="fas fa-list-ol "></i></button>
        <div class="dropdown-menu" id="drag-items">
        <?php
          $cont = 0;

          $d = opendir("./img/numeros");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/numeros/" . $e;

              //Función Drag&Drop

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
    <br>
             <!-- Botón de Números -->   
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" title="Formas de Calculadora" class="btn btn-primary btn-lg dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
        <i class="fas fa-calculator"></i></button>
        <div class="dropdown-menu" id="drag-items">
        <?php
          $cont = 0;

          $d = opendir("./img/signos");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/signos/" . $e;

              //Función Drag&Drop

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
    <br>
        <!-- Botón de Letras -->
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" title="Letras" class="btn btn-primary btn-lg dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
        <i class="fas fa-font"></i></button>
        <div class="dropdown-menu" id="drag-items">
        <?php
          $cont = 0;

          $d = opendir("./img/letras");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/letras/" . $e;

              //Función Drag&Drop

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
    <br>
 <!-- Botón de Texto -->
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" title="Texto" class="btn btn-primary btn-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  id="circular--square" onclick="txtedit()">
          <i class="fas fa-keyboard"></i></button>

      </div>
      </div>
    <!-- </div> -->

    
      
        <!-- </div>
      </div>
    </div> -->
    <br>
    <!-- Botón de Personaliza -->

    <div class="container-fluid">
      <div class="btn-group dropright">

      <div class="image-upload">
    <label for="file-input">
        <img src="img/sys/upload-icon.png" alt ="Click aquí para subir tu foto" title ="Click aquí para subir tu foto" style="width: 50px; height: 50px;" > 
    </label>
    <input id="file-input" type="file" accept="image/*" id="drag-items"/>
      </div>
 


          </div>
          </div>
        
          <div id="preview"></div>
         
            <script>
   
   document.getElementById("file-input").onchange = function(e) {
  var url = document.getElementById('file-input').files[0].name;
 
 function dibujarimg(url);
}



 




            </script>
        
  </article> <!-- FIN DEL ARTICLE-->
    
    <br><br>

    <aside id="aside">
<!-- Aqui va el contenido del contenedor guinda -->


      <!-- Botón de Pincel -->
    <br><br>
    <div class="botaside">
        <button type="button" title="Grosor del Pincel" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--squar" onclick="drawC()">
        <i class="fas fa-paint-brush" ></i></button>
       </div>
<br>
        
          <div class="botaside">
          <button type="button" title="Limpiar" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--squar" onclick="eraseC()">
          <i class="fas fa-backspace" ></i></button>
          </div>
<br>
          <div class="botaside">
         
          <input type="color" class="palco" title="Paleta de Color" id="favcolor" name="favcolor" value="#0D5B8D"></input><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Colores
          
        </div>
          <br>
   
    </aside>
    <footer  id="footer">
    
    <div class="botfot" >
          <button type="button" id="botonesfooter" title="Cuadrícula" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  onclick="dibujarCuadricula()" style="background-color: #7b9788!important;"><i class="fas fa-th-large " ></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cuadricula</button>
  </div>
  
  <div class="botfot">
          <button type="button" id="botonesfooter" title="Líneas" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  onclick="dibujarLineas()" style="background-color: #7b9788!important;" ><i class="fas fa-grip-lines"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lineas</button>
  </div>
  <div class="botfot">
          <button type="button" id="botonesfooter" title="Blanco" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  onclick="dibujarBlanco()" style="background-color: #7b9788!important;" ><i class="fas fa-vector-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Blanco</button>
  </div>
  <div class="botfot">
          <button type="button" id="botonesfooter" title="Reiniciar" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="restart()"  style="background-color: #7b9788!important;"><i class="fas fa-eraser"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reiniciar</button>
  </div>
 
  <div class="botfot">
          <button type="button" id="botonesfooter" title="Tomar Captura" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  id="descargar" onclick="tomarcaptura()" style="background-color: #7b9788!important;"><i class="fas fa-camera-retro"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tomar captura</button>
  </div>


    </footer>
  </body>  
   <!-- Optional JavaScript -->
   <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>