<!-- yahan testimonial ka data delete hoga -->
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