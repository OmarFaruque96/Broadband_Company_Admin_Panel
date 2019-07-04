<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zsnetwork";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn) {
        //echo "Database is Connected successfully!";
    } else{
         die("Connection failed: " . $connection);
    }
?>