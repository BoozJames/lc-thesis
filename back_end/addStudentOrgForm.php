<?php 
	
	include 'database_connection.php';

	if (isset($_POST['addActivity'])) {
		// code...

		$file_type = $_POST['fileType'];
		$student_lastname = $_POST['studentLastname'];
		$student_firstname = $_POST['studentFirstname'];
		$student_middlename = $_POST['studentMiddlename'];
		$student_year = $_POST['studentYear'];
		$student_course_section = $_POST['studentCourse'];
		$student_contact = $_POST['studentNumber'];
		$status = "New";
		$sub_date = date("F d, Y");
		
		// if ($file_type == "Student Information Sheet") {
			// code...
			$file_name = $_FILES['filename']['name'];
			$file_tmp = $_FILES['filename']['tmp_name'];

			$sql = "INSERT INTO lcstudentorgtable (file_type, student_lastname, student_firstname, student_middlename, student_year, student_course_section, student_number, filename, status, submission_date) VALUES ('$file_type', '$student_lastname', '$student_firstname', 'student_middlename', '$student_year', '$student_course_section', '$student_contact', '$file_name', '$status', '$sub_date')";
			if (!mysqli_query($dbConnection, $sql)) {
				// code...
				 echo "<script type='text/javascript'>
                    alert('Please submit PDF file only');
                     window.location.href='../lcHomePage.php';
                    </script>";

			}else{
				move_uploaded_file($file_tmp, "../PDF_Files/student_org_activity_forms/".$file_name);
				 echo "<script type='text/javascript'>
                    alert('Your form has been successfully submmited!');
                    window.location.href='../lcHomePage.php';
                    </script>";
			}
	
		// }else{
		// 	echo "<script type='text/javascript'>
  //                   alert('Please select which file you want to submit');
  //                   window.location.href='../lcHomePage.php';
  //                   </script>";
		// }

	}
?>