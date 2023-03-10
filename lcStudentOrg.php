<?php
// include 'phpqrcode/qrlib.php';
session_start();
error_reporting(E_ERROR | E_PARSE);
$is_approved = $_SESSION['is_approved'];
if ($is_approved != "approved") {
    echo "Access denied. You do not have permission to view this page.";
    header("refresh:5;url=index.php");
    exit();
}
include "back_end/database_connection.php";


//     // ORDER BY medicine_name ASC

// $query = "select * from medicinelist ORDER BY medicine_name ASC limit $start_from,$num_per_page";
// $result = mysqli_query($conn,$query);

if (isset($_POST['search'])) {
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
    $query = "SELECT * FROM `lcstudentorgtable` WHERE CONCAT(`student_lastname`) LIKE '%" . $valueToSearch . "%'";
    $search_result = filterTable($query);
} else {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $num_per_page = 10;
    $start_from = ($page - 1) * 10;
    $query = "select * from lcstudentorgtable ORDER BY student_lastname ASC limit $start_from,$num_per_page";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include "back_end/database_connection.php";
    // $connect = mysqli_connect("localhost", "root", "", "lcproject");
    $filter_Result = mysqli_query($dbConnection, $query);
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
                </div>

            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 7px;">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-dark bg-light" style="font-family: Alegreya, serif;padding: 25px;color: rgb(33, 37, 41);border-right-width: 15px;border-right-style: double;border-left: 15px double rgb(33, 37, 41);">STUDENT ORGANIZATION OFFICE</h1>
            </div>
        </div>
    </div>
    <?php
    $newCount = "SELECT count(*) AS New FROM lcstudentorgtable WHERE status = 'New'";
    $evalCount = "SELECT count(*) AS Eval FROM lcstudentorgtable WHERE status = 'Evaluation'";
    $revisedCount = "SELECT count(*) AS Revised FROM lcstudentorgtable WHERE status = 'Revised'";
    $approvedCount = "SELECT count(*) AS Approved FROM lcstudentorgtable WHERE status = 'Approved'";
    $completedCount = "SELECT count(*) AS Completed FROM lcstudentorgtable WHERE status = 'Completed'";

    $newQuery = mysqli_query($dbConnection, $newCount);
    $newQueryResult = mysqli_fetch_assoc($newQuery);

    $evalQuery = mysqli_query($dbConnection, $evalCount);
    $evalQueryResult = mysqli_fetch_assoc($evalQuery);

    $revisedQuery = mysqli_query($dbConnection, $revisedCount);
    $revisedQueryResult = mysqli_fetch_assoc($revisedQuery);

    $approvedQuery = mysqli_query($dbConnection, $approvedCount);
    $approvedQueryResult = mysqli_fetch_assoc($approvedQuery);

    $completedQuery = mysqli_query($dbConnection, $completedCount);
    $completedQueryResult = mysqli_fetch_assoc($completedQuery);


    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-light bg-info">
                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">New Submitted Activities</h3>
                        </div>
                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $newQueryResult['New'] ?></span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-light bg-danger">
                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Evaluating Activities</h3>
                        </div>
                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $evalQueryResult['Eval'] ?></span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-light bg-warning">
                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Revised Activities</h3>
                        </div>
                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $revisedQueryResult['Revised'] ?></span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-light bg-success">
                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Approved Activities</h3>
                        </div>
                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $approvedQueryResult['Approved'] ?></span></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-light bg-success">
                            <h3 class="text-center" style="font-family: Alatsi, sans-serif;">Completed Activities</h3>
                        </div>
                        <div class="card-body text-center"><span style="font-family: Alegreya, serif;font-size: 25px;"><?php echo $completedQueryResult['Completed'] ?></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" style="padding: 12px;">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3 style="font-family: Alegreya, serif;">Student Organization Activity Records</h3>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <form action="#" method="POST">
                                        <input class="form-control d-inline-block" type="text" name="valueToSearch" placeholder="Search here" required="" style="width: 375px;"><button class="btn btn-success link-light d-inline-block" name="search" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <?php if (isset($_GET['success'])) {  ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span><strong><?php echo $_GET['success']; ?></strong></span>
                            </div>
                        <?php } ?>

                        <?php if (isset($_GET['error'])) {  ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">??</span></button><span><strong><?php echo $_GET['error']; ?></strong></span>
                            </div>
                        <?php } ?>
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
                                    <?php
                                    if (mysqli_num_rows($search_result) > 0) {
                                        // code...

                                        $sr = 1;

                                        while ($row = mysqli_fetch_assoc($search_result)) {

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
                                                    <td><a href="back_end/downloadFromStudentOrg.php?id=<?php echo $row['id'] ?>" target="_blank"><?php echo $row['filename'] ?></a></td>
                                                    <td><?php echo $row['student_number'] ?></td>
                                                    <td><?php echo $row['status'] ?></td>
                                                    <td>
                                                        <div class="btn-group" role="group"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-4<?php echo $row['id'] ?>" data-bs-toggle="modal"><i class="far fa-paper-plane"></i></button>
                                                            <div class="dropdown btn-group" role="group"><button class="btn btn-primary dropdown-toggle bg-success" aria-expanded="false" data-bs-toggle="dropdown" type="button">Status</button>
                                                                <div class="dropdown-menu"><a class="dropdown-item" href="back_end/changeStatus.php?evalID=<?php echo $row['id'] ?>">Evaluation</a><a class="dropdown-item" href="back_end/changeStatus.php?revisedID=<?php echo $row['id'] ?>">Revised</a><a class="dropdown-item" href="back_end/changeStatus.php?approvedID=<?php echo $row['id'] ?>">Approved</a><a class="dropdown-item" href="back_end/changeStatus.php?completedID=<?php echo $row['id'] ?>">Completed</a></div>
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
                                                                <form action="back_end/sendStudentOrg.php" method="POST">
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
                                                        $pr_query = "select * from lcstudentorgtable";
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

                                                            $pr_query = "select * from lcstudentorgtable";
                                                            $pr_result = mysqli_query($dbConnection, $pr_query);
                                                            $total_record = mysqli_num_rows($pr_result);

                                                            $total_page = ceil($total_record / $num_per_page);

                                                            if ($page > 1) {
                                                                echo "<a href='lcStudentOrg.php?page=" . ($page - 1) . "' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                            }


                                                            for ($i = 1; $i < $total_page; $i++) {
                                                                echo "<a href='lcStudentOrg.php?page=" . $i . "' class='btn btn-light'>$i</a>";
                                                            }

                                                            if ($i > $page) {
                                                                echo "<a href='lcStudentOrg.php?page=" . ($page + 1) . "' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
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

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>