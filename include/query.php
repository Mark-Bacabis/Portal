<?php
    session_start();
    include('../includeDB/hrDB.php');
    $empID = $_SESSION['empID'];
    //echo $_SESSION['empID'];

    if(empty($empID)){
        header("location:profLogin.php");
    }

    // SELECT ALL INFORMATION ABOUT PROFESSOR WHO SIGNED IN
    $selProf = mysqli_query($hrConnection, "SELECT * FROM `faculty_list` WHERE employee_id = '$empID' ");
    $prof = mysqli_fetch_assoc($selProf);
?>