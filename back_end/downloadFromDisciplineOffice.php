<?php

include "database_connection.php";

if (isset($_GET['id'])) {
	
	$id = $_GET['id'];

	$sql = "SELECT filename FROM lcreporttable WHERE id = '$id'";
	$query = mysqli_query($dbConnection, $sql);
	$result = mysqli_fetch_assoc($query);
	$file_name = implode(" ", $result);
	// echo $file_name;
	$file = '../PDF_Files/incident_report_forms/'.$file_name;
	$filename = '../PDF_Files/incident_report_forms/'.$file_name;

	// Header content type
	header('Content-type: application/pdf');

	header('Content-Disposition: inline; filename="' . $filename . '"');

	header('Content-Transfer-Encoding: binary');

	header('Accept-Ranges: bytes');

	// Read the file
	@readfile($file);
}
// Store the file name into variable


?>
