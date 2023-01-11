<?php 
	
	include "database_connection.php";

	if (isset($_GET['medicalID'])) {
		
		$id = $_GET['medicalID'];
		$query="DELETE FROM lcstudentsheettable WHERE id='$id' ";
     	$query_run=mysqli_query($dbConnection,$query);

     	if(!$query_run) {
     		header("Location: ../lcGuidanceOffice.php?error=Data has not been deleted!");
            exit();
     	}else{
     		header("Location: ../lcGuidanceOffice.php?success=Data has been deleted!");
            exit();
     	}

	}
?>