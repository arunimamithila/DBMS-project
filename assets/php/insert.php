<?php
// Include the database connection file
include 'db_conn.php';

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


try {
    
    session_start();
    echo "File upload path: " . $_SESSION['fileUploadPath'];
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO projects (projectName, projectAdmin, rootCircle, projectSelect, startDate, endDate, earnCoins, projectDescription, fileUploadPath) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind the form values to the SQL statement
    $stmt->bind_param('sssssssss', $_POST['projectName'], $_POST['projectAdmin'], $_POST['rootCircle'], $_POST['projectSelect'], $_POST['startDate'], $_POST['endDate'], $_POST['earnCoins'], $_POST['projectDescription'], $_SESSION['fileUploadPath']);

    // Execute the SQL statement
    $stmt->execute();

   // echo "New record created successfully";
    header("Location: ..\..\admin\project.php");

} catch(Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$stmt->close();
$conn->close();
?>