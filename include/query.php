<?php
    include('../includeDB/hrDB.php');

    // SELECT ALL INFORMATION ABOUT PROFESSOR WHO SIGNED IN
    $selProf = mysqli_query($hrConnection, "SELECT * FROM `faculty_list` WHERE employee_id = '$' ")
?>