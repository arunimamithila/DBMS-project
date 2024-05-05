<?php
session_start(); // Start the session

// Get the username from the session
$username = $_SESSION['username'];

// Get the comment and topic ID from the POST data
$content = $_POST['content'];
$topic_id = $_POST['topic_id'];
$title = $_POST['title'];
$description = $_POST['description'];

include 'db_conn.php'; // Include your database connection file

// Get the current time
$post_date = date('Y-m-d H:i:s');

$stmt = $conn->prepare("INSERT INTO comments (username, comment, topic_id, post_date) VALUES (?, ?, ?, ?)");
$stmt->bind_param('ssis', $username, $content, $topic_id, $post_date);
$stmt->execute();


header("Location: ../../admin/topicdiscuss.php?topic_id=" . urlencode($topic_id) . "&title=" . urlencode($title) . "&description=" . urlencode($description));

exit;
?>