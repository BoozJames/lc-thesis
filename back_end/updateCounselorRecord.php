<?php
	include 'database_connection.php';
	
	$id = $_POST['id'];
	$psych_date = $_POST['psychDate'];
	$psych_issues = $_POST['psychIssues'];
	$psych_remarks = $_POST['psychRemarks'];
	$routine_date = $_POST['routineDate'];
	$routine_issues = $_POST['routineIssues'];
	$routine_remarks = $_POST['routineRemarks'];
	$consult_date = $_POST['consultDate'];
	$consult_issues = $_POST['consultIssues'];
	$consult_remarks = $_POST['consultRemarks'];
	
	$sql = "UPDATE lccounselorrecordtable SET psych_date='$psych_date', psych_issues='$psych_issues', psych_remarks='$psych_remarks', routine_date='$routine_date', routine_issues='$routine_issues', routine_remarks='$routine_remarks', consult_date='$consult_date', consult_issues='$consult_issues', consult_remarks='$consult_remarks' WHERE id=$id ";
		if (!mysqli_query($dbConnection, $sql)) {
			
			header("Location: ../lcGuidanceOffice.php?error=Data has not been updated&idEvent=$id.");
			exit();
		}else{

			header("Location: ../lcGuidanceOffice.php?success=Data has been updated.&idEvent=$id");
			exit();
		}
?>