<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "cleaning-aadarsh";

$servername = "localhost";
$username = "u509391043_adarshberojgar";
$password = "Adarshberojgar@24";
$database = "u509391043_adarshberojgar";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    die("Connected successfully.");
}


$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {


   echo  $row['datetime'];

}
?>