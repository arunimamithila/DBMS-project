<?php
session_start();
// Include your database connection script
include 'db_conn.php';

// Get the data from the POST request
$rootcircle_name = $_POST['rootcircle_name'];
$study = $_POST['study'];
$lives = $_POST['lives'];
$coin_earned = $_POST['coin_earned'];
$total_rank = $_POST['total_rank'];

// Print all the data
echo "Data before insertion: ";
var_dump($rootcircle_name, $study, $lives, $coin_earned, $total_rank,$_SESSION['username']);

// Prepare a SQL statement to update the user's profile
$stmt = $conn->prepare("UPDATE user_table SET University = ?, study = ?, lives = ?, coin_earned = ?, total_rank = ? WHERE username = ?");

// Bind the data to the SQL statement
$stmt->bind_param('ssssss', $rootcircle_name, $study, $lives, $coin_earned, $total_rank, $_SESSION['username']);

// Execute the SQL statement
$stmt->execute();

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();
?>