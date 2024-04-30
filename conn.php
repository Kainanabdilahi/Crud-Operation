<?php

// Create Connection 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "mydb";

$conn = new mysqli($serverName, $userName, $password, $dbName);
if ($conn->connect_error) {
    die("Connection error" . $conn->connect_error);
}else{
    // echo"Connection Success!";
}
