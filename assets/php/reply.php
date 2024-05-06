<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment_id = $_POST['comment_id'];
    $username = $_SESSION['username'];
    $reply = $_POST['reply'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $topic_id = $_POST['topic_id'];
    include 'db_conn.php';

    $stmt = $conn->prepare("INSERT INTO replies (comment_id, username, reply) VALUES (?, ?, ?)");
    $stmt->bind_param('iss', $comment_id, $username, $reply);
    $stmt->execute();

    // URL encode the title and description to ensure they are safe to include in a URL
    $title = urlencode($title);
    $description = urlencode($description);

    // Include the title, description, and topic_id as URL parameters
    header("Location:../../admin/topicdiscuss.php?title=$title&description=$description&topic_id=$topic_id");
    exit;
}
?>