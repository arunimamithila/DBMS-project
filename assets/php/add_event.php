<?php
include 'db_conn.php';
session_start();
// Get the submitted data
$username = $_SESSION['username'];
$event_name = $_POST['event_name'];
$event_time_from = $_POST['event_time_from'];
$event_time_to = $_POST['event_time_to'];

// Insert the data into the database
$sql = "INSERT INTO events (username, event_name, event_time_from, event_time_to)
VALUES ('$username', '$event_name', '$event_time_from', '$event_time_to')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Retrieve the data from the database
$sql = "SELECT username, event_name, event_time_from, event_time_to FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Username: " . $row["username"]. " - Event: " . $row["event_name"]. " - From: " . $row["event_time_from"]. " - To: " . $row["event_time_to"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>