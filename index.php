<?php session_start();

    if(isset($_SESSION['usuarios'])) {
        header('location: principal');
    }else{
        header('location: login');
    }


?>
