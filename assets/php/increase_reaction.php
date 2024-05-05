<?php
session_start();
// Include your database connection file
include 'db_conn.php';

// Get the comment ID from the POST data
$commentId = $_POST['id'];

// Get the user ID (you'll need to replace this with your actual user ID)
$username = $_SESSION['username'];

// Check if the user has already reacted to this comment
$stmt = $conn->prepare("SELECT * FROM reactions WHERE username = ? AND comment_id = ?");
$stmt->bind_param('si', $username, $commentId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    
} else {
    // The user has not reacted to this comment, so add their reaction
    $stmt = $conn->prepare("INSERT INTO reactions (username, comment_id) VALUES (?, ?)");
    $stmt->bind_param('si', $username, $commentId);
    $stmt->execute();

    // Increase the reaction count
    $stmt = $conn->prepare("UPDATE comments SET reactions = reactions + 1 WHERE id = ?");
    $stmt->bind_param('i', $commentId);
    $stmt->execute();
}
?>