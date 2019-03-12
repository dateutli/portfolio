<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>David Teutli - Portfolio - Trackr</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                TRACKR
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Back to Portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row mt-2">

            <div class="col-md-6 offset-md-3 px-1">
                <div class="card mb-2">
                    <div class="card-header bg-info text-white p-1 text-center">
                        Share Location
                    </div>
                    <div class="card-body">
                        <label>
                            Frequency
                        </label>
                        <select class="form-control" id="frequency">
                            <option value="5000">Every 5 seconds</option>
                            <option value="10000">Every 10 seconds</option>
                            <option value="15000">Every 15 seconds</option>
                            <option value="30000">Every 30 seconds</option>
                            <option value="60000">Every 60 seconds</option>
                            <option value="300000">Every  5 minutes</option>
                            <option value="600000">Every 10 minutes</option>
                            <option value="900000">Every 15 minutes</option>
                            <option value="1800000">Every 30 minutes</option>
                        </select>
                        <button class="btn btn-success btn-block mt-1" id="share">
                            <i class="fas fa-map-marker-alt"></i>
                            Share
                        </button>

                        <button class="btn btn-warning btn-block mt-1" id="stop" disabled>
                            <i class="fas fa-map-marker-alt"></i>
                            Stop
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        var interval;
        var coordinates = [];

        var uploadGPS = () => {

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

        $('#share').click(function(){
            document.getElementById("stop").disabled = false;
            document.getElementById("share").disabled = true;
            interval = setInterval(uploadGPS, $('#frequency').val());
        });

        $('#stop').click(function(){
            document.getElementById("stop").disabled = true;
            document.getElementById("share").disabled = false;
            clearInterval(interval);
        });
    </script>
</body>
</html>