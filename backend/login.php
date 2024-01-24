<?php
// Include the database configuration
session_start();
include 'config.php';

// Retrieve user input
$email = $_POST['email'];
$password = $_POST['password'];

// Validate user credentials (basic example)
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    $_SESSION['Login'] = 'LOGIN';
    echo "success";
} else {
    // Login failed
    echo "failure";
}

$conn->close();
