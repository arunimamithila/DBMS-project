<?php
// Include your database connection file
include 'db_conn.php';

// Get the comment ID from the POST data
$commentId = $_POST['id'];

// Prepare an SQL statement to increase the reaction count
$stmt = $conn->prepare("UPDATE comments SET reactions = reactions + 1 WHERE id = ?");
$stmt->bind_param('i', $commentId);

// Execute the SQL statement
$stmt->execute();
?>