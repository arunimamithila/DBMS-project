<?php
session_start();
$username = $_SESSION["username"];
include 'db_conn.php';

// Check if file was uploaded
if(isset($_FILES['profilePicture'])) {
    $file_name = "proPic" . $username . "." . pathinfo($_FILES['profilePicture']['name'], PATHINFO_EXTENSION);
    $file_tmp = $_FILES['profilePicture']['tmp_name'];

    // Move the uploaded file to the 'uploads' directory
    move_uploaded_file($file_tmp, "../../uploads/" . $file_name);

    $profile_pic_link = "../uploads/" . $file_name;
    $_SESSION['$profilePic']= $profile_pic_link;

    // Prepare and execute the update query
    $sql = "UPDATE user_table SET profile_pic_link = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $profile_pic_link, $username);
    $stmt->execute();
    header("Location: ../../admin/profile.php");
}

$conn->close();
?>