<?php

    $servername = "localhost";
    $username = "id14361803_root";
    $password = "+Dt7d|3jXz==>|&4";
    $dbname = "id14361803_dane";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Coś nie pykło: " . mysqli_connect_error());
    }

?>