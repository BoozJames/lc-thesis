<?php 
    // include 'phpqrcode/qrlib.php';
    session_start();
    include "back_end/database_connection.php";
    

    //     // ORDER BY medicine_name ASC
        
    // $query = "select * from medicinelist ORDER BY medicine_name ASC limit $start_from,$num_per_page";
    // $result = mysqli_query($conn,$query);

    if(isset($_POST['search']))
    {
        $valueToSearchDental = $_POST['valueToSearch'];
        // search in all table columns
        // using concat mysql function

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $num_per_page = 10;
        $start_from = ($page-1)*10;
        $dentalquery = "SELECT * FROM `lcmedicaltable` WHERE CONCAT(`student_lastname`) LIKE '%".$valueToSearch."%'";
        $medicalquery = "SELECT * FROM `lcmedicaltable` WHERE CONCAT(`student_lastname`) LIKE '%".$valueToSearch."%'";
        $allquery = "SELECT * FROM `lcmedicaltable` WHERE CONCAT(`student_lastname`) LIKE '%".$valueToSearch."%'";
        $dental_result = filterDental($dentalquery);
        $medical_result = filterMedical($medicalquery);
        $all_result = filterAll($allquery);
        
    }
     else {
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }
        $num_per_page = 10;
        $start_from = ($page-1)*10;
        $dentalquery = "select * from lcmedicaltable where file_type = 'Dental Record' ORDER BY student_lastname ASC limit $start_from,$num_per_page ";
        $medicalquery = "select * from lcmedicaltable where file_type = 'Medical Record' ORDER BY student_lastname ASC limit $start_from,$num_per_page ";
        $allquery = "select * from lcmedicaltable ORDER BY student_lastname ASC limit $start_from,$num_per_page ";
        $dental_result = filterDental($dentalquery);
        $medical_result = filterMedical($medicalquery);
        $all_result = filterAll($allquery);        
    }

    // function to connect and execute the query
    function filterDental($dentalquery)
    {
        $connect = mysqli_connect("localhost", "root", "", "lcproject");
        $filter_Result = mysqli_query($connect, $dentalquery);
        return $filter_Result;
    }
    function filterMedical($medicalquery)
    {
        $connect = mysqli_connect("localhost", "root", "", "lcproject");
        $filter_Result = mysqli_query($connect, $medicalquery);
        return $filter_Result;
    }
    function filterAll($allquery)
    {
        $connect = mysqli_connect("localhost", "root", "", "lcproject");
        $filter_Result = mysqli_query($connect, $allquery);
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
</head>

<body style="background: #002654;">
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-xl-2 d-xl-flex justify-content-xl-center align-items-xl-center"><img src="assets/img/lcLogo.png" width="100"></div>
            <div class="col">
                <h1 class="display-3" style="font-family: 'Olde English';">Lemery Colleges</h1>
                <h5 style="font-family: Alegreya, serif;">Creating Life Champions</h5>
            </div>
            <div class="col">
                <span class="d-block text-end"><?php echo date("F d, Y")?></span>
                <a href="back_end/logout.php" class="d-block text-end"><span>Logout</span></a>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 7px;">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-dark bg-light" style="font-family: Alegreya, serif;padding: 25px;color: rgb(33, 37, 41);border-right-width: 15px;border-right-style: double;border-left: 15px double rgb(33, 37, 41);">MEDICAL AND DENTRAL OFFICE</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3 style="font-family: Alegreya, serif;">Student Medical And Dental Records</h3>
                                </div>
                                 <div class="col d-flex justify-content-end align-items-center">
                                    <form action="?recordID=Dental" method="POST">
                                        <input class="form-control d-inline-block" type="text" name="valueToSearch" placeholder="Search here" required="" style="width: 375px;"><button class="btn btn-success link-light d-inline-block" name="search" type="submit">Search</button></form>
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
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span><strong><?php echo $_GET['error']; ?></strong></span>
                                </div>
                            <?php } ?>
                        <div class="card-body"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-1" data-bs-toggle="modal">ADD NEW RECORD</button>
                            <div>
                                <ul class="nav nav-tabs" role="tablist" style="font-family: Alegreya, serif;font-size: 20px;">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-1">All Records</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-3">Dental Records</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-2">Medical Records</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header" style="border-right-color: rgb(33, 37, 41);background: #006854;">
                                                            <h3 class="text-light" style="font-family: Alegreya, serif;">All Records</h3>
                                                            
                                                            
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
                                                                            <th>Date Added</th>
                                                                            <th>File Uploaded</th>
                                                                            <th>File Type</th>
                                                                            <th>Contact Number</th>
                                                                            <!-- <th>Status</th> -->
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                            if (mysqli_num_rows($all_result) > 0) {
                                         // code...
                                    
                                            $sr = 1;

                                            while ($row = mysqli_fetch_assoc($all_result)) {
                        
                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $row['student_lastname']; echo ","?> 
                                                <?php echo $row['student_firstname']?> 
                                                <?php echo substr($row['student_middlename'], 0, 1); echo "."; ?></td>
                                            <td><?php echo $row['student_year']?></td>
                                            <!-- <td>3</td> -->
                                            <td><?php echo $row['student_course_section']?></td>
                                            <td><?php echo $row['submission_date']?></td>
                                            <td><a href="back_end/downloadDentalRecord.php?id=<?php echo $row['id']?>" target="_blank"><?php echo $row['filename']?></a></td>
                                            <td><?php echo $row['file_type']?></td>
                                            <td><?php echo $row['student_number']?></td>
                                            <!-- <td><?php echo $row['status']?></td> -->
                                                                            <td>
                                                                                <div class="btn-group" role="group"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-4<?php echo $row['id']?>" data-bs-toggle="modal"><i class="far fa-paper-plane"></i></button><button class="btn btn-primary bg-danger" type="button" data-bs-target="#modal-3<?php echo $row['id']?>" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i></button></div>
                                                                            </td>
                                                                        </tr>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-3<?php echo $row['id']?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deleting Student Name Record</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <input type="text" name="id" value="<?php echo $row['id']?>"> -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center"><label class="col-form-label" style="font-family: Alatsi, sans-serif;">ARE YOU SURE YOU WANT TO DELETE THIS RECORD?</label></div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><a href="back_end/deleteMedicalRecord.php?medicalID=<?php echo $row['id']?>" class="btn btn-primary" role="button">Delete</a></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-4<?php echo $row['id']?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Message</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="back_end/sendNotif.php" method="POST">
                        <input type="text" name="id" hidden value="<?php echo $row['student_number']?>">
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

                                            }else{
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
                                                    $pr_query = "select * from lcmedicaltable WHERE file_type = 'Dental Recod'";
                                                    $pr_result = mysqli_query($dbConnection,$pr_query);
                                                    $total_record = mysqli_num_rows($pr_result );
                                                    $total_page = ceil($total_record/$num_per_page);
                                                ?>

                                                <input type="text" disabled name="" 
                                                    value="Page <?php echo $page?> of <?php echo $total_page?>" style = "
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                            </td>

                                            <td class="text-right" colspan="4">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" >
                                                
                                                <?php 
                
                                                    $pr_query = "select * from lcmedicaltable WHERE file_type = 'Dental Record'";
                                                    $pr_result = mysqli_query($dbConnection,$pr_query);
                                                    $total_record = mysqli_num_rows($pr_result );
                                                    
                                                    $total_page = ceil($total_record/$num_per_page);

                                                    if($page>1)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".($page-1)."' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                    }

                                                    
                                                    for($i=1;$i<$total_page;$i++)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".$i."' class='btn btn-light'>$i</a>";
                                                    }

                                                    if($i>$page)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".($page+1)."' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
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
                                    <div class="tab-pane fade" role="tabpanel" id="tab-3">
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header" style="border-right-color: rgb(33, 37, 41);background: #006854;">
                                                         <h3 class="text-light" style="font-family: Alegreya, serif;">Student Dental Records</h3>
                                                        
                                                             
                                                            
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
                                                                            <th>Date Added</th>
                                                                            <th>File Uploaded</th>
                                                                            <th>Contact Number</th>
                                                                            <!-- <th>Status</th> -->
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php 
                                            if (mysqli_num_rows($dental_result) > 0) {
                                         // code...
                                    
                                            $sr = 1;

                                            while ($row = mysqli_fetch_assoc($dental_result)) {
                        
                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $row['student_lastname']; echo ","?> 
                                                <?php echo $row['student_firstname']?> 
                                                <?php echo substr($row['student_middlename'], 0, 1); echo "."; ?></td>
                                            <td><?php echo $row['student_year']?></td>
                                            <!-- <td>3</td> -->
                                            <td><?php echo $row['student_course_section']?></td>
                                            <td><?php echo $row['submission_date']?></td>
                                            <td><a href="back_end/downloadDentalRecord.php?id=<?php echo $row['id']?>" target="_blank"><?php echo $row['filename']?></a></td>
                                            <td><?php echo $row['student_number']?></td>
                                            <!-- <td><?php echo $row['status']?></td> -->
                                                                            <td>
                                                                                <div class="btn-group" role="group"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-4<?php echo $row['id']?>" data-bs-toggle="modal"><i class="far fa-paper-plane"></i></button><button class="btn btn-primary bg-danger" type="button" data-bs-target="#modal-3<?php echo $row['id']?>" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i></button></div>
                                                                            </td>
                                                                        </tr>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-3<?php echo $row['id']?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deleting Student Name Record</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <input type="text" name="id" value="<?php echo $row['id']?>"> -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center"><label class="col-form-label" style="font-family: Alatsi, sans-serif;">ARE YOU SURE YOU WANT TO DELETE THIS RECORD?</label></div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><a href="back_end/deleteMedicalRecord.php?medicalID=<?php echo $row['id']?>" class="btn btn-primary" role="button">Delete</a></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-4<?php echo $row['id']?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Message</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="back_end/sendNotif.php" method="POST">
                        <input type="text" name="id" hidden value="<?php echo $row['student_number']?>">
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

                                            }else{
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
                                                    $pr_query = "select * from lcmedicaltable WHERE file_type = 'Dental Recod'";
                                                    $pr_result = mysqli_query($dbConnection,$pr_query);
                                                    $total_record = mysqli_num_rows($pr_result );
                                                    $total_page = ceil($total_record/$num_per_page);
                                                ?>

                                                <input type="text" disabled name="" 
                                                    value="Page <?php echo $page?> of <?php echo $total_page?>" style = "
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                            </td>

                                            <td class="text-right" colspan="4">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" >
                                                
                                                <?php 
                
                                                    $pr_query = "select * from lcmedicaltable WHERE file_type = 'Dental Record'";
                                                    $pr_result = mysqli_query($dbConnection,$pr_query);
                                                    $total_record = mysqli_num_rows($pr_result );
                                                    
                                                    $total_page = ceil($total_record/$num_per_page);

                                                    if($page>1)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".($page-1)."' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                    }

                                                    
                                                    for($i=1;$i<$total_page;$i++)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".$i."' class='btn btn-light'>$i</a>";
                                                    }

                                                    if($i>$page)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".($page+1)."' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
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
                                    <div class="tab-pane fade" role="tabpanel" id="tab-2">
                                        <div class="row">
                                            <div class="col" style="padding: 12px;">
                                                <div class="card">
                                                    <div class="card">
                                                        <div class="card-header" style="border-right-color: rgb(33, 37, 41);background: #006854;">
                                                            <h3 class="text-light" style="font-family: Alegreya, serif;">Student Medical Records</h3>
                                                            
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
                                            if (mysqli_num_rows($medical_result) > 0) {
                                         // code...
                                    
                                            $sr = 1;

                                            while ($row = mysqli_fetch_assoc($medical_result)) {
                        
                                        ?>
                                                                        <tr>
                                                                            <td><?php echo $row['student_lastname']; echo ","?> 
                                                <?php echo $row['student_firstname']?> 
                                                <?php echo substr($row['student_middlename'], 0, 1); echo "."; ?></td>
                                            <td><?php echo $row['student_year']?></td>
                                            <!-- <td>3</td> -->
                                            <td><?php echo $row['student_course_section']?></td>
                                            <td><?php echo $row['submission_date']?></td>
                                            <td><a href="back_end/downloadMedicalRecord.php?id=<?php echo $row['id']?>" target="_blank"><?php echo $row['filename']?></a></td>
                                            <td><?php echo $row['student_number']?></td>
                                            <!-- <td><?php echo $row['status']?></td> -->
                                                                            <td>
                                                                                <div class="btn-group" role="group"><button class="btn btn-primary bg-success" type="button" data-bs-target="#modal-4<?php echo $row['id']?>" data-bs-toggle="modal"><i class="far fa-paper-plane"></i></button><button class="btn btn-primary bg-danger" type="button" data-bs-target="#modal-3<?php echo $row['id']?>" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i></button></div>
                                                                            </td>
                                                                        </tr>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-3<?php echo $row['id']?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Deleting Student Name Record</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <input type="text" name="id" value="<?php echo $row['id']?>"> -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center"><label class="col-form-label" style="font-family: Alatsi, sans-serif;">ARE YOU SURE YOU WANT TO DELETE THIS RECORD?</label></div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><a href="back_end/deleteMedicalRecord.php?medicalID=<?php echo $row['id']?>" class="btn btn-primary" role="button">Delete</a></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-4<?php echo $row['id']?>">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Send Message</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="back_end/sendNotif.php" method="POST">
                        <input type="text" name="id" hidden value="<?php echo $row['student_number']?>">
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

                                            }else{
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
                                                    $pr_query = "select * from lcmedicaltable WHERE file_type = 'Medical Recod'";
                                                    $pr_result = mysqli_query($dbConnection,$pr_query);
                                                    $total_record = mysqli_num_rows($pr_result );
                                                    $total_page = ceil($total_record/$num_per_page);
                                                ?>

                                                <input type="text" disabled name="" 
                                                    value="Page <?php echo $page?> of <?php echo $total_page?>" style = "
                                                    border: none;
                                                    font-family: 'Nunito', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                                                    color: #858796;
                                                ">
                                            </td>

                                            <td class="text-right" colspan="4">
                                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers" >
                                                
                                                <?php 
                
                                                    $pr_query = "select * from lcmedicaltable WHERE file_type = 'Medical Record'";
                                                    $pr_result = mysqli_query($dbConnection,$pr_query);
                                                    $total_record = mysqli_num_rows($pr_result );
                                                    
                                                    $total_page = ceil($total_record/$num_per_page);

                                                    if($page>1)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".($page-1)."' class='btn btn-success' ><i class='fas fa-chevron-left' style='color: white'></i></a>";
                                                    }

                                                    
                                                    for($i=1;$i<$total_page;$i++)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".$i."' class='btn btn-light'>$i</a>";
                                                    }

                                                    if($i>$page)
                                                    {
                                                        echo "<a href='lcMedicalOffice.php?page=".($page+1)."' class='btn btn-success'><i class='fas fa-chevron-right' style='color: white'></i></a>";
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
                    <form action="back_end/addHealthRecord.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;margin-right: 10px;">Type of file to upload</label>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-3" name="fileType" value="Dental Record"><label class="form-check-label" for="formCheck-1" style="font-family: Alatsi, sans-serif;">Dental Record</label></div>
                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-4" name="fileType" value="Medical Record"><label class="form-check-label" for="formCheck-1" style="font-family: Alatsi, sans-serif;">Medical Record</label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label" style="font-family: Alatsi, sans-serif;">Student Name</label></div>
                            <div class="col"><input class="form-control" type="text" name="lastname" placeholder="Enter Last Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><input class="form-control" type="text" name="firstname" placeholder="Enter First Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><input class="form-control" type="text" name="middlename" placeholder="Enter Middle Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Year/Grade</label><input class="form-control" type="text" name="gradeYear" placeholder="4th Year/Grade 11" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Course/Track &amp; Section</label><input class="form-control" type="text" name="courseTrack" placeholder="BSIT - 1/ABM - 1" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Contact Number</label><input class="form-control" type="text" name="contactNumber" placeholder="09123456789" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                            <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Upload File (PDF Format)</label><input class="form-control" type="file" style="border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;font-family: Alatsi, sans-serif;text-align: right;" name="filename"></div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" name="submit" type="submit">Save</button></div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript">

        const url = window.location.href;
        const urlParam = new URLSearchParam(url);
        const recordID = urlParam.get('recordID');
        console.log(url);
        alert(window.location.href)
    </script> -->
</body>

</html>