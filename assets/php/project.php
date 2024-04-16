<?php
// Function to fetch progress from the database
function fetch_progress_from_database() {
    // Assuming you've already established a connection to your database
    $host = 'localhost'; // Change this to your database host
    $username = 'username'; // Change this to your database username
    $password = ''; // Change this to your database password
    $database = 'Uni-Circle'; // Change this to your database name

    // Establish a connection to the database
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch progress from your database table
    $sql = "SELECT progress_percentage FROM your_table WHERE some_condition"; // Modify this query based on your database schema
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the progress percentage from the first row
        $row = $result->fetch_assoc();
        $progress_percentage = $row["progress_percentage"];

        // Close the database connection
        $conn->close();

        return $progress_percentage;
    } else {
        // If no rows are returned, return a default value
        return 0;
    }
}

// Output progress percentage as JSON
echo json_encode(['percentage' => fetch_progress_from_database()]);



// Fetch project details from your database table
$sql = "SELECT issues, resolved, comments FROM project_details"; // Modify this query based on your database schema
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the project details from the first row
    $row = $result->fetch_assoc();
    $project_details = $row;

    // Close the database connection
    $conn->close();

    // Output project details as JSON
    echo json_encode($project_details);
} else {
    // If no rows are returned, return an empty object
    echo json_encode([]);
}




// Fetch project mates' image URLs from your database table
$sql = "SELECT image_url FROM project_mates"; // Modify this query based on your database schema
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the image URLs from the result set
    $image_urls = [];
    while ($row = $result->fetch_assoc()) {
        $image_urls[] = $row["image_url"];
    }

    // Close the database connection
    $conn->close();

    // Output image URLs as JSON
    echo json_encode($image_urls);
} else {
    // If no rows are returned, return an empty array
    echo json_encode([]);
}
?>
