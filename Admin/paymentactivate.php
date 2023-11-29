<?php 
include('Config/db.php');
// Check if id is set or not if true toggle, 
	// else simply go back to the page 
	if (isset($_GET['PayactivateId'])){ 

		// Store the value from get to a 
		// local variable "course_id" 
		$Active_Pay_id=$_GET['PayactivateId']; 

		// SQL query that sets the status 
		// to 1 to indicate activation. 
		$Pay_Activate_run_sql="UPDATE `payment` SET `Payment_status`= 1 WHERE Id='$Active_Pay_id'"; 

		// Execute the query 
		mysqli_query($conn,$Pay_Activate_run_sql); 
	} 

	// Go back to course-page.php 
	header("location: usersPayment.php"); 
?>

