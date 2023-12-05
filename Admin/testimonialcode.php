<!-- yahan testimonial se form ki madad se data ayega -->
<?php
session_start();
// Include file is here
include('Config/db.php');
include('Authentication.php');
if (isset($_POST['AddTesti'])) {
    $LawyerName = $_POST["LawyerName"];
    $Experience = $_POST["Experience"];
    // query to insert use insert query here
    $sql = "INSERT INTO testimonial (`LawyerName`,`Experience`) VALUES ('$LawyerName', '$Experience')";
    // function successfully execute above query
    $testiResult = mysqli_query($conn, $sql);

    // Add the image to the "image" folder"
    if ($testiResult) {
        header("location: testimonial.php");
    } else {
        echo "<script>alert('Errors Found');</script>";
        header("location: testimonial.php");
    }
}
?>