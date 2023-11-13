<?php
include ('Config/db.php');

if(isset($_GET['deleteid'])){
    $dlt = $_GET['deleteid'];
    $dltquery = "DELETE FROM `user-table` WHERE Id = $dlt";
    $query = mysqli_query($conn,$dltquery);
    if($query){
        header("location: Register.php");
    }
}

mysqli_close($conn);

?>