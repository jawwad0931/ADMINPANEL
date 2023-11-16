<?php
session_start();
include('Config/db.php');
include('Authentication.php');
if (isset($_POST['AddImage'])) {
    $Name = $_POST["Name"];
    $Desc = $_POST["Desc"];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../img/" . $filename;

    // query to insert the submitted data
    $sql = "INSERT INTO updateimage (`image`, `Name`, `Desc`) VALUES ('$filename', '$Name', '$Desc')";


    // function to execute above query
    mysqli_query($conn, $sql);

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {
        header("location: UpdateLawyer.php");
    } else {
        echo "<script>alert('Errors Found');</script>";
        header("location: imagecode.php");
    }
}

?>