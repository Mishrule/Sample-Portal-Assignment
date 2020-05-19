<?php
    $user = 'root';
    $host = 'localhost';
    $pass_word = '';
    $db = 'portaldb';
    $conn = mysqli_connect($host, $user, $pass_word, $db);
    if($conn){
        // echo 'Connected Successfully';
    }else{
        mysqli_error($conn);
    }
?>