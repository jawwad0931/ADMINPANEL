<!-- yahan se hum meet our lawyer ko update karengay kiunke wo backend ka part hai aur 
frontend mai uska data retrieve hoga-->
<?php
session_start();
include('Config/db.php');
include('Authentication.php');
if (isset($_POST['AddImage'])) {
    // Sanitize input data to prevent SQL injection
    $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
    $Desc = mysqli_real_escape_string($conn, $_POST["Desc"]);
    
    // File upload security measures should be added here
    
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../img/" . $filename;

    // Query to insert the sanitized data
    $sql = "INSERT INTO updateimage (`image`, `Name`, `Desc`) VALUES ('$filename', '$Name', '$Desc')";

    // Execute the query and handle errors
    if (mysqli_query($conn, $sql)) {
        // Move the image to the "image" folder if the query was successful
        if (move_uploaded_file($tempname, $folder)) {
            header("location: UpdateLawyer.php");
        } else {
            die("Error: Unable to move the uploaded file.");
        }
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
?>
