<?php
// Include the database configuration
include('config.php');

// Check if form is submitted using POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form fields
    if (empty($_POST['title']) || empty($_POST['price']) || empty($_POST['description'])) {
        echo "Please fill in all required fields.";
        exit(); // Stop further execution if fields are empty
    }

    // Validate image field
    if (empty($_FILES['form__img-upload']['name'])) {
        echo "Please select an image.";
        exit(); // Stop further execution if image is not selected
    }

    // Process other form fields
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Process file upload
    $targetDir = "../uploads/";
    $targetFile = $targetDir . basename($_FILES['form__img-upload']['name']);

    if (move_uploaded_file($_FILES['form__img-upload']['tmp_name'], $targetFile)) {
        // File upload success, you can save the file path or perform other actions

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO products (title, price, description, image_path) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $price, $description, $targetFile);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Form submitted successfully!";
        } else {
            echo "Error inserting data into the database.";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error uploading file.";
    }
} else {
    echo "Invalid request method.";
}

// Close the database connection
$conn->close();
?>
