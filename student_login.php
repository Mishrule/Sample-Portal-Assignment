<?php
    $error = '';
    require_once('inc/portaldb.php');
    session_start();
    if(isset($_POST['studentLogin'])){
        $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
        $studentPassword = mysqli_real_escape_string($conn, $_POST['studentPassword']);

        $studentLoginSQL = "SELECT * FROM student_applied WHERE studentname = '$studentName' AND registrationnumber = '$studentPassword'"; 

        $studentLoginResult = mysqli_query($conn, $studentLoginSQL);

        if(mysqli_num_rows($studentLoginResult)==1){
            $_SESSION['registrationnumber'] = $studentPassword;
            header('Location:osis.php');
        }else{
            $error = "Your Login Credentials are invalid Please Try again";
        }
        
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>UEW-K | STUDENT LOGIN</title>
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
                <a class="navbar-brand absolute" href="index.html">UEW-K</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">

                    <ul class="navbar-nav absolute-right">
                        <li>
                            <a href="admin_login.php">Admin</a> / <a href="student_login.php">Student</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/big_image_2.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-sm-inner">
                <div class="col-md-7 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-2">STUDENT LOG IN</h1>
                        <p class="bcrumb"><a href="index.html">Home</a> <span
                                class="sep ion-android-arrow-dropright px-2"></span>
                            <span class="current">Log in</span></p>
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
                        <h2 class="mb-4 text-center">Log in with your account</h2>
                        <h3 class="text-center text-danger"><strong><?php echo $error; ?></strong></h3>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="studentName">Username</label>
                                    <input type="text" id="studentName" name="studentName" class="form-control py-2">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-12 form-group">
                                    <label for="studentPassword">Password</label>
                                    <input type="password" id="studentPassword" name="studentPassword"
                                        class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <!-- <input type="submit" value="Login" class="btn btn-primary px-10 py-2"> -->
                                    <div align="center">
                                        <button type="submit" id="studentLogin" name="studentLogin" value="studentLogin"
                                            class="btn btn-primary col-md-8 btn-md py-2">Login</button>
                                    </div>

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