<?php

$dbConnection = mysqli_connect("localhost","root", "","lcproject");
	if(mysqli_connect_errno()){
		echo "Failed to connecy to MySQL: " . mysqli_connect_error() ;
	}else{
		// echo "connection complete";
	}
?>