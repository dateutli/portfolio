<!DOCTYPE html>
<html>
<body>

<p>Count numbers: <output id="result"></output></p>
<button onclick="startWorker()">Start Worker</button>
<button onclick="stopWorker()">Stop Worker</button>

<script>
var w;

function startWorker() {
  if (typeof(Worker) !== "undefined") {
    if (typeof(w) == "undefined") {
      w = new Worker("test.js");
    }
    w.onmessage = function(event) {
      document.getElementById("result").innerHTML = event.data;

        navigator.geolocation.getCurrentPosition(function(position) {
            if(window.navigator.onLine){
                $.post('upload.php', {
                    time: (new Date).toUTCString(),
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                })
            }
        });

    };
  } else {
    document.getElementById("result").innerHTML = "Sorry! No Web Worker support.";
  }
}

function stopWorker() {
  w.terminate();
  w = undefined;
}
</script>

</body>
</html> 