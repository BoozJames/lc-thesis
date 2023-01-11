<?php 
	
	include "database_connection.php";

	if (isset($_GET['medicalID'])) {
		
		$id = $_GET['medicalID'];
		$query="DELETE FROM lcmedicaltable WHERE id='$id' ";
     	$query_run=mysqli_query($dbConnection,$query);

     	if(!$query_run) {
     		header("Location: ../lcMedicalOffice.php?error=Data has not been deleted!");
            exit();
     	}else{
     		header("Location: ../lcMedicalOffice.php?success=Data has been deleted!");
            exit();
     	}

	}
?>