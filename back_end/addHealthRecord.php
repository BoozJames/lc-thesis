<?php 
	
	include 'database_connection.php';

	if (isset($_POST['submit'])) {
		// code...

		$file_type = $_POST['fileType'];
		$student_lastname = $_POST['lastname'];
		$student_firstname = $_POST['firstname'];
		$student_middlename = $_POST['middlename'];
		$student_year = $_POST['gradeYear'];
		$student_course_section = $_POST['courseTrack'];
		$student_contact = $_POST['contactNumber'];
		// $status = "New";
		$sub_date = date("F d, Y");
		
		if ($file_type == "Dental Record") {
			// code...
			$file_name = $_FILES['filename']['name'];
			$file_tmp = $_FILES['filename']['tmp_name'];

			$sql = "INSERT INTO lcmedicaltable (student_lastname, student_firstname, student_middlename, student_year, student_course_section, student_number, filename, file_type, submission_date) VALUES ('$student_lastname', '$student_firstname', 'student_middlename', '$student_year', '$student_course_section', '$student_contact', '$file_name', '$file_type', '$sub_date')";
			if (!mysqli_query($dbConnection, $sql)) {
				// code...
				 echo "<script type='text/javascript'>
                    alert('Please submit PDF file only');
                     window.location.href='../lcMedicalOffice.php';
                    </script>";

			}else{
				move_uploaded_file($file_tmp, "../PDF_Files/dental_records/".$file_name);
				 echo "<script type='text/javascript'>
                    alert('Your form has been successfully submmited!');
                    window.location.href='../lcMedicalOffice.php';
                    </script>";
			}
		
		}else if ($file_type == "Medical Record") {
			// code...
			$file_name = $_FILES['filename']['name'];
			$file_tmp = $_FILES['filename']['tmp_name'];

			$sql = "INSERT INTO lcmedicaltable (student_lastname, student_firstname, student_middlename, student_year, student_course_section, student_number, filename, file_type, submission_date) VALUES ('$student_lastname', '$student_firstname', 'student_middlename', '$student_year', '$student_course_section', '$student_contact', '$file_name', '$file_type', '$sub_date')";
			if (!mysqli_query($dbConnection, $sql)) {
				// code...
				 echo "<script type='text/javascript'>
                    alert('Please submit PDF file only');
                     window.location.href='../lcMedicalOffice.php';
                    </script>";

			}else{
				move_uploaded_file($file_tmp, "../PDF_Files/medical_records/".$file_name);
				 echo "<script type='text/javascript'>
                    alert('Your form has been successfully submmited!');
                    window.location.href='../lcMedicalOffice.php';
                    </script>";
			}

	}
}
