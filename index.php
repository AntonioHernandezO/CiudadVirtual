<!doctype html>
<html lang="en">
  <head>
    <!-- Etiquetas inicales para el desarrollo del proyecto -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Hojas de estilos CSS utilizadas -->
    <link rel="stylesheet" href="assets/estilos2.css">
    <link rel="stylesheet" href="assets/fuentes.css">

    <!-- Scripts de "create" y uso de la librería "Konva" -->
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="https://unpkg.com/konva@4.0.13/konva.min.js"></script>

    <!--Uso de Iconos en los botones con Font Awesome-->
    <script src="https://kit.fontawesome.com/49634fa1fd.js"></script>    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Integración de librerias JavaScript para funciones como texto -->
    <script src="Presentacion2.js"></script>
    <script src="kactions.js"></script>
    <script src="txtEd.js"></script>

    <!-- Inicio de desarrollo del proyecto -->
     <title > CanvaUNAM</title>
    <link rel="icon" type="image/x-icon" href="img/sys/infoicon.ico"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
     <!-- <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script> -->

     <!-- Script de Ajax -->
    <!-- Also include jQueryUI -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    
  </head>

  <!-- Cuerpo de del proyecto -->
  <body>

   <!-- Botón de Temas -->
    <nav>
      <br><br>
     <div class="container-fluid">
        <div class="btn-group-vertical">
          <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-swatchbook fa-2x"></i> Temas</button>
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
      <div class="container-fluid">
        <div class="btn-group dropright">
          <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
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

       <!-- Botón de Imágenes -->
       <div class="container-fluid">
         <div class="btn-group dropright">
           <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-image fa-2x"></i> Imágenes </button>

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
       
       <!-- Botón de Vídeo 
       <div class="container-fluid">
         <div class="btn-group dropright">
           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-video fa-2x"></i>Videos </button>
          
           <!-- Función para abrir directorio de Vídeos 
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
          
            <!-- Botón de Sonido -->

            <div class="container-fluid">
              <div class="btn-group dropright">
                <button type="button" class="btn btn-primary dropleft-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-volume-up fa-2x"></i>Sonido</button>
                <div class="dropdown-menu" id="drag-items">

             <!-- Función para abrir directorio de Sonido -->
          <?php
          $cont=0;
      
            $d=opendir("./img/sonido");
            while(($e=readdir($d))!=false)
            if($e!='.'&&$e!='..')
            {
              $cont=$cont+1;
            $e1="./img/sonido/".$e;
            
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
            <div class="container-fluid">
            <div class="btn-group dropright">
            <button type="button" class="btn btn-primary dropleft-toggle"" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-keyboard fa-3x"></i>Texto</button>
            <div class="dropdown-menu" onclick="txtedit()" >
            <a class="dropdown-item" ><div class="fuente" id="idTexto" draggable="false" >Insertar texto</div>
                           

            <!-- Botón considerado a borrar -->
                           
                           <!-- <div id="btnEditable"></div>
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
    </script> -->
                          </div>
                        </div>
                      </div>
    </nav>
             <aside>
        <!-- Aqui va el contenido del contenedor guinda -->
                  </aside>
</div>
  
  
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
