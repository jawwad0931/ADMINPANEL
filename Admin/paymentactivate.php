<!-- this is payment activate button code -->
<?php
include('Config/db.php');
if (isset($_GET['PayactivateId'])) {
	$Active_Pay_id = $_GET['PayactivateId'];
	$Pay_Activate_run_sql = "UPDATE `payment` SET `Payment_status`= 1 WHERE Id='$Active_Pay_id'";
	mysqli_query($conn, $Pay_Activate_run_sql);
}
header("location: usersPayment.php");
?>