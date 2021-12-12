<?php
    session_start();
    include('../include/db.php');


    $password = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$'), 0, 16);

    if(isset($_POST['regBtn'])){
        $empID = $_POST['empId'];
        $empEmail = $_POST['email'];

        $selHr = mysqli_query($profConn, "SELECT * FROM `professor_contact` as pc 
        JOIN `personal_info` as pf
        ON pc.emp_id = pf.emp_id
        WHERE pc.`emp_id` = '$empID' AND pc.`school_email` = '$empEmail' ");

        $result = mysqli_fetch_assoc($selHr);

        if(mysqli_num_rows($selHr) == 1) {
            $empIdAccount = $result['emp_id'];
            $email = $result['school_email'];
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
              header("location:mail.php"); //naka comment yung email.php dito lahat mangyayare yung pag send ng email
                
                //echo "Registered successfuly";
            }
            else{
                error_log($profConn);   
            }
        }
    }

?>