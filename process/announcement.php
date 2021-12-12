<?php
    session_start();
    date_default_timezone_set("Singapore");
    include('../include/db.php');
    $empID = $_SESSION['empID'];

    $dateNow = date("m-d-y");
    $timeNow = date("h:i:sa");

    $selProfInfo = mysqli_query($profConn, "SELECT * FROM `personal_info` WHERE emp_id = '$empID'");
    $profInfo = mysqli_fetch_assoc($selProfInfo);
    $lname = $profInfo['LNAME'];
    echo $lname;

    if(isset($_POST['announceBtn'])){
        $announce = $_POST['announcement'];
        echo $announce;

        $ins = mysqli_query($profConn, 'INSERT INTO `announce` (`empid`, `lastname`, `announcement`, `date`, `time`) VALUES ("'.$empID.'", "'.$lname.'" ,"'.$announce.'", "'.$dateNow.'", "'.$timeNow.'")');

        if($ins){
            header("location:../Professor/profAnnouncement.php?Inserted Successfuly");
        }
        else{
            error_log($selProfInfo);
        }
        
    }

?>