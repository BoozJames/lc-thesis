<?php
	include 'database_connection.php';
	
	$id = $_POST['id'];
	// $counAppntDate = $_POST['schedule_date'];
	$counAppntRemarks = $_POST['remarks'];
	
	$sql = "UPDATE lccounselingappointment SET remarks='$counAppntRemarks' WHERE id=$id ";
		if (!mysqli_query($dbConnection, $sql)) {
			
			header("Location: ../lcGuidanceOffice.php?error=Data has not been updated&idEvent=$id.");
			exit();
		}else{

			header("Location: ../lcGuidanceOffice.php?success=Data has been updated.&idEvent=$id");
			exit();
		}
?>