<?php 
include('Config/db.php');
// Check if id is set or not if true toggle, 
	// else simply go back to the page 
	if (isset($_GET['deactivateId'])){ 

		// Store the value from get to a 
		// local variable "course_id" 
		$Deactive_Apoint_id=$_GET['deactivateId']; 

		// SQL query that sets the status 
		// to 1 to indicate activation. 
		$Deactivate_run_sql="UPDATE `appointlawyer` SET `status`= 0 WHERE Id='$Deactive_Apoint_id'"; 

		// Execute the query 
		mysqli_query($conn,$Deactivate_run_sql); 
	} 

	// Go back to course-page.php 
	header("location: AppointLawyer.php"); 
?>
