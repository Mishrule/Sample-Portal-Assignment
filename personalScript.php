<?php  
    require_once('inc/portaldb.php');
    require_once('inc/dateTime.php');
        $personalArray = array();
    if(isset($_POST['logindetail'])){
        
        $regNumber = mysqli_real_escape_string($conn, $_POST['logindetail']);

        $personalSQL = "SELECT * FROM student_applied WHERE registrationnumber = '$regNumber'";

        $personalResult = mysqli_query($conn, $personalSQL);

        while($personalRow = mysqli_fetch_array($personalResult)){
            $personalArray['stuReg'] = $personalRow['registrationnumber'];
            $personalArray['stuEmail'] = $personalRow['stuemail'];
            $personalArray['postalAddress'] = $personalRow['postaladdress'];
            $personalArray['phone'] = $personalRow['phone'];
            $personalArray['homeAddress'] = $personalRow['homeaddress'];
        }
        
        echo json_encode($personalArray);
    }

    // =====================================| UPDATE RECORDS
        $showUpdate = '';
    if(isset($_POST['btnupdate'])){
        
        $stuReg = mysqli_real_escape_string($conn, $_POST['stuReg']);
        $stuEmail = mysqli_real_escape_string($conn, $_POST['stuEmail']);
        $stuPostal = mysqli_real_escape_string($conn, $_POST['stuPostal']);
        $stuPhone = mysqli_real_escape_string($conn, $_POST['stuPhone']);
        $stuAddress = mysqli_real_escape_string($conn, $_POST['stuAddress']);

        $personalUpdateSQL = "UPDATE student_applied SET stuemail='$stuEmail', postaladdress='$stuPostal', phone='$stuPhone', homeaddress = '$stuAddress' WHERE registrationnumber = 'stuReg'";

        $personalUpdateResult = mysqli_query($conn, $personalUpdateSQL);

        if($personalUpdateResult){
            $showUpdate = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>'.$stuReg.'</strong> Have Successfully Updated, Thank You...
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }else{
            $showUpdate = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>'.mysqli_error($conn).'</strong> Sorry Failed to Update...
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }

        echo $showUpdate;
        
    }

    // =====================================| LECTURER'S EVALUATION
    $lectureShow = '';
    if(isset($_POST['register'])){
        $sid = mysqli_real_escape_string($conn, $_POST['sid']);
        $courseCode = mysqli_real_escape_string($conn, $_POST['courseCode']);
        $courseTitle = mysqli_real_escape_string($conn, $_POST['courseTitle']);
        $semester = mysqli_real_escape_string($conn, $_POST['semester']);
        $ayear = mysqli_real_escape_string($conn, $_POST['ayear']);
        $evaluate = mysqli_real_escape_string($conn, $_POST['evaluate']);
        $lecturerName = mysqli_real_escape_string($conn, $_POST['lecturerName']);
        // $dateTime = mysqli_real_escape_string($conn, $_POST['agree']);

        $lecturerSQL = "INSERT INTO lecturer_evaluation VALUES('$sid','$courseCode','$courseTitle','$semester','$ayear','$evaluate','$lecturerName','$dateTime')";

        $lecturerResult = mysqli_query($conn, $lecturerSQL);

        if($lecturerResult){
            $lectureShow = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>'.$lecturerName.'</strong> Has has been evaluated Successfully...
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }else{
            $lectureShow = '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>'.mysqli_error($conn).'</strong> Fail to evaluation Lecture Try again...
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            ';
        }
        echo $lectureShow;

    }
?>