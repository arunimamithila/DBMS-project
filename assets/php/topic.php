<?php
session_start();
include 'db_conn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $topic_name = $_POST['topic_name'];
    $description = $_POST['description'];

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO topic_table (topic_name, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $topic_name, $description);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../../admin/discussionhome.html"); // Redirect to desired page after successful insertion
        exit(); // Make sure to exit after redirection
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
