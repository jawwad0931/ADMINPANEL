<!-- payment ka code yahan hai payment se data wahan jaa raha hai -->
<?php
session_start();
?>
<!-- payment code -->
<?php
include("Frontenddb/db.php");
if (isset($_POST['PaymentSubmit'])) {
    $Full_Name = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $cardNumber = $_POST['cardNumber'];
    $Lawyer_Name = $_POST['Lawyer_Name'];
    $City = $_POST['City'];
    $ZipCode = $_POST['ZipCode'];
    $PaymentMode = $_POST['PaymentMode'];
    $slt = "INSERT INTO `payment` (`Full_Name`, `Email`, `cardNumber`, `Lawyer_Name`, `City`, `ZipCode`, `PaymentMode`) 
    VALUES ('$Full_Name', '$Email', '$cardNumber', '$Lawyer_Name', '$City', '$ZipCode', '$PaymentMode')";
    $query_run = mysqli_query($conn, $slt);
    if ($query_run) {
        $_SESSION['status'] = "Payment Successfull";
        header("location: Hire.php");
    } else {
        $_SESSION['status'] = "Payment Rejected";
        header("location: Hire.php");
    }
}
?>