<?php
if(isset($_FILES['file'])) {
    $file = $_FILES['file'];
    // Handle file upload process here
    // Example: move_uploaded_file($file['tmp_name'], 'uploads/' . $file['name']);
    echo "File(s) uploaded successfully.";
} else {
    echo "No files uploaded.";
}
?>
