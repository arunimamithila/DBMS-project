<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unicircle";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$circle_name_to_search = $_GET['circle_name']; // Replace with the circle name you want to search for


$sql = "SELECT massages.*, user_table.profile_pic_link FROM massages 
        JOIN user_table ON massages.sender = user_table.username 
        WHERE destination = ? ORDER BY id ASC";

$stmt = $conn->prepare($sql);
$stmt->bind_param('s',  $circle_name_to_search);
$stmt->execute();
$result = $stmt->get_result();

$messages = array();

if ($result->num_rows > 0) {
    // Output data of each row
   
    while($row = $result->fetch_assoc()) {
        $messages[] = array(
            'incoming_username' => $row["sender"],
            'message' => $row["content"],
            'profile_image_link' => $row["profile_pic_link"]
        );
    }
  
} else {
    $messages[] = "No messages";
}

echo json_encode($messages);

$conn->close();
?>