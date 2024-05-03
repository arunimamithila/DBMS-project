<?php
session_start();
include 'db_conn.php';
$username = $_SESSION['username'];
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $circle_name = $_POST['circle_name'];
    $university_name = $_POST['university_name'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    // Handle file uploads
    $circle_img = $username . "_" . $_FILES['circle_img']['name'];
    $university_img = $university_name . "_" . $_FILES['university_img']['name'];


    // Upload directory
    $target_dir = "../../uploads/";

    // Move uploaded files to the target directory
    move_uploaded_file($_FILES["circle_img"]["tmp_name"], $target_dir . $circle_img);
    move_uploaded_file($_FILES["university_img"]["tmp_name"], $target_dir . $university_img);

    // Prepare image URLs
    $circle_img_url = "../uploads/" . $circle_img;
    $university_img_url = "../uploads/" . $university_img;

    // Prepare an SQL statement
    $stmt = $conn->prepare("INSERT INTO circle_table (owner, circle_image_url, circle_name, university_name, uni_img, category, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $username, $circle_img_url, $circle_name, $university_name, $university_img_url, $category, $description);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../../admin/circle.php");
        echo "New circle created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>