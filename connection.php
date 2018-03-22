<?php
    $hostName = "your_hostname";
    $userName = "your_username";
    $password = "your_password";
    $databaseName = "secret_diary";
    $conn = mysqli_connect($hostName, $userName, $password, $databaseName);

    if(!$conn) {
        die("Connection Error: ".mysqli_connect_error($conn));
    }
?>
