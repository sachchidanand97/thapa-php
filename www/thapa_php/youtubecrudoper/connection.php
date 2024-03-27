<?php
    $servername = "172.18.0.1";
    $username = "dbuser";
    $password = "dbpass";
    $db = "dbase";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    // Check connection
    if (!$conn) {
        // If connection fails, display the error message
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // If connection is successful, print a success message
        echo "Connected successfully";
    }
?>