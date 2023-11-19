<?php
include ('Config/db.php');

if(isset($_GET['servicedltid'])){
    $Servicedlt = $_GET['servicedltid'];
    $dltquery = "DELETE FROM `services` WHERE Id = $Servicedlt";
    $query = mysqli_query($conn, $dltquery);
    if($query){
        header("location: service.php");
    }
}

mysqli_close($conn);

?>