<?php 
	
	include "database_connection.php";

	if (isset($_POST['submit'])) {
		// code...

		$admin_type = $_POST['accessType'];
		$admin_name = $_POST['adminName'];
		$admin_age = $_POST['adminAge'];
		$admin_gender = $_POST['adminGender'];
		$admin_username = $_POST['adminUsername'];
		$admin_password = $_POST['adminPassword'];
        $user_id = $_POST['user_id'];

		$sql = "SELECT * FROM lcadmintable WHERE admin_username='$admin_username' ";
        $result = mysqli_query($dbConnection, $sql);
		if (mysqli_num_rows($result) > 0) {
            header("Location: ../lcRegistration.php?error=The username is already taken!");
            exit();

        }else{
     		$sql = "INSERT INTO lcadmintable (admin_type, admin_name, admin_age, admin_gender, admin_username, admin_password, user_id) VALUES ('$admin_type', '$admin_name', '$admin_age', '$admin_gender', '$admin_username', '$admin_password', '$user_id')";
                $result = mysqli_query($dbConnection, $sql);


            if ($result) {
                header("Location: ../index.php?success=Registered successfully! <br> You may now login");
                exit();
                    // echo "<script type='text/javascript'>
                    // alert('The account has been registered. Continue to login');
                    // window.location.href='../userLogin.php';
                    // </script>";
            }else{
                header("Location: ../lcRegistration.php?error=Something went wrong. <br> Please contact your maintenance");
                    exit(); 
            }
        }
	}

?>