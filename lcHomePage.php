<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$is_approved = $_SESSION['is_approved'];
if ($is_approved != "approved") {
    echo "Access denied. You do not have permission to view this page.";
    header("refresh:5;url=index.php");
    exit();
}
include "back_end/database_connection.php";
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

<body style="background: white;">
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-xl-2 d-xl-flex justify-content-xl-center align-items-xl-center"><img src="assets/img/lcLogo.png" width="100"><img src="assets/img/OSAS.png" width="100"></div>
            <div class="col">
                <span class="d-block text-end"><?php echo date("l - F d, Y") ?></span>
                <div class="container" style="display: flex; justify-content: flex-end; float: right;">
                    <a href="back_end/logout.php" class="d-block text-end btn btn-danger"><span>Logout</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="carousel slide carousel-fade" data-bs-ride="carousel" id="carousel-1">
            <div class="carousel-inner">
                <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/lc_building.jpg" alt="Slide Image" height="350">
                    <div class="carousel-caption d-none d-md-block" style="background: rgba(255, 255, 255, 0.2); border-radius: 16px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.3);">
                        <h5>Guidance Counseling</h5>
                        <p>Students are guided and transformed as they learn to appreciate and discover the beauty of their body, soul, and spirit in order to comprehend themselves and the world for the benefit of all.</p>
                        <p>Ensures the institutional norms and regulation controlling student behavior and conduct are implemented wisely. The office's duties include developing and enforcing rules, controlling students behavior, and prescribing consequences for misconduct after following due process. It is expected of the Student Discipline Unit to uphold harmony and tranquility on campus.</p>
                    </div>
                </div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/lc_building.jpg" alt="Slide Image" height="350">
                    <div class="carousel-caption d-md-block" style="background: rgba(255, 255, 255, 0.2); border-radius: 16px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.3);">
                        <h5>Discipline Office</h5>
                        <p>Students are guided and transformed as they learn to appreciate and discover the beauty of their body, soul, and spirit in order to comprehend themselves and the world for the benefit of all.</p>
                    </div>
                </div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/lc_building.jpg" alt="Slide Image" height="350">
                    <div class="carousel-caption d-md-block" style="background: rgba(255, 255, 255, 0.2); border-radius: 16px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.3);">
                        <h5>Medical and Dental</h5>
                        <p>Students are guided and transformed as they learn to appreciate and discover the beauty of their body, soul, and spirit in order to comprehend themselves and the world for the benefit of all.</p>
                        <p>It is dedicated to assisting students through the services provided by qualified and professional guidance counselors and staff to serve the student's interest ; to provide substantial and meaningful activities to promote student's well-being and empowerment; to pique student's curiosity about reality; to educate them about the good, beautiful, and deserving; and to instill the values of love, peace, and unity in them and the rest of the world through various activities.</p>
                    </div>
                </div>
                <div class="carousel-item"><img class="w-100 d-block" src="assets/img/lc_building.jpg" alt="Slide Image" height="350">
                    <div class="carousel-caption d-md-block" style="background: rgba(255, 255, 255, 0.2); border-radius: 16px; box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); backdrop-filter: blur(5px); -webkit-backdrop-filter: blur(5px); border: 1px solid rgba(255, 255, 255, 0.3);">
                        <h5>Student Organization</h5>
                        <p>Student organization at Lemery Colleges exist to give students the chance to interact, learn, and lead while pursuing their passions and interest alongside other students and hone their leadership and organizational skills. It also provides student organization high quality support for things like formation and establishment, planning, execution, monitoring, and evaluation of their own social, educational, and cultural activities, to name a few. The unit is also designed to equip student organization officials and members with the necessary skills through the delivery of leadership trainings and other capacity-building activities.</p>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
            </ol>
        </div>
    </div>
    <div class="container bg-light" style="filter: brightness(100%);margin-top: 50px;padding: 15px;border-radius: 20px;">
        <div class="row">
            <div class="col">
                <h1 class="text-center" style="font-family: Alatsi;">Office of the Student Affairs and Services</h1>
                <h1 class="text-center" style="font-family: Alatsi;">OSAS</h1>
                <div class="container">
                    <h3 style="font-family: Alatsi, sans-serif;">About</h1>
                        <p class="lead" style="font-family: Alatsi, sans-serif;text-align: justify;">The Office of the Student Affair and Services (OSAS) offers pertinent services in response to the student's expanding needs. In order for students to maximize their potential, OSAS primarily serve as a support component in their academic, social, emotional, vocational, spiritual, and holistic holistic development. The OSAS is accountable for the improvement and&nbsp; implementation of numerous&nbsp; applications and offerings that concentrate on the non-constructional components of the student's life in college, along with the purchase of values&nbsp; and capabilities for lifelong learning.</p>
                        <p class="lead" style="font-family: Alatsi, sans-serif;text-align: justify;">Additionally it helps the pupils see themselves as unique individuals who contribute to the country's overall well-being.</p>
                        <p class="lead" style="font-family: Alatsi, sans-serif;text-align: justify;">The Student Services helps students succeed academically. improve the quality of their education experience, and increase the diversity of their lives.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;padding: 0px;margin-bottom: 10px;border-style: none;border-top-style: none;border-right: 1px solid var(--bs-blue) ;border-bottom: 1px solid var(--bs-blue) ;border-left: 1px solid var(--bs-blue) ;">
        <div class="card" style="border-top-style: none;">
            <div class="card-body">
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-5">Downloads</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-6">Forms</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" role="tabpanel" id="tab-5" style="padding: 25px;">
                            <div>
                                <div class="row">
                                    <div class="col">
                                        <a href="back_end/downloadActivityForm.php" style="color: var(--bs-red);font-size: 25px;" target="_blank"><i class="fas fa-download" style="color: var(--bs-red);font-size: 25px;"></i>&nbsp;Activity Request and Approval Form</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"><a href="back_end/downloadIncidentReportForm.php" style="color: var(--bs-red);font-size: 25px;" target="_blank"><i class="fas fa-download" style="color: var(--bs-red);font-size: 25px;"></i>&nbsp;Incident Report Form</a></div>
                                </div>
                                <div class="row">
                                    <div class="col"><a href="back_end/downloadPFGForm.php" style="color: var(--bs-red);font-size: 25px;" target="_blank"><i class="fas fa-download" style="color: var(--bs-red);font-size: 25px;"></i>&nbsp;PFG Application Form</a></div>
                                </div>
                                <div class="row">
                                    <div class="col"><a href="back_end/downloadStudentInfoForm.php" style="color: var(--bs-red);font-size: 25px;" target="_blank"><i class="fas fa-download" style="color: var(--bs-red);font-size: 25px;"></i>&nbsp;Student's Information Sheet.doc</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" role="tabpanel" id="tab-6" style="padding: 25px;">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-bs-toggle="tab" href="#tab-7">Guidance and Counseling</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-8">Discipline Office</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-9">Student Organization Office</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab" href="#tab-10">Medical Office</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" role="tabpanel" id="tab-7" style="padding: 25px;">
                                        <div class="card-header">
                                            <div class="card-body">
                                                <form action="back_end/addGuidanceForm.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;margin-right: 10px;">Type of file to upload</label>
                                                            <!-- <select class="form-select" data-bs-toggle="tooltip" data-bss-tooltip="" name="file_type" placeholder="Select type of file" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);">
                                                        <option value="Student Information Sheet">Student Information Sheet</option>
                                                        <option value="Peer Facilitator Group Application Form">Peer Facilitator Group Application Form</option>
                                                        <option value="Appointment for Counseling">Appointment for Counseling</option>
                                                    </select> -->
                                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-1" name="fileType" value="Student Information Sheet"><label class="form-check-label" for="formCheck-1" style="font-family: Alatsi, sans-serif;">Student Information Sheet</label></div>
                                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-2" name="fileType" value="Peer Facilitator Group Application Form"><label class="form-check-label" for="formCheck-2" style="font-family: Alatsi, sans-serif;">Peer Facilitator Group Application Form</label></div>
                                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-5" name="fileType" value="Appointment for Counseling"><label class="form-check-label" for="formCheck-5" style="font-family: Alatsi, sans-serif;">Appointment for Counseling</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <select class="form-control form-select" name="studentDepartment" id="stuDept">
                                                            <option value="" disabled="" selected="">Select Department</option>
                                                            <option value="Computer Studies">Computer Studies</option>
                                                            <option value="Criminal Justice">Criminal Justice</option>
                                                            <option value="Business & Management">Business & Management</option>
                                                            <option value="Teacher Education">Teacher Education</option>
                                                            <option value="Arts & Sciences">Arts & Sciences</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentCode" placeholder="Student Code/ID" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentFirstname" placeholder="Enter First Name" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentLastname" placeholder="Enter Last Name" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentMiddlename" placeholder="Enter Middle Name"></div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Year/Grade</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentYear" placeholder="1st Year/Grade 11" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Course/Track &amp; Section</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentCourse" placeholder="BSIT - 1/ABM - 1" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Contact Number</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentNumber" placeholder="09123456789" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Upload File (PDF Format)</label><input class="form-control" type="file" style="border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;font-family: Alatsi, sans-serif;text-align: right;" accept=".pdf" name="filename"></div>
                                                    </div>
                                                    <br>
                                                    <div class="row" id="appointment-row" style="border-style: dotted; padding: 1rem;">
                                                        <div class="col"><label class="form-label text-danger" style="font-family: Alatsi, sans-serif;">Appointment for Counseling ONLY</label></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Request Schedule Date</label><input class="form-control" type="date" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="schedule_date"></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Main Concern</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="main_concern" placeholder="Type your main concern here"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-end" style="padding-top: 12px;">
                                                            <div class="btn-group" role="group"><button class="btn btn-primary bg-danger" type="reset">Cancel</button><button class="btn btn-primary" name="addStudentInfo" type="submit">Submit</button></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="tab-8" style="padding: 25px;">
                                        <div class="card-header">
                                            <div class="card-body">
                                                <form action="back_end/addIncidentForm.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <select class="form-control form-select" name="studentDepartment" id="stuDept">
                                                            <option value="" disabled="" selected="">Select Department</option>
                                                            <option value="Computer Studies">Computer Studies</option>
                                                            <option value="Criminal Justice">Criminal Justice</option>
                                                            <option value="Business & Management">Business & Management</option>
                                                            <option value="Teacher Education">Teacher Education</option>
                                                            <option value="Arts & Sciences">Arts & Sciences</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentCode" placeholder="Student Code/ID" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentFirstname" placeholder="Enter First Name" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentLastname" placeholder="Enter Last Name" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentMiddlename" placeholder="Enter Middle Name"></div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Year/Grade</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentYear" placeholder="1st Year/Grade 11" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Course/Track &amp; Section</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentCourse" placeholder="BSIT - 1/ABM - 1" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Contact Number</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentNumber" placeholder="09123456789" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Upload File (PDF Format)</label><input class="form-control" type="file" style="border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;font-family: Alatsi, sans-serif;text-align: right;" name="filename" required=""></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-end" style="padding-top: 12px;">
                                                            <div class="btn-group" role="group"><button class="btn btn-primary bg-danger" type="reset">Cancel</button><button class="btn btn-primary" name="addIncidentReport" type="submit">Submit</button></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="tab-9" style="padding: 25px;">
                                        <div class="card-header">
                                            <div class="card-body">
                                                <form action="back_end/addStudentOrgForm.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <select class="form-control form-select" name="studentDepartment" id="stuDept">
                                                            <option value="" disabled="" selected="">Select Department</option>
                                                            <option value="Computer Studies">Computer Studies</option>
                                                            <option value="Criminal Justice">Criminal Justice</option>
                                                            <option value="Business & Management">Business & Management</option>
                                                            <option value="Teacher Education">Teacher Education</option>
                                                            <option value="Arts & Sciences">Arts & Sciences</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;margin-right: 10px;">Type of file to upload</label>
                                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-3" name="fileType" value="New"><label class="form-check-label" for="formCheck-1" style="font-family: Alatsi, sans-serif;">New</label></div>
                                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-4" name="fileType" value="Revised"><label class="form-check-label" for="formCheck-1" style="font-family: Alatsi, sans-serif;">Revised</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentCode" placeholder="Student Code/ID" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentFirstname" placeholder="Enter First Name" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentLastname" placeholder="Enter Last Name" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentMiddlename" placeholder="Enter Middle Name"></div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Year/Grade</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentYear" placeholder="1st Year/Grade 11" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Course/Track &amp; Section</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentCourse" placeholder="BSIT - 1/ABM - 1" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Contact Number</label><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentNumber" placeholder="09123456789" required=""></div>
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;">Upload File (PDF Format)</label><input class="form-control" type="file" style="border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;font-family: Alatsi, sans-serif;text-align: right;" name="filename" required=""></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col text-end" style="padding-top: 12px;">
                                                            <div class="btn-group" role="group"><button class="btn btn-primary bg-danger" type="reset">Cancel</button><button class="btn btn-primary" name="addActivity" type="submit">Submit</button></div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="tab-10" style="padding: 25px;">
                                        <div class="card-header">
                                            <div class="card-body">
                                                <form action="back_end/addHealthRecord.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <select class="form-control form-select" name="studentDepartment" id="stuDept">
                                                            <option value="" disabled="" selected="">Select Department</option>
                                                            <option value="Computer Studies">Computer Studies</option>
                                                            <option value="Criminal Justice">Criminal Justice</option>
                                                            <option value="Business & Management">Business & Management</option>
                                                            <option value="Teacher Education">Teacher Education</option>
                                                            <option value="Arts & Sciences">Arts & Sciences</option>
                                                        </select>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col"><label class="form-label" style="font-family: Alatsi, sans-serif;margin-right: 10px;">Type of file to upload</label>
                                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-3" name="fileType" value="Dental Record"><label class="form-check-label" for="formCheck-1" style="font-family: Alatsi, sans-serif;">Dental Record</label></div>
                                                            <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-4" name="fileType" value="Medical Record"><label class="form-check-label" for="formCheck-1" style="font-family: Alatsi, sans-serif;">Medical Record</label></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-radius: 0px;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);" name="studentCode" placeholder="Student Code/ID" required=""></div>
                                                        <div class="col"><input class="form-control" type="text" name="lastname" placeholder="Enter Last Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                                                        <div class="col"><input class="form-control" type="text" name="firstname" placeholder="Enter First Name" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                                                        <div class="col"><input class="form-control" type="text" name="middlename" placeholder="Enter Middle Name" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);border-radius: 0px;"></div>
                                                    </div>
                                                    <br>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-dark" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="container">
            <p class="copyright" style="padding: 0;color: var(--bs-light);">All Right Reserved © 2022</p>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

<script>
    // $(document).ready(function() {
    //    $('input[type="radio"]').click(function() {
    //        if($(this).attr('id') == 'formCheck-5') {
    //             $('#show-me').show();           
    //        }
    //        else {
    //             $('#show-me').hide();   
    //        }
    //    });
    // });
</script>

</html>