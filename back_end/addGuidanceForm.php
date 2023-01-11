<?php 
	
	include 'database_connection.php';

	if (isset($_POST['addStudentInfo'])) {
		// code...

		$file_type = $_POST['fileType'];
		$student_lastname = $_POST['studentLastname'];
		$student_firstname = $_POST['studentFirstname'];
		$student_middlename = $_POST['studentMiddlename'];
		$student_year = $_POST['studentYear'];
		$student_course_section = $_POST['studentCourse'];
		$student_contact = $_POST['studentNumber'];
		$sub_date = date("F d, Y");
		$status = "New";

		$student_section = $_POST['studentSection'];
		$psych_date = $_POST['psychDate'];
		$psych_issues = $_POST['psychIssues'];
		$psych_remarks = $_POST['psychRemarks'];
		$routine_date = $_POST['routineDate'];
		$routine_issues = $_POST['routineIssues'];
		$routine_remarks = $_POST['routineRemarks'];
		$consult_date = $_POST['consultDate'];
		$consult_issues = $_POST['consultIssues'];
		$consult_remarks = $_POST['consultRemarks'];
		
		if ($file_type == "Student Information Sheet") {
			// code...
			$file_name = $_FILES['filename']['name'];
			$file_tmp = $_FILES['filename']['tmp_name'];

			$sql = "INSERT INTO lcstudentsheettable (file_type, sudmission_date, student_lastname, student_firstname, student_middlename, student_year, student_course_section, student_number, filename) VALUES ('$file_type', '$sub_date', '$student_lastname', '$student_firstname', 'student_middlename', '$student_year', '$student_course_section', '$student_contact', '$file_name')";
			if (!mysqli_query($dbConnection, $sql)) {
				// code...
				 echo "<script type='text/javascript'>
                    alert('Please submit PDF file only');
                     window.location.href='../lcHomePage.php';
                    </script>";

			}else{
				move_uploaded_file($file_tmp, "../PDF_Files/student_information_sheets/".$file_name);
				 echo "<script type='text/javascript'>
                    alert('Your form has been successfully submmited!');
                    window.location.href='../lcHomePage.php';
                    </script>";
			}
		}elseif ($file_type == "Peer Facilitator Group Application Form") {
			// code...
			$file_name = $_FILES['filename']['name'];
			$file_tmp = $_FILES['filename']['tmp_name'];

			$sql = "INSERT INTO lcpeerfaciapptable (file_type, student_lastname, student_firstname, student_middlename, student_year, student_course_section, student_number, filename, status, submission_date) VALUES ('$file_type', '$student_lastname', '$student_firstname', 'student_middlename', '$student_year', '$student_course_section', '$student_contact', '$file_name', '$status', '$sub_date')";
			if (!mysqli_query($dbConnection, $sql)) {
				// code...
				 echo "<script type='text/javascript'>
                    alert('Please submit PDF file only');
                     window.location.href='../lcHomePage.php';
                    </script>";

			}else{
				move_uploaded_file($file_tmp, "../PDF_Files/peer_facilitator_group_application_forms/".$file_name);
				 echo "<script type='text/javascript'>
                    alert('Your form has been successfully submmited!');
                    window.location.href='../lcHomePage.php';
                    </script>";
			}
		}elseif ($file_type == "Counselor Record") {
			// code...
			// $file_name = $_FILES['filename']['name'];
			// $file_tmp = $_FILES['filename']['tmp_name'];

			$sql = "INSERT INTO lccounselorrecordtable (submission_date, student_lastname, student_firstname, student_middlename, student_year, student_course, student_section, psych_date, psych_issues, psych_remarks, routine_date, routine_issues, routine_remarks, consult_date, consult_issues, consult_remarks) VALUES ('$sub_date', '$student_lastname', '$student_firstname', 'student_middlename', '$student_year', '$student_course_section', '$student_section', '$psych_date', '$psych_issues', '$psych_remarks', '$routine_date', '$routine_issues', '$routine_remarks', '$consult_date', '$consult_issues', '$consult_remarks')";
			if (!mysqli_query($dbConnection, $sql)) {
				// code...
				 echo "<script type='text/javascript'>
                    alert('Something went wrong <br> Please contact your maintenance');
                     window.location.href='../lcGuidanceOffice.php?recordID=CR';
                    </script>";

			}else{
				// move_uploaded_file($file_tmp, "../PDF_Files/peer_facilitator_group_application_forms/".$file_name);
				 echo "<script type='text/javascript'>
                    alert('Your form has been successfully submmited!');
                    window.location.href='../lcGuidanceOffice.php?recordID=CR';
                    </script>";
			}
		}else{
			echo "<script type='text/javascript'>
                    alert('Please select which file you want to submit');
                    window.location.href='../lcHomePage.php';
                    </script>";
		}

	}
?>