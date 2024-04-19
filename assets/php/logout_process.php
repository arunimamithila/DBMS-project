<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!

// Finally, destroy the session.
session_destroy();

// Redirect to landing page
header("Location: ../../landing_page.html");
exit();
?>