function drawC(){
    //Asignacion de ID a canvas creado por KONVA
    // const konvaCanvas = document.querySelector('canvas');
    // konvaCanvas.setAttribute("id", "canvas");
    //Termina la asignacion
    colorchange = document.querySelector("[type='color']");
    elcolor=colorchange.value;
 
    const canvas = document.querySelector('canvas');
    const ctx = canvas.getContext('2d'); //ctx es definido como el contexto 

    var width = window.innerWidth;
    var height = window.innerHeight;
    var widthCanvas = 57;
    var heightCanvas = 75;


    canvas.width = (width/102)*widthCanvas;
    canvas.height=(height / 100) * heightCanvas-20;

    cw=(width/102)*widthCanvas;
    ch=(height / 100) * heightCanvas-20;
    var limpiar = document.getElementById("limpiar");

    ctx.strokeStyle = elcolor;
    ctx.lineJoin = 'round';
    ctx.lineCap = 'round';
    ctx.lineWidth = 7;
    ctx.globalCompositeOperation = 'multiply';

    let isDrawing = false;
    let lastX = 0;
    let lastY = 0;
    let hue = 0;
    let direction = true;

    function draw(e) {
        if (!isDrawing) return; //Stop the function if the user has not pressed left mouse button.
        
       
        ctx.strokeStyle = elcolor;  //para cambiar con HSL `hsl(${hue}, 100%, 50%)`;
       
        ctx.beginPath();
        ctx.moveTo(lastX, lastY);
        ctx.lineTo(e.offsetX, e.offsetY);
        ctx.stroke();
        [lastX, lastY] = [e.offsetX, e.offsetY];
        // hue++;
        // if (hue >= 360) {
        //     hue = 0;
        // }
        // if (ctx.lineWidth >= 100 || ctx.lineWidth <= 1) { //DESCOMENTAR UNICAMENTE SI SE QUIERE ACTIVAR HUE " HSL"  http://mothereffinghsl.com/
        //     console.log(direction);
        //     direction = !direction;
        // }
        // if (direction) {
        //     ctx.lineWidth++;                     //DESCOMENTAR UNICAMENTE SI QUIERE QUE EL TAMAÑO DEL PINCEL AUMENTE GRADUALMENTE
        // } else {
        //     ctx.lineWidth--;
        // }
        colorchange.addEventListener("input", actualizar, false);
        //input_color.addEventListener("change", actualizar, false);
        colorchange.select();

    }
    function actualizar(event) {
        // detecta el nuevo color 
        elcolor = event.target.value;
        ctx.strokeStyle = elcolor;
        ctx.fillStyle = elcolor;
        
       
        }

    window.addEventListener('mousedown', (e) => {
        isDrawing = true;
        [lastX, lastY] = [e.offsetX, e.offsetY];
    });
    window.addEventListener('mousemove', draw);
    window.addEventListener('mouseup', () => isDrawing = false);
    window.addEventListener('mouseout', () => isDrawing = false);
    limpiar.addEventListener('click', function(evt) {
        dibujar = false;
        ctx.clearRect(0, 0, cw, ch);
        Trazados.length = 0;
        puntos.length = 0;
      }, false);
    
}