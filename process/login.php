<?php
    session_start();
    include('../includeDB/profDB.php');

    if(isset($_POST['loginBtn'])){
        $user = $_POST['uname'];
        $pass = $_POST['pass'];

        $selProf = mysqli_query($profConnection, "SELECT * FROM `professor_account` WHERE emp_id = '$user' AND password = '$pass' ");
        $result = mysqli_fetch_assoc($selProf);

        if (mysqli_num_rows($selProf) == 1){
            $_SESSION['empID'] = $result['emp_id'];
            //echo $_SESSION['empID'];
            header("location:../Professor/profInterface.php");
        }
    }
?>