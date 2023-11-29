<?php
include ('Config/db.php');

if(isset($_GET['paydltId'])){
    $dltId = $_GET['paydltId'];
    $dltquestquery = "DELETE FROM `payment` WHERE Id = '$dltId'";
    $dltquery = mysqli_query($conn,$dltquestquery);
    if($dltquery){
        header("location: usersPayment.php");
    }else{
        die(mysqli_error($conn));
    }
}

mysqli_close($conn);

?>