<?php
    require_once('inc/portaldb.php');
    session_start();

    $studentlogin = $_SESSION['registrationnumber'];
    $studentSQL = "SELECT registrationnumber FROM student_applied WHERE registrationnumber = '$studentlogin'";
    $studentResult = mysqli_query($conn, $studentSQL);

    $studentRow = mysqli_fetch_array($studentResult);
    $student_login = $studentRow['registrationnumber'];
    if(!isset($_SESSION['registrationnumber'])){
        header('loocation:index.html');
    }
?>