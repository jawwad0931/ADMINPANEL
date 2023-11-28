<?php
 session_start(); 
?>
<?php 
    include("db.php");

    if(isset($_POST['PaymentSubmit'])){
        $full_name = $_POST['full_name'];
        $service = $_POST['service'];
        $AppointDate = date('Y-m-d', strtotime($_POST['AppointDate']));


        $slt = "INSERT INTO `appointlawyer` (`FullName`, `Serivce`, `AppointDate`) VALUES ('$full_name', '$service', '$AppointDate')";

        $query_run = mysqli_query($conn , $slt);

        if ($query_run) {
            $_SESSION['status'] = "Data inserted";
            header("location: Hire.php");
        } else {
            $_SESSION['status'] = "Data Not inserted";
            header("location: Hire.php");
        }
        
    }



?>