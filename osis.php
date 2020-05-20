<!doctype html>
<html lang="en">

<head>
    <title>UEW-K | OSIS</title>
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
                <a class="navbar-brand absolute" href="index.html">UEW-K Student Information Portal</a>
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
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->



    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                <div class="col-md-7 col-lg-7 order-md-1">
                    <div class="row">
                        <h4><span style="color:blue;">Welcome to OSIS-SIP</span></h4>
                        <p>
                            OSIS-SIP is a portal that will allow you to access your personal student information.

                            All student information is private and protected by Law. Be sure to close all portal windows
                            when not in use. Student information is only available to the student and to college
                            employees with a legitimate educational interest in a student. Do not share any information
                            with others. Contact your registrar if you have questions.
                        </p>

                    </div>
                </div>
                <!-- END content -->
                <div class="col-md-5 col-lg-5 order-md-2">

                    <p>Messages:</p>
                    <table class="table table-responsive">
                        <tr>
                            <td>You have 0 messages at this time</td>
                        </tr>
                    </table>
                </div>
                <!-- END Sidebar -->
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
});
</script>