<?php
    require_once('inc/portaldb.php');
    require_once('student_session.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>UEW-K | PERSONAL INFO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="icon" href="images/ico.png" type="image/gif" sizes="16x16">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand absolute" href="osis.php">UEW-K Student Information Portal</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tooltip"
                                title="This displays information the institution has on your file. click to view. You can also update your address information here."
                                href="personal_info.php">Personal
                                Information</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tooltip"
                                title="At the end of each semester use this to evaluate lectures for the courses registered."
                                href="lecturer_evaluation.php">Lecturer
                                Evaluation</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav absolute-right">
                        <li>
                            <a href="student_logout.php">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->



    <div class="site-section bg-light element-animate">
        <div class="container">
            <h4><span style="color:blue; font-weight:bold;">Personal Data</span></h4>
            <span id="checklogin" hidden><?php echo $student_login; ?></span>
            <div style="border:2px solid black;">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 col-lg-6 order-md-1">
                            <?php
                                $personalSQL = "SELECT * FROM student_applied WHERE registrationnumber = '$student_login'";
                                $personalResult = mysqli_query($conn, $personalSQL);
                                $personalRow = mysqli_fetch_array($personalResult);
                            ?>
                            <p>Registration #:
                                <strong><?php echo $personalRow['registrationnumber']?></strong>
                            </p>
                            <p>Name: <strong><?php echo $personalRow['studentname']?></strong></p>
                            <p>Sex: <strong><?php echo $personalRow['sex']?></strong></p>
                            <p>Date of Admission: <strong><?php echo $personalRow['admissiondate']?></strong></p>
                            <p>Programme: <strong><?php echo $personalRow['program']?></strong></p>
                            <p>Level at Admission: <strong><?php echo $personalRow['level']?></strong></p>
                            <p>Nationality: <strong><?php echo $personalRow['nationality']?></strong></p>
                            <p>SSN: <strong><?php echo $personalRow['ssn']?></strong></p>
                            <p>Home Phone: <strong><?php echo $personalRow['homephone']?></strong></p>
                            <p>Email: <strong><?php echo $personalRow['stuemail']?></strong></p>
                            <p>Postal Address: <strong><?php echo $personalRow['postaladdress']?></strong></p>
                            <p>Campus: <strong><?php echo $personalRow['campus']?></strong></p>
                            <p>Session: <strong><?php echo $personalRow['session']?></strong></p>
                        </div>
                        <!-- END content -->
                        <div class="col-md-6 col-lg-6 order-md-2">
                            <p align="right">
                                <img src="images/<?php echo $personalRow['image']?>" width="30%"
                                    class="image img-thumbnail" alt="Student Image">
                            </p>
                            <p>Date Of Birth <strong><?php echo $personalRow['dob']?></strong></p>
                            <p>Major: <strong><?php echo $personalRow['major']?></strong></p>
                            <p>Current Level: <strong><?php echo $personalRow['currentlevel']?></strong></p>
                            <p>National ID: <strong><?php echo $personalRow['nationalid']?></strong></p>
                            <p>Mobile Phone: <strong><?php echo $personalRow['phone']?></strong></p>
                            <p>Home Address: <strong><?php echo $personalRow['homeaddress']?></strong></p>

                            <p align="right" style="margin-top:50px"><a href="#"
                                    id="<?php echo $personalRow['registrationnumber']?>" name="edit" class="edit"
                                    data-toggle="modal" data-target="#myModal">
                                    <bold><i class="far fa-edit"></i>Edit</bold>
                                </a></p>
                        </div>
                    </div>
                </div>
                <!-- END Sidebar -->
            </div>
        </div>
        </>
    </div>

    <!-- ======================================== Modal -->

    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-center">Edit Personal Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="<?php $_PHP_SELF;?>" method="post" enctype="multipart/form-data">
                        <div style="color:red;" id="showInfo" class="text-center"></div>

                        <div class="row" hidden>
                            <div class="col-md-12 form-group">
                                <label for="stuReg">Reg:</label>
                                <input type="text" id="stuReg" name="stuReg" class="form-control py-2" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="stuEmail">Email:</label>
                                <input type="email" id="stuEmail" name="stuEmail" class="form-control py-2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="postalAddress">Postal Address:</label>
                                <input type="text" id="postalAddress" name="postalAddress" class="form-control py-2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="phone">Mobile Phone:</label>
                                <input type="text" id="phone" name="phone" class="form-control py-2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="homeAddress">Home Address:</label>
                                <input type="text" id="homeAddress" name="homeAddress" class="form-control py-2">
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" id="btnupdate" name="btnupdate" value="btnupdate"
                        class="btn btn-danger col-md-12" data-dismiss="modal">Update</button>
                </div>

            </div>
        </div>
    </div>




    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f4b214" /></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
<script>
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();

    $('.edit').click(function() {
        var logindetail = $(this).attr('id');

        $.ajax({
            url: 'personalScript.php',
            method: 'POST',
            dataType: 'json',
            data: {
                logindetail
            },
            success: function(data) {
                $('#stuReg').val(data.stuReg);
                $('#stuEmail').val(data.stuEmail);
                $('#postalAddress').val(data.postalAddress);
                $('#phone').val(data.phone);
                $('#homeAddress').val(data.homeAddress);
            }
        })
    });

    // =========================| UPDATE |
    $('#btnupdate').click(function() {
        var stuReg = $('#stuReg').val();
        var stuEmail = $('#stuEmail').val();
        var stuPostal = $('#postalAddress').val();
        var stuPhone = $('#phone').val();
        var stuAddress = $('#homeAddress').val();
        var btnupdate = $('#btnupdate').val();

        if (confirm('Are you sure you want to update your information ')) {
            $.ajax({
                url: 'personalScript.php',
                method: 'POST',
                data: {
                    stuReg,
                    stuEmail,
                    stuPostal,
                    stuPhone,
                    stuAddress,
                    btnupdate
                },
                success: function(data) {
                    $('#showInfo').html(data);
                }
            })
        } else {
            return false;
        }
    })
});
</script>