<?php
    session_start();
    include('../includeDB/profDB.php');
    include('../includeDB/hrDB.php');
    $empID = $_SESSION['empID'];

    $dateNow = date("m-d-y");
    echo $empID;

    if(isset($_POST['announceBtn'])){
        $announce = $_POST['announcement'];

        $ins = mysqli_query($profConnection, 'INSERT INTO `announce` (`empid`, `announcement`, `date`) VALUES ("'.$empID.'", "'.$announce.'", "'.$dateNow.'")');

        if($ins){
            header("location:../Professor/profAnnouncement.php?Inserted Successfuly");
        }
        else{
            echo error_log($profConnection);
        }
        
    }

?>