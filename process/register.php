<?php

    include('../includeDB/hrDB.php'); //hrConnection
    include('../includeDB/profDB.php'); //profConnection


    if(isset($_POST['regBtn'])){
        $empID = $_POST['empId'];
        $empEmail = $_POST['email'];

        $selHr = mysqli_query($hrConnection, "SELECT * FROM `faculty_list` WHERE employee_id = '$empID' AND email = '$empEmail';
        ");

        $result = mysqli_fetch_assoc($selHr);

        if(mysqli_num_rows($selHr) == 1){
            $empIdAccount = $result['employee_id'];  
            $empPass = $result['password'];

            $insProf = mysqli_query($profConnection, "INSERT INTO `professor_account`(`emp_id`, `password`) VALUES ('$empIdAccount','$empPass')");
        }
    }

?>