<?php
session_start();
include 'db_conn.php';
$username = $_SESSION["username"];
// Get the posted data
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


// Prepare and execute the update query
$sql = "UPDATE user_table SET University = ?, study = ?, lives = ?, coin_earned = ?, total_rank = ? WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $request->rootCircle, $request->studies, $request->lives, $request->earned_coined, $request->rank, $username);
$stmt->execute();

// Check if the update was successful
if ($stmt->affected_rows > 0) {
  echo json_encode(['success' => true]);
  
} else {
  echo json_encode(['success' => false]);
}

$conn->close();
?>