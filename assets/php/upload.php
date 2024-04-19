

 <?php
  session_start();
 



// Attempt to move the uploaded file to your desired location
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)&&$_SESSION['loggedin'] == true) {
    $target_dir = "../../uploads/";
$username = $_SESSION[$username]; // replace with actual username
$projectname = $_POST['projectname']; // replace with actual project name
$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
$target_file = $target_dir . $username . '_' . $projectname . '.' . $extension;

    $_SESSION['fileUploadPath'] = $target_file;
    echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    header("Location: ..\..\admin\homePage.html");
} else {
    echo "Sorry, there was an error uploading your file.";
}
?> 