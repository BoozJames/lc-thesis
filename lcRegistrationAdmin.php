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

<body style="background: url(&quot;assets/img/lc_building.jpg&quot;) no-repeat;background-size: cover;">
    <div class="container-fluid d-lg-flex justify-content-lg-center mt-5" style="width: 100%;">
        <div class="card" style="width: 900px;">
            <div class="card-body">
                <div class="card">
                    <div class="card-header" style="background: transparent;">
                        <div class="row">
                            <div class="col-lg-3 d-lg-flex justify-content-lg-center align-items-lg-center"><img src="assets/img/lcLogo.png" width="100"></div>
                            <div class="col my-auto">
                                <h1 class="display-3" style="font-family: 'Olde English';">Lemery Colleges</h1>
                                <h5 style="font-family: 'Advent Pro', sans-serif;">Creating Life Champions</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert" style="margin-top: 20px">
                              <?php echo $_GET['error']; ?>
                            </div>
                        <?php } ?>
                        <form action="back_end/addAdmin.php" method="POST">
                            <div class="row" style="margin-top: 10px;">
                                <div class="col"></div>
                                <div class="col d-lg-flex align-items-lg-center"><select class="form-select" data-bs-toggle="tooltip" data-bss-tooltip="" name="accessType" required="" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom-style: solid;border-bottom-color: var(--bs-gray-900);">
                                            <option value="Student">Student</option>
                                            <option value="Guidance Admin">Guidance Admin</option>
                                            <option value="Discipline Admin">Discipline Admin</option>
                                            <option value="Medical Admin">Medical Admin</option>
                                            <option value="Student Org Admin">Student Org Admin</option>
                                        </optgroup>
                                    </select></div>
                                <div class="col"></div>
                            </div>
                            <hr>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-lg-2 d-lg-flex justify-content-lg-end"><label class="col-form-label" style="font-family: Alatsi, sans-serif;text-align: right;font-weight: bold;">Name:</label></div>
                                <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom: 1px solid var(--bs-gray-900);color: rgb(33, 37, 41);" name="adminName" placeholder="Enter Full Name" required=""></div>
                                <div class="col-lg-2 d-lg-flex justify-content-lg-end align-items-lg-start"><label class="col-form-label" style="font-family: Alatsi, sans-serif;font-weight: bold;">Username:</label></div>
                                <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom: 1px solid var(--bs-gray-900);color: rgb(33, 37, 41);" autofocus="" name="adminUsername"></div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-lg-2 d-lg-flex justify-content-lg-end"><label class="col-form-label" style="font-family: Alatsi, sans-serif;text-align: right;font-weight: bold;">Age:</label></div>
                                <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom: 1px solid var(--bs-gray-900);color: rgb(33, 37, 41);" name="adminAge" placeholder="21 yrs. old" required=""></div>
                                <div class="col-lg-2 d-lg-flex justify-content-lg-end align-items-lg-start"><label class="col-form-label" style="font-family: Alatsi, sans-serif;font-weight: bold;">Password:</label></div>
                                <div class="col"><input class="form-control" type="password" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom: 1px solid var(--bs-gray-900);color: rgb(33, 37, 41);" autofocus="" name="adminPassword"></div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-lg-2 d-lg-flex justify-content-lg-end"><label class="col-form-label" style="font-family: Alatsi, sans-serif;text-align: right;font-weight: bold;">Gender:</label></div>
                                <div class="col"><input class="form-control" type="text" style="font-family: Alatsi, sans-serif;border-style: none;border-bottom: 1px solid var(--bs-gray-900);color: rgb(33, 37, 41);" name="adminGender" placeholder="Male - Female" required=""></div>
                                <div class="col-lg-2 d-lg-flex justify-content-lg-end align-items-lg-start"></div>
                                <div class="col"></div>
                            </div>
                            <div class="row" style="margin-top: 40px;">
                                <div class="col d-lg-flex justify-content-lg-center">
                                    <div class="btn-group border rounded border-light" role="group" style="width: 350px;"><button class="btn btn-primary bg-primary bg-gradient border rounded" name="submit" type="submit" style="margin-right: 10px;font-family: Alatsi, sans-serif;">Register</button>
									<a class="btn btn-primary bg-primary bg-gradient border rounded" role="button" style="font-family: Alatsi, sans-serif;" href="index.php">Sign In</a></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>