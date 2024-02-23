<?php

require_once('connection.php');




// Fetch records from the "digitech" table
// $selectQuery = "SELECT * FROM appointment";
// $result = mysqli_query($conn, $selectQuery);

// Assuming you have already established a database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $datetime = $_POST['datetime'];

    // Insert data into the database
    // Note: This is just a basic example, please use prepared statements for security
    $sql = "INSERT INTO appointments (name, phone, service, datetime) VALUES ('$name', '$phone', '$service', '$datetime')";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(["status" => "success", "message" => "Appointment made successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Appointment made successfully"]);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
