<?php
session_start();
include('Config/db.php');
include('Authentication.php');
if (isset($_POST['AddService'])) {
    $servicetype = $_POST["servicetype"];
    $description = $_POST["description"];
    $fees = $_POST["fees"];
    $Imgfilename = $_FILES["Image"]["name"];
    $tempname = $_FILES["Image"]["tmp_name"];
    $folder = "../img/" . $Imgfilename;

    // query to insert use insert query here
    $sql = "INSERT INTO services (`Image`,`Servicetype`, `description`, `fees`) VALUES ('$Imgfilename', '$servicetype', '$description' ,'$fees')";

    // function successfully execute above query
    mysqli_query($conn, $sql);

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {
        header("location: service.php");
    } else {
        echo "<script>alert('Errors Found');</script>";
        header("location: service.php");
    }
}

?>