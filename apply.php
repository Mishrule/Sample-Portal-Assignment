<?php
  require_once('inc/portaldb.php');
  require_once('inc/dateTime.php');
  // ================================| Apply |===========================
    $applyShow = '';
  if(isset($_POST['register'])){
    
    $registrationNo = mysqli_real_escape_string($conn, $_POST['registrationNo']);
    $studentName = mysqli_real_escape_string($conn, $_POST['studentName']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    // $admissionDate = mysqli_real_escape_string($conn, $_POST['admissionDate']);
    $program = mysqli_real_escape_string($conn, $_POST['program']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $ssn = mysqli_real_escape_string($conn, $_POST['ssn']);
    $homePhone = mysqli_real_escape_string($conn, $_POST['homePhone']);
    $stuEmail = mysqli_real_escape_string($conn, $_POST['stuEmail']);
    $postalAddress = mysqli_real_escape_string($conn, $_POST['postalAddress']);
    $campus = mysqli_real_escape_string($conn, $_POST['campus']);
    $session = mysqli_real_escape_string($conn, $_POST['session']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $completionDate = mysqli_real_escape_string($conn, $_POST['completionDate']);
    $major = mysqli_real_escape_string($conn, $_POST['major']);
    $currentLevel = mysqli_real_escape_string($conn, $_POST['currentLevel']);
    $nationalID = mysqli_real_escape_string($conn, $_POST['nationalID']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $homeAddress = mysqli_real_escape_string($conn, $_POST['homeAddress']);
    // $images = mysqli_real_escape_string($conn, $_POST['image']);
    
    $images = $_FILES['stdimage']['name'];
    $Target = 'images/'.basename( $_FILES['stdimage']['name']);

    if($registrationNo == ''){
      $applyShow = 'Registration Number can not be Empty';
    }else if($studentName == ''){
      $applyShow = 'Student Name can not be Empty';
    }else if($program == ''){
      $applyShow = 'Program can not be Empty';
    }else if($nationalID == ''){
      $applyShow = 'National ID can not be Empty';
    }else if($phone == ''){
      $applyShow = 'Phone Number can not be Empty';
    }else{

    $applySql = "INSERT INTO student_applied VALUES('$registrationNo','$studentName','$sex','$dateTime','$program','$level','$nationality','$ssn','$homePhone','$stuEmail','$postalAddress','$campus','$session','$dob','$completionDate','$major','$currentLevel','$nationalID','$phone','$homeAddress','$images','$dateTime')";

    $applyResult = mysqli_query($conn, $applySql);
    move_uploaded_file($_FILES['stdimage']['tmp_name'], $Target);

      if($applyResult){
        $applyShow = '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>'.$studentName.'</strong> Have Successfully Applied, Thank You...
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ';
      }else{
        $applyShow = '
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>'.mysqli_error($conn).'</strong> Failed Try Again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        ';
        
      }
    }

  }
?>
<!doctype html>
<html lang="en">

<head>
    <title>UEW-K | APPLY</title>
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
                            <a href="login.html">Admin</a> / <a href="register.html">Student</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5"
        style="background-image: url(images/big_image_3.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-center site-hero-sm-inner">
                <div class="col-md-7 text-center">

                    <div class="mb-5 element-animate">
                        <h1 class="mb-2">Apply Online</h1>
                        <p class="bcrumb"><a href="index.html">Home</a> <span
                                class="sep ion-android-arrow-dropright px-2"></span>
                            <span class="current">Apply Online (Scroll Down to fill the Online Forms)</span></p>
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
                        <h2 class="mb-5 text-center">Application Forms</h2>
                        <form action="<?php $_PHP_SELF;?>" method="post" enctype="multipart/form-data">
                            <div style="color:red;" class="text-center"><?php echo $applyShow; ?></div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="registrationNo">Registration #:</label>
                                    <input type="Number" id="registrationNo" name="registrationNo"
                                        class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="studentName">Name:</label>
                                    <input type="text" id="studentName" name="studentName" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="my-1 mr-2" for="sex">Sex</label>
                                    <select class="custom-select my-1 mr-sm-2 py-2" id="sex" name="sex">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="program">Programme:</label>
                                    <input type="text" id="program" name="program" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="level">Level at Admission:</label>
                                    <select class="custom-select my-1 mr-sm-2 py-2" id="level" name="level">
                                        <option value="level_100">Level 100</option>
                                        <option value="level_200">Level 200</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="nationality">Nationality:</label>
                                    <input type="text" id="nationality" name="nationality" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="ssn">SSN:</label>
                                    <input type="text" id="ssn" name="ssn" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="homePhone">Home Phone:</label>
                                    <input type="text" id="homePhone" name="homePhone" class="form-control py-2">
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
                                    <input type="text" id="postalAddress" name="postalAddress"
                                        class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="campus">Campus:</label>
                                    <select class="custom-select my-1 mr-sm-2 py-2" id="campus" name="campus">
                                        <option value="Winneba">Winneba</option>
                                        <option value="Kumasi">Kumasi</option>
                                        <option value="Mampong">Mampong</option>
                                        <option value="Adwumako">Adwumako</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="session">Session:</label>
                                    <select class="custom-select my-1 mr-sm-2 py-2" id="session" name="session">
                                        <option value="Regular">Regular</option>
                                        <option value="Evening">Evening</option>
                                        <option value="Weekend">Weekend</option>
                                        <option value="Sandwish">Sandwish</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="dob">Date Of Birth:</label>
                                    <input type="date" id="dob" name="dob" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="completionDate">Date of Completion:</label>
                                    <input type="date" id="completionDate" name="completionDate"
                                        class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="major">Major:</label>
                                    <input type="text" id="major" name="major" class="form-control py-2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="currentLevel">Current Level:</label>
                                    <select class="custom-select my-1 mr-sm-2 py-2" id="currentLevel"
                                        name="currentLevel">
                                        <option value="level_100">Level 100</option>
                                        <option value="level_200">Level 200</option>
                                        <option value="level_300">Level 300</option>
                                        <option value="level_400">Level 400</option>
                                    </select>
                                </div>
                            </div>

                            | <div class="row">
                                <div class="col-md-12 form-group">
                                    <label for="nationalID">National ID:</label>
                                    <input type="text" id="nationalID" name="nationalID" class="form-control py-2">
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

                            <div class="row">
                                <div class="col-md-12 form-group">

                                    <!-- <input type="file" class="custom-file-input py-2" id="stdimage" name="stdimage">
                                    <label class="custom-file-label" for="stdimage">Choose file</label> -->

                                    <label for="stdimage">Choose Image:</label>
                                    <input type="File" id="stdimage" name="stdimage" class="form-control py-2">
                                </div>

                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox">

                                        <input type="checkbox" id="agree" name="agree" value="I agree"
                                            class="custom-control-input py-2"><label class="custom-control-label"
                                            for="agree">I agree</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <button type="submit" name="register" id="register" value="register"
                                        class="btn btn-primary col-md-12 py-2">Apply</button>
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
    $('#register').attr('disabled', 'True');

    $(document).on('click', '.alert', function() {
        window.location.href = 'index.html';
    });

    $('#stdimage').change(function() {

        if ($('#registrationNo').val() == '') {
            $('#registrationNo').css({
                'border-color': 'red'
            });
        } else if ($('#studentName').val() == '') {
            $('#studentName').css({
                'border-color': 'red'
            });
        } else if ($('#program').val() == '') {
            $('#program').css({
                'border-color': 'red'
            });
        } else if ($('#nationalID').val() == '') {
            $('#nationalID').css({
                'border-color': 'red'
            });
        } else if ($('#phone').val() == '') {
            $('#phone').css({
                'border-color': 'red'
            });
        } else if ($('#stdimage').val() == 'No file chosen') {
            $('#stdimage').css({
                'border-color': 'red'
            });
        } else {

        }

    });
    $("#agree").change(function() {
        if (this.checked) {
            $('#register').attr('disabled', false);
        } else {
            $('#register').attr('disabled', true);
        }
    });

})
</script>