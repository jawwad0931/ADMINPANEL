<!-- this is payment deactivate code -->
<?php
// Include file here
include('Config/db.php');
if (isset($_GET['PaydeactivateId'])) {
	$Deactive_Pay_id = $_GET['PaydeactivateId'];
	$Pay_Deactivate_run_sql = "UPDATE `payment` SET `Payment_status`= 0 WHERE Id='$Deactive_Pay_id'";
	mysqli_query($conn, $Pay_Deactivate_run_sql);
}
header("location: usersPayment.php");
?>