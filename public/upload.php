<?php
    $conn = mysqli_connect("localhost","my_user","my_password","my_db");

    $lat = mysqli_real_escape_string($conn, $_POST['lat']);
    $lng = mysqli_real_escape_string($conn, $_POST['lng']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);

    $query = "INSERT INTO coordinates (id, lat, lng, time) VALUES (NULL, '$lat', '$lng', '$time')";
    $result = mysqli_query($conn, $query);

    mysqli_close($conn);
?>