<?php
// Include your database connection file
include 'db_conn.php';
if (!isset($_POST['query'])) {
    echo json_encode(array('error' => 'No query provided'));
    exit;
}
// Get the search query from the POST data
$query = $_POST['query'];

// Prepare an SQL statement to search your database
$stmt = $conn->prepare("SELECT * FROM circle_table WHERE circle_name LIKE ? OR description LIKE ? ");
$searchTerm = '%' . $query . '%';
$stmt->bind_param('ss', $searchTerm, $searchTerm); // bind the same $searchTerm twice

// Execute the SQL statement
$stmt->execute();
$result = $stmt->get_result();

// Prepare an array to hold the results
$data = array();

// Loop through the results and add each one to the data array
while ($row = $result->fetch_assoc()) {
    $data[] = array(
        'circle_name' => $row['circle_name'],
        'circle_image_url' => $row['circle_image_url'] // replace this with the actual column name for the image URL
    );
}

// Output the data array as a JSON string
echo json_encode($data);
?>