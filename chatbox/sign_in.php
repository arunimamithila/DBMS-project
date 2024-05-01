<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
        echo 'OK';
    } else {
        http_response_code(400);
        echo 'Username is required';
    }
}
?>