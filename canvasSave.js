// var elementToRecord = document.getElementById('container');
// var canvas2d = document.getElementById('background-canvas');
// var context = canvas2d.getContext('2d');
// canvas2d.width = elementToRecord.clientWidth;
// canvas2d.height = elementToRecord.clientHeight;
// var isRecordingStarted = false;
// var isStoppedRecording = false;
// function getRandomColor() {
//   var letters = '0123456789ABCDEF';
//   var color = '#';
//   for (var i = 0; i < 6; i++) {
//     color += letters[Math.floor(Math.random() * 16)];
//   }
//   return color;
// }
// (function looper() {
//     if(!isRecordingStarted) {
//         return setTimeout(looper, 500);
//     }
//     html2canvas(elementToRecord).then(function(canvas) {
//         context.clearRect(0, 0, canvas2d.width, canvas2d.height);
//         context.drawImage(canvas, 0, 0, canvas2d.width, canvas2d.height);
//         if(isStoppedRecording) {
//             return;
//         }
//         requestAnimationFrame(looper);
//     });
// })();
// var recorder = new RecordRTC(canvas2d, {
//     type: 'canvas'
// });
// document.getElementById('record').onclick = function() {
//     this.disabled = true;
    
//     isStoppedRecording =false;
//     isRecordingStarted = true;

//     navigator.mediaDevices.getUserMedia({
// 	video: {
// 		width: {
// 			exact: 3840
// 		},
// 		heigth: {
// 			exact: 2160
// 		}
// 	}
// }).then(function(fourKCameraStream) {
// 	let recorder = RecordRTC(fourKCameraStream, {
// 		type: 'video'
// 	});
// 	recorder.startRecording();
// });

// navigator.mediaDevices.getUserMedia({
// 	video: {
// 		width: {
// 			exact: 1920
// 		},
// 		heigth: {
// 			exact: 1080
// 		}
// 	}
// }).then(function(TenEightyCameraStream) {
// 	let recorder = RecordRTC(TenEightyCameraStream, {
// 		type: 'video'
// 	});
// 	recorder.startRecording();
// });
//     recorder.startRecording();
//     document.getElementById('stop').disabled = false;
// };
// document.getElementById('stop').onclick = function() {
//     this.disabled = true;
    
//     recorder.stopRecording(function() {
//         isRecordingStarted = false;
//         isStoppedRecording = true;
//         var blob = recorder.getBlob();
//         document.getElementById('preview-video').srcObject = null;
//         document.getElementById('preview-video').src = URL.createObjectURL(blob);
//         document.getElementById('preview-video').parentNode.style.display = 'block';
//         elementToRecord.style.display = 'none';
//          window.open(URL.createObjectURL(blob));
//     });
// };

