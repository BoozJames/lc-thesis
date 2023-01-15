<?php

include 'database_connection.php';

if (isset($_GET['pendingDO'])) {

        $id = $_GET['pendingDO'];

        $sql = "UPDATE lcreporttable SET status='Pending' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcDisciplineOffice.php.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcDisciplineOffice.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['resolvedDO'])) {

        $id = $_GET['resolvedDO'];

        $sql = "UPDATE lcreporttable SET status='Resolved' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcDisciplineOffice.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcDisciplineOffice.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['evalID'])) {

        $id = $_GET['evalID'];

        $sql = "UPDATE lcstudentorgtable SET status='Evaluation' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcStudentOrg.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcStudentOrg.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['revisedID'])) {

        $id = $_GET['revisedID'];

        $sql = "UPDATE lcstudentorgtable SET status='Revised' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcStudentOrg.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcStudentOrg.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['approvedID'])) {

        $id = $_GET['approvedID'];

        $sql = "UPDATE lcstudentorgtable SET status='Approved' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcStudentOrg.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcStudentOrg.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['completedID'])) {

        $id = $_GET['completedID'];

        $sql = "UPDATE lcstudentorgtable SET status='Completed' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcStudentOrg.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcStudentOrg.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['assessID'])) {

        $id = $_GET['assessID'];

        $sql = "UPDATE lcpeerfaciapptable SET status='Assessment' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcGuidanceOffice.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcGuidanceOffice.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['appID'])) {

        $id = $_GET['appID'];

        $sql = "UPDATE lcpeerfaciapptable SET status='Approved' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcGuidanceOffice.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcGuidanceOffice.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['deniedAccountID'])) {

        $id = $_GET['deniedAccountID'];

        $sql = "UPDATE lcadmintable SET is_approved='denied' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcGuidanceOffice.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcGuidanceOffice.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['approvedAccountID'])) {

        $id = $_GET['approvedAccountID'];

        $sql = "UPDATE lcadmintable SET is_approved='approved' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcGuidanceOffice.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcGuidanceOffice.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['assementCounAppntID'])) {

        $id = $_GET['assementCounAppntID'];

        $sql = "UPDATE lccounselingappointment SET status='Assessment' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcGuidanceOffice.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcGuidanceOffice.php?success=Status has been updated!");
                exit();
        }
} elseif (isset($_GET['approvedCounAppntID'])) {

        $id = $_GET['approvedCounAppntID'];

        $sql = "UPDATE lccounselingappointment SET status='Approved' WHERE id='$id' ";
        $query = mysqli_query($dbConnection, $sql);

        if (!$query) {
                // echo "not updated";
                header("Location: ../lcGuidanceOffice.php?error=Status has not been updated!");
                exit();
        } else {
                // echo "updated";
                header("Location: ../lcGuidanceOffice.php?success=Status has been updated!");
                exit();
        }
}
