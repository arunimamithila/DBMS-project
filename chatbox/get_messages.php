<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chat_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT message FROM messages ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["message"] . "</p>";
    }
} else {
    echo "No messages";
}
$conn->close();
?>