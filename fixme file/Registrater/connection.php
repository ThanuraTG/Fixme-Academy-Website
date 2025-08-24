<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $db_name = "fixme_academy";

    $conn = new mysqli($servername, $username, $password, $db_name);
    if($conn->connect_error){
        die("Connect failed".$conn->connect_error);
    }
    
?>