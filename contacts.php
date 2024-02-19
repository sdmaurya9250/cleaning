<?php

require_once('connection.php');




// Fetch records from the "digitech" table
// $selectQuery = "SELECT * FROM appointment";
// $result = mysqli_query($conn, $selectQuery);

// Assuming you have already established a database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if (mysqli_query($conn, $sql)) {
        echo json_encode(["status" => "success", "message" => "Contact saved successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Some thing went wrong."]);
    }

    // Close database connection
    mysqli_close($conn);
}
?>
