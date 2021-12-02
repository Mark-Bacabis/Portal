<?php
    session_start();
    date_default_timezone_set("Singapore");
    include('../includeDB/profDB.php');
    include('../includeDB/hrDB.php');
    $empID = $_SESSION['empID'];

    $dateNow = date("m-d-y");
    $timeNow = date("h:i:sa");

    $selProfInfo = mysqli_query($hrConnection, "SELECT * FROM `faculty_list` WHERE employee_id = '$empID'");
    $profInfo = mysqli_fetch_assoc($selProfInfo);
    $lname = $profInfo['lastname'];
    echo $lname;

    if(isset($_POST['announceBtn'])){
        $announce = $_POST['announcement'];

        $ins = mysqli_query($profConnection, 'INSERT INTO `announce` (`empid`,`lastname`, `announcement`, `date`, `time`) VALUES ("'.$empID.'", "'.$lname.'" ,"'.$announce.'", "'.$dateNow.'", "'.$timeNow.'")');

        if($ins){
            header("location:../Professor/profAnnouncement.php?Inserted Successfuly");
        }
        else{
            echo error_log($ins);
        }
        
    }

?>