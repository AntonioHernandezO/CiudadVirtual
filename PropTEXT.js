// document.write('<div id=editor-container ></div>');
// var quill = new Quill('#editor-container', {
//     modules: {
//       toolbar: [
//         [{ header: [1, 2,3, false] }],
//         ['bold', 'italic', 'underline'],
//         ['image', 'code-block']
//       ]
//     },
//     placeholder: 'Compose an epic...',
//     theme: 'snow' // or 'bubble'
//   });
//    const shape = new Konva.Image({
//     x: 50,
//     y: 10,
//     draggable: true,
//     stroke: 'blue',
//     scaleX: 1 / window.devicePixelRatio,
//     scaleY: 1 / window.devicePixelRatio
//   });
//   layer.add(shape);

//   layer.draw();

//   function renderText() {
//     // convert DOM into image
//     html2canvas(document.querySelector('.ql-editor'), {
//       backgroundColor: 'rgba(0,0,0,0)'
//     }).then(canvas => {
//       // show it inside Konva.Image
//       shape.image(canvas);
//       layer.batchDraw();
//     });
//   }

//   // batch updates, so we don't render text too frequently
//   var timeout = null;
//   function requestTextUpdate() {
//     if (timeout) {
//       return;
//     }
//     timeout = setTimeout(function() {
//       timeout = null;
//       renderText();
//     }, 500);
//   }

//   // render text on all changes
//   quill.on('text-change', requestTextUpdate);
//   // make initial rendering
//   renderText();