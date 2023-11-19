<!-- Here insert query run which data i want to insert to apply here -->
<?php
session_start();
include('Config/db.php');
include('Authentication.php');
if (isset($_POST['AddService'])) {
    $Servicetype = $_POST["Servicetype"];
    $LawyerDesc = $_POST["LawyerDesc"];
    $fees = $_POST["fees"];
    $Imgfilename = $_FILES["Image"]["name"];
    $tempname = $_FILES["Image"]["tmp_name"];
    $folder = "../img/" . $Imgfilename;

    // query to insert use insert query here
    $sql = "INSERT INTO services (`Image`,`Servicetype`, `LawyerDesc`, `fees`) VALUES ('$Imgfilename', '$Servicetype', '$LawyerDesc' ,'$fees')";

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