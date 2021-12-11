<?php
    session_start();
    include('../include/db.php');

    if(isset($_POST['loginBtn'])){
        $user = $_POST['uname'];
        $pass = $_POST['pass'];

        
        $selProf = mysqli_query($profConn, "SELECT * FROM `professor_account` WHERE `emp_id` = '$user' AND `password` = '$pass' ");
        
        $result = mysqli_fetch_assoc($selProf);

       if(mysqli_num_rows($selProf) == 1){
            $_SESSION['empID'] = $result['emp_id'];
            header('location: ../Professor/profInterface.php');
       }
       else if(mysqli_num_rows($selProf) < 1) {
            $_SESSION['messlogin'] = '<span style="color:#fff; background:crimson; padding: 3px 10px; margin-top: 10px;"> Wrong Password! </span>';
            header("location: ../Professor/profLogin.php?");
       }
    }
?>