<?php

function getNestedReplies($commentId, $conn) {
    // Prepare SQL statement to fetch nested replies
    $stmt = $conn->prepare("SELECT * FROM comments WHERE id = ?");
    $stmt->bind_param('i', $commentId);
    
    // Execute the SQL statement
    $stmt->execute();
    
    // Get the result of the SQL statement
    $result = $stmt->get_result();
    
    // Fetch nested replies as an associative array
    $nestedReplies = $result->fetch_all(MYSQLI_ASSOC);
    
    // Return the fetched nested replies
    return $nestedReplies;
}

?>
