<?php
    error_reporting(1);
    session_start();
    include('../include/db.php');
    $empID = $_SESSION['empID'];
    //echo $_SESSION['empID'];

    if(empty($empID)){
        header("location:profLogin.php");
    }

    // SELECT ALL INFORMATION ABOUT PROFESSOR WHO SIGNED IN
    $selProf = mysqli_query($profConn, "SELECT * FROM professor_portal.professor_account as a 
    JOIN professor_portal.professor_account as b 
    ON a.emp_id = b.emp_id
    WHERE b.emp_id = '$empID'");

    $prof = mysqli_fetch_assoc($selProf);
?>