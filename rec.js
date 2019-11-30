
var elementToRecord = document.getElementById('container');
var canvas2d = document.getElementById('background-canvas');
var context = canvas2d.getContext('2d');
canvas2d.width = elementToRecord.clientWidth;
canvas2d.height = elementToRecord.clientHeight;
var isRecordingStarted = false;
var isStoppedRecording = false;
function getRandomColor() {
  var letters = '0123456789ABCDEF';
  var color = '#';
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}
(function looper() {
    if(!isRecordingStarted) {
        return setTimeout(looper, 500);
    }
    html2canvas(elementToRecord).then(function(canvas) {
        context.clearRect(0, 0, canvas2d.width, canvas2d.height);
        context.drawImage(canvas, 0, 0, canvas2d.width, canvas2d.height);
        if(isStoppedRecording) {
            return;
        }
        requestAnimationFrame(looper);
    });
})();
var recorder = new RecordRTC(canvas2d, {
    type: 'canvas'
});
document.getElementById('btn-start-recording').onclick = function() {
    this.disabled = true;
    
    isStoppedRecording =false;
    isRecordingStarted = true;
    recorder.startRecording();
    document.getElementById('btn-stop-recording').disabled = false;
};
document.getElementById('btn-stop-recording').onclick = function() {
    this.disabled = true;
    
    recorder.stopRecording(function() {
        isRecordingStarted = false;
        isStoppedRecording = true;
        var blob = recorder.getBlob();
        document.getElementById('preview-video').srcObject = null;
        document.getElementById('preview-video').src = URL.createObjectURL(blob);
        document.getElementById('preview-video').parentNode.style.display = 'block';
        elementToRecord.style.display = 'none';
         window.open(URL.createObjectURL(blob));
    });
};

