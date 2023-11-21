<?php 
include('Config/db.php');
// Check if id is set or not if true toggle, 
	// else simply go back to the page 
	if (isset($_GET['activateId'])){ 

		// Store the value from get to a 
		// local variable "course_id" 
		$Apoint_id=$_GET['activateId']; 

		// SQL query that sets the status 
		// to 1 to indicate activation. 
		$Activate_run_sql="UPDATE `appointlawyer` SET `status`= 1 WHERE Id='$Apoint_id'"; 

		// Execute the query 
		mysqli_query($conn,$Activate_run_sql); 
	} 

	// Go back to course-page.php 
	header("location: AppointLawyer.php"); 
?>
