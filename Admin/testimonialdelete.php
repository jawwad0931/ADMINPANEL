<!-- services updated data delete code here Here we can delete specific id which we click -->
<?php
// includes file is here
include('Config/db.php');
if (isset($_GET['testimonialdltid'])) {
    $Testidlt = $_GET['testimonialdltid'];
    $dltquery = "DELETE FROM `testimonial` WHERE Id = $Testidlt";
    $query = mysqli_query($conn, $dltquery);
    if ($query) {
        header("location: testimonial.php");
    }
}
mysqli_close($conn);
?>