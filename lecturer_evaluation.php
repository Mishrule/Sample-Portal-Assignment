<?php
  require_once('inc/portaldb.php');
  require_once('student_session.php');

?>
<!doctype html>
<html lang="en">

<head>
    <title>UEW-K | EVALUATE LECTURER</title>
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

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/big_image_3.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-sm-inner">
                <div class="col-md-7 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-2">Lecturer Evaluation</h1>
                        <p class="bcrumb"><a href="osis.php">Home</a> <span
                                class="sep ion-android-arrow-dropright px-2"></span>
                            <span class="current">Evaluate (Scroll Down to Evaluate Lecturer.)</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="form-wrap">
                        <h2 class="mb-5 text-center">Lecturer Evaluation Forms</h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div style="color:red;" class="text-center infoShow"></div>
                            <div class="row" hidden>
                                <div class="col-md-12 form-group">
                                    <label for="studentID">ID:</label>
                                    <input type="text" id="studentID" name="studentID" class="form-control py-2"
                                        value="<?php echo $student_login; ?> " disabled>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="courseCode">Course Code #:</label>
                                    <input type="text" id="courseCode" name="courseCode" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="courseTitle">Course Title:</label>
                                    <input type="text" id="courseTitle" name="courseTitle" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="my-1 mr-2" for="semester">Semester</label>
                                    <select class="custom-select my-1 mr-sm-2 py-2" id="semester" name="semester">
                                        <option value="semester_one">First Semester</option>
                                        <option value="semester_two">Second Semester</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="ayear">Academic Year:</label>
                                    <input type="text" id="ayear" name="ayear" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="evaluate">Evaluation:</label>
                                    <select class="custom-select my-1 mr-sm-2 py-2" id="evaluate" name="evaluate">
                                        <option value="Excellent">Excellent</option>
                                        <option value="Very_Good">Very Good</option>
                                        <option value="Average">Average</option>
                                        <option value="Bad">Bad</option>
                                        <option value="Worse">Worse</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="lecturerName">Lecturer Name:</label>
                                    <input type="text" id="lecturerName" name="lecturerName" class="form-control py-2">
                                </div>
                            </div>


                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" name="register" id="register" value="register"
                                        class="btn btn-primary col-md-12 py-2">Evaluate</button><br>
                                    <div style="color:red;" class="text-center infoShow"></div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    $('#register').click(function() {
        var sid = $('#studentID').val();
        var courseCode = $('#courseCode').val();
        var courseTitle = $('#courseTitle').val();
        var semester = $('#semester').val();
        var ayear = $('#ayear').val();
        var evaluate = $('#evaluate').val();
        var lecturerName = $('#lecturerName').val();
        // var agree = $('#agree').val();
        var register = $('#register').val();

        if (courseCode == '') {
            $('#courseCode').css({
                'border-color': 'red'
            });
            $('.infoShow').html('<div class="alert alert-danger">Course Code can\'t be empty</div>');
        } else if (courseTitle == '') {
            $('#courseTitle').css({
                'border-color': 'red'
            });
            $('.infoShow').html('<div class="alert alert-danger">Course Title can\'t be empty</div>');
        } else if (semester == '') {
            $('#semester').css({
                'border-color': 'red'
            });
            $('.infoShow').html('<div class="alert alert-danger">Semester can\'t be empty</div>');
        } else if (ayear == '') {
            $('#ayear').css({
                'border-color': 'red'
            });
            $('.infoShow').html('<div class="alert alert-danger">Year can\'t be empty</div>');
        } else if (evaluate == '') {
            $('#evaluate').css({
                'border-color': 'red'
            });
            $('.infoShow').html('<div class="alert alert-danger">Evaluate can\'t be empty</div>');
        } else if (lecturerName == '') {
            $('#lecturerName').css({
                'border-color': 'red'
            });
            $('.infoShow').html('<div class="alert alert-danger">Lecturer Name can\'t be empty</div>');
        } else {

            $.ajax({
                url: 'personalScript.php',
                method: 'POST',
                data: {
                    sid,
                    courseCode,
                    courseTitle,
                    semester,
                    ayear,
                    evaluate,
                    lecturerName,
                    register
                },
                success: function(data) {
                    $('.infoShow').html(data);
                    setTimeout(() => {
                        window.location.href = 'osis.php';
                    }, 5000);
                }
            })
        }

    })

    $('.alert').click(function() {
        window.location.href = 'osis.php';
    })

})
</script>