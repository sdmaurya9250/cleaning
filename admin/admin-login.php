<?php
require_once('../connection.php');


// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // SQL injection prevention (you should use prepared statements)
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // User found, redirect to a dashboard or another page
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit();
    } else {
        // Invalid credentials
        $error_message = "Invalid email or password.";
    }
}

$conn->close();
?>