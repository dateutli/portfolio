<?php
    $conn = mysqli_connect("localhost","admin","1123#Jpgr","test");

    $lat = mysqli_real_escape_string($conn, $_POST['lat']);
    $lng = mysqli_real_escape_string($conn, $_POST['lng']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);

    $query = "INSERT INTO coordinates (id, lat, lng, time) VALUES (NULL, '$lat', '$lng', '$time')";
    $result = mysqli_query($conn, $query);

    mysqli_close($conn);
?>