<?php
include_once 'config.php';

// Check if the 'id' parameter is set in the POST request
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Your SQL query to delete the row from the 'products' table
    $query = "DELETE FROM products WHERE id = $id";

    // Execute the query using $conn->query
    $result = $conn->query($query);

    if ($result) {
        // Return success response
        $response = 'success';
    } else {
        // Return failure response
        $response = 'Some Error Occurred';
    }
} else {
    // Return failure response if 'id' parameter is not set
    $response = 'Some Error Occurred';
}

// Send JSON response
echo $response;
