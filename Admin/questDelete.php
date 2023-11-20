<?php
include('Config/db.php');

if (isset($_GET['questdltId'])) {
    $id = $_GET['questdltId'];

    // Assuming $conn is your database connection
    $dltquestquery = "DELETE FROM `user-table2` WHERE Id = $id";
    $Run_quest_query = mysqli_query($conn , $dltquestquery);
    if ($Run_quest_query) {
        header("location: userquest.php");
    } else {
        echo mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
