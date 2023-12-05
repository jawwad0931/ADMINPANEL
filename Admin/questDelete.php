<!-- this code is delete user queries jo ke frontend ke contact walay page se data layega -->
<?php
// Includes files are here
include('Config/db.php');
if (isset($_GET['questdltId'])) {
    $dltId = $_GET['questdltId'];
    $dltquestquery = "DELETE FROM `user-table2` WHERE Id = '$dltId'";
    $dltquery = mysqli_query($conn, $dltquestquery);
    if ($dltquery) {
        header("location: userquest.php");
    } else {
        die(mysqli_error($conn));
    }
}
mysqli_close($conn);
?>