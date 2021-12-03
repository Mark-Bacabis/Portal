<?php
    session_start();
    include('../include/db.php');


    $password = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$'), 0, 16);

    if(isset($_POST['regBtn'])){
        $empID = $_POST['empId'];
        $empEmail = $_POST['email'];

        $selHr = mysqli_query($hrConn, "SELECT * FROM `tblemployees` WHERE EMPLOYEEID = '$empID' AND EMAILADDRESS = '$empEmail';
        ");

        $result = mysqli_fetch_assoc($selHr);

        if(mysqli_num_rows($selHr) == 1){
            $empIdAccount = $result['EMPLOYEEID'];
            $email = $result['EMAILADDRESS'];
            $fname = $result['FNAME'];
            $lname = $result['LNAME'];
            $fullname = $lname .', '. $fname;

            echo "$empIdAccount: $fullname <br>";
            echo "email: $email <br> password: $password \n\r";
            

            $empPass = $password;
            $_SESSION['pass'] = $empPass;
            $_SESSION['email'] = $email;
            $_SESSION['lname'] = $lname;


            $insProf = mysqli_query($profConn, "INSERT INTO `professor_account`
            (`emp_id`, `password`, `email`, `fullname`, `profile`) 
            VALUES 
            ('$empIdAccount','$empPass','$email','$fullname','user.png')");

            if($insProf){
                header("location:mail.php");
                
                //echo "Registered successfuly";
            }
            else{
                error_log($profConn);   
            }
        }
    }

?>