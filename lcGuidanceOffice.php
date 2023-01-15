<?php
// include 'phpqrcode/qrlib.php';
session_start();
// var_dump($_SESSION);
$user_type = $_SESSION['admin_type']; // this value could be obtained from a database or user input

if ($user_type != "Guidance Admin" && $user_type != "Discipline Admin" && $user_type != "Medical Admin") {
    echo "Access denied. You do not have permission to view this page.";
    header("refresh:5;url=index.php");
    exit();
}
include "back_end/database_connection.php";


if (isset($_POST['searchSIR'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $num_per_page = 10;
    $start_from = ($page - 1) * 10;
    $studentInfoQuery = "SELECT * FROM `lcstudentsheettable` WHERE CONCAT(`student_lastname`) LIKE '%" . $valueToSearch . "%'";
    $student_result = filterStudent($studentInfoQuery);
} else if (isset($_POST['searchPFAF'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $num_per_page = 10;
    $start_from = ($page - 1) * 10;
    $peerFaciQuery = "SELECT * FROM `lcpeerfaciapptable` WHERE CONCAT(`student_lastname`) LIKE '%" . $valueToSearch . "%'";
    $peer_result = filterPeer($peerFaciQuery);
} else if (isset($_POST['searchCounAppnt'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $num_per_page = 10;
    $start_from = ($page - 1) * 10;
    $counAppntQuery = "SELECT * FROM WHERE CONCAT(`student_lastname`) LIKE '%" . $valueToSearch . "%'";
    $counAppnt_result = filterStudentRecords($counAppntQuery);
} else if (isset($_POST['searchSA'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $num_per_page = 10;
    $start_from = ($page - 1) * 10;
    $studentAccountQuery = "SELECT * FROM WHERE CONCAT(`admin_username`) LIKE '%" . $valueToSearch . "%'";
    $studentAccount_result = filterStudentRecords($studentAccountQuery);
} else if (isset($_POST['searchCR'])) {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $num_per_page = 10;
    $start_from = ($page - 1) * 10;
    $counselorQuery = "SELECT * FROM `lccounselorrecordtable` WHERE CONCAT(`student_lastname`) LIKE '%" . $valueToSearch . "%'";
    $counselor_result = filterCounselor($counselorQuery);
} else {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $num_per_page = 10;
    $start_from = ($page - 1) * 10;
    $studentInfoQuery = "select * from lcstudentsheettable ORDER BY student_lastname ASC limit $start_from,$num_per_page ";
    $peerFaciQuery = "select * from lcpeerfaciapptable ORDER BY student_lastname ASC limit $start_from,$num_per_page ";
    $counselorQuery = "select * from lccounselorrecordtable ORDER BY student_lastname ASC limit $start_from,$num_per_page ";
    $studentAccountQuery = "select * from lcadmintable ORDER BY id ASC limit $start_from,$num_per_page ";
    $counAppntQuery = "select * from lccounselingappointment ORDER BY id ASC limit $start_from,$num_per_page ";

    $student_result = filterStudent($studentInfoQuery);
    $peer_result = filterPeer($peerFaciQuery);
    $counselor_result = filterCounselor($counselorQuery);
    $studentAccount_result = filterStudentRecords($studentAccountQuery);
    $counAppnt_result = filterCounselingAppointment($counAppntQuery);
}

// function to connect and execute the query
function filterStudent($studentInfoQuery)
{
    $connect = mysqli_connect("localhost", "root", "", "lcproject");
    $filter_Result = mysqli_query($connect, $studentInfoQuery);
    return $filter_Result;
}
function filterPeer($peerFaciQuery)
{
    $connect = mysqli_connect("localhost", "root", "", "lcproject");
    $filter_Result = mysqli_query($connect, $peerFaciQuery);
    return $filter_Result;
}
function filterCounselor($counselorQuery)
{
    $connect = mysqli_connect("localhost", "root", "", "lcproject");
    $filter_Result = mysqli_query($connect, $counselorQuery);
    return $filter_Result;
}

function filterCounselingAppointment($counselorQuery)
{
    $connect = mysqli_connect("localhost", "root", "", "lcproject");
    $filter_Result = mysqli_query($connect, $counselorQuery);
    return $filter_Result;
}

function filterStudentRecords($studentAccountQuery)
{
    $connect = mysqli_connect("localhost", "root", "", "lcproject");
    $filter_Result = mysqli_query($connect, $studentAccountQuery);
    return $filter_Result;
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Lemery Colleges Thesis</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Olde%20English.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon/favicon.ico">
</head>

<body style="background: #002654;">
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-xl-2 d-xl-flex justify-content-xl-center align-items-xl-center"><img src="assets/img/lcLogo.png" width="100"><img src="assets/img/OSAS.png" width="100"></div>
            <div class="col">
                <h1 class="display-3" style="font-family: 'Olde English';">Lemery Colleges</h1>
                <h5 style="font-family: Alegreya, serif;">Creating Life's Champions</h5>
            </div>
            <div class="col">
                <span class="d-block text-end"><?php echo date("F d, Y") ?></span>
                <div class="container" style="display: flex; justify-content: flex-end; float: right;">
                    <a href="back_end/logout.php" class="btn btn-danger"><span>Logout</span></a>
                    <a href="./lcRegistrationAdmin.php" class="btn btn-success"><span>Register</span></a>
                </div>

            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 7px;">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-dark bg-light" style="font-family: Alegreya, serif;padding: 25px;color: rgb(33, 37, 41);border-right-width: 15px;border-right-style: double;border-left: 15px double rgb(33, 37, 41);">GUIDANCE AND COUNSELING OFFICE</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0">Records</h2>
                        </div>
                        <?php if (isset($_GET['success'])) {  ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span><strong><?php echo $_GET['success']; ?></strong></span>
                            </div>
                        <?php } ?>

                        <?php if (isset($_GET['error'])) {  ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong><?php echo $_GET['error']; ?></strong></span>
                            </div>
                        <?php } ?>
                        <div class="card-body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist" style="font-family: Alegreya, serif;font-size: 20px;">
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="infoRecord" href="#tab-1">Student Information Records</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="peerRecord" href="#tab-2">Peer Facilitator Group Records</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="counselorRecord" href="#tab-3">Counselors Records</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="counselingAppointment" href="#tab-4">Counseling Appointments</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" id="counselorRecord" href="#tab-5">Student Accounts</a></li>
                                </ul>

                                <!-- Student Information Records -->
                                <div class="tab-content">
                                    <div class="tab-pane fade" role="tabpanel" id="tab-1">
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header bg-dark">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <h3 class="text-light" style="font-family: Alegreya, serif;">Student Information Records</h3>
                                                                </div>
                                                                <div class="col d-flex justify-content-end align-items-center">
                                                                    <form action="?recordID=SIR" method="POST">
                                                                        <input class="form-control d-inline-block" type="text" name="valueToSearch" placeholder="Search here" required="" style="width: 375px;"><button class="btn btn-success link-light d-inline-block" name="search" type="submit">Search</button>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Grade/Year</th>
                                                                            <!-- <th>Section</th> -->
                                                                            <th>Track/Course & Section</th>
                                                                            <th>Date of Submission</th>
                                                                            <th>File Uploaded</th>
                                                                            <th>Contact Number</th>
                                                                            <!-- <th>Status</th> -->
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        if (mysqli_num_rows($student_result) > 0) {
                                                                            // code...

                                                                            $sr = 1;

                                                                            while ($row = mysqli_fetch_assoc($student_result)) {

                                                                        ?>
                                                                                <tr>
                                                                                    <td><?php echo $row['student_lastname'];
                                                                                        echo "," ?>
                                                                                        <?php echo $row['student_firstname'] ?>
                                                                                        <?php echo substr($row['student_middlename'], 0, 1);
                                                                                        echo "."; ?></td>
                                                                                    <td><?php echo $row['student_year'] ?></td>
                                                                                    <!-- <td>3</td> -->
                                                                                    <td><?php echo $row['student_course_section'] ?></td>
                                                                                    <td><?php echo $row['sudmission_date'] ?></td>
                                                                                    <td><a href="back_end/downloadStudentInfo.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['filename'] ?></a></td>
                                                                                    <td><?php echo $row['student_number'] ?></td>
                                                                                    <td>
                                                                                        <div class="btn-group" role="group"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-4<?php echo $row['id'] ?>" data-bs-toggle="modal"><i class="far fa-paper-plane"></i></button><button class="btn btn-primary bg-danger" type="button" data-bs-target="#modal-3<?php echo $row['id'] ?>" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i></button></div>
                                                                                    </td>
                                                                                </tr>
                                                                                <div class="modal fade" role="dialog" tabindex="-1" id="modal-3<?php echo $row['id'] ?>">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h4 class="modal-title">Deleting Student Name Record</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form>
                                                                                                    <!-- <input type="text" name="id" value="<?php echo $row['id'] ?>"> -->
                                                                                                    <div class="row" style="margin-top: 10px;">
                                                                                                        <div class="col text-center"><label class="col-form-label" style="font-family: Alatsi, sans-serif;">ARE YOU SURE YOU WANT TO DELETE THIS RECORD?</label></div>
                                                                                                    </div>
                                                                                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><a href="back_end/deleteStudentsInfo.php?medicalID=<?php echo $row['id'] ?>" class="btn btn-primary" role="button">Delete</a></div>
                                                                                                </form>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal fade" role="dialog" tabindex="-1" id="modal-4<?php echo $row['id'] ?>">
                                                                                    <div class="modal-dialog" role="document">
                                                                                        <div class="modal-content">
                                                                                            <div class="modal-header">
                                                                                                <h4 class="modal-title">Send Message</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                            </div>
                                                                                            <div class="modal-body">
                                                                                                <form action="back_end/sendNotif.php" method="POST">
                                                                                                    <input type="text" name="id" hidden value="<?php echo $row['student_number'] ?>">
                                                                                                    <div class="row" style="margin-top: 10px;">
                                                                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Message:</label><textarea class="border-dark form-control" name="message" placeholder="Enter message here..." rows="5" required=""></textarea></div>
                                                                                                    </div>
                                                                                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Send</button></div>
                                                                                                </form>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            <?php
                                                                                $sr++;
                                                                            }
                                                                        } else {
                                                                            ?>
                                                                            <tr>
                                                                                <td class="text-center" colspan="7">NO RECORDS FOUND</td>
                                                                            </tr>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td class="text-left" colspan="3">
                                                                                <?php
                                                                                $pr_query = "select * from lcstudentsheettable";
                                                                                $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                $total_record = mysqli_num_rows($pr_result);
                                                                                $total_page = ceil($total_record / $num_per_page);
                                                                                ?>

                                                                                <input type="text" disabled name="" value="Page <?php echo $page ?> of <?php echo $total_page ?>" style="
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                                                            </td>

                                                                            <td class="text-right" colspan="4">
                                                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">

                                                                                    <?php

                                                                                    $pr_query = "select * from lcstudentsheettable";
                                                                                    $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                    $total_record = mysqli_num_rows($pr_result);

                                                                                    $total_page = ceil($total_record / $num_per_page);

                                                                                    if ($page > 1) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page - 1) . "' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                                                    }


                                                                                    for ($i = 1; $i < $total_page; $i++) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . $i . "' class='btn btn-light'>$i</a>";
                                                                                    }

                                                                                    if ($i > $page) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page + 1) . "' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
                                                                                    }

                                                                                    ?>

                                                                                </nav>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Student Information Records -->


                                    <?php
                                    $newCount = "SELECT count(*) AS New FROM lcpeerfaciapptable WHERE status = 'New'";
                                    $evalCount = "SELECT count(*) AS Eval FROM lcpeerfaciapptable WHERE status = 'Assessment'";
                                    // $revisedCount = "SELECT count(*) AS Revised FROM lcstudentorgtable WHERE status = 'Revised'";
                                    $approvedCount = "SELECT count(*) AS Approved FROM lcpeerfaciapptable WHERE status = 'Approved'";
                                    // $completedCount = "SELECT count(*) AS Completed FROM lcstudentorgtable WHERE status = 'Completed'";

                                    $newQuery = mysqli_query($dbConnection, $newCount);
                                    $newQueryResult = mysqli_fetch_assoc($newQuery);

                                    $evalQuery = mysqli_query($dbConnection, $evalCount);
                                    $evalQueryResult = mysqli_fetch_assoc($evalQuery);

                                    // $revisedQuery = mysqli_query($dbConnection, $revisedCount);
                                    // $revisedQueryResult = mysqli_fetch_assoc($revisedQuery);

                                    $approvedQuery = mysqli_query($dbConnection, $approvedCount);
                                    $approvedQueryResult = mysqli_fetch_assoc($approvedQuery);

                                    // $completedQuery = mysqli_query($dbConnection, $completedCount);
                                    // $completedQueryResult = mysqli_fetch_assoc($completedQuery);


                                    ?>

                                    <!-- Peer Facilitator Group Records -->
                                    <div class="tab-pane fade" role="tabpanel" id="tab-2">
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-info">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">New Records</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $newQueryResult['New'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-warning">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Assessment&nbsp;</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $evalQueryResult['Eval'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-success">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Approved</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $approvedQueryResult['Approved'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header bg-dark">
                                                            <h3 class="text-light" style="font-family: Alegreya, serif;">Peer Facilitator Group</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Grade/Year</th>
                                                                            <!-- <th>Section</th> -->
                                                                            <th>Track/Course & Section</th>
                                                                            <th>Date of Submission</th>
                                                                            <th>File Uploaded</th>
                                                                            <th>Contact Number</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        if (mysqli_num_rows($peer_result) > 0) {
                                                                            // code...

                                                                            $sr = 1;

                                                                            while ($row = mysqli_fetch_assoc($peer_result)) {

                                                                        ?>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><?php echo $row['student_lastname'];
                                                                                echo "," ?>
                                                                                <?php echo $row['student_firstname'] ?>
                                                                                <?php echo substr($row['student_middlename'], 0, 1);
                                                                                echo "."; ?></td>
                                                                            <td><?php echo $row['student_year'] ?></td>
                                                                            <!-- <td>3</td> -->
                                                                            <td><?php echo $row['student_course_section'] ?></td>
                                                                            <td><?php echo $row['submission_date'] ?></td>
                                                                            <td><a href="back_end/downloadFromPeer.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['filename'] ?></a></td>
                                                                            <td><?php echo $row['student_number'] ?></td>
                                                                            <td><?php echo $row['status'] ?></td>
                                                                            <td>
                                                                                <div class="btn-group" role="group"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-4<?php echo $row['id'] ?>" data-bs-toggle="modal"><i class="far fa-paper-plane"></i></button>
                                                                                    <div class="dropdown btn-group" role="group"><button class="btn btn-primary dropdown-toggle bg-success" aria-expanded="false" data-bs-toggle="dropdown" type="button">Status</button>
                                                                                        <div class="dropdown-menu"><a class="dropdown-item" href="back_end/changeStatus.php?assessID=<?php echo $row['id'] ?>">Assessment</a><a class="dropdown-item" href="back_end/changeStatus.php?appID=<?php echo $row['id'] ?>">Approved</a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal-4<?php echo $row['id'] ?>">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Send Message</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <form action="back_end/sendNotif.php" method="POST">
                                                                                            <input type="text" name="number" hidden value="<?php echo $row['student_number'] ?>">
                                                                                            <div class="row" style="margin-top: 10px;">
                                                                                                <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Message:</label><textarea class="border-dark form-control" name="message" placeholder="Enter message here..." rows="5" required=""></textarea></div>
                                                                                            </div>
                                                                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" name="send">Send</button></div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                                $sr++;
                                                                            }
                                                                        } else {
                                                                    ?>
                                                                    <tr>
                                                                        <td class="text-center" colspan="7">NO RECORDS FOUND</td>
                                                                    </tr>
                                                                <?php
                                                                        }
                                                                ?>
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td class="text-left" colspan="3">
                                                                                <?php
                                                                                $pr_query = "select * from lcpeerfaciapptable";
                                                                                $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                $total_record = mysqli_num_rows($pr_result);
                                                                                $total_page = ceil($total_record / $num_per_page);
                                                                                ?>

                                                                                <input type="text" disabled name="" value="Page <?php echo $page ?> of <?php echo $total_page ?>" style="
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                                                            </td>

                                                                            <td class="text-right" colspan="4">
                                                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">

                                                                                    <?php

                                                                                    $pr_query = "select * from lcpeerfaciapptable";
                                                                                    $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                    $total_record = mysqli_num_rows($pr_result);

                                                                                    $total_page = ceil($total_record / $num_per_page);

                                                                                    if ($page > 1) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page - 1) . "' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                                                    }


                                                                                    for ($i = 1; $i < $total_page; $i++) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . $i . "' class='btn btn-light'>$i</a>";
                                                                                    }

                                                                                    if ($i > $page) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page + 1) . "' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
                                                                                    }

                                                                                    ?>

                                                                                </nav>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Peer Facilitator Group Records -->

                                    <!-- Counselor Records -->
                                    <div class="tab-pane fade" role="tabpanel" id="tab-3">
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header bg-dark">
                                                            <h3 class="text-light" style="font-family: Alegreya, serif;">Counselor Records</h3>
                                                        </div>
                                                        <div class="card-body"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-1" data-bs-toggle="modal">ADD NEW RECORD</button>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Grade/Year</th>

                                                                            <th>Track/Course</th>
                                                                            <th>Section</th>
                                                                            <th>Date Added/Updated</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        if (mysqli_num_rows($counselor_result) > 0) {
                                                                            // code...

                                                                            $sr = 1;

                                                                            while ($row = mysqli_fetch_assoc($counselor_result)) {

                                                                        ?>
                                                                                <tr>
                                                                                    <td><?php echo $row['student_lastname'];
                                                                                        echo "," ?>
                                                                                        <?php echo $row['student_firstname'] ?>
                                                                                        <?php echo substr($row['student_middlename'], 0, 1);
                                                                                        echo "."; ?></td>
                                                                                    <td><?php echo $row['student_year'] ?></td>
                                                                                    <!-- <td>3</td> -->
                                                                                    <td><?php echo $row['student_course'] ?></td>
                                                                                    <td><?php echo $row['student_section'] ?></td>
                                                                                    <td><?php echo $row['submission_date'] ?></td>

                                                                                    <td class="d-xl-flex justify-content-xl-center">
                                                                                        <div class="btn-group" role="group">
                                                                                            <button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-2<?php echo $row['id'] ?>" data-bs-toggle="modal"><i class="fas fa-eye"></i></button><button class="btn btn-primary bg-danger" type="button" data-bs-target="#modal-3" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i></button>
                                                                                        </div>
                                                                                    </td>
                                                                                    <div class="modal fade" role="dialog" tabindex="-1" id="modal-2<?php echo $row['id'] ?>">
                                                                                        <div class="modal-dialog modal-lg" role="document">
                                                                                            <div class="modal-content">
                                                                                                <div class="modal-header">
                                                                                                    <h4 class="modal-title">Student Name Record</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                                </div>
                                                                                                <div class="modal-body">
                                                                                                    <form action="back_end/updateCounselorRecord.php" method="post">
                                                                                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                                                                        <div class="row" style="margin-top: 10px;">
                                                                                                            <div class="col text-center text-light">
                                                                                                                <label class="col-form-label bg-dark d-block" style="font-family: Alatsi, sans-serif;">PSYCHOLOGICAL TEST RESULT</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-8 col-xl-7 offset-xl-0"><label class="form-label" style="font-family: Alatsi, sans-serif;">Date</label><input class="form-control" type="date" name="psychDate" value="<?php echo $row['psych_date'] ?>" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                                                                                                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Issues/Concern</label><textarea class="border-dark form-control" name="psychIssues" rows="5" required="" placeholder="Enter your issues/concerns here..." style="font-family: Alatsi, sans-serif;"><?php echo $row['psych_issues'] ?></textarea></div>
                                                                                                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Remarks</label><textarea class="border-dark form-control" name="psychRemarks" rows="5" required="" placeholder="Enter your remarks here..." style="font-family: Alatsi, sans-serif;"><?php echo $row['psych_remarks'] ?></textarea></div>
                                                                                                        </div>
                                                                                                        <div class="row" style="margin-top: 10px;">
                                                                                                            <div class="col text-center text-light"><label class="col-form-label bg-dark d-block" style="font-family: Alatsi, sans-serif;">ROUTINE INTERVIEW RECORD</label></div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-8 col-xl-7 offset-xl-0"><label class="form-label" style="font-family: Alatsi, sans-serif;">Date</label><input class="form-control" type="date" name="routineDate" value="<?php echo $row['routine_date'] ?>" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                                                                                                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Issues/Concern</label><textarea class="border-dark form-control" name="routineIssues" rows="5" required="" placeholder="Enter your issues/concerns here..." style="font-family: Alatsi, sans-serif;"><?php echo $row['routine_issues'] ?></textarea></div>
                                                                                                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Remarks</label><textarea class="border-dark form-control" name="routineRemarks" rows="5" required="" placeholder="Enter your remarks here..." style="font-family: Alatsi, sans-serif;"><?php echo $row['routine_remarks'] ?></textarea></div>
                                                                                                        </div>
                                                                                                        <div class="row" style="margin-top: 10px;">
                                                                                                            <div class="col text-center text-light"><label class="col-form-label bg-dark d-block" style="font-family: Alatsi, sans-serif;">CONSULTATION RECORD</label></div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-8 col-xl-7 offset-xl-0"><label class="form-label" style="font-family: Alatsi, sans-serif;">Date</label><input class="form-control" type="date" name="consultDate" value="<?php echo $row['consult_date'] ?>" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                                                                                                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Issues/Concern</label><textarea class="border-dark form-control" name="consultIssues" rows="5" required="" placeholder="Enter your issues/concerns here..." style="font-family: Alatsi, sans-serif;"><?php echo $row['consult_issues'] ?></textarea></div>
                                                                                                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Remarks</label><textarea class="border-dark form-control" name="consultRemarks" rows="5" required="" placeholder="Enter your remarks here..." style="font-family: Alatsi, sans-serif;"><?php echo $row['consult_remarks'] ?></textarea></div>
                                                                                                        </div>
                                                                                                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Update</button></div>
                                                                                                    </form>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </tr>
                                                                            <?php
                                                                                $sr++;
                                                                            }
                                                                        } else {
                                                                            ?>
                                                                            <tr>
                                                                                <td class="text-center" colspan="7">NO RECORDS FOUND</td>
                                                                            </tr>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td class="text-left" colspan="3">
                                                                                <?php
                                                                                $pr_query = "select * from lccounselorrecordtable";
                                                                                $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                $total_record = mysqli_num_rows($pr_result);
                                                                                $total_page = ceil($total_record / $num_per_page);
                                                                                ?>

                                                                                <input type="text" disabled name="" value="Page <?php echo $page ?> of <?php echo $total_page ?>" style="
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                                                            </td>

                                                                            <td class="text-right" colspan="4">
                                                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">

                                                                                    <?php

                                                                                    $pr_query = "select * from lccounselorrecordtable";
                                                                                    $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                    $total_record = mysqli_num_rows($pr_result);

                                                                                    $total_page = ceil($total_record / $num_per_page);

                                                                                    if ($page > 1) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page - 1) . "' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                                                    }


                                                                                    for ($i = 1; $i < $total_page; $i++) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . $i . "' class='btn btn-light'>$i</a>";
                                                                                    }

                                                                                    if ($i > $page) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page + 1) . "' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
                                                                                    }

                                                                                    ?>

                                                                                </nav>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Counselor Records -->

                                    <?php
                                    $newCounAppnt = "SELECT count(*) AS New FROM lccounselingappointment WHERE status = 'New'";
                                    $evalCounAppnt = "SELECT count(*) AS Eval FROM lccounselingappointment WHERE status = 'Assessment'";
                                    $approvedCounAppnt = "SELECT count(*) AS Approved FROM lccounselingappointment WHERE status = 'Approved'";

                                    $newCounAppntQuery = mysqli_query($dbConnection, $newCounAppnt);
                                    $newCounAppnt = mysqli_fetch_assoc($newCounAppntQuery);

                                    $evalCounAppntQuery = mysqli_query($dbConnection, $evalCounAppnt);
                                    $evalCounAppnt = mysqli_fetch_assoc($evalCounAppntQuery);

                                    $approvedCounAppntQuery = mysqli_query($dbConnection, $approvedCounAppnt);
                                    $approvedCounAppnt = mysqli_fetch_assoc($approvedCounAppntQuery);
                                    ?>

                                    <!-- Counseling Appointments -->
                                    <div class="tab-pane fade" role="tabpanel" id="tab-4">
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-info">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">New Records</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $newCounAppnt['New'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-warning">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Assessment&nbsp;</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $evalCounAppnt['Eval'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-success">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Approved</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $approvedCounAppnt['Approved'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header bg-dark">
                                                            <h3 class="text-light" style="font-family: Alegreya, serif;">Counseling Appointments</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th>Grade/Year</th>
                                                                            <th>Track/Course & Section</th>
                                                                            <th>Contact Number</th>
                                                                            <th>Scheduled Date</th>
                                                                            <th>Main Concern</th>
                                                                            <th>Status</th>
                                                                            <th>Remarks</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        if (mysqli_num_rows($counAppnt_result) > 0) {
                                                                            // code...

                                                                            $sr = 1;

                                                                            while ($row = mysqli_fetch_assoc($counAppnt_result)) {

                                                                        ?>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><?php echo $row['student_lastname'];
                                                                                echo "," ?>
                                                                                <?php echo $row['student_firstname'] ?>
                                                                                <?php echo substr($row['student_middlename'], 0, 1);
                                                                                echo "."; ?></td>
                                                                            <td><?php echo $row['student_year'] ?></td>
                                                                            <td><?php echo $row['student_course_section'] ?></td>
                                                                            <td><?php echo $row['student_number'] ?></td>
                                                                            <td><?php echo $row['schedule_date'] ?></td>
                                                                            <td><?php echo $row['main_concern'] ?></td>
                                                                            <td><?php echo $row['status'] ?></td>
                                                                            <td><?php echo $row['remarks'] ?></td>
                                                                            <td>
                                                                                <div class="btn-group" role="group"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-4<?php echo $row['id'] ?>" data-bs-toggle="modal"><i class="far fa-paper-plane"></i></button>
                                                                                    <div class="dropdown btn-group" role="group"><button class="btn btn-primary dropdown-toggle bg-success" aria-expanded="false" data-bs-toggle="dropdown" type="button">Status</button>
                                                                                        <div class="dropdown-menu"><a class="dropdown-item" href="back_end/changeStatus.php?assementCounAppntID=<?php echo $row['id'] ?>">Assessment</a><a class="dropdown-item" href="back_end/changeStatus.php?approvedCounAppntID=<?php echo $row['id'] ?>">Approved</a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <div class="modal fade" role="dialog" tabindex="-1" id="modal-4<?php echo $row['id'] ?>">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <h4 class="modal-title">Send Remarks</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <?php error_reporting(E_ERROR | E_PARSE); ?>
                                                                                        <form action="back_end/updateCounselingAppointmentRemarks.php" method="POST">
                                                                                            <input type="text" name="id" hidden value="<?php echo $row['id'] ?>">
                                                                                            <div class="row" style="margin-top: 10px;">
                                                                                                <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Message:</label><textarea class="border-dark form-control" name="remarks" placeholder="Enter message here..." rows="5" required=""><?php echo $row['counAppntRemarks'] ?></textarea></div>
                                                                                            </div>
                                                                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" name="send">Send</button></div>
                                                                                        </form>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php
                                                                                $sr++;
                                                                            }
                                                                        } else {
                                                                    ?>
                                                                    <tr>
                                                                        <td class="text-center" colspan="7">NO RECORDS FOUND</td>
                                                                    </tr>
                                                                <?php
                                                                        }
                                                                ?>
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td class="text-left" colspan="3">
                                                                                <?php
                                                                                $pr_query = "select * from lccounselingappointment";
                                                                                $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                $total_record = mysqli_num_rows($pr_result);
                                                                                $total_page = ceil($total_record / $num_per_page);
                                                                                ?>

                                                                                <input type="text" disabled name="" value="Page <?php echo $page ?> of <?php echo $total_page ?>" style="
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                                                            </td>

                                                                            <td class="text-right" colspan="4">
                                                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">

                                                                                    <?php

                                                                                    $pr_query = "select * from lccounselingappointment";
                                                                                    $pr_result = mysqli_query($dbConnection, $pr_query);
                                                                                    $total_record = mysqli_num_rows($pr_result);

                                                                                    $total_page = ceil($total_record / $num_per_page);

                                                                                    if ($page > 1) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page - 1) . "' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                                                    }


                                                                                    for ($i = 1; $i < $total_page; $i++) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . $i . "' class='btn btn-light'>$i</a>";
                                                                                    }

                                                                                    if ($i > $page) {
                                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page + 1) . "' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
                                                                                    }

                                                                                    ?>

                                                                                </nav>
                                                                            </td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Counseling Appointments -->


                                    <?php
                                    $notApproved = "SELECT count(*) AS Denied FROM lcadmintable WHERE is_approved = 'denied'";
                                    $pending_approval = "SELECT count(*) AS NewAccounts FROM lcadmintable WHERE is_approved = 'new'";
                                    $approved = "SELECT count(*) AS Approved FROM lcadmintable WHERE is_approved = 'approved'";

                                    $newNotApprovedQuery = mysqli_query($dbConnection, $notApproved);
                                    $notApprovedResult = mysqli_fetch_assoc($newNotApprovedQuery);

                                    $pending_approval_query = mysqli_query($dbConnection, $pending_approval);
                                    $pendingResult = mysqli_fetch_assoc($pending_approval_query);

                                    $approvedQuery = mysqli_query($dbConnection, $approved);
                                    $approvedResult = mysqli_fetch_assoc($approvedQuery);

                                    ?>

                                    <!-- Student Accounts -->
                                    <div class="tab-pane fade" role="tabpanel" id="tab-5">
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-info">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">New Accounts</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $pendingResult['NewAccounts'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-danger">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Denied&nbsp;</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $notApprovedResult['Denied'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header text-light bg-success">
                                                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Approved</h3>
                                                        </div>
                                                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $approvedResult['Approved'] ?></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header bg-dark">
                                                            <h3 class="text-light" style="font-family: Alegreya, serif;">Student Accounts</h3>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Username</th>
                                                                            <th>User Type</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        if (mysqli_num_rows($studentAccount_result) > 0) {
                                                                            // code...

                                                                            $sr = 1;

                                                                            while ($row = mysqli_fetch_assoc($studentAccount_result)) {

                                                                        ?>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><?php echo $row['id'] ?></td>
                                                                            <td><?php echo $row['admin_username'] ?></td>
                                                                            <td><?php echo $row['admin_type'] ?></td>
                                                                            <td><?php echo $row['is_approved'] ?></td>
                                                                            <td>
                                                                                <div class="dropdown btn-group" role="group"><button class="btn btn-primary dropdown-toggle bg-success" aria-expanded="false" data-bs-toggle="dropdown" type="button">Status</button>
                                                                                    <div class="dropdown-menu"><a class="dropdown-item" href="back_end/changeStatus.php?deniedAccountID=<?php echo $row['id'] ?>">Denied</a><a class="dropdown-item" href="back_end/changeStatus.php?approvedAccountID=<?php echo $row['id'] ?>">Approved</a></div>
                                                                                </div>
                                                            </div>
                                                            </td>
                                                            </tr>
                                                        <?php
                                                                                $sr++;
                                                                            }
                                                                        } else {
                                                        ?>
                                                        <tr>
                                                            <td class="text-center" colspan="7">NO RECORDS FOUND</td>
                                                        </tr>
                                                    <?php
                                                                        }
                                                    ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-left" colspan="3">
                                                                <?php
                                                                $sr_query = "select * from lcadmintable";
                                                                $sr_result = mysqli_query($dbConnection, $sr_query);
                                                                $total_record = mysqli_num_rows($sr_result);
                                                                $total_page = ceil($total_record / $num_per_page);
                                                                ?>

                                                                <input type="text" disabled name="" value="Page <?php echo $page ?> of <?php echo $total_page ?>" style="
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                                            </td>

                                                            <td class="text-right" colspan="4">
                                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">

                                                                    <?php

                                                                    $sr_query = "select * from lcadmintable";
                                                                    $sr_result = mysqli_query($dbConnection, $sr_query);
                                                                    $total_record = mysqli_num_rows($sr_result);

                                                                    $total_page = ceil($total_record / $num_per_page);

                                                                    if ($page > 1) {
                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page - 1) . "' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                                    }


                                                                    for ($i = 1; $i < $total_page; $i++) {
                                                                        echo "<a href='lcGuidanceOffice.php?page=" . $i . "' class='btn btn-light'>$i</a>";
                                                                    }

                                                                    if ($i > $page) {
                                                                        echo "<a href='lcGuidanceOffice.php?page=" . ($page + 1) . "' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
                                                                    }

                                                                    ?>

                                                                </nav>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Student Accounts -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Record</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="back_end/addGuidanceForm.php" method="POST">
                        <input type="text" name="fileType" value="Counselor Record" hidden>
                        <div class="row">
                            <div class="col"><label class="col-form-label" style="font-family: Alatsi, sans-serif;">Student Name</label></div>
                            <div class="col"><input class="form-control" type="text" name="studentLastname" placeholder="Enter Last Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><input class="form-control" type="text" name="studentFirstname" placeholder="Enter First Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><input class="form-control" type="text" name="studentMiddlename" placeholder="Enter Middle Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Year/Grade</label><input class="form-control" type="text" name="studentYear" placeholder="4th Year/Grade 11" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Course/Track</label><input class="form-control" type="text" name="studentCourse" placeholder="BSIT/ABM" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Section</label><input class="form-control" type="text" name="studentSection" placeholder="BSIT-1/ABM1" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center text-light"><label class="col-form-label bg-dark d-block" style="font-family: Alatsi, sans-serif;">PSYCHOLOGICAL TEST RESULT</label></div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-xl-7 offset-xl-0"><label class="form-label" style="font-family: Alatsi, sans-serif;">Date</label><input class="form-control" type="date" name="psychDate" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Issues/Concern</label><textarea class="border-dark form-control" name="psychIssues" rows="5" required="" placeholder="Enter your issues/concerns here..." style="font-family: Alatsi, sans-serif;"></textarea></div>
                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Remarks</label><textarea class="border-dark form-control" name="psychRemarks" rows="5" required="" placeholder="Enter your remarks here..." style="font-family: Alatsi, sans-serif;"></textarea></div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center text-light"><label class="col-form-label bg-dark d-block" style="font-family: Alatsi, sans-serif;">ROUTINE INTERVIEW RECORD</label></div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-xl-7 offset-xl-0"><label class="form-label" style="font-family: Alatsi, sans-serif;">Date</label><input class="form-control" type="date" name="routineDate" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Issues/Concern</label><textarea class="border-dark form-control" name="routineIssues" rows="5" required="" placeholder="Enter your issues/concerns here..." style="font-family: Alatsi, sans-serif;"></textarea></div>
                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Remarks</label><textarea class="border-dark form-control" name="routineRemarks" rows="5" required="" placeholder="Enter your remarks here..." style="font-family: Alatsi, sans-serif;"></textarea></div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center text-light"><label class="col-form-label bg-dark d-block" style="font-family: Alatsi, sans-serif;">CONSULTATION RECORD</label></div>
                        </div>
                        <div class="row">
                            <div class="col-8 col-xl-7 offset-xl-0"><label class="form-label" style="font-family: Alatsi, sans-serif;">Date</label><input class="form-control" type="date" name="consultDate" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Issues/Concern</label><textarea class="border-dark form-control" name="consultIssues" rows="5" required="" placeholder="Enter your issues/concerns here..." style="font-family: Alatsi, sans-serif;"></textarea></div>
                            <div class="col-6"><label class="form-label" style="font-family: Alatsi, sans-serif;">Remarks</label><textarea class="border-dark form-control" name="consultRemarks" rows="5" required="" placeholder="Enter your remarks here..." style="font-family: Alatsi, sans-serif;"></textarea></div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" name="addStudentInfo" type="submit">Save</button></div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="modal-3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deleting Student Name Record</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center"><label class="col-form-label" style="font-family: Alatsi, sans-serif;">ARE YOU SURE YOU WANT TO DELETE THIS RECORD?</label></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Delete</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-4">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Message</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Message:</label><textarea class="border-dark form-control" name="message" placeholder="Enter message here..." rows="5" required=""></textarea></div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Send</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script type="text/javascript">
        var url = window.location.search;
        var urlParam = new URLSearchParams(url);
        var recordID = urlParam.get('recordID');
        // alert(recordID);
        if (recordID == 'PFAF') {
            // alert(recordID);
            var peerLink = document.getElementById("peerRecord");
            peerLink.classList.add("active");
            var peerTab = document.getElementById("tab-2");
            peerTab.classList.add("active");
            var peerTabShow = document.getElementById("tab-2");
            peerTabShow.classList.add("show");

        } else if (recordID == 'SIR') {
            // alert(recordID);
            var studentLink = document.getElementById("infoRecord");
            studentLink.classList.add("active");
            var studentTab = document.getElementById("tab-1");
            studentTab.classList.add("active");
            var studentTabShow = document.getElementById("tab-1");
            studentTabShow.classList.add("show");

        } else if (recordID == 'CR') {
            // alert(recordID);
            var counselorLink = document.getElementById("counselorRecord");
            counselorLink.classList.add("active");
            var counselorTab = document.getElementById("tab-3");
            counselorTab.classList.add("active");
            var counselorTabShow = document.getElementById("tab-3");
            counselorTabShow.classList.add("show");

        }
    </script>
</body>

</html>