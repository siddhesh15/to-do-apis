<?php

header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "id15901075_todolist15";
$password = "PR}Y!y&4u<lU+\c9";
$database = "id15901075_todo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
?>
