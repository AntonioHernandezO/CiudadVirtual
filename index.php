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
 
  <script src="kactions.js"></script>
  <script src="txtEd.js"></script>
  <script src="diapo.js"></script>
  <script src="PropTEXT.js"></script>
  <script src="rec.js"></script>
  <script src="canvasSave.js"></script>
  <script src="drawC.js"></script>
  <script src="js\particles\particles.js"></script>

  <!-- Inicio de desarrollo del proyecto -->
  <title>E-Blackboard</title>
  <link rel="icon" type="image/x-icon" href="img/sys/infoicon.ico" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
  <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>

  <!-- <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script> -->

  <!-- Hp de Ajax -->
  <!-- Also include jQueryUI -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>   
  </head>  
  <body>    
    <header id=header style="background-color: rgb(85, 162, 185); left: 20%; top:0%; border-radius: 2px; width: 57%; height: 8%; position: fixed;">

    <div style=" top:1.6%; justify-content: space-evenly;  display: flex; align-items: start; margin-right: 10%; margin-left: 9%; margin-top: 1.6%;" >
        <button type="button" style="border-radius: 40%;" class="btn btn-secondary btn-sm" id="btn-record-webm"><i class="fas fa-video fa-1x"></i> Start Recording</button>
        <button type="button" style="border-radius: 40%;"  class="btn btn-secondary btn-sm" id="resume" disabled><i class="fas fa-play fa-1x"></i> Resume</button>
        <button type="button" style="border-radius: 40%;"  class="btn btn-secondary btn-sm" id="pause" disabled><i class="fas fa-pause fa-1x"></i> Pause</button>
        <button type="button" style="border-radius: 40%;"  class="btn btn-secondary btn-sm" id="stop" disabled><i class="fas fa-stop fa-1x"></i> <i class="fas fa-download fa-1x"></i> Stop&Download</button>
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
    <nav>
    <br><br>
    <div class="container-fluid">
    <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
        <i class="fas fa-paint-roller"></i></button>
        <label  id="et">Temas</label>
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

<!-- Botón de Imágenes -->
<br>   
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
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


    <!-- Botón de Avatares -->
    <br>   
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
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
 <!-- Botón de Formas -->
 <br>   
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
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
         <!-- Botón de Números -->
         <br>   
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
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
             <!-- Botón de Números -->
             <br>   
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
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
        <!-- Botón de Letras -->
        <br>
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
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

 <!-- Botón de Texto -->
 <br>
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="txtedit()" id="circular--square">
          <i class="fas fa-keyboard"></i></button>
        <!-- <div class="dropdown-menu" onclick="txtedit()" >
            <a class="dropdown-item" ><div class="fuente" id="idTexto" draggable="false" >Insertar texto</div>
                           

        </div>
      </div> -->
      </div>
      </div>
    </div>

    <!-- Botón de Vídeo 
       <div class="container-fluid">
         <div class="btn-group dropright">
           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-video fa-2x"></i>Videos </button>
          
         b Función para abrir directorio de Vídeos  
           <div class="dropdown-menu" id="drag-items" >
         
          //$cont=0;
      
            //$d=opendir("./img/videos");
            //while(($e=readdir($d))!=false)
            //if($e!='.'&&$e!='..')
            //{
              //$cont=$cont+1;
            //$e1="./img/videos/".$e;
            
                   //Función Drag&Drop
         //echo "
            //<a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            //<img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=drag$cont>    
            //</a>  
             "; 

            }
            ?> 
           </div>
         </div>
       </div>
          -->
    <!-- Botón de Sonido -->
    <!-- <br>
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
          <i class="fas fa-volume-up"></i></button>
        <div class="dropdown-menu" id="drag-items"> -->

          <!-- Función para abrir directorio de Sonido -->
          <?php
        /*$cont = 0;

          $d = opendir("./img/sonido");
          while (($e = readdir($d)) != false)
            if ($e != '.' && $e != '..') {
              $cont = $cont + 1;
              $e1 = "./img/sonido/" . $e;

              //Función Drag&Drop
              echo "
            <a class='dropdown-item' ondrop='drop(event)' ondragover='allowDrop(event)' >
            <img  class='pokemon' src='$e1'  draggable='true' ondragstart='drag(event)' id=drag$cont>    
            </a>  
             ";
            }*/
           ?>
        </div>
      </div>
    </div>
    <!-- Botón de Personaliza -->
<br>
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="circular--square">
        <i class="fas fa-upload"></i></button>
        <div class="dropdown-menu" id="drag-items">
          </div>
          </div>
          </div>
          </div>
        </nav>
    <!-- <section>      
      <article>
        <h2>CONTENIDO PRINCIPAL</h2>
        <p>Espacio emergente</p>
        <div>
          <p>Contenido enmaquetado</p>
                   
        </div>
      </article>      
    </section> -->
    <br><br>

    <aside>
<!-- Aqui va el contenido del contenedor guinda -->
<div id="Panel" style="background-color: rgb(91, 214, 188);">
        <!-- <input id="1" type="button" class="bot" value=" 1 "  style="top:0px;" onclick="seleccionado(id)"/>
   

      </div>
      <div id="PanelO" style="background-color: rgb(91, 214, 188); left: 10%;">

        <input id="agregar" type="button" value="[+]" onclick="agregar1();" class="bote" />


        <input id="quitar" type="button" value="[-]" onclick="quitarBtn();" class="bote" />


      </div> -->
      <!-- Botón de Pincel -->
    <br>
    <div class="container-fluid">
      <div class="btn-group dropright">
        <button type="button" onclick="drawC()"   class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-paint-brush"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pincel</button>
       
          </div>
        <br>
  
   
        <br>
          <div>
          <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="limpiar"><i class="fas fa-backspace" onclick="clean()"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Limpiar</button>
          </div>
          <br>
        
          <div>
          <label for="favcolor">COLOR</label>
          <input type="color" id="favcolor" name="favcolor" value="#ffffff"><br><br>
          <button type="button"  onclick="colorchange()" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="fas fa-brush "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Color</button>
          
        </div>
          <br>
        
    

    </div>
      

      

    </aside>
    <footer style="background-color: rgb(85, 162, 185); left: 11%; top:85%; 	width: 79%; height: 15%; position:fixed;   display: flex; justify-content:space-around;">
    
    
    <div>
          <button type="button" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  onclick="crearCuadricula()"><i class="fas fa-th-large "></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cuadricula</button>
  </div>
  <div>
          <button type="button" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  ><i class="fas fa-grip-lines"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lineas</button>
  </div>
  <div>
          <button type="button" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  ><i class="fas fa-vector-square"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Blanco</button>
  </div>
  <div>
          <button type="button" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="restart()" ><i class="fas fa-eraser"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reiniciar</button>
  </div>
 
  <div>
          <button type="button" class="btn btn-info dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  id="descargar" onclick="tomarcaptura()"><i class="fas fa-camera-retro"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tomar captura</button>
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