<!-- ye meet our lawyer ke data ko delete karne ke kaam ayega-->
<?php
include('Config/db.php');
if (isset($_GET['deleteImgid'])) {
    $dlt = $_GET['deleteImgid'];
    $dltquery = "DELETE FROM `updateimage` WHERE Id = $dlt";
    $query = mysqli_query($conn, $dltquery);
    if ($query) {
        header("location: UpdateLawyer.php");
    }
}
mysqli_close($conn);
?>