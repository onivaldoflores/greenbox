<?php
    $servername = "localhost";
    $database = "greenbox_db";
    $username = "root";
    $password = ""; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    /*
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }    
    echo "Connected successfully";
    */
    //mysqli_close($conn);
?>