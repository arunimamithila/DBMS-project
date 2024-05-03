<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();



// Finally, destroy the session.
session_destroy();

// Redirect to landing page
header("Location: ../../landing_page.html");
exit();
?>