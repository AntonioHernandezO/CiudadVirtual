function alcargar(){  //probando funcion de grabar DOM
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
        document.body.innerHTML = '<h1 style="height:auto;color:red;font-size:30px;">Lo siento,<br /><br />Esta usando un navegador viejo!<br /><br />Utilice otro.</h1>';
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
    div.style.backgroundColor='#ffffff';

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


      const konvaCanvas = document.querySelector('canvas');
  konvaCanvas.setAttribute("id", "canvas");

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
                    document.getElementById("stop").disabled=true;
                    document.getElementById("btn-record-webm").disabled=false;

                });
        };//Termina stop
        document.getElementById('pause').onclick = function() {
          this.disabled = true;
          document.getElementById('stop').disabled=true;
          document.getElementById('resume').disabled=false;
          recorder.pauseRecording(); 
 
        };//Termina pausa
        document.getElementById('resume').onclick = function() {
        recorder.resumeRecording();
        this.disabled=true;
        document.getElementById("pause").disabled=false;
        document.getElementById("stop").disabled=false;


        };//Termina resume
     }); //Termina grabacion

};  //TERMINA EL EVENTO btn-record-web

} //termina prueba

//Empiza tomar captura
function tomarcaptura(){
    var c = document.querySelector('canvas');
    let filename = prompt("Guardar como","Captura CiudadVirtual"),
      link = document.createElement('a');
  
      if (filename == null){//si el usiario dio cancelar
        return false;
      }
      else if (filename == ""){//si el usuario le dio click y no puso nombre al archivo
        link.download = "Sin título";
        link.href = c.toDataURL("image/png");//usa la imagen del canvas
      }
      else{//si el usuario le dio aceptar y puso un nombre al archivo
        link.download = filename;
        link.href = c.toDataURL("image/png");
      }
   
      link.click();
 
    }
    //Finaliza tomar captura
   
  
  