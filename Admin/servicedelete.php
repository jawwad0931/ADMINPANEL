<!-- services updated data delete code here Here we can delete specific id which we click -->
<?php
// includes file is here
include('Config/db.php');
if (isset($_GET['servicedltid'])) {
    $Servicedlt = $_GET['servicedltid'];
    $dltquery = "DELETE FROM `services` WHERE Id = $Servicedlt";
    $query = mysqli_query($conn, $dltquery);
    if ($query) {
        header("location: service.php");
    }
}
mysqli_close($conn);
?>