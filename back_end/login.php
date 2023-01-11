<?php 
    include "database_connection.php";

    // include "register.php"

    // user login function
    if (isset($_POST['loginAdmin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM lcadmintable WHERE admin_username = '$username'";
        $query = mysqli_query($dbConnection, $sql);
        $result = mysqli_num_rows($query);

        if ($result == 1) {
            while($row = mysqli_fetch_assoc($query)){
                if ($row['admin_type'] == "Student") {
                    echo "<script type='text/javascript'>
                            alert('Welcome! $username');
                             window.location.href='../lcHomePage.php';
                             </script>";
                }else if ($row['admin_type'] == "Guidance Admin") {
                    echo "<script type='text/javascript'>
                            alert('Welcome! $username');
                             window.location.href='../lcGuidanceOffice.php';
                             </script>";
                }else if ($row['admin_type'] == "Discipline Admin") {
                    echo "<script type='text/javascript'>
                            alert('Welcome! $username');
                             window.location.href='../lcDisciplineOffice.php';
                             </script>";
                }else if ($row['admin_type'] == "Medical Admin") {
                    echo "<script type='text/javascript'>
                            alert('Welcome! $username');
                             window.location.href='../lcMedicalOffice.php';
                             </script>";
                }else if ($row['admin_type'] == "Student Org Admin") {
                    echo "<script type='text/javascript'>
                            alert('Welcome! $username');
                             window.location.href='../lcStudentOrg.php';
                             </script>";
                }else{
                    header("Location: ../index.php?error=Incorrect user access!");
                    exit();
                }
            //     if (password_verify($password, $row['password'])) {

            //         session_start();
            //         $_SESSION["user_id"] = $row['id'];
            //         $_SESSION["username"] = $row['username'];

            //         echo "<script type='text/javascript'>
            //         alert('Welcome! $username');
            //         window.location.href='../index.php';
            //         </script>";
            //     }else{
            //         header("Location: ../userLogin.php?error=Incorrect username or password!");
            //          exit();
            //     }

            }
        }else{
                    header("Location: ../index.php?error=Incorrect username or password!");
                     exit();
                }
    }
?>