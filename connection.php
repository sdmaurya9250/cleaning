<?php


// $servername = "localhost";
// $username = "admin";
// $password = "1234";
// $database = "cleaning";
$servername = "localhost";
$username = "root";
$password = "";
$database = "cleaning-aadarsh";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}